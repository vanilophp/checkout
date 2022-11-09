<?php

declare(strict_types=1);

/**
 * Contains the MemoryStore class.
 *
 * @copyright   Copyright (c) 2022 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2022-11-09
 *
 */

namespace Vanilo\Checkout\Tests\Example;

use Vanilo\Checkout\Contracts\CheckoutState;
use Vanilo\Checkout\Contracts\CheckoutStore;
use Vanilo\Contracts\Address;
use Vanilo\Contracts\Billpayer;
use Vanilo\Contracts\CheckoutSubject;

class MemoryStore implements CheckoutStore
{
    public string $storeAttribute = 'Hey I am a store attribute';

    private ?CheckoutSubject $cart = null;

    private CheckoutState $state;

    private Billpayer $billpayer;

    private Address $shippingAddress;

    private $customAttributes = [];

    public function __construct()
    {
        $this->state = \Vanilo\Checkout\Models\CheckoutState::VIRGIN();
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setCart(CheckoutSubject $cart)
    {
        $this->cart = $cart;
    }

    public function getState(): CheckoutState
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getBillpayer(): Billpayer
    {
        return $this->billpayer;
    }

    public function setBillpayer(Billpayer $billpayer)
    {
        $this->billpayer = $billpayer;
    }

    public function getShippingAddress(): Address
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(Address $address)
    {
        $this->shippingAddress = $address;
    }

    public function setCustomAttribute(string $key, $value): void
    {
        $this->customAttributes[$key] = $value;
    }

    public function getCustomAttribute(string $key)
    {
        return $this->customAttributes[$key] ?? null;
    }

    public function putCustomAttributes(array $data): void
    {
        $this->customAttributes = $data;
    }

    public function getCustomAttributes(): array
    {
        return $this->customAttributes;
    }

    public function update(array $data)
    {
        // TODO: Implement update() method.
    }

    public function total()
    {
        return 0;
    }

    public function customMethod(): string
    {
        return 'Hey I am a custom method';
    }

    public function __get(string $name)
    {
        if ('magicStoreAttribute' === $name) {
            return 'Hey I am a magic store attribute';
        }
    }
}
