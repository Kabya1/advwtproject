
<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>project</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="style.css" />
  </head>

  <style>

    body{
      background: url(bckgrd.png);
      }
    .center{
      margin:100px;
      margin-top: 0;
      padding:100px;
      padding-top: 0;
      align-content: center;
      font-family:Century Gothic;
      font-size: 36px;
      margin-left: auto;
      margin-right: auto;
    }
    h1{
      height: 80px;
      text-align: center;
      font-family:Century Gothic;
      font-size: 40px;
      padding-top: 100px;
    }

    .option{
      font-family:Century Gothic;
      display: inline-block;
      padding: 10px 20px;
      font-size: 18px;
      cursor: pointer;
      text-align: center;
      text-decoration: none;
      outline: none;
      color: #fff;
      background-color: black;
      border: none;
      border-radius: 15px;
      box-shadow: 0 9px #999;
    }

    .option:hover {background-color: #00CED1}

    .option:active {
      background-color: #3e8e44;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

    .box {
      width: 100%;
      background: black;
      border: 1px solid #fff;
      margin: 6px 0;
      height: 34px;
      border-radius: 15px;
      padding: 0 20px;
      text-align: center;
      color: #fff;
      font-family:Century Gothic;
      }


  </style>

  <body>


      <h1>♦ LOGIN ♦</h1>
      <form method="post">
        <table class="center">
            <tr>
              <td><label for="username">Username :</label></td>
              <td><input type="text" size="40" style="font-size:18px"; placeholder="Enter your email" name="email" class="box"</td>
            </tr>
            <tr>
              <td><label for="password">Password :</label></td>
              <td><input type="password" size="40" style="font-size:18px"; placeholder="Enter password" name="password" class="box"</td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="submit" name="submit" value="Login" class="option"/>
                <input type="reset" value="Clear" class="option"/>
              </td>
              <td>
                <button type="button" class="btn"><a href="welcomepage.php"> ⟨⟨ Back</a></button>
              </td>
            </tr>
        </table>
      </form>



    <?php
      if(isset($_POST['submit']))
      {
        $email=$_POST['email'];
        $sql="SELECT * FROM `login` WHERE `email`='$email'";

        include_once('user_process.php');
        $result=$conn->query($sql);
        if($result->num_rows<1)
          die('ERROR: Email is not valid.');
        else
        {
          $row=$result->fetch_assoc();

          if(strcmp($row['PASSWORD'], $_POST['password'])!=0)
          {
            die('ERROR: Password mismatched.');
          }

          else
          {
            $_SESSION['email']=$row['Email'];
            $_SESSION['username']=$row['Name'];
            $_SESSION['password']=$row['PASSWORD'];
            $_SESSION['gender']=$row['Gender'];

            session_write_close();
            header('location:welcomeUser.php');
          }
        }


      }
     ?>

  </body>
</html>
