<?php
function logout(){
   if($_SESSION){
    session_destroy();
    header("location:../forms/login.html");
   }
   else{
    header("location:../forms/login.html?error=You are not logged in");
   }
}

logout();
?>