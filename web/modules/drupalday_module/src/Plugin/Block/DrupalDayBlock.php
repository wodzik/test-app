<?php

namespace Drupal\drupalday\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Drupalday_block' Block.
 *
 * @Block(
 *   id = "Drupalday_block",
 *   admin_label = @Translation("Drupal Day"),
 *   category = @Translation("Drupal Day"),
 * )
 */
class DrupalDayBlock extends BlockBase {

  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\drupalday\Forms\DrupalDayForm');
    return $form;
  }
}
