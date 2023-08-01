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
        <title>ViewHistory</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>      
        table, th, td {
            border: 1px solid black;
        }
        h1{
            margin-bottom: 35px;

        }
        .history{

            margin: auto;

            height: 600px;
            width: 900px;

            text-align:center;
        }
        table {
            background-color: antiquewhite;
            margin-top: 15px;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

       
        .searchbar{
            width: 12em;
        }
        .back{
            text-align: center;
            margin-bottom: 100px;
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
        </style>
    <body>
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
        
        <div class="history">
            <h1>View History</h1>
            <form method="post" action="" name="viewHistory">
                <input type="text" class="searchbar" name="search" placeholder="Enter Student Id for view">
                <button name="sub">Search</button>
            </form>
            <table class="table" name="table">
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Price(RM)</th>
                    <th>Competition</th>
                    <th>Status</th>
                </tr>

                <?php
                if (isset($_POST['sub'])) { // corrected typo here
                    $search = $_POST['search'];

                    $con = new mysqli("localhost", "root", "", "form");
                    $sql = "SELECT * FROM registrationform WHERE StudentId = '$search'";

                    $result = $con->query($sql);

                    if ($result && $result->num_rows > 0) {
                        // Loop through each row and display the data in a table
                        while ($row = $result->fetch_object()) {
                            echo "<tr>";
                            echo "<td>$row->Leadername</td>";
                            echo "<td>$row->PhoneNo</td>";
                            echo "<td>$row->Price</td>";
                            if ($row->competition == 1) {
                                echo "<td>3v3</td>";
                            } else if ($row->competition == 2) {
                                echo "<td>5v5</td>";
                            }
                            if ($row->status == 1) {
                                echo "<td>Payment done</td>";
                            } else if ($row->status == 0) {
                               
                               
                                echo "<td><a href='payment_process.php?NO={$row->NO}'><button type='button' class='btn btn-primary btn-sm' >Pending</button></a></td>";
                            }
                            echo "</tr>";
                        }
                    } else {
                        echo "No records found.";
                    }
                }
                ?>

            </table>
        </div>
        <div class="back">
            <a href="competitionPage.php"><button type="button" class="btn btn-secondary ">Back to Competition Page</button></a>
            
        </div>
        
        <footer class="footer">
            <p>Example footer &copy; 2023</p>
            <p>Created by <a href="#">Yijun</a></p>
        </footer>
    </body>
</html>
