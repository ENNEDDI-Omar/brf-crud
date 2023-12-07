<?php
  require'../../config/CONNECT.php';

  session_start();
  if ($_SESSION['Roles']!=='Teacher') {
    header('location:../../index.php');
  }

  $requete="SELECT * FROM Users";
  $query=mysqli_query($conx, $requete);

  // if(isset($query)){
  //   echo"<h1>SELECT DONE</H1>";
  // }else{
  //   echo"<h1>SELECT FAILED</h1>";
  // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

  <div class="">
    <div class="navigation">
      <ul>
        <li>
          <a href="#" class="logo">marionette<p>high school</p></a>
          <div class="rows">
            <img src="../brf-crud/images/add.png">
            <h1>Add new task</h1>
          </div>
        </li>
        <li class="active">
          <a href="../brf-crud/index.php" class="active">
            <span class="title"><i class='bx bxs-home-circle'></i>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="../brf-crud/pages/students.php">
            <span class="title"><i class='bx bxs-user'></i>Students</span>
          </a>
        </li>

        <li>
          <a href="../brf-crud/pages/teachers.php">
            <span class="title"><i class='bx bxs-user'></i>Teachers</span>
          </a>
        </li>

        <li>
          <a href="../brf-crud/pages/booking.php">
            <span class="title"><i class='bx bxs-bookmark-alt'></i>Booking</span>
          </a>
        </li>

        <li>
          <a href="../brf-crud/pages/settings.php">
            <span class="title"><i class='bx bxs-cog'></i>Settings</span>
          </a>
        </li>
        <div>
          <a href="../Brf06/assets/pages/dashboard-b06/login.php" class="logout">Logout</a>
        </div>
      </ul>

    </div>
  </div>

  <div class="header">
    <div class='bx bxs-chevron-left' id="remove"></div>
    <div class="title">
      <h1>Teacher Dashboard</h1>
    </div>
    <div class="search">
      <input type="text" placeholder="Search">
      <div class="icons">
        <img src="../brf-crud/images/bell.png" style="width: 40px;height: 40px;" alt="" srcset="">
      </div>
      <div class="admin">
        <img src="../brf-crud/images/omar.png" alt="" srcset="">
        <div class="name">
          <h1>Teacher</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="head d-flex justify-content-between">
    <h1>Overview</h1>
    <div class="dropdown date">
      <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Last Week</button>
      <ul class="dropdown-menu rounded-4">
        <li><button class="dropdown-item" type="button">Last Day</button></li>
        <li><button class="dropdown-item" type="button">Last Month</button></li>
        <li><button class="dropdown-item" type="button">Last Year</button></li>
      </ul>
    </div>
  </div>
  <div class="content">
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="../brf-crud/images/userimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Students</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-down" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="../brf-crud/images/visiimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Total Teachers</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4" data-aos="fade-up" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-md-8 offset-md-2 text-center">
                <img class="rounded-circle mb-4" alt="avatar1" src="../brf-crud/images/teachimg.png">
                <div class="h3 mb-2 font-weight-bold text-black">Marks</div>
                <div class="h5 mb-4 font-weight-bold text-gray-800">10,000+ / year</div>
                <div class="h6 mb-0 font-weight-bold text-gray-800">15% increase from last year</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <a href="../../controller/admin/add.php" class="btn btn-success">+add User</a>

    <div class="row tab">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-right" data-aos-duration="1500">
        <div class="card border-left-primary shadow h-100 custom-card">
          <div class="card-body">
            <div class="row no-gutters align-items-center">

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th>Full-Name</th>
                    <th>Email</th>
                    <th>Profil</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    if ( mysqli_num_rows($query) >0) {
                      while ($rows=mysqli_fetch_assoc($query)) {
                        
                     
                    ?>
                    <td><?php echo $rows['Name'];?></td>
                    <td><?php echo $rows['Email'];?></td>
                    <td><img src="../../assets/images/<?php echo $rows['Profil'];?>" style="width:40px;height:40px"></td>
                    <td><?php echo $rows['Roles'];?></td>
                    <td style="display: flex;" >
                      <button class="btn btn-default" ><a href="../../controller/admin/update.php $rows['id'] ?>"><i class='bx bx-edit-alt' style='color:#8a8b8c'  ></i></a></button><button class="btn btn-default"><a href="../../controller/admin/delete.php $rows['id']; ?>"><i class='bx bx-trash' style='color:#fe3030' ></i></a></button>
                    </td>  

                  </tr>
                  <?php
                   }
                  }else {
                    echo "ERREUR";
                  }
                  
                  ?>
                  

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



      <div class="col-xl-6">
        <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="card border-left-primary shadow h-100 custom-card">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-md-8 offset-md-2 text-center">
                  <img src="../Brf06/assets/pages/dashboard-b06/images/900.png" alt="" srcset="" class="mb-4">
                  <div class="h5 mb-2 font-weight-bold text-black mb-4">This Year Success</div>
                  <div class="h6 mb-0 font-weight-bold text-gray-800 mb-4">15% increase from last year</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-5" data-aos="fade-left" data-aos-duration="1500">
          <div class="card border-left-primary shadow h-100 custom-card">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col-md-8 offset-md-2 text-center">
                  <img src="../Brf06/assets/pages/dashboard-b06/images/7000.png" alt="" srcset="" class="mb-4">
                  <div class="h5 mb-2 font-weight-bold text-black mb-4">This Year Success</div>
                  <div class="h6 mb-0 font-weight-bold text-gray-800 mb-4">15% increase from last year</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="../../assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
</body>



<script>
  AOS.init();
</script>

</html>