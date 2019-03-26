<!DOCTYPE HTML5>
<html>
<head>
	<title>MakanMOU</title>
  <link rel="stylesheet" type="text/css" href="css/template.css">
  <!-- This website is gonna be minimalist  -->
    <div class = "navbarWrap">
		  <div class = "container1">
		  	<a id = "home" href="">Home</a>
		    <!-- ^Replace with logo -->
		    <a href="">Sign Up</a>
		    <!-- Do I really need an about page ? -->
		    <a href="">Menu</a>
		    <!-- I want this Menu to do a drop down list -->
		    <a href="">MyAcc</a>
		    <!-- This should be the same for either users or vendor -->
		  </div>
		  <div class = "container2">
		  	<p id = "welcomeText" ></p>
		  </div>
		  <div class = "container3">
		  <a id = "topRightButton"class = "logout" href = "javascript:openForm()"></a>
      </div>


      <!-- I want this to be only be shown if not logged in -->
    </div>
    <div class = "filter2" id = "filter">
      <div class = "popupFormWrap">
        <form class = "popupForm"  method = "post" action = "">
          <p>Username</p>
          <input type = "text" name = "username" placeholder="Enter Username" required>
          <input type = "password" name = "password" placeholder="Enter Password" required>
          <div class = "loginButtonPanel">
            <input type = "submit" value = "Login"/>
            <input type = "button" value = "Close" onclick = "closeForm();"/>
          </div>
          <a class = "navbarWrap" id = "forgotPass" href="">Forgot Your Password</a>
        </form>
      </div>
    </div>
</head>
<body></body>
<script>
  function openForm(){
    // document.getElementById("filter").style.opacity = 1;
    document.getElementById("filter").className = "filter3";
    document.getElementById("topRightButton").className = "logout2";
  }
  function closeForm(){
    // document.getElementById("filter").style.opacity = 0;
    document.getElementById("filter").className = "filter2";
    document.getElementById("topRightButton").className = "logout";
  }
  function checkLogin(){
  	<?php
  		if(isset($_SESSION['success'])){
  			$checkLoggedIn = $_SESSION['success'];
  			if(isset($_SESSION['userID'])){$userID = $_SESSION['userID'];}
  		}
  	?>
  	var checkLoggedIn = "<?php if(isset($checkLoggedIn)){echo $checkLoggedIn;}else{/*This is the default case*/echo 'false';}?>";
  	if(checkLoggedIn == true){
  		var user = "<?php if(isset($userID)){echo $userID;}else{ echo 'default';} ?>";
  		document.getElementById("topRightButton").text = "LogOut";
  		document.getElementById("topRightButton").href = "index.php?action=logout";
  		document.getElementById("welcomeText").innerHTML = "Welcome, "+user;
  	}else{
  		document.getElementById("topRightButton").text = "LogIn";
  		document.getElementById("topRightButton").href = "javascript:openForm()";
  		document.getElementById("welcomeText").innerHTML = "";
  	}
  }

</script>

</html>
