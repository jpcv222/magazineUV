<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:35:22
         compiled from controllers/grid/manageCatalog/form/catalogMonographsFilterForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'fbvFormArea', 'controllers/grid/manageCatalog/form/catalogMonographsFilterForm.tpl', 18, false),array('block', 'fbvFormSection', 'controllers/grid/manageCatalog/form/catalogMonographsFilterForm.tpl', 19, false),array('function', 'fbvElement', 'controllers/grid/manageCatalog/form/catalogMonographsFilterForm.tpl', 21, false),array('function', 'fbvFormButtons', 'controllers/grid/manageCatalog/form/catalogMonographsFilterForm.tpl', 28, false),)), $this); ?>
<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#catalogMonographsFilterForm-<?php echo $this->_tpl_vars['grid']->getId(); ?>
').pkpHandler('$.pkp.controllers.form.ToggleFormHandler');
	});
</script>

<form class="pkp_form filter" id="catalogMonographsFilterForm-<?php echo $this->_tpl_vars['grid']->getId(); ?>
">
	<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'catalogMonographFilterElements')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php if ($this->_tpl_vars['filterData']['categoryId']): ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "catalog.selectCategory",'id' => 'categoryId','from' => $this->_tpl_vars['filterData']['categoryOptions'],'selected' => $this->_tpl_vars['filterData']['categoryId'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php elseif ($this->_tpl_vars['filterData']['seriesId']): ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','label' => "catalog.selectSeries",'id' => 'seriesId','from' => $this->_tpl_vars['filterData']['seriesOptions'],'selected' => $this->_tpl_vars['filterData']['seriesId'],'translate' => false,'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

		<?php endif; ?>
			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','id' => 'searchText','value' => $this->_tpl_vars['filterData']['searchText'],'label' => "catalog.manage.filter.searchByAuthorOrTitle",'size' => $this->_tpl_vars['fbvStyles']['size']['SMALL'],'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'featured','checked' => $this->_tpl_vars['filterData']['featured'],'value' => 1,'label' => "common.feature",'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'newReleased','checked' => $this->_tpl_vars['filterData']['newReleased'],'value' => 1,'label' => "catalog.manage.newReleases",'inline' => true), $this);?>

			<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.search",'hideCancel' => true), $this);?>

		<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</form>
