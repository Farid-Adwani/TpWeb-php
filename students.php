<?php
$students = [
    'fatma' => 'laribi',
    'ahmed' => 'mahfoudhi',
    'salem' => 'hamdani'
];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootswatch/dist/lux/bootstrap.css">
    <title>Document</title>
</head>
<body>

<table class="table">
    <tr>
        <th>Firstname</th>
        <th>Name</th>
    </tr>
    <?php
    foreach($students as $firstname => $name) {?>
        <tr>
            <td><?= $firstname ?></td>
            <td><?= $name ?></td>
        </tr>
    <?php
    }
    ?>
</table>
</body>
</html>