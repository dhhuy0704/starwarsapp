<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use stdClass;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
        $this->load_const();
    }

    /**
     * Get constants from ENV
     */
    private function load_const()
    {
        define('ROOT_API', env('ROOT_API'));
    }

    /**
     * Customize functions
     */
    public function build_film_list(): object
    {
        $this->loadModel('Films');
        $films = $this->Films->get_films_list();
        return $films;
    }

    public function build_character_list($data): object
    {
        $this->loadModel('People');
        $people = $this->People->get_people_list();

        $film_characters = new stdClass();
        foreach ($data as $item) {
            $id = get_id_from_url($item);
            if (isset($people->$id)) {
                $film_characters->$id = $people->$id;
            } else {
                $film_characters->$id = str_replace(ROOT_API.'/', '', $item);
            }
        }
        return $film_characters;
    }

    public function build_vehicle_list($data): object
    {
        $this->loadModel('Vehicles');
        $vehicles = $this->Vehicles->get_vehicles_list();

        $film_vehicles = new stdClass();
        foreach ($data as $item) {
            $id = get_id_from_url($item);
            if (isset($vehicles->$id)) {
                $film_vehicles->$id = $vehicles->$id;
            } else {
                $film_vehicles->$id = str_replace(ROOT_API.'/', '', $item);
            }
        }
        return $film_vehicles;
    }

    public function build_planet_list($data): object
    {
        $this->loadModel('Planets');
        $planets = $this->Planets->get_planets_list();

        $film_planets = new stdClass();
        foreach ($data as $item) {
            $id = get_id_from_url($item);
            if (isset($planets->$id)) {
                $film_planets->$id = $planets->$id;
            } else {
                $film_planets->$id = str_replace(ROOT_API.'/', '', $item);
            }
        }
        return $film_planets;
    }

}
