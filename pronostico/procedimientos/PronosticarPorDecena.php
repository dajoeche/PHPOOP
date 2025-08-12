<?php


class PronosticarPorDecena extends GestionarDB
{
	public $query="
					SELECT 
							COUNT(a.decena) as Repetidos, 
							D.nombreDecena
					FROM 
							resultados2025 AS R 
					INNER JOIN				 
							animal as A 
					ON 
						A.numero = R.animal
					INNER JOIN 
							decena as D 
					ON 
						D.codigoDecena = A.decena						
					where 
							`codigoLoteria`= '%' and 
							`fecha` = '*'  
					GROUP BY 
							A.decena
					order by 
							Repetidos 
					DESC;
					";	
	

    function __construct($fecha,$loteria) {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirFechaQuery($fecha);
		$this->incluirLoteriaQuery($loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();

		//echo "----------------------------------------------------------<br>";
		$this->close();
    }	
}

?>
