<?php
/**
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2019 01 05
 * @since   	PHPBoost 5.1 - 2019 01 05
*/

class ApiConfig extends AbstractConfigData
{
	public function get_default_values()
	{
		return array(
		);
	}
	/**
	 * Returns the configuration.
	 * @return ApiConfig
	 */
	public static function load()
	{
		return ConfigManager::load(__CLASS__, 'api', 'config');
	}

	/**
	 * Saves the configuration in the database. Has it become persistent.
	 */
	public static function save()
	{
		ConfigManager::save('api', self::load(), 'config');
	}
}
?>
