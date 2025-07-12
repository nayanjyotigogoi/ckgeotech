<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Quote Request</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; padding: 20px; margin: 0;">
    <div style="max-width: 600px; margin: auto; background-color: #ffffff; border-radius: 8px; padding: 30px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
        <h2 style="color: #333333; text-align: center;">📩 New Quote Request Received</h2>

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <tr>
                <td style="padding: 8px; font-weight: bold;">Name:</td>
                <td style="padding: 8px;">{{ $data['name'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Email:</td>
                <td style="padding: 8px;">{{ $data['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Phone:</td>
                <td style="padding: 8px;">{{ $data['phone'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Company:</td>
                <td style="padding: 8px;">{{ $data['company'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Project Type:</td>
                <td style="padding: 8px;">{{ $data['project_type'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Location:</td>
                <td style="padding: 8px;">{{ $data['location'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Start Date:</td>
                <td style="padding: 8px;">{{ $data['start_date'] ?? 'N/A' }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Materials:</td>
                <td style="padding: 8px;">{{ is_array($data['materials']) ? implode(', ', $data['materials']) : $data['materials'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; font-weight: bold;">Message:</td>
                <td style="padding: 8px;">{{ $data['message'] ?? 'N/A' }}</td>
            </tr>
        </table>

        <p style="margin-top: 30px; font-size: 13px; color: #777;">This message was sent from your website quote form.</p>
    </div>
</body>
</html>
