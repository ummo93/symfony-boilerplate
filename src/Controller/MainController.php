<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller used to the public part of the site.
 *
 * @Route("/home")
 */
class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     * @Cache(smaxage="10")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }

}
