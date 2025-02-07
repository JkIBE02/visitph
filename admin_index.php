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
                  <h3>10</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <!-- <div class="col-lg-3 col-6">

              <div class="small-box bg-success">
                <div class="inner">
                  <h3>3<sup style="font-size: 20px"></sup></h3>

                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div> -->

            <div class="col-lg-3 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>12</h3>

                  <p>Most Visited</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-lg-3 col-6">

              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>8</h3>

                  <p>Active Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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