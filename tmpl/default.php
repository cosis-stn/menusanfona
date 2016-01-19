<?php
/**
 * Template para o módulo Menu Sanfona
 * 
 * @package    STN
 * @license    MIT
 * @link       https://github.com/cosis-stn/menusanfona
 */
 
// No direct access
defined('_JEXEC') or die;
//echo json_encode($menu); 
//echo "<br><br>-------------------------------<br><br>";
//echo json_encode($menu->getChildren());

$res = $menu->get('title');


//foreach($menu->getChildren() as $value){
//	$res .= "<li>" . $value->get('title') . "</li>";
//}
$res .= getChildren($menu);

echo $res;

function getChildren($itemMenu){	
	$tmp ="";
	$filhos = $itemMenu->getChildren();
	if (!empty($filhos)){
		$tmp = "<ul>";
		foreach($filhos as $value){	
			$tmp .= "<li style='display:block !important'>" . $value->get('title') . "</li>";
			$tmp .= getChildren($value);
		}	
		$tmp .= "</ul>";
	}
	return $tmp;
}

?>
