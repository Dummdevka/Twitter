<?php

require_once __DIR__ . '/_base.php';

class Index extends BaseController
{
    public $default_template = 'index';
    public $default_data = [
        'title' => 'Our very own Twitter!'
    ];

    public function run()
    {
        $this->default_data['tweets'] = $this->db->get_tweets();
        $this->view_page($this->default_template, $this->default_data);
    }
}
