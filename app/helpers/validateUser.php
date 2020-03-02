<?php
function validateUser($user)
{

 
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is require');
    }
    if (empty($user['email'])){
     array_push($errors, 'email is require');
    }
    if (empty($user['password'])){
     array_push($errors, 'password is require');
    }
    if ($user['passwordConf'] !== $user['password']){
     array_push($errors, 'password do not match');
    }

    $existingUser = selectOne('users', ['email' => $user['email']]);
    if ($existingUser){
        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Email already exists');
        }
        if (isset($user['create-admin'])) {
            array_push($errors,'Email already exist');
        }
        
    }

    return $errors;
}


function validateLogin($user)
{

 
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'Username is require');
    }
    
    if (empty($user['password'])){
     array_push($errors, 'password is require');
    }
    

    return $errors;
}