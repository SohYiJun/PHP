<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
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
    .all-blog{
  border-radius: 13px ;
  margin: auto;
  margin-top: 5%;
  width: 1200px;
  height: 800px;
}
  .blog{
        margin: auto;
        height: 350px;
        width: 1200px;
        font-size: 20px;
        background-color: antiquewhite;
        color: black;
        text-align: center;
        padding: 20px; 
        border-radius: 13px;
        border: 1px solid black;
        margin-bottom: 20px;
  }
  .blog>h2{
    margin-top: 6%;
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
  <body>

    <!-- <body class="p-3 m-0 border-0 bd-example"></body> -->
    
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

    <h1 style="text-align: center">Competition</h1>

      <div class="all-blog">
        <div class="blog">
          <img src="FIBA_3x3_Logo_black.png"  style="float:left" width="400px" height="300px"/>
            <h2>BASKETBALL TOURNAMENT 3V3</h2>
            <p>Basketball tournament 3V3 is coming soon at TARUMT KL Campus!!! <br>
                Please click the button below for full details </p><br>
              <a href="competition1.php"><button type="button" class="btn btn-secondary ">View Competition Detail</button></a>
    
        </div>
        <div class="blog">
          <img src="5v5.png"  style="float:left" width="400px" height="300px"/>
            <h2>BASKETBALL TOURNAMENT 5V5</h2>
            <p>Basketball tournament 5V5 is coming soon at TARUMT KL Campus!!! <br>
                Please click the button below for full details</p><br>
           <a href="competition2.php"><button type="button" class="btn btn-secondary">View Competition Detail</button></a>
        </div>
        </div>

        <footer class="footer">
		<p>Example footer &copy; 2023</p>
		<p>Created by <a href="#">Yijun</a></p>
	</footer>
  </body></html>
