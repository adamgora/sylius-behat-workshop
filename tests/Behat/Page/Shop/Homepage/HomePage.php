<?php


namespace App\Tests\Behat\Page\Shop\Homepage;


use Behat\Mink\Exception\ElementNotFoundException;
use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

class HomePage extends BaseHomePage implements HomePageInterface
{
    public function getAlertWithClass(string $className)
    {
        $alert = $this->getElement('alert')->find('css', ".$className");

        if (!$alert) {
            throw new ElementNotFoundException($this->getSession());
        }

        return $alert;
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'alert' => '#alert',
        ]);
    }
}
