<?php
    //require_once '../bootstrap.php';
    $data = new PatientsController();
    $patients = $data->getAllPatients();
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo BASE_URL ?>styles/dashboard/dashboard.css" />
  </head>
  <body>
  <nav class="nav-dashboard">
      <div class="nav-title">
          <h1 class="title">Menu Operation</h1>
      </div>
      <div class="admin-img">
          <img
                  src="./images/icons/admin-icon.svg"
                  alt="Profile picture admin"
          />
          <h2>Dr Rahbani</h2>
          <h3>Admin</h3>
      </div>
      <div class="operation-menu">
          <ul>
              <li>
                  <img src="./images/icons/patient-icon.svg" alt="" />
                  <a href="#">Patient</a>
              </li>
              <li>
                  <img src="./images/icons/Medecin-icon.svg" alt="" />
                  <a href="#">Medcin</a>
              </li>
              <li>
                  <img src="./images/icons/visite-icon.svg" alt="" />
                  <a href="#">Visite</a>
              </li>
          </ul>
      </div>
  </nav>

  <main>
        <header>
            <div class="header-title">
                <h2>Liste des visite</h2>
            </div>
            <div class="buttons">
                <a href="#" class="add">
                    AJOUTER UNE VISITE
                </a>
                <a href="#" class="logout">
                    Se deconneter
                    <img src="<?php echo BASE_URL ?>images/icons/sign-out-alt 1.svg" alt="">
                </a>
            </div>
        </header>

        <table id="data-table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Patient_id</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>birthday</th>
                    <th>phone</th>
                    <th>email</th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($patients as $patient): ?>
                <tr>
                    <td><?php echo $patient['person_id'] ?></td>
                    <td><?php echo $patient['firstname'] ?></td>
                    <td><?php echo $patient['lastname'] ?></td>
                    <td><?php echo $patient['birthday'] ?></td>
                    <td><?php echo $patient['phone'] ?></td>
                    <td><?php echo $patient['email'] ?></td>
                    <td class="icon"><img src="<?php echo BASE_URL ?>images/icons/edit.png" alt=""></td>
                    <td class="icon"><img src="<?php echo BASE_URL ?>images/icons/delete.png" alt=""></td>
                <?php endforeach; ?>


                </tr>
            </tbody>
        </table>
    </main>
  </body>
</html>