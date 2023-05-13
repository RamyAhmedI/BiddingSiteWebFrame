<?php

namespace App\Factory;

use App\Entity\MakeComment;
use App\Repository\MakeCommentRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<MakeComment>
 *
 * @method        MakeComment|Proxy create(array|callable $attributes = [])
 * @method static MakeComment|Proxy createOne(array $attributes = [])
 * @method static MakeComment|Proxy find(object|array|mixed $criteria)
 * @method static MakeComment|Proxy findOrCreate(array $attributes)
 * @method static MakeComment|Proxy first(string $sortedField = 'id')
 * @method static MakeComment|Proxy last(string $sortedField = 'id')
 * @method static MakeComment|Proxy random(array $attributes = [])
 * @method static MakeComment|Proxy randomOrCreate(array $attributes = [])
 * @method static MakeCommentRepository|RepositoryProxy repository()
 * @method static MakeComment[]|Proxy[] all()
 * @method static MakeComment[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static MakeComment[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static MakeComment[]|Proxy[] findBy(array $attributes)
 * @method static MakeComment[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static MakeComment[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class MakeCommentFactory extends ModelFactory
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
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(MakeComment $makeComment): void {})
        ;
    }

    protected static function getClass(): string
    {
        return MakeComment::class;
    }
}
