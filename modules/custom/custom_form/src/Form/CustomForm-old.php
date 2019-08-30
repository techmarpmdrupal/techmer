<?php

namespace Drupal\custom_form\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;



class CustomForm extends FormBase{

  public function getFormId()
  {
    return "Drupal Custom Form";
  }

  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('welcome.adminsettings');
    $form['name'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Name*'),
      ),
    ];

    $form['email'] = [
      '#type' => 'email',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Email*'),
      ),
    ];

    $form['subject'] = [
      '#type' => 'textfield',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Subject*'),
      ),
    ];

    $form['message'] = [
      '#type' => 'textarea',
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => t('Message*'),
      ),
    ];

    $form['copy'] = [
     '#type' => 'checkboxes',
     '#options' => [
       'region' => $this->t('SEND YOURSELF A COPY'),
     ],
   ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('SEND MESSAGE'),
      '#button_type' => 'primary'
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state)
  {
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
