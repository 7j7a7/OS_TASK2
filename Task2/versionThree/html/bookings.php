<?php
//connect to database
$conn= mysqli_connect("localhost","root","","zoo_users");

//hotel bookings form data
//uses confirm booking button to get form data
if(isset($_POST["btnArrow1"])){
    $arrival_date= $_POST["datepicker1"]; //arrival date
    $checkout_date= $_POST["datepicker2"]; //check out date
    $room_type= $_POST["inlineRadioOptions"]; //both radio buttons are selected with the same name
    $rooms= $_POST["registerPassword"]; //number of rooms



    //using SHA1 function on password to encrypt data
    $query = "INSERT INTO hotel_bookings VALUES('', '$arrival_date' ,'$checkout_date' ,'$room_type' ,'$rooms',)"; 
    mysqli_query($conn, $query);
    
    //debugging message to confirm data is inserted
    echo
    "
    <script>
    alert('DATA INSERTED INTO hotel_bookings table :D');
    </script>
    ";


    //debugging message as i had a few previous connection problems
    // if(mysqli_query($conn, $query)) {
    //     echo "<script>alert('DATA INSERTED INTO users table :D');</script>";
    // } else {
    //     echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    // }
}


//tickets booking form data
//uses confirm booking button to get form data
if(isset($_POST["btnArrow2"])){
    $date= $_POST["ticket_date1"]; //date the tickets are booked for
    $adult_tickets= $_POST["adult_tickets"]; // number of adult tickets
    $child_tickets= $_POST["adult_tickets"]; //number of child tickets


    $query = "INSERT INTO tickets_bookings VALUES('', '$date' ,'$adult_tickets' ,'$child_tickets',)"; 
    mysqli_query($conn, $query);
    //debugging message to confirm data is inserted
    echo
    "
    <script>
    alert('DATA INSERTED INTO tickets_bookings table :D');
    </script>
    ";
}
?>
