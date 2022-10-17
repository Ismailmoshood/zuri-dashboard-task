<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password =$_POST['password']; 

loginUser($email, $password);

}
session_start();
function loginUser($email, $password){
    $file = fopen("../storage/users.csv", "r");
    while($data = fgetcsv($file)){
        if($data[1] == $email && $data[2] == $password){
            $_SESSION['username'] = $data[0];
            // redirect to dashboard
            header("location: ../dashboard.php");
            exit();
        }elseif($data[1] == $email && $data[2] != $password){
            echo "wrong password";
            exit();
        }else{
            // redirect to login page
            header("location: ../forms/login.html");
            exit();
        }
    }
    
}



