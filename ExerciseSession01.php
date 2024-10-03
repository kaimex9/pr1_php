<html>

<body>
    <h1>Supermarket management</h1>
    <form method="POST">
        <label>
            Worker name: <input type="text" name="name">
        </label>
        <h2>Choose product:</h2>
        <select name="product">
            <option value="Soft Drink">Soft Drink</option>
            <option value="Milk">Milk</option>
        </select><br>
        <h2>Product quantity:</h2>
        <input type="number" name="amount"><br><br>
        <input type="submit" name="add" value="Add">
        <input type="submit" name="remove" value="Remove">
        <input type="reset" value="reset"><br><br>
    </form>

    <h2>Inventory:</h2>
    <?php
    session_start();
    if (!isset($_SESSION['SD'])) {
        $_SESSION['SD'] = 0;
    }
    if (!isset($_SESSION['M'])) {
        $_SESSION['M'] = 0;
    }
    if (isset($_POST["add"])) {                               //Funcion de lo que ocurre al pulsar el boton "add"
        if ($_POST["name"] == null && $_POST["amount"] == null) {
            echo "ERROR: No puedes dejar casillas en blanco";   //Si alguna de las casillas esta vacia saltara este error
        } else {
            echo 'Worker: ' . $_POST["name"] . '<br>';
            if ($_POST["product"] == "Soft Drink") {         //Dependiendo del tipo de producto se almacena en una variable u otra
                $_SESSION['SD'] += (int) $_POST["amount"];
            } elseif ($_POST["product"] == "Milk") {
                $_SESSION['M'] += (int) $_POST["amount"];
            }
            echo 'Units of Soft Drink: ' . $_SESSION["SD"];
            echo '<br>Units of Milk: ' . $_SESSION["M"];
        }
    } elseif (isset($_POST["remove"])) {                     //Funcion de lo que ocurre al pulsar el boton "remove"
        if ($_POST["name"] == null && $_POST["amount"] == null) {   //Si alguna de las casillas esta vacia saltara este error
            echo "ERROR: No puedes dejar casillas en blanco";
        } elseif (($_SESSION['SD'] - (int) $_POST["amount"]) < 0 && ($_SESSION['M'] - (int) $_POST["amount"]) < 0) { //Y si el stock del producto fuese a quedar por debajo de 0 se ejecutaria este error y no se aplicaria la resta
            echo "ERROR: El Stock de un producto no puede ser menor que 0";
        } else {
            echo 'Worker: ' . $_POST["name"] . '<br>';
            if ($_POST["product"] == "Soft Drink") {        //Dependiendo del tipo de producto se almacena en una variable u otra
                $_SESSION['SD'] -= (int) $_POST["amount"];

            } elseif ($_POST["product"] == "Milk") {
                $_SESSION['M'] -= (int) $_POST["amount"];

            }
            echo 'Units of Soft Drink: ' . $_SESSION["SD"];
            echo '<br>Units of Milk: ' . $_SESSION["M"];
        }
    }
    ?>
</body>
</html>