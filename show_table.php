<html>
    <head>

    </head>
    <body>

    </body>
    <link rel="stylesheet" type="text/css" href="./style.css">
</html>




<?php

    include_once './dbconfig.php';

    $sql_empdetails = "SELECT * FROM employee_details_table";
    if($result = $conn->query($sql_empdetails)){
            if(mysqli_num_rows($result) > 0){
                echo "<table class='paleBlueRows'>";
                    echo "<tr>";
                        echo "<th>employee_id</th>";
                        echo "<th>employee_first_name</th>";
                        echo "<th>employee_last_name</th>";
                        echo "<th>graduation_percentile</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['employee_id'] . "</td>";
                                echo "<td>" . $row['employee_first_name'] . "</td>";
                                echo "<td>" . $row['employee_last_name'] . "</td>";
                                echo "<td>" . $row['graduation_percentile'] . "</td>";
                            echo "</tr>";
                    }
                    echo "</table>";
                    mysqli_free_result($result);
                } else {
            echo "No records matching your query were found.";
            }
    } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }



    $sql_empcode = "SELECT * FROM employee_code_table";
    if($result = $conn->query($sql_empcode)){
            if(mysqli_num_rows($result) > 0){
                echo "<table class='paleBlueRows'>";
                    echo "<tr>";
                        echo "<th>employee_code</th>";
                        echo "<th>employee_code_name</th>";
                        echo "<th>employee_domain</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['employee_code'] . "</td>";
                                echo "<td>" . $row['employee_code_name'] . "</td>";
                                echo "<td>" . $row['employee_domain'] . "</td>";
                            echo "</tr>";
                     }
                     echo "</table>";
                     mysqli_free_result($result);
                } else {
            echo "No records matching your query were found.";
            }
    } else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>