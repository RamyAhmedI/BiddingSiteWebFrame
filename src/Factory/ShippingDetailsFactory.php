<?php

namespace App\Factory;

use App\Entity\ShippingDetails;
use App\Repository\ShippingDetailsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<ShippingDetails>
 *
 * @method        ShippingDetails|Proxy create(array|callable $attributes = [])
 * @method static ShippingDetails|Proxy createOne(array $attributes = [])
 * @method static ShippingDetails|Proxy find(object|array|mixed $criteria)
 * @method static ShippingDetails|Proxy findOrCreate(array $attributes)
 * @method static ShippingDetails|Proxy first(string $sortedField = 'id')
 * @method static ShippingDetails|Proxy last(string $sortedField = 'id')
 * @method static ShippingDetails|Proxy random(array $attributes = [])
 * @method static ShippingDetails|Proxy randomOrCreate(array $attributes = [])
 * @method static ShippingDetailsRepository|RepositoryProxy repository()
 * @method static ShippingDetails[]|Proxy[] all()
 * @method static ShippingDetails[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static ShippingDetails[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static ShippingDetails[]|Proxy[] findBy(array $attributes)
 * @method static ShippingDetails[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ShippingDetails[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ShippingDetailsFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'address' => self::faker()->text(255),
            'email' => self::faker()->text(255),
            'phone' => self::faker()->randomNumber(),
            'price' => self::faker()->randomFloat(),
            'product' => self::faker()->text(255),
            'productName' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(ShippingDetails $shippingDetails): void {})
        ;
    }

    protected static function getClass(): string
    {
        return ShippingDetails::class;
    }
}
