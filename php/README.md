# Star Wars App on CakePHP

## Config information

- PHP 8.0

## Installation

1. $ cd /var/www/starwarsapp/php
2. $ composer install
3. $ sudo mkdir logs
4. $ sudo chmod -r 777 tmp
5. $ sudo chmod -r 777 logs

## Setup ENV
- Setup default config from CakePHP
- Setup API config for app
```
export ROOT_API="https://swapi.dev/api"
```

## Setup Memcached server
```
// Ubuntu 20.04
$ sudo apt update
$ sudo apt install memcached libmemcached-tools
$ sudo apt install php-memcached

$ sudo service memcached start
Starting memcached: memcached.

$ sudo service memcached status
memcached: memcached (pid XXX) is running
```

## Start app
Open browser and visit: http://localhost

## Requirements
- Films list page that displays list of all films [http://localhost/films](http://localhost/films)

- Film detail page that displays film metadata, characters, vehicles, planets, etc. [http://localhost/films/view/1](http://localhost/films/view/1)

### Bonus Points
- Implement one or more detail pages for characters, vehicles, planets, etc. The detail pages should be accessible from the film detail page
- Implement client side search filter on the films list page to filter displayed films by title, or description

### Questions
- Assuming the Star Wars API was slow, what are some optimizations that could be implemented to improve the user experience?
- Any improvements you would make to your application?
