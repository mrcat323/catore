<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Корзина</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:500&subset=cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Abel:400' rel='stylesheet' type='text/css'>
	<script src="https://use.fontawesome.com/fea2a5f2a5.js"></script>
	<?php echo $connect->link("bootstrap"); ?>
	<style>
	html,
body {
    width: 100%;
    height: 100%
}
.footer {
    width: 100%;
    height: 100px;
    margin-top: 120px;
    color: #fff;
    background-color: #222
}
.search {
    float: left
}
ul.lists li {
	width: 100px;
}
footer > p {
    padding-left: 20px;
    padding-top: 15px
}
.navbar-default a {
    text-transform: uppercase;
    font-family: 'Abel', sans-serif;
}
@font-face {
    font-family: 'Abel', sans-serif;
    src: url("https://github.com/mrcat323/blog-engine/blob/master/fonts/pt-sans57.ttf?raw=true")
}
@font-face {
    font-family: 'Oswald', sans-serif;
    src: url("https://github.com/mrcat323/blog-engine/blob/master/fonts/pt-sans75.ttf?raw=true")
}
@font-face {
    font-family: 'Fara';
    src: url("https://github.com/mrcat323/blog-engine/blob/master/fonts/fara.otf?raw=true")
}
.navbar-inverse {
    color: #fff;
    text-align: center;
    font-family: 'Abel', sans-serif;
    font-size: 17px;
    padding: 15px 0
}
hr.hund {
    width: 300px;
    text-align: center;
    border: 1px solid rgba(0, 0, 0, .6)
}
.section-center {
    padding: 50px 0;
    font-family: 'Oswald', sans-serif
}
.peter {
    font-family: 'Abel', sans-serif
}
input[name="quantity"] {
	width: 50px;
}
.fara-sans {
    font-family: 'Fara';
    font-size: 17px
}
.social {
    padding: 30px 100px 30px 0;
    text-align: center
}
.social a {
    padding: 15px;
    text-decoration: none
}
.social > .vk,
.facebook,
.twitter,
.telegram,
.git,
.pinterest {
    background: #fff;
    -moz-transition: background .2s ease-in-out;
    -webkit-transition: background .2s ease-in-out;
    -o-transition: background .2s ease-in-out;
    transition: background .2s ease-in-out
}
.social:hover {
    color: #fff
}
.social a:hover {
    background: #000;
    color: #fff;
    transform: scale(1.2)
}
.social a:active {
    transform: scale(0.9)
}
.img-right {
    float: right
}
.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0 auto
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
    margin-bottom: 10px
}
.form-signin .checkbox {
    font-weight: normal
}
.form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}
.form-signin .form-control:focus {
    z-index: 2
}
.form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}
.form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0
}
.account-wall {
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3)
}
.login-title {
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block
}
.profile-img {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%
}
.need-help {
    margin-top: 10px
}
.new-account {
    display: block;
    margin-top: 10px
}
.del {
    width: auto;
    padding-top: 10px;
    height: 35px;
    margin-left: 200px;
    margin-top: -55px;
}
.form-cat {
    margin-left: -120px;
    padding-top: 50px;
    padding-left: 100px;
    width: 700px;
    height: 490px;
    border: 1px solid black;
    border-radius: 5px;
}
.article-cat {
    margin-top: 15px;
    margin-left: 20px;
}
.type-text {
    margin-left: 45px;
}
.buttons {
    margin-top: 35px;
    margin-left: 70px;
}
.link-back {
    margin-left: 10px;
}
	ul.lists {
		margin-left: 10px;
		width: 200px;
		background: #f8f8f8;
	}
	ul.lists li {
		width: 130px;
	}
	section {
		margin-top: -20px;
		background: #fff;
		position: relative;
	}
	.companele {
		padding-left: 20px;
	}
	.lefter {
		float: left;
		
	}
	</style>
