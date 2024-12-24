<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/blogs', function () {

    $blogs = [
        [
            'title' => 'Design tips for designers that cover everything you need',
            'image' => 'img/blog-1.png',
            'text-summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
            'category' => 'STARTUP'
        ],
        [
            'title' => 'How to build rapport with your web design clients',
            'image' => 'img/blog-2.png',
            'text-summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
            'category' => 'BUSINESS'
        ],
        [
            'title' => 'Logo design trends to avoid in 2022',
            'image' => 'img/blog-3.png',
            'text-summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
            'category' => 'STARTUP'
        ],
        [
            'title' => '8 Figma design systems you can download for free today',
            'image' => 'img/blog-4.png',
            'text-summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
            'category' => 'TECHNOLOGY'
        ],
        [
            'title' => 'Font sizes in UI design: The complete guide to follow',
            'image' => 'img/blog-5.png',
            'text-summary' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.',
            'category' => 'ECONOMY'
        ]
    ];

    $categories = [
        [
            'name' => 'Business',
            'image' => 'img/business-icon.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ],
        [
            'name' => 'Startup',
            'image' => 'img/startup-icon.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ],
        [
            'name' => 'Economy',
            'image' => 'img/economy-icon.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ],
        [
            'name' => 'Technology',
            'image' => 'img/tech-icon.png',
            'desc' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.'
        ]
    ];

    return view('blogs', compact('blogs', 'categories'));
})->name('blogs');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

