<?php
/**
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2017 11 05
 * @since   	PHPBoost 5.1 - 2017 11 05
 */

define('PATH_TO_ROOT', '..');

require_once PATH_TO_ROOT . '/kernel/init.php';

$url_controller_mappers = array(
    // Config
    new UrlControllerMapper('AdminApiConfigController', '`^/admin(?:/config)?/?$`'),

    // Index
    new UrlRedirectMapper('/api/framework/index.php', '`^.*$`')
);
DispatchManager::dispatch($url_controller_mappers);

?>
