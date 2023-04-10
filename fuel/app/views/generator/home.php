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

    padding-right: 38%;

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

  

  .navbar a:hover {

    background-color: #ffffff;

    color: rgb(0, 0, 0);

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

    margin-right: 20px;

    color: white;

}



  /* Style for the container */

  .container {

    display: flex;

    flex-direction: column;

    justify-content: space-between;

    align-items: center;

    margin: 20px;

}



.container_two {

    display: flex;

    flex-direction: column;

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

    font-size: 100px;

    color: white;

}

</style>
    <title>M1</title>
  </head>
  <body>
     </head>
  <body>
    <div class="navbar">
      <i><?php echo Asset::img('logo.png', array('style' => 'width: 160x; height: 80px;'))?></i>
      <a class = "active" href="home.html">Home</a>
      <a href="about.html">About</a>
      <a href="/~jaredk1/m1">Color Coordinate Generation</a>
    </div>
    <div class="container">
        <div class = "container_two">
        <h1>ESK</h1>
        </div>
        <div class = "container_two">
        <h3>Collaborate on Buisness Needs</h3>
        <p>ESK is a leading technology company that specializes in artificial intelligence,
            front-end development using Fuel, PHP, HTML, and CSS, and backend development using MySQL and Python.
            With a team of experienced professionals, ESK is dedicated to providing innovative solutions that help businesses
            stay ahead of the curve in today's rapidly evolving digital landscape.</p>
        </div>
        <div class = "container_two">
        <h3>Leverage AI</h3>
        <p>At ESK, we believe that artificial intelligence is the future of technology, and we are committed to leveraging
           this powerful technology to help our clients solve complex business challenges. Our AI solutions are tailored to
           meet the unique needs of each client, and we work closely with them to ensure that our solutions are effective and efficient.</p>
        </div>
        <div class = "container_two">
        <h3>Front End Development</h3>
        <p>In addition to AI, we specialize in front-end development using Fuel, PHP, HTML, and CSS. Our team of designers and developers
           are passionate about creating user-friendly and visually appealing websites and applications that deliver an exceptional user 
           experience.</p>
        </div>
        <div class = "container_two">
        <h3>Backend Development</h3>
        <p>On the backend side, we utilize the power of MySQL and Python to develop robust and scalable applications that can handle large amounts
           of data and complex workflows. Our backend solutions are designed to be secure, efficient, and easy to maintain, ensuring that our clients 
   can focus on growing their businesses without worrying about the technical details.</p>
       </div>
        <div class = "container_two">
        <h3>Vision Statement</h3>
        <p>At ESK, we are dedicated to providing our clients with the highest level of service and support. We work closely with them to understand their
           unique business needs and goals, and we are committed to delivering solutions that exceed their expectations. If you are looking for a 

           technology partner that can help you stay ahead of the curve, look no further than ESK.</p>        

        </div>

    </div>

  </body>

</html>
