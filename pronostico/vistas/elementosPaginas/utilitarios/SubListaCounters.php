<?php

class SubListaCounters extends ListaOrdenada
{
	public $itemsLista = array(
														"The Flight",
														"The City",
														"The Island",
														array(
																	array(
																					"nombreItem"=>"textoItem",
																					"atributos"=>array("class"=>"dropdown"),
																					"submenu"=>"SubSubListaCounters",
																				),
																 ),
														"The Food",
													);
}

?>
