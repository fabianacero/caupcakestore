<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CupcakeStore
 *
 * @author admin
 */

namespace Drupal\cupcake_store\Controller;

use Drupal\Core\Controller\ControllerBase;

class CupcakeStore extends ControllerBase{
    
    public function content(){
        return array(
            '#type' => 'markup',
            '#markup' => $this->t("Cupcake Store")
        );
    }
}
