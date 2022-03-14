<?php
/**
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2019 01 04
 * @since   	PHPBoost 5.1 - 2017 11 05
 */

    $folders = array_reverse(explode('/', $_SERVER['REQUEST_URI']));
    $path_to_root = '';
    foreach ($folders as $folder)
    {
        if ($folder == 'api')
        {
            break;
        }
        $path_to_root .= '../';
    }
    define('PATH_TO_ROOT', trim($path_to_root, '/'));
    require_once PATH_TO_ROOT . '/kernel/init.php';
    $columns_disabled = ThemesManager::get_theme(AppContext::get_current_user()->get_theme())->get_columns_disabled();
    $columns_disabled->set_disable_left_columns(true);
    $columns_disabled->set_disable_right_columns(true);
    define('TITLE', 'PHPBoost Framework A.P.I.');
    $Bread_crumb->add('PHPBoost A.P.I.', PATH_TO_ROOT . '/api/framework/index.php');
    require_once PATH_TO_ROOT . '/kernel/header.php';
?>
