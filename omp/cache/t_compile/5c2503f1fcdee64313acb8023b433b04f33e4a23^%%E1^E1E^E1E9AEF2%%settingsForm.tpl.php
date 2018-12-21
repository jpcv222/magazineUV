<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 15:01:33
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 12, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 21, false),array('function', 'csrf', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 22, false),array('function', 'fbvElement', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 27, false),array('function', 'fbvFormButtons', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 66, false),array('block', 'fbvFormArea', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 24, false),array('block', 'fbvFormSection', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 25, false),array('modifier', 'compare', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/pubIds/doi/templates/settingsForm.tpl', 27, false),)), $this); ?>

<div id="description"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.description"), $this);?>
</div>

<script src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/pubIds/doi/js/DOISettingsFormHandler.js"></script>
<script>
	$(function() {
		// Attach the form handler.
		$('#doiSettingsForm').pkpHandler('$.pkp.plugins.pubIds.doi.js.DOISettingsFormHandler');
	});
</script>
<form class="pkp_form" id="doiSettingsForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'manage','category' => 'pubIds','plugin' => $this->_tpl_vars['pluginName'],'verb' => 'save'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/formErrors.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'doiObjectsFormArea','title' => "plugins.pubIds.doi.manager.settings.doiObjects")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.explainDois"), $this);?>
</p>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableSubmissionDoi','label' => "plugins.pubIds.doi.manager.settings.enableSubmissionDoi",'maxlength' => '40','checked' => ((is_array($_tmp=$this->_tpl_vars['enableSubmissionDoi'])) ? $this->_run_mod_handler('compare', true, $_tmp, true) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, true))), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableRepresentationDoi','label' => "plugins.pubIds.doi.manager.settings.enableRepresentationDoi",'maxlength' => '40','checked' => ((is_array($_tmp=$this->_tpl_vars['enableRepresentationDoi'])) ? $this->_run_mod_handler('compare', true, $_tmp, true) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, true))), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'enableSubmissionFileDoi','label' => "plugins.pubIds.doi.manager.settings.enableSubmissionFileDoi",'maxlength' => '40','checked' => ((is_array($_tmp=$this->_tpl_vars['enableSubmissionFileDoi'])) ? $this->_run_mod_handler('compare', true, $_tmp, true) : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, true))), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'doiPrefixFormArea','title' => "plugins.pubIds.doi.manager.settings.doiPrefix")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiPrefix.description"), $this);?>
</p>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'doiPrefix','value' => $this->_tpl_vars['doiPrefix'],'required' => 'true','label' => "plugins.pubIds.doi.manager.settings.doiPrefix",'maxlength' => '40','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'doiSuffixFormArea','title' => "plugins.pubIds.doi.manager.settings.doiSuffix")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiSuffix.description"), $this);?>
</p>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php if (! in_array ( $this->_tpl_vars['doiSuffix'] , array ( 'pattern' , 'customId' ) )): ?>
				<?php $this->assign('checked', true); ?>
			<?php else: ?>
				<?php $this->assign('checked', false); ?>
			<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'doiSuffixDefault','name' => 'doiSuffix','value' => 'default','required' => 'true','label' => "plugins.pubIds.doi.manager.settings.doiSuffixDefault",'checked' => $this->_tpl_vars['checked']), $this);?>

			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiSuffixDefault.description"), $this);?>
</span>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'doiSuffixCustomId','name' => 'doiSuffix','value' => 'customId','required' => 'true','label' => "plugins.pubIds.doi.manager.settings.doiSuffixCustomIdentifier",'checked' => ((is_array($_tmp=$this->_tpl_vars['doiSuffix'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'customId') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'customId'))), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'radio','id' => 'doiSuffixPattern','name' => 'doiSuffix','value' => 'pattern','label' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern",'checked' => ((is_array($_tmp=$this->_tpl_vars['doiSuffix'])) ? $this->_run_mod_handler('compare', true, $_tmp, 'pattern') : $this->_plugins['modifier']['compare'][0][0]->smartyCompare($_tmp, 'pattern'))), $this);?>

			<p class="pkp_help"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.example"), $this);?>
</p>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'doiSubmissionSuffixPattern','value' => $this->_tpl_vars['doiSubmissionSuffixPattern'],'label' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.submissions",'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'doiRepresentationSuffixPattern','value' => $this->_tpl_vars['doiRepresentationSuffixPattern'],'label' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.representations",'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'doiSubmissionFileSuffixPattern','value' => $this->_tpl_vars['doiSubmissionFileSuffixPattern'],'label' => "plugins.pubIds.doi.manager.settings.doiSuffixPattern.files",'maxlength' => '40','inline' => true,'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM']), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'doiReassignFormArea','title' => "plugins.pubIds.doi.manager.settings.doiReassign")); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<span class="instruct"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.pubIds.doi.manager.settings.doiReassign.description"), $this);?>
</span><br/>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['clearPubIdsLinkAction'],'contextId' => 'doiSettingsForm')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>