<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .nav {
            width: 100%;
            display: flex;
            background-color: white;
            align-items: center;
            justify-content: center;
        }

        .nav i {
            display: none;
        }

        .logo {
            width: 20%;
            text-align: center;
        }

        .logo img {
            margin: 5px;
            width: 300px;
            height: 80px;
        }

        .img2 {
            display: none;
        }

        .category {
            width: 70%;
        }

        .adPostBtn {
            width: 10%;
            text-align: center;
        }

        .adPostBtn button {
            width: 150px;
            height: 50px;
            border-radius: 25px;
            border: none;
            background-color: rgb(5, 6, 45);
            color: white;
            font-weight: 900;
        }

        .adPostBtn button:hover {
            color: rgb(5, 6, 45);
            border: 2px rgb(5, 6, 45) solid;
            background-color: white;
            cursor: pointer;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);
        }

        .dropdown {
            position: absolute;
            display: none;
            width: 200px;
            z-index: 3;
            margin-top: 25px;
        }

        a {
            color: rgb(5, 6, 45);
            font-size: 15px;
        }

        .dropdown a {
            display: block;
            background-color: white;
            padding: 15px;
            text-align: center;
            margin-left: -60%;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.3);
        }

        .dropdown a:hover {
            background-color: rgb(5, 6, 45);
            font-size: larger;
            color: white;
        }

        .list-containor a {
            text-decoration: none;
            font-weight: 900;
        }

        .list-containor {
            display: flex;
            gap: 50px;
            justify-content: center;
            text-align: left;
        }

        .list-item:hover .dropdown {
            display: block;
            z-index: 2;
        }

        .list-item::after {
            content: '';
            width: 0%;
            height: 2px;
            background: red;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .list-item div {
            margin-top: 16px;
        }

        .list-item {
            padding-bottom: 25px;
        }

        .list-item:hover::after {
            width: 100%;
        }

        .profile-image-container img {
            width: 50px;
            height: 50px;
            border-radius: 25px;
            top: 25px;
        }
        
        .profile-image-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .profile-image-container input {
            color: rgb(193, 28, 28);
            font-size: 15px;
            position: relative;
            top: -8px;
            border: none;
            background-color: none;
            background: transparent;
            font-weight: 900;

        }

        .profile-image-container img:hover {
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .uName {
            font-weight: 900;
            color: rgb(193, 28, 28);
        }

        @media screen and (max-width: 850px) {
            .logo {
                width: 100%;
                position: absolute;
                top: 0;
                text-align: center;
                background-color: rgb(72, 72, 81);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .logo img {
                width: 200px;
            }

            .img1 {
                display: none;
            }

            .img2 {
                display: block;
            }

            .logo i {
                position: absolute;
                right: 5%;
                font-size: 2rem;
                color: white;
            }

            .list-containor {
                display: none;
                position: absolute;
                top: 0;
                left: 0;
                margin-bottom: 50px;
                height: 100vh;
                background: rgb(44, 45, 45);
                z-index: 2;
            }

            .list-containor .list-item {
                padding: 20px;
                border-bottom: 2px rgba(80, 77, 77, 0.5) solid;
            }

            .list-containor a {
                color: aliceblue;
            }

            .larger-close-icon {
                font-size: 3rem;
                color: white;
            }

            .close-icon-containor {
                text-align: end;
                border-bottom: 2px rgba(80, 77, 77, 0.5) solid;
                padding: 20px;
            }

            .adPostBtn {
                display: none;
            }

            .nav i {
                display: block;
            }

            .list-item a {
                padding-right: 150px;
            }

            .list-item div {
                display: flex;
            }

            .list-item div i {
                position: absolute;
                color: white;
                right: 5%;
            }

            .list-item div i:visited {
                color: rgb(78, 75, 75);
            }

            .rotated {
                transform: rotate(180deg);
            }

            .dropdown {
                display: none;
                margin-top: 20px;
                width: 400px;
            }

            .dropdown a {
                display: block;
                background-color: rgb(20, 18, 18);
                padding: 15px;
                text-align: center;
                padding-left: 100px;
            }

            .list-item {
                display: block;
            }

            .list-item:hover::after {
                width: 0;
            }

            .dropdown a:hover {
                color: rgb(5, 6, 45);
                background-color: white;
                font-size: larger;
                font-weight: 900;
            }

            .profile-image-container {
                z-index: 2;
                position: absolute;
                top: 0;
                left: 20px;
            }

            .list-item:hover .dropdown {
                display: none;
            }
        }

        @media screen and (max-width: 400px) {
            .list-item a {
                padding-right: 0px;
            }

            .dropdown {
                width: 200px;
            }
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="logo">
            <a href="home.php">
                <img src="image/Untitled-2.png" class="img1">
                <img src="image/Untitled-1.png" class="img2">
            </a>

            <i class="bi bi-list" onclick="clickBtn()" id="menuBtn"></i>
        </div>
        <div class="category">
            <div class="list-containor" id="nav-link">
                <div class="close-icon-containor">
                    <i class="bi bi-x larger-close-icon" onclick="closeMenu()"></i>
                </div>
                <div class="list-item">
                    <div class="main-field">
                        <a href="displayproperty.php?value=rent">RENTALS</a>
                        <i id="Rent-option-dropper" class="bi bi-chevron-down" onclick="rotateIcon('Rent-option-dropper')"></i>
                    </div>
                    <div class="dropdown" id="dropdown-list-for-rent">
                        <a href="displayproperty.php?value1=rent&value=houses">Houses</a>
                        <a href="">Apartments</a>
                        <a href="">Commercial</a>
                        <a href="">Bungalows</a>
                        <a href="">Annexes</a>
                        <a href="">Villas</a>
                        <a href="">Studios / Bedsit</a>
                        <a href="">Rooms / Boarding Places</a>
                    </div>
                </div>
                <div class="list-item">
                    <div>
                        <a href="">BUY</a>
                        <i id="Buy-option-dropper" class="bi bi-chevron-down" onclick="rotateIcon('Buy-option-dropper')"></i>
                    </div>
                    <div class="dropdown" id="dropdown-list-for-buy">
                        <a href="">Houses</a>
                        <a href="">Apartments</a>
                        <a href="">Commercial</a>
                        <a href="">Bungalows</a>
                        <a href="">Villas</a>
                        <a href="">Studios / Bedsit</a>
                    </div>
                </div>
                <div class="list-item">
                    <div>
                        <a href="">LAND</a>
                        <i id="Land-option-dropper" class="bi bi-chevron-down" onclick="rotateIcon('Land-option-dropper')"></i>
                    </div>
                    <div class="dropdown" id="dropdown-list-for-land">
                        <a href="">Bare Land</a>
                        <a href="">Beachfront Land</a>
                        <a href="">Cultivated / Agriculture</a>
                        <a href="">Land With House</a>
                        <a href="">Tea Land</a>
                        <a href="">Rubber Land</a>
                        <a href="">Coconut Land</a>
                        <a href="">Paddy Land</a>
                        <a href="">Cinnamon Land</a>
                        <a href="">Waterfront (Lake/River)</a>
                    </div>
                </div>
                <div class="list-item">
                    <div>
                        <a href="assis.php">BUYER & SELLER ASSISTANCE</a>
                    </div>
                </div>
                <div class="list-item">
                    <div>
                        <a href="contactUs.php">CONTACT US</a>
                    </div>
                </div>
                <div class="profile-image-container">

                    <?php
                    if (isset($_SESSION["id"])) {
                        include 'config.php';
                        include 'project/function.inc.php';
                        $row = refresh($conn, $_SESSION["id"]);
                        if (!empty($row["image"])) {
                    ?>
                            <a href="supun/profile.php"><img src="supun/image/<?php echo $row["image"] ?>" alt=""></a>
                        <?php
                        } else {
                        ?>
                            <a href="supun/profile.php"><img src="image/user_3177440.png" alt=""></a>
                        <?php
                        }
                        ?>
                        <label for="" class="uName"> <?php echo $row["name"] ?></label>
                    <?php
                    } else {
                    ?>
                        <form action="project/login.php" method="get">
                            <input type="submit" name="btn" value="Login" class="logbtn">
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="adPostBtn">
            <?php
            if (isset($row["name"])) {
            ?>
                <a href="addpost/addDetails.php"><button type="submit">POST YOUR AD</button></a>
            <?php
            } else {
            ?>
                <a href="project/login.php"><button type="submit">POST YOUR AD</button></a>
            <?php
            }
            ?>
        </div>
    </div>
    <script>
        var nav = document.getElementById("nav-link");
        var menuBtn = document.getElementById("menuBtn");

        function clickBtn() {
            if (nav.style.display === "none") {
                showMenu();
            } else {
                closeMenu();
            }
        }

        function showMenu() {
            nav.style.display = "block";
            menuBtn.style.color = " rgb(66, 217, 74)";
        }

        function closeMenu() {
            nav.style.display = "none"
            menuBtn.style.color = "white";
        }

        function rotateIcon(iconId) {
            var chevronIconRent = document.getElementById("Rent-option-dropper");
            var chevronIconBuy = document.getElementById("Buy-option-dropper");
            var chevronIconLand = document.getElementById("Land-option-dropper");
            var dropdownRent = document.getElementById("dropdown-list-for-rent");
            var dropdownBuy = document.getElementById("dropdown-list-for-buy");
            var dropdownLand = document.getElementById("dropdown-list-for-land");

            if (iconId == "Rent-option-dropper") {
                if (dropdownRent.style.display === "block") {
                    chevronIconRent.classList.remove("rotated");
                    dropdownRent.style.display = "none";
                } else {
                    chevronIconRent.classList.add("rotated");
                    dropdownRent.style.display = "block";
                    chevronIconBuy.classList.remove("rotated");
                    dropdownBuy.style.display = "none";
                    chevronIconLand.classList.remove("rotated");
                    dropdownLand.style.display = "none";
                }
            } else if (iconId == "Buy-option-dropper") {
                if (dropdownBuy.style.display === "none") {
                    chevronIconBuy.classList.add("rotated");
                    dropdownBuy.style.display = "block";
                    chevronIconLand.classList.remove("rotated");
                    dropdownLand.style.display = "none";
                    chevronIconRent.classList.remove("rotated");
                    dropdownRent.style.display = "none";
                } else {
                    chevronIconBuy.classList.remove("rotated");
                    dropdownBuy.style.display = "none";
                }
            } else {
                if (dropdownLand.style.display === "none") {
                    chevronIconLand.classList.add("rotated");
                    dropdownLand.style.display = "block";
                    chevronIconRent.classList.remove("rotated");
                    dropdownRent.style.display = "none";
                    chevronIconBuy.classList.remove("rotated");
                    dropdownBuy.style.display = "none";
                } else {
                    chevronIconLand.classList.remove("rotated");
                    dropdownLand.style.display = "none";
                }
            }
        }
    </script>

</body>

</html>