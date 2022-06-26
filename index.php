<?php
//include auth.php file on all secure pages
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap-css/bootstrap.min.css">
    <link rel="stylesheet" href="font/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="font/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <title>Contact List</title>
</head>
<body>

    <header class="container-fluid d-flex justify-content-between bg-light shadow p-3">
        <h3 class="m-2">Contact List</h3>
        <div class="form d-flex justify-content-between align-items-center">
            <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
            <a href="./pages/login/login.php">Logout</a>
        </div>
    </header>
    <main class="container-fluid">
        <h4 class="text-center mt-4">All Contacts</h4>
        <div class="row mt-3 d-flex justify-content-center align-items-center responsive-header">
            <div class="col-7 d-flex justify-content-between align-items-center responsive-header-one">
                <div class="row d-flex justify-content-evenly align-items-center w-100 p-3">
                    <div class="col-sm-9 col-lg-10 col-xl-9 d-flex justify-content-center align-items-center w-50">
                        <label class="form-label w-50 text-center" for="sort-select">Sort by:</label>
                        <select class="form-select w-50 border-0 mb-2" name="sort-select" id="sort-select">
                            <option value="name">Name</option>
                            <option value="time">Time</option>
                            <option value="type">Type</option>
                        </select>
                    </div>
                    <p class="col-sm-3 col-lg-2 col-xl-3 text-center mt-2 w-50">Contacts Number: <b class="contact-number"></b></p>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-evenly align-items-center responsive-header-two">
                <input type="search" class="form-control w-50 filter-search" placeholder="Search...">
                <button class="d-flex align-items-center btn btn-success add-contact-btn">Add Contact <i class="fas fa-plus ms-2"></i></button>
            </div>
        </div>
        <table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
            <thead class="thead-dark">
                <tr>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody class="contact-list-body"></tbody>
        </table>
        <nav class="d-flex justify-content-center align-content-center">
            <ul class="pagination pagination-sm">
                <li class="page-item page-one active"><a class="page-link" href="">1</a></li>
                <li class="page-item page-two"><a class="page-link" href="">2</a></li>
            </ul>
        </nav>
    </main>

    <script src="vendor/bootstrap/bootstrap-js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="functions/app.js"></script>
</body>

</html>