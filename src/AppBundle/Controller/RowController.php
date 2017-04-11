<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Cell;
use AppBundle\Entity\Row;
use AppBundle\Form\Type\RowType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

include '/home/jmill/test/symfonytest/src/AppBundle/database.php';

class RowController extends Controller
{
    /**
     * @Route("/row")
     */

     public function newAction(Request $request)
     {
         $row = Row::find(1);
//         echo $row;
//         echo $row->cells;

         $form = $this->createForm(RowType::class, $row);

         $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
          echo $row->cells;
          $row->save();
          foreach ($row->cells as $cell)
            $cell->save();

          return $this->redirectToRoute('row_update_success');
    }

    return $this->render('default/row_update.html.twig', array(
        'form' => $form->createView(),
    ));
}

    /**
     * @Route("/row_update_success", name="row_update_success")
     */
    public function successAction(Request $request)
    {
       return new Response(
            '<html><body>Yay! <a href="/row"> Row updated! </a> </body></html>'
            );

    }
}
