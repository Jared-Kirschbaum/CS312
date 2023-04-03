<!DOCTYPE html>
<html>
 <head>
  <style>
      .navbar {
       background-color: rgb(26, 27, 24)000;
       background-repeat: no-repeat;
       background-position: left;
       background-size: contain;
       height: 100px; 
       display: flex;
       justify-content: center;
       align-items: center;
       padding-right: 36%;
     }


     .navbar a {
       font-family: 'Arial';
       float: left;
       color: #f2f2f2;
       text-align: center;
       padding: 10px 16px;
       text-decoration: none;
       font-size: 20px;
   }

     .navbar a:hover {
       background-color: #ffffff;
       color: black;
     }

     .navbar a.active {
       background-color: #ffffff;
       color: rgb(0, 0, 0);
     }

     .navbar i {
       height: 100px;
       width: 100px;
       float: left;
       padding-left: 2%;
       margin: 0 auto;
       padding: 10px 0;
       padding-right: 50%;
   }

   .navbar i img {
   object-fit: cover;
   height: 100px;

   }

     body {
       background-color: rgb(26, 27, 24);
     }

     p {
       font-family: 'Arial';
       font-size: larger;
       text-align: justify;
       color: white;
       margin-right: 20px;
     }

     /* Style for the container */
     .container {
       display: flex;
       flex-direction: row-reverse;
       justify-content: space-between;
       align-items: center;
       margin: 20px;
     }




     h3 {
       font-family: "Arial";
       color: white;
   }


   h1 {
       font-family: "Arial";
       font-size: 50px;
       color: white;
       text-align:center;

   }
  </style>
   <title>About</title>
    <link rel="stylesheet" type="text/css" href="~/local_html/m1/assets/css/about.css">
  </head>
  <body>
     </head>
  <body>
    <div class="navbar">
      <i href="home.html"><img src="C:\Users\jared\Documents\CS312\m1\logo.png" scale=></img></i>
      <a href="home.html">Home</a>
      <a class = "active" href="about.html">About</a>
      <a href="index.php">Color Coordinate Generation</a>
    </div>
    <p></p>
    <h1>Company Leadership</h1>
    <h3>Jared Kirschbaum | Founder / Co-Owner</h3>
    <div class="container">
        <img src="C:\Users\jared\OneDrive\Pictures\jared.png" alt="Person 1" />
      <p>With a background in data science and a strong passion to share knowledge
         and lead by example through technical expertise. Jared is highly capable of working alone or as a member of a team, and
         when the need arises to take the initiative by solving the most challenging of problems to ensure customer satisfaction and product enhancement.
         With over 9+ years in the intelligence community and special operations, he aims to integrate leading Artificial Intelligence
         practices into the defense and national security industry.</p>
    </div>
    <h3>Edelen Hunter | Founder / Co-Owner</h3>
    <div class="container">
        <img src="C:\Users\jared\Documents\CS312\m1\logo.png" alt="Person 2" />
      <p>
        Edelen Hunter
      </p>
    </div>
    <h3>Stransky Justin | Founder / Co-Owner</h3>
    <div class="container">
        <img src="C:\Users\jared\Documents\CS312\m1\logo.png" alt="Person 3" />
      <p>
        Stransky Justin
      </p>
    </div>
  </body>
</html>
