<?Php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="C:\xampp\htdocs\Magebit\css\ud.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: mintcream;
  margin-left: 200px;
  margin-left: 480px;
  margin-top: 189px;
  margin-bottom: 90px;
}
h1 {
    color: turquoise;
    margin-top: -100px;
    text-align: center;
}
h3 {
    letter-spacing: 0.05rem;
    color: turquoise;
    margin-top: -10px;
    font-family: calibri;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
  margin-left: 33px;
}
#logout {
    margin-top: -700px;
    margin-right: 10px;
}
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
#details {
display: none;
  position: fixed;
   margin-top: -365px;
   margin-left: 400px;
   height: 410px;
   width: 370px;
}
#details2 {
display: none;
  position: fixed;
   margin-top: -365px;
   margin-left: -400px;
   height: 410px;
   width: 370px;
}

#btn9 {
  margin-top: 20px;
  text-transform: Uppercase;
  letter-spacing: 0.03rem;
  font-style: bolder;
  color: black;
 background: #F0F8FF;
  font-family: Lucida Console;
  border-radius: 35px;
  font-size: 15px;
  outline-style: none;
  }
#onecard {
     background: linear-gradient(to bottom, #ff3399 0%, #6699ff 100%);
  }
#adj {
     width: 303px;
     align: center;
     margin-left: 15px;
  }
p {
    margin-top: 22px;
    line-height:  30px;
}
#p6 {
    margin-top: 9px;
}
.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #20B2AA;
  color: white;
  transform: rotateY(180deg);
 
}
.content {
  position: fixed; 
  margin-top: -20px;
}
</style>
</head>
<body>
    <video autoplay muted loop id="myVideo">
  <source src="images/bgmg.mp4" type="video/mp4">
  Your browser does not support HTML5 video. </video>
<div class="content">
    <h1> Hey <?php echo ''.$_SESSION["data"];?> </h1>
<h3 align="center">MAGEBIT  &nbsp Ψelcomes <br> U</h3>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
    </div>
    <div class="flip-card-back" id="sam3">     
      <p>I think u r quite a human</p>  
      <p>Now let's know more about <br> U</p>
      <button class="button button1" id="flip">Add Details</button>
    </div>
  </div>
</div>
<div class="container7">
  <div class="card-deck" id="details">
    <div class="card info" id="onecard">
      <div class="card-body text-center" id="adj">
        <p class="card-text" id="p6">Add/Update Info</p>
        <form action="http://localhost/Magebit/Control/login2.php" method="POST">
  <div class="form-group">
    <input type="text" class="form-control" name="age" placeholder="Age">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="city" placeholder="City">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="number" placeholder="Phone">
  </div>
            <select class="custom-select custom-select-sm" name="gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Unspecified">Rather not Say</option>
</select>
            <button class="button button1" id="btn9" name="profile">Update Profile</button>
</form>
      </div>
    </div>
    </div>
	<div class="card-deck" id="details2">
  <div class="card info" id="onecard">
      <div class="card-body text-center">
        <p class="card-text" id="p6">Update Photo</p>
        <form action="submit2.php" method="POST">      
  <div class="file-field">
    <div class="mb-4">
      <img src="images/avatar.png" height= "130px"
        class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
    </div>
    <div class="d-flex justify-content-center">
      <div class="btn btn-mdb-color btn-rounded float-left">
        <input type="file">
      </div>
    </div>
  </div>
    <button class="button button1" id="btn9">Update Profile</button> 
</form>
</div>
</div>
</div> 
</div>
<a href="http://localhost/Magebit/Control/logout.php" id="logout">Logout</a> 
<script> 
$('#flip').click(function(){
   $("#details").show(777);
   $("#details2").show(777);
});
</script>
</body>
</html>

