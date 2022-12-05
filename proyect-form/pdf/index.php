<?php ob_start()?>
<h1>Archivo de prueba</h1>

<p>si funciona el conversor de pdf</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laudantium modi ea minima praesentium numquam deleniti sed sequi nobis adipisci.</p>
<?php 
    $html = ob_get_clean();
    // echo $html;

    require_once './dompdf/autoload.inc.php';

    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled'=>true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter');
    // $dompdf->setPaper('A4','landscape');
    $dompdf->render();
    $dompdf->stream("example.pdf",array("Attachment"=>false));

?>


<?php 
    $fecha                   = date('Y-m-d');
    $num_documento           = $_POST['num_documento'];
    $mes                     = $_POST['mes'];
    $pension                 = $_POST['pension'];
    $num_recibo_manual       = $_POST['num_recibo_manual'];
    $observaciones           = $_POST['observaciones'];

    // Detalles
    $desayuno               = $_POST['desayuno'];
    $media_manana           = $_POST['media_manana'];
    $media_tarde            = $_POST['media_tarde'];
    $almuerzo               = $_POST['almuerzo'];
    $transporte             = $_POST['transporte'];
    $derecho_grado          = $_POST['derecho_grado'];
    $matricula              = $_POST['matricula'];
    // Upload Image
    // $path  = "../public/images/";
    // $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    
    $id = addPayment($conx, $fecha, $num_documento, $mes, $pension, $num_recibo_manual, $observaciones );
    if ($id != -1) {
        addDetail($conx, $id, $desayuno, $media_manana, $media_tarde, $almuerzo, $transporte, $derecho_grado, $matricula);

        echo ("<script>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'El pago se  registrado exitosamente!',
                    showConfirmButton: false,
                    timer: 2000
                })
            </script>");
        // echo "<script>
        //         window.location.replace('dashboard-admin.php')
        //       </script>";    
    }
     else {
        echo ("Hola");
    }
?>
