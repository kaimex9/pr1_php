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
        <input type="reset"><br><br>
    </form>

    <h2>Inventory:</h2>
    <?php
    session_start();
    if (isset($_POST["add"])) {
        if ($_POST["name"] != null && $_POST["amount"] != null) {
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["product"] = $_POST["product"];
            $_SESSION["amount"] = $_POST["amount"];
            echo 'Worker: ' . $_SESSION["name"] . '<br>';
            echo 'Product: ' . $_SESSION["product"] . '<br>';
            echo 'Units of ' . $_SESSION["product"] . ': ' . $_SESSION["amount"];
        } else {
            echo "ERROR: No puedes dejar casillas en blanco";
        }
    } elseif (isset($_POST["remove"])) {
        if ($_POST["name"] != null && $_POST["amount"] != null) {
            if ($_POST["name"] == $_SESSION["name"]) {
                $_SESSION["name"] = $_POST["name"];
                $_SESSION["product"] = $_POST["product"];
                $_SESSION["amount"] = $_POST["amount"];

                $_SESSION["amount"] -= $_POST["amount"];
                echo 'Worker: ' . $_SESSION["name"] . '<br>';
                echo 'Product: ' . $_SESSION["product"] . '<br>';
                echo 'Units of ' . $_SESSION["product"] . ': ' . $_SESSION["amount"];
            } else {
                echo "El nombre del empleado no coincide";
            }
        } else {
            echo "ERROR: No puedes dejar casillas en blanco";
        }
    }
    ?>
</body>

</html>