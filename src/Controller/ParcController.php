<?php


namespace App\Controller;


use App\Form\ParcType;
use App\Repository\ParcRepository;
use Symfony\Component\Routing\Annotation\Route;
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

    /**
     * @Route("/new/parc", name="new_parc")
     */
    public function newParc(){
        $form = $this->createForm(ParcType::class);

        return $this->render('form_parc.html.twig',
            [
                'parcForm'=> $form->createView()

            ]);
    }

}