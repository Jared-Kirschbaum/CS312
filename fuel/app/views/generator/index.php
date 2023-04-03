<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CCG</title>
    <meta name="description" content="Color Coordinate Generator">
    <style>
      .error {
        color: #EA4AAA;
        background-color: #FCEDF5;
        font-family: 'system-ui';
        padding: 5px;
      }
      table,
      td {
          border: 1px solid #333;
      }
      thead,
      tfoot {
          background-color: #333;
          color: #fff;
      }
    </style>
  </head>

  <header>
    <div>
      <h1>Color Coordinate Generator</h1>
    </div>
  </header>

  <body>
    <div>
      <form method="get" action="generator.php">
        <label for="size">Number of rows and columns?</label>
        <input type="number" name="size" id="size" value=<?php echo $size;?> onClick="this.select();">
        <?php
        if ($valid_size == false) {
          $size_error_placeholder = 'error';
        }
        ?>
        <span class=<?php echo $size_error_placeholder ?>><?php echo $size_error_message;?></span>
        <br><br>

        <label for="colors">Number of colors?</label>
        <input type="number" name="colors" id="colors" value=<?php echo $colors;?> onClick="this.select();">
        <?php
        if ($valid_colors == false) {
          $colors_error_placeholder = 'error';
        }
        ?>
        <span class=<?php echo $colors_error_placeholder ?>><?php echo $colors_error_message;?></span>
        <br><br>

        <input type="submit" value="Submit"> 
      </form>

      <br>
      <?php if($valid_size && $valid_colors): ?>
        <table>
          <thead>
              <tr>
                  <th colspan="2">CCG Table</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Size: <?php echo $size ?></td>
                  <td>Colors: <?php echo $colors ?></td>
              </tr>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </body>
</html>