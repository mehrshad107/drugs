
<?php
// Array of product names
$productNames = [
    "قرص tegretol",
    "قرص relief",
    "قرص ecophane",
    "قرص euthyrox",
    "قرص hairtamin",
    "قرص euthyrox",
    "آمپول triamhexal",
    "آمپول depo metrol",
    "کپسول phyto",
    // Add more product names as needed
];

if (isset($_GET['search'])) {
    $searchQuery = strtolower($_GET['search']);
    $matchingProducts = [];

    foreach ($productNames as $productName) {
        if (stripos($productName, $searchQuery) !== false) {
            $matchingProducts[] = $productName;
        }
    }

    if (!empty($matchingProducts)) {
        echo "<h2>Search results:</h2>";
        echo "<ul>";
        foreach ($matchingProducts as $product) {
            echo "<li>" . $product . "</li>";
        }
        echo "</ul>";
    } else {
        echo "محصول مورد نظر پیدا نشد.;
    }
}
?>