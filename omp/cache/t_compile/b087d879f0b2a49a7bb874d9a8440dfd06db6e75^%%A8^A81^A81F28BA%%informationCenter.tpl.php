<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:44:16
         compiled from controllers/informationCenter/informationCenter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'controllers/informationCenter/informationCenter.tpl', 16, false),array('function', 'url', 'controllers/informationCenter/informationCenter.tpl', 25, false),array('function', 'translate', 'controllers/informationCenter/informationCenter.tpl', 25, false),)), $this); ?>

<script type="text/javascript">
	// Attach the Information Center handler.
	$(function() {
		$('#informationCenter').pkpHandler(
			'$.pkp.controllers.TabHandler', {
				selected: <?php echo ((is_array($_tmp=$this->_tpl_vars['selectedTabIndex'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>

			}
		);
	});
</script>

<div id="informationCenter" class="pkp_controllers_informationCenter pkp_controllers_tab">
	<ul>
		<?php if (! $this->_tpl_vars['removeHistoryTab']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewHistory','params' => $this->_tpl_vars['linkParams']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.informationCenter.history"), $this);?>
</a></li>
		<?php endif; ?>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'viewNotes','params' => $this->_tpl_vars['linkParams']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.informationCenter.notes"), $this);?>
</a></li>
	</ul>
</div>