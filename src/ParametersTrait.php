<?php

namespace Omnipay\Ifthenpay;


trait ParametersTrait
{
    public function getEntidade()
    {
        return $this->getParameter('Entidade');
    }

    public function setEntidade($value)
    {
        return $this->setParameter('Entidade', $value);
    }

    public function getSubentidade()
    {
        return $this->getParameter('Subentidade');
    }

    public function setSubentidade($value)
    {
        return $this->setParameter('Subentidade', $value);
    }

    public function getChaveAntiPhishing()
    {
        return $this->getParameter('ChaveAntiPhishing');
    }

    public function setChaveAntiPhishing($value)
    {
        return $this->setParameter('ChaveAntiPhishing', $value);
    }

    public function getChaveAntiPhishingCallback()
    {
        return $this->getParameter('ChaveAntiPhishingCallback');
    }

    public function setChaveAntiPhishingCallback($value)
    {
        return $this->setParameter('ChaveAntiPhishingCallback', $value);
    }
}
