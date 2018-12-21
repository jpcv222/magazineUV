<?php return array (
  'plugins.pubIds.doi.displayName' => 'DOI',
  'plugins.pubIds.doi.description' => 'This plugin enables the assignment of the Digital Object Identifiers to issues, articles, galleys and supplementary files in OJS.',
  'plugins.pubIds.doi.manager.settings.doiSettings' => 'DOI Plugin Settings',
  'plugins.pubIds.doi.manager.settings.description' => 'Please configure the DOI plug-in to be able to manage and use DOIs in OJS:',
  'plugins.pubIds.doi.manager.settings.doiObjects' => 'Journal Content',
  'plugins.pubIds.doi.manager.settings.doiObjectsRequired' => 'Please choose the objects DOIs should be assigned to.',
  'plugins.pubIds.doi.manager.settings.explainDois' => 'Please select the publishing objects that will have Digital Object Identifiers (DOI) assigned:',
  'plugins.pubIds.doi.manager.settings.explainCrossRefDois' => '<strong>NOTE:</strong> When using the <a href="http://www.crossref.org" target="_new">CrossRef</a> DOIs, please select articles. Article is seen as work, i.e. entity of intellectual and artistic content. Thus, article is the publishing object the CrossRef DOI export and registration is based upon.',
  'plugins.pubIds.doi.manager.settings.enableIssueDoi' => 'Issues',
  'plugins.pubIds.doi.manager.settings.enableArticleDoi' => 'Articles',
  'plugins.pubIds.doi.manager.settings.enableGalleyDoi' => 'Galleys',
  'plugins.pubIds.doi.manager.settings.enableSuppFileDoi' => 'Supplementary Files',
  'plugins.pubIds.doi.manager.settings.doiPrefix' => 'DOI Prefix',
  'plugins.pubIds.doi.manager.settings.doiPrefixDescription' => 'The DOI Prefix is assigned by registration agencies (e.g. <a href="http://www.crossref.org" target="_new">CrossRef</a>) and is in the format 10.xxxx (e.g. 10.1234):',
  'plugins.pubIds.doi.manager.settings.doiPrefixPattern' => 'The DOI prefix is mandatory and must be in the form 10.xxxx.',
  'plugins.pubIds.doi.manager.settings.doiSuffix' => 'DOI Suffix',
  'plugins.pubIds.doi.manager.settings.doiSuffixDescription' => 'A DOI suffix can take any form, but must be unique among all publishing objects with the same DOI prefix assigned:',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern' => 'Use the pattern entered below to generate DOI suffixes. Use %j for journal initials, %v for the volume number, %i for the issue number, %Y for the year, %a for the OJS article ID, %g for the OJS galley ID, %s for the OJS supplementary file ID, %p for the page number and %x for "Custom Identifier" (must be enabled in Setup 4.3).',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.issues' => 'for issues',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.articles' => 'for articles',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.galleys' => 'for galleys',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.suppFiles' => 'for supplementary files.',
  'plugins.pubIds.doi.manager.settings.doiSuffixPattern.example' => 'For example, vol%viss%ipp%p could create a DOI such as 10.1234/vol3iss2pp230',
  'plugins.pubIds.doi.manager.settings.doiSuffixDefault' => 'Use default patterns.',
  'plugins.pubIds.doi.manager.settings.doiSuffixDefault.description' => '%j.v%vi%i for issues<br />%j.v%vi%i.%a for articles<br />%j.v%vi%i.%a.g%g for galleys <br />%j.v%vi%i.%a.s%s for supplementary files.',
  'plugins.pubIds.doi.manager.settings.doiSuffixCustomIdentifier' => 'Enter an individual DOI suffix for each published item. You\'ll find an additional DOI input field on each item\'s meta-data page.',
  'plugins.pubIds.doi.manager.settings.doiIssueSuffixPatternRequired' => 'Please enter the DOI suffix pattern for issues.',
  'plugins.pubIds.doi.manager.settings.doiArticleSuffixPatternRequired' => 'Please enter the DOI suffix pattern for articles.',
  'plugins.pubIds.doi.manager.settings.doiGalleySuffixPatternRequired' => 'Please enter the DOI suffix pattern for galleys.',
  'plugins.pubIds.doi.manager.settings.doiSuppFileSuffixPatternRequired' => 'Please enter the DOI suffix pattern for supplementary files.',
  'plugins.pubIds.doi.manager.settings.doiReassign' => 'Reassign DOIs',
  'plugins.pubIds.doi.manager.settings.doiReassign.description' => 'If you change your DOI configuration, DOIs that have already been assigned will not be affected. Once the DOI configuration is saved, use this button to clear all existing DOIs so that the new settings will take effect with existing articles.',
  'plugins.pubIds.doi.manager.settings.doiReassign.confirm' => 'Are you sure you wish to delete all existing DOIs?',
  'plugins.pubIds.doi.editor.doi' => 'DOI',
  'plugins.pubIds.doi.editor.doiObjectTypeIssue' => 'issue',
  'plugins.pubIds.doi.editor.doiObjectTypeArticle' => 'article',
  'plugins.pubIds.doi.editor.doiObjectTypeGalley' => 'galley',
  'plugins.pubIds.doi.editor.doiObjectTypeSuppFile' => 'supplementary file',
  'plugins.pubIds.doi.editor.doiNotYetGenerated' => 'What you see is a preview of the DOI that may be incomplete. A DOI has not yet been generated. Publishing the issue and viewing the public {$pubObjectType} page will automatically generate a unique DOI for this {$pubObjectType}.',
  'plugins.pubIds.doi.editor.doiSuffixCustomIdentifierNotUnique' => 'The given DOI suffix is already in use for another published item. Please enter a unique DOI suffix for each item.',
  'plugins.pubIds.doi.editor.excludePubObject' => 'Exclude this {$pubObjectType} from assigning it a DOI.',
  'plugins.pubIds.doi.editor.doiReassign' => 'Reassign DOI',
  'plugins.pubIds.doi.editor.doiReassign.description' => 'Select this checkbox to clear the existing DOI for this {$pubObjectType}.',
  'plugins.pubIds.doi.editor.excludeIssueObjectsDoi' => 'Exclude Issue Objects',
  'plugins.pubIds.doi.editor.excludeIssueObjectsDoi.description' => 'Use this button to exclude the objects (articles, galleys, and supp files) currently scheduled for this issue from assigning them a DOI. Note that the objects that are added/scheduled later will not be affected. You will still have the possibility to use the single object exclusion options.',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi' => 'Clear Issue Objects DOIs',
  'plugins.pubIds.doi.editor.clearIssueObjectsDoi.description' => 'Use this button to clear DOIs of all objects (articles, galleys, and supp files) currently scheduled for this issue.',
); ?>