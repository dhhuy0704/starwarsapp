<?php

declare(strict_types=1);

namespace App\Model\Table;

use App\Model\Table\AppTable;

class FilmsTable extends AppTable
{

    public function initialize(array $config): void
    {
        $this->setTable('films');
    }

}
