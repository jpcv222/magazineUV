<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:22:40
         compiled from controllers/modals/editorDecision/form/promoteForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'json_encode', 'controllers/modals/editorDecision/form/promoteForm.tpl', 17, false),array('modifier', 'escape', 'controllers/modals/editorDecision/form/promoteForm.tpl', 25, false),array('modifier', 'assign', 'controllers/modals/editorDecision/form/promoteForm.tpl', 59, false),array('function', 'url', 'controllers/modals/editorDecision/form/promoteForm.tpl', 23, false),array('function', 'csrf', 'controllers/modals/editorDecision/form/promoteForm.tpl', 24, false),array('function', 'translate', 'controllers/modals/editorDecision/form/promoteForm.tpl', 31, false),array('function', 'fbvElement', 'controllers/modals/editorDecision/form/promoteForm.tpl', 35, false),array('function', 'load_url_in_div', 'controllers/modals/editorDecision/form/promoteForm.tpl', 60, false),array('function', 'fbvFormButtons', 'controllers/modals/editorDecision/form/promoteForm.tpl', 76, false),array('block', 'fbvFormSection', 'controllers/modals/editorDecision/form/promoteForm.tpl', 34, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		$('#promote').pkpHandler(
			'$.pkp.controllers.modals.editorDecision.form.EditorDecisionFormHandler',
			{
				peerReviewUrl: <?php echo ((is_array($_tmp=$this->_tpl_vars['peerReviewUrl'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>

			}
		);
	});
</script>

<form class="pkp_form" id="promote" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => $this->_tpl_vars['saveFormOperation']), $this);?>
" >
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="decision" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['decision'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
	<input type="hidden" name="reviewRoundId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reviewRoundId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />

	<?php if (array_key_exists ( 'help' , $this->_tpl_vars['decisionData'] )): ?>
		<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['decisionData']['help']), $this);?>
</p>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "user.role.author_s",'for' => 'authorName','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'authorName','name' => 'authorName','value' => $this->_tpl_vars['authorName'],'disabled' => true), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "editor.review.personalMessageToAuthor",'for' => 'personalMessage')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','name' => 'personalMessage','id' => 'personalMessage','value' => $this->_tpl_vars['personalMessage'],'rich' => true,'variables' => $this->_tpl_vars['allowedVariables']), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if ($this->_tpl_vars['reviewsAvailable']): ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<a id="importPeerReviews" href="#" class="pkp_button">
				<span class="fa fa-plus" aria-hidden="true"></span>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.comments.addReviews"), $this);?>

			</a>
		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php endif; ?>

	<?php $this->_tag_stack[] = array('fbvFormSection', array('for' => 'skipEmail','size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'skipEmail','name' => 'skipEmail','label' => "editor.submissionReview.skipEmail"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php if ($this->_tpl_vars['reviewRoundId']): ?>
		<div id="attachments" style="margin-top: 30px;">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.attachment.EditorSelectableReviewAttachmentsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'reviewAttachmentsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'reviewAttachmentsGridUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'reviewAttachmentsGridContainer','url' => $this->_tpl_vars['reviewAttachmentsGridUrl']), $this);?>

		</div>
	<?php endif; ?>

	<div id="availableFiles" style="margin-top: 30px;">
				<?php if ($this->_tpl_vars['stageId'] == @WORKFLOW_STAGE_ID_SUBMISSION): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.submission.SelectableSubmissionDetailsFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesToPromoteGridUrl'));?>

		<?php elseif ($this->_tpl_vars['reviewRoundId']): ?>
						<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.review.SelectableReviewRevisionsGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'reviewRoundId' => $this->_tpl_vars['reviewRoundId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesToPromoteGridUrl'));?>

		<?php elseif ($this->_tpl_vars['stageId'] == @WORKFLOW_STAGE_ID_EDITING): ?>
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.files.copyedit.SelectableCopyeditFilesGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'filesToPromoteGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'filesToPromoteGridUrl'));?>

		<?php endif; ?>
		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'filesToPromoteGrid','url' => $this->_tpl_vars['filesToPromoteGridUrl']), $this);?>

	</div>
	<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "editor.submissionReview.recordDecision"), $this);?>

</form>