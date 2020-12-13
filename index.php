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
		padding-top: 0;
	}

	.card {
		z-index: 11;

		width: 30%;
		max-height: 340px;
		padding: 10px;
		border-top: 1px solid white;
		border-left: 1px solid white;
		border-right: 1px solid lightgray;
		border-bottom: 1px solid lightgray;

		display: flex;
		flex-direction: column;

		cursor: pointer;
	}

	.whiteicon {
		width: 25px;
		display: none;
	}

	.card:hover {
		border: 1px solid black;
	}

	.basket:hover .whiteicon {
		display: inherit;
	}

	.basket:hover .icon{
		display: none;
	}

	.basket:hover {
		background-color: #00bccc;
	}

	.cards_img_div {
		width: 100%;
		height: 100%;

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
		position: absolute;
		top: 10px;
		right: 10px;
		z-index: 1000;

		border: 1px solid #00bccc;
		border-radius: 5px;
		padding: 10px;

		user-select: none;
	}

	.icon {
		width: 25px;
	}

	.price_basket {
		position: relative;
		display: flex;
		justify-content: space-between;
	}

	.sub_filter {
		width: 70%;

		font-weight: 700;
		margin-bottom: 20px;
	}

	.sub_filter input {
		width: 70px;
		height: 40px;
		font-size: 20px;

		border: 2px solid lightgray;
		border-radius: 5px;
	}



	.filter_brand {
		width: 90%;
		margin-left: 10px;

		display: flex;
		flex-direction: column;
		justify-content: flex-start;

		border: 1px solid lightgray;
		border-radius: 5px;
		display: flex;
		flex-direction: column;

		padding: 10px;
	}

	.filter_brand span {
		font-weight: 400;
		user-select: none;
		margin: 5px 0;

		cursor: pointer;
	}

	.filter_brand span:hover {
		color: #00bccc;
	}

	.filter_brand span:hover .checkicon {
		border-color: #00bccc;
	}

	.filter_brand span:hover .a {
		color: #00bccc;
	}

	.count {
		font-size: 15px;
		color: lightgray;
	}

	.check {
		width: 15px;
	}

	.checkicon {
		width: 15px;
		border: 1px solid lightgray;
		padding: 2px;
		border-radius: 3px;
	}

	.white {
		background: #00bccc;
		border-color: #00bccc;
	}

	.filter_name {
		font-size: 18px;
		font-weight: 400;
	}

	.a:hover .filter_name {
		color: #00bccc;
	}

	.loading {
		width: 100%;
		height: 100%;
		display: flex;
		justify-content: center;
		align-items: center;

		display: ;
	}

	.loading_gif {
		max-width: 200px;
		max-height: 200px;
	}

	@media (max-width: 940px) {
		.card {
			width: 45%;
			max-height: 400px;
		}
	}

	@media (max-width: 720px) {
		.filter_name {
			font-size: 15px;
		}
	}

	@media (max-width: 650px) {
		.card {
			width: 90%;
		}

		.main_menu {
			flex-direction: column;
			justify-content: center;
			align-items: center;
		}

		.filter {
			justify-content: center;
			flex-direction: row;

			width: 90%;
		}

		.filter_brand {
			width: 90px;
		}
	}

</style>

<section class="container">
	<div class="title">
		<a href="">Ноутбуки</a>
	</div>
	<div class="main_menu">
		<div class="filter">
			<div class="sub_filter">
				<div><a>Бренд</a></div>
				<div class="filter_brand">
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Apple</a></span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Acer</a></span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Asus</a></span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Lenovo</a></span>
					<input class="brand_name" type="hidden" name="" value="">
				</div>
			</div>
			<div class="sub_filter">
				<div><a>Процессор</a></div>
				<div class="filter_brand">
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Windows</a></span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Mac OS</a></span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">Linux</a></span>
					<input class="processor_name" type="hidden" name="" value="">
				</div>
			</div>
			<div class="sub_filter">
				<div><a>Объём накопителя</a></div>
				<div class="filter_brand">
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">128</a> GB</span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">256</a> GB</span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">512</a> GB</span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">1024</a> GB</span>
					<span class="a" onclick="selectBrand(this)"><span class="check"><img class="checkicon" src="images/whitecheck.png"></span> <a class="filter_name">2048</a> GB</span>
					<input class="hard_name" type="hidden" name="" value="">
				</div>
			</div>
		</div>
		<div class="cards">

			<?php 
				$result = mysqli_query($connection, "SELECT * FROM laptop");
				$gallery = mysqli_query($connection, "SELECT * FROM gallery");
				$gallery_arr = array();
				$i = 0;
				while ( $gal = mysqli_fetch_assoc($gallery) ) {
					$gallery_arr[$i] = $gal['img_src'];
					$i++;
				}
				$i = 0;
				while ( $res = mysqli_fetch_assoc($result) ) {
			?>
			<div class="card">
				<div class="cards_img_div">
					<img class="cards_img" src="<?php echo $gallery_arr[$i];?>">
				</div>
				<div class="inch">
					<?php echo $res['inch'];?>
				</div>
				<div class="price_basket">
					<div class="price">
						<?php echo $res['price'];?> тг
					</div>
					<div onclick="addToBasket(this)" class="basket">
						<img class="icon" src="images/basket.png">
						<img class="whiteicon" src="images/whitebasket.png">
					</div>
				</div>
				<div class="name" onclick="openElement(this)">
					<?php echo $res['brand']." ".$res['inch']." ".$res['ram']." GB"?> 
				</div>
				<input type="hidden" name="" value="<?php echo $res['id']?>">
			</div>
			<?php $i++; } ?>
		</div>
	</div>
