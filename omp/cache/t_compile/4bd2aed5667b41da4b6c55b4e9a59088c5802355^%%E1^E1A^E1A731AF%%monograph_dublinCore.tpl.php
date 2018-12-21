<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:10
         compiled from frontend/objects/monograph_dublinCore.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'String_substr', 'frontend/objects/monograph_dublinCore.tpl', 15, false),array('modifier', 'escape', 'frontend/objects/monograph_dublinCore.tpl', 15, false),array('modifier', 'strip_tags', 'frontend/objects/monograph_dublinCore.tpl', 15, false),array('modifier', 'explode', 'frontend/objects/monograph_dublinCore.tpl', 20, false),array('modifier', 'date_format', 'frontend/objects/monograph_dublinCore.tpl', 24, false),array('modifier', 'truncate', 'frontend/objects/monograph_dublinCore.tpl', 33, false),array('function', 'url', 'frontend/objects/monograph_dublinCore.tpl', 32, false),)), $this); ?>
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />

<?php if ($this->_tpl_vars['monograph']->getSponsor(null)): ?><?php $_from = $this->_tpl_vars['monograph']->getSponsor(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Contributor.Sponsor" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php if ($this->_tpl_vars['monograph']->getCoverage(null)): ?><?php $_from = $this->_tpl_vars['monograph']->getCoverage(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Coverage" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['monograph']->getAuthorString())) ? $this->_run_mod_handler('explode', true, $_tmp, ", ") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, ", ")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dc_author']):
?>
	<meta name="DC.Creator.PersonalName" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['dc_author'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?>
<?php if (is_a ( $this->_tpl_vars['monograph'] , 'PublishedMonograph' ) && $this->_tpl_vars['monograph']->getDatePublished()): ?>
	<meta name="DC.Date.created" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getDatePublished())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php endif; ?>
	<meta name="DC.Date.dateSubmitted" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getDateSubmitted())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
	<meta name="DC.Date.modified" scheme="ISO8601" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getDateStatusModified())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
"/>
<?php if ($this->_tpl_vars['monograph']->getAbstract(null)): ?><?php $_from = $this->_tpl_vars['monograph']->getAbstract(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<meta name="DC.Description" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
	<meta name="DC.Identifier" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<meta name="DC.Identifier.URI" content="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'book','path' => $this->_tpl_vars['monograph']->getId()), $this);?>
"/>
	<meta name="DC.Language" scheme="ISO639-1" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocale())) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, '') : smarty_modifier_truncate($_tmp, 2, '')); ?>
"/>
	<meta name="DC.Source" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['currentPress']->getLocalizedName())) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<meta name="DC.Source.URI" content="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('press' => $this->_tpl_vars['currentPress']->getPath()), $this);?>
"/>
<?php if ($this->_tpl_vars['monograph']->getSubject(null)): ?><?php $_from = $this->_tpl_vars['monograph']->getSubject(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['metaValue']):
?>
	<?php $_from = ((is_array($_tmp=$this->_tpl_vars['metaValue'])) ? $this->_run_mod_handler('explode', true, $_tmp, "; ") : $this->_plugins['modifier']['explode'][0][0]->smartyExplode($_tmp, "; ")); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dcSubject']):
?>
		<?php if ($this->_tpl_vars['dcSubject']): ?>
			<meta name="DC.Subject" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['dcSubject'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?><?php endif; ?>
	<meta name="DC.Title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<?php $_from = $this->_tpl_vars['monograph']->getTitle(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['alternate']):
?>
	<?php if ($this->_tpl_vars['alternate'] != $this->_tpl_vars['monograph']->getLocalizedTitle()): ?>
		<meta name="DC.Title.Alternative" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['alternate'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	<meta name="DC.Type" content="Text.Book"/>