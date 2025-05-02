<?php
$current = basename($_SERVER['PHP_SELF']);
?>

<div class="product-menu">
    <h3>PRODUCT</h3>
    <ul>
        <li><a href="mackerel.php" class="<?= $current == 'mackerel.php' ? 'active' : '' ?>">Mackerel</a></li>
        <li><a href="salmon.php" class="<?= $current == 'salmon.php' ? 'active' : '' ?>">Salmon</a></li>
        <li><a href="pollock.php" class="<?= $current == 'pollock.php' ? 'active' : '' ?>">Pollock</a></li>
        <li><a href="flounder.php" class="<?= $current == 'flounder.php' ? 'active' : '' ?>">Flounder</a></li>
        <li><a href="snow-crab.php" class="<?= $current == 'snow-crab.php' ? 'active' : '' ?>">Snow Crab</a></li>
        <li><a href="red-crab.php" class="<?= $current == 'red-crab.php' ? 'active' : '' ?>">Red Crab</a></li>
        <li><a href="red-snapper.php" class="<?= $current == 'red-snapper.php' ? 'active' : '' ?>">Red Snapper</a></li>
        <li><a href="yellowfin-tuna.php" class="<?= $current == 'yellowfin-tuna.php' ? 'active' : '' ?>">Yellowfin Tuna</a></li>
        <li><a href="tobiko.php" class="<?= $current == 'tobiko.php' ? 'active' : '' ?>">Tobiko</a></li>
        <li><a href="squid-cuttlefish.php" class="<?= $current == 'squid-cuttlefish.php' ? 'active' : '' ?>">Squid & Cuttlefish</a></li>
        <li><a href="octopus.php" class="<?= $current == 'octopus.php' ? 'active' : '' ?>">Octopus</a></li>
        <li><a href="shrimp.php" class="<?= $current == 'shrimp.php' ? 'active' : '' ?>">Shrimp</a></li>
        <li><a href="wakame.php" class="<?= $current == 'wakame.php' ? 'active' : '' ?>">Wakame</a></li>
    </ul>
</div>
