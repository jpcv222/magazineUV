<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:48:15
         compiled from frontend/pages/indexSite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'frontend/pages/indexSite.tpl', 47, false),array('modifier', 'escape', 'frontend/pages/indexSite.tpl', 67, false),array('function', 'translate', 'frontend/pages/indexSite.tpl', 53, false),array('function', 'url', 'frontend/pages/indexSite.tpl', 60, false),array('function', 'page_info', 'frontend/pages/indexSite.tpl', 111, false),array('function', 'page_links', 'frontend/pages/indexSite.tpl', 112, false),array('block', 'iterate', 'frontend/pages/indexSite.tpl', 59, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="contendio_banner_amx" class="banner_princial_amx">
	<div align="center">
		<h3><span class="fondoOscuro_letras">Publicaciones Académicas de la Universidad del Valle</span></h3>
		<br>
		<p><span class="fondoOscuro_letras">Difusión de Articulos de Investigación</span><p>
		<br>
	<div id="buscador">
		<?php echo '<script>
  (function() {
    var cx = \'006554950063678902048:bxtumomh2gs\';
    var gcse = document.createElement(\'script\');
    gcse.type = \'text/javascript\';
    gcse.async = true;
    gcse.src = \'https://cse.google.com/cse.js?cx=\' + cx;
    var s = document.getElementsByTagName(\'script\')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search> '; ?>

	</div>
	</div>
	
</div>

<div id="titulo_intro_amx">
	<div class="col-xs-1 col-sm-1 col-md-3 col-md-3"><hr/></div>
	<div class="col-xs-10 col-sm-10 col-md-6 col-md-6">Explore por Títulos</div>
	<div class="col-xs-1 col-sm-1 col-md-3 col-md-3"><hr/></div>

</div>

<div class="page_index_site bordes_amx">

	<?php if ($this->_tpl_vars['about']): ?>
		<div class="about_site">
			<?php echo ((is_array($_tmp=$this->_tpl_vars['about'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

		</div>
	<?php endif; ?>

	<div class="journals">
		<h2>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.journals"), $this);?>

		</h2>
		<?php if (! count ( $this->_tpl_vars['journals'] )): ?>
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.noJournals"), $this);?>

		<?php else: ?>
			<ul>
				<?php $this->_tag_stack[] = array('iterate', array('from' => 'journals','item' => 'journal')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
					<?php ob_start(); ?><?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath()), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('url', ob_get_contents());ob_end_clean(); ?>
					<?php $this->assign('thumb', $this->_tpl_vars['journal']->getLocalizedSetting('journalThumbnail')); ?>
					<?php $this->assign('description', $this->_tpl_vars['journal']->getLocalizedDescription()); ?>
					<li<?php if ($this->_tpl_vars['thumb']): ?> class="has_thumb"<?php endif; ?>>
						<?php if ($this->_tpl_vars['thumb']): ?>
							<?php $this->assign('altText', $this->_tpl_vars['journal']->getLocalizedSetting('journalThumbnailAltText')); ?>
							<div class="thumb">
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
									<img src="<?php echo $this->_tpl_vars['journalFilesPath']; ?>
<?php echo $this->_tpl_vars['journal']->getId(); ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['thumb']['uploadName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
"<?php if ($this->_tpl_vars['altText']): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
								</a>
							</div>
						<?php else: ?>
							 <?php $this->assign('altText', $this->_tpl_vars['journal']->getLocalizedSetting('journalThumbnailAltText')); ?>
                                                        <div class="thumb">
                                                                <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
                                                                        <img src="http://revistas.univalle.edu.co/public/site/sa2.png"<?php if ($this->_tpl_vars['altText']): ?> alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['altText'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"<?php endif; ?>>
                                                                </a>
                                                        </div>

						<?php endif; ?>

						<div class="body">
							<h3>
								<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" rel="bookmark">
									<?php echo $this->_tpl_vars['journal']->getLocalizedName(); ?>

								</a>
							</h3>
							<?php if ($this->_tpl_vars['description']): ?>
								<div class="description">
									<?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

								</div>
							<?php endif; ?>
							<ul class="links">
								<li class="view">
									<a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
										<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalView"), $this);?>

									</a>
								</li>
								<li class="current">
									<a href="<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('journal' => $this->_tpl_vars['journal']->getPath(),'page' => 'issue','op' => 'current'), $this))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp));?>
">
										<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "site.journalCurrent"), $this);?>

									</a>
								</li>
							</ul>
						</div>
					</li>
				<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
			</ul>

			<?php if ($this->_tpl_vars['journals']->getPageCount() > 0): ?>
				<div class="cmp_pagination">
					<?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['journals']), $this);?>

					<?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'journals','name' => 'journals','iterator' => $this->_tpl_vars['journals']), $this);?>

				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>

</div><!-- .page -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>