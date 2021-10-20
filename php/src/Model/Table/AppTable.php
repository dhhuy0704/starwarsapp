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

    public function get_all(): array
    {
        $url = ROOT_API .'/'. $this->_table;
        $res = do_request($url);
        pr($res);
        exit;
        return [];
    }
}
