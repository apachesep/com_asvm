<?php
/**
 * @version     1.1
 * @package     Advanced Search Manager for Virtuemart
 * @copyright   Copyright (C) 2016 JoomDev. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      JoomDev <info@joomdev.com> - http://www.joomdev.com/
 */
defined('_JEXEC') or die;

/**
 * Class AsvmFrontendHelper
 *
 * @since  1.6
 */
class AsvmHelpersAsvm
{
	/**
	 * Get an instance of the named model
	 *
	 * @param   string  $name  Model name
	 *
	 * @return null|object
	 */
	public static function getModel($name)
	{
		$model = null;

		// If the file exists, let's
		if (file_exists(JPATH_SITE . '/components/com_asvm/models/' . strtolower($name) . '.php'))
		{
			require_once JPATH_SITE . '/components/com_asvm/models/' . strtolower($name) . '.php';
			$model = JModelLegacy::getInstance($name, 'AsvmModel');
		}

		return $model;
	}
}
