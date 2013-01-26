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
        <p>Hint: 802a9c43b17e0cd90419f9ae55c77423-us6</p>
        <label for="mh_key">MissionHub API Key: </label><input type="text" name="mh_key" id="mh_key">
        <p>Hint: f8602fea64e7c02d3c198a8316e507615f6e976c5798f538f4d0c3bb92452258</p>
        <input type="submit" value="DO STUFF!!!">
    </form>
</body>
</html>
