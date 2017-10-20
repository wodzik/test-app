<?php

namespace Drupal\drupalday\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Site\Settings;
use MongoDB\Client;

class DrupalDay extends ControllerBase {

  public function getLandingPage() {
    $client = new Client(Settings::get('mongodb_connection', NULL));
    $dbs = [];
    foreach ($client->listDatabases() as $db) {
      $dbs[] = $db->getName();
    }

    $output = [
      '#theme' => 'item_list',
      '#list_type' => 'ul',
      '#title' => 'My databases',
      '#items' => $dbs,

    ];
    return $output;
  }
}
