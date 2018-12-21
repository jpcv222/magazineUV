<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:25:03
         compiled from submission/form/categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'uniqid', 'submission/form/categories.tpl', 12, false),array('modifier', 'escape', 'submission/form/categories.tpl', 12, false),array('modifier', 'assign', 'submission/form/categories.tpl', 14, false),array('function', 'url', 'submission/form/categories.tpl', 14, false),array('function', 'load_url_in_div', 'submission/form/categories.tpl', 15, false),array('block', 'fbvFormSection', 'submission/form/categories.tpl', 19, false),)), $this); ?>
<?php if ($this->_tpl_vars['categoriesExist']): ?>
	<?php if (! $this->_tpl_vars['readOnly']): ?>
		<?php $this->assign('monographCategoriesContainer', ((is_array($_tmp=((is_array($_tmp="monographCategoriesContainer-")) ? $this->_run_mod_handler('uniqid', true, $_tmp) : uniqid($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))); ?>
		<div id="<?php echo ((is_array($_tmp=$this->_tpl_vars['monographCategoriesContainer'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CategoriesListbuilderHandler",'op' => 'fetch','submissionId' => $this->_tpl_vars['submissionId'],'readOnly' => $this->_tpl_vars['readOnly'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'monographCategoriesUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'monographCategoriesUrl'));?>

			<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => $this->_tpl_vars['monographCategoriesContainer'],'url' => $this->_tpl_vars['monographCategoriesUrl']), $this);?>

		</div>
	<?php else: ?>
		<?php if (count ( $this->_tpl_vars['assignedCategories'] ) > 0): ?>
			<?php $this->_tag_stack[] = array('fbvFormSection', array('title' => "grid.category.categories",'list' => true)); $_block_repeat=true;$this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
				<?php $_from = $this->_tpl_vars['assignedCategories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
					<li><?php echo $this->_tpl_vars['category']->getLocalizedTitle(); ?>
</li>
				<?php endforeach; endif; unset($_from); ?>
			<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['fbvFormSection'][0][0]->smartyFBVFormSection($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>