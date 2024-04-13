<?php
    if(isset($_POST['submit'])){
        // Capture form data
        $name = $_POST['Name'];
        $dateOfBirth = $_POST['DateOfBirth'];
        $Place_Of_birth = $_POST['Place Of birth'];
        $religion = $_POST['Religion'];
        $email = $_POST['Email'];
        $Mobile_Number = $_POST['Mobile Number'];
        $occupation = $_POST['Occupation'];
        $gender = $_POST['Gender'];
        $civilStatus = $_POST['CivilStatus'];
        $address = $_POST['Address'];
        $addressType = $_POST['AddressType'];
        $nationality = $_POST['Nationality'];
        $country = $_POST['Country'];
        $city = $_POST['City'];
        $Zip_Code = $_POST['Zip Code'];

        // Display the captured data
        echo "<h2>Submitted Data:</h2>";
        echo "<p>Full Name: $name</p>";
        echo "<p>Date of Birth: $dateOfBirth</p>";
        echo "<p>Place of birth: $Place_Of_birth</p>";
        echo "<p>Religion: $religion</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Mobile Number: $Mobile_Number</p>";
        echo "<p>Occupation: $occupation</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Civil Status: $civilStatus</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Address Type: $addressType</p>";
        echo "<p>Nationality: $nationality</p>";
        echo "<p>Country: $country</p>";
        echo "<p>City: $city</p>";
        echo "<p>Zip Code: $Zip_Code</p>";
    }
    ?>