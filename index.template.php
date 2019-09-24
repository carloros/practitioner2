<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <ul>
        <?php 
        foreach ($classroom as $person){
            echo "<li>$person</li>";
        }
        ?>
    </ul> -->
    <h1><?= $person['fullname'] ?></h1>
    <ul>
        <li>Nom: <?= $person['name'] ?></li>
        <li>Cognoms: <?= $person['surname'] ?></li>
        <li>Email: <?= $person['email'] ?></li>
    </ul>
</body>
</html>