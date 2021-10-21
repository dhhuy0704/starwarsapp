<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class FilmsController extends AppController
{

    public function index(): void
    {
        $res = $this->Films->get_all()->results;
        asort($res);
        $this->set('films', $res);
    }
}
