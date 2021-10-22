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
        $this->set('person_info', $res);
    }

    /**
     * Customize functions
     */
}
