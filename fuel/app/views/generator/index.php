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
          color: white;
          table-layout: fixed;
          width: 75%;
      }
      thead,
      tfoot {
          color: #fff;
      }

      .TableOneLeft {
        width: 20%;
      }

      .TableOneRight {
        width: 80%;
      }
    </style>
  </head>

  <header>
    <div>
      <h3>Color Coordinate Generator</h3>
    </div>
  </header>

  <body>
    <div>
      <form method="get" action="generator.php">
        <label for="colors">Number of colors?</label>
        <input type="number" name="colors" id="colors" value=<?php echo $colors;?> onClick="this.select();">
        <?php
        if ($valid_colors == false) {
          $colors_error_placeholder = 'error';
        }
        ?>
        <span class=<?php echo $colors_error_placeholder ?>><?php echo $colors_error_message;?></span>
        <br><br>

        <label for="size">Size of table 2?</label>
        <input type="number" name="size" id="size" value=<?php echo $size;?> onClick="this.select();">
        <?php
        if ($valid_size == false) {
          $size_error_placeholder = 'error';
        }
        ?>
        <span class=<?php echo $size_error_placeholder ?>><?php echo $size_error_message;?></span>
        <br><br>

        <input type="submit" value="Submit"> 
      </form>

      <br>
      <?php if($valid_size && $valid_colors): ?>
        <p>Table 1<p>
        <table>
          <tbody>
              <?php
              for ($row = 0; $row < $colors; $row++) {
                $display_row = $row + 1;
                echo "<tr>";
                echo "<td class=TableOneLeft>Color drop-down</td>";
                echo "<td class=TableOneRight>Selected color</td>";
                echo "</tr>";
              }
              ?>
          </tbody>
        </table>
        <br>
        <p>Table 2<p>
        <table>
          <tbody>
              <tr>
                <td></td>
                <?php
                for ($letter = 0; $letter < $size; $letter++) {
                  echo "<td>$alphabet[$letter]</td>";
                }
                ?>
              </tr>
                <?php
                for ($row = 0; $row < $size; $row++) {
                  $display_row = $row + 1;
                  echo "<tr><td>$display_row</td>";
                  for ($letter = 0; $letter < $size; $letter++) {
                    echo "<td></td>";
                  }
                  echo "</tr>";
                }
                ?>
          </tbody>
        </table>
      <?php endif; ?>
    </div>
  </body>
</html>
