<?php
include_once 'autoload.php';
$personneRepository = new PersonneRepository();
$personnes = $personneRepository->findAll();
include_once 'fragments/header.php';
?>

<table class="table">
    <tr>
        <th>Firstname</th>
        <th>Name</th>
        <th>Age</th>
        <th>Job</th>
    </tr>
    <?php foreach ($personnes as $personne) {
    ?>
    <tr>
        <td><?= $personne->nom ?></td>
        <td><?= $personne->prenom ?></td>
        <td><?= $personne->age ?></td>
        <td><?= $personne->sexe ?></td>
    </tr>
    <?php
    }
    ?>
</table>

</body>
</html>