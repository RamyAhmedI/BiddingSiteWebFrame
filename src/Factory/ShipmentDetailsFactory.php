<?php

namespace App\Factory;

use App\Entity\ShipmentDetails;
use App\Repository\ShipmentDetailsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<ShipmentDetails>
 *
 * @method        ShipmentDetails|Proxy create(array|callable $attributes = [])
 * @method static ShipmentDetails|Proxy createOne(array $attributes = [])
 * @method static ShipmentDetails|Proxy find(object|array|mixed $criteria)
 * @method static ShipmentDetails|Proxy findOrCreate(array $attributes)
 * @method static ShipmentDetails|Proxy first(string $sortedField = 'id')
 * @method static ShipmentDetails|Proxy last(string $sortedField = 'id')
 * @method static ShipmentDetails|Proxy random(array $attributes = [])
 * @method static ShipmentDetails|Proxy randomOrCreate(array $attributes = [])
 * @method static ShipmentDetailsRepository|RepositoryProxy repository()
 * @method static ShipmentDetails[]|Proxy[] all()
 * @method static ShipmentDetails[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static ShipmentDetails[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static ShipmentDetails[]|Proxy[] findBy(array $attributes)
 * @method static ShipmentDetails[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static ShipmentDetails[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class ShipmentDetailsFactory extends ModelFactory
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
            'price' => self::faker()->randomFloat(),
            'productName' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(ShipmentDetails $shipmentDetails): void {})
        ;
    }

    protected static function getClass(): string
    {
        return ShipmentDetails::class;
    }
}
