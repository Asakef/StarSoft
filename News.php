<?php
include 'conn.php';
// session_start();

// echo $_SESSION['name'];
// if(!$_SESSION['name'])
// {
// header("location:login.php");
// }

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
            <a href="display.php?id=<?php echo $id; ?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Dashboard</a>
                <a href="attandance.php?id=<?php echo $id; ?>" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Tasks</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
            <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Paragraphs</title>
</head>

<body>

<header>
<header style="background-color: #333; color: white; text-align: center; padding: 20px;">
        <h1>Remote Monitoring Software</h1>
        <p style="color: white;">Monitor and manage your remote devices with ease.</p>
    </header>

    <main style="max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center; color: #333;">
        <p style="margin-bottom: 20px; line-height: 1.6; color: white;">This is a simplified example of a remote monitoring software application. In a real-world scenario, such software would provide features like:</p>

        
            Real-time monitoring of device status.</li>
            Alerts and notifications for critical events.</li>
            Historical data analysis and reporting.</li>
            User authentication and secure access controls.</li>
            Integration with remote devices and sensors.</li>
        

        <p style="color: white;">Building a complete remote monitoring system involves backend development, database management, and potentially the use of technologies like JavaScript, Python, Node.js, and more.</p>
    

</body>

</html>

            
            

			<?php
include 'conn.php';


$q="select * from employee";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

<?php }
?>

		</table>
	</div>
            

            

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    
</body>

</html>
