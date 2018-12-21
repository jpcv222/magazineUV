<?php /* Smarty version 2.6.25-dev, created on 2018-05-05 00:01:18
         compiled from frontend/components/monographList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'frontend/components/monographList.tpl', 23, false),)), $this); ?>
<?php if (! $this->_tpl_vars['heading']): ?>
	<?php $this->assign('heading', 'h2'); ?>
<?php endif; ?>
<div class="cmp_monographs_list">

		<?php if ($this->_tpl_vars['titleKey']): ?>
		<<?php echo $this->_tpl_vars['heading']; ?>
 class="title">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['titleKey']), $this);?>

		</<?php echo $this->_tpl_vars['heading']; ?>
>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['featured'] && count ( $this->_tpl_vars['featured'] ) > 0): ?>
		<?php $_from = $this->_tpl_vars['featured']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['array_key']):
?>
			<?php if (isset ( $this->_tpl_vars['monographs'][$this->_tpl_vars['id']] )): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/monograph_summary.tpl", 'smarty_include_vars' => array('monograph' => $this->_tpl_vars['monographs'][$this->_tpl_vars['id']],'isFeatured' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>

	<?php $this->assign('counter', 1); ?>
	<?php $_from = $this->_tpl_vars['monographs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['monographListLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['monographListLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['monograph']):
        $this->_foreach['monographListLoop']['iteration']++;
?>
		<?php if (is_array ( $this->_tpl_vars['featured'] ) && array_key_exists ( $this->_tpl_vars['key'] , $this->_tpl_vars['featured'] )): ?>
			<?php continue; ?>
		<?php endif; ?>
		<?php if ((1 & ($this->_tpl_vars['counter'] / 1))): ?>
			<div class="row">
		<?php endif; ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/monograph_summary.tpl", 'smarty_include_vars' => array('monograph' => $this->_tpl_vars['monograph'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php if (!(1 & ($this->_tpl_vars['counter'] / 1))): ?>
			</div>
		<?php endif; ?>
		<?php $this->assign('counter', $this->_tpl_vars['counter']+1); ?>
	<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['counter'] > 1 && !(1 & ($this->_tpl_vars['counter'] / 1))): ?>
		</div>
	<?php endif; ?>
</div>