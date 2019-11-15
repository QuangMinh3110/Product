<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.a{
			color: #F22525;
			text-align: center;
			font-size: 20px;
		}
		.b{
			text-align: center;
			background-color: #FF5151;
			font-size: 30px;
		}
	</style>
</head>
<body>
	<form method="post" action="doAdd.php">
		<table align="center" border="1">
			<tr>
				<th colspan="2" class="b"><b>PRODUCT ADDING</b></th>
			</tr>
			<tr>
				<td class="a">ProductID</td>
				<td><input type="text" name="productid"></td>
			</tr>
			<tr>
				<td class="a">ProductName</td>
				<td><input type="text" name="productname"></td>
			</tr>
			<tr>
				<td class="a">ProductDescription</td>
				<td><input type="text" name="productdescription"></td>
			</tr>
			<tr>
				<td class="a">Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="saving"></th>
			</tr>
		</table>
	</form>
</body>
</html>