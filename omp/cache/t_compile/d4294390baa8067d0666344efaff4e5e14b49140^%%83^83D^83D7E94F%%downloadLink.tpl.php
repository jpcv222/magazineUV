<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:10
         compiled from frontend/components/downloadLink.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/downloadLink.tpl', 20, false),array('function', 'translate', 'frontend/components/downloadLink.tpl', 28, false),array('modifier', 'to_array', 'frontend/components/downloadLink.tpl', 20, false),array('modifier', 'assign', 'frontend/components/downloadLink.tpl', 20, false),)), $this); ?>

<?php $this->assign('publicationFormatId', $this->_tpl_vars['publicationFormat']->getBestId()); ?>

<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'view','path' => ((is_array($_tmp=$this->_tpl_vars['monograph']->getBestId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['publicationFormatId'], $this->_tpl_vars['downloadFile']->getBestId()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['publicationFormatId'], $this->_tpl_vars['downloadFile']->getBestId()))), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'downloadUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'downloadUrl'));?>


<a href="<?php echo $this->_tpl_vars['downloadUrl']; ?>
" class="cmp_download_link <?php echo $this->_tpl_vars['downloadFile']->getDocumentType(); ?>
">
	<?php if ($this->_tpl_vars['useFilename']): ?>
		<?php echo $this->_tpl_vars['downloadFile']->getLocalizedName(); ?>

	<?php else: ?>
		<?php if ($this->_tpl_vars['downloadFile']->getDirectSalesPrice()): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "payment.directSales.purchase",'format' => $this->_tpl_vars['publicationFormat']->getLocalizedName(),'amount' => $this->_tpl_vars['currency']->format($this->_tpl_vars['downloadFile']->getDirectSalesPrice()),'currency' => $this->_tpl_vars['currency']->getCodeAlpha()), $this);?>

		<?php else: ?>
			<?php echo $this->_tpl_vars['publicationFormat']->getLocalizedName(); ?>

		<?php endif; ?>
	<?php endif; ?>
</a>