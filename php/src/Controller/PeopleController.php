<?php
declare(strict_types=1);

namespace App\Controller;
class PeopleController extends AppController
{

    /**
     * Basic CURD
     */
    public function index(): void
    {
        $res = $this->People->get_all()->results;
        asort($res);
        $this->set('people', $res);
    }

    public function view($id = null): void
    {
        $res = $this->People->get_one($id);

        $res->films    = $this->build_film_list();
        $res->vehicles = $this->build_vehicle_list($res->vehicles);

        $this->set('person_info', $res);
    }

    /**
     * Customize functions
     */
}
