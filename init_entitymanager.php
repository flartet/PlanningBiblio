<?php
/*
 * Planning Biblio
 * Licence GNU/GPL (version 2 et au dela)
 * see README.md et LICENSE
 * @copyright 2011-2019 Jérôme Combes

 * File : init_entitymanager.php
 * Created on : janvier 2019
 * Last update : 2019-01-22
 * @author Alex Arnaud <alex.arnaud@biblibre.com>

 * Description :
 *   Load ORM
 */

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Model\Extensions\TablePrefix;

// Instanciating entity manager.
$entitiesPath = array('src/Model');
$emConfig = Setup::createAnnotationMetadataConfiguration($entitiesPath, true);

// Handle table prefix.
$evm = new \Doctrine\Common\EventManager;
$tablePrefix = new Model\Extensions\TablePrefix($config['dbprefix']);
$evm->addEventListener(\Doctrine\ORM\Events::loadClassMetadata, $tablePrefix);

$dbParams = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => $config['dbhost'],
    'user'     => $config['dbuser'],
    'password' => $config['dbpass'],
    'dbname'   => $config['dbname'],
);

global $entityManager;
$entityManager = EntityManager::create($dbParams, $emConfig, $evm);
