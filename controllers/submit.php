<?php

require_once __DIR__ . '/_base.php';

class Submit extends BaseController
{
    public $default_template = 'submit';
    public $default_data = [
        'title' => 'Submit a Tweet!'
    ];

    public function run()
    {
        if ( isset($_POST['submit']) && empty($_POST['tweet']) ) {
            throw new Exception('Your tweet is empty! D=', 400);
        }

        $tweet = $_POST['tweet'];
        $this->db->insert_tweet($tweet);

        $this->default_data['result'] = 'Success'; // we can check this later... for now, assume we're good!

        // Index doesn't require any additional handling of a request, so let's do the thing!
        $this->view_page($this->default_template, $this->default_data);
    }
}
