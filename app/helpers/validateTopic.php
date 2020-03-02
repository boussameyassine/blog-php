<?php
function validateTopic($topic)
{

 
    $errors = array();

    if (empty($topic['name'])){
        array_push($errors, 'Name is require');
    }
    

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic){
        if (isset($post['update-topic']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'name already exists');
        }
        if (isset($post['save-topic'])) {
            array_push($errors,'name already exist');
        }
        
    }

    return $errors;
}


