<!DOCTYPE html>
<html>
<head>
    <title>Register - Tabungan Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>Tabungan Mini</h1>
        <a href="home">Home</a>
    </nav>

    <main>
        <h2>Register</h2>
        <form method="POST" action="register">
            <div>
                <label>Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="login">Login</a></p>
    </main>
</body>
</html>