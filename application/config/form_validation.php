<?php

// Data user
$config = array(
    'user/insert'   => array(
        array(
            'field'     => 'role_id',
            'label'     => 'role',
            'rules'     => 'required'
        ),
        array(
            'field'     => 'nip',
            'label'     => 'nip',
            'rules'     => 'required|numeric|min_length[8]|max_length[8]'
        ),
        array(
            'field'     => 'email',
            'label'     => 'Email',
            'rules'     => 'required|valid_email'
        ),
        array(
            'field'     => 'firstname',
            'label'     => 'Firstname',
            'rules'     => 'required|min_length[3]|max_length[20]'
        ),
        array(
            'field'     => 'lastname',
            'label'     => 'Lastname',
            'rules'     => 'required|min_length[3]|max_length[20]'
        ),
        array(
            'field'     => 'password',
            'label'     => 'Password',
            'rules'     => 'required|min_length[8]'
        )

    ),
    'user/update'   => array(
        array(
            'field'     => 'iduser',
            'label'     => 'ID user',
            'rules'     => 'required'
        ),
        array(
            'field'     => 'role_id',
            'label'     => 'role',
            'rules'     => 'required'
        ),
        array(
            'field'     => 'nip',
            'label'     => 'nip',
            'rules'     => 'required|numeric|min_length[8]|max_length[8]'
        ),
        array(
            'field'     => 'email',
            'label'     => 'Email',
            'rules'     => 'required|valid_email'
        ),
        array(
            'field'     => 'firstname',
            'label'     => 'Firstname',
            'rules'     => 'required|min_length[3]|max_length[20]'
        ),
        array(
            'field'     => 'lastname',
            'label'     => 'Lastname',
            'rules'     => 'required|min_length[3]|max_length[20]'
        ),
        array(
            'field'     => 'password',
            'label'     => 'Password',
            'rules'     => 'required|min_length[8]'
        )
    )
);