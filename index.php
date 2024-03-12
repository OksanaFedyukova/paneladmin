<?php

include "controllers/TemplateController.php";
include "controllers/UserController.php";


include "models/UserModel.php";

$templateController = new TemplateController();
$templatePath = $templateController->renderTemplate();

include $templatePath;
