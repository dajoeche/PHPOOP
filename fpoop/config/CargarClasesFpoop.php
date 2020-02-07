<?php
class CargarClasesFpoop extends IAutoCargarClases
{

	public $directorios = array(
								"/var/www/html/php/fpoop/interfaces/",
								"/var/www/html/php/fpoop/baseConocimiento/",
								"/var/www/html/php/fpoop/nucleo/",
								"/var/www/html/php/fpoop/proyecto/",								
								"/var/www/html/php/fpoop/config/"							
							   );
    
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}
?>

