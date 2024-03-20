<?php

include "controllers/TemplateController.php";
include "controllers/UserController.php";
include "controllers/RolController.php";


include "models/UserModel.php";
include "models/RolModel.php";


$templateController = new TemplateController();
$templatePath = $templateController->renderTemplate();

include $templatePath;
