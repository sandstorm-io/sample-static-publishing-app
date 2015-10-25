<?php
function take_action_if_desired() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        mkdir('/var/www');
        // Store a Hello, world in /var/www/index.html.
        file_put_contents('/var/www/index.html', "Hello, world!");
    }
}

function getPublishingHelperOutputLines() {
    // Execute the Sandstorm publishing helper.
    $lines = [];
    $cmd = '/opt/app/sandstorm-integration/bin/getPublicId';
    $headers = apache_request_headers();
    $cmd = $cmd . ' ' . $headers['X-Sandstorm-Session-Id'];
    $output = exec($cmd, $lines);

    // In this sample app, we leave parsing the output of this command
    // to the caller. So we just return these lines as-is.
    return $lines;
}

// Security note:
//
// This app has no cross-site request forgery protection. It also
// has no access control. It relies on Sandstorm for those.
//
// It also is arguably shell-injectable in the way it constructs
// $cmd. Apologies. This is PHP.
?>