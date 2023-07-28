<?php

namespace App\Controller\Api;

use App\Model\LocationModel;
use App\Model\VacancyModel;
use App\Service\LocationCounter;
use Core\Response;
use Lib\TreeStructure;

class LocationController extends BaseApiController
{
    public function index(): void
    {
        $locationsMock = LocationModel::mock();
        $vacanciesMock = VacancyModel::mock();

        $locationsWithCountVacancies = LocationCounter::countUsesInVacancies($locationsMock, $vacanciesMock);
        $locationTree = TreeStructure::create($locationsWithCountVacancies);

        Response::json($locationTree);
    }
}