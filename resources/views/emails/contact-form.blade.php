<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        /* Base styles that work in email clients */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            color: #1f2937;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9fafb;
        }
        .header {
            background-color: #4f46e5;
            color: white;
            padding: 16px 20px;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: white;
            padding: 24px;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
        }
        .field {
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e5e7eb;
        }
        .field:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .label {
            font-weight: 600;
            color: #4b5563;
            display: block;
            margin-bottom: 4px;
        }
        .value {
            color: #1f2937;
        }
        .footer {
            margin-top: 24px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2 style="margin: 0; font-size: 20px;">New Lead from Website</h2>
    </div>
    <div class="content">
        <div class="field">
            <span class="label">Name:</span>
            <div class="value">{{ $data['name'] }}</div>
        </div>
        <div class="field">
            <span class="label">Phone:</span>
            <div class="value">{{ $data['phone'] }}</div>
        </div>
        <div class="field">
            <span class="label">Message:</span>
            <div class="value">{{ $data['message'] }}</div>
        </div>
    </div>
    <div class="footer">
        <p>This message was sent from the contact form on <a href="https://verifiedbuildersconsultant.com" style="color: #4f46e5; text-decoration: underline;">verifiedbuildersconsultant.com</a>.</p>
    </div>
</div>
</body>
</html>
