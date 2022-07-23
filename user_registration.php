<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>userregistration </title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
  </head>
  <style>
  * {box-sizing: border-box}


.container {
padding: 16px;
font-family: Century Gothic;
}


input[type=text], input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}


hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}


.registerbtn {
background-color: black ;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
opacity: 0.9;
}

.registerbtn:hover {
opacity:1;
}


a {
color: dodgerblue;
}


.signin {
background-color: #f1f1f1;
text-align: center;
}
  </style>


<body background="bckgrd.png">


<form action="login_pro.php" method="post">
<div class="container">
  <center>
    <h1>♦ User Registration Form ♦</h1>
  </center>
  <i><p>Please fill in this form to create an account.</p></i>
  <hr>

  <label for="name"><b>Name</b></label>
  <input type="text" name="username" placeholder="Your full name" required>

  <label for="email"><b>Email</b></label>
  <input type="text" placeholder="Enter Email" name="email" id="email" required>

  <label for="gender"><b>Gender</b></label>
  <label><input type="radio" name="gender" value="Male"/> Male </label>
  <label><input type="radio" name="gender" value="Female"/> Female </label>
  <label><input type="radio"  name="gender" value="Others"/> Others </label><br /><br />


  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

  <label for="psw-repeat"><b>Confirm Password</b></label>
  <input type="password" placeholder="Confirm Password" name="cpsw" id="psw-repeat" required>

  <label for="home"><a href="welcomepage.php">⟨⟨ Home</a></label>
  <hr>


  <button type="submit" class="registerbtn">SUBMIT</button>
</div>

<div class="container signin">
  <p>Already have an account? <a href="login.php">Sign in</a>.</p>
</div>
</form>

<script type="text/javascript">
  function validation(){
    var pw=document.getElementById("psw");
    var cpw=document.getElementById("psw-repeat");
    if(pw!=cpw){
      alert("Password and Confirm Password doesn't match");
      return false;
    }
    else{
      return true;
    }
  }
</script>


  </body>
</html>
