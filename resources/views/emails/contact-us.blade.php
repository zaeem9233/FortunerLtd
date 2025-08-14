<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f8fc;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 40px auto;
            background: #ffffff;
            border-radius: 8px;
            border: 1px solid #d6e4f0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .email-header {
            background-color: #3b82f6;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            font-size: 20px;
            font-weight: bold;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-body p {
            margin: 10px 0;
        }
        .label {
            font-weight: bold;
            color: #3b82f6;
        }
        .email-footer {
            background-color: #f4f8fc;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            New Contact Form Submission
        </div>
        <div class="email-body">
            <p><span class="label">Name:</span> {{ $formData['name'] }}</p>
            <p><span class="label">Email:</span> {{ $formData['email'] }}</p>
            <p><span class="label">Message:</span></p>
            <p>{{ $formData['message'] }}</p>
        </div>
        <div class="email-footer">
            This email was sent from your website's contact form.
        </div>
    </div>
</body>
</html>
