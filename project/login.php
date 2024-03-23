<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Here</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    img {
      width: 50%;
      margin: 20px;
    }

    input[type=email],
    input[type=password] {
      width: 100%;
      padding: 15px 0;
      display: inline-block;
      background: #f1f1f1;
      margin-bottom: 20px;
      border: 1px solid #4c4949af;
      text-align: center;
    }

    #logb {
      width: 90%;
      padding: 15px 0;
      margin-bottom: 20px;
      display: inline-block;
      background: #f1f1f1;
      border-color: rgb(193, 28, 28);
      color: rgb(193, 28, 28);
      font-weight: 700;
    }

    #logb:hover {
      background: #c6c6c6;
      cursor: pointer;
    }

    #loginbtn {
      background-color: rgb(193, 28, 28);
      color: white;
      cursor: pointer;
      width: 100%;
      padding: 15px 0;
      margin: 20px 0;
      border: 2px solid rgb(193, 28, 28);
    }

    #loginbtn:hover {
      background-color: rgb(255, 255, 255);
      border: 2px solid rgb(193, 28, 28);
      color: rgb(193, 28, 28);
    }

    .container {
      width: 50%;
      border: 2px solid black;
      backdrop-filter: blur(19px);
      border-radius: 10px;
    }

    center {
      width: 100%;
      height: 100vh;
      justify-content: center;
      display: flex;
      align-items: center;
      background-image: url(luxury-house-mgayhrm416op3g3r.jpg);
      background-repeat: no-repeat;
      width: 100%;
      height: 100vh;
    }

    .element {
      width: 90%;
      margin-bottom: 30px;
      display: block;
    }

    .c1 a {
      text-decoration: none;
      color: #f1f1f1;
    }

    .c1 a:hover {
      color: #ff0000;
    }

    .c1 {
      width: 100%;
      display: flex;
    }

    .c11 {
      width: 50%;
      display: flex;
      justify-content: left;
      gap: 5px;
      color: #f1f1f1;
    }

    .c12 {
      width: 50%;
      display: flex;
      justify-content: right;
    }

    h2 {
      margin: 20px;
      color: white;
    }

    p {
      font-weight: 900;
      color: #f1f1f1;
      font-size: 20px;
      text-shadow: 0 0 3px #ff0000, 0 0 5px #ff0202;
    }
  </style>
</head>

<body>
  <center>
    <div class="container">

      <h2>Login Here</h2>

      <img src="Untitled-1.png" alt="logo" class="center">
      <form action="login.inc.php" method="post">


        <div class="element">
          <input type="email" placeholder="Email" name="email" id="email" required>
          <input type="password" placeholder="Password" name="password" id="password" required>
          <div class="c1">
            <div class="c11">
              <input type="checkbox" name="checkbox" id="checkbox">
              <label for="">Remember me</label>
            </div>
            <div class="c12">
              <a href="#">Forgot Password?</a>
            </div>
          </div>

          <button type="submit" class="loginbtn" id="loginbtn" name="btn1"><b>CLICK TO LOGIN</b></button>

          <p>Don't have an accont? </p>

        </div>
      </form>
      <form action="register.php" method="post">
        <button type="submit" name="btn" id="logb"><b>REGISTER HERE</b></button>
      </form>

    </div>
  </center>
</body>


</html>