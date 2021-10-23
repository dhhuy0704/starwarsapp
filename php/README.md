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
- Films list page that displays list of all films [Film list](http://starwars.tommydo.ca/films)
- Film detail page that displays film metadata, characters, vehicles, planets, etc. [Film detail](http://starwars.tommydo.ca/films/view/1)

## Bonus Points
- Implement one or more detail pages for characters, vehicles, planets, etc.
- The detail pages should be accessible from the film detail page
  - Character [Characters list](http://starwars.tommydo.ca/people) | [Luke Skywalker](http://starwars.tommydo.ca/people/view/1)
  - Vehicle [Vehicles list](http://starwars.tommydo.ca/vehicles) | [Sand Crawler](http://starwars.tommydo.ca/vehicles/view/4)
  - Planet [Planets list](http://starwars.tommydo.ca/planets) | [Tatooine](http://starwars.tommydo.ca/planets/view/1)
- Implement client side search filter on the films list page to filter displayed films by title, or description [Search for "A new hope"](http://starwars.tommydo.ca/films?search=new)

## Questions
1. Assuming the Star Wars API was slow, what are some optimizations that could be implemented to improve the user experience?

```
My solution to this project is using Memcached to stores user browsing data. It will helps users could play around with entities more faster each time they come back to previous information.
```

2. Any improvements you would make to your application?
```
- Using Memcached is good for performance, avoid fetching much data from API. However, it is also a weakness, every time the API has new updates, the app cannot know and update cache by itself. To improve this, I will integrate caching manager which is allowing users to handle clear cache manually as well as set a timer to refresh cache data.

- Some of the characters' names in the Film details are not shown their name correctly. This is because the get list API only returns 10 records per page. Moreover, on every list, I did not integrate paging tab, that allows the user see more records.
```