<?php

session_start();

if(isset($_POST['submit'])){
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    echo $myusername."<br>";
    echo $mypassword;

loginUser($myusername, $mypassword);


}

$filename= "./users.csv";
    
    $file =fopen($filename, "w");

    
    

function loginUser($myusername, $mypassword){
    echo $myusername."<br>";
    echo $mypassword;


    if ($_POST ["username"] == $myusername && $_POST["password"]==$mypassword){
$_SESSION ["username"]=$myusername;
echo "Welcome" .$_SESSION ["username"];}

else{
    echo "Hi {$myusername}\n your username {$myusername}\n  and password \nis incorrect";
}
}

        
    
   
        fclose($file)

        ?>
 
    





    /*



        Finish this function to check if username and password 
    from file match that which is passed from the form
    */


//echo "HANDLE THIS PAGE";

