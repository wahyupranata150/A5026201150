<!DOCTYPE html>
<html>

<head>
    <title>Find the Factorial!</title>
</head>
<body>
    <h3>Find the factorial of any number!</h3>
    <form action="hasilfaktorial" method="POST">
        @csrf
        <label for="angka">Enter number:</label>
        <input type="text" name="angka">
        <button type="submit" name="proses">Proses</button>
    </form>
</body>


</html>
