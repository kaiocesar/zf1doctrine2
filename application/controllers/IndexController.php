<?php

class IndexController extends Zend_Controller_Action {

    protected $doctrine;
    protected $entityManager;
    protected $usuarioRepository;

    public function init() {
        $this->doctrine             = Zend_Registry::get('doctrine');
        $this->entityManager        = $this->doctrine->getEntityManager();
        $this->usuarioRepository    = $this->entityManager->getRepository('app:Usuario');
    }

    public function indexAction() {
        $this->view->version = \Doctrine\Common\Version::VERSION;

        var_dump($this->usuarioRepository->find(1));
    }

}

