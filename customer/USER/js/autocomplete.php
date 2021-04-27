<?php
    $connection = mysqli_connect("localhost","root","","test") or die("Error " . mysqli_error($connection));

    //fetch department names from the department table
    $sql = "select Last_Name from Teachers";
    $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

    $dname_list = array();
    while($row = mysqli_fetch_array($result))
    {
        $dname_list[] = $row['Last_Name'];
    }
    echo json_encode($dname_list);
?>