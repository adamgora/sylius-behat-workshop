<?php

namespace App\Tests\Behat\Context\Ui\Homepage;

use App\Tests\Behat\Page\Shop\Homepage\HomePageInterface;
use Behat\Behat\Context\Context;

class BrowsingHomepageContext implements Context
{
    /**
     * @var HomePageInterface
     */
    private $homePage;

    public function __construct(HomePageInterface $homePage)
    {
        $this->homePage = $homePage;
    }

    /**
     * @Then the alert with class :className should be visible
     */
    public function theAlertWithClassShouldBeVisible(string $className)
    {
        throw new PendingException();
    }

}
