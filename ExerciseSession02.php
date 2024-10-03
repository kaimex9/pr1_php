<?php
session_start();
if (!isset($_SESSION['array'])) {
    $_SESSION['array'] = array(1, 2, 3);
}
?>
<html>

<body>
    <h1>Modify array saved in session</h1>
    <form method="POST">
        <label>
            Position to modify:
            <select name="position">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </label><br><br>
        <label>
            New value: <input type="number" name="num">
        </label><br><br>
        <input type="submit" name="modify" value="Modify">
        <input type="submit" name="average" value="Average">
        <input type="reset" value="Reset">
    </form>
    <?php
    if (!isset($_POST['modify'])) {
        echo "Current Array: | ";
        foreach ($_SESSION['array'] as $x) {
            echo "$x | ";
        }
    }
    if (isset($_POST['modify'])) {
        if ($_POST['num'] == null) {
            echo "Porfavor, introduce un nuevo valor";
        } else {
            $position = (int) $_POST['position'] - 1;
            $_SESSION['array'][$position] = (int) $_POST['num'];

            echo "Current Array: | ";
            foreach ($_SESSION['array'] as $x) {
                echo "$x | ";
            }
        }
    } else if (isset($_POST['average'])) {

    }
    ?>
</body>

</html>