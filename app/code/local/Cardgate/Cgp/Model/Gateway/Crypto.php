<?php

/**
 * Magento CardGate payment extension
 *
 * @category Mage
 * @package Cardgate_Cgp
 */
class Cardgate_Cgp_Model_Gateway_Crypto extends Cardgate_Cgp_Model_Gateway_Abstract
{

	protected $_code = 'cgp_crypto';

	protected $_model = 'crypto';

	protected $_canUseInternal = true;
}
