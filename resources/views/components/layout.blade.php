<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite('resources/css/app.css')
</head>
<body>
<header class="bg-blue-800 text-white">
	<div class="mx-auto max-w-6xl p-4 sm:px-6 lg:px-8">
		<div class="flex justify-between items-center">
			<h1>
				<a href="/">Ride Share</a>
			</h1>
			<div>
				<x-breadcrumbs />
			</div>
		</div>
	</div>
</header>
<div class="antialiased max-w-6xl mx-auto p-4 sm:p-6 lg:p-8">
	{{ $slot }}
</div>
</body>
</html>

