<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:48:25
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'bibtex_escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 14, false),array('modifier', 'count', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 15, false),array('modifier', 'strip_tags', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 16, false),array('modifier', 'date_format', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 20, false),array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 20, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 15, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/citationFormats/bibtex//citation.tpl', 29, false),)), $this); ?>
<div class="separator"></div>
<div id="citation">
<?php echo '
<textarea style="width:100%;height:20em;font-family:monospace;font-size:0.85em;line-height:1.2em;">@article{'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedAcronym())) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['articleId'])) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo ',
	author = {'; ?>
<?php $this->assign('authors', $this->_tpl_vars['article']->getAuthors()); ?><?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['authors'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['authors']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['author']):
        $this->_foreach['authors']['iteration']++;
?><?php $this->assign('firstName', $this->_tpl_vars['author']->getFirstName()); ?><?php $this->assign('authorCount', count($this->_tpl_vars['authors'])); ?><?php echo ((is_array($_tmp=$this->_tpl_vars['firstName'])) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php if ($this->_tpl_vars['i'] < $this->_tpl_vars['authorCount']-1): ?> <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.and"), $this);?>
 <?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo '},
	title = {'; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedTitle())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},
	journal = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['journal']->getLocalizedName())) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},
'; ?>
<?php if ($this->_tpl_vars['issue']): ?><?php if ($this->_tpl_vars['issue']->getShowVolume()): ?><?php echo '	volume = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getVolume())) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},'; ?>
<?php endif; ?><?php echo '
'; ?>
<?php if ($this->_tpl_vars['issue']->getShowNumber()): ?><?php echo '	number = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getNumber())) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},'; ?>
<?php endif; ?><?php endif; ?><?php echo '
	year = {'; ?>
<?php if ($this->_tpl_vars['article']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
<?php elseif ($this->_tpl_vars['issue']->getDatePublished()): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y') : smarty_modifier_date_format($_tmp, '%Y')); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['issue']->getYear())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?><?php echo '},
	keywords = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedSubject())) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},
	abstract = {'; ?>
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['article']->getLocalizedAbstract())) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)))) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},
'; ?>
<?php $this->assign('onlineIssn', $this->_tpl_vars['journal']->getSetting('onlineIssn')); ?>
<?php $this->assign('issn', $this->_tpl_vars['journal']->getSetting('issn')); ?><?php if ($this->_tpl_vars['issn']): ?><?php echo '	issn = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['issn'])) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},'; ?>

<?php elseif ($this->_tpl_vars['onlineIssn']): ?><?php echo '	issn = {'; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['onlineIssn'])) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp)); ?>
<?php echo '},'; ?>
<?php endif; ?>
<?php if (count ( $this->_tpl_vars['article']->getPageArray() ) > 0): ?>	pages = <?php echo '{'; ?>
<?php $_from = $this->_tpl_vars['article']->getPageArray(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['pages'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['pages']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['range']):
        $this->_foreach['pages']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['range'][0])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['range'][1]): ?>--<?php echo ((is_array($_tmp=$this->_tpl_vars['range'][1])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if (! ($this->_foreach['pages']['iteration'] == $this->_foreach['pages']['total'])): ?>,<?php endif; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php echo '},'; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['article']->getStoredPubId('doi')): ?>	doi = {<?php echo ((is_array($_tmp=$this->_tpl_vars['article']->getStoredPubId('doi'))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
},
<?php endif; ?>
	url = {<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'article','op' => 'view','path' => $this->_tpl_vars['article']->getBestArticleId()), $this))) ? $this->_run_mod_handler('bibtex_escape', true, $_tmp) : $this->_plugins['modifier']['bibtex_escape'][0][0]->bibtexEscape($_tmp));?>
}
}
</textarea>
</div>