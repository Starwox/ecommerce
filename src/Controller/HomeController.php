<?php
/**
 * Created by PhpStorm.
 * User: starwox
 * Date: 07/10/2019
 * Time: 15:05
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController
{

    /**
     * @Route("/{_locale}",
     *      name="homepage",
     *     defaults={"_locale" : "fr"},
     *     requirements={
     *          "_locale" : "fr|en"
     *     }
     * )
     */
    public function home($_locale)
    {

        return $this->render('base.html.twig', [
            'locale' => $_locale
        ]);

    }

}