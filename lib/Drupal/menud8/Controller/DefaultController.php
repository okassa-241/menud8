<?php

namespace Drupal\menud8\Controller;

use Drupal\Core\Controller\ControllerBase;


class DefaultController extends ControllerBase {

   /**
   * getAction
   * @return string
   */
  public function getAction(){
    return "Wellcome to menu";
  }


  /**
   * greetingAction
   * @return string
   */
  public function greetingAction(){
    return "Hello!!!";
  }


  /**
   * farewellAction
   * @return string
   */
  public function farewellAction(){
    return "Good by!!!";
  }

}
