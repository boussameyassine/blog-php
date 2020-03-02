<?php
function validatePost($post)
{

 
    $errors = array();

    if (empty($_user['title'])){
        array_push($errors, 'title is require');
    }
    if (empty($_user['body'])){
     array_push($errors, 'body is require');
    }
    if (empty($_user['topic_id'])){
     array_push($errors, 'password is require');
    }
    

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost){
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Post with that title already exists');
        }
        if (isset($post['save-post'])) {
            array_push($errors,'post whith that title already exist');
        }
        
    }

    return $errors;
}