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

    public function get_all($page = 1, $keyword = ""): object
    {
        $url = ROOT_API . '/' . $this->_table .'/?page=' . $page;
        if(!empty($keyword)) {
            $url .= '&search=' . $keyword;
        }
        $res = do_request($url);
        $res = json_decode($res);
        return $res;
    }

    public function get_one($id): object
    {
        $url = ROOT_API . '/' . $this->_table . '/' . $id;
        $res = do_request($url);
        $res = json_decode($res);
        return $res;
    }

}
