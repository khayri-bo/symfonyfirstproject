<?php declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * Summary of index
     * @return Response
     * @Route("/teacher", name="teacher_index")
     */
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }

    /**
     * Returns a greeting message
     * @param string $name
     * @return Response
     * @Route("/teacher/{name}", name="teacher_greeting")
     */
    public function showTeacher(string $name): Response
    {
        // return new Response('Bonjour ' . $name);
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }

    /**
     * Redirects to the student_index route
     * @return Response
     * @Route("/teacher_redirect", name="teacher_redirect")
     */
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('student_index');
    }
}