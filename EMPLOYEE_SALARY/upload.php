<?php

    include_once '../dbconfig.php';
    require '../validation.php';



    $employee_code_name = $employee_code_domain = "";

    $employee_code_name_error = $employee_code_domain_error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["empname"])) {
            $employee_code_name_error = "Your Employee name is required";
         }else {
            $employee_code_name = test_input($_POST["empname"]);
         }
         if (empty($_POST["empdomain"])) {
            $employee_code_domain_error = "Your Domain is required";
         }else {
            $employee_code_domain = test_input($_POST["empdomain"]);
         }
    }
    if($employee_code_domain_error != null || $employee_code_name_error != null)
    {
        echo "Error in given data";
    } else {
        $sql_insert_data = "INSERT INTO employee_code_table VALUES('jkasfghfhgdsdd', '$employee_code_name', '$employee_code_domain')";
        if($conn->query($sql_insert_data) == TRUE)
        {
            echo '<script language="javascript">';
            echo 'alert("Record Successfully created")';
            echo '</script>';
            header( "Refresh:0; url=./show_table.php");
        } else {
            echo '<script language="javascript">';
            echo 'alert("Record not created")';
            echo '</script>';
            header( "Refresh:0; url=./index.html");
        }
    }

?>