<?php
/**
 * Menu Sanfona Helper Class
 * 
 * @package    STN
 * @license    MIT
 * @link       https://github.com/cosis-stn/menusanfona
 */
 
class ModMenuSanfonaHelper{
	public static function getMenu($params){
		$categories = JCategories::getInstance('Content');
		$category = $categories->get($params->get('title'));
		return $category;
	}
	
	
}
 
 
 
 
 
 
 ?>