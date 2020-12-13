<?php 
	require "header.php";
?>

<?php 
	if (isset($_GET['submit'])) {
		$res = mysqli_query($connection, "INSERT INTO `laptop` (`id`, `brand`, `price`, `inch`, `screen_resolution`, `ram`, `opeartion_system`, `processor`, `hard_disk`) VALUES (NULL, '".$_GET['brand']."', '".$_GET['price']."', '".$_GET['diagonal']."', '".$_GET['screen']."', '".$_GET['ram']."', '".$_GET['operation_system']."', '".$_GET['processor']."', '".$_GET['hard']."');");
		if ($res) {
			$next_id = mysqli_query($connection, "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_name = 'laptop' and table_schema = 'laptops'");
    			$next_id = mysqli_fetch_row($next_id);
			$ress = mysqli_query($connection, "INSERT INTO `gallery` (`id`, `laptop_id`, `img_src`) VALUES (NULL, '".($next_id[0] - 1)."', '".$_GET['img_url']."')");
		}
		?>
			<script type="text/javascript">
				window.location.href = "/add-element-page.php";
			</script>
		<?php
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
		font-size: 18px;
		width: 250px;
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
	}

	@media (max-width: 1200px) {
		.container {
			padding: 0 20px;
		}
	}
</style>

<section class="container">
	<form class="add_div">
		<select onchange="changedBrand(this)">
			<option disabled selected>Выберите бренд</option>
			<option>Apple</option>
			<option>Acer</option>
			<option>Asus</option>
			<option>Lenovo</option>
			<input type="hidden" name="brand" id="brand">
		</select>

		<input type="number" name="price" value="" placeholder="Цена">
		<select onchange="changedDiagonal(this)">
			<option selected disabled>Диагональ экрана</option>
			<option>12"</option>
			<option>13,3"</option>
			<option>14"</option>
			<option>15,6"</option>
			<option>16"</option>
			<option>17,3"</option>
			<input type="hidden" name="diagonal" id="diagonal">
		</select>
		<select onchange="changedScreen(this)">
			<option selected disabled>Разрешение экрана</option>
			<option>1920x1080</option>
			<option>2304x1440</option>
			<option>2560x1600</option>
			<option>3072x1920</option>
			<option>3200x1800</option>
			<option>3840x2160</option>
			<input type="hidden" name="screen" id="screen">
		</select>
		<input type="number" name="ram" value="" placeholder="Оперативная память">
		<select onchange="changedSystem(this)">
			<option selected disabled>Операционная система</option>
			<option>Windows</option>
			<option>Mac OS</option>
			<option>Linux</option>
			<input type="hidden" name="operation_system" id="operation_system">
		</select>
		<select onchange="changedProcessor(this)">
			<option selected disabled>Процессор</option>
			<option>AMD</option>
			<option>Intel</option>
			<option>Apple</option>
			<input type="hidden" name="processor" id="processor">
		</select>
		<select onchange="changedHard(this)">
			<option selected disabled>Жесткий диск</option>
			<option>128</option>
			<option>256</option>
			<option>512</option>
			<option>1024</option>
			<option>2048</option>
			<input type="hidden" name="hard" id="hard">
		</select>
		<input type="text" name="img_url" placeholder="Ссылка на фото">
		<input type="submit" name="submit" value="Добавить товар">
	</form>
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