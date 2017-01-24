<?php
namespace ZfcUserDoctrineORM\Factory;

use Zend\ServiceManager\FactoryInterface;
use Interop\Container\ContainerInterface;
use ZfcUserDoctrineORM\Options\ModuleOptions;
use Zend\ServiceManager\ServiceLocatorInterface;

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

    /**
     * @deprecated ZF2 compability.
     *
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /* @var ServiceLocatorInterface $serviceLocator */
        $serviceLocator = $serviceLocator->getServiceLocator();

        $this->__invoke($serviceLocator, "ModuleOptionsFactory");
    }
}
