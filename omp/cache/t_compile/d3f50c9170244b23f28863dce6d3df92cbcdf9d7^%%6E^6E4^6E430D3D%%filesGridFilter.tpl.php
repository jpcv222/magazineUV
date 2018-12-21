<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:42:38
         compiled from controllers/grid/files/filesGridFilter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/files/filesGridFilter.tpl', 10, false),array('modifier', 'uniqid', 'controllers/grid/files/filesGridFilter.tpl', 10, false),array('function', 'url', 'controllers/grid/files/filesGridFilter.tpl', 19, false),array('function', 'csrf', 'controllers/grid/files/filesGridFilter.tpl', 20, false),array('function', 'fbvElement', 'controllers/grid/files/filesGridFilter.tpl', 23, false),array('function', 'fbvFormButtons', 'controllers/grid/files/filesGridFilter.tpl', 26, false),array('block', 'fbvFormArea', 'controllers/grid/files/filesGridFilter.tpl', 21, false),array('block', 'fbvFormSection', 'controllers/grid/files/filesGridFilter.tpl', 22, false),)), $this); ?>
<?php $this->assign('formId', ((is_array($_tmp=((is_array($_tmp="submissionFilesListFilter-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId'], "-") : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'], "-")))) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp))); ?>
<script type="text/javascript">
	// Attach the form handler to the form.
	$('#<?php echo $this->_tpl_vars['formId']; ?>
').pkpHandler('$.pkp.controllers.form.ClientFormHandler',
		{
			trackFormChanges: false
		}
	);
</script>
<form class="pkp_form filter" id="<?php echo $this->_tpl_vars['formId']; ?>
" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'fetchGrid'), $this);?>
" method="post">
	<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => ((is_array($_tmp='submissionFilesSearchFormArea')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'])))); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array()); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','name' => 'search','id' => ((is_array($_tmp='search')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'])),'value' => $this->_tpl_vars['filterSelectionData']['search'],'size' => $this->_tpl_vars['fbvStyles']['size']['MEDIUM'],'inline' => 'true'), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','name' => 'column','id' => ((is_array($_tmp='column')) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['filterData']['gridId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['filterData']['gridId'])),'from' => $this->_tpl_vars['filterData']['columns'],'selected' => $this->_tpl_vars['filterSelectionData']['column'],'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'translate' => false,'inline' => 'true'), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('hideCancel' => true,'submitText' => "common.search"), $this);?>

	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>