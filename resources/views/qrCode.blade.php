<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="resources/css/app.css">
	<title></title>
</head>
<body>
    
<div id="pro">
	<h1>Your own QR Code</h1>
    {!! QrCode::size(500)->generate('Hello, '.$fname.' !'."\n".'Your address is '.$st); !!}
    <p>Your qr code has been sent to your email.</p>
</div>
</body>
</html>