<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Cell;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

include '/home/jmill/test/symfonytest/src/AppBundle/database.php';
//include '../database.php';


class CellController extends Controller
{
    /**
     * @Route("/cell")
     */

     public function newAction(Request $request)
     {
         $cell = Cell::find(1);
         echo $cell;

         $form = $this->createFormBuilder($cell)
          ->add('value', TextType::class)
          ->add('save', SubmitType::class, array('label' => 'Update Task'))
          ->getForm();

          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {

          $cell->save();

          return $this->redirectToRoute('cell_update_success');
    }

    return $this->render('default/cell_update.html.twig', array(
        'form' => $form->createView(),
    ));
}

    /**
     * @Route("/cell_update_success", name="cell_update_success")
     */
    public function successAction(Request $request)
    {
       return new Response(
            '<html><body>Yay! <a href="/cell"> Cell updated! </a> </body></html>'
            );

    }
}
