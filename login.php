<?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if(!empty($username)){
        if(!empty($password)){
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "test";

            //create connection
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

            if(mysqli_connect_error()){
                die("Connection Error");
            }else{
                $sql = "insert into login (username,password) values('$username','$password')";
                if($conn->query($sql)){
                    echo "Data submitted successfully.";
                }else{
                    echo "Data is not submitted successfully.";
                }
                $conn->close();
            }
        }else{
            echo("Password should not be empty.");
        }
    }
    else{
        echo("Username should not be empty.");
        die();
    }
?>