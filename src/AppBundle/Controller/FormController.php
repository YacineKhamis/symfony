<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class FormController extends Controller
{
    /**
     * @Route("/{foo}")
     */
    public function showAction($foo)
    {
        return $this->render('custom/form.html.twig', array(
            'variable01' => $foo
        ));
    }
}
