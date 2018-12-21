{**
 * plugins/generic/embedGalley/settingsForm.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * EmbedGalley plugin settings
 *
 *}
<script>
	$(function() {ldelim}
		// Attach the form handler.
		$('#embedGalleySettingsForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	{rdelim});
</script>

<form class="pkp_form" id="embedGalleySettingsForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT op="manage" category="generic" plugin=$pluginName verb="settings" save=true}">
	{csrf}
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="embedGalleySettingsFormNotification"}

	<div id="description">{translate key="plugins.generic.embedGalley.manager.settings.description"}</div>

	{fbvFormButtons}

	<p><span class="formRequired">{translate key="common.requiredField"}</span></p>
	
</form>
