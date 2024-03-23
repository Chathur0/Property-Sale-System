<?php
session_start();
if (isset($_GET["btn"])) {
    $type = $_GET["btn"];
    include '../config.php';
    include '../project/function.inc.php';
    $row = refresh($conn, $_SESSION["id"]);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Details</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            .outer {
                width: 100%;
            }

            .first {
                width: 80%;
                margin-top: 50px;
                margin: auto;
                background-color: rgb(238, 253, 253);
                padding: 30px;
                box-shadow: 0 0 15px 5px rgba(167, 230, 241, 0.49);
                margin-bottom: 30px;
            }

            .type {
                width: 100%;
                height: 40px;
                padding-left: 50px;
                font-size: 20px;
                color: rgb(5, 6, 45);
                font-weight: 900;
                margin-bottom: 40px;
                margin-top: 10px;
            }

            .type option {
                font-size: 20px;
                color: rgb(5, 6, 45);
                font-weight: 900;
            }

            .first .in {
                width: 90%;
                height: 40px;
                margin-top: 10px;
                padding-left: 50px;
            }

            .first .lab {
                font-size: 35px;
                font-weight: 900;
                color: rgb(5, 6, 45);
                display: flex;
                justify-content: center;
                margin-bottom: 30px;
            }

            .second {
                width: 80%;
                margin: auto;
                background-color: rgb(238, 253, 253);
                padding: 30px;
                margin-top: 40px;
                box-shadow: 0 0 15px 5px rgba(167, 230, 241, 0.49);
                margin-bottom: 30px;
            }

            .bDetail {
                margin-top: 30px;
                display: flex;
                justify-content: space-between;
            }

            .alogo {
                width: 80%;
                margin: auto;
                display: flex;
                flex-direction: column;
                gap: 20px;
                margin-bottom: 40px;
                margin-top: 40px;
            }

            .alogo img {
                width: 25%;
            }

            .alogo label {
                font-size: 35px;
                font-weight: 900;
                color: rgb(5, 6, 45);
            }

            .bed {
                width: 30%;
            }

            .bDetail input {
                width: 50%;
                height: 30px;
                margin-top: 20px;
                padding-left: 20px;
                border-radius: 0;
                border: 1px solid rgb(100, 100, 102);
                margin-bottom: 30px;
            }

            .bath {
                width: 30%;

            }

            .land {
                width: 30%;
            }

            .land input {
                width: 50%;
                height: 30px;
                padding-left: 20px;
                border-radius: 0;
                margin-top: 20px;
                border: 1px solid rgb(100, 100, 102);
                margin-bottom: 30px;
            }

            .price {
                margin: 20px 0;
            }

            .price input {
                margin: 10px 0;
                width: 20%;
                height: 30px;
                padding-left: 20px;
            }

            .F_N {
                display: flex;
                margin-top: 30px;
                justify-content: space-between;
            }

            .F_N input {
                width: 30%;
                height: 30px;
                padding-left: 20px;
                border-radius: 0;
                margin-top: 20px;
                border: 1px solid rgb(100, 100, 102);
                margin-bottom: 30px;
            }

            .F_N select {
                width: 35%;
                height: 30px;
                padding-left: 20px;
                border-radius: 0;
                margin-top: 20px;
                border: 1px solid rgb(100, 100, 102);
                margin-bottom: 30px;
            }

            .item {
                width: 50%;
            }

            .hi input {
                margin-top: 10px;
                width: 100%;
                height: 30px;
                margin-bottom: 20px;
            }

            .hi textarea {
                width: 100%;
                height: 250px;
            }

            .hiU {
                display: flex;
            }

            .hi2 {
                width: 40%;
            }

            .hu {
                width: 100%;
            }

            .numb {
                display: flex;
                gap: 20px;
            }

            .nu input {
                width: 50%;
                height: 30px;
                padding-left: 20px;
            }

            .btnn {
                width: 30%;
                height: 35px;
                font-size: 18px;
                font-weight: 900;
                background-color: rgb(193, 28, 28);
                border: none;
                border-radius: 5px;
                color: aliceblue;
            }

            .btnn:hover {
                background-color: rgb(238, 253, 253);
                color: rgb(193, 28, 28);
                border: 2px solid rgb(193, 28, 28);
            }
        </style>
    </head>

    <body>
        <form action="addPost.php" method="post" enctype="multipart/form-data">
            <div class="outer">
                <div class="alogo">
                    <a href="../home.php"><img src="../image/Untitled-2.png" alt="logo"></a>
                    <label for="">Add Creation</label>
                </div>
                <div class="first">
                    <label for="" class="lab"><?php echo $type ?></label>
                    <h1>Property Type</h1>
                    <?php if ($type == "Sale") { ?>
                        <select name="type" id="sale" class="type" name="type">
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Bungalow">Bungalows</option>
                            <option value="Villa">Villas</option>
                            <option value="studio">Studios / Bedsit</option>
                        </select>
                    <?php } elseif ($type == "Rent") { ?>
                        <select name="type" id="rent" class="type" name="type">
                            <option value="House">House</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Bungalow">Bungalows</option>
                            <option value="Villa">Villas</option>
                            <option value="Annexes">Annexes</option>
                            <option value="studio">Studios / Bedsit</option>
                            <option value="studio">Rooms / Boarding Place</option>
                        </select>
                    <?php } else { ?>
                        <select name="type" id="rent" class="type" name="type">
                            <option value="House">Bare Land</option>
                            <option value="Apartment">Beachfront Land</option>
                            <option value="Commercial">Cultivated / Agriculture</option>
                            <option value="Bungalow">Land With House</option>
                            <option value="Villa">Tea Land</option>
                            <option value="Annexes">Rubber Land</option>
                            <option value="studio">Coconut Land</option>
                            <option value="studio">Paddy Land</option>
                            <option value="studio">Cinnamon Land</option>
                            <option value="studio">Waterfront(Lake/River)</option>
                        </select>
                    <?php } ?>
                    <h1>City</h1>
                    <input type="text" placeholder="Enter Your City" class="in" name="town">
                </div>
                <div class="second">
                    <h1>Basic Details</h1>
                    <?php if ($type == "Sale" || $type == "Rent") {
                        echo $type;
                    ?>

                        <div class="bDetail">
                            <div class="bed">
                                <h3>Bedrooms</h3>
                                <input type="number" id="quantity" min="0"  placeholder="0" name="bed">
                            </div>
                            <div class="bath">
                                <h3>Bathrooms</h3>
                                <input type="number" id="quantity" min="0"  placeholder="0" name="bath">
                            </div>
                            <div class="land">
                                <h3>Floor Area</h3>
                                <input type="number" id="quantity" min="0" placeholder="Eg: 1650" name="f_area"> <label>
                                    sq
                                    ft</label>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="land">
                        <h3>Size of Land Area</h3>
                        <input type="number" id="quantity" min="0" placeholder="EX:35" name="l_area">
                        <label>
                            Perches</label>
                    </div>
                </div>
                <div class="first">
                    <h1>Price Details</h1>
                    <div class="price">
                        <h3>Expected Price in Rs</h3>
                        <input type="number" id="quantity" min="0" placeholder="Eg: 30,000,000" name="price">
                        <label for="">Fixed Price</label>
                    </div>
                </div>
                <div class="first">
                    <h1>Property Details</h1>
                    <div class="pri">
                        <div class="F_N">
                            <div class="item">
                                <h3>No of floors</h3>
                                <input type="number" id="quantity" min="0" name="floors">
                            </div>
                            <div class="item">
                                <h3>Parking</h3>
                                <input type="number" id="quantity" min="0"  name="park">
                            </div>
                        </div>
                        <div class="F_N">
                            <div class="item">
                                <h3>Width of approach road (in feet)</h3>
                                <input type="number" id="quantity" min="0" placeholder="eg:35" name="f_for_r">
                            </div>
                            <div class="item">
                                <h3>Status</h3>
                                <select name="status" id="">
                                    <option value="Available Now">Available Now</option>
                                    <option value="Available soon">Available soon</option>
                                    <option value="Price reduced">Price reduced</option>
                                    <option value="Offer Received">Offer Received</option>
                                    <option value="Sold">Sold</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="first">
                    <div class="hi">
                        <h1>Ad Details</h1><br><br>
                        <h3>Ad Heading</h3>
                        <input type="text" name="head">
                        <h3>Description</h3><br>
                        <textarea name="dis" id=""></textarea>
                    </div>
                </div>
                <div class="first">
                    <div class="hiU">
                        <div class="hi2">
                            <h1>Your Contact Details</h1><br><br>
                            <b>Name : </b>
                            <label for=""><?php echo $row["name"] ?></label> <br><br>
                            <b>E-mail Address</b>
                            <label for=""><?php echo $row["email"] ?></label>
                        </div>
                        <div class="nu">
                            <h1>Contact Tel Number</h1><br>
                            <h4>name : </h4><br>
                            <div class="numb">

                                <input type="text" name="name" placeholder="Name">
                                <input type="text" name="number" placeholder="Contact Number">
                            </div>
                        </div>
                    </div><br><br>
                    <h3>Upload images</h3><br>
                    <input type="file" id="myFile" name="image" accept=".jpg, .jpeg, .png">
                    <button type="submit" class="btnn" name="btn" value="<?php echo $type ?>">Create Post</button>
                </div>
            </div>
        </form>
    </body>

    </html>
<?php
}
?>