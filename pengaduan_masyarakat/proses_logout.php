<!DOCTYPE html>
<html>
<head>
    <title>Halaman Home</title>
    <script>
        function confirmLogout() {
            var confirmLogout = confirm("Anda yakin ingin logout?");
            if (confirmLogout) {
                document.getElementById('logoutForm').submit();
            }
        }
    </script>
</head>
<body>
    <h1>Selamat datang, <?php echo $_SESSION['nama']; ?></h1>
    <form id="logoutForm" method="post">
        <input type="button" value="Logout" onclick="confirmLogout()">
        <input type="hidden" name="logout">
    </form>
</body>
</html>