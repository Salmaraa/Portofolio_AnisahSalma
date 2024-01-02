<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
</head>
<body>
    <p>Dear {{ $name }},</p>
    
    <p>Congratulations! You have successfully registered on the Anisah Salma Portfolio website.</p>
    
    <p>Your account details:</p>
    <ul>
        <li><strong>Name:</strong> {{ $name }}</li>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Password:</strong> ********</li>
    </ul>

    <p>Thank you for joining us!</p>

    <p>Best regards,<br> Anisah Salma Portfolio Team</p>
</body>
</html>