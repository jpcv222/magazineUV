<?php /* Smarty version 2.6.25-dev, created on 2018-12-20 14:54:24
         compiled from file:/var/www/html/ojsunivalle/ojs/plugins/generic/orcidProfile/templates/orcidProfile.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/orcidProfile/templates/orcidProfile.tpl', 15, false),array('modifier', 'urlencode', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/orcidProfile/templates/orcidProfile.tpl', 15, false),array('function', 'url', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/orcidProfile/templates/orcidProfile.tpl', 15, false),array('function', 'translate', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/orcidProfile/templates/orcidProfile.tpl', 21, false),array('function', 'fbvElement', 'file:/var/www/html/ojsunivalle/ojs/plugins/generic/orcidProfile/templates/orcidProfile.tpl', 24, false),)), $this); ?>
<script type="text/javascript">

function openORCID() {
	var oauthWindow = window.open("<?php echo ((is_array($_tmp=$this->_tpl_vars['orcidProfileOauthPath'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
authorize?client_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['orcidClientId'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&response_type=code&scope=/authenticate&redirect_uri=<?php echo ((is_array($_tmp=$this->_plugins['function']['url'][0][0]->smartyUrl(array('router' => 'page','page' => 'orcidapi','op' => 'orcidAuthorize','targetOp' => $this->_tpl_vars['targetOp'],'params' => $this->_tpl_vars['params'],'escape' => false), $this))) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp));?>
", "_blank", "toolbar=no, scrollbars=yes, width=500, height=600, top=500, left=500");
	oauthWindow.opener = self;
	return false;
}
</script>

<button id="connect-orcid-button" onclick="return openORCID();"><img id="orcid-id-logo" src="<?php echo $this->_tpl_vars['baseUrl']; ?>
/plugins/generic/orcidProfile/templates/images/orcid_24x24.png" width="24" height="24" alt="<?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => 'plugins.generic.orcidProfile.submitAction'), $this);?>
"/>Create or Connect your ORCID iD</button>

<?php if ($this->_tpl_vars['targetOp'] == 'register'): ?>
	<?php echo $this->_plugins['function']['fbvElement'][0][0]->smartyFBVElement(array('type' => 'hidden','name' => 'orcid','id' => 'orcid','value' => $this->_tpl_vars['orcid'],'maxlength' => '36'), $this);?>

<?php endif; ?>