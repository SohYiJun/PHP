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
      body{
          height:900px;
          
      }
      .card{
    background-color: antiquewhite;
    text-align: center;
    
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

    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="competitionPage.php">TARUMT </a>
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

     
    <div class="mt-2 p-5 card-group" style="width:1200px; height:700px; margin-left: 10%; margin-bottom: 10em;" >
      <div class="card">
        <img src="FIBA_3x3_Logo_black.png" class="m-auto mt-2 card-img-top" style="height: 320px; width:320px;" alt="3v3">
        <div class="card-body">
          <h5 class="card-title">BASKETBALL TOURNAMENT 3v3</h5>
          <p class="card-text"> Whatssup guys! Come and show off what you got 😏🔥
            IPG and Taruc Basketball Club are having collaboration by organising a 3x3 competition at this coming 25th June 2022! Open to every universities/colleges students (with valid student ID) Register yourself here:  https://forms.gle/6BNEeMtiiBu64Bbk8
            or click at the registration link at Instagram 👉🏻👉🏻👉🏻@taruc.klbasketballclub 's bio profile. See ya soon! 😜
           <br>Venue : TARUC , Setapak KL 
           <br>Time : 10am to 5pm
           <br>Instagram: @taruc.klbasketballclub
           <br>More details call: 0126830994
           <br> Or email to: hr@ipgmy.com
           <br> Registration fees RM150/per team (Maximum up to 4 person)
           <br>All players will be given a jersey set. 
           <br>Open to all universities/colleges students with valid student ID
           <br> *National players are not allowed*
           Registrations will be closed on 3 June 2022/upon having 64 teams , whichever comes first   
          </p>     
          
          <a href="competitionPage.php"><button type="button" class="btn btn-secondary " >Back</button></a>
          <a href="form.php?cat=3"><button type="button" class="btn btn-primary ">Register</button></a>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    
      <footer class="footer">
		<p>Example footer &copy; 2023</p>
		<p>Created by <a href="#">Yijun</a></p>
	</footer>
  </body>
</html>
