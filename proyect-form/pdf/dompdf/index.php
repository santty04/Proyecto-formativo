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
