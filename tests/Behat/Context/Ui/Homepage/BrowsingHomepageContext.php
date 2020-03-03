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

    /**
     * @When I visit homepage
     */
    public function iVisitHomepage()
    {
        $this->homePage->open();
    }

    /**
     * @When I wait for the link with class :className to appear
     */
    public function iWaitForTheLinkWithClassToAppear($className)
    {
        $this->homePage->waitForProductButtonToAppear($className);
    }

    /**
     * @When I click on link with class :className
     */
    public function iClickOnTheLink($className)
    {
        $this->homePage->clickOnButton($className);
    }



}
