# Checkout Module

This is the checkout module for [Vanilo](https://vanilo.io).

[![Travis](https://img.shields.io/travis/vanilophp/checkout.svg?style=flat-square)](https://travis-ci.org/vanilophp/checkout)
[![Packagist version](https://img.shields.io/packagist/vpre/vanilo/checkout.svg?style=flat-square)](https://packagist.org/packages/vanilo/checkout)
[![Packagist downloads](https://img.shields.io/packagist/dt/vanilo/checkout.svg?style=flat-square)](https://packagist.org/packages/vanilo/checkout)
[![StyleCI](https://styleci.io/repos/109258256/shield?branch=master)](https://styleci.io/repos/109258256)
[![MIT Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE.md)

## Installation

```bash
composer require vanilo/checkout
php artisan migrate
```

## Anatomy Of A Checkout

It has:

- a cart
- a billing address
- a shipping address (if cart needs shipping)
- a user (optional)
- a shipping method
- a payment method
- a state

Attributes:

- requires login?

## API Draft

```php

$checkout->cart; //vanilo/cart
$checkout->billingAddress; //konekt/address ?? billing/address
$checkout->shippingAddress; //konekt/address ?? shipping/address
$checkout->user; //konekt/user
$checkout->shippingMethod; // ?? name, fee => shipping module?
$checkout->paymentMethod; // ?? name, gw => payment module?
$checkout->state; // CheckoutState
```
