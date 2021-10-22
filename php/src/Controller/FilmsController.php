<?php

declare(strict_types=1);

namespace App\Controller;

use stdClass;

class FilmsController extends AppController
{

    /**
     * Basic CURD
     */
    public function index(): void
    {
        $res = $this->Films->get_all()->results;
        usort($res, function ($a, $b) {
            return strcmp((string) $a->episode_id, (string) $b->episode_id);
        });
        $this->set('films', $res);
    }

    public function view($id = null): void
    {
        $res = $this->Films->get_one($id);

        $res->characters = $this->build_character_list($res->characters);
        $res->vehicles   = $this->build_vehicle_list($res->vehicles);
        $res->planets    = $this->build_planet_list($res->planets);
        $this->set('film_info', $res);
    }

    /**
     * Customize functions
     */
    private function build_character_list($characters): object
    {
        $this->loadModel('People');
        $people = $this->People->get_people_list();

        $film_characters = new stdClass();
        foreach ($characters as $character) {
            $id = get_id_from_url($character);
            if (isset($people->$id)) {
                $film_characters->$id = $people->$id;
            } else {
                $film_characters->$id = str_replace(ROOT_API.'/', '', $character);
            }
        }
        return $film_characters;
    }

    private function build_vehicle_list($vehicles): object
    {
        $this->loadModel('Vehicles');
        $vehicles = $this->Vehicles->get_vehicles_list();

        $film_vehicles = new stdClass();
        foreach ($vehicles as $vehicle) {
            $id = get_id_from_url($vehicle);
            if (isset($vehicles->$id)) {
                $film_vehicles->$id = $vehicles->$id;
            } else {
                $film_vehicles->$id = str_replace(ROOT_API.'/', '', $vehicle);
            }
        }
        return $film_vehicles;
    }

    private function build_planet_list($vehicles): object
    {
        $this->loadModel('Planets');
        $planets = $this->Planets->get_planets_list();

        $film_planets = new stdClass();
        foreach ($planets as $planet) {
            $id = get_id_from_url($planet);
            if (isset($vehicles->$id)) {
                $film_planets->$id = $vehicles->$id;
            } else {
                $film_planets->$id = str_replace(ROOT_API.'/', '', $planet);
            }
        }
        return $film_planets;
    }
}
