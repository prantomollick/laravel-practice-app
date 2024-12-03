<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to Our Website</h1>
    </header>
    <main>
        <section>
            <h2>About Us</h2>
            <p>This is the home page of our website. Here you can find information about our services and team.</p>
        </section>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Our Website. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>