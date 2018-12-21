<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:06:31
         compiled from common/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'common/header.tpl', 12, false),array('function', 'translate', 'common/header.tpl', 12, false),)), $this); ?>
<?php ob_start(); ?>
	<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR ) , $this->_tpl_vars['userRoles'] )): ?>
		<li><a name="catalog" href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'manageCatalog'), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>
</a></li>
	<?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('appSpecificMenuItems', ob_get_contents());ob_end_clean(); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:common/header.tpl", 'smarty_include_vars' => array('appSpecificMenuItems' => $this->_tpl_vars['appSpecificMenuItems'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>