<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $emailaddress = $_POST['emailaddress'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    echo "<td>First Name</td>";
    echo "<td>".$firstname."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Last Name</td>";
    echo "<td>".$lastname."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Address</td>";
    echo "<td>".$address."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Email Address</td>";
    echo "<td>" .$emailaddress."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Password</td>";
    echo "<td>".$password."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Gender</td>";
    echo "<td>".$gender."</td>";
    echo "</tr>";
    echo "</table>";
?>
