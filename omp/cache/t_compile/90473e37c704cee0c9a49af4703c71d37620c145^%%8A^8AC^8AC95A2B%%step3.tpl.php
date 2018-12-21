<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 08:17:45
         compiled from submission/form/step3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'submission/form/step3.tpl', 12, false),array('function', 'load_url_in_div', 'submission/form/step3.tpl', 13, false),array('modifier', 'assign', 'submission/form/step3.tpl', 12, false),)), $this); ?>
<?php ob_start(); ?>
	<!--  Chapters -->
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.users.chapter.ChapterGridHandler",'op' => 'fetchGrid','submissionId' => $this->_tpl_vars['submissionId'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'chaptersGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'chaptersGridUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'chaptersGridContainer','url' => $this->_tpl_vars['chaptersGridUrl']), $this);?>

<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalContributorsFields', ob_get_contents());ob_end_clean(); ?>

<?php ob_start(); ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "submission/form/categories.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('additionalFormFields', ob_get_contents());ob_end_clean(); ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "core:submission/form/step3.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>