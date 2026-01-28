<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    echo "
    <html>
    <head>
        <title>Registration Success</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body class='bg-light'>
        <div class='container mt-5'>
            <div class='alert alert-success'>
                <h4>Registration Successful 🎉</h4>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <a href='index.html' class='btn btn-primary'>Go Back</a>
            </div>
        </div>
    </body>
    </html>
    ";
}
?>
