<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="https://swapi.dev/documentation" target="_blank" rel="noopener">
                <img src="https://img.icons8.com/ios/150/000000/stormtrooper.png"/>
            </a>
            <h1>
                Welcome to STARWARS App
            </h1>
            <h4>built on <a href="https://cakephp.org/">CakePHP</a> Strawberry (🍓)</h4>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="message default text-center">
                            This project is using for interviewing, this is a simple app with some fetching data from API.<br>
                            Written by TommyDo (dhhuy0704@hotmail.com).
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="">
                        <ul>
                            <h4>Requirements</h4>
                            <li>
                                - Films list page that displays list of all films
                                <a href="/films" target="_blank">Film list</a>
                            </li>
                            <li>
                                - Film detail page that displays film metadata, characters, vehicles, planets, etc.
                                <a href="/films/view/1" target="_blank">Film detail</a>
                            </li>

                            <hr>
                            <h4>Bonus Points</h4>
                            <li>
                                - Implement one or more detail pages for characters, vehicles, planets, etc.
                                <li>
                            <li>
                                - The detail pages should be accessible from the film detail page
                            <li>
                            <li>
                                <ul>
                                    <li>
                                        Character
                                        <a href="/people" target="_blank">Characters list</a> |
                                        <a href="/people/view/1" target="_blank">Luke Skywalker</a>
                                    </li>
                                    <li>
                                        Vehicle
                                        <a href="/vehicles" target="_blank">Vehicles list</a> |
                                        <a href="/vehicles/view/4" target="_blank">Sand Crawler</a>
                                    </li>
                                    <li>
                                        Planet
                                        <a href="/planets" target="_blank">Planets list</a> |
                                        <a href="/planets/view/1" target="_blank">Tatooine</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                - Implement client side search filter on the films list page to filter displayed films by title, or description
                                <a href="/films?search=new" target="_blank">Search for "A new hope"</a>
                            </li>

                            <hr>
                            <h4>Questions</h4>
                            <li>
                                - Assuming the Star Wars API was slow, what are some optimizations that could be implemented to improve the user experience?
                            </li>
                            <ol>
                                <p>
                                    <i>
                                    My solution to this project is using Memcached to stores user browsing data. It will helps users could play around with entities more faster each time they come back to previous information.
                                    </i>
                                </p>
                            </ol>
                            <li>
                                - Any improvements you would make to your application?
                            </li>
                            <ol>
                                <i>
                                    1. Using Memcached is good for performance, avoid fetching much data from API. However, it is also a weakness, every time the API has new updates, the app cannot know and update cache by itself. To improve this, I will integrate caching manager which is allowing users to handle clear cache manually as well as set a timer to refresh cache data.
                                </i>
                            </ol>
                            <ol>
                                <i>
                                2. Some of the characters' names in the Film details are not shown their name correctly. This is because the get list API only returns 10 records per page. Moreover, on every list, I did not integrate paging tab, that allows the user see more records.
                                </i>
                            </ol>
                            <h4>Review my code on
                            <a href="https://github.com/dhhuy0704/starwarsapp" target="_blank">Github.com</a>
                            </h4>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>
