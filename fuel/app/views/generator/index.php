<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CCG</title>
    <meta name="description" content="Color Coordinate Generator">
    <!-- <link href="./style.css" type="text/css" rel="stylesheet"> -->
  </head>

  <header>
    <div>
      <h1>Color Coordinate Generator</h1>
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
      <p><?php echo $size ?></p>
    </div>
  </body>
</html>