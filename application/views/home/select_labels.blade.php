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
        <label for="mh_label">Choose the mission hub label you want to: </label>
        <select name="mh_label" id="mh_label">
            @foreach ($labels as $id => $label)
            <option value="{{ $id }}">{{ $label }}</option>
            @endforeach
        </select>
        <label for="mc_list">Choose a Mailchimp: </label>
        <select name="mc_list">
            @foreach ($lists as $id => $list)
            <option value="{{ $id }}">{{ $list }}</option>
            @endforeach
        </select>
        <input type="submit" value="DO MORE STUFF!!!">
    </form>
</body>
</html>
