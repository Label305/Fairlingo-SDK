<?php

namespace Fairlingo_SDK\Data\OrderDrafts;

use DateTime;

class Offer
{

    /**
     * @var DateTime $eta
     */
    private $eta;

    /**
     * @var string $subtotal
     */
    private $subtotal;

    /**
     * @var double $vatRate
     */
    private $vatRate;

    /**
     * @var string $vat
     */
    private $vat;

    /**
     * @var string $total
     */
    private $total;

    /**
     * @var string $balance
     */
    private $balance;

    /**
     * @var bool $enoughBalance
     */
    private $enoughBalance;

    /**
     * @return DateTime
     */
    public function getEta()
    {
        return $this->eta;
    }

    /**
     * @param DateTime $eta
     */
    public function setEta($eta)
    {
        $this->eta = $eta;
    }

    /**
     * @return string
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param string $subtotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return float
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param float $vatRate
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;
    }

    /**
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param string $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return string
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param string $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return boolean
     */
    public function isEnoughBalance()
    {
        return $this->enoughBalance;
    }

    /**
     * @param boolean $enoughBalance
     */
    public function setEnoughBalance($enoughBalance)
    {
        $this->enoughBalance = $enoughBalance;
    }
}