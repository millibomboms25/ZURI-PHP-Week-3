<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){}


$userData =$_POST;

$filename= "./users.csv";

$file =fopen($filename, "w");


if($filename){
    echo "FILE IS OPEN...";
    
}
else {
echo "FILE COULD NOT OPEN..."; 
};

fputcsv ($file, $userData);

/* if ($file, $userData){
    
    echo "OKAY.";
    
}
else {
echo "Try Again..."; 
};
   */ 

fclose($file)

    //save data into the file
    
    // echo "OKAY";

//echo "HANDLE THIS PAGE";


?>