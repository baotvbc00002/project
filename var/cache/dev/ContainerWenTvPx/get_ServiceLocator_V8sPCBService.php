<?php

namespace ContainerWenTvPx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V8sPCBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.v8sP_cB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.v8sP_cB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CartController::add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController::remove' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController::update' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\InvoiceController::delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\InvoiceController::list_inv' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\OrderController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SanPhamController::delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SanPhamController::edit' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\SanPhamController::index' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\SanPhamController::listSPinCate' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SanPhamController::list_sp' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserManagerController::add' => ['privates', '.service_locator.GhWdsZd', 'get_ServiceLocator_GhWdsZdService', true],
            'App\\Controller\\UserManagerController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CartController:add' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController:remove' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\CartController:update' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\InvoiceController:delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\InvoiceController:list_inv' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\OrderController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.e_4zbH4', 'get_ServiceLocator_E4zbH4Service', true],
            'App\\Controller\\SanPhamController:delete' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SanPhamController:edit' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\SanPhamController:index' => ['privates', '.service_locator.fJMEPx3', 'get_ServiceLocator_FJMEPx3Service', true],
            'App\\Controller\\SanPhamController:listSPinCate' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SanPhamController:list_sp' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserManagerController:add' => ['privates', '.service_locator.GhWdsZd', 'get_ServiceLocator_GhWdsZdService', true],
            'App\\Controller\\UserManagerController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CartController::add' => '?',
            'App\\Controller\\CartController::remove' => '?',
            'App\\Controller\\CartController::update' => '?',
            'App\\Controller\\InvoiceController::delete' => '?',
            'App\\Controller\\InvoiceController::list_inv' => '?',
            'App\\Controller\\OrderController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SanPhamController::delete' => '?',
            'App\\Controller\\SanPhamController::edit' => '?',
            'App\\Controller\\SanPhamController::index' => '?',
            'App\\Controller\\SanPhamController::listSPinCate' => '?',
            'App\\Controller\\SanPhamController::list_sp' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserManagerController::add' => '?',
            'App\\Controller\\UserManagerController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CartController:add' => '?',
            'App\\Controller\\CartController:remove' => '?',
            'App\\Controller\\CartController:update' => '?',
            'App\\Controller\\InvoiceController:delete' => '?',
            'App\\Controller\\InvoiceController:list_inv' => '?',
            'App\\Controller\\OrderController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SanPhamController:delete' => '?',
            'App\\Controller\\SanPhamController:edit' => '?',
            'App\\Controller\\SanPhamController:index' => '?',
            'App\\Controller\\SanPhamController:listSPinCate' => '?',
            'App\\Controller\\SanPhamController:list_sp' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserManagerController:add' => '?',
            'App\\Controller\\UserManagerController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
