<?php
declare(strict_types=1);

namespace App\Controller;

class PlanetsController extends AppController
{

    /**
     * Basic CURD
     */
    public function index(): void
    {
        $res = $this->Planets->get_all()->results;
        asort($res);
        $this->set('planets', $res);
    }

    public function view($id = null): void
    {
        $res = $this->Planets->get_one($id);

        $res->residents = $this->build_character_list($res->residents);
        $res->films = $this->build_film_list($res->films);
        $this->set('planet_info', $res);
    }

    /**
     * Customize functions
     */
}
