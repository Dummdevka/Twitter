<?php

abstract class BaseController
{
    public $db;
    public $templater;

    public function __construct(Twitter_PDO $db, Templater $templater)
    {
        $this->db = $db;
        $this->templater = $templater;
    }

    public function view_page($template, $data=[])
    {
        $this->templater->view('partials/header', $data);
        $this->templater->view($template, $data);
        $this->templater->view('partials/footer', $data);
    }

    // Each controller will fill in their own `run` method =]
    abstract public function run();
}
