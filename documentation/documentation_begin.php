<?php
    $folders = array_reverse(explode('/', $_SERVER['REQUEST_URI']));
    $path_to_root = '';
    foreach ($folders as $folder)
    {
        if ($folder == 'documentation')
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
    define('TITLE', 'PHPBoost Framework Documentation');
    $Bread_crumb->add('Documentation', PATH_TO_ROOT . '/documentation/framework/index.php');
    require_once PATH_TO_ROOT . '/kernel/header.php';
?>
