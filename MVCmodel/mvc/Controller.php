<?php
abstract class Controller{

    protected $_application;
    protected $_controller;
    protected $_action;
    protected $_request;
    protected $_response;
    protected $_session;
    protected $_connect_model;
    protected $_authentication=array();
    const PROTOCOL = 'http://';
    const ACTION = 'Action';

    //コンストラクタ
    public function __construct($application){
        $this->_controller = strtolower(substr(get_class($this), 0, -10));
        $this->_application = $application;
        $this->_request = $application->getRequestObject();
        $this->_response = $application->getResponseObject();
        $this->_session = $application->getSessionObject();
        $this->_connect_model = $application->getConnectModelObject();
    }

    //dispatch()メソッド
    public function dispatch($action,$params=array()){
        $this->_action = $action::ACTION;
        if(!method_exists($this, $action_method) && !$this->session->isAuthenticated()){
            throw new AuthorizedExcepution();
        }

        if($this->Authentication($action) && !$this->session->isAuthenticated()){
            throw new AuthorizedException();
        }
        $content = $this->$action_method($params);
        return $content;
    }

    protected function httpNotFound(){
        
    }
}
?>