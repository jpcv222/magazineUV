<?php /* Smarty version 2.6.26, created on 2017-09-05 13:21:39
         compiled from controllers/grid/gridRow.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'concat', 'controllers/grid/gridRow.tpl', 11, false),array('modifier', 'escape', 'controllers/grid/gridRow.tpl', 13, false),array('function', 'translate', 'controllers/grid/gridRow.tpl', 37, false),)), $this); ?>
<?php if (! is_null ( $this->_tpl_vars['row']->getId() )): ?>
	<?php $this->assign('rowIdPrefix', ((is_array($_tmp="component-")) ? $this->_run_mod_handler('concat', true, $_tmp, $this->_tpl_vars['row']->getGridId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, $this->_tpl_vars['row']->getGridId()))); ?>
	<?php if ($this->_tpl_vars['categoryId']): ?>
		<?php $this->assign('rowIdPrefix', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['rowIdPrefix'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-category-", $this->_tpl_vars['categoryId']) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-category-", $this->_tpl_vars['categoryId'])))) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp))); ?>
	<?php endif; ?>
	<?php $this->assign('rowId', ((is_array($_tmp=$this->_tpl_vars['rowIdPrefix'])) ? $this->_run_mod_handler('concat', true, $_tmp, "-row-", $this->_tpl_vars['row']->getId()) : $this->_plugins['modifier']['concat'][0][0]->smartyConcat($_tmp, "-row-", $this->_tpl_vars['row']->getId()))); ?>
<?php else: ?>
	<?php $this->assign('rowId', ""); ?>
<?php endif; ?>
<tr <?php if ($this->_tpl_vars['rowId']): ?>id="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
" <?php endif; ?>class="<?php if ($this->_tpl_vars['rowId']): ?>element<?php echo ((is_array($_tmp=$this->_tpl_vars['row']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
 <?php endif; ?>gridRow<?php if (is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' )): ?> category<?php if (! $this->_tpl_vars['row']->hasFlag('gridRowStyle')): ?> default_category_style<?php endif; ?><?php endif; ?>">
	<?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columnLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columnLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['columnId'] => $this->_tpl_vars['column']):
        $this->_foreach['columnLoop']['iteration']++;
?>
		<?php if ($this->_tpl_vars['column']->hasFlag('indent')): ?>
			<?php if (! is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' )): ?>
				<td class="no_border indent_row"></td>
				<?php $this->assign('columnSpan', 0); ?>
			<?php else: ?>
				<?php $this->assign('columnSpan', 2); ?>
			<?php endif; ?>
		<?php else: ?>
			<td <?php if ($this->_tpl_vars['columnSpan'] && $this->_foreach['columnLoop']['iteration'] == 2): ?>colspan="<?php echo $this->_tpl_vars['columnSpan']; ?>
"<?php endif; ?>
			<?php if ($this->_tpl_vars['column']->hasFlag('firstColumn')): ?> class="first_column<?php if (! $this->_tpl_vars['row']->hasActions()): ?> no_actions<?php endif; ?>"<?php endif; ?>
			<?php if ($this->_tpl_vars['row']->hasActions() && $this->_tpl_vars['column']->hasFlag('firstColumn')): ?>
					>
					<div class="row_container">
						<div class="row_file <?php if ($this->_tpl_vars['column']->hasFlag('multiline')): ?>multiline<?php endif; ?>"><?php echo $this->_tpl_vars['cells'][($this->_foreach['columnLoop']['iteration']-1)]; ?>
</div>
						<div class="row_actions">
							<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
								<a class="sprite settings" title="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.settings"), $this);?>
"><span class="hidetext"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "grid.settings"), $this);?>
</span></a>
							<?php endif; ?>
							<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT)): ?>
								<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_ROW_LEFT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
									<?php if (is_a ( $this->_tpl_vars['action'] , 'LegacyLinkAction' )): ?>
										<?php if ($this->_tpl_vars['action']->getMode() == @LINK_ACTION_MODE_AJAX): ?>
											<?php $this->assign('actionActOnId', $this->_tpl_vars['action']->getActOn()); ?>
										<?php else: ?>
											<?php $this->assign('actionActOnId', $this->_tpl_vars['gridActOnId']); ?>
										<?php endif; ?>
										<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/legacyLinkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'id' => $this->_tpl_vars['rowId'],'hoverTitle' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									<?php else: ?>
										<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
									<?php endif; ?>
								<?php endforeach; endif; unset($_from); ?>
							<?php endif; ?>
						</div>
					</div>
				</td>
			<?php else: ?>
				<?php if ($this->_tpl_vars['column']->hasFlag('alignment')): ?>
					<?php $this->assign('alignment', $this->_tpl_vars['column']->getFlag('alignment')); ?>
				<?php else: ?>
					<?php $this->assign('alignment', @COLUMN_ALIGNMENT_CENTER); ?>
				<?php endif; ?>
				style="text-align: <?php echo $this->_tpl_vars['alignment']; ?>
">
					<?php echo $this->_tpl_vars['cells'][($this->_foreach['columnLoop']['iteration']-1)]; ?>

				</td>
			<?php endif; ?>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
</tr>
<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
	<tr id="<?php echo ((is_array($_tmp=$this->_tpl_vars['rowId'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
-control-row" class="row_controls<?php if (is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' )): ?> category_controls<?php endif; ?>">
		<?php if ($this->_tpl_vars['grid']->getColumnsByFlag('indent')): ?>
			<td class="<?php if (! is_a ( $this->_tpl_vars['row'] , 'GridCategoryRow' )): ?>no_border <?php endif; ?>indent_row"></td>
		<?php endif; ?>
		<td colspan="<?php echo $this->_tpl_vars['grid']->getColumnsCount('indent'); ?>
">
			<?php if ($this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT)): ?>
				<?php $_from = $this->_tpl_vars['row']->getActions(@GRID_ACTION_POSITION_DEFAULT); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
					<?php if (is_a ( $this->_tpl_vars['action'] , 'LegacyLinkAction' )): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/legacyLinkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'id' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php else: ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "linkAction/linkAction.tpl", 'smarty_include_vars' => array('action' => $this->_tpl_vars['action'],'contextId' => $this->_tpl_vars['rowId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			<?php endif; ?>
		</td>
	</tr>
<?php endif; ?>
