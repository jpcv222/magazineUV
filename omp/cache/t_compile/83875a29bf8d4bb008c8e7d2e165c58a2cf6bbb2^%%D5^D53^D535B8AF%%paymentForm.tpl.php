<?php /* Smarty version 2.6.25-dev, created on 2018-06-18 04:08:12
         compiled from file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl', 16, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl', 21, false),array('modifier', 'string_format', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl', 26, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl', 37, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl', 20, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/omp/plugins/paymethod/manual/templates/paymentForm.tpl', 37, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array('pageTitle' => "plugins.paymethod.manual")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>


<div class="page page_payment">
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/breadcrumbs.tpl", 'smarty_include_vars' => array('currentTitleKey' => "plugins.paymethod.manual")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

	<p><?php echo ((is_array($_tmp=$this->_tpl_vars['manualInstructions'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>

	<table class="data" width="100%">
		<tr>
			<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.paymethod.manual.purchase.title"), $this);?>
</td>
			<td class="value" width="80%"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['itemName'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</strong></td>
		</tr>
		<?php if ($this->_tpl_vars['itemAmount']): ?>
			<tr>
				<td class="label" width="20%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.paymethod.manual.purchase.fee"), $this);?>
</td>
				<td class="value" width="80%"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['itemAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
<?php if ($this->_tpl_vars['itemCurrencyCode']): ?> (<?php echo ((is_array($_tmp=$this->_tpl_vars['itemCurrencyCode'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
)<?php endif; ?></strong></td>
			</tr>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['itemDescription']): ?>
		<tr>
			<td colspan="2"><?php echo ((is_array($_tmp=$this->_tpl_vars['itemDescription'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
		</tr>
		<?php endif; ?>
	</table>

	<p>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'payment','op' => 'plugin','path' => ((is_array($_tmp=((is_array($_tmp='ManualPayment')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'notify', $this->_tpl_vars['queuedPaymentId']) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'notify', $this->_tpl_vars['queuedPaymentId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp))), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.paymethod.manual.sendNotificationOfPayment"), $this);?>
</a>
	</p>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>