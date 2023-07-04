<?php

    $con = mysqli_connect('localhost', 'root', '', 'maindb');
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $first_name = $_POST["firstname"];
        $last_name = $_POST["lastname"];
        $dateofbirth = $_POST["dob"];
        $email = $_POST["mail"];
        $number = $_POST["phoneNumber"];
        $password = $_POST["password"];
        $prov = $_POST["province"];
        $city = $_POST["city"];
        $add1 = $_POST["streetAddress"];
        $add2 = $_POST["streetAddress2"];
        $zcode = $_POST["zipcode"];
        $worktype = $_POST["workType"];
        $gender = $_POST["gender"];



        $sql = "INSERT INTO registration (firstname, lastname, birthdate, email, phone_number, password, province, city, address1, address2, zipcode, worktype, gender) 
        VALUES ('$first_name', '$last_name', '$dateofbirth', '$email', '$number', '$password', '$prov', '$city', '$add1', '$add2', 'zcode', '$worktype', '$gender')";

        if (mysqli_query($con, $sql)) {
            echo "REGISTRATION SUCCESSFUL!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);
    }
    ?>