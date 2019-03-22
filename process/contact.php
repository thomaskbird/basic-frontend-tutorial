<?php
session_start();

$input = $_POST;
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";

if(
    !empty($input['name']) &&
    !empty($input['email']) &&
    !empty($input['phone']) &&
    !empty($input['message'])
) {

    $message = '
        <p>New website message:</p>
        <table>
            <tr>
                <td>Name:</td>
                <td>'. $input['name'] .'</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>'. $input['email'] .'</td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td>'. $input['phone'] .'</td>
            </tr>
            <tr>
                <td>Message:</td>
                <td>'. $input['message'] .'</td>
            </tr>
        </table>
    ';

    $mail = mail($input['email'], 'New website message', $message, $headers);

    if($mail) {
        $response = [
            'failed' => false,
            'msgs' => [
                'Your message was sent, well be contact as soon as possible!'
            ]
        ];
    } else {
        $response = [
            'failed' => true,
            'msgs' => [
                'Uh oh something went wrong please try again!'
            ]
        ];
    }
} else {
    $response = [
        'failed' => true,
        'msgs' => [
            'You didn\'t enter one of the required fields, please try again!'
        ]
    ];
}

$_SESSION['response'] = $response;
header('Location: '. $_SERVER['HTTP_REFERER']);