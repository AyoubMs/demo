<?php

// log in the user if the credentials match.

use Core\App;
use Core\Authenticator;
use Core\Database;
use Http\Forms\LoginForm;
use function Core\login;
use function Core\redirect;

$db = App::resolve(Database::class);

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator)->attempt(
    $attributes['email'], $attributes['password']
);

if (!$signedIn) {
    $form->error('email', 'No matching account found for that email address and password.')
        ->throw();
}
redirect('/');


//return redirect('/login');

