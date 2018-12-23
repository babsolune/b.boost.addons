<?php

/**
 * @package 	Documentation
 * @subpackage	PHPBoost
 * @category 	Modules
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2018 23 12
 * @since   	PHPBoost 5.1 - 2017 11 05
 */
 
class DocumentationExtensionPointProvider extends ExtensionPointProvider
{
	public function __construct()
	{
		parent::__construct('documentation');
	}

	public function css_files()
	{
		$module_css_files = new ModuleCssFiles();
		$module_css_files->adding_running_module_displayed_file('documentation.css');
		return $module_css_files;
	}

	public function url_mappings()
	{
		return new UrlMappings(array(new DispatcherUrlMapping('/documentation/framework/index.php')));
	}

}
?>
