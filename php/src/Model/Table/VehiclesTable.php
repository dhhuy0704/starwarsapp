<?php

declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Table\AppTable;
use stdClass;

class VehiclesTable extends AppTable
{

    public function initialize(array $config): void
    {
        $this->setTable('vehicles');
    }

    public function get_vehicles_list(): object
    {
        /**
         * Note:
         * API of vehicles returns only 10 records per page request.
         */
        $res = $this->get_all()->results;
        $new_res = new stdClass();
        foreach ($res as $value) {
            $id = get_id_from_url($value->url);
            $new_res->$id = $value->name;
        }
        return $new_res;
    }
}
