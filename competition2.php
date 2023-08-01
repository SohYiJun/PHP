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

   

    <div class="mt-2 p-5 card-group" style="width:1200px; height:700px; margin-left: 10%; margin-bottom: 15em;">
      
      <div class="card">
        <img src="5v5.png" class="m-auto mt-2 card-img-top"  style="height: 320px; width:320px;" alt="5v5">
        <div class="card-body">
          <h5 class="card-title">BASKETBALL TOURNAMENT 5v5</h5>
          <p class="card-text"><p>To all basketball enthusiast out there, we are proud to announce that we are having our another competition in the Sports Carnival. ❤️‍🔥⚡️

            <br> Sports Carnival 5V5 Basketball Competition
            <br> 🗓Date: 3rd-7th October 2022
            <br>  ⌚️Time: 06:30pm-9:30pm
            <br> 🏢Venue : TARUC , Setapak KL
             
            <br> Participants that wish for participating in this competition need to pay attention here…
            <br> 🗓Registration date starts: 13th September 2022
            <br> 🗓Registration date ends: 26th September 2022
            <br>  💰Registration fee: RM250/team
             
            <br>  🥇🥈🥉 Hurry up and book your spot in our 5v5 competition!! 🥇🥈🥉
            <br> Prizes will be awarded to the top 3 winners, and most importantly ELE points will be awarded to all participants and winners too!! 🔥
             
            <br> 🗓️ Mark your calendars!!! Registration form link will be released at our bio, you might also scan the QR code given!
             
            <br> 📄Attention!!! Rules and regulations! There’s a link in our bio, or you might also scan the QR code, make sure you read them before register for the competition!</p>
            </p>
            <a href="competitionPage.php"><button type="button" class="btn btn-secondary ">Back</button></a>
          <a href="form.php?cat=5"><button type="button" class="btn btn-primary ">Register</button></a>
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
