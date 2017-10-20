<?php

namespace Drupal\drupalday\Forms;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\drupalday\Entity\DrupalDayContactEntity;

class DrupalDayForm extends FormBase {

  public function getFormId() {
    return 'drupalday_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#required' => TRUE,
    ];

    $form['surname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Surname'),
      '#required' => TRUE,
    ];

    $form['mail'] = [
      '#type' => 'email',
      '#title' => $this->t('E-mail'),
      '#required' => TRUE,
    ];

    $form['phone'] = [
      '#type' => 'tel',
      '#title' => $this->t('Phone'),
    ];

    $form['message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('message'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Send Message'),
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $contact = DrupalDayContactEntity::create([
      'name' =>  $form_state->getValue('name'),
      'surname' =>  $form_state->getValue('surname'),
      'mail' =>  $form_state->getValue('mail'),
      'phone' =>  $form_state->getValue('phone'),
      'message' =>  $form_state->getValue('message'),
    ]);
    $contact->save();

    $mailManager = \Drupal::service('plugin.manager.mail');
    $module = 'drupalday';
    $key = 'contact_form';
    $to = 'example@example.com';
    $params['name'] = $form_state->getValue('name');
    $params['surname'] = $form_state->getValue('surname');
    $params['mail'] = $form_state->getValue('mail');
    $params['phone'] = $form_state->getValue('phone');
    $params['message'] = $form_state->getValue('message');
    $send = true;
    drupal_set_message($this->t('Confirm Message'));
  }
}
