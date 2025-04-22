<?php

class MenuListaImagen extends _Lista
{
	public $atributosLista = array("id"=>"navlist");
	public $itemsLista = array(
														array(
																	array(
																					"enlace"=>"EnlaceDefault",
																					"atributos"=>array("id"=>"home"),
																				),
																 ),
														array(
																	array(
																					"enlace"=>"EnlaceIntro",
																					"atributos"=>array("id"=>"prev"),
																				),
																 ),
														array(
																	array(
																					"enlace"=>"EnlaceNext",
																					"atributos"=>array("id"=>"next"),
																				),
																 ),

													);
}

?>
