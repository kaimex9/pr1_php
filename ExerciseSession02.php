<?php
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
                <?php
                foreach ($_SESSION['array'] as $x) {
                    echo "<option>
                            $x
                        </option>";
                }
                ?>
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
        
    ?>
</body>
</html>