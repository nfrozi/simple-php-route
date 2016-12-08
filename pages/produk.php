<?php
$produkList = array(
    1 => 'Baju 1',
    2 => 'Baju 2'
);

?>
<h1>Produk</h1>

<?php
if (empty($_GET['id'])) {
    foreach ($produkList as $key => $produk) {
        ?>
        <h2><?php echo $produk.' '.$key ?></h2>
        <p><a href="?pg=produk&id=<?php echo $key ?>">detail</a></p>
        <?php
    }
}
else {
    ?>
    <h2><?php echo $produkList[$_GET['id']] ?></h2>
    <p>deskripsi</p>
    <?php
}
?>