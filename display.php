<?php
include 'conn.php';
session_start();

echo $_SESSION['name'];
if(!$_SESSION['name'])
{
header("location:login.php");
}

session_start();
include 'conn.php';
if(!$_SESSION['name'])
{
header("location:login.php");
}

$id = $_SESSION['id'];

$q="select * from time where id=$id";

$query = mysqli_query($conn,$q);
$res = mysqli_fetch_array($query);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <?php
    // PHP code for any dynamic content can go here
    ?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>Start Soft</div>
            <div class="list-group list-group-flush my-3">
                <a href="display.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="attandance.php?id=<?php echo $id; ?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Tasks</a>
                <a href="News.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>News</a>
               
                
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">8</h3>
                                <p class="fs-5">Total Enrollment</p>
                            </div>
                            <i class="fas fa-user-plus fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">current activity</p>
                            </div>
                            <i
                                class="fas fas fa-running fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">current present</p>
                            </div>
                            <i class="fas fa-check fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">5</h3>
                                <p class="fs-5">current Absent</p>
                            </div>
                            <i class="fas fa-times fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
            <div class="container">
	<div class="col-lg-12"><br>
		<div class="row">
		<h3 class="text-white">Displaying Records</h3>
        <a href="insert.php" class="col-lg-3"><button class="btn btn-success col-lg-3">Add</button></a> <a href="logout.php" class="col-lg-3"><button class="btn btn-success col-lg-3" name="logout">logout</button></a>
    </div><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-white">
				<th><h5>ID</h5></th>
				<th><h5>Name</h5></th>
				<th><h5>Age</h5></th>
				<th><h5>Salary</h5></th>
				<th><h5>Qualification</h5></th>
				<th><h5>Date of Birth</h5></th>
				<th><h5>Date of Join</h5></th>
			</tr>


			<?php
include 'conn.php';


$q="select * from employee";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

			<tr class="text-white">
				<th><?php echo $res['id'] ?></th>
				<th><?php echo $res['name'] ?></th>
				<th><?php echo $res['age'] ?></th>
				<th><?php echo $res['salary'] ?></th>
				<th><?php echo $res['qualification'] ?></th>
				<th><?php echo $res['date_of_birth'] ?></th>
				<th><?php echo $res['date_of_join'] ?></th>
				<th><a  href="update.php?id=<?php echo $res['id']; ?>" class="text-white"><button class="btn btn-success">View</button></a></th>
			</tr>
<?php }
?>

		</table>
	</div>
            

            

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        if (isset($_POST['view'])) {

$_SESSION['id'] = $id;
	header("location:attendance1.php");

}

        
    </script>
</body>

</html>
