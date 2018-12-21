<?php /* Smarty version 2.6.25-dev, created on 2018-06-13 14:21:34
         compiled from controllers/tab/manageCatalog/spotlights.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/manageCatalog/spotlights.tpl', 12, false),array('function', 'url', 'controllers/tab/manageCatalog/spotlights.tpl', 14, false),array('function', 'load_url_in_div', 'controllers/tab/manageCatalog/spotlights.tpl', 15, false),array('modifier', 'assign', 'controllers/tab/manageCatalog/spotlights.tpl', 14, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "catalog.md#spotlights",'class' => 'pkp_help_tab'), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.content.spotlights.ManageSpotlightsGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'spotlightsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'spotlightsGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'spotlightsGridContainer','url' => $this->_tpl_vars['spotlightsGridUrl']), $this);?>
