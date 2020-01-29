<?php

    include_once '../dbconfig.php';
    require '../validation.php';



    $emp_code = $emp_sal = $emp_id="";

    $emp_sal_error = $emp_code_error = $emp_id_error="";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["empid"])) {
            $emp_id_error = "Your Employee ID is required";
         }else {
            $emp_id = test_input($_POST["empid"]);
            $emp_id = $conn->real_escape_string($emp_id);
         }
         if (empty($_POST["empcode"])) {
            $emp_code_error = "Your Employee Code is required";
         }else {
            $emp_code = test_input($_POST["empcode"]);
            $emp_code = $conn->real_escape_string($emp_code);
         }
         if (empty($_POST["empsal"])) {
            $emp_sal_error = "Your Salary is required";
         }else {
            $emp_sal = test_input($_POST["empsal"]);
            $emp_sal = $conn->real_escape_string($emp_sal);
         }
    }
    if($emp_code_error != null || $emp_sal_error != null || $emp_id_error != null)
    {
        echo "Error in given data";
    } else {
        $sql_insert_data = "INSERT INTO employee_salary_table VALUES('$emp_id', '$emp_code', '$emp_sal')";
        if($conn->query($sql_insert_data) == TRUE)
        {
            echo '<script language="javascript">';
            echo 'alert("Record Successfully created")';
            echo '</script>';
            header( "Refresh:0; url=../show_table.php");
        } else {
            echo '<script language="javascript">';
            echo 'alert("Record not created")';
            echo '</script>';
            header( "Refresh:0; url=./index.html");
        }
    }

?>