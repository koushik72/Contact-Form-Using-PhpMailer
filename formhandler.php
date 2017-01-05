<?php
require 'phpmailer.php';

ini_set('max_execution_time', 300);

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

    // use this array for storing comments
    $errors = array();

    // to prevent xss attack
    function xssSafe($data) {
        return htmlentities(trim($data));
    }

    // flag variable
    $question = $subQuestion = $comment = false;

    // validate question
    if ( !empty($_POST['question']) ) {
        $question = xssSafe($_POST['question']);
    } else {
        $errors[] = "Please select a question from the list";
    }

    // validate sub Question
    if ( !empty($_POST['sub-question']) ) {
        $subQuestion = xssSafe($_POST['sub-question']);
    } else {
        $errors[] = "Please select a sub question from the list";
    }

    // validate comment
    if ( !empty($_POST['comment']) ) {
        $comment = xssSafe($_POST['comment']);
    } else {
        $errors[] = "Please write a comment";
    }

    if ( $question && $subQuestion && $comment ) {

        // convert all the substrings in html file into php variable values
        // using strtr
        $vars = array('%question%'=> $question, '%subQuestion%'=> $subQuestion, '%comment%'=> $comment);

        $mail->Body = strtr(file_get_contents('email/email.html'), $vars);

        // send the mail
        if ( $mail->send() ) {
            // include the success page
            include 'email/success.html';
        } else {
            // mail not sent. Error
            echo "Your application wasn't sent due to some error";
        }

    } else { // display if there's any error
        foreach ($errors as $error) {
            echo "$error <br/>";
        }
    }
}