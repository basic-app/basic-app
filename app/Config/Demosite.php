<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Demosite extends BaseConfig
{
    public $siteName;

    public $copyright;

    public $headerTitle;

    public $headerDescription;

    public $headerActionLabel;

    public $headerActionUrl;

    public $indexPage;
    
    public $servicesPage;

    public $contactsPage;

    public function __construct()
    {
        parent::__construct();

        helper(['page', 'block']);

        $this->siteName = block('siteName', 'Basic App');
        $this->copyright = 'Copyright © :YEAR My Company';
        $this->headerTitle = block('headerTitle', 'Welcome to Basic App');
        $this->headerDescription = block('headerDescription', 'A functional CodeIgniter 4 boilerplate for websites');
        $this->headerActionLabel = block('headerActionLabel', 'Start');
        $this->headerActionUrl = block('headerActionUrl', '#index');

        $this->indexPage = page('index', true, [
            'page_text' => '<p>This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs!</p>',
            'page_name' => 'Home'
        ]);

        $this->servicesPage = page('services', true, [
            'page_text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>',
            'page_name' => 'Services we offer'
        ]);

        $this->contactsPage = page('contacts', true, [
            'page_text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>',
            'page_name' => 'Contact us'
        ]);
    }
}
