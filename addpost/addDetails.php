<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Details</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .out {
            width: 100%;
            background-image: url(1500_louisiana_street_houston_texas-wallpaper-5120x3200.jpg);
            height: 100vh;
            display: flex;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }
        .formContainer {
            width: 80%;
            margin: auto;
            padding: 50px;
            backdrop-filter: blur(9px);
            border: 1px solid black;
            border-radius: 20px;

        }
        .btnContainer{
            margin-top: 20px;
            display: flex;
            gap: 15px;
            justify-content: center;
        }
        .btnContainer button{
            width: 30%;
            height: 250px;
            color:white;
            font-size: 30px;
            font-weight: 900;
            border-radius: 5px;
            border: none;
            background-color: rgb(5, 6, 45);
        }
        .btnContainer button:hover{
            background-color:white ;
            color:rgb(5, 6, 45);
            border: 2px solid rgb(5, 6, 45);
        }
    </style>
</head>

<body>
    <form action="addDetailsform.php" class="out" method="get">
        <div class="formContainer">
            <h1>Select Your Offer type</h1>
            <div class="btnContainer">
                <button type="submit" value="Sale" name="btn">Sale</button>
                <button type="submit" value="Rent" name="btn">Rent</button>
                <button type="submit" value="Land" name="btn">Land</button>
            </div>
        </div>
    </form>
</body>

</html>