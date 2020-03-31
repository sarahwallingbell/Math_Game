<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
    //!!Change to when person logs out once we have that running
        session_start();
        session_unset();
        session_destroy();
    ?>
    You won!
</body>
</html>