</head>
<body>
	<div class="navbar-wrap">
		
	 <nav class="navbar navbar-default navbar-static-top" role="navigation">
	 	<div class="container">
	 		<a class="navbar-brand" href="/home/show">CATORE</a>
	 		<ul class="nav navbar-nav">
	 			<li>
	 				<a href="/home/show"><i class="fa fa-home"></i> Главная</a>
	 			</li>
	 			<li>
	 				<a href="/about/us"><i class="fa fa-user"></i> О Нас</a>
	 			</li>
	 			<li>
	 				<a href="/about/store"><i class="fa fa-shopping-cart"></i> О И-Магазине</a>
	 			</li>
	 			<li>
	 				<a href="/about/help"><i class="fa fa-phone"></i> Обратная связь</a>
	 			</li>
	 			<li>
	 				<a href="/about/contacts"><i class="fa fa-user-o"></i> Контакты</a>
	 			</li>
	 		</ul>
	 	</div>
	 	</nav>
	 <section class="jumbotron text-center">
	 	<div class="container">
        <h1 class="jumbotron-heading">CATORE</h1>
        <p class="lead text-muted">Стремись к невозможному! Так как невозможное возможно</p>
        <p>
          <a href="/about/us" class="btn btn-lg btn-primary">О нас</a>
          <a href="/about/store" class="btn btn-lg btn-default">О CATORE</a>
        </p>
      </div>
	 </section>
	</div>
	<hr style="width: 200px; border: 2px solid black;">
	<div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
					<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-shopping-bag"></i> Категории <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/section/show/1">Телефоны</a></li>
								<li><a href="/section/show/2">Планшеты</a></li>
								<li><a href="/section/show/3">Ноутбуки</a></li>
								<li><a href="/section/show/4">ПК</a></li>
								<li><a href="/section/show/5">Аксессуары</a></li>
							</ul>
						</li>
						<li><a href="/product/list/"><i class="fa fa-shopping-basket"></i> Товары</a></li>
					</ul>
					<form action="/search/all/" class="navbar-form navbar-left" method="GET" role="search">
						<div class="form-group">
							<input type="text" name="word" class="form-control" placeholder="Search" required>
						</div>
						<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
					</form>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
	<div class="col-md-2 col-md-offset-1">
		<div class="list-group">
		<?php foreach($count as $k): ?>
			<a href="/product/list/" class="list-group-item">Товары<span class="badge"><?php echo $k["rower"];?></span></a>
		<?php endforeach ?>
		<?php foreach($phones as $p): ?>
			<a href="/section/show/1" class="list-group-item">Телефоны<span class="badge"><?php echo $p["phones"]; ?></span></a>
		<?php endforeach ?>
		<?php foreach($tablets as $p): ?>
			<a href="/section/show/2" class="list-group-item">Планшеты<span class="badge"><?php echo $p["tablets"]; ?></span></a>
		<?php endforeach ?>
		<?php foreach($laptops as $p): ?>
			<a href="/section/show/3" class="list-group-item">Ноутбуки<span class="badge"><?php echo $p["laptops"]; ?></span></a>
		<?php endforeach ?>
		<?php foreach($pc as $p): ?>
			<a href="/section/show/4" class="list-group-item">ПК<span class="badge"><?php echo $p["pc"]; ?></span></a>
		<?php endforeach ?>
		<?php foreach($headphones as $p): ?>
			<a href="/section/show/5" class="list-group-item">Аксессуары<span class="badge"><?php echo $p["headphones"]; ?></span></a>
		<?php endforeach ?>
		</div>
	</div><br>
	<div class="section-center">
		<div class="row row-offcanvas row-right">
				<div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
				<div class="panel">
					<div class="panel-heading">
						<h2 class="text-center">Корзина</h2>
					</div>
					<div class="panel-body">
						<div id="shopping-cart">
<div class="page-header"><i class="fa fa-shopping-basket"></i> Корзина <a id="btnEmpty" href="/cart/clear/">Очистить корзину</a></div>
<?php
if(isset($_SESSION["cart_item"])):
    $item_total = 0;
?>	
<table class="table table-striped table-hover">
<thead>
<tr>
<th style="text-align:left;"><strong>Имя</strong></th>
<th style="text-align:left;"><strong>код</strong></th>
<th style="text-align:right;"><strong>Количество</strong></th>
<th style="text-align:right;"><strong>Цена</strong></th>
<th style="text-align:center;"><strong>Действие</strong></th>
</tr>
</thead>
<tbody>	
<?php		
    foreach ($_SESSION["cart_item"] as $item):	?>
				<tr>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php echo $item["title"]; ?></strong></td>
				<td style="text-align:left;border-bottom:#F0F0F0 1px solid;"><?php echo $item["code"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo $item["quantity"]; ?></td>
				<td style="text-align:right;border-bottom:#F0F0F0 1px solid;"><?php echo "<i class='fa fa-rub'></i> ".$item["price"]; ?></td>
				<td style="text-align:center;border-bottom:#F0F0F0 1px solid;"><a href="/cart/remove/?code=<?php echo $item["code"]; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
        $_SESSION["total"] = $item_total;
			endforeach
		?>

<tr>
<td colspan="5" align=right><strong>Итог:</strong> <?php echo "<i class='fa fa-rub'></i> ".$item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php endif ?>
</div>
					</div>
					<a href="/cart/order/" class="btn btn-primary">Оформить заказ</a>
				</div>
				</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<footer class="footer navbar-inverse">
		<div class="container-fluid">
			<p>Copyright by Mr CaT 2017 &copy;</p>
			<p>Powered by <a href="http://github.com/eazy-english/catoolin">CATOOLIN</a></p>
		</div>
	</footer>
</body>
</html>
