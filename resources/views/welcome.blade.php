<!doctype html>
<html>
    <head>
    	<title>

    	</title>

    </head>
<body>
<ul>
	@foreach ($names as $name)

	<li>
		{{ $name->body }}
	</li>
	@endforeach

</ul>

</body>
</html>