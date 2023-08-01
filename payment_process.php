<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <title>Competitons</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        h2{
            text-align:center;
        }
        .container {
            background-color:lightgrey;
            border: 1px solid lightgrey;
            border-radius: 3px;
            height: 600px;
            width:500px;
            margin-bottom: 100px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid grey;
            border-radius: 3px;
        }
        input[type=number] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid grey;
            border-radius: 3px;
        }
        input.btn {
            background-color:green;
            color: white;
            text-align: center;
            border: 1px solid black;
            border-radius: 3px;

        }

        input.btn:hover {
            background-color:darkseagreen;
        }
        .footer {

            background-color:grey;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            position: relative;
            left: 0;
            bottom: 0;
            width: 100%;

        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }
        .error{
            background-color: red;
            color:white;
        }
    </style>
    <body >
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="competitionPage.php">TARUMT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="competitionPage.php">Competition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ViewHistory.php">View History</a>
                        </li>
                        
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <h2>Please Enter Your Card Details</h2>
        <br>

        <?php
        $error = array(); //fetch the all error in one array

        if (isset($_GET['NO'])) {
            $formNo = $_GET['NO'];
            if (isset($_POST['submit'])) {
                $dbc = new mysqli("localhost", "root", "", "form");
                $sql = "SELECT * FROM registrationform WHERE NO = '$formNo'";
                $dbc->query($sql);
                if ($dbc->affected_rows > 0) {
                    $dbc = new mysqli("localhost", "root", "", "form");
                    $sql = "UPDATE registrationform SET status = 1 WHERE NO = '$formNo'";
                    $result = $dbc->query($sql);
                    echo '<script>window.location.href = "complete_checkout.php";</script>';
                    exit();
                } else {
                    echo "Please check if you enter the correct name <br/>";
                }
            } else {
                echo"<div class='error'><ul>";
                foreach ($error as $value) {
                    echo"<li>$value</li>";
                }
                echo"</ul></div>";
            }
        }


        if (isset($_POST["checkout"])) {
            //fectch form value
            $Cname = $_POST['cardname'];
            $cardNo = $_POST['cardnumber'];
            $expMonth = $_POST['expmonth'];
            $expYear = $_POST['expyear'];
            $cvv = $_POST['cvv'];

            if (empty($Cname)) {
                $error[] = "Enter Name On Card";
            } else {
                $regex_Cname = "/^[A-Z]+(?:\s+[A-Z]+)*$/i";
                if (!preg_match($regex_Cname, $Cname)) {
                    $error[] = "Wrong Format Name On Card";
                }
            }

            if (empty($cardNo)) {
                $error[] = "Enter card number ";
            } else {
                $regex_cardNo = "/^([4-6]\d{3}\s?\d{4}\s?\d{4}\s?\d{4}|\d{4}\s?\d{4}\s?\d{4}\s?\d{4})$/";
                if (!preg_match($regex_cardNo, $cardNo)) {
                    $error[] = "Wrong Format Card number";
                }
            }

            if (empty($expMonth)) {
                $error[] = "Enter card expMonth ";
            } else {
                $regex_expMonth = "^(0[1-9]|1[0-2])$^";
                if (!preg_match($regex_expMonth, $expMonth)) {
                    $error[] = "Wrong Format Card Exp Month";
                }
            }

            if (empty($expYear)) {
                $error[] = "Enter card Exp Year";
            } else {
                $regex_expYear = "^((20\d{2})|(19\d{2}))$^";
                if (!preg_match($regex_expYear, $expYear)) {
                    $error[] = "Wrong Format Card Exp Year";
                }
            }

            if (empty($cvv)) {
                $error[] = "Enter card CVV";
            } else {
                $regex_CVV = "^\d{3}$^";
                if (!preg_match($regex_CVV, $cvv)) {
                    $error[] = "Wrong Format Card CVV";
                }
            }

            if (!$error) {
                //connect databse
                $dbc = new mysqli("localhost", "root", "", "form");
                $sql = "SELECT * FROM registrationform WHERE leadername = '$Cname'";
                $dbc->query($sql);
                if ($dbc->affected_rows > 0) {
                    $dbc = new mysqli("localhost", "root", "", "form");
                    $sql = "UPDATE registrationform SET status = 1 WHERE leadername = '$Cname'";
                    $result = $dbc->query($sql);
                    echo '<script>window.location.href = "complete_checkout.php";</script>';
                    exit();
                } else {
                    echo "Please check if you enter the correct name <br/>";
                }
            } else {
                echo"<div class='error'><ul>";
                foreach ($error as $value) {
                    echo"<li>$value</li>";
                }
                echo"</ul></div>";
            }
        }
        ?>

        <div class="container">
            <form method="post" action="">

                <h3>Payment</h3>
                <img src="cardLogo.jpeg"width="125px"alt=creditcard/><br>
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname" >

                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber" >

                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="expmonth" >

                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" >

                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" >

                <a href="competitionPage.php"><button type="button" class="btn btn-secondary " >Not Now</button></a>
                <input type="submit" name="checkout" id="myButton" class="btn"></a>
            </form>
        </div>
        <footer class="footer">
            <p>Example footer &copy; 2023</p>
            <p>Created by <a href="#">Yijun</a></p>
        </footer>

    </body></html>            
