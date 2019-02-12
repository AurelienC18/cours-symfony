<?php
/**
 * Created by PhpStorm.
 * User: aurel
 * Date: 12/02/2019
 * Time: 09:20
 */

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Home extends AbstractController
{
    /**
     * @Route("/")
     */
    public function Index()
    {
        $tasks = $this->getDoctrine()->getRepository(Task::class)->findAll();
        return $this->render('home.html.twig', ['tasks' => $tasks]);
    }
}