<?php require "header.php";?>

<?php
	if (isset($_GET['submit'])) {
		$finish = mysqli_query($connection, "UPDATE laptop SET brand='".$_GET['brand']."',  price=".$_GET['price'].", inch='".$_GET['diagonal']."', screen_resolution='".$_GET['screen']."', ram=".$_GET['ram'].", opeartion_system='".$_GET['operation_system']."', processor='".$_GET['processor']."', hard_disk=".$_GET['hard']." WHERE id=".$_GET['id']);
		$photoFinish = mysqli_query($connection, "UPDATE gallery SET img_src='".$_GET['img_url']."' WHERE laptop_id=".$_GET['id']);
		if (!$photoFinish) {
			echo "ERROR";
		}
	}
	if (isset($_GET['id']) || isset($_GET['submit'])) {
		$id = $_GET['id'];
		$res = mysqli_query($connection, "SELECT * FROM laptop WHERE id=".$id);
		$result = mysqli_fetch_assoc($res);
		$pho = mysqli_query($connection, "SELECT * FROM gallery WHERE laptop_id=".$id);
		$photo = mysqli_fetch_assoc($pho);
	}
	if (isset($_GET['delete'])) {
		$res = mysqli_query($connection, "DELETE FROM laptop WHERE id=".$id);
		$result = mysqli_query($connection, "DELETE FROM gallery WHERE laptop_id=".$id);
		echo "<div style='width: 100%; display: flex; justify-content: center; margin-top: 50px;'><a href='/' style='text-align: center;'>Домой</a></div>";
		die();
	}
?>

