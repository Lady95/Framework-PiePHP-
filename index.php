
<!-- <pre>
<?php
// var_dump($_POST, $_GET, $_SERVER);
?>
</pre>  -->

<?php
    define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
    require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

    $app = new Core\Core();
    $app->run();

    //$database = new Core\Database();
?>