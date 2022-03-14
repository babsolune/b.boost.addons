<?php
/**
 * @copyright 	&copy; 2005-2019 PHPBoost
 * @license 	https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL-3.0
 * @author      Sebastien LARTIGUE <babsolune@phpboost.com>
 * @version   	PHPBoost 5.2 - last update: 2019 01 05
 * @since   	PHPBoost 5.1 - 2019 01 05
*/

class AdminApiConfigController extends AdminModuleController
{
	/**
	 * @var HTMLForm
	 */
	private $form;
	/**
	 * @var FormButtonSubmit
	 */
	private $submit_button;

	private $lang;
	private $admin_common_lang;

	/**
	 * @var ApiConfig
	 */
	private $config;

	public function execute(HTTPRequestCustom $request)
	{
		$this->init();

		$this->build_form();

		$tpl = new StringTemplate('# INCLUDE MSG # # INCLUDE FORM #');
		$tpl->add_lang($this->lang);

		if ($this->submit_button->has_been_submited() && $this->form->validate())
		{
			$this->save();
			$tpl->put('MSG', MessageHelper::display(LangLoader::get_message('message.success.config', 'status-messages-common'), MessageHelper::SUCCESS, 4));
		}

		$tpl->put('FORM', $this->form->display());

		return new AdminApiDisplayResponse($tpl, LangLoader::get_message('configuration', 'admin-common'));
	}

	private function init()
	{
		$this->lang = LangLoader::get('common', 'api');
		$this->config = ApiConfig::load();
	}

	private function build_form()
	{
		$form = new HTMLForm(__CLASS__);

		$fieldset = new FormFieldsetHTMLHeading('api_configuration', $this->lang['config.title']);
		$form->add_fieldset($fieldset);

		$fieldset->add_field(new FormFieldFree('waiting_for_apigen_parser', $this->lang['config.waiting.for.apigen.parser'], ''));

		// $fieldset_authorizations = new FormFieldsetHTML('authorizations', LangLoader::get_message('authorizations', 'common'),
		// 	array('description' => $this->admin_common_lang['config.authorizations.explain'])
		// );
		//
		// $form->add_fieldset($fieldset_authorizations);
		//
		// $auth_settings = new AuthorizationsSettings(RootCategory::get_authorizations_settings());
		// $auth_settings->build_from_auth_array($this->config->get_authorizations());
		// $fieldset_authorizations->add_field(new FormFieldAuthorizationsSetter('authorizations', $auth_settings));

		$this->submit_button = new FormButtonDefaultSubmit();
		$form->add_button($this->submit_button);
		$form->add_button(new FormButtonReset());

		$this->form = $form;
	}


	private function save()
	{
		ApiConfig::save();
	}
}
?>
