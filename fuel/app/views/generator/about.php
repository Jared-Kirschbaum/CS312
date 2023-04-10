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


i {
      padding-right: 50%;
}
.logo {
      align-items: left;
      width: 10px;
      height: 10px;
}

</style>
   <title>About</title>
    <link rel="stylesheet" type="text/css" href="~/local_html/m1/assets/css/about.css">
  </head>
  <body>
     </head>
  <body>

    <div class="navbar">
      <i><?php echo Asset::img('logo.png', array('style' => 'width: 160x; height: 80px;'))?></i>
      <a href="home.html">Home</a>
      <a class = "active" href="about.html">About</a>
      <a href="/~jaredk1/m1">Color Coordinate Generation</a>
    </div>
    <p></p>
    <h1>Company Leadership</h1>
    <h3>Jared Kirschbaum | Founder / Co-Owner</h3>
    <div class="container">
      <?php echo Asset::img('jared.jpeg', array('style' => 'width: 250px; height: 250px;'))?>
      <p>With a background in data science and a strong passion to share knowledge
         and lead by example through technical expertise. Jared is highly capable of working alone or as a member of a team, and 
         when the need arises to take the initiative by solving the most challenging of problems to ensure customer satisfaction and product enhancement.
         With over 9+ years in the intelligence community and special operations, he aims to integrate leading Artificial Intelligence
         practices into the defense and national security industry.</p>
    </div>
    <h3>Edelen Hunter | Founder / Co-Owner</h3>
    <div class="container">
          <?php echo Asset::img('HunterPic.jpg', array('style' => 'width: 250px; height: 250px;'))?>
      <p>
        Hello, my name is Hunter Edelen, I am a CS Major. I am passionate about learning as well as rock climbing, hiking, and traveling. I love pushing myself and believe the greatest moments in life are on the other side of our comfort zone. I am currently pursuing a career in software engineering and am very passionate about learning new skills. My end goal is to be able to travel the world, see new things, learn, and experience as much as I can.
      </p>
    </div>
    <h3>Stransky Justin | Founder / Co-Owner</h3>
    <div class="container">
        <?php echo Asset::img('justin.jpg', array('style' => 'width: 250px; height: 250px;'))?>
      <p>
        I am a senior at Colorado State University hoping to enter the software engineering field. I enjoy going to the gym and playing music on my guitar. Once I graduate this May, one of my lifelong goals will be complete!
      </p>
    </div>
  </body>
</html>
