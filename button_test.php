<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="button_test.php" method="get">
        Answer:<input type="text" name="digitplace">
        <input type="submit">
    </form>
    <?php
    $digit_place = $_GET["digitplace"];
    echo $digit_place."<br>";
    ?>

</body>
</html>
