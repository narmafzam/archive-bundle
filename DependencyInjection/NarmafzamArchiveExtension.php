<?php
/**
 * This file is part of archive
 * Copyrighted by Narmafzam (Farzam Webnegar Sivan Co.), info@narmafzam.com
 * Created by peyman
 * Date: 2017/10/8
 */

namespace Narmafzam\ArchiveBundle\DependencyInjection;

use Narmafzam\ArchiveBundle\Form\Common\ContractType;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;

class NarmafzamArchiveExtension extends ConfigurableExtension implements ExtensionInterface
{
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__ ) . '/Resources/config'));
        $loader->load('services.yml');

        $def = $container->getDefinition(ContractType::class);
        $def->replaceArgument('$class', $mergedConfig['contract']['entity']);
    }
}