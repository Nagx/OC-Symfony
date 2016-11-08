<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AdvertController extends Controller
{
    public function indexAction()
    {
        $url = $this->generateUrl(
            'oc_platform_home',
            array(),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        return new Response("L'URL principale est : " . "<a href=".$url.">".$url."</a>");
    }

    public function viewAction($id)
    {
        return new Response('Affichage de l\'annonce d\'id : ' . $id);
    }

    public function viewSlugAction($slug, $year, $_format)
    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au
            slug '" . $slug . "', créée en " . $year . " et au format " . $_format . "."
        );
    }

    public function addAction()
    {

    }

    public function deleteAction()
    {

    }

    public function editAction()
    {

    }
}