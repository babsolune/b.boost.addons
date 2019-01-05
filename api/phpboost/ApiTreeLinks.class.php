<?php
/**
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2019 01 05
 * @since   	PHPBoost 5.1 - 2019 01 05
*/

class ApiTreeLinks implements ModuleTreeLinksExtensionPoint
{
	public function get_actions_tree_links()
	{
		$tree = new ModuleTreeLinks();

		$tree->add_link(new AdminModuleLink(LangLoader::get_message('configuration', 'admin-common'), ApiUrlBuilder::configuration()));
		$tree->add_link(new AdminModuleLink(LangLoader::get_message('module.documentation', 'admin-modules-common'), ModulesManager::get_module('api')->get_configuration()->get_documentation()));

		return $tree;
	}
}
?>
