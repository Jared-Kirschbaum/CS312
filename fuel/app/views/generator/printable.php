<?php

$size = isset($_GET['size']) ? intval($_GET['size']) : 10;

$colors = isset($_GET['colors']) ? json_decode($_GET['colors']) : array();



$alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>Printable View</title>

    <style>

        body {

            font-family: "Arial";

            font-size: larger;

            color: black;

        }

        table,

        td {

            border: 1px solid #333;

            table-layout: fixed;

            width: 100%;

        }

        thead,

        tfoot {

            background-color: #f2f2f2;

            color: #333;

        }

    </style>

</head>
<div class="navbar">

      <i><?php echo Asset::img('logo.png', array('style' => 'width: 160x; height: 80px;'))?></i>

      <a>ESK llc.</a>
    </div>

<body>

    <header>

        <h3>Color Coordinate Generator - Printable View</h3>

    </header>



    <div>

        <p>Table 1</p>

        <table>

            <tbody>

            <?php

            for ($row = 0; $row < count($colors); $row++) {

                $display_row = $row + 1;

                echo "<tr>";

                echo "<td>{$colors[$row]}</td>";

                echo "<td>Selected color</td>";

                echo "</tr>";

            }

            ?>

            </tbody>

        </table>

        <br>

        <p>Table 2</p>

        <table>

            <tbody>

            <tr>

                <td></td>

                <?php

                for ($letter = 0; $letter < $size; $letter++) {

                    echo "<td>{$alphabet[$letter]}</td>";

                }

                ?>

            </tr>

            <?php

            for ($row = 0; $row < $size; $row++) {

                $display_row = $row + 1;

                echo "<tr><td>{$display_row}</td>";

                for ($letter = 0; $letter < $size; $letter++) {

                    echo "<td></td>";

                }

                echo "</tr>";

            }

            ?>

            </tbody>

        </table>

    </div>

</body>

</html>
