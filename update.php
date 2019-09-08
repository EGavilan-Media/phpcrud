<?php

    // Insert the content of connection.php file
    include('connection.php');

    // Update data into the database
    if(ISSET($_POST['updateData']))
    {   
        $id = $_POST['updateId'];
        $firstname = $_POST['updateFirstname'];
        $lastname = $_POST['updateLastname'];
        $address = $_POST['updateAddress'];
        $skills = $_POST['updateSkills'];
        $designation = $_POST['updateDesignation'];

        $sql = "UPDATE tbl_record SET firstname='$firstname',
                                        lastname='$lastname', 
                                        address='$address',
                                        skills=' $skills',
                                        designation = '$designation'
                                        WHERE id='$id'";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script> alert("Data Updated Successfully."); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>