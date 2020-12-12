<?php 
	require "header.php";
?>

<?php 
	$id = $_GET['id'];
	$res = mysqli_query($connection, "SELECT * FROM laptop WHERE id=".$id);
	$res = mysqli_fetch_assoc($res);

	$photo = mysqli_query($connection, "SELECT * FROM gallery WHERE laptop_id=".$id);
	$photo = mysqli_fetch_assoc($photo);
?>


<section class="container">
	<div class="card">
		<div class="image_content">
			<img class="bigImage_img" src="<?php echo $photo['img_src']?>">
		</div>
		<div class="about_content">
			<h2 style="text-align: center;">Характеристики</h2>
			<div class="about">
				<span class="span">
					<a class="what">Бренд</a>
					<a class="name"><?php echo $res['brand']?></a>
				</span>
				<span class="span">
					<a class="what">Цена</a>
					<a class="name"><?php echo $res['price']?> KZT</a>
				</span>
				<span class="span">
					<a class="what">Диагональ экрана</a>
					<a class="name"><?php echo $res['inch']?></a>
				</span>
				<span class="span">
					<a class="what">Разрешение экрана</a>
					<a class="name"><?php echo $res['screen_resolution']?> пикс.</a>
				</span>
				<span class="span">
					<a class="what">Оперативная память</a>
					<a class="name"><?php echo $res['ram']?> GB</a>
				</span>
				<span class="span">
					<a class="what">Операционная система</a>
					<a class="name"><?php echo $res['opeartion_system']?></a>
				</span>
				<span class="span">
					<a class="what">Процессор</a>
					<a class="name"><?php echo $res['processor']?></a>
				</span>
				<span class="span">
					<a class="what">Объем жесткого диска</a>
					<a class="name"><?php echo $res['hard_disk']?> GB</a>
				</span>
			</div>
		</div>
	</div>
</section>

<style type="text/css">
	.card {
		width: 100%;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;

		margin: 50px 0;
	}

	.image_content {
		width: 100%;
		display: flex;
		justify-content: center;
	}

	.about_content {
		width: 100%;
	}

	.about {
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.span {
		width: 50%;
		display: flex;
		justify-content: space-between;

		border-bottom: 1px solid lightgray;
		padding: 10px 0;
	}

	.what {
		font-size: 25px;
	}

	.name {
		font-weight: 700;
		font-size: 25px;
	}

	.bigImage_img {
		width: 400px;
	}

	@media (max-width: 1000px) {
		.what, .name {
			font-size: 18px;
		}
	}

	@media (max-width: 700px) {
		.span {
			width: 80%;
		}
	}

	@media (max-width: 500px) {
		.span {
			width: 95%;
		}
	}
</style>