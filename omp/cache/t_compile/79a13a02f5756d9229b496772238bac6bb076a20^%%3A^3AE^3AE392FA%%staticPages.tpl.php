<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:04
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/generic/staticPages/templates/staticPages.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/generic/staticPages/templates/staticPages.tpl', 10, false),array('function', 'load_url_in_div', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/generic/staticPages/templates/staticPages.tpl', 11, false),array('modifier', 'assign', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/generic/staticPages/templates/staticPages.tpl', 10, false),)), $this); ?>
<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "plugins.generic.staticPages.controllers.grid.StaticPageGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'staticPageGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'staticPageGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'staticPageGridContainer','url' => $this->_tpl_vars['staticPageGridUrl']), $this);?>
