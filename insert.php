<?php

    // Insert the content of connection.php file
    include('connection.php');
    
    // Insert data into the database
    if(ISSET($_POST['insertData']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $skills = $_POST['skills'];
        $designation = $_POST['designation'];

        $sql = "INSERT INTO tbl_record(firstname, lastname, address, skills, designation, created_date) VALUES('$firstname', '$lastname', '$address', '$skills', '$designation', NOW())";       
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Data saved."); </script>';
            header('Location: index.php');
        }else{
            echo '<script> alert("Data Not saved."); </script>';
        }
    }
?>