<?php
session_start();
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($query);
    $user = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $updateQuery = "UPDATE users SET username='$username', email='$email', role='$role' WHERE id=$id";
    if ($conn->query($updateQuery)) {
        header("Location: user_management.php");
        exit();
    } else {
        echo "Error updating user: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <?php include 'inc/css.php'; ?>

    <style>
        .form-control {
            width: 350px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    <?php include 'inc/navbar.php'; ?>
    

    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit User</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Role:</label>
                                <select name="role" class="form-control">
                                    <option value="admin" <?= ($user['role'] === 'admin') ? 'selected' : ''; ?>>Admin</option>
                                    <option value="user" <?= ($user['role'] === 'user') ? 'selected' : ''; ?>>User</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="user_management.php" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'inc/footer.php' ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/jquery/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

<?php include 'inc/js.php' ?>

</body>
</html>
