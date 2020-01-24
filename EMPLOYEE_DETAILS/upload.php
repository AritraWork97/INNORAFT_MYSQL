<?php

    include_once '../dbconfig.php';
    require '../validation.php';

    $empname_value = $empid_value = $emplastname_value = $empmarks_value="";

    $empname_value_error = $empid_value_error = $emplastname_value_error= $empmarks_value_error="";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["empname"])) {
            $empname_value_error = "Your First name is required";
         }else {
            $empname_value = test_input($_POST["empname"]);
         }
         if (empty($_POST["empid"])) {
            $empid_value_error = "Your Employee ID is required";
         }else {
            $empid_value = test_input($_POST["empid"]);
         }
         if (empty($_POST["emplastname"])) {
            $emplastname_value_error = "Your Last name is required";
         }else {
            $emplastname_value = test_input($_POST["emplastname"]);
         }
         if (empty($_POST["graduation_percentile"])) {
            $empmarks_value_error = "Your Graduation Score is required";
         }else {
            $empmarks_value = test_input($_POST["emplastname"]);
         }
    }
    if($empid_value_error != null || $empname_value_error != null || $emplastname_value_error != null || $empmarks_value_error != null)
    {
        echo "Error in given data";
    } else {
        $sql_insert_data = "INSERT INTO employee_details_table VALUES('$empid_value', '$empname_value', '$emplastname_value','$empmarks_value')";
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