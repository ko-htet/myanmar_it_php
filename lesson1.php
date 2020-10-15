<?php
    echo "Hello PHP";
    echo "<h4>var_dump</h4>";
    var_dump("Hello PHP");
    echo "<hr>";

    $name = "Han Min Htet";
	$address = "Yangon";
	echo $name."<br>";
	echo "I am $name. <br>";
	echo 'I am $name. <br>';
    echo 'I am '.$name.'. <br>';
    echo "<hr>";

    echo "<h4>Trim</h4>";
	$name1 = '     Ko Ko  ';
	$trim_name1 = trim($name1);
    var_dump($name1);
    echo "<br>";
	var_dump($trim_name1);

    echo "<h4>strlen</h4>";
	echo strlen($name1)."<br>";
	echo strlen($trim_name1)."<hr>";

    echo "<h4>strcasecmp</h4>";
	echo strcasecmp("Hello World!", "HELLO WORLD!")."<br>";
	echo strcasecmp("Hello World!", "Hello")."<br>";
	echo strcasecmp("Hello World!", "HELLO WORLD! HELLO!");
	echo "<hr>";

    echo "<h4>strtolower and strtoupper</h4>";
	echo strtolower("HELLO woRld")."<br>";
	echo strtoupper("hello world");
	echo "<hr>";

    echo "<h4>substr</h4>";
	echo substr("Hello World", 6);
	echo "<br>";
    echo substr("Hello World", -2);
    echo "<hr>";

    echo "<h4>str_replace</h4>";
	echo str_replace("Bootcampers", "Batch 18 Students", "Hello Bootcampers");
?>