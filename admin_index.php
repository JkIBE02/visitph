<?php
// Create a single connection to the database
$conn = new mysqli("localhost", "root", "", "tourism_website");  // Use your correct credentials

// Fetch the total number of users from the database
$sql = "SELECT COUNT(*) AS total_users FROM users";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_users = $row['total_users'];

// Fetch most visited destinations from the database
// $sql = "SELECT destination_id, COUNT(*) AS view_count FROM page_views GROUP BY destination_id ORDER BY view_count DESC LIMIT 1";
// $result = $conn->query($sql);
// $row = $result->fetch_assoc();
// $most_visited = $row['destination_id'];  // You can fetch more details (like name) from destinations table

// Close the connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Visit PH</title>
  <?php include 'inc/css.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include 'inc/navbar.php' ?>
    <div class="content-wrapper">

      <?php
      $arr = array(
        ["title" => "Home", "url" => "./"],
        ["title" => "Dashboard", "url" => "#"],
      );
      pagePath('Dashboard', $arr);
      ?>

      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-3 col-6">

              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $total_users; ?></h3> <!-- Dynamic value here -->
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $most_visited; ?></h3> <!-- You can modify this to show the name of the destination -->
                  <p>Most Visited</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="destination_management.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php echo $active_users; ?></h3>
                  <p>Active Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="user_management.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>

            </div>
          </div>

        </div>
        
      </section>
    </div>

    <?php include 'inc/footer.php'; ?>
  </div>

  <?php include 'inc/js.php' ?>
</body>

</html>
