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



    

      .TableOneLeft {

        width: 20%;

      }



      .TableOneRight {

        width: 80%;

      }

  </style> 



    







  <head>



    <meta charset="UTF-8">



    <title>CCG</title>



    <meta name="description" content="Color Coordinate Generator">



    <style>



        .error {



            color: white;



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



    </style>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



    <script>



        $(document).ready(function () {



            const colorOptions = ['red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal'];

            let colorCoordinates = {
              "red": [],
              "orange": [],
              "yellow": [],
              "green": [],
              "blue": [],
              "purple": [],
              "grey": [],
              "brown": [],
              "black": [],
              "teal": []
            }



            let selectedColors = new Set();






            function createDropdown(row) {



                let select = $('<select>');



                select.attr('name', `color${row}`);



                select.attr('id', `color${row}`);



                select.attr('data-prev', '');







                for (let i = 0; i < colorOptions.length; i++) {



                    let option = $('<option>');



                    option.attr('value', colorOptions[i]);



                    option.text(colorOptions[i]);



                    select.append(option);



                }



                let oldColor = null
                select.on('click', function () {
                  oldColor = document.getElementById(event.currentTarget.id).value
                })

                select.on('change', function () {

                    let prevValue = $(this).data('prev');



                    let currentValue = $(this).val();







                    if (selectedColors.has(currentValue)) {



                        $(this).val(prevValue);



                        showColorError();



                    } else {



                        selectedColors.delete(prevValue);



                        selectedColors.add(currentValue);



                        $(this).data('prev', currentValue);



                        hideColorError();



                    }

                    let newColorCoordinates = {
                    "red": [],
                    "orange": [],
                    "yellow": [],
                    "green": [],
                    "blue": [],
                    "purple": [],
                    "grey": [],
                    "brown": [],
                    "black": [],
                    "teal": []
                  }
                  // CHANGE CELL COLOR
                  let newColor = document.getElementById(event.currentTarget.id).value
                  // if (!selectedColors.contains(newColor)) {
                    let table = document.getElementById("tableTwoBottom")
                    for (let r = 1; r < table.rows.length; r++) {
                      for (let c = 1; c < table.rows[r].cells.length; c++) {
                        let color = table.rows[r].cells[c].style["backgroundColor"]
                        let coordinate = table.rows[r].cells[c].id
                        if (color !== '') {
                          if (color === oldColor) { // change this color
                            table.rows[r].cells[c].style["backgroundColor"] = newColor
                            newColorCoordinates[newColor].push(coordinate)
                            newColorCoordinates[newColor] = newColorCoordinates[color].sort()
                          }
                          else {
                            newColorCoordinates[color].push(coordinate)
                            newColorCoordinates[color] = newColorCoordinates[color].sort()
                          }
                        }
                      }
                    }
                  // }


                  colorCoordinates = newColorCoordinates

                    // DISPLAY COLOR COORDINATES
                    let topTable = document.getElementsByClassName("TableOneLeft").length // for every row of color coordinates
                    for (let c = 0; c < topTable; c++) {
                      let color = document.getElementById(`color${c}`).value
                      document.getElementById(c).children[1].innerHTML = colorCoordinates[color].join(", ")
                    }
                });







                return select;



            }







            function showColorError() {



                $('#colorError').removeClass('hidden');



            }







            function hideColorError() {



                $('#colorError').addClass('hidden');



            }







            if (<?= json_encode($valid_size && $valid_colors) ?>) {



                for (let row = 0; row < <?= json_encode($colors) ?>; row++) {



                    let dropdown = createDropdown(row);



                    let color;



                    do {



                        color = colorOptions[Math.floor(Math.random() * colorOptions.length)];



                    } while (selectedColors.has(color));



                    selectedColors.add(color);



                    dropdown.val(color);



                    dropdown.data('prev', color);



                    $('#colorDropdown' + row).html(dropdown);



                }

                let selectedColor = Array.from(selectedColors)[0] // default to the color in the first row
                document.getElementById('selectedColor').innerHTML = selectedColor





              $('#printButton').on('click', function () {



                let url = 'printable?size=' + encodeURIComponent(<?= json_encode($size) ?>) +



                '&colors=' + encodeURIComponent(JSON.stringify(Array.from(selectedColors)));







                window.location.href = url;



            });
            $('.TableOneRight').on('click', function () {
              let color = document.getElementById(`color${event.currentTarget.id}`).value
              selectedColor = color
              document.getElementById('selectedColor').innerHTML = color

            });

            $('.tableTwoCell').on('click', function () {
              $(`#${event.currentTarget.id}`).css({
                'background-color': selectedColor
              })

              // COUNT COLOR COORDINATES
              let newColorCoordinates = {
              "red": [],
              "orange": [],
              "yellow": [],
              "green": [],
              "blue": [],
              "purple": [],
              "grey": [],
              "brown": [],
              "black": [],
              "teal": []
            }

              let table = document.getElementById("tableTwoBottom")
              for (let r = 1; r < table.rows.length; r++) { // count colors and update object
                for (let c = 1; c < table.rows[r].cells.length; c++) {
                  let color = table.rows[r].cells[c].style["backgroundColor"] // e.g. 'green'
                  let coordinate = table.rows[r].cells[c].id // e.g. 'A4'
                  if (color !== '') {
                    newColorCoordinates[color].push(coordinate)
                    newColorCoordinates[color] = newColorCoordinates[color].sort()
                  }
                }
              }

              colorCoordinates = newColorCoordinates

              // DISPLAY COLOR COORDINATES
              let topTable = document.getElementsByClassName("TableOneLeft").length // for every row of color coordinates
              for (let c = 0; c < topTable; c++) {
                let color = document.getElementById(`color${c}`).value
                document.getElementById(c).children[1].innerHTML = colorCoordinates[color].join(", ")
              }
            });


            }



        });



    </script>



  </head>



 <div class="navbar">

      <i><?php echo Asset::img('logo.png', array('style' => 'width: 160x; height: 80px;'))?></i>

      <a href="home">Home</a>

      <a href="about">About</a>

      <a class = "active">Color Coordinate Generation</a>

    </div>

  <header>



    <div>



      <h3>Color Coordinate Generator</h3>



    </div>



  </header>







  <body>



    <div>



      <form method="get" action="index.php">



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



                echo "<td class=TableOneLeft id='colorDropdown{$row}'>Color drop-down</td>";



                echo "<td class=TableOneRight id='{$row}'>
                <button>Select Color</button>
                <span id=`coordinateRow{$row}`></span>
                </td>";



                echo "</tr>";



              }



              ?>



          </tbody>



        </table>



        <div id="colorError" class="hidden error">You cannot select the same color twice.</div>



        <br>



        <p>Table 2<p>

        <span>Selected color: <span id='selectedColor'></span></span>

        <table id="tableTwoBottom">



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



                          echo "<td class=tableTwoCell id='{$alphabet[$letter]}{$display_row}'></td>";



                        }



                        echo "</tr>";



                      }



                      ?>



              </tbody>



            </table>



        <?php endif; ?>



        <?php if($valid_size && $valid_colors): ?>

     
        <button id="printButton">Printable View</button>



        <?php endif; ?>



    </div>



  </body>



</html>


