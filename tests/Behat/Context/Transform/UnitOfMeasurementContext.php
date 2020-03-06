<?php

namespace App\Tests\Behat\Context\Transform;

use Behat\Behat\Context\Context;
use Sylius\Component\Resource\Repository\RepositoryInterface;
use Webmozart\Assert\Assert;

class UnitOfMeasurementContext implements Context
{
    /**
     * @var RepositoryInterface
     */
    private $unitsRepository;

    public function __construct(
        RepositoryInterface $unitsRepository
    ){
        $this->unitsRepository = $unitsRepository;
    }

    /**
     * @Transform :unitOfMeasurement
     * @Transform /unit with name "([^"]+)"/
     */
    public function getUnitByName(string $name)
    {
        $unit = $this->unitsRepository->findOneBy(['name' => $name]);
        Assert::notNull(
            $unit,
            sprintf('Subcontractor with name %s does not exist.', $name)
        );

        return $unit;
    }
}
