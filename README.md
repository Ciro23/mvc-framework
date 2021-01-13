# MVC framework
Simple MVC framework with a default Controller, Model and Dbh

## How to use
All the custom controllers and models must be extended respectively with Mvc\Controller and Mvc\Model.
The .env.example file contains the themplate of all the private data needed to connect to the database.
Change these static properties according to own folder structure:
- Mvc\Controller::modelSuffix, the common suffix for all the models class name (default is "Model");
- Mvc\Controller::viewsPath, path where the views are stored (default is "/app/views/");
- Mvc\Controller::viewsSuffix, common suffix for all the views (default is ".view.php").

## Features
- Mvc\Controller->model($model), creates the desired model object by its class name;
- Mvc\Controller->view($view), include the desired view by its file name (without extension);
- Mvc\Model->executeStmt($stmt, $inParameters).
