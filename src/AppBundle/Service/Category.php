<?php

namespace AppBundle\Service;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Description of Category
 *
 * @author seif
 */
class Category {
    
    private $_em;
    private $_router;

    public function __construct(EntityManager $em, RouterInterface $router){
        $this->_em = $em;
        $this->_router = $router;
    }


    public function count(){
        $categorys = $this->_em->getRepository('CoreBundle:Category')->findAll();

        return count($categorys);
    }
    
    public function redirection(){
        return new RedirectResponse($this->_router->generate('app_homepage'));
    }
    
}
