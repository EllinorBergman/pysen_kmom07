<?php
/**
 * Holding a instance of CPysen to enable use of $this in subclasses and provide some helpers.
 *
 * @package PysenCore
 */
class CObject {

        /**
         * Members
         */
        protected $py;
        protected $config;
        protected $request;
        protected $data;
        protected $db;
        protected $views;
        protected $session;
        protected $user;


        /**
         * Constructor, can be instantiated by sending in the $py reference.
         */
        protected function __construct($py=null) {
          if(!$py) {
            $py = CPysen::Instance();
          }
          $this->py       = &$py;
    $this->config   = &$py->config;
    $this->request  = &$py->request;
    $this->data     = &$py->data;
    $this->db       = &$py->db;
    $this->views    = &$py->views;
    $this->session  = &$py->session;
    $this->user     = &$py->user;
        }


        /**
         * Wrapper for same method in CPysen. See there for documentation.
         */
        protected function RedirectTo($urlOrController=null, $method=null, $arguments=null) {
    $this->py->RedirectTo($urlOrController, $method, $arguments);
  }


        /**
         * Wrapper for same method in CPysen. See there for documentation.
         */
        protected function RedirectToController($method=null, $arguments=null) {
    $this->py->RedirectToController($method, $arguments);
  }


        /**
         * Wrapper for same method in CPysen. See there for documentation.
         */
        protected function RedirectToControllerMethod($controller=null, $method=null, $arguments=null) {
    $this->py->RedirectToControllerMethod($controller, $method, $arguments);
  }


        /**
         * Wrapper for same method in CPysen. See there for documentation.
         */
  protected function AddMessage($type, $message, $alternative=null) {
    return $this->py->AddMessage($type, $message, $alternative);
  }


        /**
         * Wrapper for same method in CPysen. See there for documentation.
         */
        protected function CreateUrl($urlOrController=null, $method=null, $arguments=null) {
    return $this->py->CreateUrl($urlOrController, $method, $arguments);
  }


}
  