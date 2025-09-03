{{-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Professional Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
        }

        h2 {
            color: #2c3e50;
            margin-bottom: 15px;
        }

        p {
            font-size: 14px;
            color: #333;
            margin: 6px 0;
        }

        .highlight {
            font-weight: bold;
            color: #2c3e50;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            background: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            margin-top: 15px;
        }

        .btn:hover {
            background: #2980b9;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>📩 New Professional Request</h2>

        <p>A new professional has requested to join your platform:</p>

        <p><span class="highlight">Name:</span> {{ $professional->name }}</p>
        <p><span class="highlight">Email:</span> {{ $professional->email }}</p>
        <p><span class="highlight">Contact:</span> {{ $professional->contact }}</p>

        <p>You can review their details in the admin dashboard.</p>

        <a href="{{ url('/admin') }}" class="btn">View in Dashboard</a>

        <div class="footer">
            <p>This is an automated message from your system. Please do not reply.</p>
        </div>
    </div>
</body>

</html> --}}





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Professional Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-radius: 5px 5px 0 0;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>New Professional Request</h2>
        </div>
        <div class="content">
            <p><strong>Dear Admin,</strong></p>
            <p>A new professional has submitted a request. Below are the details:</p>
            <p><strong>Name:</strong> {{ $professional->name }}</p>
            <p><strong>Email:</strong> {{ $professional->email }}</p>
            <p><strong>Contact:</strong> {{ $professional->contact }}</p>
            <p>Please review the request and take appropriate action.</p>
        </div>
        <div class="footer">
            <p>This is an automated email. Please do not reply directly to this message.</p>
        </div>
    </div>
</body>

</html>
