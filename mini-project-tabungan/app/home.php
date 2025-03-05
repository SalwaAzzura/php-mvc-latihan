<!DOCTYPE html>
<html>
<head>
    <title>Home - Tabungan Mini</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <h1>Tabungan Mini</h1>
        <?php if(isset($_SESSION['user_id'])): ?>
            <div>
                Welcome, <?php echo $_SESSION['user_name']; ?>
                <?php if($_SESSION['user_role'] === 'admin'): ?>
                    
                <?php endif; ?>
                <a href="admin.php">Admin Dashboard</a>
                <a href="save">Simpan Tabungan</a>
                <a href="logout">Logout</a>
            </div>
        <?php else: ?>
            <div>
                <a href="login">Login</a>
                <a href="register">Register</a>
            </div>
        <?php endif; ?>
    </nav>

    <main>
        <h2>Recent Tabungan</h2>
        <?php foreach($savings as $saving): ?>
            <div class="saving-card">
                <h3><?php echo htmlspecialchars($saving['name']); ?></h3>
                <p>Amount: Rp<?php echo number_format($saving['amount']); ?></p>
                <p>Message: <?php echo htmlspecialchars($saving['message']); ?></p>
                <small>Date: <?php echo $saving['created_at']; ?></small>
            </div>
        <?php endforeach; ?>
    </main>
</body>
</html>