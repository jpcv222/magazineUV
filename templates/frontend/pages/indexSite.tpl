{**
 * templates/frontend/pages/indexSite.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Site index.
 *
 *}
{include file="frontend/components/header.tpl"}
<div id="contendio_banner_amx" class="banner_princial_amx">
	<div align="center">
		<h3><span class="fondoOscuro_letras">Publicaciones Académicas de la Universidad del Valle</span></h3>
		<br>
		<p><span class="fondoOscuro_letras">Difusión de Articulos de Investigación</span><p>
		<br>
	<div id="buscador">
		{literal}<script>
  (function() {
    var cx = '006554950063678902048:bxtumomh2gs';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search> {/literal}
	</div>
	</div>
	
</div>

<div id="titulo_intro_amx">
	<div class="col-xs-1 col-sm-1 col-md-3 col-md-3"><hr/></div>
	<div class="col-xs-10 col-sm-10 col-md-6 col-md-6">Explore por Títulos</div>
	<div class="col-xs-1 col-sm-1 col-md-3 col-md-3"><hr/></div>

</div>

<div class="page_index_site bordes_amx">

	{if $about}
		<div class="about_site">
			{$about|nl2br}
		</div>
	{/if}

	<div class="journals">
		<h2>
			{translate key="journal.journals"}
		</h2>
		{if !count($journals)}
			{translate key="site.noJournals"}
		{else}
			<ul>
				{iterate from=journals item=journal}
					{capture assign="url"}{url journal=$journal->getPath()}{/capture}
					{assign var="thumb" value=$journal->getLocalizedSetting('journalThumbnail')}
					{assign var="description" value=$journal->getLocalizedDescription()}
					<li{if $thumb} class="has_thumb"{/if}>
						{if $thumb}
							{assign var="altText" value=$journal->getLocalizedSetting('journalThumbnailAltText')}
							<div class="thumb">
								<a href="{$url|escape}">
									<img src="{$journalFilesPath}{$journal->getId()}/{$thumb.uploadName|escape:"url"}"{if $altText} alt="{$altText|escape}"{/if}>
								</a>
							</div>
						{else}
							 {assign var="altText" value=$journal->getLocalizedSetting('journalThumbnailAltText')}
                                                        <div class="thumb">
                                                                <a href="{$url|escape}">
                                                                        <img src="http://revistas.univalle.edu.co/public/site/sa2.png"{if $altText} alt="{$altText|escape}"{/if}>
                                                                </a>
                                                        </div>

						{/if}

						<div class="body">
							<h3>
								<a href="{$url|escape}" rel="bookmark">
									{$journal->getLocalizedName()}
								</a>
							</h3>
							{if $description}
								<div class="description">
									{$description|nl2br}
								</div>
							{/if}
							<ul class="links">
								<li class="view">
									<a href="{$url|escape}">
										{translate key="site.journalView"}
									</a>
								</li>
								<li class="current">
									<a href="{url|escape journal=$journal->getPath() page="issue" op="current"}">
										{translate key="site.journalCurrent"}
									</a>
								</li>
							</ul>
						</div>
					</li>
				{/iterate}
			</ul>

			{if $journals->getPageCount() > 0}
				<div class="cmp_pagination">
					{page_info iterator=$journals}
					{page_links anchor="journals" name="journals" iterator=$journals}
				</div>
			{/if}
		{/if}
	</div>

</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
