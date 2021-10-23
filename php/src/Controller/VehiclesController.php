<?php
declare(strict_types=1);

namespace App\Controller;

class VehiclesController extends AppController
{

    /**
     * Basic CURD
     */
    public function index(): void
    {
        $res = $this->Vehicles->get_all()->results;
        asort($res);
        $this->set('vehicles', $res);
    }

    public function view($id = null): void
    {
        $res = $this->Vehicles->get_one($id);

        $res->films = $this->build_film_list();
        $this->set('vehicle_info', $res);
    }

    /**
     * Customize functions
     */
}
