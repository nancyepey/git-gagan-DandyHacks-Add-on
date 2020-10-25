<?php
    include "config.php";
    // to check if email already exits
    function email_exists($email) {

        global $conn;

        $query = "SELECT email FROM contact WHERE email == '$email'";
        $result = mysqli_query($conn, $query);
        confirmQuery($result);

        if(mysqli_num_rows($result) > 0) {
            return true;
        } else {
            return false;
        }

    }

    // confirm the query was successful
    function confirmQuery($result) {
        global $conn;
        if(!$result) {
            die("QUERY FAILED ." . mysqli_error($conn));
        }
    }

    //to contact
    function storeContact($firstname, $lastname, $country, $email) {
        global $conn;
        $query = "INSERT INTO contact(fname, lname, country, email) VALUES('{$firstname}', '{$lastname}','{$country}','{$email}')";
        $queryContact = mysqli_query($conn, $query);
        confirmQuery($queryContact);
        // $insert_id = mysqli_insert_id($conn);
        // if(!empty($insert_id)) {
        // $message = "Your contact information is saved successfully";
        // }   
    }

?>