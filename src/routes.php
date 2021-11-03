<?php

// list of accessible routes of your application, add every new route here
// key : route to match
// values : 1. controller name
//          2. method name
//          3. (optional) array of query string keys to send as parameter to the method
// e.g route '/item/edit?id=1' will execute $itemController->edit(1)
return [
    '' => ['BeerController', 'index',],
    'beers/show' => ['BeerController', 'show', ['id']],
    'beers/add' => ['BeerController', 'add',],
    'beers/create' => ['BeerController', 'create',],

    // 'items/edit' => ['ItemController', 'edit', ['id']],
    // 'items/show' => ['ItemController', 'show', ['id']],
    // 'items/delete' => ['ItemController', 'delete',],


];

//Bonjour

//Qui es-tu ?

// Je suis ton père

// NOOOOOOOOOOOOOOEL!  ☃ 

// ¯\_(ツ)_/¯ <3

// ヽ(〃＾▽＾〃)ﾉ 

//vive la bière et le muscadet