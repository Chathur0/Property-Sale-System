<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dream | Property for Sale in SriLanka</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .background {
            background-image: url(image/luxury.jpg);
            background-repeat: no-repeat;
            background-size: 100% 80%;
            background-position: top;
            background-attachment: fixed;
            height: 80vh;
        }

        .searchField {
            position: absolute;
            z-index: 0;
            top: 70%;
            width: 100%;
        }

        .searchBtnContainor {
            width: 100%;
            text-align: center;
        }

        .searchBtnContainor button {
            margin: 0 2px;
            width: 10%;
            height: 45px;
            border: none;
            z-index: 2;
            background-color: rgb(5, 6, 45);
            border-radius: 2px;
            color: white;
            font-size: larger;
            font-weight: 900;
        }

        .Scategory {
            clear: both;
            text-align: center;
            width: 100%;
        }

        .b-c-form ul li {
            text-decoration: none;
            list-style: none;
            text-align: left;
            margin-left: 5%;
            margin-top: 5px;
        }

        .b-c-form {
            display: flex;
            padding: 20px 0;
            background-color: white;
            width: 80%;
            margin-left: 10%;
            box-shadow: 0 10px 70px rgba(0, 0, 0, 0.7);
            border-radius: 20px;
        }

        .city-container {
            width: 40%;
            padding: 20px 0;
        }

        .city-container input {
            width: 100%;
            height: 35px;
            border-radius: 8px;
            text-align: center;
            border: 1px rgba(128, 128, 128, 0.5) solid;
        }

        .property-and-price-container {
            width: 30%;
            display: flex;
        }

        .select-fields-container {
            width: 50%;
            padding: 20px 0;
        }

        .select-fields-container select {
            width: 100%;
            height: 35px;
            border-radius: 5px;
            border: 1px rgba(128, 128, 128, 0.5) solid;
            text-align: center;
        }

        .propertyAndPriceContainerforLand {
            width: 40%;
            display: flex;
        }

        .property-and-price-container-for-land {
            width: 50%;
            padding: 20px 0;
        }

        .property-and-price-container-for-land select {
            width: 100%;
            height: 35px;
            border-radius: 5px;
            border: 1px rgba(128, 128, 128, 0.5) solid;
            text-align: center;
        }

        .button-container {
            width: 50%;
            padding: 20px 0;
        }

        .button-container label {
            visibility: hidden;
        }

        .button-container input {
            width: 80%;
            height: 35px;
            border-radius: 5px;
            border: none;
            background-color: rgb(193, 28, 28);
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .bedAndSearchBtnContainer {
            width: 30%;
            display: flex;
        }

        .button-container input:hover {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(193, 28, 28);
            color: rgb(193, 28, 28);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .button-container-for-land {
            width: 20%;
            padding: 20px 0;
        }

        .button-container-for-land label {
            visibility: hidden;
        }

        .button-container-for-land input:hover {
            background-color: rgb(255, 255, 255);
            border: 1px solid rgb(193, 28, 28);
            color: rgb(193, 28, 28);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .button-container-for-land input {
            width: 80%;
            height: 35px;
            border-radius: 5px;
            border: none;
            background-color: rgb(193, 28, 28);
            color: white;
            font-weight: 600;
            font-size: 14px;
        }

        .hidden {
            opacity: 0;
        }

        .visible {
            opacity: 1;
            transition: opacity 1s ease-in-out;
        }

        .headline {
            margin-top: 25vh;
            padding-left: 15%;
        }

        .propertyView {
            width: 100%;
            margin: 70px 0;
        }

        .table1 {
            width: 80%;
            margin: auto;
            display: flex;
            justify-content: space-around;
            margin-top: 2%;
        }

        .propertyView .table tr td {
            padding: 0 30px 30px 0;
        }



        @media screen and (max-width: 850px) {
            .background {
                background-size: 100% 70%;
            }

            .searchField {
                margin-top: -100px;
            }

            .searchBtnContainor button {
                width: 20%;
            }

            .city-container {
                width: 100%;
            }

            .city-container input {
                width: 96%;
            }

            .b-c-form {
                display: block;
            }

            .property-and-price-container {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .property-and-price-container ul {
                width: 46%;
            }

            .bedAndSearchBtnContainer {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .bedAndSearchBtnContainer ul {
                width: 46%;
            }

            .bedAndSearchBtnContainer input {
                width: 100%;
            }

            .headline {
                margin-top: 30vh;
                padding-left: 10%;
            }

            .propertyAndPriceContainerforLand {
                width: 100%;
                display: flex;
                justify-content: center;
            }

            .propertyAndPriceContainerforLand ul {
                width: 46%;
            }

            .button-container-for-land {
                width: 100%;
            }

            .button-container-for-land input {
                width: 96%;
            }
        }

        @media screen and (max-width: 400px) {
            .background {
                background-image: url(image/luxury1.jpg);
                background-size: 400px 450px;
                height: 100vh;
            }

            .searchField {
                margin-top: -250px;
            }

            .property-and-price-container {
                display: block;
            }

            .property-and-price-container ul {
                padding: 0;
                width: 96%;
            }

            .bedAndSearchBtnContainer {
                width: 100%;
                display: block;
                justify-content: center;
            }

            .bedAndSearchBtnContainer ul {
                width: 96%;
                padding: 10px 0;
            }

            .headline {
                margin-top: -10%;
                padding-left: 10%;
            }

            .propertyAndPriceContainerforLand {
                display: block;
                width: 100%;
                justify-self: center;
            }

            .propertyAndPriceContainerforLand ul {
                width: 96%;
                padding: 10px 0;
            }
        }
    </style>

</head>

<body>
    <!-- ======================================= upper field ============================================================ -->
    <div class="background">
        <?php require_once('navigation.php') ?>
    </div>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++Search field++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="searchField">
        <div class="searchBtnContainor">
            <button onclick="showCategory('sale')" id="saleBtn" style="background-color: white; color: rgb(5, 6, 45);">SALE</button>
            <button onclick="showCategory('rent')" id="rentBtn">RENT</button>
            <button onclick="showCategory('land')" id="landBtn">LAND</button>
        </div>
        <div class="search-category-container">
            <div class="Scategory" id="sale-category">
                <form class="b-c-form" action="" id="saleForm">
                    <ul class="city-container">
                        <li>City</li>
                        <li><input class="value-input-field" type="text" placeholder="Type a city name"></li>
                    </ul>
                    <div class="property-and-price-container">
                        <ul class="select-fields-container">
                            <li>Property-type</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Property Type</option>
                                    <option value="House">House</option>
                                    <option value="Apartments">Apartments</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Bungalows">Bungalows</option>
                                    <option value="Villas">Villas</option>
                                    <option value="Studios">Studios / Bedsit</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="select-fields-container">
                            <li>Max Price</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Max Price</option>
                                    <option value="10">1 mn (10 lakhs)</option>
                                    <option value="20">2 mn (20 lakhs)</option>
                                    <option value="30">3 mn (30 lakhs)</option>
                                    <option value="40">4 mn (40 lakhs)</option>
                                    <option value="50">5 mn (50 lakhs)</option>
                                    <option value="60">6 mn (60 lakhs)</option>
                                    <option value="70">7 mn (70 lakhs)</option>
                                    <option value="80">8 mn (80 lakhs)</option>
                                    <option value="90">9 mn (90 lakhs)</option>
                                    <option value="100">10 mn (100 lakhs)</option>
                                    <option value="200">20 mn (200 lakhs)</option>
                                    <option value="300">30 mn (300 lakhs)</option>
                                    <option value="400">40 mn (400 lakhs)</option>
                                    <option value="500">50 mn (500 lakhs)</option>
                                    <option value="600">60 mn (600 lakhs)</option>
                                    <option value="700">70 mn (700 lakhs)</option>
                                    <option value="800">80 mn (800 lakhs)</option>
                                    <option value="900">90 mn (900 lakhs)</option>
                                    <option value="1000">100 mn (1000 lakhs)</option>
                                    <option value="2000">200 mn (2000 lakhs)</option>
                                    <option value="3000">300 mn (3000 lakhs)</option>
                                    <option value="4000">400 mn (4000 lakhs)</option>
                                    <option value="5000">500 mn (5000 lakhs)</option>
                                    <option value="6000">600 mn (6000 lakhs)</option>
                                    <option value="7000">700 mn (7000 lakhs)</option>
                                    <option value="8000">800 mn (8000 lakhs)</option>
                                    <option value="9000">900 mn (9000 lakhs)</option>
                                    <option value="10000">1 bn (10000 lakhs)</option>
                                    <option value="50000">5 bn (50000 lakhs)</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="bedAndSearchBtnContainer">
                        <ul class="select-fields-container">
                            <li>Min Bedrooms</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Min Bedrooms</option>
                                    <option value="House">1+ Rooms</option>
                                    <option value="Apartments">2+ Rooms</option>
                                    <option value="Commercial">3+ Rooms</option>
                                    <option value="Bungalows">4+ Rooms</option>
                                    <option value="Annexes">5+ Rooms</option>
                                    <option value="Villas">6+ Rooms</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="button-container">
                            <li><label>.</label></li>
                            <li><input type="submit" id="search-sub-btn" value="Search"></li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="Scategory" id="rent-category" style="display: none;">
                <form class="b-c-form" action="" id="rentForm">
                    <ul class="city-container">
                        <li>City</li>
                        <li><input class="value-input-field" type="text" placeholder="Type a city name"></li>
                    </ul>
                    <div class="property-and-price-container">
                        <ul class="select-fields-container">
                            <li>Property-type</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Property Type</option>
                                    <option value="House">House</option>
                                    <option value="Apartments">Apartments</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Bungalows">Bungalows</option>
                                    <option value="Annexes">Annexes</option>
                                    <option value="Villas">Villas</option>
                                    <option value="Studios">Studios / Bedsit</option>
                                    <option value="Rooms">Rooms</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="select-fields-container">
                            <li>Max Price</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Max Price</option>
                                    <option value="0.1">10,000</option>
                                    <option value="0.2">20,000</option>
                                    <option value="0.3">30,000</option>
                                    <option value="0.4">40,000</option>
                                    <option value="0.5">50,000</option>
                                    <option value="0.6">60,000</option>
                                    <option value="0.7">70,000</option>
                                    <option value="0.8">80,000</option>
                                    <option value="0.9">90,000</option>
                                    <option value="1">100,000 (1 lakhs)</option>
                                    <option value="2">200,000 (2 lakhs)</option>
                                    <option value="3">300,000 (3 lakhs)</option>
                                    <option value="4">400,000 (4 lakhs)</option>
                                    <option value="5">500,000 (5 lakhs)</option>
                                    <option value="6">600,000 (6 lakhs)</option>
                                    <option value="7">700,000 (7 lakhs)</option>
                                    <option value="8">800,000 (8 lakhs)</option>
                                    <option value="9">900,000 (9 lakhs)</option>
                                    <option value="10">1 mn (10 lakhs)</option>
                                    <option value="20">2 mn (20 lakhs)</option>
                                    <option value="30">3 mn (30 lakhs)</option>
                                    <option value="40">4 mn (40 lakhs)</option>
                                    <option value="50">5 mn (50 lakhs)</option>
                                    <option value="60">6 mn (60 lakhs)</option>
                                    <option value="70">7 mn (70 lakhs)</option>
                                    <option value="80">8 mn (80 lakhs)</option>
                                    <option value="90">9 mn (90 lakhs)</option>
                                    <option value="100">10 mn (100 lakhs)</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div class="bedAndSearchBtnContainer">
                        <ul class="select-fields-container">
                            <li>Min Bedrooms</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Min Bedrooms</option>
                                    <option value="House">1+ Rooms</option>
                                    <option value="Apartments">2+ Rooms</option>
                                    <option value="Commercial">3+ Rooms</option>
                                    <option value="Bungalows">4+ Rooms</option>
                                    <option value="Annexes">5+ Rooms</option>
                                    <option value="Villas">6+ Rooms</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="button-container">
                            <li><label>.</label></li>
                            <li><input type="submit" id="search-sub-btn" value="Search"></li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="Scategory" id="land-category" style="display: none;">
                <form class="b-c-form" action="" id="landForm">
                    <ul class="city-container">
                        <li>City</li>
                        <li><input class="value-input-field" type="text" placeholder="Type a city name"></li>
                    </ul>
                    <div class="propertyAndPriceContainerforLand">
                        <ul class="property-and-price-container-for-land">
                            <li>Property-type</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Property Type</option>
                                    <option value="bare-land">Bare Land</option>
                                    <option value="beachfront-land">Beachfront Land</option>
                                    <option value="cultivated">Cultivated / Agriculture</option>
                                    <option value="land-with-house">Land With House</option>
                                    <option value="tea-land">Tea Land</option>
                                    <option value="rubber-land">Rubber Land</option>
                                    <option value="coconut-land">Coconut Land</option>
                                    <option value="paddy-land">Paddy Land</option>
                                    <option value="cinnamon-land">Cinnamon Land</option>
                                    <option value="waterfront">Waterfront (Lake/River)</option>
                                </select>
                            </li>
                        </ul>
                        <ul class="property-and-price-container-for-land">
                            <li>Max Price</li>
                            <li>
                                <select>
                                    <option value="" disabled selected hidden>Max Price</option>
                                    <option value="3">300,000 (3 lakhs)</option>
                                    <option value="4">400,000 (4 lakhs)</option>
                                    <option value="5">500,000 (5 lakhs)</option>
                                    <option value="6">600,000 (6 lakhs)</option>
                                    <option value="7">700,000 (7 lakhs)</option>
                                    <option value="8">800,000 (8 lakhs)</option>
                                    <option value="9">900,000 (9 lakhs)</option>
                                    <option value="10">1 mn (10 lakhs)</option>
                                    <option value="20">2 mn (20 lakhs)</option>
                                    <option value="30">3 mn (30 lakhs)</option>
                                    <option value="40">4 mn (40 lakhs)</option>
                                    <option value="50">5 mn (50 lakhs)</option>
                                    <option value="60">6 mn (60 lakhs)</option>
                                    <option value="70">7 mn (70 lakhs)</option>
                                    <option value="80">8 mn (80 lakhs)</option>
                                    <option value="90">9 mn (90 lakhs)</option>
                                    <option value="100">10 mn (100 lakhs)</option>
                                    <option value="200">20 mn (200 lakhs)</option>
                                    <option value="300">30 mn (300 lakhs)</option>
                                    <option value="400">40 mn (400 lakhs)</option>
                                    <option value="500">50 mn (500 lakhs)</option>
                                    <option value="600">60 mn (600 lakhs)</option>
                                    <option value="700">70 mn (700 lakhs)</option>
                                    <option value="800">80 mn (800 lakhs)</option>
                                    <option value="900">90 mn (900 lakhs)</option>
                                    <option value="1000">100 mn (1000 lakhs)</option>
                                    <option value="2000">200 mn (2000 lakhs)</option>
                                    <option value="3000">300 mn (3000 lakhs)</option>
                                    <option value="4000">400 mn (4000 lakhs)</option>
                                    <option value="5000">500 mn (5000 lakhs)</option>
                                    <option value="6000">600 mn (6000 lakhs)</option>
                                    <option value="7000">700 mn (7000 lakhs)</option>
                                    <option value="8000">800 mn (8000 lakhs)</option>
                                    <option value="9000">900 mn (9000 lakhs)</option>
                                    <option value="10000">1 bn (10000 lakhs)</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <ul class="button-container-for-land">
                        <li><label>.</label></li>
                        <li><input type="submit" id="search-sub-btn" value="Search"></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <!-- ************************************************************show************************************************************ -->
    <h1 class="headline">Show Properties</h1>
    <div class="propertyView">
        <div class="table1">
            <?php include 'propertyMin1.php' ?>
            <?php include 'propertyMin1.php' ?>
            <?php include 'propertyMin1.php' ?>
        </div>
        <div class="table1">
            <?php include 'propertyMin1.php' ?>
            <?php include 'propertyMin1.php' ?>
            <?php include 'propertyMin1.php' ?>
        </div>
    </div>

    <script>
        function showCategory(category) {
            var saleCategory = document.getElementById('sale-category');
            var rentCategory = document.getElementById('rent-category');
            var landCategory = document.getElementById('land-category');

            var saleCategoryForm = document.getElementById('saleForm');
            var rentCategoryForm = document.getElementById('rentForm');
            var landCategoryForm = document.getElementById('landForm');

            saleCategory.style.display = 'none';
            rentCategory.style.display = 'none';
            landCategory.style.display = 'none';

            document.querySelectorAll('.searchBtnContainor button').forEach(btn => {
                btn.style.backgroundColor = '';
                btn.style.color = '';
            });

            if (category === 'sale') {
                saleCategory.style.display = 'block';
                document.getElementById('saleBtn').style.backgroundColor = 'white';
                document.getElementById('saleBtn').style.color = 'rgb(5, 6, 45)';
            } else if (category === 'rent') {
                rentCategory.style.display = 'block';
                document.getElementById('rentBtn').style.backgroundColor = 'white';
                document.getElementById('rentBtn').style.color = 'rgb(5, 6, 45)';
            } else if (category === 'land') {
                landCategory.style.display = 'block';
                document.getElementById('landBtn').style.backgroundColor = 'white';
                document.getElementById('landBtn').style.color = 'rgb(5, 6, 45)';
            }
        }
    </script>
</body>
<?php
include "footer/footer.php";
?>

</html>