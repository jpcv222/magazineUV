<?php /* Smarty version 2.6.25-dev, created on 2018-07-22 05:42:39
         compiled from frontend/components/searchForm_simple.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/searchForm_simple.tpl', 12, false),array('function', 'translate', 'frontend/components/searchForm_simple.tpl', 13, false),array('modifier', 'escape', 'frontend/components/searchForm_simple.tpl', 13, false),)), $this); ?>
<form class="cmp_form cmp_search" action="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'results'), $this);?>
" method="post" role="search">
	<input name="query" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['searchQuery'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" type="text" aria-label="<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.searchQuery"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
	<button type="submit">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>

	</button>
	<div class="search_controls" aria-hidden="true">
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'results'), $this);?>
" class="headerSearchPrompt search_prompt" aria-hidden="true">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.search"), $this);?>

		</a>
		<a href="#" class="search_cancel headerSearchCancel" aria-hidden="true"></a>
		<span class="search_loading" aria-hidden="true"></span>
	</div>
</form>