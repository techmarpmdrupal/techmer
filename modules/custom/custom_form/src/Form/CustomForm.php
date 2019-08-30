<?php

namespace Drupal\custom_form\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;

class CustomForm extends FormBase {

  public function getFormId() {
    return "Drupal Custom Form";
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('welcome.adminsettings');
    
    $form['description'] = [
      '#type' => 'item',
      '#markup' => $this->t('This example shows the use of all input-types.'),
    ];
    $form['salutation'] = [
      '#type' => 'select',
      '#title' => $this->t('Salutation'),
      '#options' => [
        'mr' => $this->t('Mr.'),
        'ms' => $this->t('Ms.'),
        'mrs' => $this->t('Mrs.'),
        'dr' => $this->t('Dr.'),
        'prof' => $this->t('Prof.'),
      ],
      '#empty_option' => $this->t('-None-'),
    ];
    $form['firstname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name:'),
      '#required' => TRUE,
    ];

    $form['lastname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name:'),
      '#required' => TRUE,
    ];
    $form['company'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Company:'),
      '#required' => TRUE,
    ];
    $form['address'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Address:'),
      '#required' => TRUE,
    ];
    $form['city'] = [
      '#type' => 'textfield',
      '#title' => $this->t('City:'),
      '#required' => TRUE,
    ];
    $form['state'] = [
      '#type' => 'textfield',
      '#title' => $this->t('State/Province:'),
      '#required' => TRUE,
    ];
    $form['postalcode'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Zip Code/Postal Code:'),
      '#required' => TRUE,
    ];
    $form['country'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Country:'),
      '#required' => TRUE,
    ];
    $form['phone'] = [
      '#type' => 'tel',
      '#title' => $this->t('Phone:'),
      '#required' => TRUE,
    ];
    $form['fax'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Fax:'),
      '#required' => TRUE,
    ];
    $form['email'] = [
      '#type' => 'email',
      '#title' => $this->t('Email:'),
      '#required' => TRUE,
    ];

    $form['favorite'] = [
      '#type' => 'select',
      '#title' => $this->t('Reason For Contact:'),
      '#options' => [
        'sds' => $this->t('SDS'),
        'techspec' => $this->t('Technical Specifications'),
        'productinquiry' => $this->t('Product Inquiry'),
        'reqassist' => $this->t('Request Assistance'),
      ],
      '#empty_option' => $this->t('Request Assistance'),
    ];
    $form['message'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Question or Comment:'),
      '#required' => TRUE,
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('SEND MESSAGE'),
      '#button_type' => 'primary'
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    // $conn = Database::getConnection();
    // $conn->insert('custom_example')->fields(
    //   array(
    //     'Full_name' => $form_state->getValue('name'),
    //     'Email' => $form_state->getValue('email'),
    //     'Mobile_No' => $form_state->getValue('mbnumber'),
    //     'DOB' => $form_state->getValue('dob'),
    //     'Gender' => $form_state->getValue('gender'),
    //     'Adult' => $form_state->getValue('conf'),
    //   )
    // )->execute();
    // drupal_set_message('Thank You.');
  }

}
