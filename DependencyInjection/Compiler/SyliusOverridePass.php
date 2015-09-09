<?php

namespace DoS\ResourceBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SyliusOverridePass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $container->setParameter(
            'sylius.expression_language.class',
            $container->getParameter('dos.expression_language.class')
        );

        $container->setParameter(
            'sylius.controller.configuration.class',
            $container->getParameter('dos.resource_configuration.class')
        );
    }
}