<?php /* Smarty version 2.6.25-dev, created on 2018-09-07 02:22:31
         compiled from controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 19, false),array('function', 'url', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 20, false),array('function', 'csrf', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 21, false),array('function', 'load_url_in_div', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 27, false),array('function', 'fbvFormButtons', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 28, false),array('modifier', 'escape', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 22, false),array('modifier', 'assign', 'controllers/modals/editorDecision/form/initiateInternalReviewForm.tpl', 26, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#initiateReview').pkpHandler('$.pkp.controllers.form.AjaxFormHandler', null);
	});
</script>

<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "editor.monograph.internalReviewDescription"), $this);?>
</p>
<form class="pkp_form" id="initiateReview" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveInternalReview'), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

	<!-- Available submission files -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.SelectableSubmissionDetailsFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesForReviewUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesForReviewUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'filesForReviewGrid','url' => $this->_tpl_vars['filesForReviewUrl']), $this);?>

	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "editor.submission.decision.sendInternalReview"), $this);?>

</form>