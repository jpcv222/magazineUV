<?php /* Smarty version 2.6.26, created on 2017-09-05 13:21:39
         compiled from controllers/grid/gridBodyPart.tpl */ ?>
<tbody>
	<?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		<?php echo $this->_tpl_vars['row']; ?>

	<?php endforeach; endif; unset($_from); ?>
	<tr></tr>
</tbody>
