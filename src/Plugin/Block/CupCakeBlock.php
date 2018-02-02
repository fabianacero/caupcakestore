<?php

namespace Drupal\cupcake_store\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a Cup Cakes Block.
 *
 * @Block(
 *   id = "cupcake_store",
 *   admin_label = @Translation("Cupcake Store"),
 *   category = @Translation("Cupcake Store"),
 * )
 */
class CupCakeBlock extends BlockBase implements BlockPluginInterface
{

    /**
     * {@inheritdoc}
     */
    public function build()
    {
        $config = $this->getConfiguration();
        $cupCakesNumber = 0;

        if (!empty($config["cupcakes_number"])) {
            $cupCakesNumber = $config["cupcakes_number"];
        }

        return array(
            '#markup' => $this->t('@number cupcakes will be display!', array('@number' => $cupCakesNumber)),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state)
    {
        $form = parent::blockForm($form, $form_state);

        $config = $this->getConfiguration();

        $form['cupcakes_number'] = array(
            '#type' => 'textfield',
            '#title' => $this->t('Cupcakes Number'),
            '#description' => $this->t('How many kind of cupcakes are you going to sell?'),
            '#default_value' => isset($config['cupcakes_number']) ? $config['cupcakes_number'] : '',
        );

        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state)
    {
        parent::blockSubmit($form, $form_state);
        $values = $form_state->getValues();
        $this->configuration['cupcakes_number'] = $values['cupcakes_number'];
    }

}
