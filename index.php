<?php
$dotenvPath = __DIR__ . '/.env';
if (file_exists($dotenvPath)) {
    $dotenv = parse_ini_file($dotenvPath);
    foreach ($dotenv as $key => $value) {
        putenv("$key=$value");
    }
}

include "controllers/TemplateController.php";
include "controllers/UserController.php";
include "controllers/RolController.php";


include "models/UserModel.php";
include "models/RolModel.php";


$templateController = new TemplateController();
$templatePath = $templateController->renderTemplate();

include $templatePath;
