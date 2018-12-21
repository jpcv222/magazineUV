<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:45
         compiled from core:submission/form/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'core:submission/form/step3.tpl', 22, false),array('function', 'csrf', 'core:submission/form/step3.tpl', 23, false),array('function', 'load_url_in_div', 'core:submission/form/step3.tpl', 32, false),array('function', 'fbvFormButtons', 'core:submission/form/step3.tpl', 41, false),array('modifier', 'escape', 'core:submission/form/step3.tpl', 24, false),array('modifier', 'assign', 'core:submission/form/step3.tpl', 31, false),array('block', 'fbvFormArea', 'core:submission/form/step3.tpl', 29, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the JS form handler.
		$('#submitStep3Form').pkpHandler(
			'$.pkp.pages.submission.SubmissionStep3FormHandler',
			{
				chaptersGridContainer: 'chaptersGridContainer',
				authorsGridContainer: 'authorsGridContainer',
			});
	});
</script>

<form class="pkp_form" id="submitStep3Form" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveStep','path' => $this->_tpl_vars['submitStep']), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'submitStep3FormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionMetadataFormTitleFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'contributors')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<!--  Contributors -->
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.author.AuthorGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'authorGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'authorGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'authorsGridContainer','url' => $this->_tpl_vars['authorGridUrl']), $this);?>


		<?php echo $this->_tpl_vars['additionalContributorsFields']; ?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php echo $this->_tpl_vars['additionalFormFields']; ?>


	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/submissionMetadataFormFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'step3Buttons','submitText' => "common.saveAndContinue"), $this);?>

</form>