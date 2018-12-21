<?php /* Smarty version 2.6.25-dev, created on 2018-05-22 07:43:33
         compiled from workflow/editorialLinkActions.tpl */ ?>
<?php if (! empty ( $this->_tpl_vars['editorActions'] )): ?>
	<?php if (array_intersect ( array ( ROLE_ID_MANAGER , ROLE_ID_SUB_EDITOR ) , ( array ) $this->_tpl_vars['userRoles'] )): ?>
		<ul class="pkp_workflow_decisions">
			<?php $_from = $this->_tpl_vars['editorActions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
				<li>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['contextId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				</li>
			<?php endforeach; endif; unset($_from); ?>
		</ul>
	<?php endif; ?>
<?php endif; ?>