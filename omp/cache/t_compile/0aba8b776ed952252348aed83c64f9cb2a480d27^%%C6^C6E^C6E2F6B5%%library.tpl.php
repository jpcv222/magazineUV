<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:59:55
         compiled from controllers/tab/settings/library.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/library.tpl', 18, false),array('function', 'url', 'controllers/tab/settings/library.tpl', 20, false),array('function', 'load_url_in_div', 'controllers/tab/settings/library.tpl', 21, false),array('modifier', 'assign', 'controllers/tab/settings/library.tpl', 20, false),)), $this); ?>

<?php $this->assign('helpClass', 'pkp_help_tab'); ?>
<?php if ($this->_tpl_vars['isModal']): ?>
    <?php $this->assign('helpClass', 'pkp_help_modal'); ?>
<?php endif; ?>
<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => "workflow-library",'class' => $this->_tpl_vars['helpClass']), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.library.LibraryFileAdminGridHandler",'op' => 'fetchGrid','canEdit' => $this->_tpl_vars['canEdit'],'escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'libraryGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'libraryGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'libraryGridDiv','url' => $this->_tpl_vars['libraryGridUrl']), $this);?>
