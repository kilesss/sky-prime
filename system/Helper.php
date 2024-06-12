<?php
/**
 * @param $property
 * @return mixed|string
 */
function parseEnv($property)
{
    $dir = dirname(__FILE__);
    $dir = str_replace('system', '', $dir);
    $env = parse_ini_file($dir.DIRECTORY_SEPARATOR.'.env');
        if (isset($env[$property])){
            return $env[$property];
        }
        return '';
}

/**
 * @param $viewName
 * @param $properties
 * @return void
 */
function view($viewName, $properties = [])
{

    if (file_exists('views/'.$viewName.'.php')) {
        includeWithVariables('views/'.$viewName.'.php', $properties);
    }else{
        echo 'The view file not found : '.$viewName.'.php';
        die;
    }
}

/**
 * @param $filePath
 * @param $variables
 * @param $print
 * @return false|string|void
 */
function includeWithVariables($filePath, $variables = array(), $print = true)
{
    // Extract the variables to a local namespace
    extract($variables);

    // Start output buffering
    ob_start();

    // Include the template file
    include $filePath;

    // End buffering and return its contents
    $output = ob_get_clean();
    if (!$print) {
        return $output;
    }
    echo $output;
}