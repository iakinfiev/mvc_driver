<?php
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS .'..'. DS .'..'. DS);
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// переменные для подключения к базе
define ('DBDRIVER', 'mysql');
define ('DBHOST', 'localhost');
define ('DBNAME', 'project');
define ('DBUSERNAME', 'root');
define ('DBPASSVORD', '123456');