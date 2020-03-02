<?php

namespace App\Tests\Behat\Page\Shop\Homepage;

interface HomePageInterface extends \Sylius\Behat\Page\Shop\HomePageInterface
{
    public function getAlertWithClass(string $className);
}
