<?php

namespace App\Service;

class LocationCounter
{
    /**
     * Calculate the number of locations used in vacancies
     * @param object[] $locations
     * @param object[] $vacancies
     * @return object[]
     */
    public static function countUsesInVacancies(array $locations, array $vacancies): array
    {
        $vacancyCounts = array_count_values(array_column($vacancies, 'location_id'));
        foreach ($locations as $location) {
            $location->count_vacancy = $vacancyCounts[$location->id] ?? 0;
        }

        return $locations;
    }
}