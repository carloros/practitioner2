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
        foreach ($classroom as $task) {
            echo "<li>$task</li>";
        }
        ?>
    </ul> -->
    <h1><?= $task->name ?></h1>
    <ul>
        <li>Description: <?= $task->description ?></li>
        <li>Completed:
            <?= $task->completed ? 'Sí' : 'No'; ?>
        </li>
    </ul>
</body>

</html>