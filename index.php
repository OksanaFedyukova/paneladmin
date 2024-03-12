<?php

include "controller/TemplateController.php";

$templateController = new TemplateController();
$templatePath = $templateController->renderTemplate();

include $templatePath;
