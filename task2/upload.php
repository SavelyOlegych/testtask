<?php

    if ($_FILES['myfile']['tmp_name'] != '') {
        $res = [];
        $file = fopen($_FILES['myfile']['tmp_name'], 'r');
        while (($data = fgetcsv($file, 100, ',')) !== false) {
            $res[] = $data;
        }
        foreach ($res as $elem) {
            file_put_contents('upload/' . $elem[0], $elem[1]);
        }
        header('Location: upload.php');
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Загрузка CSV</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="upload.php" method="post">
            <p><input type="file" name="myfile"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>