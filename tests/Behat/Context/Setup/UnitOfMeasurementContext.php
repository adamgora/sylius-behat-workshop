<?php

namespace App\Tests\Behat\Context\Setup;

use App\Entity\UnitOfMeasurement;
use Behat\Behat\Context\Context;
use Sylius\Behat\Service\SharedStorageInterface;
use Sylius\Component\Resource\Factory\FactoryInterface;
use Sylius\Component\Resource\Repository\RepositoryInterface;

class UnitOfMeasurementContext implements Context
{
    /**
     * @var SharedStorageInterface
     */
    private $sharedStorage;

    /**
     * @var FactoryInterface
     */
    private $unitFactory;

    /**
     * @var RepositoryInterface
     */
    private $unitRepository;

    public function __construct(
        SharedStorageInterface $sharedStorage,
        RepositoryInterface $unitRepository,
        FactoryInterface $unitFactory
    )
    {
        $this->sharedStorage = $sharedStorage;
        $this->unitFactory = $unitFactory;
        $this->unitRepository = $unitRepository;
    }

    /**
     * @Given the store has unit :unitName with symbol :unitSymbol
     * @param $unitName
     * @param $unitSymbol
     */
    public function theStoreHasUnitWithSymbol($unitName, $unitSymbol)
    {
        $unit = $this->createUnit($unitName, $unitSymbol);

        $this->saveUnit($unit);
    }

    private function createUnit($unitName, $unitSymbol)
    {
        /** @var UnitOfMeasurement $unit $ */
        $unit = $this->unitFactory->createNew();
        $unit->setName($unitName);
        $unit->setSymbol($unitSymbol);

        return $unit;
    }

    private function saveUnit(UnitOfMeasurement $unitOfMeasurement)
    {
        $this->sharedStorage->set(sprintf('unit_of_measurement_%s', $unitOfMeasurement->getSymbol()), $unitOfMeasurement);
        $this->unitRepository->add($unitOfMeasurement);
    }

}
