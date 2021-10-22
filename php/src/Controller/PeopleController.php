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
        $res = $this->Films->get_all()->results;
        asort($res);
        $this->set('films', $res);
    }

    public function view($id = null): void
    {
        $res = $this->Films->get_one($id);
        $this->set('film_info', $res);
    }

    /**
     * Customize functions
     */
}
