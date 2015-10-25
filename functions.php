<?php
function take_action_if_desired() {
    if ($_POST['publish']) {
        // Store a Hello, world in /var/www/index.html.
        file_put_contents('/var/www/index.html', "Hello, world!");
    }
}

// NOTE:
//
// This app has no cross-site request forgery protection. It also
// has no access control. It relies on Sandstorm for those.
}
