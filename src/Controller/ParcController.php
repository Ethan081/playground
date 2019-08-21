<?php


namespace App\Controller;


use App\Repository\ParcRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ParcController extends AbstractController
{
    /**
     * @Route("/parc/show/{id}", name="parcshow")
     */
    public function parcShow(ParcRepository $parcRepository, $id)
    {
        $parcs = $parcRepository->find($id);

        //dump($book);die;
        return $this->render('parcShow.html.twig',
            [
                'parcs'=>$parcs
            ]);

    }

}