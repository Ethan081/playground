<?php


namespace App\Controller;

use App\Repository\ParcRepository;
use App\Repository\PicturesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PlaygroundController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(ParcRepository $parcRepository, PicturesRepository $picturesRepository){

        $parcs = $parcRepository->findAll();
        $pictures = $picturesRepository->findAll();
        return $this->render('index.html.twig',
            [
            'parcs' => $parcs,
            'images'=>$pictures
        ]
        );
    }
}