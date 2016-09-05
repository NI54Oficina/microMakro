<?php
class MicroSitioController extends Controller {
	public function main($data = null) {
		 parent::loadView('micrositio/index.php');
	}
	
	public function formulario($data = null) {
		 parent::loadView('micrositio/formulario.php');
	}
	
	public function areaNegocios($data = null) {
		 parent::loadView('micrositio/area-de-negocios.php');
	}
	
	public function cajasExclusivas($data = null) {
		 parent::loadView('micrositio/cajas-exclusivas.php');
	}
	
	public function espaciosExclusivos($data = null) {
		 parent::loadView('micrositio/espacios-exclusivos.php');
	}
	
	public function estacionamientoExclusivo($data = null) {
		 parent::loadView('micrositio/estacionamiento-exclusivo.php');
	}
	
	public function makroCredito($data = null) {
		 parent::loadView('micrositio/makro-credito.php');
	}
	
	public function nuevoPasaporte($data = null) {
		 parent::loadView('micrositio/nuevo-pasaporte.php');
	}
	
	
	public function ofertasExclusivas($data = null) {
		 parent::loadView('micrositio/ofertas-exclusivas.php');
	}
	
	public function redMk($data = null) {
		
		 parent::loadView('micrositio/red-mk.php');
	}
	
	public function serviciosDiferenciales($data = null) {
		 parent::loadView('micrositio/servicios-diferenciales.php');
	}
	
	public function servicioTelefonico($data = null) {
		 parent::loadView('micrositio/servicio-telefonico.php');
	}
	
	public function solucionesFinancieras($data = null) {
		 parent::loadView('micrositio/soluciones-financieras.php');
	}
	
	public function terminalMakro($data = null) {
		 parent::loadView('micrositio/terminal-makro.php');
	}
	
	public function unidadesNegocio($data = null) {
		 parent::loadView('micrositio/unidades-de-negocio.php');
	}
	
	public function voucher($data = null){
			$image = "micrositio/img/voucher.png";
			//echo $image;
		

            if(!file_exists($image))
			{
				echo 'No file found';
			}
			else
			{
				/*** image info ***/
				
				list($width_orig, $height_orig, $image_type) = getimagesize($image);
						$width=$width_orig;
						$height=$height_orig;
				
				$image_p = imagecreatetruecolor($width, $height);
				$gris = imagecolorallocate($image_p, 128, 128, 128);
				$userDAO = new UserDAO();
				$cuser = $userDAO->getFromCampaign($data["url"],"micrositio");
				if(empty($cuser)){
					exit();
				}
				$cuser= $userDAO->getFromId($data["url"]);
				//imagettftext ( $image_p , 100 , 0 , 11 , 21 , $gris , "arial.ttf" , "testasdasdasdasdasdasdioas dahsd asd");
			
						header("Content-type: image/png");
						$image = imageCreateFromPng($image);
						imagealphablending($image_p,false);
						imagesavealpha($image_p,true);
						imagettftext ( $image , 7 , 0 , 4 , 310 , $gris , "./micrositio/fonts/arial.ttf" , "Fecha: ".$cuser["0"]["FECHA_REGISTRO"]);
						imagettftext ( $image , 7 , 0 , 4 , 325 , $gris , "./micrositio/fonts/arial.ttf" , $cuser["0"]["NOMBRE"]);
						imagettftext ( $image , 7 , 0 , 4 , 340 , $gris , "./micrositio/fonts/arial.ttf" , "Razón social: ".$cuser["0"]["RAZON_SOCIAL"]);
						imagettftext ( $image , 7 , 0 , 4 , 355 , $gris , "./micrositio/fonts/arial.ttf" , "Pasaporte: ".$cuser["0"]["NRO_PASAPORTE_MAKRO"]);
						imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
						
						imagepng($image_p);
				
				

				
			}
	}
}

?>