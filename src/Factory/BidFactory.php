<?php

namespace App\Factory;

use App\Entity\Bid;
use App\Repository\BidRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Bid>
 *
 * @method        Bid|Proxy create(array|callable $attributes = [])
 * @method static Bid|Proxy createOne(array $attributes = [])
 * @method static Bid|Proxy find(object|array|mixed $criteria)
 * @method static Bid|Proxy findOrCreate(array $attributes)
 * @method static Bid|Proxy first(string $sortedField = 'id')
 * @method static Bid|Proxy last(string $sortedField = 'id')
 * @method static Bid|Proxy random(array $attributes = [])
 * @method static Bid|Proxy randomOrCreate(array $attributes = [])
 * @method static BidRepository|RepositoryProxy repository()
 * @method static Bid[]|Proxy[] all()
 * @method static Bid[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Bid[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Bid[]|Proxy[] findBy(array $attributes)
 * @method static Bid[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Bid[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class BidFactory extends ModelFactory
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
            'Cancel' => self::faker()->text(255),
            'Date' => self::faker()->text(255),
            'Time' => self::faker()->randomNumber(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Bid $bid): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Bid::class;
    }
}
