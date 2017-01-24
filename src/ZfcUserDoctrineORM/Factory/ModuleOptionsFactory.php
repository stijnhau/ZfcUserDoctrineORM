<?php
namespace ZfcUserDoctrineORM\Factory;

use Zend\ServiceManager\FactoryInterface;
use Interop\Container\ContainerInterface;
use ZfcUserDoctrineORM\Options\ModuleOptions;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function __invoke(ContainerInterface $serviceLocator, $requestedName, array $options = null)
    {
        $config = $serviceLocator->get('Config');

        return new ModuleOptions(isset($config['zfcuser']) ? $config['zfcuser'] : array());
    }
}
