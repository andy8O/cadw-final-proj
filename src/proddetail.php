<?php include 'includes/db.php'; ?>
<?php include 'includes/header.php'; ?>

<?php
$id = intval($_GET['id']);
$stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$stmt->execute(['id' => $id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

$images = $pdo->prepare("SELECT * FROM product_images WHERE product_id = :id");
$images->execute(['id' => $id]);
?>
<h2><?php echo $product['name']; ?></h2>
<p><?php echo $product['description']; ?></p>
<p>Price: $<?php echo $product['usd_price']; ?></p>

<div class="gallery">
<?php while ($img = $images->fetch(PDO::FETCH_ASSOC)) {
    echo "<img src='{$img['url']}' alt='{$product['name']}' />";
} ?>
</div>

<?php include 'includes/footer.php'; ?>