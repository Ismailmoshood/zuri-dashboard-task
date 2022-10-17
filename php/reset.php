<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    $info = [$newpassword];
    $file = fopen("../storage/users.csv", "a+");
    while($data = fgetcsv($file)){
        // check if user exists
        if($data[1] == $email ){
            unset($data[1]);
            //  fputcsv($file,$info);
            exit();
        }elseif($data[1] != $email){
            echo "User Does Not Exist";
            exit();
      }else{
        echo "Unable to reset password";
          }
    //open file and check if the username exist inside
    //if it does, replace the password
}
}

