<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <nav>
        <x-nav-links href="/">Home</x-nav-links>   
        <x-nav-links href="/about" style="color: aqua;">About</x-nav-links>   
        <x-nav-links href="/contact">Contact Us</x-nav-links>   
    </nav>
    {{ $slot}}
</body>
</html>