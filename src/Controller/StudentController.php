<?php declare(strict_types=1);
namespace app\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
public function index(): Response
{
    return new response ('bonjour mes etudiants');

}


}