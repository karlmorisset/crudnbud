<?php

namespace App\Controller;

use App\Model\BeerManager;

class BeerController extends AbstractController
{
    public function index()
    {
        $beerManager = new BeerManager();

        $beers = $beerManager->selectAll('name');

        return $this->twig->render('Beer/index.html.twig', ['beers' => $beers]);
    }

    
    public function show(int $id): string
    {
        $beerManager = new BeerManager();

        $beers = $beerManager->selectOneById($id);

        return $this->twig->render('Beer/show.html.twig', ['beers' => $beers]);
    }

    public function add()
    {
       return $this->twig->render('Beer/add.html.twig');
       //j'ai faim On nourrit les views  🍔 🍻
       
    }


    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // clean $_POST data
            $beer = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, insert and redirection
            $beerManager = new BeerManager();
            $beer = $beerManager->insert($beer);
            header('Location:/');
        }
    }

}

// $itemManager = new ItemManager();
//         $items = $itemManager->selectAll('title');


//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

//         return $this->twig->render('Item/index.html.twig', ['items' => $items]);

