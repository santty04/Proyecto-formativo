<?php $title = 'Login' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/header.inc' ?>
    <?php include 'includes/redirect.inc' ?>
    <!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $pagos = showPayments($conx, $estudiante['id']);?>


<table class="table table-bordered align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Mes</th>
                                        <th>Pension</th>
                                        <th>N° recibo manual</th>
                                    </tr>
                                </thead>
                        <?php foreach($pagos as $pago):?>
                                    <tbody>
                                        <tr>
                                            <td><?= $pago['fecha']?></td>
                                            <td><?= $pago['mes']?></td>
                                            <td><?= $pago['pension']?></td>
                                            <td><?= $pago['num_recibo_manual']?></td>
                                        </tr>
                                    </tbody>
                        <?php endforeach?>
                                </table>
</body>
</html>