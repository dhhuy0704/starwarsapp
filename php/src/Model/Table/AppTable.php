<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;

class AppTable extends Table
{

    public function initialize(array $config): void
    {
        parent::initialize($config);
    }

    public function get_all(): object
    {
        $url = ROOT_API . '/' . $this->_table;
        $res = do_request($url);
        $res = json_decode($res);
        return $res;
    }

}
