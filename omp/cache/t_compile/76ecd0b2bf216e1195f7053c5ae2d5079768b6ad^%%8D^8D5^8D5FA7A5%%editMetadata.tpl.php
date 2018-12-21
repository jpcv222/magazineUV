<?php /* Smarty version 2.6.25-dev, created on 2018-09-07 02:52:50
         compiled from controllers/api/file/editMetadata.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'controllers/api/file/editMetadata.tpl', 18, false),array('function', 'translate', 'controllers/api/file/editMetadata.tpl', 18, false),)), $this); ?>
<script type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editFileMetadataTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
</script>
<div id="editFileMetadataTabs">
	<ul>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'editMetadataTab','fileId' => $this->_tpl_vars['submissionFile']->getFileId(),'revision' => $this->_tpl_vars['submissionFile']->getRevision(),'submissionId' => $this->_tpl_vars['submissionFile']->getSubmissionId(),'stageId' => $this->_tpl_vars['stageId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.action.editMetadata"), $this);?>
</a></li>
		<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'op' => 'identifiers','fileId' => $this->_tpl_vars['submissionFile']->getFileId(),'revision' => $this->_tpl_vars['submissionFile']->getRevision(),'submissionId' => $this->_tpl_vars['submissionFile']->getSubmissionId(),'stageId' => $this->_tpl_vars['stageId']), $this);?>
"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "submission.identifiers"), $this);?>
</a></li>
	</ul>
</div>