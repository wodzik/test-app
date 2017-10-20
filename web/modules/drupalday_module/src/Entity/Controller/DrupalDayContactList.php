<?php

namespace Drupal\DrupalDay\Entity\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Url;

class DrupalDayContactList extends EntityListBuilder {

  public function buildHeader() {
    $header['id'] = $this->t('ContactID');
    $header['name'] = $this->t('Name');
    $header['surname'] = $this->t('Surname');
    $header['mail'] = $this->t('mail');
    $header['phone'] = $this->t('phone');
    $header['message'] = $this->t('message');
    return $header;
  }

  public function buildRow(EntityInterface $entity) {
    $row['id'] = $entity->id();
    $row['name'] = $entity->name->value;
    $row['surname'] = $entity->surname->value;
    $row['mail'] = $entity->mail->value;
    $row['phone'] = $entity->phone->value;
    $row['message'] = $entity->message->value;
    return $row;
  }
}
