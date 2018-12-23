<?php
/*##################################################
 *                     DocumentationHomePageExtensionPoint.class.php
 *                            -------------------
 *   begin                : February 07, 2012
 *   copyright            : (C) 2012 Julien BRISWALTER
 *   email                : j1.seth@phpboost.com
 *
 *
 ###################################################
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 ###################################################*/

class DocumentationHomePageExtensionPoint implements HomePageExtensionPoint
{
	public function get_home_page()
	{
		return new DefaultHomePage($this->get_title(), $this->get_view());
	}

	private function get_title()
	{
		// return LangLoader::get_message('module.title', 'common', 'documentation');
		global $LANG;

		load_module_lang('documentation');

		return $LANG['module.title'];
	}

	private function get_view()
	{
		global $Bread_crumb, $LANG, $pages;
		// require_once(PATH_TO_ROOT . '/documentation/documentation_begin.php');
	}
}
?>
