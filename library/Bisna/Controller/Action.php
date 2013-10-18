<?php

namespace Bisna\Controller;

/**
 * Action class.
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class Action extends \Zend_Controller_Action {

    /**
     * Retrieve the Doctrine Container.
     *
     * @return Bisna\Application\Container\DoctrineContainer
     */
    public function getDoctrineContainer() {
        return $this->getInvokeArg('bootstrap')->getResource('doctrine');
    }

}