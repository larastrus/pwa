<!DOCTYPE html>
<html lang="hr">
        <head>
            <meta charset="UTF-8">
            <title>Zadatak 8</title>
            <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                        margin-top: 20px;
                    }
                    li {
                        list-style-type: none;
                    }
                    input[type="submit"] {
                        padding: 12px 15px;
                        background-color: #73c3c3;
                        color: white;
                        border: none;
                        font-size: 12px;
                        cursor: pointer;
                        margin-left: 20px;
                        margin-top: 20px;
                    }
            </style>
        </head>
        <body>
            <?php
                echo "<p>Označi vozilo:</p>";

                $auti = array("Audi", "BMW", "Renault", "Citroen");

                echo "<form method='POST' action='' id='auti'><ul>";
                foreach ($auti as $auto) {
		            echo '<li><input type="radio" name="auto" value="' .$auto . '" required> ' . $auto . '</li>'; 
                }
                echo "
                </ul>
                <p id='gumb'><input type='submit' value='POŠALJI'></p>
                </form>
                ";
                if(isset($_POST['auto'])) {
                    echo $_POST['auto'];
                }
            ?>
        </body>
</html>
