<?php
//enquiry form data

$conn= mysqli_connect("localhost","root","","zoo_users");
//uses sign in button to get form data
if(isset($_POST["register-submit"])){
    $name= $_POST["registerName"]; //name
    $email= $_POST["registerEmail"]; //email
    $password= $_POST["registerPassword"]; //password


    //using SHA1 function on password to encrypt data
    $query = "INSERT INTO users VALUES('','$name','$email', (MD5('$password'))"; 
    mysqli_query($conn, $query);
    //debugging message to confirm data is inserted
    echo
    "
    <script>
    alert('DATA INSERTED INTO users table :D');
    </script>
    ";


    //debugging message as i had a few previous connection problems
    // if(mysqli_query($conn, $query)) {
    //     echo "<script>alert('DATA INSERTED INTO users table :D');</script>";
    // } else {
    //     echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    // }
}
?>