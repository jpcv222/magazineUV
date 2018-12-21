<?php /* Smarty version 2.6.25-dev, created on 2018-05-25 09:59:51
         compiled from controllers/modals/documentLibrary/documentLibrary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help', 'controllers/modals/documentLibrary/documentLibrary.tpl', 11, false),array('function', 'url', 'controllers/modals/documentLibrary/documentLibrary.tpl', 13, false),array('function', 'load_url_in_div', 'controllers/modals/documentLibrary/documentLibrary.tpl', 14, false),array('modifier', 'assign', 'controllers/modals/documentLibrary/documentLibrary.tpl', 13, false),)), $this); ?>

<?php echo $this->_plugins['function']['help'][0][0]->smartyHelp(array('file' => "editorial-workflow.md",'section' => "submission-library",'class' => 'pkp_help_modal'), $this);?>


<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('submissionId' => $this->_tpl_vars['submission']->getId(),'router' => @ROUTE_COMPONENT,'component' => "grid.files.submissionDocuments.SubmissionDocumentsFilesGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'submissionLibraryGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'submissionLibraryGridUrl'));?>

<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'submissionLibraryGridContainer','url' => $this->_tpl_vars['submissionLibraryGridUrl']), $this);?>
