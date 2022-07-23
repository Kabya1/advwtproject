 <?php session_start();?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta charset="utf-8">
<style>


body{
  padding-top: 50px;
  font-family: Century Gothic;
  font-size: 30px;
  font-weight: bold;
  margin: 10px;
  padding: 2px
  position:absolute;
  background: url(bckgrd.png);
    }

table{

    margin-left: auto;
    font-size: 20px;
    padding: 50px;
    border-style:double;
    border-color: white;
    border-width: medium;
    border-radius: 50px 50px 50px 50px;
    width: 500px;
    margin-top: 20px;
    text-align: left;
    margin-top: auto;
    margin-right: auto;
    }
tr{

    text-align: left;
    font-family: "Times New Roman", Times,serif;
    font-size: 22px;
  }
  .btn{

    width: 20%;
    background: #fff;
    border: 1px solid #fff;
    margin: 35px 0 10px;
    height: 25px;
    font-size: 12px;
    border-radius: 20px;
    padding: 0 15px;
    outline: none;
    cursor: pointer;
    border-color: black;

  }

 </style>
</head>

<body>
  <table border="0px">
      <tr rowspan="3">
          <h2><center>	♦    WELCOME USER!    ♦ </center></h2>
          <hr style="width:50%; height:1px;background-color:white;" />
        </th>
        <center>User Details :</center>
          <tr>
             <td>
               <ul>
               <i>
                  <li><p>
                      You are:              <?php echo $_SESSION['username'];?>
                  </p></li>
                  <li><p>
                    Your Email ID:          <?php echo $_SESSION['email'];?>
                  </p></li>
                  <li><p>
                    Your Password:          <?php echo $_SESSION['password'];?>
                  </p></li>
                  <li><p>
                    Your Gender:            <?php echo $_SESSION['gender'];?>
                  </p></li>
                  </i>
                </ul>
                Logout here →
                <button class="btn"><a href="logout.php">Logout</a></button>
              </td>
              <td>

              </td>

            </tr>

     </table>
  </body>
</html>
