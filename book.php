<?php session_start();
	// if (empty($_SESSION['Position'])) {
	// 	header("Location: login.php");
	// }
	$con= mysqli_connect('localhost','root','','htbook');
	mysqli_set_charset($con, 'UTF8');
	$sql="select * from books";
	$kq = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css" media="screen">
    	img{
    		width: 120px;
    		height: 150px;
    	}
    </style>
</head>
<body>
		<div class="" style="padding-bottom: 50px;">
			<div class="row" >
				<div class="col-md-12" >
					<div class="" >
						<?php include ('header.php'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="">
			<div class="row">
			    <div class="col-md-1">
			    </div>
			    <div class="col-md-11">
			    	<div class="table table-bored">
			    		<table>
                            <tr>
	                            <td>BookID</td>
				    			<td>Tên sách</td>
				    			<td>Ảnh</td>
				    			<td>Tác Giả</td>
				    			<td>Giá</td>
				    			<td>Loại Sách</td>
                            </tr>
                            <tr>
                            	<?php 
                            		while ($row = mysqli_fetch_array($kq)) {
                            			echo '<tr>';
									    echo '<td>'.$row["BookID"].'</td>';
									    echo '<td>'.$row["Name"].'</td>';
									    echo '<td><img src="img/'.$row["BookID"].'.jpg" alt=""></td>';
									    echo '<td>'.$row["Author"].'</td>';
									    echo '<td>'.$row["Price"].'</td>';
									    echo '<td>'.$row["TypeID"].'</td>';
									    echo '</tr>';
                            		}
                            	?>
                            </tr>
			    		</table>
			    	</div>
			    </div>
			</div>
		</div>
</body>
</html>


