<?php

namespace Tests;


use Omnipay\Ifthenpay\Gateway;
use Omnipay\Tests\GatewayTestCase;

class IfThenPayGatewayTest extends GatewayTestCase
{
    protected $gateway;

    protected $options;

    protected $voidOptions;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());

        $this->options = array(
            'Entidade' => '99999',
            'Subentidade' => '999',
            'transactionId' => 1,
            'amount' => 200,
        );

        $this->voidOptions = array(
            'transactionReference' => 'ASDFASDFASDF',
        );
    }
}
