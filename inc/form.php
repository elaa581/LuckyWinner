<?php



// ✅ Initialiser toujours les variables AVANT le if
$firstname = '';
$lastname  = '';
$email     = '';

$errors = [
    'firstNameError' => '',
    'lastNameError'  => '',
    'emailError'     => '',
];

// ✅ Traitement seulement si formulaire soumis
if (isset($_POST['submit'])) {
    $firstname = trim($_POST['firstname']);
    $lastname  = trim($_POST['lastname']);
    $email     = trim($_POST['email']);

    // Validation
    if (empty($firstname)) {
        $errors['firstNameError'] = '⚠️ Le prénom est vide';
    }

    if (empty($lastname)) {
        $errors['lastNameError'] = '⚠️ Le nom est vide';
    }

    if (empty($email)) {
        $errors['emailError'] = '⚠️ L\'email est vide';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = '⚠️ Entrez un email valide';
    }

    if (array_filter($errors)) {
    return;
}

    // Insertion si aucune erreur
    if (!array_filter($errors)) {
        // Échapper les données
        $firstname = mysqli_real_escape_string($conn, $firstname);
        $lastname  = mysqli_real_escape_string($conn, $lastname);
        $email     = mysqli_real_escape_string($conn, $email);

        $sql = "INSERT INTO user (firstname, lastname, email) VALUES ('$firstname','$lastname','$email')";
        if (mysqli_query($conn, $sql)) {
            header('Location: ' . htmlspecialchars($_SERVER['PHP_SELF']));
            exit();
        } else {
            echo '❌ Erreur SQL : ' . mysqli_error($conn);
        }
    }
}
?>

