<?php

namespace Frontend\Controller;

use Blueprint\Controller\Controller;
use Frontend\View;

/**
 * Index class.
 * 
 * @extends Controller
 */
class Pages extends Controller {

    /**
     * __construct function.
     * 
     * @access public
     * @return void
     */
    public function __construct() {
        
        $this->view = new View\Index();
        
    }
    
    /**
     * setContainer function.
     * 
     * @access public
     * @param mixed $container
     * @return void
     */
    public function setContainer($container) {
    
        parent::setContainer($container);
        
        $this->page = $this->container->get('page');
        
        $this->view->setContainer($this->container);
    
    }

    /**
     * weatherDataAction function.
     * 
     * @access public
     * @return void
     */
    public function weatherDataAction() {
        
        $vars['content'] = 'Weather data';
        echo $this->view->render("index.php", $vars);
    
    }

    /**
     * climateChangeAction function.
     * 
     * @access public
     * @return void
     */
    public function climateChangeAction() {
        
        $vars['content'] = 'Climate change';
        echo $this->view->render("index.php", $vars);
    
    }

    /**
     * climateEventsAction function.
     * 
     * @access public
     * @return void
     */
    public function climateEventsAction() {
        
        $vars['content'] = 'Climate events';
        echo $this->view->render("index.php", $vars);
    
    }

    /**
     * aboutAction function.
     * 
     * @access public
     * @return void
     */
    public function aboutAction() {
        
        $vars['content'] = 'About Mapp My Climate';
        echo $this->view->render("index.php", $vars);
    
    }

}