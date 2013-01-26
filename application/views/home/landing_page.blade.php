<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Missionhub => Mailchimp</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <form action="{{ URL::to('base/home') }}" method="POST">
        <label>MailChimp API Key: </label><input type="text" name="mc-key" id="mc-key">
        <label>MissionHub API Key: </label><input type="text" name="mh-key" id="mh-key">
        <input type="submit">
    </form>
</body>
</html>