<style type="text/css">
	select, option {
		cursor: pointer;
		font-size: 18px;
		width: 250px;
		margin: 10px 0;
	}

	input {
		font-size: 20px;
		width: 250px;
		height: 30px;
		margin: 10px 0;

		border: 1px solid gray;
	}

	input[type='submit'] {
		border: 1px solid #00bccc;
		background: white;
		color: #00bccc;
		cursor: pointer;
	}

	input[type='submit']:hover {
		background: #00bccc;
		color: white;
	}

	.add_div {
		margin-top: 20px;
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.card {
		width: 100%;
		display: flex;
		justify-content: center;
	}

	@media (max-width: 1200px) {
		.container {
			padding: 0 20px;
		}
	}
</style>

<section style="margin-top: 50px;" class="container">
	<form style="width: 100%; display: flex; justify-content: center;" method="get"><input type="submit" name="delete" value="Удалить товар"><input type="hidden" name="id" value="<?php echo $result['id'];?>"></form>
	<div class="div">
		<form class="add_div">
			<select onchange="changedBrand(this)">
				<option disabled selected>Выберите бренд</option>
				<option <?php if ($result['brand'] == "Apple") echo "selected";?>>Apple</option>
				<option <?php if ($result['brand'] == "Acer") echo "selected";?>>Acer</option>
				<option <?php if ($result['brand'] == "Asus") echo "selected";?>>Asus</option>
				<option <?php if ($result['brand'] == "Lenovo") echo "selected";?>>Lenovo</option>
				<input type="hidden" name="brand" id="brand" value="<?php echo $result['brand'];?>">
			</select>
			<input type="hidden" name="id" value="<?php echo $result['id'];?>">
			<input type="number" name="price" placeholder="Цена" value="<?php echo $result['price'];?>">
			<select onchange="changedDiagonal(this)">
				<option selected disabled>Диагональ экрана</option>
				<option <?php if ($result['inch'] == "12\"") echo "selected";?>>12"</option>
				<option <?php if ($result['inch'] == "13,3\"") echo "selected";?>>13,3"</option>
				<option <?php if ($result['inch'] == "14\"") echo "selected";?>>14"</option>
				<option <?php if ($result['inch'] == "15,6\"") echo "selected";?>>15,6"</option>
				<option <?php if ($result['inch'] == "16\"") echo "selected";?>>16"</option>
				<option <?php if ($result['inch'] == "17,3\"") echo "selected";?>>17,3"</option>
				<input type="hidden" name="diagonal" id="diagonal" value="<?php echo $result['inch'];?>">
			</select>
			<select onchange="changedScreen(this)">
				<option selected disabled>Разрешение экрана</option>
				<option <?php if ($result['screen_resolution'] == "1920x1080") echo "selected";?>>1920x1080</option>
				<option <?php if ($result['screen_resolution'] == "2304x1440") echo "selected";?>>2304x1440</option>
				<option <?php if ($result['screen_resolution'] == "2560x1600") echo "selected";?>>2560x1600</option>
				<option <?php if ($result['screen_resolution'] == "3072x1920") echo "selected";?>>3072x1920</option>
				<option <?php if ($result['screen_resolution'] == "3200x1800") echo "selected";?>>3200x1800</option>
				<option <?php if ($result['screen_resolution'] == "3840x2160") echo "selected";?>>3840x2160</option>
				<input type="hidden" name="screen" id="screen" value="<?php echo $result['screen_resolution'];?>">
			</select>
			<input type="number" name="ram" value="<?php echo $result['ram'];?>" placeholder="Оперативная память">
			<select onchange="changedSystem(this)">
				<option selected disabled>Операционная система</option>
				<option <?php if ($result['opeartion_system'] == "Windows") echo "selected";?>>Windows</option>
				<option <?php if ($result['opeartion_system'] == "Mac OS") echo "selected";?>>Mac OS</option>
				<option <?php if ($result['opeartion_system'] == "Linux") echo "selected";?>>Linux</option>
				<input type="hidden" name="operation_system" id="operation_system" value="<?php echo $result['opeartion_system'];?>">
			</select>
			<select onchange="changedProcessor(this)">
				<option selected disabled>Процессор</option>
				<option <?php if ($result['processor'] == "AMD") echo "selected";?>>AMD</option>
				<option <?php if ($result['processor'] == "Intel") echo "selected";?>>Intel</option>
				<option <?php if ($result['processor'] == "Apple") echo "selected";?>>Apple</option>
				<input type="hidden" name="processor" id="processor" value="<?php echo $result['processor'];?>">
			</select>
			<select onchange="changedHard(this)">
				<option selected disabled>Жесткий диск</option>
				<option <?php if ($result['hard_disk'] == "128") echo "selected";?>>128</option>
				<option <?php if ($result['hard_disk'] == "256") echo "selected";?>>256</option>
				<option <?php if ($result['hard_disk'] == "512") echo "selected";?>>512</option>
				<option <?php if ($result['hard_disk'] == "1024") echo "selected";?>>1024</option>
				<option <?php if ($result['hard_disk'] == "2048") echo "selected";?>>2048</option>
				<input type="hidden" name="hard" id="hard" value="<?php echo $result['hard_disk'];?>">
			</select>
			<input type="text" name="img_url" placeholder="Ссылка на фото" value="<?php echo $photo['img_src'];?>">
			<input type="submit" name="submit" value="Сохранить">
		</form>
	</div>
</section>

<script type="text/javascript">
	function changedBrand(argument) {
		let text = argument[argument.selectedIndex].text;
		document.querySelector("#brand").value = text;
	}

	function changedDiagonal(argument) {
		let text = argument[argument.selectedIndex].text;
		document.querySelector("#diagonal").value = text;
	}

	function changedScreen(argument) {
		let text = argument[argument.selectedIndex].text;
		document.querySelector("#screen").value = text;
	}

	function changedSystem(argument) {
		let text = argument[argument.selectedIndex].text;
		document.querySelector("#operation_system").value = text;
	}

	function changedProcessor(argument) {
		let text = argument[argument.selectedIndex].text;
		document.querySelector("#processor").value = text;
	}

	function changedHard(argument) {
		let text = argument[argument.selectedIndex].text;
		document.querySelector("#hard").value = text;
	}
</script>