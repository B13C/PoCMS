<?php
$app = \Core\Utils\CoreUtils::getContainer('app');
$app->map(['GET' , 'POST'] , "/", APP_NAME."\\Controller\\Home:index")->setName("blog.home.index");