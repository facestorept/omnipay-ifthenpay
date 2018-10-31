<?php

namespace Omnipay\Ifthenpay\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\Ifthenpay\ParametersTrait;
use Omnipay\Ifthenpay\Service\MBService;

class PurchaseRequest extends AbstractRequest
{
    use ParametersTrait;

    public function getData()
    {
        return $this->getParameters();
    }

    public function sendData($data)
    {
        $mbService = new MBService();

        $result = $mbService->getMBRef(
            $this->getParameter("Entidade"),
            $this->getParameter("Subentidade"),
            $this->getParameter("transactionId"),
            $this->getParameter("amount")
        );

        return $this->response = new Response($this, $result);
    }
}
