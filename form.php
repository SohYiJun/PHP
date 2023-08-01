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

        .form{
            background-color: antiquewhite;
            margin: auto;
            border-radius: 13px;
            border: 1px solid black;
            height: 800px;
            width: 900px;
            margin-top: 5rem;
            margin-left: 19em;
            text-align:center;
            /* padding-left: 20%; */
            margin-bottom: 10rem;
        }
        input[type=text] {
            width: 50%;
            height:20px;
            margin-bottom: 5px;
            padding: 12px;
            border: 1px solid grey;
            border-radius: 3px;
        }

        .footer {

            background-color: grey;
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
        <?php
        $error = array(); //fetch the all error in one array
        $category = $_GET['cat'];
        if (isset($_POST["submit"])) {
            //fectch form value
            $id = $_POST['student_id'];
            $name = $_POST['leader_name'];
            $phone = $_POST['phone_no'];
            $ic = $_POST['ic'];
            $email = $_POST['email'];

            $member1 = $_POST["member1"];
            $member2 = $_POST["member2"];
            $member3 = $_POST["member3"];
            $member4 = $_POST["member4"];

            if (empty($id)) {
                $error[] = "Please enter id";
            } else {
                $regex_id = "^\d{2}[A-Z]{3}\d{5}$^";
                if (!preg_match($regex_id, $id)) {
                    $error[] = "Wrong Format ID";
                }
            }


            if (empty($name)) {
                $error[] = "Please enter Name";
            } else {
                $regex_name = "/^[A-Z]+(?:\s+[A-Z]+)*$/i";
                if (preg_match($regex_name, $name)) {
                    $dbc = new mysqli("localhost", "root", "", "form");
                    $sql = "SELECT * FROM student_info WHERE StudentName = '$name' AND StudentId = '$id'";
                    $result = $dbc->query($sql);
                    if ($result->num_rows == 0) {
                        $error[] = "Name not match with student id";
                    }
                    $dbc->close();
                } else {
                    $error[] = "Wrong Format Name";
                }
            }
            if (empty($phone)) {
                $error[] = "Please enter PhoneNo";
            } else {
                $regex_phone = "/^(\+?6?01)[0-46-9]-*[0-9]{7,8}$/i";
                if (!preg_match($regex_phone, $phone)) {
                    $error[] = "Wrong Format Phone";
                }
            }

            if (empty($ic)) {
                $error[] = "Please enter IC";
            } else {
                $regex_ic = "/^[0-9]{6}-*[0-9]{2}-*[0-9]{4}$/i";
                if (!preg_match($regex_ic, $ic)) {
                    $error[] = "Wrong Format Phone";
                }
            }

            if (empty($email)) {
                $error[] = "Please enter Email";
            } else {
                $regex_email = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/i";
                if (!preg_match($regex_email, $email)) {
                    $error[] = "Wrong Format Email";
                }
            }

            if (isset($_POST["gender"])) {
                $gender = $_POST['gender'];
            } else {
                $error[] = "Gender havent been selected";
            }

            if (empty($member1)) {
                $error[] = "Enter member 1";
            } else {
                $regex_name = "/^[A-Z]+(?:\s+[A-Z]+)*$/i
";
                if (!preg_match($regex_name, $member1)) {
                    $error[] = "Wrong Format Member Name 1";
                }
            }

            if (empty($member2)) {
                $error[] = "Enter member 2";
            } else {
                $regex_name = "/^[A-Z]+(?:\s+[A-Z]+)*$/i
";
                if (!preg_match($regex_name, $member2)) {
                    $error[] = "Wrong Format Member Name 2";
                }
            }
            if ($category == 5) {
                if (empty($member3)) {
                    $error[] = "Enter member 3";
                } else {
                    $regex_name = "/^[A-Z]+(?:\s+[A-Z]+)*$/i
";
                    if (!preg_match($regex_name, $member3)) {
                        $error[] = "Wrong Format Member Name 3";
                    }
                }

                if (empty($member4)) {
                    $error[] = "Enter member 4";
                } else {
                    $regex_name = "/^[A-Z]+(?:\s+[A-Z]+)*$/i
";
                    if (!preg_match($regex_name, $member4)) {
                        $error[] = "Wrong Format Member Name 4";
                    }
                }
            }

            if (!$error) {
                //connect databse 
                $category = $_GET['cat'];

                if ($category == 3) {
                    $dbc = new mysqli("localhost", "root", "", "form");
                    $sql = "INSERT INTO registrationform (StudentId, Leadername,PhoneNo, NRIC, Email, Gender, Price, member1, member2, member3, member4, competition)VALUES ('$id', '$name', '$phone', '$ic', '$email', '$gender','150.00', '$member1', '$member2', '$member3', '$member4', '1')";

                    $dbc->query($sql);
                } else if ($category == 5) {
                    $dbc = new mysqli("localhost", "root", "", "form");
                    $sql = "INSERT INTO registrationform (StudentId, Leadername,PhoneNo, NRIC, Email, Gender,Price, member1, member2, member3, member4, competition)VALUES ('$id', '$name', '$phone', '$ic', '$email', '$gender','250.00', '$member1', '$member2', '$member3', '$member4', '2')";
                    $dbc->query($sql);
                }
                if ($dbc->affected_rows > 0) {

                    echo '<script>window.location.href = "payment_process.php";</script>';
                    exit();
                } else {
                    echo "Unable to insert data to database <br/>";
                }
            } else {
                echo"<div style='background-color:red; color:white; text-align:center;padding-top:10px;padding-bottom:10px;'>";
                foreach ($error as $value) {
                    echo"$value<br>";
                }
                echo"</div>";
            }
        }
        ?>
        <div class="form">
            <form method="POST" action="">
                <h1>Registration Form</h1><br>
                <?php
                $category = $_GET['cat'];

                if ($category == 3) {
                    echo "<h1>BASKETBALL TOURNAMENT 3v3</h1><br>";
                } else if ($category == 5) {
                    echo "<h1>BASKETBALL TOURNAMENT 5v5</h1><br>";
                }
                ?>
                <label for="studentid">Student ID:</label>
                <input type="text" id="student_id" name="student_id" >
                <br><br>
                <label for="fname">Leader name:</label>
                <input type="text" id="leader_name" name="leader_name" >
                <br><br>
                <label for="phoneNo">Phone No:</label>
                <input type="text" id="phone_no" name="phone_no" >
                <br><br>
                <label for="ic">NRIC:</label>
                <input type="text" id="ic" name="ic">
                <br><br>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" >
                <br><br>
                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="Female" > Female
                <input type="radio" name="gender" value="Male" > Male
                <br><br>
                <label for="member1">Member 1:</label>
                <input type="text" id="member1" name="member1" >
                <br><br>
                <label for="member2">Member 2:</label>
                <input type="text" id="member2" name="member2">
                <br><br>
                <label for="member3">Member 3:</label>
                <input type="text" id="member3" name="member3" >
                <br><br>
                <label for="member4">Member 4:</label>
                <input type="text" id="member4" name="member4" >
                <br><br>
                <?php
                $category = $_GET['cat'];

                if ($category == 3) {
                    echo "<p>Registration Fee: RM150</p>";
                } else if ($category == 5) {
                    echo "<p>Registration Fee: RM250</p>";
                }
                ?>
                <input type="reset" value="Reset">
                <?php
                $category = $_GET['cat'];

                if ($category == 3) {
                    echo "<a href='competition1.php'><input type='button' value='Back'></a>";
                } else if ($category == 5) {
                    echo "<a href='competition2.php'><input type='button' value='Back'></a>";
                }
                ?>

                <input type="submit" name="submit" >
            </form> 
        </div>



        <footer class="footer">
            <p>Example footer &copy; 2023</p>
            <p>Created by <a href="#">Yijun</a></p>
        </footer>




    </body>
</html>
