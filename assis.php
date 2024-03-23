<?php
session_start();
include './navigation.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>BUYER & SELLER ASSISTANCE</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .cont table th {
            width: 50%;
            gap: 20px;
        }

        .cont table p,
        h3,
        .cimg {
            line-height: 25px;
            padding-left: 20px;

        }

        .cont thead {
            text-align: left;
        }

        .main {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        center{
            width: 80%;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="main">
        <center>
            <div>
                <br><br>
                <h1>BUYER & SELLER ASSISTANCE</h1><br><br>
                <img src="image/imge1.png" alt=""><br><br><br>
                <p>Need help with your property valuation? Need to get your deeds done? Want help with your housing loan
                    application?Short for time or overwhelmed by the whole process? </p><br>
                <p>Fear not. We’re here to take the hassle off your entire property buying, selling or renting process, so
                    you
                    can look forward to enjoying your new property (or the profits of the sale). Contact us for more
                    information.</p><br>
                <p>Need to get your property valued? We will find certified valuers in your area who will come and do the
                    valuation for you</p><br><br>
            </div><br><br>
            <div>
                <div>
                    <div class="cont">
                        <table>
                            <thead>
                                <tr>
                                    <th><img src="image/im2.png" alt="" class="cimg"></th>
                                    <th><img src="image/leagal.png" alt="" class="cimg"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Property Valuations</h3>
                                    </td>
                                    <td>
                                        <h3>Legal Assistance</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Need to get your property valued? We will find certified valuers in your area who
                                            will come and do the
                                            valuation for you</p>
                                    </td>
                                    <td>
                                        <p>Our panel of reputable and experienced attorneys will provide legal advice,
                                            drafting
                                            documents plus
                                            advise on best ways to keep your documents safe from fraud. Our legal experts
                                            are
                                            also well versed in
                                            helping foreigners buy or lease property
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
    
    
                    </div>
    
                    <div class="cont">
                        <table>
                            <thead>
                                <tr>
                                    <th><img src="image/personal.png" alt="" class="cimg"></th>
                                    <th><img src="image/document.png" alt="" class="cimg"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2>Personal Assistance</h2>
    
                                    </td>
                                    <td>
                                        <h3>Document preparation & submission</h3>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>You will get a personal assistant to help you through the whole process, while
                                            keeping you updated on the
                                            status</p>
                                    </td>
                                    <td>
                                        <p>We will get all your documentation related to the property (such as deeds or
                                            tenancy
                                            agreements) drafted
                                            by reputable attorneys and take care of submitting them to the relevant
                                            authorities
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cont">
                        <table>
                            <thead>
                                <tr>
                                    <th><img src="image/mortage.png" alt="" class="cimg"></th>
                                    <th><img src="image/paid.png" alt="" class="cimg"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h3>Mortgage Advice</h3>
    
                                    </td>
                                    <td>
                                        <h3>Fees & taxes payment</h3>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Looking to get a housing loan? We’ll help you find the best deals and help you
                                            prepare the documents that
                                            the bank will need plus submit them to the bank on your behalf</p>
                                    </td>
                                    <td>
                                        <p>We’ll take care of your stamp duty and municipality payments, so you won’t need
                                            to waste your time going
                                            to multiple govt institutions</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br><br><br>
                <div>
                    <H2>Call us +94 (0)117 167 167</H2>
                </div>
                <br><br><br>
            </div>
        </center>
    </div>

</body>
<?php
include "footer/footer.php"; 
?>
</html>