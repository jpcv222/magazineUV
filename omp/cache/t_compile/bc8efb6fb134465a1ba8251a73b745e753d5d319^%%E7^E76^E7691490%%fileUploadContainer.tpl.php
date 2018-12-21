<?php /* Smarty version 2.6.25-dev, created on 2018-05-29 10:18:17
         compiled from controllers/fileUploadContainer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'controllers/fileUploadContainer.tpl', 45, false),array('modifier', 'assign', 'controllers/fileUploadContainer.tpl', 45, false),array('modifier', 'escape', 'controllers/fileUploadContainer.tpl', 73, false),)), $this); ?>
<?php if (! $this->_tpl_vars['stringDragFile']): ?>
	<?php $this->assign('stringDragFile', "common.upload.dragFile"); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['stringAddFile']): ?>
	<?php $this->assign('stringAddFile', "common.upload.addFile"); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['stringChangeFile']): ?>
	<?php $this->assign('stringChangeFile', "common.upload.changeFile"); ?>
<?php endif; ?>
<?php if (! $this->_tpl_vars['browseButton']): ?>
	<?php $this->assign('browseButton', 'pkpUploaderButton'); ?>
<?php endif; ?>


<div id="<?php echo $this->_tpl_vars['id']; ?>
" class="pkp_controller_fileUpload loading">
	<div class="pkp_uploader_loading">
				<div class="pkp_notification">
			<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.fileUploaderError"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'warningMessage') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'warningMessage'));?>

			<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.warning"), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'warningTitle') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'warningTitle'));?>

			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "controllers/notification/inPlaceNotificationContent.tpl", 'smarty_include_vars' => array('notificationId' => $this->_tpl_vars['id'],'notificationStyleClass' => 'notifyWarning','notificationContents' => $this->_tpl_vars['warningMessage'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</div>
	</div>

		<div id="pkpUploaderDropZone" class="pkp_uploader_drop_zone">

		<div class="pkp_uploader_drop_zone_label">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stringDragFile']), $this);?>

		</div>

		<div class="pkp_uploader_details">
			<span class="pkpUploaderProgress">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.percentage",'percentage' => '<span class="percentage">0</span>'), $this);?>

			</span>			<div class="pkp_uploader_progress_bar_wrapper">
				<span class="pkpUploaderProgressBar"></span>			</div>
			<span class="pkpUploaderFilename"></span>		</div>

				<div class="pkpUploaderError"></div>

				<button id="<?php echo ((is_array($_tmp=$this->_tpl_vars['browseButton'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="pkp_uploader_button pkp_button" tabindex="-1">
			<span class="pkp_uploader_button_add">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stringAddFile']), $this);?>

			</span>
			<span class="pkp_uploader_button_change">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => $this->_tpl_vars['stringChangeFile']), $this);?>

			</span>
		</button>
	</div>
</div>