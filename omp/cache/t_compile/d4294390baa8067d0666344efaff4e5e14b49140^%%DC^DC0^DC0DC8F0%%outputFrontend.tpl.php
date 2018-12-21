<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:09
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/lib/pkp/plugins/generic/usageStats/templates/outputFrontend.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/lib/pkp/plugins/generic/usageStats/templates/outputFrontend.tpl', 17, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/omp/lib/pkp/plugins/generic/usageStats/templates/outputFrontend.tpl', 20, false),)), $this); ?>

<div class="item downloads_chart">
	<h3 class="label">
		<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.usageStats.downloads"), $this);?>

	</h3>
	<div class="value">
		<canvas class="usageStatsGraph" data-object-type="<?php echo $this->_tpl_vars['pubObjectType']; ?>
" data-object-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObjectId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></canvas>
		<div class="usageStatsUnavailable" data-object-type="<?php echo $this->_tpl_vars['pubObjectType']; ?>
" data-object-id="<?php echo ((is_array($_tmp=$this->_tpl_vars['pubObjectId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.usageStats.noStats"), $this);?>

		</div>
	</div>
</div>