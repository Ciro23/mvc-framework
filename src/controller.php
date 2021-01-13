<?php

namespace Mvc;

class Controller {

    public static $viewsPath = "/app/views/";
    public static $viewsSuffix = ".view.php";

    /**
    * return a new model object
    *
    * @param string $model, the model name
    *
    * @return object $model
    */
    protected function model($model) {
        $model .= "Model";
        $model = ucfirst($model);
        return new $model();
    }

    /**
    * requires the wanted view
    *
    * @param string $view, the view name
    * @param array $data, the data to pass to the view
    */
    protected function view($view, $data = []) {
        if ($data === null) {
            // renders the pagenotfound view
            $pagenotfound = new \PageNotFoundController;
            $pagenotfound->index();
        } else {
            // renders the wanted view
            require_once $_SERVER['DOCUMENT_ROOT'] . Controller::$viewsPath . $view . Controller::$viewsSuffix;
        }
    }
}