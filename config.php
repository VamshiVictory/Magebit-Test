<?php
   
class dbConn {   
    public function _connection() {
        $dbc =  mysqli_connect("localhost", "root", "", 'victor') or die (mysql_errno());
        return $dbc;
    }  
    function insert($fname, $email, $password) 
    {
        $conn = $this->_connection();
        $quer = "INSERT INTO users(fname, email, passwd) VALUES ('$fname', '$email', '$password')" or die(mysql_error());
        $quer2 = "INSERT INTO userdata(mail, name) VALUES ('$email', '$fname')" or die(mysql_error());
       if(mysqli_query($conn, $quer) && mysqli_query($conn, $quer2)) 
      {
        echo "<script>
            alert('😊 Magebit welcomes u onboard Please Login 😊');
           window.location.href='http://localhost/Magebit/index.php';
           </script>";      
        
    } else {
        echo ''.mysqli_error($conn);
    }   
    }
    function updata($ndata, $age, $gender, $city, $phone) {
        $conn4 = $this->_connection();
        $upd = "UPDATE userdata SET age= '$age', gender= '$gender', city= '$city', phone= '$phone' WHERE name = '$ndata'";
        if(mysqli_query($conn4, $upd))
        {
             echo "<script>
            alert('😊 Profile Updated Successfully 😊');
           window.location.href='http://localhost/Magebit/View/Welcome.php';
           </script>";
        }
    }
    
    function login($email, $passwd) {
        $conn3 = $this->_connection();
        $sql2= "SELECT fname FROM users WHERE email = '$email' AND passwd = '$passwd'";
        $cnt = mysqli_query($conn3, $sql2) or die(mysql_error());
        $data = mysqli_fetch_array($cnt);
        $rcnt = $cnt->num_rows;
        
        if($rcnt === 1) 
        {
            $value = $data["fname"];
            $_SESSION["data"] = $value;
            echo "<script>
            alert('😊 Successfully Logged in 😊$value');
           window.location.href='http://localhost/Magebit/View/Welcome.php';
           </script>";
        }
        else {
            echo "<script>
            alert('😢 Wrong Credentials 😢');
           window.location.href='http://localhost/Magebit/index.php';
           </script>";
        }
       
    }
}

