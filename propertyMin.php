<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .adContainer {
            width: 80%;
            background-color: rgb(227, 243, 243);
            display: flex;
            box-shadow: 0 0 30px 1px rgba(155, 243, 255, 0.5);
            margin: auto;
        }
        .adContainer:hover {
            box-shadow: 0 0 30px 7px  rgba(155, 243, 255, 0.8);
        }
        .imgContainer {
            position: relative;
            width: 40%;
            height: 270px;
        }

        .imgContainer img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: relative;
        }

        .imgContainer .type {
            background-color: green;
            padding: 2px 25px;
            position: absolute;
            color: white;
            top: 10px;
            right: 30px;
        }

        .imgContainer .town {
            position: absolute;
            background-color: rgba(0, 0, 0, 0.511);
            padding: 0 25px;
            color: white;
            top: 235px;
            left: 30px;
        }

        .DetailContai {
            width: 60%;
            padding: 40px 30px;
        }

        .DetailContai h2 {
            padding-bottom: 10px;
        }

        .DetailContai .price {
            color: rgb(14, 172, 14);
            font-size: 20px;
            font-weight: 900;
        }

        .period {
            color: rgb(14, 172, 14);
            font-size: 18px;
        }

        .overView {
            margin: 30px 0 0 0;
            display: flex;
            gap: 25px;
            color: rgb(62, 58, 58);
        }

        .overView label {
            font-size: 15px;
            font-weight: 700;
        }

        .inofbtn {
            color: white;
            border-radius: 2px;
            border: none;
            background-color: rgb(14, 172, 14);
            padding: 3px 25px;
            text-decoration: none;
            font-weight: 600;
        }

        .inofbtn:hover {
            color: rgb(14, 172, 14);
            background-color: white;
            border: 1px solid rgb(14, 172, 14);
        }

        .btncontainer {
            width: 100%;
            display: flex;
            justify-content: right;
            position: relative;
            top :75px;
        }
    </style>
</head>

<body>
    <div class="adContainer">
        <div class="imgContainer">
            <img src="propertyImage/pexels-photo-7005453.jpeg" alt="furnicher">
            <label class="type">Apartment</label>
            <label class="town"><i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp;&nbsp;Colombo</label>
        </div>
        <div class="DetailContai">
            <h2>Headline</h2>
            <label for="" class="price">Rs.450,000.00</label> <label for="" class="period">Per Month</label>
            <div class="overView">
                <div>
                    <i class="fa fa-bed" aria-hidden="true"></i> <label for=""> 2</label>
                </div>
                <div>
                    <i class="fa fa-bath" aria-hidden="true"></i><label for=""> 5</label>
                </div>
                <div>
                    <i class="fa fa-area-chart" aria-hidden="true"></i><label for=""> 522 sq ft</label>
                </div>
            </div>
            <div class="btncontainer">
                <a href="propertyDtails.php" class="inofbtn">Full info</a>
            </div>
        </div>
    </div>
</body>

</html>