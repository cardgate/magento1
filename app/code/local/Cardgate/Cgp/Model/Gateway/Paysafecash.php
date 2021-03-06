<?php

/**
 * Magento CardGate payment extension
 *
 * @category Mage
 * @package Cardgate_Cgp
 */
class Cardgate_Cgp_Model_Gateway_Paysafecash extends Cardgate_Cgp_Model_Gateway_Abstract
{

	protected $_code = 'cgp_paysafecash';

	protected $_model = 'paysafecash';

	protected $_canUseInternal = true;
}
