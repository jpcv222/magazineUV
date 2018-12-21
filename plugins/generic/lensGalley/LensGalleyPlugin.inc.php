<?php

/**
 * @file plugins/generic/lensGalley/LensGalleyPlugin.inc.php
 *
 * Copyright (c) 2014-2017 Simon Fraser University
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class LensGalleyPlugin
 * @ingroup plugins_generic_lensGalley
 *
 * @brief Class for LensGalley plugin
 */

import('lib.pkp.classes.plugins.GenericPlugin');

class LensGalleyPlugin extends GenericPlugin {
	/**
	 * Register the plugin, if enabled
	 * @param $category string
	 * @param $path string
	 * @return boolean
	 */
	function register($category, $path) {
		if (parent::register($category, $path)) {
			if ($this->getEnabled()) {
				HookRegistry::register('ArticleHandler::view::galley', array($this, 'articleCallback'));
				HookRegistry::register('IssueHandler::view::galley', array($this, 'issueCallback'));
			}
			return true;
		}
		return false;
	}

	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}

	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.generic.lensGalley.displayName');
	}

	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.generic.lensGalley.description');
	}

	/**
	 * Callback that renders the article galley.
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function articleCallback($hookName, $args) {
		$request =& $args[0];
		$issue =& $args[1];
		$galley =& $args[2];
		$article =& $args[3];

		$templateMgr = TemplateManager::getManager($request);
		if ($galley && in_array($galley->getFileType(), array('application/xml', 'text/xml'))) {

			$replaceImages = json_encode($this->_getReplaceImages($request, $galley), JSON_UNESCAPED_SLASHES);
			$translationStrings = json_encode($this->_getTranslations(), JSON_UNESCAPED_SLASHES);
					
			$templateMgr->assign(array(
				'pluginLensPath' => $this->getLensPath($request),
				'pluginTemplatePath' => $this->getTemplatePath(),
				'pluginUrl' => $request->getBaseUrl() . '/' . $this->getPluginPath(),
				'issue' => $issue,
				'article' => $article,
				'galley' => $galley,
				'jQueryUrl' => $this->_getJQueryUrl($request),
				'replaceImages' => $replaceImages,
				'translationStrings' => $translationStrings,
			));
			$templateMgr->display($this->getTemplatePath() . '/articleGalley.tpl');
			return true;
		}

		return false;
	}

	/**
	 * Callback that renders the issue galley.
	 * @param $hookName string
	 * @param $args array
	 * @return boolean
	 */
	function issueCallback($hookName, $args) {
		$request =& $args[0];
		$issue =& $args[1];
		$galley =& $args[2];

		$templateMgr = TemplateManager::getManager($request);
		if ($galley && $galley->getFileType() == 'application/xml') {
			$templateMgr->assign(array(
				'pluginLensPath' => $this->getLensPath($request),
				'pluginTemplatePath' => $this->getTemplatePath(),
				'pluginUrl' => $request->getBaseUrl() . '/' . $this->getPluginPath(),
				'galleyFile' => $galley->getFile(),
				'issue' => $issue,
				'galley' => $galley,
				'jQueryUrl' => $this->_getJQueryUrl($request),
			));
			$templateMgr->addJavaScript(
				'jquery',
				$jquery,
				array(
					'priority' => STYLE_SEQUENCE_CORE,
					'contexts' => 'frontend',
				)
			);
			$templateMgr->display($this->getTemplatePath() . '/issueGalley.tpl');
			return true;
		}

		return false;
	}

	/**
	 * Get the URL for JQuery JS.
	 * @param $request PKPRequest
	 * @return string
	 */
	private function _getJQueryUrl($request) {
		$min = Config::getVar('general', 'enable_minified') ? '.min' : '';
		if (Config::getVar('general', 'enable_cdn')) {
			return '//ajax.googleapis.com/ajax/libs/jquery/' . CDN_JQUERY_VERSION . '/jquery' . $min . '.js';
		} else {
			return $request->getBaseUrl() . '/lib/pkp/lib/components/jquery/jquery' . $min . '.js';
		}
	}

	/**
	 * returns the base path for Lens JS included in this plugin.
	 * @param $request PKPRequest
	 * @return string
	 */
	function getLensPath($request) {
		return $request->getBaseUrl() . '/' . $this->getPluginPath() . '/lib/lens';
	}

	/**
	 * @copydoc Plugin::getTemplatePath()
	 */
	function getTemplatePath($inCore = false) {
		return parent::getTemplatePath($inCore) . 'templates/';
	}
	
	/**
	 * Return array containing the image names and new url's
	 * @param $request PKPRequest
	 * @param $galley ArticleGalley
	 * @return Array
	 */	
	function _getReplaceImages($request, $galley) {
		$journal = $request->getJournal();
		$submissionFile = $galley->getFile();
		$replaceImages = array();

		$submissionFileDao = DAORegistry::getDAO('SubmissionFileDAO');
		import('lib.pkp.classes.submission.SubmissionFile'); // Constants
		$embeddableFiles = array_merge(
			$submissionFileDao->getLatestRevisions($submissionFile->getSubmissionId(), SUBMISSION_FILE_PROOF),
			$submissionFileDao->getLatestRevisionsByAssocId(ASSOC_TYPE_SUBMISSION_FILE, $submissionFile->getFileId(), $submissionFile->getSubmissionId(), SUBMISSION_FILE_DEPENDENT)
		);
		$referredArticle = null;
		$articleDao = DAORegistry::getDAO('ArticleDAO');

		foreach ($embeddableFiles as $embeddableFile) {

			if (!$referredArticle || $referredArticle->getId() != $galley->getSubmissionId()) {
				$referredArticle = $articleDao->getById($galley->getSubmissionId());
			}
			
			$ojs_file = $embeddableFile->getOriginalFileName();
			
			$ojs_url = $request->url(null, 'article', 'download', array($referredArticle->getBestArticleId(), $galley->getBestGalleyId(), $embeddableFile->getFileId()));
			
			$replaceImages[] = array("ojs_file"=>$ojs_file, "ojs_url"=>$ojs_url);

		}

		return $replaceImages;
	}

	/**
	 * Return array containing the translation strings for lens
	 * @return Array
	 */	
	function _getTranslations() {
		return array(
			'back' => __('plugins.generic.lensGalley.translate.back'),
		);
	}	
	
}

?>
