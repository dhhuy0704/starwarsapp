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
            <a href="https://cakephp.org/" target="_blank" rel="noopener">
                <img src="https://img.icons8.com/ios/150/000000/stormtrooper.png"/>
            </a>
            <h1>
                Welcome to STARWARS App
            </h1>
            <h4>built on CakePHP Strawberry (🍓)</h4>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <!-- <div class="message default text-center"></div> -->
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
                                        <a href="/people/view/1" target="_blank">Character detail</a>
                                    </li>
                                    <li>
                                        Vehicle
                                        <a href="/vehicles/view/1" target="_blank">Vehicle detail</a>
                                    </li>
                                    <li>
                                        Planet
                                        <a href="/planets/view/1" target="_blank">Planet detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                - Implement client side search filter on the films list page to filter displayed films by title, or description
                            </li>

                            <hr>
                            <h4>Questions</h4>
                            <li>
                                - Assuming the Star Wars API was slow, what are some optimizations that could be implemented to improve the user experience?
                            </li>
                            <li>
                                - Any improvements you would make to your application?
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
</body>
</html>
