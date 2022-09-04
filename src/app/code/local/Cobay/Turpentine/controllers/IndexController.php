<?php
class Cobay_Turpentine_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
		$this->getResponse()->setHeader('Content-type', 'application/json');
		$this->getResponse()->setBody(json_encode('OK'));
    }
}