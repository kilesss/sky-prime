<?php
function parseEnv($property)
{
    $env = parse_ini_file('.env');
        if (isset($env[$property])){
            return $env[$property];
        }
        return '';
}

function view($viewName, $properties = [])
{

    if (file_exists('views/'.$viewName.'.php')) {
        includeWithVariables('views/'.$viewName.'.php', $properties);
    }else{
        echo 'The view file not found : '.$viewName.'.php';
        die;
    }
}
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