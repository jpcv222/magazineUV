<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:45:35
         compiled from controllers/grid/catalogEntry/editFormat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/grid/catalogEntry/editFormat.tpl', 18, false),array('function', 'translate', 'controllers/grid/catalogEntry/editFormat.tpl', 18, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editPublicationFormatMetadataTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="editPublicationFormatMetadataTabs">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'editFormatTab','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.action.editMetadata"), $this);?>
</a></li>
		<?php if (! $this->_tpl_vars['remoteRepresentation']): ?>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'identifiers','submissionId' => $this->_tpl_vars['submissionId'],'representationId' => $this->_tpl_vars['representationId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.identifiers"), $this);?>
</a></li>
		<?php endif; ?>
	</ul>
</div>