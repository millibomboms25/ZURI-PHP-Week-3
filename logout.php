<?php
session_start();

function logout(){
    echo " You are Logged Out";}

    //function logout();

$SESSION=array();
session_destroy();

if ( isset($_SESSION ["username"])){

header("Location:login.php");
}
else
 {
    echo " Welcome";
};
   

   
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/


//echo "HANDLE THIS PAGE";

?>