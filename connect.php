<?php
$name=filter_input(INPUT_POST,'name');
$email=filter_input(INPUT_POST,'email');
$subject=filter_input(INPUT_POST,'subject');
$message=filter_input(INPUT_POST,'message');
if(!empty($name)){
if(!empty($email)){
if(!empty($subject)){
if(!empty($message)){
    $host ="localhost";
    $dbusername ="root";
    $dbpassword ="";
    $dbname ="personal";

    $conn =new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('Connecction Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }
    else{
        $sql="INSERT INTO registration ( name,email,subject,message) 
        values('$name','$email','$subject','$message')";
        if($conn->query($sql)){
            echo "information saved successfully";
        }
        else{
            echo "Error :".$sql ."<br>". $conn->error;
        }
        $conn->close();
    }

}
else{
    echo "message should not be empty";
}
}
else{
    echo "suject should not be empty";
}
}
else{
    echo "email should not be empty";

}

}
else{
    echo "user name should not be empty";
    die();
    
}
?>