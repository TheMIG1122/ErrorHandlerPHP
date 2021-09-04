<?php
/*
    Erorr Handler
    https://www.youtube.com/watch?v=8otFp9yXA5E
*/

// Function to overwrite error handler
function my_error($error_number, $error_text, $filename, $line_number)
{
    // Storing Errors in File
    $date = date("Y-m-d");

    $error_string = $error_number . ":" . $error_text . " in" . $filename . " at line " . $line_number . "\n";
    file_put_contents("logs/" . $date . ".txt", $error_string,FILE_APPEND);
}


// Method 01
// error_reporting(0);
// set_error_handler("my_error");

// Method 02
// ini_set("display_errors",0);
// ini_set("log_errors",1);
// ini_set("error_log","logs/error_log.txt");


// Some Tests
// include 'go.php';
// echo $_GET['he'];
// my_function();

?>