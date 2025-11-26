 <?php
session_start();
include "dbconnect.php"; //connect to database

if ($_SERVER["REQUEST_METHOD"] === "POST"){ //you need an if statement, just in case the creds are wrong}
$username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8'); //get username from form
$password = $_POST['password']; //get password from form
$password = $_POST['password']; //get password from form

//assign $details to the info from the database with the given username
$details = $db->prepare("SELECT uid, password FROM users WHERE username = :username"); 
$details->bindParam(':username', $username); //bind the username to the username
$details->execute(); //run it
$userData = $details->fetch(PDO::FETCH_ASSOC); //fetch the data as an associative array


if($userData && password_verify($password, $userData["password"])) { //Only if the user and pass are right in my db
    $_SESSION['uid'] = $userData['uid']; //set the session variable to the uid from the database
    $_SESSION['username'] = $username; //set the session variable to the username from the database
    $_SESSION['email'] = $userData['email']; 

    header("Location: home.php"); //redirect to home page
    exit(); //exit the script
} else {
    $_SESSION['error'] = "Invalid username or password.";
    header("Location:  loginpage.php"); //redirect to login page 
    exit();
}
}













 ?>