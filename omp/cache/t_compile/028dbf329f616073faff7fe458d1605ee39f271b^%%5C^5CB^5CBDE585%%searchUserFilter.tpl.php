<?php /* Smarty version 2.6.25-dev, created on 2018-11-02 09:35:32
         compiled from controllers/grid/users/userSelect/searchUserFilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 11, false),array('modifier', 'escape', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 23, false),array('function', 'url', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 20, false),array('function', 'csrf', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 21, false),array('function', 'fbvElement', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 26, false),array('function', 'fbvFormButtons', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 30, false),array('block', 'fbvFormArea', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/grid/users/userSelect/searchUserFilter.tpl', 25, false),)), $this); ?>
<?php $this->assign('formId', ((is_array($_tmp="searchUserFilter-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId']))); ?>
<script type="text/javascript">
	// Attach the form handler to the form.
	$('#<?php echo $this->_tpl_vars['formId']; ?>
').pkpHandler('$.pkp.controllers.grid.users.stageParticipant.form.AddParticipantFormHandler',
		{
			trackFormChanges: false
		}
	);
</script>
<form class="pkp_form filter" id="<?php echo $this->_tpl_vars['formId']; ?>
" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchGrid'), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => ((is_array($_tmp='userSearchFormArea')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'])))); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<input type="hidden" name="submissionId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterData']['submissionId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<input type="hidden" name="stageId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['filterData']['stageId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'filterUserGroupId','id' => ((is_array($_tmp='filterUserGroupId')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'])),'from' => $this->_tpl_vars['filterData']['userGroupOptions'],'selected' => $this->_tpl_vars['filterSelectionData']['filterUserGroupId'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'translate' => false,'inline' => 'true'), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','name' => 'name','id' => ((is_array($_tmp='name')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'])),'value' => $this->_tpl_vars['filterSelectionData']['name'],'label' => "manager.userSearch.searchByName",'size' => $this->_tpl_vars['fbvStyles']['size']['LARGE'],'inline' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
				<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => "common.search"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>