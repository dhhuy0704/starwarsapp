<?php

declare(strict_types=1);

namespace App\Controller;

class FilmsController extends AppController
{

    /**
     * Basic CURD
     */
    public function index(): void
    {
        $keyword = $this->request->getQuery('search');
        $page = $this->request->getQuery('page') ?? 1;
        $res = $this->Films->get_all($page, $keyword)->results;

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

}
