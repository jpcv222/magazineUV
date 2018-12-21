<?php /* Smarty version 2.6.25-dev, created on 2018-05-12 04:47:47
         compiled from notification/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'notification/index.tpl', 19, false),array('function', 'url', 'notification/index.tpl', 25, false),array('function', 'load_url_in_div', 'notification/index.tpl', 37, false),array('modifier', 'escape', 'notification/index.tpl', 25, false),array('modifier', 'assign', 'notification/index.tpl', 36, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "notification.notifications"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<table>
	<tr>
		<td><?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notificationsDescription",'unreadCount' => $this->_tpl_vars['unread'],'readCount' => $this->_tpl_vars['read'],'settingsUrl' => $this->_tpl_vars['url']), $this);?>
</p>
			<?php else: ?>
				<p><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "notification.notificationsPublicDescription",'emailUrl' => $this->_tpl_vars['emailUrl']), $this);?>
</p>
			<?php endif; ?>
		</td>
		<td><ul class="plain">
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'getNotificationFeedUrl','path' => 'rss'), $this);?>
" class="icon"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['baseUrl'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
/lib/pkp/templates/images/rss10_logo.gif" alt="RSS 1.0"/></a></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'getNotificationFeedUrl','path' => 'rss2'), $this);?>
" class="icon"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/rss20_logo.gif" alt="RSS 2.0"/></a></li>
			<li><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'getNotificationFeedUrl','path' => 'atom'), $this);?>
" class="icon"><img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/lib/pkp/templates/images/atom10_logo.gif" alt="Atom 1.0"/></a></li>
		</ul></td>
	</tr>
</table>

<br/>

<?php if ($this->_tpl_vars['isUserLoggedIn']): ?>
	<div id="normalNotifications">
		<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_COMPONENT,'component' => "grid.notifications.NormalNotificationsGridHandler",'op' => 'fetchGrid','escape' => false), $this))) ? $this->_run_mod_handler('assign', true, $_tmp, 'notificationsGridUrl') : $this->_plugins['modifier']['assign'][0][0]->smartyAssign($_tmp, 'notificationsGridUrl'));?>

		<?php echo $this->_plugins['function']['load_url_in_div'][0][0]->smartyLoadUrlInDiv(array('id' => 'normalNotificationsGridContainer','url' => $this->_tpl_vars['notificationsGridUrl']), $this);?>

	</div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "frontend/components/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
