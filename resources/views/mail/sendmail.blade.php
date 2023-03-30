<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
</head>

<body>
    @if ($mailData)
        <h1>{{ $mailData['title'] }}</h1>
        <p>{{ $mailData['body'] }}</p>
        <p>Thanks For shopping with us sumbit your review on our website</p>
        <h3>Thank You</h3>
    @endif
</body>

</html>
