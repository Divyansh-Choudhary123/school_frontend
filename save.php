<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "webcoding";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    echo"not connected";
}
// else{
//     echo"connected";
// }
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];

$sql = "INSERT INTO `test`(`Name`, `Email`, `Subject`, `Massage`) 
VALUES ('$name','$email','$subject','$massage')";

if($result){
    echo 'data submit'
}
else{
echo 'failed'
}
?>
