<!DOCTYPE html>
<html>
<head>
    <title>Login - Tabungan Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>Tabungan Mini</h1>
        <a href="home">Home</a>
    </nav>

    <main>
        <h2>Login</h2>
        <form method="POST" action="login">
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register">Register</a></p>
    </main>
</body>
</html>