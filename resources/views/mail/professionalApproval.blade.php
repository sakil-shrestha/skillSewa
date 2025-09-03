<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professional Account Approval</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header {
            background-color: #4CAF50;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
            color: #ffffff;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            line-height: 1.6;
        }

        .credentials {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin: 20px 0;
        }

        .credentials p {
            margin: 5px 0;
            font-size: 16px;
        }

        .credentials strong {
            color: #4CAF50;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-size: 16px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Account Approval Confirmation</h1>
        </div>
        <div class="content">
            <p>Dear {{ $professional->name }},</p>
            <p>We are pleased to inform you that your professional account has been approved! You can now log in to our
                platform using the credentials provided below.</p>

            <div class="credentials">
                <p><strong>Email:</strong> {{ $professional->email }}</p>
                <p><strong>Password:</strong> {{ $password }}</p>
            </div>

            <p>For security reasons, we recommend changing your password after your first login.</p>

            <a href="{{ url('professional/login') }}" class="button">Log In to Your Account</a>

            <p>If you have any questions or need assistance, please contact our support team.</p>
            <p>Thank you for joining our platform!</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
            <p>Contact us at <a href="mailto:support@yourcompany.com">support@yourcompany.com</a></p>
        </div>
    </div>
</body>

</html>
