<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

set_time_limit(777);

$_POST["html"] = urldecode($_POST["html"]);

define("DOMPDF_ENABLE_REMOTE", true);

require_once("dompdf/dompdf_config.inc.php");

if ( isset( $_POST["html"] ) ) {
  $dompdf = new DOMPDF();
  $dompdf->load_html($_POST["html"]);
  $dompdf->set_paper("letter", "portrait");
  $dompdf->render();

  $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

  exit(0);
}