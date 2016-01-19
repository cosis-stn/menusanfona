<?php
/**
 * Menu Sanfona Module Entry Point
 * 
 * @package    STN
 * @license    MIT
 * @link       https://github.com/cosis-stn/menusanfona
 */
 
// No direct access
defined('_JEXEC') or die;

//arquivo com a lógica do módulo
require_once dirname(__FILE__) . '/helper.php';
$categoria = modMenuSanfonaHelper::getMenu($params);
$menu = $categoria;
require JModuleHelper::getLayoutPath('mod_stn_menusanfona');
?>