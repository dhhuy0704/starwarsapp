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
                $film_characters->$id = $character;
            }
        }
        return $film_characters;
    }
}
