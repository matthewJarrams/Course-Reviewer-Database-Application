<?php
session_start();
include "db_conn.php";


if (isset($_SESSION['ID']) && isset($_SESSION['Username'])) {



?>

<!DOCTYPE html>
<html> 
<head>
    <title>HomePage</title>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body>
	
	<form action="view-classes.php" method="post">   

		<button type="Class"> View Classes </button>
        <a href="logout.php" class = "logoutLblPos">Logout</a>

    </form>
	
	<form action="search-index.php" method="post">   
        
       	<button type="Building"> Search Classes </button>
        <a href="logout.php" class = "logoutLblPos">Logout</a>

    </form>
	
	<form action="home.php" method="post">   
        
       	<button type="Club"> Add Class </button>
        <a href="logout.php" class = "logoutLblPos">Logout</a>

    </form>
	<form action="home.php" method="post">   
        
       	<button type="Club"> Make Review </button>
        <a href="logout.php" class = "logoutLblPos">Logout</a>

    </form>


</body>



</html>

<?php
}else{
    header("Location: index.php");
    exit();

}
?>