<?php
/**
 * Created by PhpStorm.
 * User: wodzik
 * Date: 20.10.17
 * Time: 23:42
 */

namespace Drupal\drupalday\Services;
use Drupal\Core\Site\Settings;
use MongoDB\Client;

class MongoService {

  private $client;

  public function __construct() {
    $this->client = new Client(Settings::get('mongodb_connection', NULL));
  }

  public function getClinet() {
    return $this->client;
  }

}