<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:14
         compiled from controllers/grid/settings/genre/form/genreForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/settings/genre/form/genreForm.tpl', 18, false),array('function', 'csrf', 'controllers/grid/settings/genre/form/genreForm.tpl', 19, false),array('function', 'fbvElement', 'controllers/grid/settings/genre/form/genreForm.tpl', 24, false),array('function', 'translate', 'controllers/grid/settings/genre/form/genreForm.tpl', 45, false),array('function', 'fbvFormButtons', 'controllers/grid/settings/genre/form/genreForm.tpl', 46, false),array('block', 'fbvFormArea', 'controllers/grid/settings/genre/form/genreForm.tpl', 22, false),array('block', 'fbvFormSection', 'controllers/grid/settings/genre/form/genreForm.tpl', 23, false),array('modifier', 'escape', 'controllers/grid/settings/genre/form/genreForm.tpl', 37, false),)), $this); ?>

<script type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#genreForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
</script>

<form class="pkp_form" id="genreForm" method="post" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.genre.GenreGridHandler",'op' => 'updateGenre'), $this);?>
">
<?php echo $this->_plugins['function']['csrf'][0][0]->smartyCSRF(array(), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotification.tpl", 'smarty_include_vars' => array('notificationId' => 'genreFormNotification')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->_tag_stack[] = array('fbvFormArea', array('id' => 'genreInfo')); $_block_repeat=true;$this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "common.name",'for' => 'name','required' => 'true')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'text','multilingual' => 'true','id' => 'name','value' => $this->_tpl_vars['name'],'maxlength' => '80','required' => 'true'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('list' => 'true','title' => "common.options")); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'sortable','checked' => $this->_tpl_vars['sortable'],'label' => "manager.setup.genres.sortable"), $this);?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'dependent','checked' => $this->_tpl_vars['dependent'],'label' => "manager.setup.genres.dependent"), $this);?>

	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'checkbox','id' => 'supplementary','checked' => $this->_tpl_vars['supplementary'],'label' => "manager.setup.genres.supplementary"), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "manager.setup.groupType",'for' => 'category')); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'select','id' => 'category','from' => $this->_tpl_vars['submissionFileCategories'],'selected' => $this->_tpl_vars['category'],'translate' => false), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormArea'][0][0]->smartyFBVFormArea($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if ($this->_tpl_vars['gridId']): ?>
	<input type="hidden" name="gridId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['gridId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['rowId']): ?>
	<input type="hidden" name="rowId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['genreId']): ?>
	<input type="hidden" name="genreId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['genreId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
<?php endif; ?>
<p><span class="formRequired"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.requiredField"), $this);?>
</span></p>
<?php echo $this->_plugins['function']['fbvFormButtons'][0][0]->smartyFBVFormButtons(array('submitText' => "common.save"), $this);?>

</form>