<?php /* Smarty version 2.6.26, created on 2017-09-05 13:21:39
         compiled from controllers/grid/gridCellContents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_unsafe_html', 'controllers/grid/gridCellContents.tpl', 28, false),array('modifier', 'escape', 'controllers/grid/gridCellContents.tpl', 31, false),array('modifier', 'truncate', 'controllers/grid/gridCellContents.tpl', 38, false),array('modifier', 'concat', 'controllers/grid/gridCellContents.tpl', 48, false),)), $this); ?>

<?php $this->assign('_label', $this->_tpl_vars['label']); ?>

<?php if ($this->_tpl_vars['column']->hasFlag('multilingual')): ?>
		<?php if (isset ( $this->_tpl_vars['_label'][$this->_tpl_vars['currentLocale']] )): ?>
		<?php $this->assign('_label', $this->_tpl_vars['_label'][$this->_tpl_vars['currentLocale']]); ?>
	<?php else: ?>
		<?php $this->assign('_primaryLocale', "AppLocale::getPrimaryLocale()"); ?>
		<?php $this->assign('_label', $this->_tpl_vars['_label'][$this->_tpl_vars['_primaryLocale']]); ?>
	<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['column']->hasFlag('html')): ?>
		<?php $this->assign('_label', ((is_array($_tmp=$this->_tpl_vars['_label'])) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : String::stripUnsafeHtml($_tmp))); ?>
<?php else: ?>
		<?php $this->assign('_label', ((is_array($_tmp=$this->_tpl_vars['_label'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['_label'] != ''): ?>
	<span<?php if (count ( $this->_tpl_vars['actions'] ) > 0): ?> class="pkp_helpers_align_left gridLabelBeforeActions"<?php endif; ?>>
		<?php if ($this->_tpl_vars['column']->hasFlag('maxLength')): ?>
			<?php $this->assign('maxLength', $this->_tpl_vars['column']->getFlag('maxLength')); ?>
			<?php echo ((is_array($_tmp=$this->_tpl_vars['_label'])) ? $this->_run_mod_handler('truncate', true, $_tmp, $this->_tpl_vars['maxLength']) : $this->_plugins['modifier']['truncate'][0][0]->smartyTruncate($_tmp, $this->_tpl_vars['maxLength'])); ?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['_label']; ?>

		<?php endif; ?>
	</span>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['actions'] ) > 0): ?>
	<?php $_from = $this->_tpl_vars['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
		<?php if (is_a ( $this->_tpl_vars['action'] , 'LegacyLinkAction' )): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/legacyLinkAction.tpl", 'smarty_include_vars' => array('id' => ((is_array($_tmp=$this->_tpl_vars['cellId'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-action-", $this->_tpl_vars['action']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-action-", $this->_tpl_vars['action']->getId())),'action' => $this->_tpl_vars['action'],'objectId' => $this->_tpl_vars['cellId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['cellId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>