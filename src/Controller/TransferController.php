<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TransferController extends AbstractController
{
    /**
     * @Route("/transfer", name="transfer")
     */
    public function index()
    {
        return $this->render('transfer/index.html.twig', [
            'controller_name' => 'TransferController',
        ]);
    }
}
