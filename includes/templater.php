<?php

class Templater
{
    public $template_base_dir;

    // Must be constructed with a valid base dir for your templates... add validation to taste =P
    public function __construct($template_base_dir)
    {
        $this->template_base_dir = rtrim($template_base_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    }

    // Verify that the template being requested is within the correct folder and exists
    public function is_valid($template_path)
    {
        $realpath = realpath($template_path);
        // If it's a real path (ie: if `realpath` didn't return false)
        return $realpath
            // starts with our template directory (which `realpath` susses out all the ../../ stuff)
            && strpos($realpath, $template_path) === 0
            // and the file is readable... let's assume it's valid
            && is_readable($template_path);
    }

    // Output the rendered template
    public function view($template_file, $data=[])
    {
        $template_path = $this->template_base_dir . ltrim($template_file,'/') . '.php';
        if ( !$this->is_valid($template_path) ) {
            throw new \Exception("Invalid Template File Requested: " . $template_path, 403); // Forbidden
        }
        extract($data);
        require_once $template_path;
    }

    // Return the rendered output as a string
    public function grab($template_file, $data=[])
    {
        ob_start();
        $this->view($template_file, $data);
        $results = ob_get_contents();
        ob_end_clean();
        return $results;
    }

    // To escape and echo html safe values easily...
    public function e($value, $return=false)
    {
        if ( $return ) {
            return htmlspecialchars($value);
        }
        echo htmlspecialchars($value);
    }
}