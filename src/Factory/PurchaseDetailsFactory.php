<?php

namespace App\Factory;

use App\Entity\PurchaseDetails;
use App\Repository\PurchaseDetailsRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<PurchaseDetails>
 *
 * @method        PurchaseDetails|Proxy create(array|callable $attributes = [])
 * @method static PurchaseDetails|Proxy createOne(array $attributes = [])
 * @method static PurchaseDetails|Proxy find(object|array|mixed $criteria)
 * @method static PurchaseDetails|Proxy findOrCreate(array $attributes)
 * @method static PurchaseDetails|Proxy first(string $sortedField = 'id')
 * @method static PurchaseDetails|Proxy last(string $sortedField = 'id')
 * @method static PurchaseDetails|Proxy random(array $attributes = [])
 * @method static PurchaseDetails|Proxy randomOrCreate(array $attributes = [])
 * @method static PurchaseDetailsRepository|RepositoryProxy repository()
 * @method static PurchaseDetails[]|Proxy[] all()
 * @method static PurchaseDetails[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static PurchaseDetails[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static PurchaseDetails[]|Proxy[] findBy(array $attributes)
 * @method static PurchaseDetails[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static PurchaseDetails[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class PurchaseDetailsFactory extends ModelFactory
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
            // ->afterInstantiate(function(PurchaseDetails $purchaseDetails): void {})
        ;
    }

    protected static function getClass(): string
    {
        return PurchaseDetails::class;
    }
}
