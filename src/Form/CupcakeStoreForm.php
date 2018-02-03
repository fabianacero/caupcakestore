<?php

namespace Drupal\cupcake_store\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class CupcakeStoreForm extends ConfigFormBase{
    
    /**
     * {@inheritdoc}
     */
    public function getFormId(){
        return 'cupcake_store_form';
    }
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state){
        // Form constructor
        $form = parent::buildForm($form, $form_state);
        // Default Settings
        $config = $this->config('cupcake_store.settings');
        
        // Form Settings
        $form[''] = array(
            '#type' => 'textfield',
            '#title' => $this->t("How may kind of cupcakes are you going to sell?"),
            '#default_value' => $config->get('cupcake_store')
        );
    }
}

