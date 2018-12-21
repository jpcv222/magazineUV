<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:18:38
         compiled from frontend/components/spotlights.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/components/spotlights.tpl', 18, false),array('modifier', 'assign', 'frontend/components/spotlights.tpl', 34, false),array('modifier', 'truncate', 'frontend/components/spotlights.tpl', 48, false),array('modifier', 'strip_unsafe_html', 'frontend/components/spotlights.tpl', 48, false),array('function', 'url', 'frontend/components/spotlights.tpl', 34, false),)), $this); ?>
<div class="cmp_spotlights">
	<ul class="list">
		<?php $_from = $this->_tpl_vars['spotlights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['spotlights'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spotlights']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['spotlight']):
        $this->_foreach['spotlights']['iteration']++;
?>
			<li<?php if ($this->_foreach['spotlights']['iteration'] == 1): ?> class="current"<?php endif; ?>>
				<a href="#" data-spotlight="<?php echo $this->_foreach['spotlights']['iteration']; ?>
">
					<?php echo ((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

				</a>
			</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>

	<ul class="spotlights">
		<?php $_from = $this->_tpl_vars['spotlights']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['spotlights'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spotlights']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['spotlight']):
        $this->_foreach['spotlights']['iteration']++;
?>
			<?php $this->assign('item', $this->_tpl_vars['spotlight']->getSpotlightItem()); ?>
			<?php $this->assign('assocType', $this->_tpl_vars['spotlight']->getAssocType()); ?>
			<?php $this->assign('coverImage', ""); ?>
			<?php $this->assign('coverImageUrl', ""); ?>
			<?php $this->assign('targetUrl', ""); ?>
			<?php if ($this->_tpl_vars['assocType'] == @SPOTLIGHT_TYPE_BOOK): ?>
				<?php $this->assign('type', 'is_book'); ?>
				<?php $this->assign('coverImage', $this->_tpl_vars['item']->getCoverImage()); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['item']->getBestId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'targetUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'targetUrl'));?>

				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "submission.CoverHandler",'op' => 'thumbnail','submissionId' => $this->_tpl_vars['item']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'coverImageUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'coverImageUrl'));?>

			<?php elseif ($this->_tpl_vars['assocType'] == @SPOTLIGHT_TYPE_SERIES): ?>
				<?php $this->assign('type', 'is_series'); ?>
				<?php $this->assign('coverImage', $this->_tpl_vars['item']->getImage()); ?>
				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog','op' => 'series','path' => $this->_tpl_vars['item']->getPath()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'targetUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'targetUrl'));?>

				<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'thumbnail','type' => 'series','id' => $this->_tpl_vars['item']->getId()), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'coverImageUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'coverImageUrl'));?>

			<?php endif; ?>
			<?php $this->assign('hasCoverImage', ""); ?>
			<?php if ($this->_tpl_vars['coverImage']): ?>
				<?php $this->assign('hasCoverImage', 'has_image'); ?>
			<?php endif; ?>
			<?php $this->assign('description', ""); ?>
			<?php if ($this->_tpl_vars['spotlight']->getLocalizedDescription()): ?>
				<?php $this->assign('description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['spotlight']->getLocalizedDescription())) ? $this->_run_mod_handler('truncate', true, $_tmp, 600) : smarty_modifier_truncate($_tmp, 600)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?>
			<?php else: ?>
				<?php if ($this->_tpl_vars['assocType'] == @SPOTLIGHT_TYPE_SERIES): ?>
					<?php $this->assign('description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedDescription())) ? $this->_run_mod_handler('truncate', true, $_tmp, 600) : smarty_modifier_truncate($_tmp, 600)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?>
				<?php elseif ($this->_tpl_vars['assocType'] == @SPOTLIGHT_TYPE_BOOK): ?>
					<?php $this->assign('description', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']->getLocalizedAbstract())) ? $this->_run_mod_handler('truncate', true, $_tmp, 600) : smarty_modifier_truncate($_tmp, 600)))) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp))); ?>
				<?php endif; ?>
			<?php endif; ?>

			<li class="spotlight_<?php echo $this->_foreach['spotlights']['iteration']; ?>
<?php if ($this->_foreach['spotlights']['iteration'] == 1): ?> current<?php endif; ?>">
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/spotlight.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			</li>
		<?php endforeach; endif; unset($_from); ?>
	</ul>
</div>