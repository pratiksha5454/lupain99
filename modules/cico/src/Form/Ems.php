<?php

/**
 * @file
 * Contains \Drupal\resume\Form\WorkForm.
 */

namespace Drupal\cico\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class Ems extends FormBase
{



  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames()
  {
  }

  /**
   * {@inheritdoc}
   */
  public function getFormID()
  {
    return 'multi_step_form';
  }
  public function getCurrentTime() {
  return time();
  }
  
  
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    if ($form_state->has('page') && $form_state->get('page') == 2) {
      return self::formPageTwo($form, $form_state);
    }
  
    $form_state->set('page', 1);
  
    $form['description'] = [
      '#type' => 'item',
      '#title' => $this->t('Page @page',['@page'=>$form_state->get('page')]),
    ];
    

      $form['candidate_confirmation'] = array (
      '#type' => 'radios',
      '#title' => ('Project type'),
      '#required' => TRUE,
      '#suffix' => $this->t('Please select type of work'),
      '#options' => array(
        'Learing' =>t('Learing'),
        'Live' =>t('Live'),
        'Inhouse' =>t('Inhouse'),
      ),
   
    );   
      
     $form['morning_update'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Morning Update'),
      '#suffix' => $this->t('Please enter your work update'),
      '#default_value' => $form_state->getValue('morning_update', ''),
      '#required' => TRUE,
    ];
    $form['startTime'] = array (
      '#type' => 'datetime',
      '#title' => t('CheckIn'),
      '#required' => TRUE,
      '#suffix' => $this->t('Please insert your office-in time'),

    );
    //  $form['endTime'] = array (
    //   '#type' => 'datetime',
    //   '#title' => t('checkout'),
    //   '#required' => TRUE,
    // );

    $form['actions'] = [
      '#type' => 'actions',
    ];
  
    $form['actions']['next'] = [
      '#prefix' => $this->t('Please checkin your office in time '),
      '#type' => 'submit',
      '#button_type' => 'primary',
      '#value' => $this->t('CheckIn'),
      '#submit' => ['::submitPageOne'],
      '#validate' => ['::validatePageOne'],
    ];
  
    return $form;
  
  }

  public function validatePageOne(array &$form, FormStateInterface $form_state) {
    $title = $form_state->getValue('morning_update');
    if (strlen($title) < 5) {
      $form_state->setErrorByName('morning_update', $this->t('The first name must be at least 5 characters long.'));                
    }
  }

  /**
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \Drupal\Core\Form\FormStateInterface $form_state
 *   The current state of the form.
 */
public function submitPageOne(array &$form, FormStateInterface $form_state) {
 
 drupal_set_message($this->t('@date , Checking  successfully', array('@date' => $form_state->getValue('date'))));


  $form_state
    ->set('page_values', [
      'morning_update' => $form_state->getValue('morning_update'),
    ])
    ->set('page', 2)
    ->setRebuild(TRUE);
}

/**
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \Drupal\Core\Form\FormStateInterface $form_state
 *   The current state of the form.
 * @return array
 *   The render array defining the elements of the form.
 */
public function formPageTwo(array &$form, FormStateInterface $form_state) {

  $form['description'] = [
    '#type' => 'item',
    '#title' => $this->t('Page @page',['@page'=>$form_state->get('page')]),
  ];

  $form['evening_update'] = [
    '#type' => 'textarea',
    '#title' => $this->t('Evening Update'),
    '#required' => TRUE,
    '#default_value' => $form_state->getValue('evening_update', ''),
  ];
  $form['back'] = [
    '#type' => 'submit',
    '#value' => $this->t('Back'),
    '#submit' => ['::pageTwoBack'],
    '#limit_validation_errors' => [],
  ];
  $form['submit'] = [
    '#type' => 'submit',
    '#button_type' => 'primary',
    '#value' => $this->t('checkout'),
  ];
  return $form;
}

/**
 * @param array $form
 *   An associative array containing the structure of the form.
 * @param \Drupal\Core\Form\FormStateInterface $form_state
 *   The current state of the form.
 */
public function pageTwoBack(array &$form, FormStateInterface $form_state) {
  $form_state
    ->setValues($form_state->get('page_values'))
    ->set('page', 1)
    ->setRebuild(TRUE);
}
  
/**
 * @param array $form
 * @param FormStateInterface $form_state
 */
public function validateForm(array &$form, FormStateInterface $form_state)
{
  // validate form
}

/**
 * @param array $form
 * @param FormStateInterface $form_state
 */
public function submitForm(array &$form, FormStateInterface $form_state)
{
  \Drupal::messenger()->addMessage('Thank you');

 }

}










 















