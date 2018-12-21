<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:47:48
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/webFeed/templates/block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/webFeed/templates/block.tpl', 12, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/webFeed/templates/block.tpl', 16, false),array('modifier', 'to_array', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/webFeed/templates/block.tpl', 16, false),)), $this); ?>
<div class="pkp_block block_web_feed">
	<span class="title"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "journal.currentIssue"), $this);?>
</span>
	<div class="content">
		<ul>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='WebFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'atom') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'atom'))), $this);?>
">
					<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/atom10_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.atom.altText"), $this);?>
">
				</a>
			</li>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='WebFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'rss2') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'rss2'))), $this);?>
">
					<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/rss20_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.rss2.altText"), $this);?>
">
				</a>
			</li>
			<li>
				<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => @ROUTE_PAGE,'page' => 'gateway','op' => 'plugin','path' => ((is_array($_tmp='WebFeedGatewayPlugin')) ? $this->_run_mod_handler('to_array', true, $_tmp, 'rss') : $this->_plugins['modifier']['to_array'][0][0]->smartyToArray($_tmp, 'rss'))), $this);?>
">
					<img src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/webFeed/templates/images/rss10_logo.gif" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "plugins.generic.webfeed.rss1.altText"), $this);?>
">
				</a>
			</li>
		</ul>
	</div>
</div>