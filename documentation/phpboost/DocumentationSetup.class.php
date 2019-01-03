<?php
/**
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2019 01 01
 * @since   	PHPBoost 5.1 - 2017 11 05
 */

class DocumentationSetup extends DefaultModuleSetup
{
	public function upgrade($installed_version)
	{
		return '5.2';
	}
}
?>
