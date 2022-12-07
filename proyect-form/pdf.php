<?php
    require_once 'vendor/autoload.php';
    require 'config/app.php';
    include 'config/database.php';

    $idPago = $_REQUEST['id'];
    $pago = viewPayment($conx, $idPago);
    $mpdf = new \Mpdf\Mpdf(['format' => [70, 320]]);
    $cadena = '

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PDF</title>
        <style>
        .container {
            width: 216px;
            background-color: #fff;
        }
        .header {
            display: flex;
        }
        
        .image {
            padding: 5px;
        }
        
        h3 {
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        p {
            font-size: 12px;
        }
        </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="public/images/logo-gray.png" class="image">
            <h3>Colegio <br> Liceo Aprender</h3>
            
        </div>
        <h1>-------------</h1>
        <div class="info">
            <p class="inf">Numero de recibo: '.$pago['factura_id'].'</p>
            <p class="inf">Fecha de pago: '.$pago['fecha'].'</p>
            <p class="inf">Nombre del estudiante: '.$pago['nombre_estudiante'].' '.$pago['apellidos_estudiante'].'</p>
            <p class="inf">Numero de documento: '.$pago['num_documento_estudiante'].'</p>
            <p class="inf">Nombre del acudiente : '.$pago['nombre_acudiente'].' '.$pago['apellidos_estudiante'].'</p>
            <p class="inf">Numero de documento: '.$pago['num_documento_acudiente'].'</p>
        </div>
        <h1>-------------</h1>
        <h3>Pagos Realizados</h3>
        <div class="pagos">
            <p>Mes: '.$pago["mes"].'</p>
            <p>Pension '.$pago["pension"].':</p>
            <p>N° Recibo manual: '.$pago["recibo_manual"].'</p>
            <p>Desayuno: '.$pago["desayuno"].'</p>
            <p>Media mañana: '.$pago["media_manana"].'</p>
            <p>Media tarde: '.$pago["media_tarde"].'</p>
            <p>Almuerzo: '.$pago["almuerzo"].'</p>
            <p>Transporte: '.$pago["transporte"].'</p>
            <p>Derechos de grado: '.$pago["derecho_grado"].'</p>
            <p>Matricula: '.$pago["matricula"].'</p>
            <p>Observaciones: '.$pago["observaciones"].'</p>
        </div>
    </div>
</body>

</html>
';
$mpdf->WriteHTML($cadena);
$mpdf->Output($pago['num_documento_estudiante'].'.pdf', 'D');

?>