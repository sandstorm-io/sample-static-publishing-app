<?php
require_once('functions.php');
take_action_if_desired();
?>

<h1>Hello from Sandstorm static publishing example</h1>

<?php
if (file_exists('/var/www/index.html')) {
    require("after_publish.php");
} else {
    require("before_publish.php");
}
?>