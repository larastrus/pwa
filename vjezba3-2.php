<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <title>Zadatak 3-2</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            button {
                margin-top: 4px;
                height: 35px;
                width: 30px;
                border: none;
                border-radius: 8px;
                font-size: 20 px;
            }
            .rezultat{
                font-size: 18px;
                font-weight: bold;
                margin-top: 10px;
            }
        </style>
        
    </head>
    <body>
        <?php 
            if(isset($_POST["operator"])) {
                $broj1 = $_POST["broj1"];
                $broj2 = $_POST["broj2"];
                $operator = $_POST["operator"];
                $rezultat = "";

                switch($operator) {
                    case "+":
                        $rezultat = $broj1 + $broj2;
                        break;
                    case "-":
                        $rezultat = $broj1 - $broj2;
                        break;
                    case "*":
                        $rezultat = $broj1 * $broj2;
                        break;
                    case "/":
                        $rezultat = $broj1 / $broj2;
                        break; 
                }
            }
         ?>

        <form method="post">
            Kalkulator (Switch naredba)<br><br>
            <label><b>Upiši prvi broj *</b></label>
            <input type="number" name="broj1" required><br><br>
            <label><b>Upiši drugi broj *</b></label>
            <input type="number" name="broj2" required><br><br>

             <?php
                if($rezultat !="") {
                    echo "<div class='rezultat'>Rezultat: $rezultat</div>";
                }
            ?> <br>          
                        
            <button type="submit" name="operator" value="+">+</button>
            <button type="submit" name="operator" value="-">-</button>
            <button type="submit" name="operator" value="*">*</button>
            <button type="submit" name="operator" value="/">/</button>
        </form>
        
    </body>
</html>