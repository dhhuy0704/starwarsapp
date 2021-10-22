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
        $res = $this->Films->get_all()->results;
        asort($res);
        $this->set('planets', $res);
    }

    public function view($id = null): void
    {
        $res = $this->Films->get_one($id);
        $this->set('planet_info', $res);
    }

    /**
     * Customize functions
     */
}
