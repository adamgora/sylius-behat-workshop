<?php

namespace App\Listener;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

class AdminMainMenuListener
{
    public function addUnitOfMeasurementMenuItem(MenuBuilderEvent $event): void
    {
        $configSubMenu = $event->getMenu()->getChild('configuration');

        $configSubMenu
            ->addChild('units_of_measurement', ['route' => 'app_admin_unit_of_measurement_index'])
            ->setLabel('Units')
            ->setLabelAttribute('icon', 'address card outline');
    }
}
