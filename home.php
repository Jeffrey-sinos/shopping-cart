<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM menu ORDER BY id ASC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<div class="featured">
    <h2>Food to enjoy</h2>
    <p>Some of the food to order</p>

    <style>
    	main .featured {
	display: flex;
	flex-direction: column;
	background-image: url(img/restaurant.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	height: 500px;
	align-items: center;
	justify-content: center;
	text-align: center;
}
    </style>

</div>

<div class="recentlyadded content-wrapper">
    <h2>Recently Added Food</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="img/<?=$product['img']?>" width="200" height="200" alt="<?=$product['foodName']?>">
            <span class="name"><?=$product['foodName']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>