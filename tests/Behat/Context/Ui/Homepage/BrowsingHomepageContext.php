<?php

namespace App\Tests\Behat\Context\Ui\Homepage;

use App\Tests\Behat\Page\Shop\Homepage\HomePageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

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
        $alert = $this->homePage->getAlertWithClass($className);

        Assert::notNull($alert, sprintf("Alert with class %s not found", $className));
    }

}
