<!DOCTYPE html>
<html lang="hr">
        <head>
            <meta charset="UTF-8">
            <title>Zadatak 11</title>
            <style>
                    body {
                        font-family: Arial, Helvetica, sans-serif;
                        margin-top: 20px;
                    }
            </style>
        </head>
        <body>
            <form method="post">
                Unesi broj:
                <input type="number" name="broj" required>
                <input type="submit" value="Provjeri">
            </form>
            <?php
               function prostBroj($broj) {
                if ($broj < 2) {
                    return false;
                }
                for($i=2; $i < $broj; $i++) {
                    if($broj % $i == 0) {
                        return false;
                    }
                } return true;
               }

               if(isset($_POST['broj'])) {
                $broj = $_POST['broj'];

                if (prostBroj($broj)) {
                    echo "Broj $broj je prost.";
                } else {
                    echo "Broj $broj nije prost.";
                }
               }
            ?>
        </body>
</html>
