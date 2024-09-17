<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #333333;
            font-size: 24px;
            text-align: center;
        }
        p {
            color: #666666;
            font-size: 16px;
            line-height: 1.5;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            text-align: center;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Menu Created</h1>
        <p>Hi {{ $name }},</p>
        <p>You have successfully created a new menu for restaurant: <strong>{{ $menuName }}</strong>.</p>
        <p>Thank you for using our service!</p>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Sahad's Company . All rights reserved.</p>
        </div>
    </div>
</body>
</html>
