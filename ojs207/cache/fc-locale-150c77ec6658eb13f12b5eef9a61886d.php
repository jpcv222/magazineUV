<?php return array (
  'plugins.importexport.pubmed.displayName' => 'Plugin de exportación de XML de PubMed',
  'plugins.importexport.pubmed.description' => 'Exportación de la metadata de artículos usando XML de PubMed para Indexación en MEDLINE.',
  'plugins.importexport.pubmed.export' => 'Exportar Datos',
  'plugins.importexport.pubmed.export.issues' => 'Exportar Números',
  'plugins.importexport.pubmed.export.selectIssue' => 'Seleccione un Número para exportar.',
  'plugins.importexport.pubmed.export.articles' => 'Exportar Artículos',
  'plugins.importexport.pubmed.export.selectArticle' => 'Seleccione Artículos para exportar.',
  'plugins.importexport.pubmed.cliUsage' => 'Usage: 
{$scriptName} {$pluginName} [xmlFileName] [journal_path] articles [articleId1] [articleId2] ...
{$scriptName} {$pluginName} [xmlFileName] [journal_path] issue [issueId]',
  'plugins.importexport.pubmed.cliError' => 'ERROR:',
  'plugins.importexport.pubmed.export.error.issueNotFound' => 'No existe ningún número con el ID especificado"{$issueId}".',
  'plugins.importexport.pubmed.export.error.articleNotFound' => 'No existe ningún artículo con el ID especificado "{$articleId}".',
); ?>