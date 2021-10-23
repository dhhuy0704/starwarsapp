<?php

declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Table\AppTable;
use stdClass;

class FilmsTable extends AppTable
{

    public function initialize(array $config): void
    {
        $this->setTable('films');
    }

    public function get_films_list(): object
    {
        $res = $this->get_all()->results;
        $new_res = new stdClass();
        foreach ($res as $value) {
            $id = get_id_from_url($value->url);
            $new_res->$id = $value->title;
        }
        return $new_res;
    }
}
