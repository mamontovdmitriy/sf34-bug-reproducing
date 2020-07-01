<?php


namespace App\Controller;

use App\Form\MyFileForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    public function index(Request $request)
    {
        $form = $this->createForm(MyFileForm::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump('ok', $form->getData());
            die;
        }

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
