<?php

    include_once '../dbconfig.php';
    require '../validation.php';



    $employee_code_name = $employee_code_domain = $employee_code="";

    $employee_code_name_error = $employee_code_domain_error = $employee_code_err="";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["empname"])) {
            $employee_code_name_error = "Your Employee name is required";
         }else {
            $employee_code_name = test_input($_POST["empname"]);
            $employee_code_name = $conn->real_escape_string($employee_code_name);
         }
         if (empty($_POST["empdomain"])) {
            $employee_code_domain_error = "Your Domain is required";
         }else {
            $employee_code_domain = test_input($_POST["empdomain"]);
            $employee_code_domain = $conn->real_escape_string($employee_code_domain);
         }
         if (empty($_POST["empcode"])) {
            $employee_code_error = "Your Employee Code is required";
         }else {
            $employee_code = test_input($_POST["empcode"]);
            $employee_code = $conn->real_escape_string($employee_code);
         }
    }
    if($employee_code_domain_error != null || $employee_code_name_error != null)
    {
        echo "Error in given data";
    } else {
        $sql_insert_data = "INSERT INTO employee_code_table  VALUES('$employee_code','$employee_code_name', '$employee_code_domain')";
        if($conn->query($sql_insert_data) == TRUE)
        {
            echo '<script language="javascript">';
            echo 'alert("Record Successfully created")';
            echo '</script>';
            header( "Refresh:0; url=../show_table.php");
        } else {
            echo "$conn->error";
        }
    }

?>