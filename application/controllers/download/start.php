<?php
    Class start extends Controller {
        function __construct() {
            
            parent::__construct();
        }
        
        function index() {
            $Master = new Template();
            $Master->__construct('general');
            $Master->assign('title', 'Download SkyFrame');
            $Master->assign('css', css('general.css'));
            $Master->assign('content', '
Current Version: 1.0<br />
Download: <a href="https://github.com/downloads/bwoofenden/SkyFrame-Framework/skyframe%20Version-1.0.zip">Direct</a><br />
Source: <a href="https://github.com/bwoofenden/SkyFrame-Framework">GitHub</a>');
            $Master->render();
        }
    }
?>