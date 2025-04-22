<?php

class ListaCounters extends ListaOrdenada
{
	public $itemsLista = array(
														"The Flight",
														array(
																	array(
																					"nombreItem"=>"textoItem",
																					"atributos"=>array("class"=>"dropdown"),
																					"submenu"=>"SubListaCounters",
																				),
																 ),
														"The City",
														"The Island",
														"The Food",
													);
}

?>
