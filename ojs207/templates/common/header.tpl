{**
 * templates/common/header.tpl
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site header.
 *}
{strip}
{translate|assign:"applicationName" key="common.openJournalSystems"}
{include file="core:common/header.tpl"}

<!-- copie desde esta línea--->
<!--Google Analytics Univalle-->
<script type="text/javascript"> var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-2179266-1']);
_gaq.push(['_setDomainName', '.univalle.edu.co']);
_gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})(); </script>
<!--Fin Google Analytics-->
<!-- copie hasta esta línea--->

{/strip}
