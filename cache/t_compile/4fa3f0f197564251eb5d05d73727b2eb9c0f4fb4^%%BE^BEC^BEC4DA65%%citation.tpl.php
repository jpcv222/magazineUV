<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:58
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/mla//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/mla//citation.tpl', 12, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/mla//citation.tpl', 14, false),array('modifier', 'strip_unsafe_html', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/mla//citation.tpl', 17, false),array('modifier', 'date_format', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/mla//citation.tpl', 17, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/mla//citation.tpl', 17, false),)), $this); ?>
<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?>
<?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?>
<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?>
<?php if (($this->_foreach['authors']['iteration'] <= 1)): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFullName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php if ($this->_tpl_vars['i'] == $this->_tpl_vars['authorCount']-2): ?>, & <?php elseif ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?>, <?php else: ?>.<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

"<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_unsafe_html', true, $_tmp) : PKPString::stripUnsafeHtml($_tmp)); ?>
." <em><?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</em> [<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.online"), $this);?>
],<?php if ($this->_tpl_vars['issue']): ?><?php if ($this->_tpl_vars['issue']->getShowVolume()): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php endif; ?><?php if ($this->_tpl_vars['issue'] && $this->_tpl_vars['issue']->getShowNumber() && $this->_tpl_vars['issue']->getNumber()): ?>.<?php echo $this->_tpl_vars['issue']->getNumber(); ?>
<?php endif; ?><?php if ($this->_tpl_vars['issue']): ?> (<?php echo $this->_tpl_vars['issue']->getYear(); ?>
)<?php endif; ?>: <?php if ($this->_tpl_vars['article']->getPages()): ?><?php echo $this->_tpl_vars['article']->getPages(); ?>
.<?php else: ?><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.citationFormats.mla.noPages"), $this);?>
<?php endif; ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "rt.captureCite.web"), $this);?>
. <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%e %b. %Y') : smarty_modifier_date_format($_tmp, '%e %b. %Y')); ?>
