<!DOCTYPE html>
<html lang="en">
<head>
  <title>Magebit Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/sam.css">
  </head>
<body> 
<video autoplay muted loop id="myVideo">
  <source src="css/images/video.mp4" type="video/mp4">
  Your browser does not support HTML5 video. </video>
 <div class="con3">
  <div class="card-group">
    <div class="card" id="cb1">
      <div class="card-body" id="la2">
        <h9>Have an Account?</h9><hr>
		      <p3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem recusandae soluta.</p3>
      </div>
	  <button class="btn btn4" id="Right">Login</button>
    </div>
    <div class="card" id="cb2">
      <div class="card-body" id="la2">
        <h9>Don't have an account?</h9><hr>
         <p3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime exercitationem recusandae soluta.</p3>
	  <button class="btn btn3" id="Left">Sign Up</button>
	  </div>
    </div>
	</div>
	</div>
 <div class="container-fluid">
   <div class="card-container1" id="sam1">
    <div class="card" id="left">
      <div class="card-body text-center">
	  <div class="cntainr3">
	  <div class="cntainr3_text"><p2>Login</p2></div> 
	  <img class = "cntainr3_img"  src = "css\images\logo.png" height="30"/> </div>
     <hr>	 
<div class="form-group" id="inform">	 
    <form action="http://localhost/Magebit/Control/login2.php" method="POST">
	  <div class="cntainr3">
	  <div class="cnm">Email<sup>*</sup></div> 
	  <img class = "cntainr3_img"  src = "css\images\ic_mail.png" height="13"/> </div>
	  <input class="input999" type="text" name="email" placeholder=" ">
	<span class="focus-input999"></span>
	  <div class="cntainr3">
	  <div class="cnp">Password<sup>*</sup></div> 
	  <img class = "cntainr3_img"  src = "css\images\ic_lock.png" height="15"/> </div>
	  <input class="input999" type="password" name="pass" placeholder=" ">
	<span class="focus-input999"></span>
	<div class="cntainr3">
            <button type="submit" class="btn btn-warning" name="login">Login</button> </div>
		<div class="cntainr4">
                    <a href="http://localhost:/Magebit/Control/forgot.php" class="forget" >Forgot?</a></div>
	  	</form>
	     </div>
		</div>
    </div>
	</div>
	<div class="card-container2" id="sam2">
    <div class="card" id="right">
      <div class="card-body text-center">
			<div class="cntainr5">
	  <div class="cntainr3_text"><p2>Sign Up</p2></div> 
	  <img class = "cntainr3_img"  src = "css\images\logo.png" height="30"/> </div>
     <hr>	 
			<div class="form-group" id="upform">
                            <form action="http://localhost:/Magebit/Control/login2.php" method="POST">
		   <div class="cntainr6">
	  <div class="cnm">Name<sup>*</sup></div> 
	  <img class = "cntainr3_img"  src = "css\images\ic_user.png" height="15"/> </div>
	  <input class="input999" type="text" name="name" placeholder=" ">
	  <div class="cntainr6">
	  <div class="cnm">Email<sup>*</sup></div> 
	  <img class = "cntainr3_img"  src = "css\images\ic_mail.png" height="13"/> </div>
	  <input class="input999" type="text" name="email" placeholder=" ">
						<span class="focus-input999"></span>
	  <div class="cntainr6">
	  <div class="cnp">Password<sup>*</sup></div> 
	  <img class = "cntainr3_img"  src = "css\images\ic_lock.png" height="15"/> </div>
	  <input class="input999" type="password" name="pass" placeholder=" ">
						<span class="focus-input999"></span>
						<div class="cntainr3">
						<button type="submit" class="btn btn-warning" name="regme">Sign Up</button> </div>
	  				 </form>
            </div>
      </div>
    </div> 
    </div>	
	</div>
	<div class="footer">
<footer> All CopyRights Reserved "Mazebit" 2020 </footer>
</div>
	<script src= "js/sam.js"></script>
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

</body>
</html>
