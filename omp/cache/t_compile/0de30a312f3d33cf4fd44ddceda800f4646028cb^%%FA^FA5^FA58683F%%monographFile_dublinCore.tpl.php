<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 15:39:14
         compiled from frontend/objects/monographFile_dublinCore.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'String_substr', 'frontend/objects/monographFile_dublinCore.tpl', 18, false),array('modifier', 'escape', 'frontend/objects/monographFile_dublinCore.tpl', 18, false),array('modifier', 'strip_tags', 'frontend/objects/monographFile_dublinCore.tpl', 18, false),array('modifier', 'date_format', 'frontend/objects/monographFile_dublinCore.tpl', 38, false),array('modifier', 'to_array', 'frontend/objects/monographFile_dublinCore.tpl', 46, false),array('modifier', 'truncate', 'frontend/objects/monographFile_dublinCore.tpl', 47, false),array('modifier', 'explode', 'frontend/objects/monographFile_dublinCore.tpl', 51, false),array('function', 'url', 'frontend/objects/monographFile_dublinCore.tpl', 46, false),)), $this); ?>
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

<?php if ($this->_tpl_vars['chapter']): ?>
		<?php $this->assign('authors', $this->_tpl_vars['chapter']->getAuthors()); ?>
	<?php $this->assign('authors', $this->_tpl_vars['authors']->toArray()); ?>
<?php else: ?>
		<?php $this->assign('authors', $this->_tpl_vars['monograph']->getAuthors()); ?>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['authors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['author']):
?>
	<meta name="DC.Creator.PersonalName" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getLastName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
, <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getFirstName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php if ($this->_tpl_vars['author']->getMiddleName()): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['author']->getMiddleName())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<?php endif; ?>"/>
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
/<?php echo ((is_array($_tmp=$this->_tpl_vars['publicationFormat']->getId())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['submissionFile']->getFileIdAndRevision())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
<meta name="DC.Identifier.URI" content="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('page' => 'catalog','op' => 'book','path' => ((is_array($_tmp=$this->_tpl_vars['monograph']->getId())) ? $this->_run_mod_handler('to_array', true, $_tmp, $this->_tpl_vars['publicationFormat']->getId(), $this->_tpl_vars['submissionFile']->getFileIdAndRevision()) : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, $this->_tpl_vars['publicationFormat']->getId(), $this->_tpl_vars['submissionFile']->getFileIdAndRevision()))), $this);?>
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
<?php if ($this->_tpl_vars['chapter']): ?>
	<meta name="DC.Title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['chapter']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php $_from = $this->_tpl_vars['chapter']->getTitle(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['alternate']):
?>
		<?php if ($this->_tpl_vars['alternate'] != $this->_tpl_vars['chapter']->getLocalizedTitle()): ?>
		<meta name="DC.Title.Alternative" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['alternate'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
	<meta name="DC.Title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['monograph']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php $_from = $this->_tpl_vars['monograph']->getTitle(null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['metaLocale'] => $this->_tpl_vars['alternate']):
?>
		<?php if ($this->_tpl_vars['alternate'] != $this->_tpl_vars['monograph']->getLocalizedTitle()): ?>
		<meta name="DC.Title.Alternative" xml:lang="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['metaLocale'])) ? $this->_run_mod_handler('String_substr', true, $_tmp, 0, 2) : PKPString::substr($_tmp, 0, 2)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" content="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['alternate'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/>
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['chapter']): ?>
	<meta name="DC.Type" content="Text.Chapter"/>
<?php else: ?>
	<meta name="DC.Type" content="Text.Book"/>
<?php endif; ?>