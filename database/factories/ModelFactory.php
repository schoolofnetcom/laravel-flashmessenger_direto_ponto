<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$courses = [
    'Iniciando com Angular 2',
    'Angular 2 Intermediário',
    'Angular 2 Avançado',
    'ZF2 Essentials',
    'Vue.js',
    'Ember.js',
    'Backbone.js',
    'React.js',
    'JQuery',
    'JQuery-UI',
    'PHP7',
    'Python',
    'Ruby',
    'Ruby on Rails',
    'C#',
    'PHPStorm',
    'Netbeans',
    'HTML5',
    'CSS3',
    'Laravel 5',
    'CakePHP',
    'Silex',
    'Yii2',
    'FuelPHP',
    'CodeIgniter',
    'Symfony',
    'Phalcon',
    'Doctrine',
    'Propel',
    'Twig',
    'Blade',
    'Java',
    'JPA',
    'Hibernate',
    'Scrum',
    'TDD',
    'PHPUnit',
    'XP',
    'DDD'
];

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Course::class, function (Faker\Generator $faker) use ($courses) {
    return [
        'title' => $courses[array_rand($courses, 1)],
        'description' => $faker->paragraph(3),
    ];
});


