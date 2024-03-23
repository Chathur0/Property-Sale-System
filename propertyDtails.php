<?php 
session_start();
include ('navigation.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="view" content="width=device-width,initial-scale =1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .main {
            margin: auto;
            width: 80%;
        }

        .fs1 {
            border: none;
        }

        .photo-gallery {
            width: 100%;
            display: flex;
            flex-direction: row;
            height: fit-content;
        }

        .column-1 {
            flex: 50%;
        }

        .column-2 {
            flex: 25%;
            display: flex;
            flex-direction: column;
        }

        .column-3 {
            flex: 25%;
            display: flex;
            flex-direction: column;
        }

        .column-2-row-2 {
            flex: 50%;
        }

        .column-2-row-1 {
            flex: 50%;
        }


        .column-3-row-2 {
            flex: 50%;
        }

        .column-3-row-1 {
            flex: 50%;
        }



        .list-path {
            width: 100%;
            display: flex;
            padding: 1% 6%;
            justify-content: space-between;
            text-align: right;
            height: fit-content;
        }

        .list-path ul li {
            padding: 2px 2px;
            display: inline-block;

        }

        .list-path ul li a {
            color: black;
            text-decoration: none;
            font-size: 14px;
            text-transform: uppercase;
        }

        .list-path :hover {
            color: green;
        }

        .discription h1 {
            color: darkolivegreen;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .h3 a {
            padding: 1px;
            text-decoration: none;
            color: gray;
        }

        .h3 {
            font-size: 15px;
            color: gray;
            display: flex;
            padding: 8px;
        }

        .price_share {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 240px;

        }

        .share {
            margin: 0;
            padding: 0;
            font-family: "montserrat", sans-serif;
            background: #f1f1f1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .share {
            width: 200px;
            height: 55px;
            background: #dfe6e9;
            border-radius: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: .3s linear;
        }

        .share span {
            position: absolute;
            width: 100%;
            height: 100%;
            font-size: 19px;
            background: #2fc564;
            color: #120c0c;
            text-align: center;
            line-height: 55px;
            z-index: 999;
            transition: .7s linear;
            border-radius: 40px;
        }

        .share:hover span {
            transform: translateX(-100%);
            transition-delay: .3s;
        }

        .share div {
            display: flex;
            gap: 15px;
            width: 100%;
            height: 55px;
            justify-content: center;
            position: relative;
            top: 16px;
        }

        .share div a {
            flex: 0.3;
            font-size: 20px;
            color: rgb(82, 82, 224);
            text-align: center;
            transform: translateX(-100%);
            opacity: 0;
            transition: 0.3s linear;
        }

        .share:hover div a {
            opacity: 1;
            transform: translateX(0);
        }

        share a:nth-of-type(1) {
            transition-delay: 1s;
        }

        share a:nth-of-type(2) {
            transition-delay: 0.8s;
        }

        share a:nth-of-type(3) {
            transition-delay: 0.6s;
        }

        .fs2 {
            box-shadow: 0px 0px 30px 10px #d6d4f4;
            width: 100%;
            margin-top: 20px;
        }

        .Overview {
            padding: 20px;
        }

        .Overview:hover {
            color: green;
        }

        .icons {
            display: flex;
            font-size: 30px;

            margin: auto;
            width: 80%;
        }

        .icon1 {
            margin: 0 10px;
        }

        .icon2 {
            margin: 0 10px;
        }

        .icon3 {
            margin: 0 10px;
        }

        .icon4 {
            margin: 0 10px;
        }

        h5 {
            text-align: center;
            margin-bottom: 10px;
        }

        .fs3 {
            box-shadow: 0px 0px 30px 10px #d6d4f4;
            width: 100%;
            margin-top: 20px;
        }

        .Details {
            padding: 20px;
        }

        .Details:hover {
            color: green;
        }

        .table1 {
            font-size: 19px;
            width: 100%;
            margin: auto;
            width: 80%;
            padding-bottom: 50px;
        }

        .fs4 {
            box-shadow: 0px 0px 30px 10px #d6d4f4;
            width: 100%;
            margin-top: 20px;
        }

        .Description {
            padding: 20px;
        }

        .Description:hover {
            color: green;
        }

        .text2 {
            font-size: 19px;
            width: 100%;
            margin: auto;
            width: 80%;
            padding-bottom: 50px;
        }

        .fs5 {
            box-shadow: 0px 0px 30px 10px #d6d4f4;
            width: 100%;
            margin-top: 20px;
        }

        .features {
            padding: 20px;

        }

        .features:hover {
            color: green;
        }

        .table2 {
            font-size: 19px;
            width: 100%;
            display: flex;
            justify-content: center;
            padding-bottom: 50px;
        }

        .table2 tr td {
            padding: 10px;

        }

        .table2 tr td label {
            font-weight: 900;
            padding: 15px;
        }

        .text3 {
            width: 100%;
        }

        .tr1 {
            margin-bottom: 10px;
        }

        .tr2 {
            margin-top: 10px;
        }

        .fs6 {
            box-shadow: 0px 0px 30px 10px #d6d4f4;
            width: 100%;
            margin-top: 20px;
        }

        .map {
            padding: 20px;

        }

        .map:hover {
            color: green;
        }

        .text4 {
            width: 80%;
            display: flex;
            margin: auto;
            justify-content: center;
            padding-bottom: 50px;
        }

        .fs7 {
            box-shadow: 0px 0px 30px 10px #d6d4f4;
            width: 100%;
            margin-top: 20px;
            flex-direction: column;
            gap: 30px;
        }

        .con {
            padding: 20px;
        }

        .con:hover {
            color: green;
        }

        .text5 {
            margin: 3%;
            position: relative;
            width: 90%;
        }

        .text5 input,
        .text5 textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid rgba(255, 255, 255, 0.25);
            background: gray;
            border-radius: 5px;
            outline: none;
            color: black;
            font-size: 1em;
            transition: 0.5s;
        }

        .text5 textarea {
            height: 200px;
        }

        .text5 span {
            position: absolute;
            left: 0;
            padding: 10px;
            pointer-events: none;
            font-size: 1em;
            color: white;
            text-transform: uppercase;
            transition: 0.5s;
        }

        .text5 input:valid~span,
        .text5 input:focus~span {
            color: black;
            transform: translateX(10px) translateY(-7px);
            font-size: 0.65em;
            padding: 0 10px;
            border-left: 1px solid black;
            border-right: 1px solid black;
            letter-spacing: 0.2em;
        }

        .text5 input:valid,
        .text5 input:focus {
            border: 1px solid black;
        }

        .but {
            border: none !important;
            border-radius: 5px;
            cursor: pointer;
            background-color: green;
            font-size: 16px;
            width: 30%;
            height: 40px;
            margin-bottom: 50px;
        }

        .but:hover {
            background-color: darkgreen;
            color: #d6d4f4;
        }
    </style>
    <title>
        Rent House
    </title>
