<?php

/**
 * Magento CardGate payment extension
 *
 * @category Mage
 * @package Cardgate_Cgp
 */
class Cardgate_Cgp_Block_Paymentfee_Adminhtml_Sales_Order_Totals extends Mage_Adminhtml_Block_Sales_Order_Totals
{

	/**
	 * Initialize order totals
	 *
	 * @return Mage_Sales_Block_Order_Totals
	 */
	protected function _initTotals ()
	{
		parent::_initTotals();
		$payment = $this->getOrder()->getPayment();
		if ( substr( $payment->getMethod(), 0, 3 ) != "cgp" ) {
			return $this;
		}
		$info = $payment->getMethodInstance()->getInfoInstance();
		if ( ! $info->getAdditionalInformation( "invoice_fee" ) ) {
			return $this;
		}
		
		return Mage::helper( 'cgp/paymentfee' )->addToBlock( $this );
	}
	
	public function getInvoice ()
	{
		return $this->getParentBlock()->getInvoice();
	}
	
}
