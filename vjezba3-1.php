<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Zadatal 3-1</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            .tocno {
                padding: 10px;
                background-color: green;
                color: white;
                width: 50px;
                display: inline-block;
                margin-top: 20px;
                text-align: center;
                border-radius: 8px;
                font-size: 16px;
            }
            .netocno {
                padding: 10px;
                width: 180px;
                background-color: red;
                color: white;
                display: inline-block;
                margin-top: 20px;
                text-align: center;
                border-radius: 8px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <h5>Igra (pogodi broj)</h5>
        <form method="post">
            <label>Upiši jedan broj od 1 do 10*</label>
            <input type="number" name="broj" required>

            <?php
                if(isset($_POST["broj"])) {
                    $broj=$_POST["broj"];
                    $izmisljeni=rand(1, 10);

                    if($broj == $izmisljeni) {
                        echo "<br><div class='tocno'>Pogodak, probaj ponovno!</div>";
                    }
                    else {
                        echo "<br><div class='netocno'>Krivo, probaj ponovno!</div>";
                    }
                    echo "<br><br>Zamišljeni broj je $izmisljeni";
                }
            ?>
        </form>
    </body>
</html>