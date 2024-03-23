<?php
session_start();
include '../config.php';
include '../project/function.inc.php';
$row = refresh($conn, $_SESSION["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile <?php echo $row["name"] ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .gaiddiv {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url(luxury-vacation-rental-sites-03.jpeg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed
        }

        center {
            display: flex;
            width: 80%;
            border: 1px solid black;
            border-radius: 25px;
            padding: 50px;
            backdrop-filter: blur(19px);
        }

        .left {
            width: 20%;
            display: flex;
            margin-right: 20px;
            justify-content: center;
        }

        .right {
            width: 70%;
            display: flex;
            text-align: left;
            flex-direction: column;
        }

        .sidenav {
            display: flex;
            flex-direction: column;
            width: 100%
        }

        .sidenav a {
            height: 50px;
            background-color: rgb(234, 247, 242);
            display: flex;
            align-items: center;
            padding-left: 40px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 800;
            color: black;

        }

        .sidenav a:hover {
            background-color: rgb(10, 181, 33);
            color: rgb(255, 255, 255);
        }

        .postbtn {
            width: 200px;
            height: 30px;
            background-color: rgb(193, 28, 28);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-size: 15px;
            font-weight: 800;
        }

        .postbtn:hover {
            color: rgb(193, 28, 28);
            background-color: aliceblue;
            border: 1px solid rgb(193, 28, 28);
        }
        .profileDetails {
            width: 100%;
            margin-top: 15px;
            background-color: rgb(234, 247, 242);
            display: flex;
            padding: 20px;
        }

        .img {
            width: 30%;
            text-align: center;
        }

        .img img {
            width: 150px;
            height: 150px;
            border-radius: 90px;
        }

        .name {
            width: 70%;
            text-align: left;
        }

        .name label {
            font-size: 15px;
            font-weight: 700;
            color: rgb(10, 181, 33);
            width: 50%;
        }

        .name div {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
        }

        .edit {
            width: 100%;
            background-color: rgb(234, 247, 242);
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        .edit form {
            width: 90%;
            flex-direction: column;
            margin: 20px 0;
        }

        .profilePic div {
            margin-top: 5px;
        }

        .last input {
            width: 100%;
            height: 30px;
            margin: 10px 0;
            padding-left: 20px;
        }

        .save {
            width: 50%;
            height: 30px;
            background-color: rgb(193, 28, 28);
            border: none;
            color: aliceblue;
            border-radius: 5px;
            font-size: 16px;
            font-weight: 700;
        }

        .save:hover {
            color: rgb(193, 28, 28);
            background-color: aliceblue;
            border: 1px solid rgb(193, 28, 28);
        }

        .btn {
            display: flex;
            gap: 10px;
        }

        .btn a {
            text-decoration: none;
            background-color: rgb(193, 28, 28);
            color: aliceblue;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="gaiddiv">
        <center>
            <div class="left">
                <div class="sidenav">
                    <a href="#" class="profile">My Profile </a>
                    <a href="#Manage my Ads">Manage my Ads</a>
                    <a href="../addpost/addDetails.php">Post ad</a>
                    <a href="../contactUs.php">Help and Contact</a>
                    <a href="../project/logout.inc.php">Log out</a>
                </div>
            </div>
            <div class="right">
                    <a href="../addpost/addDetails.php" class="postbtn">+ POST AD</a>
                <div class="profileDetails">
                    <div class="img">
                        <label for="">
                            <h2>My profile</h2>
                        </label><br>
                        <?php
                        if (!empty($row["image"])) {
                        ?>
                            <img src="image/<?php echo $row["image"]?>" alt="my profile1">
                        <?php
                        } else {
                        ?>
                            <img src="1.webp" alt="my profile">
                        <?php
                        }
                        ?>

                    </div>
                    <div class="name">
                        <h3>Hello <?php echo $row["name"] ?>..!</h3>
                        <div>
                            <label for="">Other Number: <?php echo $row["number"] ?></label>
                        </div>
                    </div>

                </div>
                <div class="edit">
                    <form action="editProfile.php" method="post" enctype="multipart/form-data">
                        <div class="">
                            <h2>Edit My Profile</h2><br>
                            <p>You can only Upload jpeg, jpg and png images for your profile </p><br>
                        </div>
                        <div class="profilePic">
                            <label for="picture">New Profile Picture </label>
                            <div>
                                <input type="file" id="myFile" name="image" accept=".jpg, .jpeg, .png">
                            </div>
                        </div>
                        <br>
                        <div class="last">
                            <label for="Name">Your Name:</label><br>
                            <input type="text" name="name" id="name" value="<?php echo $row["name"] ?>"><br>
                            <label for="email">Email Address:</label><br>
                            <input type="email" name="email" id="email" value="<?php echo $row["email"] ?>">
                        </div>
                        <br>
                        <div class="btn">
                            <button type="submit" class="save" name="btn">SAVE MY NEW DETAILS</button>
                            <a href="../home.php" class="save"><- Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </div>
</body>

</html>