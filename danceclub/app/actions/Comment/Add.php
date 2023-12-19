<?php 

if(
	$action === 'add__comment' && 
	isset($_POST) && 
	!empty($_POST)
) {
	$errors = Form($_POST, [
		'content' => ['required', 'min:10'],
		'stars' => ['required', 'min:1', 'max:5']
	]);

	$validated = formValidation($_POST);
	if(empty($errors)) {
		var_dump($_SESSION['user']['id'], $_GET['id'], $_POST['content'], $_POST['stars']);
		try {
			addComment($_SESSION['user']['id'], $_GET['id'], $_POST['content'], $_POST['stars']);
			header("Location: /article.php?id=" . $_GET['id']);
		} catch(PDOException $e) {
			die($e->getMessage());
		}
	} 
}