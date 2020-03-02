<?php

namespace App\Tests\Behat\Context\Ui\Homepage;

use Behat\Behat\Context\Context;

class BrowsingHomepageContext implements Context
{
    /**
     * @Then the alert with class :className should be visible
     */
    public function theAlertWithClassShouldBeVisible(string $className)
    {
        throw new PendingException();
    }

}
