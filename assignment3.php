<?php
    $city = array(
        'New York, NY' =>'8,175,133',
        'Los Angeles, CA' =>'3,792,621',
        'Chicago, IL' =>'2,695,598',
        'Houston, TX' =>'2,100,263',
        'Philadelphia, PA' =>'1,526,006',
        'Phoenix, AZ' =>'1,445,632',
        'San Antonio, TX' =>'1,327,407',
        'San Diego, CA' =>'1,307,402',
        'Dallas, TX' =>'1,197,816',
        'San Jose, CA' =>'945,942',
        );
    
    echo "<h2>Total population  in all 10 cities</h2>";
    echo "<table border=1 cellpadding=10px>";
    echo "<tr><th>City</th><th>Population</th>";
    foreach ($city as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    echo "<br><hr>";

    //asort($city);
    echo "<h2>Order by Population</h2>";
    echo "<table border=1 cellpadding=10px>";
    echo "<tr><th>City</th><th>Population</th>";
    foreach ($city  as $key => $value) {
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
    echo "<br><hr>";

    ksort($city);
    echo "<h2>Order by City name</h2>";
    echo "<table border=1 cellpadding=10px>";
    echo "<tr><th>City</th><th>Population</th>";
    foreach ($city  as $pkey => $pvalue) {
        echo "<tr><td>$pkey</td><td>$pvalue</td></tr>";
    }
    echo "</table>";
?>
