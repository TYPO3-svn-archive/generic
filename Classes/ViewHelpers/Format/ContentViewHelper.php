<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Jochen Rau <jochen.rau@typoplanet.de>, typoplanet
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * View helper for rendering a list of objects.
 *
 * = Examples =
 *
 * <code>
 * <g:format.address name="{name}" address="{address}" iso="IND" />
 * </code>
 *
 * <output>
 * <div>Geeta Vadhera<br />1 Palam Vihar Marg<br />CHAUMA<br />GURGAON&nbsp;-$nbsp;122001<br />INDIA</div>
 * </output>
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @api
 * @scope prototype
 */
class Tx_Generic_ViewHelpers_Format_ContentViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * If the escaping interceptor should be disabled inside this ViewHelper, then set this value to FALSE.
	 * This is internal and NO part of the API. It is very likely to change.
	 *
	 * @var boolean
	 * @internal
	 */
	protected $escapingInterceptorEnabled = FALSE;

	/**
	 * @param mixed $content (optional) The object.
	 * @param string $as (optional) The target.
	 * @param string $format (optional) The format.
	 * @param array $paths (optional) The paths.
	 * @return string the formatted Person.
	 */
	public function render($content = NULL, $as = NULL, $format = NULL, $paths = NULL) {
		$view = clone $this->viewHelperVariableContainer->getView();
		$view->setPartialRootPath(t3lib_div::getFileAbsFileName('EXT:generic/Resources/Private/Partials/'));

		if ($content === NULL) {
			$content = $this->renderChildren();
		}
		
		if (!$this->viewHelperVariableContainer->exists('Tx_Generic_ViewHelpers_Format_ContentViewHelper', 'context')) {
			$this->viewHelperVariableContainer->add('Tx_Generic_ViewHelpers_Format_ContentViewHelper', 'context', array('Content'));
		}
		if (is_array($content) || ($content instanceof ArrayAccess) || ($content instanceof Traversable)) {
			$defaultPartial = 'Content/List';
			$preparedContent = $content;
		} elseif ($content instanceof Tx_Extbase_DomainObject_AbstractDomainObject) {
			if ($content instanceof Tx_Generic_Domain_Model_Address) {
				$preparedContent = $view->renderPartial('Domain/Model/Address', 'default', array('content' => $content), $this->viewHelperVariableContainer);
			} elseif (is_array($paths)) {
				$preparedContent = array();
				foreach ($paths as $path) {
					$preparedContent[$path] = Tx_Extbase_Reflection_ObjectAccess::getPropertyPath($content, $path);
				}
			} else {
				$preparedContent = Tx_Extbase_Reflection_ObjectAccess::getAccessibleProperties($content);
			}
		} else {
			$defaultPartial = 'Content/Text';
			$preparedContent = $content;
		}
		
		if (is_string($format) && strlen($format) > 0) {
			$sectionName = $format;
		} else {
			$sectionName = 'default';
		}
		
		$contextStack = $this->viewHelperVariableContainer->get('Tx_Generic_ViewHelpers_Format_ContentViewHelper', 'context');
		if (is_string($as) && strlen($as) > 0) {
			$contextStack = t3lib_div::trimExplode('/', $as);
			$partial = $as;
		} else {
			$contextStack[] = $defaultPartial;
			$partial = $defaultPartial;
		}
		$this->viewHelperVariableContainer->addOrUpdate('Tx_Generic_ViewHelpers_Format_ContentViewHelper', 'context', $contextStack);
// debug($contextStack);
		$partialPath = $partial;

		$output = '';
		$output .= $view->renderPartial($partialPath, $sectionName, array('content' => $preparedContent, 'paths' => $paths), $this->viewHelperVariableContainer);
		
		$contextStack = $this->viewHelperVariableContainer->get('Tx_Generic_ViewHelpers_Format_ContentViewHelper', 'context');
		array_pop($contextStack);
		$this->viewHelperVariableContainer->addOrUpdate('Tx_Generic_ViewHelpers_Format_ContentViewHelper', 'context', $contextStack);
		
		return $output;
	}

}
?>