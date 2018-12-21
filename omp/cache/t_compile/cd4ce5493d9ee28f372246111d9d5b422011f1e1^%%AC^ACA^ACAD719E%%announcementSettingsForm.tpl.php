<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:58:59
         compiled from controllers/tab/settings/announcements/form/announcementSettingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 26, false),array('function', 'csrf', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 27, false),array('function', 'fbvElement', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 32, false),array('function', 'translate', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 35, false),array('function', 'load_url_in_div', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 43, false),array('function', 'fbvFormButtons', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 48, false),array('block', 'fbvFormArea', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 30, false),array('block', 'fbvFormSection', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 31, false),array('modifier', 'assign', 'controllers/tab/settings/announcements/form/announcementSettingsForm.tpl', 42, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => 'website','class' => 'pkp_help_tab'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#announcementSettingsForm').pkpHandler('$.pkp.controllers.tab.settings.announcements.form.AnnouncementSettingsFormHandler',
			{
				publishChangeEvents: ['updateHeader']
			}
		);
	});
</script>

<form id="announcementSettingsForm" class="pkp_form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "tab.settings.WebsiteSettingsTabHandler",'op' => 'saveFormData','tab' => 'announcements'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'announcementSettingsFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'announcements','title' => "manager.setup.announcements")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true,'description' => "manager.setup.announcementsDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableAnnouncements','label' => "manager.setup.enableAnnouncements",'value' => '1','checked' => $this->_tpl_vars['enableAnnouncements']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableAnnouncementsHomepage','label' => "manager.setup.enableAnnouncementsHomepage1",'value' => '1','checked' => $this->_tpl_vars['enableAnnouncementsHomepage'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'numAnnouncementsHomepage','from' => $this->_tpl_vars['numAnnouncementsHomepageOptions'],'selected' => $this->_tpl_vars['numAnnouncementsHomepage'],'defaultValue' => '1','translate' => false,'disabled' => $this->_tpl_vars['disableAnnouncementsHomepage'],'inline' => true), $this);?>

			<span><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.setup.enableAnnouncementsHomepage2"), $this);?>
</span>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('description' => "manager.setup.announcementsIntroductionDescription")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','multilingual' => 'true','id' => 'announcementsIntroduction','value' => $this->_tpl_vars['announcementsIntroduction'],'rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.announcements.AnnouncementTypeGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'announcementTypeGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'announcementTypeGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'announcementTypeGridContainer','url' => $this->_tpl_vars['announcementTypeGridUrl']), $this);?>


	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.announcements.ManageAnnouncementGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'announcementGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'announcementGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'announcementGridContainer','url' => $this->_tpl_vars['announcementGridUrl']), $this);?>


	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'announcementSettingsFormSubmit','submitText' => "common.save",'hideCancel' => true), $this);?>

</form>