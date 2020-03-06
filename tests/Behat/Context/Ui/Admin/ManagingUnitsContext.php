<?php


namespace App\Tests\Behat\Context\Ui\Admin;

use App\Entity\UnitOfMeasurement;
use Behat\Behat\Context\Context;
use FriendsOfBehat\PageObjectExtension\Page\UnexpectedPageException;
use App\Tests\Behat\Page\Admin\UnitOfMeasurement\IndexPageInterface;
use Webmozart\Assert\Assert;

class ManagingUnitsContext implements Context
{
    /**
     * @var IndexPageInterface
     */
    private $indexPage;

    public function __construct(
        IndexPageInterface $indexPage
    ) {
        $this->indexPage = $indexPage;
    }

    /**
     * @When I want to browse units of the store
     */
    public function iWantToBrowseUnitsOfTheStore()
    {
        $this->indexPage->open();
    }

    /**
     * @Then I should see :count units in the list
     */
    public function iShouldSeeUnitsInTheList($count)
    {
        Assert::same($this->indexPage->countItems(), (int) $count);
    }

    /**
     * @Then I should see the unit :unitOfMeasurement in the list
     */
//    public function unitShouldAppearInTheStore(UnitOfMeasurement $unitOfMeasurement)
//    {
//        $this->indexPage->open();
//
//        Assert::true($this->indexPage->isSingleResourceOnPage(['symbol' => $unitOfMeasurement->getSymbol()]));
//    }




}
