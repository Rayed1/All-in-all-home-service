<?php

	//validate firstname
	if(empty($_POST['firstname']))
	{
		$info['errors']['firstname'] = "First name is required";
	}else
	if(!preg_match("/^[\p{L}]+$/", $_POST['firstname']))
	{
		$info['errors']['firstname'] = "First name cant have special characters or spaces and numbers";
	}

	//validate lastname
	if(empty($_POST['lastname']))
	{
		$info['errors']['lastname'] = "Last name is required";
	}else
	if(!preg_match("/^[\p{L}]+$/", $_POST['lastname']))
	{
		$info['errors']['lastname'] = "Last name cant have special characters or spaces and numbers";
	}

	//Phone number Validation
	if(empty($_POST['PhoneNumber']))
	{
		$info['errors']['PhoneNumber'] = "Phone number is required";
	}else
	if(!preg_match("/^(?:\+88|88)?(01[3-9]\d{8})$/", $_POST['PhoneNumber']))
	{
		$info['errors']['PhoneNumber'] = "Write your number correctly";
	}

	

	//validate email
	if(empty($_POST['email']))
	{
		$info['errors']['email'] = "Email is required";
	}else
	if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		$info['errors']['email'] = "Email is not valid";
	}

	//validate gender
	$genders = ['Male','Female'];
	if(empty($_POST['gender']))
	{
		$info['errors']['gender'] = "Gender is required";
	}else
	if(!in_array($_POST['gender'], $genders))
	{
		$info['errors']['gender'] = "Gender is not valid";
	}

	//validate password
	if(empty($_POST['password']))
	{
		$info['errors']['password'] = "Password is required";
	}else
	if($_POST['password'] !== $_POST['retype_password'])
	{
		$info['errors']['password'] = "Passwords dont match";
	}else
	if(strlen($_POST['password']) < 8)
	{
		$info['errors']['password'] = "Password must be at least 8 characters long";
	}


	if(empty($info['errors']))
	{
		//save to database
		$arr = [];
		$arr['firstname'] 	= $_POST['firstname'];
		$arr['lastname'] 	= $_POST['lastname'];
	$arr['PhoneNumber'] = $_POST['PhoneNumber'];
		$arr['email'] 		= $_POST['email'];
		$arr['gender'] 		= $_POST['gender'];

		$arr['password'] 	= password_hash($_POST['password'], PASSWORD_DEFAULT);
		$arr['date'] 		= date("Y-m-d H:i:s");

		db_query("insert into users (firstname,lastname,PhoneNumber,gender,password,date,email) values (:firstname,:lastname,:PhoneNumber,:gender,:password,:date,:email)",$arr);

		$info['success'] 	= true;
	}