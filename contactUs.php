<?php
session_start();
include 'navigation.php';
?>
<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        * {
            margin: 0px;
            padding: 0px;

        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .main {
            width: 80%;
            margin: auto;
            margin-top: 50px;
        }

        .list a {
            color: rgb(135, 128, 128);
            text-decoration: none;
        }

        .list a:hover {
            color: green;
        }

        .contact {
            width: 96%;
            margin: auto;
            padding-top: 20px;
        }

        .Ccontainer {
            background-color: rgb(242, 251, 249);
            width: 96%;
            margin: auto;
            padding: 10px;
            box-shadow: 0px 0px 10px 1px rgba(179, 240, 255, 0.836);
        }

        .fs1 {
            display: flex;
        }

        .clogo {
            width: 30%;
            padding-top: 20px;
        }

        .dea {
            width: 40%;
        }

        .social {
            width: 30%;
            display: flex;
            justify-content: end;
        }

        .social a {
            margin: 20px;
        }

        .link a {
            color: black;
        }

        .link {
            margin-top: 20px;
        }

        p {
            margin-top: 50px;
        }

        .container1 {
            width: 96%;
            margin: auto;
            margin-top: 20px;
            background-color: rgb(242, 251, 249);
            padding: 10px;
            box-shadow: 0px 0px 10px 1px rgba(179, 240, 255, 0.836);
        }

        .text {
            margin-top: 20px;
        }

        .text input {
            height: 35px;
        }

        .text input[type="text"] {
            padding-left: 30px;
            width: 100%;
        }

        .text input[type="submit"] {
            width: 20%;
            font-weight: 700;
            font-size: 16px;
            color: white;
            border-radius: 5px;
            border: none;
            background-color: rgb(193, 28, 28);
        }
        .text input[type="submit"]:hover {
            color:  rgb(193, 28, 28);
            border-radius: 5px;
            border: 1px solid rgb(193, 28, 28);
            background-color:white;
        }
        .text textarea {
            width: 100%;
            height: 200px;
        }
    </style>

</head>

<body>
    <div class="main">
        <div class="list">
            <ul>
                <a href="#">Home </a>
                >
                <a href="#">Contact-us</a>

            </ul>
        </div>
        <div class="contact">
            <h1>Contact Us</h1><br>
        </div>
        <div class="Ccontainer">

            <div class="fs1">
                <div class="clogo">
                    <img src="image/untitled.png" width="300" height="120" id="unt">
                </div>
                <div class="dea">
                    <h3> My Dream.lk</h3>
                    <div class="link">
                        <a href="#" style="text-decoration: none;"><img src="image/pic6.png" width="25" height="25" id="img1">
                            +94 (0) 117 167 167
                            </img><br></a>

                        <a href="#" style="text-decoration: none;"> <img src="image/pic7.png" width="25" height="25" id="img2"> contactus@MyDream.lk
                            </img><br></a>

                        <a href="#" style="text-decoration: none;"><img src="image/pic8.png" width="25" height="25" id="img3">
                            Tiththagalla,Ahangama,Galle,Sri Lanka
                            </img></a>
                    </div>
                </div>
                <div class="social">

                    <a href="https://www.facebook.com">
                        <img src="image/pic2.png" width="30" height="30" id="img4">
                    </a>


                    <a href="https://www.twitter.com">
                        <img src="image/pic1.png" width="30" height="30" id="img5">
                    </a>

                    <a href="https://www.instagram.com">
                        <img src="image/pic3.png" width="30" height="30" id="img6">
                    </a>

                    <a href="https://www.pinterest.com">
                        <img src="image/pic4.png" width="30" height="30" id="img7">
                    </a>

                    <a href="https://www.youtube.com">
                        <img src="image/pic5.png" width="30" height="30" id="img8">
                    </a>
                </div>
            </div>
            <p>Please note that <b> we are not estate agents/broken </b> and all the ads on the site have been
                posted by
                the
                owner/agent of that property directly.Therefore if you wish to get more information on the property
                please
                contact the advertiser of that property directly.The contact details of advertisers/seller will be
                on
                the
                'more information' page of each ad.Also we will not be able to act as an agent/broker and sell/rent
                or
                find
                a property for you. </p>
            <br>
        </div>
        <form>
            <div class="container1">

                <div class="con">
                    <h3>Contact Us</h3>
                </div>
                <div class="text">

                    <input type="text" id="name" name="name" placeholder="Your Name"><br>
                    <br>
                    <input type="text" id="email" name="email" placeholder="Your Email"><br>
                    <br>
                    <input type="text" id="phone" name="phone" placeholder="Your Phone"><br>
                    <br>
                    <textarea cols="30" rows="4" name="address"></textarea><br><br>
                    <br>

                    <input type="submit" name="submit" value="Send Email" id="submit">
                </div>
            </div>
        </form>
        <br>
    </div>

</body>
<?php
include "footer/footer.php";
?>

</html>