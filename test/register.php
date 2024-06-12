<?php
// echo "hello word";
// $email = $_POST['email'];

// echo $email;

//database connection here

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $username = isset($_POST['username'])?
    $_POST['username'] : '';

    $email = isset($_POST['email'])?
    $_POST['email'] : '';

    $password = isset($_POST['password'])?
    $_POST['password'] : '';

//     echo $username;
//     echo $email;
//     echo $password;


$conn = new mysqli("localhost","root","","register_table");
if($conn->connect_error){
    die("faild to connect : " .$conn->connect_error);
} else{

    echo "database connection succsess";
}

$stmt=$conn->prepare("INSERT INTO register_table(username,email,password) VALUES(?, ?, ?)");

$stmt->bind_param("sss",$username,$email,$password);

if ($stmt->execute()) {
    echo "User info stored successfully<br>";

    // Redirect to the home page after successful registration
    header('Location: http://localhost/test/product.html');
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
}



?> 
