<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:18:38
         compiled from frontend/pages/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'frontend/pages/index.tpl', 27, false),array('modifier', 'count', 'frontend/pages/index.tpl', 51, false),array('function', 'translate', 'frontend/pages/index.tpl', 34, false),array('function', 'url', 'frontend/pages/index.tpl', 66, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="page page_homepage">

		<?php if ($this->_tpl_vars['homepageImage']): ?>
		<div class="homepage_image">
			<img src="<?php echo $this->_tpl_vars['publicFilesDir']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['homepageImage']['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
		</div>
	<?php endif; ?>

		<?php if (! empty ( $this->_tpl_vars['spotlights'] )): ?>
		<h2 class="pkp_screen_reader">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "spotlight.spotlights"), $this);?>

		</h2>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/spotlights.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>


		<?php if (! empty ( $this->_tpl_vars['featuredMonographs'] )): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['featuredMonographs'],'titleKey' => "catalog.featured")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

		<?php if (! empty ( $this->_tpl_vars['newReleases'] )): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/monographList.tpl", 'smarty_include_vars' => array('monographs' => $this->_tpl_vars['newReleases'],'titleKey' => "catalog.newReleases")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['numAnnouncementsHomepage'] && count($this->_tpl_vars['announcements'])): ?>
		<div class="cmp_announcements highlight_first">
			<h2>
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>

			</h2>
			<?php $_from = $this->_tpl_vars['announcements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['announcements'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['announcements']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['announcement']):
        $this->_foreach['announcements']['iteration']++;
?>
				<?php if ($this->_foreach['announcements']['iteration'] > $this->_tpl_vars['numAnnouncementsHomepage']): ?>
					<?php break; ?>
				<?php endif; ?>
				<?php if ($this->_foreach['announcements']['iteration'] == 1): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/objects/announcement_summary.tpl", 'smarty_include_vars' => array('heading' => 'h3')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<div class="more">
				<?php else: ?>
					<article class="obj_announcement_summary">
						<h4>
							<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement','op' => 'view','path' => $this->_tpl_vars['announcement']->getId()), $this);?>
">
								<?php echo ((is_array($_tmp=$this->_tpl_vars['announcement']->getLocalizedTitle())) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

							</a>
						</h4>
						<div class="date">
							<?php echo $this->_tpl_vars['announcement']->getDatePosted(); ?>

						</div>
					</article>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</div><!-- .more -->
		</div>
	<?php endif; ?>

		<?php if ($this->_tpl_vars['additionalHomeContent']): ?>
		<div class="additional_content">
			<?php echo $this->_tpl_vars['additionalHomeContent']; ?>

		</div>
	<?php endif; ?>

</div> <!-- aqui termina esta x -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>