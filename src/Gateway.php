<?php

namespace Omnipay\Ifthenpay;

use Omnipay\Common\AbstractGateway;

/**
 * IfthenPay
 *
 * @link http://www.ifthenpay.com
 */
class Gateway extends AbstractGateway
{
    use ParametersTrait;

    public function getName()
    {
        return "IfthenPay";
    }

    public function getDefaultParameters()
    {
        return array(
            'Entidade' => '',
            'Subentidade' => '',
            'ChaveAntiPhishing' => '',
            'ChaveAntiPhishingCallback' => '',
        );
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Ifthenpay\Message\PurchaseRequest', $parameters);
    }
    
    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Ifthenpay\Message\CompletePurchaseRequest', $parameters);
    }
}
