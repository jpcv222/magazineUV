<?php /* Smarty version 2.6.26, created on 2017-08-17 13:48:45
         compiled from notification/maillistSubscribed.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'notification/maillistSubscribed.tpl', 19, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "notification.mailList"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<ul>
	<li>
		<span<?php if ($this->_tpl_vars['error']): ?> class="pkp_form_error"<?php endif; ?>>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.".($this->_tpl_vars['status'])), $this);?>

		</span>
	</li>
<ul>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>