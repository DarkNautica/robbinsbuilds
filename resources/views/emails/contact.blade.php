<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
        }
        .content p strong {
            color: #333333;
        }
        .content .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .footer {
            text-align: center;
            padding: 15px;
            background: #f1f1f1;
            font-size: 13px;
            color: #555555;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>New Contact Submission</h1>
        </div>
        <!-- Content -->
        <div class="content">
            <p><strong>Hi Jayden,</strong></p>
            <p>You’ve received a new contact form submission from your website. Here are the details:</p>
            <p><strong>First Name:</strong> <span class="highlight">{{ $details['firstName'] }}</span></p>
            <p><strong>Last Name:</strong> <span class="highlight">{{ $details['lastName'] }}</span></p>
            <p><strong>Email Address:</strong> <span class="highlight">{{ $details['email'] }}</span></p>
            <p><strong>Message:</strong></p>
            <p>{{ $details['message'] }}</p>
            <p style="margin-top: 20px;">
                Make sure to follow up with this contact promptly. If you have any questions or need assistance, 
                <a href="mailto:jaydenlyricr@example.com">let us know</a>.
            </p>
        </div>
        <!-- Footer -->
        <div class="footer">
            <p>This message was sent automatically by your website's contact form.</p>
            <p><a href="https://robbinsbuilds.com" target="_blank">View your website</a></p>
        </div>
    </div>
</body>
</html>
