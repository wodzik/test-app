<?php

namespace Drupal\drupalday\Entity;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Entity\EntityChangedTrait;

/**
 * Defines the ContentEntityExample entity.
 *
 * @ingroup dictionary
 *
 *
 * @ContentEntityType(
 *   id = "drupalday_contact",
 *   label = @Translation("Contacts"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\drupalday\Entity\Controller\DrupalDayContactList",
 *   },
 *   base_table = "drupalday_contact",
 *   admin_permission = "administer drupalday_contact entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "name" = "name",
 *     "surname" = "surname",
 *     "mail" = "mail",
 *     "phone" = "phone",
 *     "message" = "message",
 *   },
 *   links = {
 *     "drupalday_contact" = "/drupalday_contact/list"
 *   },
 * )
 */
class DrupalDayContactEntity extends ContentEntityBase {

  use EntityChangedTrait;

  public static function preCreate(EntityStorageInterface $storage_controller, array &$values) {
    parent::preCreate($storage_controller, $values);
  }

  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields['id'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('ID'))
      ->setDescription(t('The ID of the Term entity.'))
      ->setReadOnly(TRUE);

    $fields['uuid'] = BaseFieldDefinition::create('uuid')
      ->setLabel(t('UUID'))
      ->setDescription(t('The UUID of the Contact entity.'))
      ->setReadOnly(TRUE);

    $fields['name'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Name'))
      ->setSettings(array(
        'default_value' => '',
        'max_length' => 255,
        'text_processing' => 0,
      ))
      ->setDisplayOptions('view', array(
        'label' => 'above',
        'type' => 'string',
        'weight' => -4,
      ))
      ->setDisplayOptions('form', array(
        'type' => 'string_textfield',
        'weight' => -4,
      ))
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

      $fields['surname'] = BaseFieldDefinition::create('string')
        ->setLabel(t('Surname'))
        ->setSettings(array(
          'default_value' => '',
          'max_length' => 255,
          'text_processing' => 0,
        ))
        ->setDisplayOptions('view', array(
          'label' => 'above',
          'type' => 'string',
          'weight' => -4,
        ))
        ->setDisplayOptions('form', array(
          'type' => 'string_textfield',
          'weight' => -4,
        ))
        ->setDisplayConfigurable('form', TRUE)
        ->setDisplayConfigurable('view', TRUE);

        $fields['mail'] = BaseFieldDefinition::create('string')
          ->setLabel(t('Mail'))
          ->setSettings(array(
            'default_value' => '',
            'max_length' => 255,
            'text_processing' => 0,
          ))
          ->setDisplayOptions('view', array(
            'label' => 'above',
            'type' => 'string',
            'weight' => -4,
          ))
          ->setDisplayOptions('form', array(
            'type' => 'string_textfield',
            'weight' => -4,
          ))
          ->setDisplayConfigurable('form', TRUE)
          ->setDisplayConfigurable('view', TRUE);

          $fields['phone'] = BaseFieldDefinition::create('string')
            ->setLabel(t('Phone'))
            ->setSettings(array(
              'default_value' => '',
              'max_length' => 255,
              'text_processing' => 0,
            ))
            ->setDisplayOptions('view', array(
              'label' => 'above',
              'type' => 'string',
              'weight' => -4,
            ))
            ->setDisplayOptions('form', array(
              'type' => 'string_textfield',
              'weight' => -4,
            ))
            ->setDisplayConfigurable('form', TRUE)
            ->setDisplayConfigurable('view', TRUE);

            $fields['message'] = BaseFieldDefinition::create('string')
              ->setLabel(t('message'))
              ->setSettings(array(
                'default_value' => '',
                'max_length' => 5000,
                'text_processing' => 0,
              ))
              ->setDisplayOptions('view', array(
                'label' => 'above',
                'type' => 'string',
                'weight' => -4,
              ))
              ->setDisplayOptions('form', array(
                'type' => 'string_textfield',
                'weight' => -4,
              ))
              ->setDisplayConfigurable('form', TRUE)
              ->setDisplayConfigurable('view', TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created'))
      ->setDescription(t('The time that the entity was created.'));

    return $fields;
  }

}
