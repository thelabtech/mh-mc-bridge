<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Missionhub => Mailchimp</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    <form action="{{ URL::to('home/index') }}" method="POST">
        <label for="mc_key">MailChimp API Key: </label><input type="text" name="mc_key" id="mc_key">
        <label for="mh_key">MissionHub API Key: </label><input type="text" name="mh_key" id="mh_key">
        <input type="submit" value="DO STUFF!!!">
    </form>
</body>
</html>
