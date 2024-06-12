<?php
// echo "hello word";
// $email = $_POST['email'];

// echo $email;

//database connection here

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $username = isset($_POST['text'])?
    $_POST['text'] : '';

    $email = isset($_POST['email'])?
    $_POST['email'] : '';

    $password = isset($_POST['message'])?
    $_POST['message'] : '';

//     echo $username;
//     echo $email;
//     echo $password;


$conn = new mysqli("localhost","root","","register_table");
if($conn->connect_error){
    die("faild to connect : " .$conn->connect_error);
} else{
    // $stmt = $conn->prepare("select * from register_table where username = ?");
    echo "database connection succsess";
}

$stmt=$conn->prepare("INSERT INTO contact_form(text,email,message) VALUES(?, ?, ?)");

$stmt->bind_param("sss",$text,$email,$message);

if($stmt->execute()){
    header('http://localhost/test/#home');
            exit;

    echo"user info store succesfull";
} else{
    echo "error: " .$stmt->error;
   
}
$stmt->close();
}




?>