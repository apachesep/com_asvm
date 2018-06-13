<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

JFormHelper::loadFieldClass('list');

require_once __DIR__ . '/../../helpers/asvm.php';

/**
 * Bannerclient Field class for the Joomla Framework.
 *
 * @since  1.6
 */
class JFormFieldPaymentMethod extends JFormFieldList
{
	
	protected $type = 'PaymentMethod';

	public function getOptions()
	{
		$options = AsvmHelper::getPaymentMethodOptions();

		return array_merge(parent::getOptions(), $options);
	}
}