</head>

<body>
    <div class="photo-gallery">
        <div class="column-1">
            <img src="propertyImage/pexels-photo-7031405.jpeg" alt="" style="width: 100%;height: 100%;">
        </div>
        <div class="column-2">
            <div class="column-2-row-1">
                <img src="propertyImage/pexels-photo-7005453.jpeg" alt="" style="width: 100%;height: 100%;">
            </div>
            <div class="column-2-row-2">
                <img src="propertyImage/pexels-photo-7533923.webp" alt="" style="width: 100%;height: 100%;">
            </div>
        </div>
        <div class="column-3">
            <div class="column-3-row-1">
                <img src="propertyImage/pexels-photo-7018390.jpeg" alt="ads" style="width: 100%;height: 100%;">
            </div>
            <div class="column-3-row-2">
                <img src="propertyImage/pexels-photo-7018390.jpeg" alt="ads" style="width: 100%;height: 100%;">
            </div>
        </div>
    </div>
    <div class="main">
        <fieldset class="fs1">
            <div class="list-path">
                <ul>
                    <li><a href="#">HOME > </a></li>
                    <li><a href="#">SALE > </a></li>
                    <li><a href="#">Colombo ></a></li>
                    <li><a href="#">Colombo ></a></li>
                    <li><a href="#">Apartment ></a></li>
                </ul>
            </div><!--path-->

            <div class="discription">
                <div class="h1">
                    <h1>Havelock City - 03 Beadrooms Furnished Apartment for sale in Colombo 05</h1>
                </div><!--h1-->
            </div><!--Discription-->
            <div class="h3">
                <a class="fa fa-map-marker"></a>
                <h3>Colombo</h3>
            </div><!--h3-->

            <div class="price_share">

                <div class="price">
                    <h2>Rs. 120,000,000 /Total</h2>
                </div><!--price-->

                <div class="share">
                    <span><i class="bi bi-share-fill"></i>Share</span>
                    <div>
                        <a herf="#"><i class="bi bi-facebook"></i></a>
                        <a herf="#"><i class="bi bi-whatsapp"></i></a>
                        <a herf="#"><i class="bi bi-twitter"></i></a>
                    </div>
                </div><!--share-->
            </div><!--price_share-->
        </fieldset>
        <br>
        <div class="fs2">
            <div class="Overview"><b>
                    <h2>Overview</h2>
                </b>
            </div>
            <div class="icons">
                <div class="icon1">
                    <center>
                        <i class="fa-solid fa-bed"></i>
                        <h6> 4 Bed Rooms</h6>
                    </center>
                </div>
                <div class="icon2">
                    <center>
                        <i class="fa-solid fa-bath"></i>
                        <h6> 4 Bathrooms</h6>
                    </center>
                </div>
                <div class="icon3">
                    <center>
                        <i class="fa-solid fa-house"></i>
                        <h6> 3200 sq.ft</h6>
                    </center>
                </div>
            </div>
        </div>
        <div class="fs3">
            <div class="Details">
                <h2>Details</h2>
            </div>
            <div class="text">
                <table class="table1">
                    <tr>
                        <td>Property Type:<b>House </b></td>
                        <td>Area of land:<b>7.9 perches</b> </td>
                    </tr>
                    <tr>
                        <td>Bathrooms/WCs:<b>4</b></td>
                        <td>No. of floors: <b>3</b></td>
                    </tr>
                    <tr>
                        <td>Price:<b> Rs. 70,000,000 Total</b></td>
                        <td>Bedrooms: <b>4</b></td>
                    </tr>
                    <tr>
                        <td>Furnishing Status: <b>Unfurnished</b></td>
                        <td>Availability: <b>Available Now</b></td>
                    </tr>
                    <tr>
                        <td>Width of approach road (in feet):<b>25</b></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="fs4">
            <div class="Description">
                <h2>Description</h2>
            </div>
            <div class="text2">
                Address:<br>
                Dolalanda Gardens Thalawathugoda<br>
                Bedrooms:<br>
                4<br>
                Bathrooms:<br>
                4<br>
                House size:<br>
                3,200.0 sqft<br>
                Land size:<br>
                7.9 perches<br>
                Description<br>
                Brand New Super Luxury House for Sale in Thalawathugoda<br>
                <br>
                ***************************************************<br>
                <br>
                * Newly Built Luxury 3 Story House For Sale In Thalawathugoda<br>
                <br>
                * Ideal For Residence Located In A Very Centralized Location<br>
                <br>
                * Highly Residential Area<br>
                <br>
                * 20+ Feet Wide Road Facing House<br>
                <br>
                * 500m To Thalawathugoda Town<br>
                <br>
                * Land Size 7.9 Perches<br>
                <br>
                * House Size 3200+ Sqft<br>
                <br>
                * 04 Spacious Bed Rooms<br>
                <br>
                * 03 Hot Water System Bathrooms<br>
                <br>
                Ground Floor…<br>
                <br>
                * Visitor's Bedroom<br>
                <br>
                * Common Bathroom<br>
                <br>
                * Living Area<br>
                <br>
                * Dining Area<br>
                <br>
                * Modern Timber Pantry & Kitchen With Appliances<br>
                <br>
                * Maid Room & Bathroom<br>
                <br>
                * Store Room<br>
                <br>
                * Landscape Garden<br>
                <br>
                * 03 Vehicle Parking<br>
                <br>
                1st Floor…<br>
                <br>
                * Master Bedroom & Attached Bathroom With Balcony<br>
                <br>
                * Tv Lobby Area<br>
                <br>
                * Sitting Area<br>
                <br>
                * Large Terrace<br>
                <br>
                2nd Floor..<br>
                <br>
                * 02 Spacious Bedrooms With Balcony<br>
                <br>
                * Common Bathroom<br>
                <br>
                * Large Terrace<br>
                <br>
                * Brick Walls<br>
                <br>
                * All Timber Doors & Windows Aluminium<br>
                <br>
                * Rocell Tiles & Bathware<br>
                <br>
                * Electricity<br>
                <br>
                * Tap Line Water<br>
                <br>
                * Overhead Water Tank And Sump<br>
                <br>
                * Hot Water System<br>
                <br>
                * Air Condition Provisions<br>
                <br>
                * Cctv Security Camera System Provisions<br>
                <br>
                * Roller Shutter Gate<br>
                <br>
                * Wicket Gate<br>
                <br>
                -Please Call For Seen On Appointment<br>
                <br>
                - Price Can Be Negotiable After Inspection<br>
                <br>
                Price<br>
                <br>
                70 Million (Negotiable)<br>
                <br>
                Posted/edited: 2 days ago<br><br>
            </div>
        </div>
        <div class="fs5">
            <div class="features">
                <h2>Features</h2>
            </div>
            <div class="text3">
                <table class="table2">

                    <tr>
                        <td><i class="fa-solid fa-bed"> </i><label>MAID'S ROOM</label>
                        </td>
                        <td><i class="fa-solid fa-toilet"> </i><label>MAID'S TOILET</label>
                        </td>
                        <td><i class="fa-sharp fa-solid fa-house"></i><label>BRAND NEW</label>
                        </td>
                    </tr>
                    <div class="tr2">
                        <tr>
                            <td><i class="fa-solid fa-umbrella-beach"></i><label>LUXURY SPECS</label>
                            </td>
                            <td><i class="fa-solid fa-shower"></i><label>HOT WATER</label>
                            </td>
                            <td><i class="fa-solid fa-glass-water-droplet"></i><label>MAINLINE WATER</label>
                            </td>
                        </tr>
                    </div>
                    <tr>
                        <td><i class="fa-solid fa-bolt"> </i><label>3 PHASE ELECTRICITY</label>
                        </td>
                        <td><i class="fa-solid fa-house-lock"> </i><label>HOME SECURITY SYSTEM</label>
                        </td>
                        <td><i class="fa-solid fa-house-chimney-window"></i><label>OVERHEAD WATER STORAGE</label>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-car"></i><label> GARAGE</label>
                        </td>
                        <td><i class="fa-brands fa-canadian-maple-leaf"></i><label> LAWN GARDEN</label>

                        </td>
                        <td><i class="fa-solid fa-toilet"> </i><label>ATTACHED TOILETS/label>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="fs6">
            <div class="map">
                <h2>Map</h2>
            </div>
            <div class="text4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.936106604085!2d79.89111378429085!3d6.898245475312395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a201303683b%3A0xb99625058d25f424!2s4th%20Ln%2C%20Sri%20Jayawardenepura%20Kotte!5e0!3m2!1sen!2slk!4v1706640301663!5m2!1sen!2slk"
                    width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="fs7">
            <div class="con">
                <h2>Contact Advertiser</h2>
            </div>
            <form action="">
                <div class="text5">
                    <input type="text" required="required">
                    <span>First Name</span>
                </div>
                <div class="text5">
                    <input type="text" required="required">
                    <span>Your Email</span>
                </div>
                <div class="text5">
                    <input type="text" required="required">
                    <span>Your Phone</span>
                </div>
                <div class="text5">
                    <textarea required="required"></textarea>
                </div>
                <div class="text5">
                    <button type="submit" class="but">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php include_once 'footer/footer.php'?>
</html>