<?php require "header.php";?>
<?php
	$res = mysqli_query($connection, "SELECT * FROM laptop");
	$pho = mysqli_query($connection, "SELECT * FROM gallery");
?>

<style type="text/css">
	.img_content img {
		width: 250px;
	}

	.card {
		border: 1px solid lightgray;

		margin-bottom: 30px;

		display: flex;
		align-items: center;

		height: 250px;
		width: 99%;
	}

	.about_content a {
		border-right: 1px solid lightgray;
		border-radius: 0;
		padding: 0 15px;
	}

	.edit_btn {
		width: 70px;
		height: 20px;
		cursor: pointer;
		padding: 5px;

		border-right: none;
		border: 1px solid #00bccc;
		border-color: #00bccc;
		background: white;
		color: #00bccc;
	}

	.edit_btn:hover {
		background: #00bccc;
		color: white;
	}
</style>
<section class="container">
	<div class="cards">
		<?php
		$photo = mysqli_fetch_assoc($pho);
			while ( $result = mysqli_fetch_assoc($res) ) {
		?>
		<div class="card">
			<div class="img_content">
				<img src="<?php echo $photo['img_src']?>">
			</div>
			<div class="about_content">
				<a><?php echo $result['brand'];?></a>
				<a><?php echo $result['price'];?> KZT</a>
				<a><?php echo $result['inch'];?></a>
				<a><?php echo $result['screen_resolution'];?></a>
				<a><?php echo $result['ram'];?> GB</a>
				<a><?php echo $result['opeartion_system'];?></a>
				<a><?php echo $result['processor'];?></a>
				<a><?php echo $result['hard_disk'];?></a>
				<input type="hidden" name="id" value="<?php echo $result['id'];?>">
				<h6 onclick="openEditElement(this)" class="edit_btn">Изменить</h6>
			</div>
		</div>
		<?php 
		$photo = mysqli_fetch_assoc($pho);
			} 
		?>
	</div>
</section>

<script type="text/javascript">
	function openEditElement(arg) {
		window.location.href = "/edit-element.php?id=" + arg.parentNode.querySelector('input').value;
	}
</script>