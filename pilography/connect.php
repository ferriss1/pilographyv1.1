<?php
    //database connection
    $connection= mysqli_connect('localhost','root','','book_db');
    if($connection->connect_error){
        die('Connection Failed: :' .$connection->connect_error);
    }

    if(isset($_POST['send'])){
        $name = $_POST['firstname'];
        $email = $_POST['emailname'];
        $phoneno = $_POST['phoneno'];
        $daten = $_POST['daten'];
        $timen = $_POST['timen'];
        $request = "insert into book_form(firstname, emailname, phoneno,daten,timen) values('$name','$email','$phoneno','$daten','$timen')";

        mysqli_query($connection, $request);

        header('location:index.html');

    }else{
        echo 'something went wrong try again';
    }

?>
