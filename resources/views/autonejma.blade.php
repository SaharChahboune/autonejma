<!-- resources/views/another-page.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Another Page</title>
</head>
<body>
    @if(session()->has('nom') && session()->has('prenom') && session()->has('role'))
        <p>Nom: {{ session('nom') }}</p>
        <p>Prénom: {{ session('prenom') }}</p>
        <p>Role: {{ session('role') }}</p>
    @else
        <p>User information not available.</p>
    @endif

    <!-- Your additional content here -->

</body>
</html>
