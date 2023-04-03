<!DOCTYPE html>
<html>
  <style>
    
        label {

            font-family: "Arial";

            font-size: larger;

            margin-right: 20px;

            color: white;

        }.navbar {
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
    

  <head>
    <meta charset="UTF-8">
    <title>CCG</title>
    <meta name="description" content="Color Coordinate Generator">
    <!-- <link href="./style.css" type="text/css" rel="stylesheet"> -->
  </head>

  <header>
    <div>
      <h3>Color Coordinate Generator</h3>
    </div>
  </header>

  <body>
    <div>
      <form method="get" action="generator.php">
        <label for="size">Number of rows/columns (one value)?</label>
        <input type="number" name="size" id="size">
    
        <label for="colors">Number of colors?</label>
        <input type="number" name="colors" id="colors">

        <input type="submit" value="Submit"> 
      </form>
      <p>Size: <?php echo $size ?></p>
      <p><?php
      if ($valid_size) {
        echo 'SUCCESS: ';
        echo $size . ' is a valid size of rows and columns.';
      }
      else {
        echo 'FAILURE: ';
        echo $size . ' is an invalid size of rows and columns.';
      }
      ?></p>
      <br>
      <p>Colors: <?php echo $colors ?></p>
      <p><?php
      if ($valid_colors) {
        echo 'SUCCESS: ';
        echo $colors . ' is a valid number of colors.';
      }
      else {
        echo 'FAILURE: ';
        echo $colors . ' is an invalid number of colors.';
      }
      ?></p>
    </div>
  </body>
</html>
