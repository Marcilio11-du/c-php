<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Usando apenas php
        for($i = 0; $i < 10; $i++){
            echo "<p>$i</p>";
        }
    ?>

    <hr>

    <?php //Usando php + html
    for($i = 0; $i < 10; $i++): ?>
        <p><?= $i ?></p>
    <?php endfor; ?>

</body>
</html>