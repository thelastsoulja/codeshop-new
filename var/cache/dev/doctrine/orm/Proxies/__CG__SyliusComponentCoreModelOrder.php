<?php

namespace Proxies\__CG__\Sylius\Component\Core\Model;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Order extends \Sylius\Component\Core\Model\Order implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'customer', 'channel', 'shippingAddress', 'billingAddress', 'payments', 'shipments', 'currencyCode', 'localeCode', 'promotionCoupon', 'checkoutState', 'paymentState', 'shippingState', 'promotions', 'tokenValue', 'customerIp', 'createdByGuest', 'id', 'checkoutCompletedAt', 'number', 'notes', 'items', 'itemsTotal', 'adjustments', 'adjustmentsTotal', 'total', 'state', 'createdAt', 'updatedAt'];
        }

        return ['__isInitialized__', 'customer', 'channel', 'shippingAddress', 'billingAddress', 'payments', 'shipments', 'currencyCode', 'localeCode', 'promotionCoupon', 'checkoutState', 'paymentState', 'shippingState', 'promotions', 'tokenValue', 'customerIp', 'createdByGuest', 'id', 'checkoutCompletedAt', 'number', 'notes', 'items', 'itemsTotal', 'adjustments', 'adjustmentsTotal', 'total', 'state', 'createdAt', 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Order $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getCustomer(): ?\Sylius\Component\Customer\Model\CustomerInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(?\Sylius\Component\Customer\Model\CustomerInterface $customer): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerWithAuthorization(?\Sylius\Component\Customer\Model\CustomerInterface $customer): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerWithAuthorization', [$customer]);

        parent::setCustomerWithAuthorization($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel(): ?\Sylius\Component\Channel\Model\ChannelInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel(?\Sylius\Component\Channel\Model\ChannelInterface $channel): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\Sylius\Component\User\Model\UserInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingAddress(): ?\Sylius\Component\Core\Model\AddressInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingAddress', []);

        return parent::getShippingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingAddress(?\Sylius\Component\Core\Model\AddressInterface $address): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingAddress', [$address]);

        parent::setShippingAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getBillingAddress(): ?\Sylius\Component\Core\Model\AddressInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBillingAddress', []);

        return parent::getBillingAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setBillingAddress(?\Sylius\Component\Core\Model\AddressInterface $address): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBillingAddress', [$address]);

        parent::setBillingAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckoutState(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckoutState', []);

        return parent::getCheckoutState();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckoutState(?string $checkoutState): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckoutState', [$checkoutState]);

        parent::setCheckoutState($checkoutState);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentState(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentState', []);

        return parent::getPaymentState();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaymentState(?string $paymentState): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaymentState', [$paymentState]);

        parent::setPaymentState($paymentState);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemUnits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemUnits', []);

        return parent::getItemUnits();
    }

    /**
     * {@inheritDoc}
     */
    public function getItemUnitsByVariant(\Sylius\Component\Core\Model\ProductVariantInterface $variant): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemUnitsByVariant', [$variant]);

        return parent::getItemUnitsByVariant($variant);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayments', []);

        return parent::getPayments();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPayments(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPayments', []);

        return parent::hasPayments();
    }

    /**
     * {@inheritDoc}
     */
    public function addPayment(\Sylius\Component\Payment\Model\PaymentInterface $payment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPayment', [$payment]);

        parent::addPayment($payment);
    }

    /**
     * {@inheritDoc}
     */
    public function removePayment(\Sylius\Component\Payment\Model\PaymentInterface $payment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePayment', [$payment]);

        parent::removePayment($payment);
    }

    /**
     * {@inheritDoc}
     */
    public function hasPayment(\Sylius\Component\Payment\Model\PaymentInterface $payment): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPayment', [$payment]);

        return parent::hasPayment($payment);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastPayment(string $state = NULL): ?\Sylius\Component\Core\Model\PaymentInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastPayment', [$state]);

        return parent::getLastPayment($state);
    }

    /**
     * {@inheritDoc}
     */
    public function isShippingRequired(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isShippingRequired', []);

        return parent::isShippingRequired();
    }

    /**
     * {@inheritDoc}
     */
    public function getShipments(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShipments', []);

        return parent::getShipments();
    }

    /**
     * {@inheritDoc}
     */
    public function hasShipments(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasShipments', []);

        return parent::hasShipments();
    }

    /**
     * {@inheritDoc}
     */
    public function addShipment(\Sylius\Component\Core\Model\ShipmentInterface $shipment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addShipment', [$shipment]);

        parent::addShipment($shipment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShipment(\Sylius\Component\Core\Model\ShipmentInterface $shipment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShipment', [$shipment]);

        parent::removeShipment($shipment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeShipments(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeShipments', []);

        parent::removeShipments();
    }

    /**
     * {@inheritDoc}
     */
    public function hasShipment(\Sylius\Component\Core\Model\ShipmentInterface $shipment): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasShipment', [$shipment]);

        return parent::hasShipment($shipment);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotionCoupon(): ?\Sylius\Component\Promotion\Model\PromotionCouponInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotionCoupon', []);

        return parent::getPromotionCoupon();
    }

    /**
     * {@inheritDoc}
     */
    public function setPromotionCoupon(?\Sylius\Component\Promotion\Model\PromotionCouponInterface $coupon): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPromotionCoupon', [$coupon]);

        parent::setPromotionCoupon($coupon);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotionSubjectTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotionSubjectTotal', []);

        return parent::getPromotionSubjectTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotionSubjectCount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotionSubjectCount', []);

        return parent::getPromotionSubjectCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getItemsSubtotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemsSubtotal', []);

        return parent::getItemsSubtotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyCode', []);

        return parent::getCurrencyCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyCode(?string $currencyCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyCode', [$currencyCode]);

        parent::setCurrencyCode($currencyCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocaleCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocaleCode', []);

        return parent::getLocaleCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocaleCode(?string $localeCode): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocaleCode', [$localeCode]);

        parent::setLocaleCode($localeCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingState(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingState', []);

        return parent::getShippingState();
    }

    /**
     * {@inheritDoc}
     */
    public function setShippingState(?string $state): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShippingState', [$state]);

        parent::setShippingState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function hasPromotion(\Sylius\Component\Promotion\Model\PromotionInterface $promotion): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPromotion', [$promotion]);

        return parent::hasPromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function addPromotion(\Sylius\Component\Promotion\Model\PromotionInterface $promotion): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPromotion', [$promotion]);

        parent::addPromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function removePromotion(\Sylius\Component\Promotion\Model\PromotionInterface $promotion): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePromotion', [$promotion]);

        parent::removePromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotions', []);

        return parent::getPromotions();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxTotal', []);

        return parent::getTaxTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingTaxTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingTaxTotal', []);

        return parent::getShippingTaxTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxExcludedTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxExcludedTotal', []);

        return parent::getTaxExcludedTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxIncludedTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxIncludedTotal', []);

        return parent::getTaxIncludedTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingTotal', []);

        return parent::getShippingTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrderPromotionTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrderPromotionTotal', []);

        return parent::getOrderPromotionTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getShippingPromotionTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShippingPromotionTotal', []);

        return parent::getShippingPromotionTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTokenValue(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokenValue', []);

        return parent::getTokenValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokenValue(?string $tokenValue): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokenValue', [$tokenValue]);

        parent::setTokenValue($tokenValue);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerIp(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerIp', []);

        return parent::getCustomerIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomerIp(?string $customerIp): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomerIp', [$customerIp]);

        parent::setCustomerIp($customerIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getNonDiscountedItemsTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNonDiscountedItemsTotal', []);

        return parent::getNonDiscountedItemsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function isCreatedByGuest(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCreatedByGuest', []);

        return parent::isCreatedByGuest();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByGuest(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByGuest', []);

        return parent::getCreatedByGuest();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByGuest(bool $createdByGuest): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByGuest', [$createdByGuest]);

        parent::setCreatedByGuest($createdByGuest);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckoutCompletedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckoutCompletedAt', []);

        return parent::getCheckoutCompletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckoutCompletedAt(?\DateTimeInterface $checkoutCompletedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckoutCompletedAt', [$checkoutCompletedAt]);

        parent::setCheckoutCompletedAt($checkoutCompletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isCheckoutCompleted(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCheckoutCompleted', []);

        return parent::isCheckoutCompleted();
    }

    /**
     * {@inheritDoc}
     */
    public function completeCheckout(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'completeCheckout', []);

        parent::completeCheckout();
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber(?string $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotes(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotes', []);

        return parent::getNotes();
    }

    /**
     * {@inheritDoc}
     */
    public function setNotes(?string $notes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotes', [$notes]);

        parent::setNotes($notes);
    }

    /**
     * {@inheritDoc}
     */
    public function getItems(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItems', []);

        return parent::getItems();
    }

    /**
     * {@inheritDoc}
     */
    public function clearItems(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'clearItems', []);

        parent::clearItems();
    }

    /**
     * {@inheritDoc}
     */
    public function countItems(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'countItems', []);

        return parent::countItems();
    }

    /**
     * {@inheritDoc}
     */
    public function addItem(\Sylius\Component\Order\Model\OrderItemInterface $item): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addItem', [$item]);

        parent::addItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function removeItem(\Sylius\Component\Order\Model\OrderItemInterface $item): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeItem', [$item]);

        parent::removeItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function hasItem(\Sylius\Component\Order\Model\OrderItemInterface $item): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasItem', [$item]);

        return parent::hasItem($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getItemsTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getItemsTotal', []);

        return parent::getItemsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function recalculateItemsTotal(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recalculateItemsTotal', []);

        parent::recalculateItemsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', []);

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalQuantity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalQuantity', []);

        return parent::getTotalQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function getState(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState(string $state): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEmpty', []);

        return parent::isEmpty();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustments(string $type = NULL): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustments', [$type]);

        return parent::getAdjustments($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsRecursively(string $type = NULL): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsRecursively', [$type]);

        return parent::getAdjustmentsRecursively($type);
    }

    /**
     * {@inheritDoc}
     */
    public function addAdjustment(\Sylius\Component\Order\Model\AdjustmentInterface $adjustment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdjustment', [$adjustment]);

        parent::addAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustment(\Sylius\Component\Order\Model\AdjustmentInterface $adjustment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustment', [$adjustment]);

        parent::removeAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAdjustment(\Sylius\Component\Order\Model\AdjustmentInterface $adjustment): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAdjustment', [$adjustment]);

        return parent::hasAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsTotal(string $type = NULL): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsTotal', [$type]);

        return parent::getAdjustmentsTotal($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsTotalRecursively(string $type = NULL): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsTotalRecursively', [$type]);

        return parent::getAdjustmentsTotalRecursively($type);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustments(string $type = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustments', [$type]);

        parent::removeAdjustments($type);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustmentsRecursively(string $type = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustmentsRecursively', [$type]);

        parent::removeAdjustmentsRecursively($type);
    }

    /**
     * {@inheritDoc}
     */
    public function recalculateAdjustmentsTotal(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recalculateAdjustmentsTotal', []);

        parent::recalculateAdjustmentsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function canBeProcessed(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'canBeProcessed', []);

        return parent::canBeProcessed();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        parent::setUpdatedAt($updatedAt);
    }

}
