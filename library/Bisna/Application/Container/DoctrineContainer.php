<?php

namespace Bisna\Application\Container;

/**
 * Doctrine Container class.
 *
 * @license http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link www.doctrine-project.org
 *
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 */
class DoctrineContainer
{
    /**
     * Retrieve Cache Instance based on its name. If no argument is provided,
     * it will attempt to get the default Instance.
     * If Cache Instance name could not be found, NameNotFoundException is thrown.
     *
     * @throws Bisna\Application\Exception\NameNotFoundException
     *
     * @param string $cacheName Optional Cache Instance name
     *
     * @return Doctrine\Common\Cache\Cache Cache Instance
     */
    public function getCacheInstance($cacheName = null);

    /**
     * Retrieve DBAL Connection based on its name. If no argument is provided,
     * it will attempt to get the default Connection.
     * If DBAL Connection could not be retrieved, NameNotFoundException is thrown.
     *
     * @throws Bisna\Application\Exception\NameNotFoundException
     *
     * @param string $connName Optional DBAL Connection name
     *
     * @return Doctrine\DBAL\Connection DBAL Connection
     */
    public function getConnection($connName = null);

    /**
     * Retrieve ORM EntityManager based on its name. If no argument provided,
     * it will attempt to get the default EntityManager.
     * If ORM EntityManager could not be retrieved, NameNotFoundException is thrown.
     *
     * @throws Bisna\Application\Exception\NameNotFoundException
     *
     * @param string $emName Optional ORM EntityManager name
     *
     * @return Doctrine\ORM\EntityManager ORM EntityManager
     */
    public function getEntityManager($emName = null);
}