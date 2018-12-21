<?php /* Smarty version 2.6.25-dev, created on 2018-11-02 09:35:32
         compiled from controllers/grid/users/stageParticipant/addParticipantForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 13, false),array('function', 'url', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 20, false),array('function', 'csrf', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 27, false),array('function', 'load_url_in_div', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 36, false),array('function', 'fbvElement', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 42, false),array('function', 'translate', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 48, false),array('function', 'fbvFormButtons', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 49, false),array('modifier', 'json_encode', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 20, false),array('modifier', 'escape', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 31, false),array('modifier', 'assign', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 35, false),array('block', 'fbvFormArea', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 30, false),array('block', 'fbvFormSection', 'controllers/grid/users/stageParticipant/addParticipantForm.tpl', 41, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow.md",'section' => 'participants','class' => 'pkp_help_modal'), $this);?>


<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#addParticipantForm').pkpHandler('$.pkp.controllers.grid.users.stageParticipant.form.StageParticipantNotifyHandler',
			{
				templateUrl: <?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => 'grid.users.stageParticipant.StageParticipantGridHandler','op' => 'fetchTemplateBody','stageId' => $this->_tpl_vars['stageId'],'submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp));?>

			}
		);
	});
</script>

<form class="pkp_form" id="addParticipantForm" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'saveParticipant'), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<div class="pkp_helpers_clear"></div>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'addParticipant')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="userGroupId" value="" />

		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.userSelect.UserSelectGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'stageId' => $this->_tpl_vars['stageId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'userSelectGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'userSelectGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'userSelectGridContainer','url' => $this->_tpl_vars['userSelectGridUrl']), $this);?>


	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'notifyFormArea')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.chooseMessage",'for' => 'template','size' => $this->_tpl_vars['fbvStyles']['size']['medium'])); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','from' => $this->_tpl_vars['templates'],'translate' => false,'id' => 'template','defaultValue' => "",'defaultLabel' => ""), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

		<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "stageParticipants.notify.message",'for' => 'message')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'textarea','id' => 'message','rich' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array(), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>