<?php 

if($action === 'delete__comment') {
	// ici on gere la suppression d'un commentaire
	if(isset($_GET['id']) && isset($_GET['commentId'])) {
		$comment = getComment($_GET['commentId']);
		if($comment['user_id'] != $_SESSION['user']['id']) {
			header("Location: /article.php?id=" . $_GET['id'] . "&error=true");
			exit;
		} else {
			try {
				deleteComment($_GET['commentId'], $_SESSION['user']['id']);
				header("Location: /article.php?id=" . $_GET['id'] . "&success=true");
			} catch(PDOException $e) {
				die($e->getMessage());
			}
		}			
	}
}