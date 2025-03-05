<!DOCTYPE html>
<html>
<head>
    <title>Tabungan- Tabungan Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>Tabungan Mini</h1>
        <a href="home">Home</a>
    </nav>

    <main>
        <h2>Membuat Tabungan Mini</h2>
        <form method="POST" action="save">
            <div>
                <label>Amount (Rp)</label>
                <input type="number" name="amount" required>
            </div>
            <div>
                <label>Message</label>
                <textarea name="message" required></textarea>
            </div>
            <button type="submit">Simpan</button>
        </form>
    </main>
</body>
</html>