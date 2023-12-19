<?php if($_SESSION['user']['role'] !== 'admin') { header("Location: /"); exit; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<?php require "header.php"; ?>