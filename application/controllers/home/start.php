<?php
    Class start extends Controller {
        function __construct() {
            
            parent::__construct();
        }
        
        function index() {
            $Master = new Template();
            $Master->__construct('general');
            $Master->assign('title', 'Home');
            $Master->assign('css', css('general.css'));
            $Master->assign('content', 'Welcome guests! SkyFrame is a very lightweight framework developed in PHP5. It has everything you could need while allowing you to quickly build a very powerful website. It is small enough to make a small website, yet powerful enough to create a large website(for fansites, business, etc.');
            $Master->render();
        }
    }
?>