<?php
    $file = "visitorCount.txt";
    if (file_exists($file))
    {
        $count = (int)file_get_contents($file);

        echo "<h1>Total number of visitors: $count</h1>";
    } 
    else
    {
        echo "<script>alert('File named $file not found !');</script>";
    }
?>