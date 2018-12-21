{**
 * templates/common/headerHead.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2000-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site backend header <head> tag and contents.
 *}
<head>
	<meta http-equiv="Content-Type" content="text/html; charset={$defaultCharset|escape}" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{$pageTitleTranslated|strip_tags}</title>
	<meta name="author" content="AMX SOFT |  AMX-SOFTWARE.COM">
	{load_header context="backend"}
	{load_stylesheet context="backend"}
	{load_script context="backend"}
	<link rel="stylesheet" href="http://revistas.univalle.edu.co/public/site/font-awesome-470/css/font-awesome.min.css">
</head>
