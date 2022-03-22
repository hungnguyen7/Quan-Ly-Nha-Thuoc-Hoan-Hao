<?php
//pdf.php;

require_once 'dompdf/autoload.inc.php';
echo "Hi";
use Dompdf\Dompdf;

class Pdf extends Dompdf{
	public function __construct() {
        parent::__construct();
    }

}

?>