<?php
function Form($request, $rules)
{
    $error = [];
    foreach ($rules as $field => $rule_array) {
        foreach ($rule_array as $rule) {
            switch ($rule) {
                case 'required':
                    if (!isset($request[$field]) || empty($request[$field])) {
                        $error[$field][] = 'Le champ ' . $field . ' est requis';
                    }
                    break;
                case 'max:255':
                    if (strlen($request[$field]) > 255) {
                        $error[$field][] = 'Le champ ' . $field . ' peut contenir au maximum 255 caractères';
                    }
                    break;
                case 'min:10':
                    if (strlen($request[$field]) < 10) {
                        $error[$field][] = 'Le champ ' . $field . ' doit contenir au minimum 10 caractères';
                    }
                    break;
            }
        }
    }
    return $error;
}
function formValidation($data) {
    foreach($data as $item) {
        $item = htmlspecialchars(stripslashes(trim($item)));
    }
    
    return $data;
}

function displayErrors($errors) {
	if(is_array($errors)) {
		foreach($errors as $error) {
			echo "<p class='text-red-400'>$error</p>";
		}
	} else {
		echo "<p class='text-red-400'>$errors</p>";
	}
}