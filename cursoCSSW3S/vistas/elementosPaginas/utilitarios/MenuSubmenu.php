<?php

class MenuSubmenu extends _Lista
{
	public $atributosLista = array("class"=>"horizontal");
	public $itemsLista = array(
														array("EnlaceHome"),
														array("EnlaceNews"),
														array(
																	array(
																					"enlace"=>"EnlaceDropdown",
																					"atributos"=>array("class"=>"dropdown"),
																					"submenu"=>"SubmenuDropdown",
																				),
																 ),
													);
}

?>
