<?php /* Smarty version 2.6.25-dev, created on 2018-05-29 10:17:59
         compiled from management/tools/importexport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'management/tools/importexport.tpl', 11, false),array('function', 'url', 'management/tools/importexport.tpl', 15, false),array('modifier', 'to_array', 'management/tools/importexport.tpl', 15, false),array('modifier', 'escape', 'management/tools/importexport.tpl', 15, false),)), $this); ?>
<div class="pkp_page_content pkp_page_importexport_plugins">
	<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "tools.md",'section' => "import-export",'class' => 'pkp_help_tab'), $this);?>


	<ul>
		<?php $_from = $this->_tpl_vars['plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plugin']):
?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'importexport','path' => ((is_array($_tmp='plugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['plugin']->getName()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['plugin']->getName()))), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']->getDisplayName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>:&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['plugin']->getDescription())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>