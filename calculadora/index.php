<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>

    <main>

        <?php
        if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["ope"])) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $ope = $_GET["ope"];
            $results = 0;

            if ($ope == " ") {
                $results = $num1 + $num2;
            } else if ($ope == "-") {
                $results = $num1 - $num2;
            } else if ($ope == "*") {
                $results = $num1 * $num2;
            } else if ($ope == "/") {
                $results = $num1 / $num2;
            } else {
                $results = "nan";
            }
            echo "<p class='teste'> O resultado da operação é " . $results . "! </p>";
            echo "<p class='teste'>O operador é inválido! </p>";
        } else {
            echo "<p class='teste'> Insira os valores! </p>";
        }
        ?>

        <form class="formulario" action="" method="get">
            <input type="number" name="num1" placeholder="numero 1">
            <input type="number" name="num2" placeholder="numero 2">
            <select id="ope" name="ope">

                <option value=" ">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>

            </select>
            <input type="submit" name="button" id="button1" value="ENVIAR">
        </form>



    </main>

</body>

</html>