<?php

namespace ContainerUTo2qIe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssociationConfiguratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Field/FieldConfiguratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Field/Configurator/AssociationConfigurator.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Field\\Configurator\\AssociationConfigurator'] = new \EasyCorp\Bundle\EasyAdminBundle\Field\Configurator\AssociationConfigurator(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Factory\\EntityFactory'] ?? $container->getEntityFactoryService()), ($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Router\\CrudUrlGenerator'] ?? $container->getCrudUrlGeneratorService()), ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}
