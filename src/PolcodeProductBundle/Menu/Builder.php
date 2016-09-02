<?php
namespace PolcodeProductBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Products', array('route' => 'product_index'));
        $menu->addChild('Login', array('route' => 'fos_user_security_login'));
        $menu->addChild('Logout', array('route' => 'fos_user_security_logout'));

        return $menu;
    }
}