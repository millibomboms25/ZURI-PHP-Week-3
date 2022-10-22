<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];//complete this;
    $newpassword = $_POST['new password']; //complete this;

    


    resetPassword($email, $password);
}

function resetPassword($email, $password){


    $filename= "./users.csv";
    
    $file =fopen($filename, "w");

    while($row=fgetcsv($file))
    if($row[1]==$email){
        echo "User already exists";}
        else{
            echo " User does not exist";
        }
        exit();
    }
    
    fclose($file)


    //open file and check if the username exist inside
    //if it does, replace the password
 
//echo "HANDLE THIS PAGE";

?>
