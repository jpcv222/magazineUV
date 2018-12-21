<?php /* Smarty version 2.6.25-dev, created on 2018-05-04 14:35:09
         compiled from frontend/components/primaryNavMenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'url', 'frontend/components/primaryNavMenu.tpl', 15, false),array('function', 'translate', 'frontend/components/primaryNavMenu.tpl', 16, false),)), $this); ?>

<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list amx-amx">

	<?php if ($this->_tpl_vars['enableAnnouncements']): ?>
		<li>
			<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'announcement'), $this);?>
">
				<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "announcement.announcements"), $this);?>

			</a>
		</li>
	<?php endif; ?>

	<li>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'catalog'), $this);?>
">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.catalog"), $this);?>

		</a>
	</li>

	<?php if ($this->_tpl_vars['currentPress'] && ( $this->_tpl_vars['currentPress']->getLocalizedSetting('masthead') || $this->_tpl_vars['currentPress']->getLocalizedSetting('submissions') )): ?>
		<?php $this->assign('submenu_attr', " aria-haspopup='true' aria-expanded='false'"); ?>
	<?php endif; ?>
	<li<?php echo $this->_tpl_vars['submenu_attr']; ?>
>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about'), $this);?>
">
			<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.about"), $this);?>

		</a>
		<?php if ($this->_tpl_vars['submenu_attr']): ?>
		<ul>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about'), $this);?>
">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.aboutContext"), $this);?>

				</a>
			</li>
			<?php if ($this->_tpl_vars['currentPress'] && $this->_tpl_vars['currentPress']->getLocalizedSetting('masthead') != ''): ?>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'editorialTeam'), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.editorialTeam"), $this);?>

					</a>
				</li>
			<?php endif; ?>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'submissions'), $this);?>
">
					<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.submissions"), $this);?>

				</a>
			</li>
			<?php if ($this->_tpl_vars['currentPress'] && ( $this->_tpl_vars['currentPress']->getSetting('mailingAddress') || $this->_tpl_vars['currentPress']->getSetting('contactName') )): ?>
				<li>
					<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'about','op' => 'contact'), $this);?>
">
						<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "about.contact"), $this);?>

					</a>
				</li>
			<?php endif; ?>
		</ul>
		<?php endif; ?>
	</li>
	<li>
		<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'information','op' => 'authors'), $this);?>
">
                                                <?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "navigation.infoForAuthors"), $this);?>

                                        </a>

	</li>
</ul>