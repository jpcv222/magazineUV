<?php return array (
  'plugins.generic.markup.archive.bad_filename' => 'Filename is missing',
  'plugins.generic.markup.archive.bad_zip' => 'Error handling zipfile ({$file}): {$error}',
  'plugins.generic.markup.archive.description' => 'This zipfile includes parsed and converted NLM-XML, HTML, PDF, and ePub copies of your article. It also contains any accompanying images, and structured citation data in BibTeX format (for importing into reference databases such as Zotero or Mendeley).',
  'plugins.generic.markup.archive.downloaded' => 'Open Typesetting Stack: Job received.',
  'plugins.generic.markup.archive.enable' => 'Open Typesetting Stack Plugin needs to be enabled.',
  'plugins.generic.markup.archive.is_zip' => 'Supplementary file is already in zip format.',
  'plugins.generic.markup.archive.login' => 'You need to login to access this file.',
  'plugins.generic.markup.archive.no_access' => 'You are not allowed to access this file.',
  'plugins.generic.markup.archive.no_article' => 'The article does not exist.',
  'plugins.generic.markup.archive.no_articleID' => '"Article ID is invalid or missing."',
  'plugins.generic.markup.archive.no_file' => 'File does not exist: ({$file}).',
  'plugins.generic.markup.archive.no_job' => 'Invalid job id: ({$jobId})',
  'plugins.generic.markup.archive.no_journal' => 'Request must be linked to a journal.',
  'plugins.generic.markup.archive.no_url' => 'You have not specified an OTS server address (default should be http://pkp-xml-demo.lib.sfu.ca).',
  'plugins.generic.markup.archive.portalSubTitle' => 'Document Status',
  'plugins.generic.markup.archive.portalTitle' => 'Open Typesetting Stack Plugin',
  'plugins.generic.markup.archive.processing' => 'Open Typesetting Stack: Processing...',
  'plugins.generic.markup.archive.status' => 'Open Typesetting Stack returned: {$message}',
  'plugins.generic.markup.archive.supp_file_missing' => 'Although an OTS file record seems to exist, the file itself is missing.',
  'plugins.generic.markup.archive.supp_missing' => 'OTS file record is missing. Try re-uploading the article to regenerate the markup files.',
  'plugins.generic.markup.description' => 'This plugin provides integration with PKP\'s Open Typesetting Stack for converting Word and PDF articles to NLM JATS XML.',
  'plugins.generic.markup.displayName' => 'Open Typesetting Stack Plugin',
  'plugins.generic.markup.error' => 'Error!',
  'plugins.generic.markup.errors.errorMessage' => 'Unable to fetch article XML and HTML versions. The Open Typesetting Stack plugin needs to be enabled and the citation style needs to be provided in Journal Settings.',
  'plugins.generic.markup.optional.cslStyleName' => 'Citation Style Name is optional.',
  'plugins.generic.markup.optional.markupHostPass' => 'Password is optional.',
  'plugins.generic.markup.optional.markupHostUser' => 'Username is optional.',
  'plugins.generic.markup.optional.reviewVersion' => 'Toggle for review version is optional.',
  'plugins.generic.markup.required.cslStyle' => 'Citation Style is required.',
  'plugins.generic.markup.required.markupHostURL' => 'Server address is required.',
  'plugins.generic.markup.required.markupHostUser' => 'Username is required.',
  'plugins.generic.markup.required.markupHostPass' => 'Password is required.',
  'plugins.generic.markup.required.authType' => 'Authentication type is required.',
  'plugins.generic.markup.required.wantedFormats' => 'At least one document format must be selected.',
  'plugins.generic.markup.settings' => 'OTS Settings',
  'plugins.generic.markup.settings.cslStyle' => 'Select Citation Style:',
  'plugins.generic.markup.settings.cslStyleSubmitErrorMessage' => 'Invalid Open Typesetting Stack URL.',
  'plugins.generic.markup.settings.cslStyleFieldHelp' => 'Choose your preferred citation style for PDF and ePub output. Input citation style is detected automatically.',
  'plugins.generic.markup.settings.cssStyles' => 'Stylesheets:',
  'plugins.generic.markup.settings.cssStylesHelp' => 'This CSS stylesheet affects the layout of articles generated by this plugin. Default styles are automatically provided. You may replace these with your own customized versions using the <a href="{$url}" class="action" target="_blank">file manager</a>',
  'plugins.generic.markup.settings.curlSupport' => 'PHP curl Support:',
  'plugins.generic.markup.settings.curlSupportHelp' => 'PHP curl needs to be installed on your server. This plugin uses curl to send the article files to the Open Typesetting Stack for processing.',
  'plugins.generic.markup.settings.disabled' => 'Disabled',
  'plugins.generic.markup.settings.enabled' => 'Enabled',
  'plugins.generic.markup.settings.installed' => 'Installed',
  'plugins.generic.markup.settings.markupHostAccountHelp' => '<p><strong>PKP Open Typesetting Stack Plugin (Beta)</strong></p>

<p>Thank you for your interest in OTS! This service, and associated OJS plugin, are both in beta, and expectations of reliability, availability and accuracy should be calibrated with that in mind. An Open Typesetting Stack User ID and API token are required to use the conversion service. You can register for our <strong>demo</strong> OTS instance <a href="http://pkp-xml-demo.lib.sfu.ca/" target="_blank">here</a>. For future news on non-demo, non-beta plans and services for this stack, please follow the <a href="https://pkp.sfu.ca/category/news/" target=_blank">PKP blog</a>, or keep an eye on the <a href="https://forum.pkp.sfu.ca" target="_blank">PKP support forum</a>. 

<p><strong>Bugs:</strong> We welcome bug reports and feature requests in the following locations (please search for similar bugs/requests before submitting, to reduce duplicates):</p>

<ul>
	<li><a href="https://github.com/kaschioudi/ojs3-markup/issues" target="_blank">OJS plugin issues</a></li>
	<li><a href="https://github.com/pkp/xmlps/issues" target="_blank"">OTS service issues</a></li>
</ul>

<p><strong>Caveats:</strong> This beta service is currently provided at no cost. The costs for using this service may change at any time. The demo OTS instance referred to in this beta test may be reset or disabled at any time. If you are interested in having unlimited access to OTS, or are interested in receiving paid support for OTS, please contact us at <a href="mailto:pkp.contact@gmail.com">pkp.contact@gmail.com</a>.</p>',
  'plugins.generic.markup.settings.markupHostPass' => 'API Token:',
  'plugins.generic.markup.settings.markupHostURL' => 'Open Typesetting Stack URL:',
  'plugins.generic.markup.settings.markupHostURLHelp' => 'OJS will use this Open Typesetting Stack instance. Normally you should not change this setting.',
  'plugins.generic.markup.settings.markupHostUser' => 'User ID:',
  'plugins.generic.markup.settings.notInstalled' => 'Not installed',
  'plugins.generic.markup.settings.pathInfo' => 'URL Paths',
  'plugins.generic.markup.settings.pathInfoHelp' => '"Enabled" is the default selection if supported by your server. If set to "Disabled," images may be missing from OTS output.',
  'plugins.generic.markup.settings.saved' => 'Settings saved!',
  'plugins.generic.markup.settings.zipSupport' => 'PHP unzip support:',
  'plugins.generic.markup.settings.zipSupportHelp' => 'PHP zlib needs to be installed on your OJS server.',
  'plugins.generic.markup.settings.wantedFormats' => 'Article output formats:',
  'plugins.generic.markup.settings.wantedFormatsHelp' => 'Select the article output formats that will be generated when using OTS to publish final article galleys. You may want to deselect some of these if, for example your journal is producing its own PDF galleys independently from OTS.',
  'plugins.generic.markup.settings.wantedFormatsXML' => 'XML',
  'plugins.generic.markup.settings.wantedFormatsPDF' => 'PDF',
  'plugins.generic.markup.settings.wantedFormatsEPUB' => 'EPUB',
  'plugins.generic.markup.job.success' => 'Your document has been successfuly submitted to the Open Typesetting Stack. Transformation progress is available at: {$url}',
  'plugins.generic.markup.job.failure' => 'Unable to submit your document to the Open Typesetting Stack. Please make sure the plugin is correctly installed and configured.',
  'plugins.generic.markup.settings.authType' => 'Type of authentication:',
  'plugins.generic.markup.settings.siteAuthArea' => 'Login credentials for site-wide authentication:',
  'plugins.generic.markup.settings.userAuthArea' => 'OTS login credentials',
  'plugins.generic.markup.settings.authTypeFieldHelp' => 'Specify whether you want to use site-wide or user-specific authentication to OTS. Site-wide authentication is simpler, allowing you to share a single administrator-level OTS User ID across your entire journal. However, if you anticipate individual authors wanting to access OTS directly (rather than through OJS) and want to avoid any potential issues around blind review, you can select user-specific authentication, which requires them to each specify their own OTS User ID in their OJS user preferences. Most people will want to use site-wide authentication.',
  'plugins.generic.markup.settings.authTypeSite' => 'Site-wide authentication',
  'plugins.generic.markup.settings.authTypeUser' => 'User-specific authentication',
  'plugins.generic.markup.links.convertToXml' => 'Convert to XML',
  'plugins.generic.markup.links.generateGalley' => 'Generate Galley Files',
  'plugins.generic.markup.links.editWithSubstance' => 'Edit with Texture',
  'plugins.generic.markup.conversion.trigger' => 'Trigger Job',
  'plugins.generic.markup.modal.xmlConversion' => 'XML conversion',
  'plugins.generic.markup.modal.galleyProduction' => 'Generate Galley Files',
  'plugins.generic.markup.modal.xmlConversionText' => 'Confirm submission of OTS job?',
  'plugins.generic.markup.modal.galleyProductionText' => 'Confirm submission of OTS job?',
  'plugins.generic.markup.tab.profile' => 'OTS Login',
  'plugins.generic.markup.settings.pluginNotConfigured' => 'The OTS plugin has not been configured.',
  'plugins.generic.markup.settings.loginCredsNotAvailable' => 'OTS login credentials have not been specified.',
  'plugins.generic.markup.settings.conversionStages' => 'OTS-enabled workflow stages',
  'plugins.generic.markup.settings.conversionStagesHelp' => 'Select workflow stages where article conversion to XML via OTS is available. You may wish to limit access to OTS at certain times depending on your production workflow.',
  'plugins.generic.markup.settings.editWithSubstanceStages' => 'Texture editor-enabled workflow stages',
  'plugins.generic.markup.settings.editWithSubstanceStagesHelp' => 'Select workflow stages where the Texture XML editor is available.',
  'plugins.generic.markup.required.xmlConversionStages' => 'OTS conversion must be enabled in at least one stage.',
  'plugins.generic.markup.required.editWithSubstanceStages' => 'The Texture XML editor must be enabled in at least one stage.',
); ?>