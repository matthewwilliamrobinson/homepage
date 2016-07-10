<?php

# This file is an API that will send an email to the address set below
$DEST_ADDR = 'sam@samuelphillips.net';

# It returns a JSON object, which will look either like this:
#   { "status": "success" }
# or this:
#   { "status": "failure" }
# or this:
#   { "status": "validation-error",
#     "fields": {
#       field name: "The field is required.",
#       ...
#     }
#   }
#
# It take the following parameters in the POST data:
#   "reply-to"      The address of the sender.
#   "full-name"     The full name of the sender.
#   "body"          The body of the page.
#   "return-url"    The URL that the return link will point to (HTML mode only).


// I'm pretty sure this is what RFC 2822 wanted me to write...
function smtpQuotedString($input) {
    return '"' . preg_replace("/[\"\\\\]/", "\\\\\\0", $input) . '"';
}

function validateArguments($replyTo, $body, $fullName) {
    $errors = array();
    if (!strstr($replyTo, '@')) {
        $errors['reply-to'] = "You must specify a valid email address.";
    }
    if ($body === '') $errors['body'] = "Body must not be empty.";
    if ($fullName === '' || $fullName === "i_want_validation_to_fail") {
        $errors['full-name'] = "You must enter your name";
    }
    return $errors;
}

function escapeSubject($subject) {
    return preg_replace('=((<CR>|<LF>|0x0A/%0A|0x0D/%0D|\\n|\\r)\S).*=i',
                null, $subject);
}

function escapeBody($body) {
    return wordwrap($body, 70, "\r\n");
}


$method = $_SERVER["REQUEST_METHOD"];

$mode = $_SERVER['HTTP_ACCEPT'];
if (strstr($mode, "text/html")) {
    // to be supported later
    http_response_code(400); // bad request
    exit();
} else if (strstr($mode, "application/json") || strstr($mode, "*/*")) {
    $mode = "JSON";
} else {
    http_response_code(400); // bad request
    echo json_encode([ "status" => "buggered", "message" => "Could not understand Accept Header" ]);
    exit();
}

if ($method === 'POST') {
    header('Content-Type: application/json; charset=utf-8');
    $replyTo = $_POST['reply-to'];
    $fullName = $_POST['full-name'];
    $body = $_POST['body'];

    $validationErrors = validateArguments($replyTo, $body, $fullName);
    if ($validationErrors) {
        echo json_encode([
            "status" => "validation-error",
            "fields" => $validationErrors
        ]);
    } else {
        $headers = "Reply-To: ".smtpQuotedString($fullName)." <".escapeSubject($replyTo).">\r\n".
                   "X-Mailer: PHP/" . phpversion();
        $mailOk = mail($DEST_ADDR,
            escapeSubject("You've been contacted by $fullName <$replyTo>!"),
            escapeBody($body),
            $headers
        );

        echo json_encode([
            "status" => $mailOk? "success" : "failure",
            "debugInfo" => [
                "headers" => $headers
            ]
        ]);
    }
} else {
    header("Location: /", 302);
    exit();
}
