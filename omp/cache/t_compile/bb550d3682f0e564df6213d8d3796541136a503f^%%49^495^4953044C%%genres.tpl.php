<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 02:59:09
         compiled from controllers/tab/settings/genres.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/tab/settings/genres.tpl', 13, false),array('function', 'url', 'controllers/tab/settings/genres.tpl', 16, false),array('function', 'load_url_in_div', 'controllers/tab/settings/genres.tpl', 17, false),array('modifier', 'assign', 'controllers/tab/settings/genres.tpl', 16, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "settings.md",'section' => "workflow-components",'class' => 'pkp_help_tab'), $this);?>


<div class="genres">
	<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.settings.genre.GenreGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'genresUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'genresUrl'));?>

	<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'genresContainer','url' => $this->_tpl_vars['genresUrl']), $this);?>

</div>