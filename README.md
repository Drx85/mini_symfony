# Mini Symfony
Basic framework which aim to help me to understand how work actual frameworks like Symfony.

## About The Project

Simple framework based on Symfony components and architecture with controllers, events, cache, templating.
Your comments and suggestions are welcome.

### Built With

*   🐘️ PHP 8.0.9
*   ⛵ phpMyAdmin 5.0.2
*   ✒️Apache 2.4.46
*   ⛕️Git 2.31.1.windows.1

### Code quality

Codacy : [![Codacy Badge](https://app.codacy.com/project/badge/Grade/2075f1b4eace4c74acdaeb60bbac5f35)](https://www.codacy.com/gh/Drx85/mini_symfony/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Drx85/mini_symfony&amp;utm_campaign=Badge_Grade)

Code Climate : [![Maintainability](https://api.codeclimate.com/v1/badges/83fbe0927ce588c04cc2/maintainability)](https://codeclimate.com/github/Drx85/mini_symfony/maintainability)

## Getting Started

To get a copy up and running follow these simple steps.

### PREREQUISITES

### Server

*   PHP > 8.0.9
*   SMTP server or XAMPP/WAMP for local use

### Libraries

*   Libraries will be installed using Composer

### INSTALLATION

### Clone / Download

1. Git clone the repository from this page. **See** [GitHub Documentation](https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/cloning-a-repository-from-github/cloning-a-repository)

### Install all dependencies
1.  Install Composer if you don't have it yet. **See** [Composer Documentation](https://getcomposer.org/download/)
2.  In your CMD, move on your project directory using cd command :
```sh
cd your/directory
```

3.  Run :
```sh
composer install
```
All dependencies should be installed in a vendor directory.

### Server (local only)

1.  To start the server, run
```sh
symfony s:start
```

### USAGE

### Controller

In **src/Controller** (namespace **App\Controller**), some controllers are already created as example, you can erase them and create your own 🧙‍♂️ Each route need to return a new Response. Do not forget to add your routes in **src/routes.php** : you can reuse the structure/logic of routes already here as example.

### Event

To extends Simple.php (our framework logic file), some events are dispatched at keys points and can be triggered from anywhere. To do that, you have to create a new EventDispatcher (namespace **Symfony\Component\EventDispatcher\EventDispatcher**) and call *addListener()* to it with as first parameter the name of the event (depends on **when** you want to listen : kernel.request', 'kernel.controller', 'kernel.arguments', 'kernel.response'), and as second parameter a function which contains you logic. This function must receive the corresponding class in Event folder (namespace **Framework\Event**). Read these class to know which objects are sent in your listener.

*   Example : $dispatcher->addListener('kernel.controller', function(ControllerEvent $e) {your logic} );

## Contact

Cédric Deperne - [cedric@deperne.fr](mailto:cedric@deperne.fr)

[Project Link](https://github.com/Drx85/mini_symfony)