</section>

<script type="text/javascript">
	function addToBasket(argument) {
		let price = argument.parentNode.parentNode.querySelector(".price").innerHTML;
		price = price.replaceAll(" тг","");
		price = price.replaceAll("\n", "");
		price = price.replaceAll("\t", "");
		let name = argument.parentNode.parentNode.querySelector(".name").innerHTML;
		name = name.replaceAll("\n", "");
		name = name.replaceAll("\t", "");
		let img_src = argument.parentNode.parentNode.querySelector(".cards_img").src;
		let json = {"name":name, "price":price, "img_src":img_src};
		let allInBasket = localStorage.getItem("basket");
		if (!allInBasket) {
			allInBasket = [];
		} else {
			allInBasket = JSON.parse(allInBasket);
		}
		
		allInBasket[allInBasket.length] = json;
		localStorage.setItem("basket",JSON.stringify(allInBasket));
	}	


	function openElement(argument) {
		let index = argument.parentNode.querySelector("input").value;
		window.location.href = "/element.php?id=" + index;
	}

	function selectBrand(argument) {
		if (argument.querySelector(".checkicon").classList.contains("white")) {
			argument.querySelector(".checkicon").classList.remove("white");
			argument.parentNode.querySelector("input").value = "";
		} else {
			let allSelect = argument.parentNode.querySelectorAll(".a");
			for (let i = 0; i < allSelect.length; i++) {
				allSelect[i].querySelector(".checkicon").classList.remove("white");
			}
			argument.querySelector(".checkicon").classList.add("white");
			let text = argument.querySelector(".filter_name").innerHTML;
			argument.parentNode.querySelector("input").value = text;
		}

		showResult();
	}

	function showResult() {
		let brand = document.querySelector(".brand_name").value;
		let processor = document.querySelector(".processor_name").value;
		let hard = document.querySelector(".hard_name").value;

		document.querySelector(".cards").innerHTML = `<div class="loading">
				<img class="loading_gif" src="images/loading.gif">
			</div>`;
		document.querySelector(".loading").style.display = "inherit";

		fetch("allfetch.php").then(data => data.text()).then(data => {
			fetch("gallery.php").then(photo => photo.text()).then(photo => {
				let laptops = JSON.parse(data);
				let gallery = JSON.parse(photo);
				let template = "";
				if (brand != "" && processor != "" && hard != "") {
					for (let i = 0; i < laptops.length; i++) {
						if (brand == laptops[i]['brand'] && processor == laptops[i]['opeartion_system'] && hard == laptops[i]['hard_disk']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else if (brand != "" && processor != "" && hard == "") {
					for (let i = 0; i < laptops.length; i++) {
						if (brand == laptops[i]['brand'] && processor == laptops[i]['opeartion_system']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else if (brand != "" && processor == "" && hard != "") {
					for (let i = 0; i < laptops.length; i++) {
						if (brand == laptops[i]['brand'] && hard == laptops[i]['hard_disk']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else if (brand == "" && processor != "" && hard != "") {
					for (let i = 0; i < laptops.length; i++) {
						if (hard == laptops[i]['hard_disk'] && processor == laptops[i]['opeartion_system']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else if (brand != "" && processor == "" && hard == "") {
					for (let i = 0; i < laptops.length; i++) {
						if (brand == laptops[i]['brand']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else if (brand == "" && processor != "" && hard == "") {
					for (let i = 0; i < laptops.length; i++) {
						if (processor == laptops[i]['opeartion_system']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else if (brand == "" && processor == "" && hard != "") {
					for (let i = 0; i < laptops.length; i++) {
						if (hard == laptops[i]['hard_disk']) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				} else {
					for (let i = 0; i < laptops.length; i++) {
						if (true) {
							template += `
								<div class="card">
									<div class="cards_img_div">
										<img class="cards_img" src="`+gallery[i]['img_src']+`">
									</div>
									<div class="inch">
										`+laptops[i]['inch']+`
									</div>
									<div class="price_basket">
										<div class="price">
											`+laptops[i]['price']+` тг
										</div>
										<div onclick="addToBasket(this)" class="basket">
											<img class="icon" src="images/basket.png">
											<img class="whiteicon" src="images/whitebasket.png">
										</div>
									</div>
									<div class="name" onclick="openElement(this)">
										`+laptops[i]['brand']+" "+laptops[i]['inch']+" "+laptops[i]['ram']+` GB
									</div>
									<input type="hidden" name="" value="`+laptops[i]['id']+`">
								</div>
							`;
						}
					}
				}
				if (template == "") {
					document.querySelector(".cards").innerHTML = "<span style='width: 100%; display: flex; justify-content: center;'>По вашему запросу ничего на найдено :(</span>";
				} else {
					document.querySelector(".cards").innerHTML = template;
				}
			})
		});
		
	}
</script>