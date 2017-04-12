<?php
// src/AppBundle/Controller/DefaultController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Cell;
use AppBundle\Entity\Board;
use AppBundle\Form\Type\BoardType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

include '/home/jmill/test/symfonytest/src/AppBundle/database.php';

class BoardController extends Controller
{
    /**
     * @Route("/board")
     */

     public function newAction(Request $request)
     {
         $board = Board::find(1);
        // echo $board;
        // echo $board->cells;

         $form = $this->createForm(BoardType::class, $board);

         $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {

          $board->save();
          foreach ($board->cells as $cell)
            $cell->save();

          return $this->redirectToRoute('board_update_success');
    }

    return $this->render('default/board_update.html.twig', array(
        'form' => $form->createView(),
    ));
}

    /**
     * @Route("/board_update_success", name="board_update_success")
     */
    public function successAction(Request $request)
    {
       return new Response(
            '<html><body>Yay! <a href="/board"> Board updated! </a> </body></html>'
            );

    }
}
