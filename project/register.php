<?php
if (isset($_POST["btn"])) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register here</title>
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

      input[type=text],
      input[type=password],
      input[type=email] {
        width: 100%;
        padding: 15px 0;
        display: inline-block;
        background: #f1f1f1;
        margin-bottom: 20px;
        border: 1px solid #4c4949af;
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

      #btn {
        background-color: rgb(193, 28, 28);
        color: white;
        cursor: pointer;
        width: 100%;
        padding: 15px 0;
        margin-bottom: 20px;
        border: 2px solid rgb(193, 28, 28);
      }

      #btn:hover {
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

      h2 {
        margin: 20px;
        color: #f1f1f1;
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
        <h2>Register here</h2>

        <img src="Untitled-1.png" alt="logo" class="center">
        <form action="../add.php" method="post">
          <div class="element">

            <input type="text" placeholder="    Your name *" name="name" id="name" required>

            <input type="text" placeholder="    Mobile number *" name="number" id="mobile" required>

            <input type="email" placeholder="    Email address *" name="email" id="email" required>

            <input type="password" placeholder="    Create Password *" name="password" id="password" required>

            <button type="submit" class="registerbtn" id="btn" name="btn"><b>CLICK TO REGISTER</b></button>

            <p>Already have an account? </p>

          </div>
        </form>
        <form action="login.php" method="get">
          <button type="submit" id="logb" name="btn">LOGIN HERE</button>
        </form>

      </div>
    </center>

  </body>

  </html>
<?php
}
?>