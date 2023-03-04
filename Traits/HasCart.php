<?php

declare(strict_types=1);

/**
 * Contains the HasCart trait.
 *
 * @copyright   Copyright (c) 2017 Attila Fulop
 * @author      Attila Fulop
 * @license     MIT
 * @since       2017-11-23
 *
 */

namespace Vanilo\Checkout\Traits;

use Vanilo\Contracts\CheckoutSubject;

/**
 * @deprecated Will be removed with v4
 */
trait HasCart
{
    /** @var  CheckoutSubject */
    protected $cart;

    /**
     * Returns the cart
     *
     * @return CheckoutSubject|null
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the cart for the checkout
     *
     * @param CheckoutSubject $cart
     */
    public function setCart(CheckoutSubject $cart)
    {
        $this->cart = $cart;
    }
}
