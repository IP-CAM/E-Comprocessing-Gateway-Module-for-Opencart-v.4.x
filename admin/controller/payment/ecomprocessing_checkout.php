<?php
/*
 * Copyright (C) 2018 E-Comprocessing Ltd.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author	  E-Comprocessing
 * @copyright   2018 E-Comprocessing Ltd.
 * @license	 http://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2 (GPL-2.0)
 */

namespace Opencart\Admin\Controller\Extension\Ecomprocessing\Payment;

use Opencart\Extension\Ecomprocessing\System\Admin\BaseController;

/**
 * Backend controller for the "ecomprocessing Checkout" module
 *
 * @package EcomprocessingCheckout
 */
class EcomprocessingCheckout extends BaseController
{
	/**
	 * Module Name (Used in View - Templates)
	 *
	 * @var string
	 */
	protected $module_name = 'ecomprocessing_checkout';

	/**
	 * Used to find out if the payment method requires SSL
	 *
	 * @return bool
	 */
	protected function isModuleRequiresSsl(): bool
	{
		return false;
	}
}
