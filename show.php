<?php
    include_once("conn.php");
    $myconn = new Database();
    $myconn->connect();
?>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>ตาราง Book</h2>
    <table border="1">
        <?php
            $myconn->show_information();
        ?>
    </table>
</body>
</html>