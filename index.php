<?php
	require "header.php";
?>

<style type="text/css">
	.title {
		width: 100%;
		padding: 20px 0;
		margin: 20px;
		border-bottom: 1px solid lightgray;

		font-weight: 800;
		font-size: 35px;
	}

	.main_menu {
		width: 100%;

		display: flex;
		justify-content: space-between;
	}

	.cards {
		width: 75%;
		border-top: 1px solid lightgray;
		border-left: 1px solid lightgray;
		border-bottom: 1px solid lightgray;

		display: flex;
		flex-wrap: wrap;
	}

	.filter {
		width: 25%;
		display: flex;
		flex-direction: column;
		align-items: center;

		padding: 20px;
	}

	.card {
		width: 30%;
		padding: 10px;
		border-top: 1px solid white;
		border-left: 1px solid white;
		border-right: 1px solid lightgray;
		border-bottom: 1px solid lightgray;

		display: flex;
		flex-direction: column;

		cursor: pointer;
	}

	.card:hover {
		border: 1px solid black;
	}

	.card:hover .basket{}

	.cards_img_div {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
	}

	.inch {
		width: 20%;

		font-size: 15px;

		margin: 10px 0;

		border: 1px solid #00bccc;
		display: flex;
		justify-content: flex-start;
	}

	.price {
		display: flex;
		justify-content: flex-start;

		font-weight: 800;
		font-size: 25px;
	}

	.cards_img {
		width: 90%;
	}

	.basket {
		border: 1px solid #00bccc;
		border-radius: 5px;
		padding: 10px;
	}

	.icon {
		width: 25px;
	}

	.price_basket {
		display: flex;
		justify-content: space-between;
	}

	.choose_price {
		width: 70%;

		display: flex;
		justify-content: space-between;

		font-weight: 700;
	}

	.choose_price input {
		width: 70px;
		height: 40px;

		border: 2px solid lightgray;
		border-radius: 5px;
	}

</style>

<section class="container">
	<div class="title">
		<a href="">Ноутбуки</a>
	</div>

	<div class="main_menu">
		<div class="filter">
			<div class="choose_price">
				Цена
				<div>
					<input type="" name="">
				</div>
				<div>
					<input type="" name="">
				</div>
			</div>
			<div class="choose_price">
				<a>Бренд</a>
				<div class="filter_brand">
					<span>Apple</span>
					<span>Apple</span>
					<span>Apple</span>
					<span>Apple</span>
					<span>Apple</span>
				</div>
			</div>
		</div>
		<div class="cards">
			<?php 
				$result = mysqli_query($connection, "SELECT * FROM laptop");

				while ( $res = mysqli_fetch_assoc($result) ) {
			?>
			<div class="card" onclick="openElement(this)">
				<div class="cards_img_div">
					<img class="cards_img" src="<?php echo $res['img_src']?>">
				</div>
				<div class="inch">
					<?php echo $res['inch'];?>
				</div>
				<div class="price_basket">
					<div class="price">
						<?php echo $res['price'];?> тг
					</div>
					<div class="basket">
						<img class="icon" src="images/basket.png">
					</div>
				</div>
				<div class="name">
					Ноутбук <?php echo $res['brand']?>
				</div>
				<input type="hidden" name="" value="<?php echo $res['id']?>">
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<script type="text/javascript">
	function openElement(argument) {
		let index = argument.querySelector("input").value;
		window.location.href = "/element.php?id=" + index;
	}
</script>