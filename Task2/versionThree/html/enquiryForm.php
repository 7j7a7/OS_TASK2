<?php
//enquiry form data

$conn= mysqli_connect("localhost","root","","zoo_users");
//uses submit button to get form data
if(isset($_POST["submitEnquiry"])){
    $fName= $_POST["fName"]; //first name
    $lName= $_POST["lName"]; // last name
    $email= $_POST["email"]; //email
    $question= $_POST["question"]; //question


    $query = "INSERT INTO enquiry_form VALUES('','$fName', '$lName ', '$email', '$question')";
    mysqli_query($conn, $query);
    //debugging message to confirm data is inserted
    echo
    "
    <script>
    alert('DATA INSERTED INTO DATABASEEEE!!! :D');
    </script>
    ";
}
?>