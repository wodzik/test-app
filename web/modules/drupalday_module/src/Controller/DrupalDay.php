<?php

namespace Drupal\drupalday\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\drupalday\Services\MongoService;
use Symfony\Component\DependencyInjection\ContainerInterface;


class DrupalDay extends ControllerBase {

  private $mongo_client;

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('drupalday.mongo')
    );
  }

  public function __construct(MongoService $mongo_service) {
    $this->mongo_client =  $mongo_service->getClinet();
  }


  public function getMongoDbs() {
    $dbs = [];
    foreach ($this->mongo_client->listDatabases() as $db) {
      $dbs[] = $db->getName();
    }

    return [
      '#theme' => 'item_list',
      '#list_type' => 'ul',
      '#title' => 'My databases',
      '#items' => $dbs,

    ];
  }

  public function getMongoDbCollections($name) {

  }

  public function getLandingPage() {
    return [
      '#type' => 'markup',
      '#markup' => t('Hello World!')
    ];
  }
}
