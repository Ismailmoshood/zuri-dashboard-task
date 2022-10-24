<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $newpassword = $_POST['password'];

    resetPassword($email, $newpassword);
}

function resetPassword($email, $newpassword){
    $info = "$newpassword";
    $file = fopen("../storage/users.csv", "a+");
    while($data = fgetcsv($file)){
        // check if user exists
        if($data[1] == $email ){
            $data[2] = $newpassword;
            // echo "password reset succesful";
            exit();
        }elseif($data[1] != $email){
            echo "User Does Not Exist";
            exit();
      }else{
        echo "Unable to reset password";
          }
}
fclose($file);
}
$file = fopen("../storage/users.csv", "a+");
while($data = fgetcsv($file)){
    if($data[2] == $newpassword ){
        echo "password reset succesful";
    }else{
        echo "password reset unsuccesful";
    }
}