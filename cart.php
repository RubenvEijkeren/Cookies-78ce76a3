<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <h1>Skateboard <small>(#1)</small></h1>
        <h1>Basketbal <small>(#2)</small></h1>
        <h1>Skeelers <small>(#3)</small></h1>

        <!-- maak hier de opdracht -->
        <form method="POST">
            Keuze: <input type="text" name="keuze" placeholder="1, 2 of 3">
            <input type="submit" name="submit" value="Submit"><br>
        </form>  
            <?php
            if (isset($_POST["keuze"])){
                if ($_POST["keuze"] >= 1 && $_POST["keuze"] <= 3 ) {
                    $_SESSION["testses"] = $_POST["keuze"];
                    setcookie("testcookie", $_POST["keuze"], time()+3600);
                    echo "<h2> Gekozen item: #" . $_POST["keuze"] . "</h2>";
                }
                else if (isset($_COOKIE["testcookie"])){
                    echo "<h2> Gekozen item: #" . $_COOKIE["testcookie"] . "</h2>";

                }
            }
            else if (isset($_COOKIE["testcookie"])){
                    echo "<h2> Gekozen item: #" . $_COOKIE["testcookie"] . "</h2>";

                }

            ?>
    </body>
</html>