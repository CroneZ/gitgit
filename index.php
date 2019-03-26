<!DOCTYPE HTML5>
<head>
	<title>MakanMOU</title>
  <style>
  body{
    margin:0;
    font-family: sans-serif;
    height: 100%;
    z-index:-1;
    overflow-y:scroll;
  }


  /*==================================================================*/
  /*NavBar Css*/

  .navbarWrap{
    display:flex;
    flex-direction:row;
    background-color: black;
    color: white;
    font-weight: bold;
    font-size: 20px;
    font-family: sans-serif;
    margin:0;
    padding:15px;
    box-shadow: 0px 3px 13px 3px black;
  }
  .container1{
    float:left;
    width:25%;
  }
  .container2{
    text-align:center;
    width:50%;
  }
  .container3{
    width:25%;
  }
  .navbarWrap a{
    padding:5px;
    color:white;
    text-decoration: none;
  }
  #forgotPass{
    padding:0;
  }
  .navbarWrap p{
    text-align:center;
    margin:0;
  }
  .navbarWrap .logout{
    /* default */
    padding:0;
    float: right;
    transition-timing-function: ease-in-out;
    transition:0.25s;
    transform: translate(0,0);
  }
  .navbarWrap .logout2{
    /* active */
    padding:0;
    float: right;
    transition-timing-function: ease-in-out;
    transition:0.2s;
    transform: translate(0,-180%);
  }
  .navbarWrap a:hover{
    text-decoration: underline;
  }
  .filter{
    position
    opacity:0;
    transition: opacity .5s;
  }
  .filter2{
    /* default */
    opacity: 0;
    position: fixed;
    top: 33px;
    right: 10px;
    transition-timing-function:ease-in-out;
    transition: 1s, opacity 1s;
    transform: translate(0,-130%);
  }
  .filter3{
    /* active */
    opacity: 1;
    position: fixed;
    top: 33px;
    right: 10px;
    transition-timing-function: ease-in-out;
    transition: 1s, opacity 1s;
    transform: translate(0,0);
  }
  .closeFormButton{
    color: black;
  }
  .popupFormWrap{
    background-color: black;
    color: white;
    padding-bottom: 50px;
    box-shadow: 13px 12px 13px 3px black;
    margin: 20px;
    width: 100%;
    font-family: sans-serif;
    font-size: 20px;
    font-weight: 50;
  }
  .popupForm{
    display:flex;
    flex-direction: column;
    padding: 20px;
    margin-bottom: 50px;
  }
  .popupForm input{
    margin:5px;
    background-color:white;
    color:black;
  }
  .loginButtonPanel{
    display: flex;
    flex-direction: row;
  }
  .popupForm input[type = "submit"],[type = "button"]{
    font-weight: bold;
    border:none;
    text-align: center;
    width: 46%;
    align-items: flex-end;
  }


  </style>
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
</html>
