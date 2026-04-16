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
            </style>
        </head>
        <body>
            <?php
                date_default_timezone_set("Europe/Zagreb");
                $sat = date("G");
                $dan = date("N");

               function ducan($stanje="otvoren") {
                    echo "Dućan je ovog trena $stanje.";
               }
               if ($dan >=1 && $dan <=5) {
                if ($sat >=8 && $sat <= 20) {
                    ducan();
                } else {
                    ducan("zatvoren");
                }
               }
               else if ($dan == 6) {
                if ($sat >= 9 && $sat <= 14) {
                    ducan();
                }
                else if ($dan == 7) {
                    ducan("zatvoren");
                }
               }
            ?>
        </body>
</html>
