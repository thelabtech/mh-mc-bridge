<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Missionhub => Mailchimp</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    @foreach ($contacts as $contact)
    <p>{{ '('.$contact['id'].')'.$contact['last_name'].', '.$contact['first_name'].': '.$contact['email'] }}</p>
    @endforeach
</body>
</html>
