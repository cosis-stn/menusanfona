<?php
/**
 * Menu Sanfona Module Entry Point
 * 
 * @package    STN
 * @license    
 * @link       
 
 */
// No direct access
defined('_JEXEC') or die;

//arquivo com a l�gica do m�dulo
require_once dirname(__FILE__) . '/helper.php';

$menu = modMenuSanfonaHelper::getMenu($params);
require JModuleHelper::getLayoutPath('mod_menusanfona');
/>