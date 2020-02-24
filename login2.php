 <?php
session_start();
require 'config.php';
$con = new dbConn();

if(isset($_POST["regme"])) 
{
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $pass = $_POST["pass"];
    
    if($name != '' && $mail != '' && $pass != '') {     
       $con->insert($name, $mail, $pass);
    } else {
        echo "<script>
            alert('Please type all Relevant fields !!');
           window.location.href='http://localhost/Magebit/index.php';
           </script>"; 
    }  
}

if(isset($_POST["login"])) 
{
    $mai = $_POST["email"];
    $pas = $_POST["pass"];
    
    if($mai != '' && $pas != '') {
        $con->login($mai, $pas);
    } else {
        echo "<script>
            alert('Please type all Relevant fields !!');
           window.location.href='http://localhost/Magebit/index.php';
           </script>"; 
    }
    
}
if(isset($_POST["profile"])) 
{
$age3 = $_POST["age"];
$city = $_POST["city"];
$number = $_POST["number"];
$gender = $_POST["gender"];
$ndata = $_SESSION["data"];

    $con->updata($ndata, $age3, $gender, $city, $number);
} else {
    echo "<script>
            alert('😊 Please Login & Update 😊');
           window.location.href='http://localhost/Magebit/View/Welcome.php';
           </script>";
}
