<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:44:22
         compiled from controllers/informationCenter/notesList.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'iterate', 'controllers/informationCenter/notesList.tpl', 12, false),array('function', 'translate', 'controllers/informationCenter/notesList.tpl', 23, false),)), $this); ?>

<div id="<?php echo $this->_tpl_vars['notesListId']; ?>
" class="pkp_notes_list">
	<?php $this->_tag_stack[] = array('iterate', array('from' => 'notes','item' => 'note')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
		<?php $this->assign('noteId', $this->_tpl_vars['note']->getId()); ?>
		<?php if ($this->_tpl_vars['noteFilesDownloadLink'] && isset ( $this->_tpl_vars['noteFilesDownloadLink'][$this->_tpl_vars['noteId']] )): ?>
			<?php $this->assign('downloadLink', $this->_tpl_vars['noteFilesDownloadLink'][$this->_tpl_vars['noteId']]); ?>
		<?php else: ?>
			<?php $this->assign('downloadLink', 0); ?>
		<?php endif; ?>
		<?php $this->assign('noteViewStatus', $this->_tpl_vars['note']->markViewed($this->_tpl_vars['currentUserId'])); ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/informationCenter/note.tpl", 'smarty_include_vars' => array('noteFileDownloadLink' => $this->_tpl_vars['downloadLink'],'noteViewStatus' => $this->_tpl_vars['noteViewStatus'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
	<?php if ($this->_tpl_vars['notes']->wasEmpty()): ?>
		<p class="no_notes"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "informationCenter.noNotes"), $this);?>
</p>
	<?php endif; ?>
</div>