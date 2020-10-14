<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];

    $profile = $_FILES['profile'];
    //var_dump($profile);

    //uploadfile
    $basepath = 'photo/';
    //upload file htae ka name ko be u te
    $fullpath = $basepath.$profile['name'];
    //profile photo ko photo htae ko move lote / (tmp_name) par u
    move_uploaded_file($profile['tmp_name'], $fullpath);
    
    $student = array(
        "name" => $name,
        "email" => $email,
        "gender" => $gender,
        "address" => $address,
        "profile" => $fullpath
    );
    //var_dump($student);

    //get jsonData from studentlist.json file
    $jsonData = file_get_contents('studentlist.json');

    if(!$jsonData){
        $jsonData = '[]'; //jsonData mar data ma shi yin string array create
    }

    //convert into array form json
    $data_arr = json_decode($jsonData);

    //htae chin tae data ko push lote
    array_push($data_arr, $student);

    //convert into string to json
    $jsonData = json_encode($data_arr, JSON_PRETTY_PRINT);

    //studentlist.php htae ko jsonData htae
    file_put_contents('studentlist.json', $jsonData);

    header ("location:index.php");

?>