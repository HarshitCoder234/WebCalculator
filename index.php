<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Calculator</title>
    </head>
    <body>
        <div>
            <h1>Calculator</h1>
        </div>
        
        <p>
            <form method="get" action="index.php">
                <input type="text"  name="n1">
                <select name="action">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="star">*</option>
                    <option value="slash">/</option>
                </select>
                <input type="text" name="n2">
                <input type="submit" name="submit" value="Submit">
            </form>
        </p>

        <p>
            <?php
                if(isset($_GET["submit"])) {
                    $n1 = $_GET["n1"];
                    $n2 = $_GET["n2"];
                    $action = $_GET["action"];

                    if ($action == "plus") {
                        $result = $n1 + $n2;
                        echo "<h1>$n1 + $n2 =";
                    }
                    elseif ($action == "minus") {
                        $result = $n1 - $n2;
                        echo "<h1>$n1 - $n2 =";
                    }
                    elseif ($action == "star") {
                        $result = $n1 * $n2;
                        echo "<h1>$n1 * $n2 =";
                    }
                    elseif($action == "slash" and $n2 == 0) {
                        $result = "Zero Division Error : Divisor should not be Zero";
                        echo "<h1>";
                    }
                    else {
                        $result = $n1 / $n2;
                        echo "<h1>$n1 / $n2 =";
                    }

                    echo "$result</h1>";
                }
            ?>
        </p>
    </body>
</html>
