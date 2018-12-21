<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:25:03
         compiled from controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'uniqid', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 12, false),array('modifier', 'escape', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 12, false),array('modifier', 'assign', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 44, false),array('function', 'url', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 25, false),array('function', 'csrf', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 26, false),array('function', 'load_url_in_div', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 45, false),array('function', 'fbvFormButtons', 'controllers/modals/submissionMetadata/form/catalogEntrySubmissionReviewForm.tpl', 56, false),)), $this); ?>
<?php $this->assign('submissionMetadataViewFormId', ((is_array($_tmp=((is_array($_tmp="submissionMetadataViewForm-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#<?php echo $this->_tpl_vars['submissionMetadataViewFormId']; ?>
').pkpHandler(
			'$.pkp.controllers.form.AjaxFormHandler',
			{
				trackFormChanges: true
			}
		);
	});
</script>
<form class="pkp_form" id="<?php echo $this->_tpl_vars['submissionMetadataViewFormId']; ?>
" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'saveForm'), $this);?>
">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->assign('notificationId', ((is_array($_tmp=((is_array($_tmp="submissionMetadataViewFormNotification-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => $this->_tpl_vars['notificationId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="displayedInContainer" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formParams']['displayedInContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="tab" value="submission" />

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionLocale.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/submissionMetadataFormTitleFields.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/seriesAndCategories.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'],'includeSeriesPosition' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<!--  Contributors -->

	<?php if (! $this->_tpl_vars['formParams']['hideSubmit'] || ! $this->_tpl_vars['formParams']['anonymous']): ?>
				<?php $this->assign('authorsGridContainer', ((is_array($_tmp=((is_array($_tmp="authorsGridContainer-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.author.AuthorGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'authorGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'authorGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['authorsGridContainer'],'url' => $this->_tpl_vars['authorGridUrl']), $this);?>


		<!--  Chapters -->
		<?php $this->assign('chaptersGridContainer', ((is_array($_tmp=((is_array($_tmp="authorsGridContainer-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.chapter.ChapterGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'chaptersGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'chaptersGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['chaptersGridContainer'],'url' => $this->_tpl_vars['chaptersGridUrl']), $this);?>

	<?php endif; ?>

	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/submissionMetadataFormFields.tpl", 'smarty_include_vars' => array('readOnly' => $this->_tpl_vars['formParams']['readOnly'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<?php if (! $this->_tpl_vars['formParams']['hideSubmit']): ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('id' => 'submissionMetadataFormSubmit','submitText' => "common.save"), $this);?>

	<?php endif; ?>

</form>