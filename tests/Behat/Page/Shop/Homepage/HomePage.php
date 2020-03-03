<?php


namespace App\Tests\Behat\Page\Shop\Homepage;


use Behat\Mink\Exception\ElementNotFoundException;
use Sylius\Behat\Page\Shop\HomePage as BaseHomePage;

class HomePage extends BaseHomePage implements HomePageInterface
{
    public function getAlertWithClass(string $className)
    {
        try {
            return $this->getElement('alert')->find('css', ".$className");
        } catch (ElementNotFoundException $e) {
            return null;
        }
    }

    protected function getDefinedElements(): array
    {
        return array_merge(parent::getDefinedElements(), [
            'alert' => '#alert',
            'header_buttons' => '#header-buttons'
        ]);
    }

    public function waitForProductButtonToAppear(string $className)
    {
        $this->getSession()->wait(5000,
            "$('#header-buttons .$className').length > 0"
        );
    }

    public function clickOnButton(string $className)
    {
        $el = $this->getElement('header_buttons')->find('css', ".$className");

        $el->click();
    }
}
