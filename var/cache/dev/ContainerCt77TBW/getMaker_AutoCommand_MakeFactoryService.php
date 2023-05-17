<?php

namespace ContainerCt77TBW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_AutoCommand_MakeFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.auto_command.make_factory' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Command\MakerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'MakerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'NoPersistenceObjectsAutoCompleter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'zenstruck'.\DIRECTORY_SEPARATOR.'foundry'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'FactoryCandidatesClassesExtractor.php';

        $container->privates['maker.auto_command.make_factory'] = $instance = new \Symfony\Bundle\MakerBundle\Command\MakerCommand(new \Zenstruck\Foundry\Bundle\Maker\MakeFactory(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['.zenstruck_foundry.maker.factory.generator'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_GeneratorService')), new \Zenstruck\Foundry\Bundle\Maker\Factory\NoPersistenceObjectsAutoCompleter(\dirname(__DIR__, 4)), new \Zenstruck\Foundry\Bundle\Maker\Factory\FactoryCandidatesClassesExtractor(($container->privates['.zenstruck_foundry.chain_manager_registry'] ?? $container->load('get_ZenstruckFoundry_ChainManagerRegistryService')), ($container->privates['.zenstruck_foundry.maker.factory.factory_class_map'] ?? $container->load('get_ZenstruckFoundry_Maker_Factory_FactoryClassMapService'))), 'Factory'), ($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.generator'] ?? $container->load('getMaker_GeneratorService')));

        $instance->setName('make:factory');
        $instance->setDescription('Creates a Foundry model factory for a Doctrine entity class or a regular object');

        return $instance;
    }
}
