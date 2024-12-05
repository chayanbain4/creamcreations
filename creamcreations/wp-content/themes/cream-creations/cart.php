<?php
session_start(); // Start session early

// Handle clearing the cart
if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Handle deleting a single item
if (isset($_POST['delete_item'])) {
    $item_index = $_POST['item_index'];
    if (isset($_SESSION['cart'][$item_index])) {
        unset($_SESSION['cart'][$item_index]);
        $_SESSION['cart'] = array_values($_SESSION['cart']); // Reindex array
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;

get_header(); // Include WordPress header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
</head>
<body>
    <div class="cart-container">
        <h1>Cart</h1>
        <?php if (empty($cart)): ?>
            <p>Your cart is empty.</p>
        <?php else: ?>
            <form method="POST">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $index => $item): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($item['name']); ?></td>
                                <td>₹<?php echo number_format($item['price'], 2); ?></td>
                                <td>
                                    <div class="quantity-controls">
                                        <!-- <button type="button" onclick="updateQuantity(<?php echo $index; ?>, -1)">-</button> -->
                                        <input type="number" name="quantities[<?php echo $index; ?>]" value="<?php echo $item['quantity']; ?>" min="1">
                                        <!-- <button type="button" onclick="updateQuantity(<?php echo $index; ?>, 1)">+</button> -->
                                    </div>
                                </td>
                                <td>₹<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                                <td>
                                    <form method="POST" style="margin: 0;">
                                        <input type="hidden" name="item_index" value="<?php echo $index; ?>">
                                        <button type="submit" name="delete_item" class="btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $total += $item['price'] * $item['quantity']; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="cart-totals">
                    <h2>Cart totals</h2>
                    <p>Subtotal: <strong>₹<?php echo number_format($total, 2); ?></strong></p>
                    <p>Total: <strong>₹<?php echo number_format($total, 2); ?></strong></p>
                </div>
                <div class="cart-buttons">
                    <a href="/creamcreations/index.php/shop" class="btn-continue">Continue Shopping</a>
                    <form method="POST" style="margin: 0;">
                        <button type="submit" name="clear_cart" class="btn-clear">Clear Cart</button>
                    </form>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <script>
        function updateQuantity(index, change) {
            const input = document.querySelector(`input[name='quantities[${index}]']`);
            let value = parseInt(input.value, 10) + change;
            input.value = Math.max(1, value);
        }

        document.querySelector('button[name="update_cart"]').addEventListener('click', function (e) {
            e.preventDefault();

            const quantities = {};
            document.querySelectorAll('input[name^="quantities"]').forEach((input) => {
                const index = input.name.match(/\d+/)[0];
                quantities[index] = input.value;
            });

            fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    action: 'update_cart',
                    quantities: quantities
                }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        const total = data.data.total;
                        const cart = data.data.cart;

                        document.querySelector('.cart-totals strong').textContent = `₹${total.toFixed(2)}`;

                        Object.keys(cart).forEach((index) => {
                            const subtotalCell = document.querySelector(
                                `tbody tr:nth-child(${parseInt(index, 10) + 1}) td:nth-child(4)`
                            );
                            const subtotal = cart[index].price * cart[index].quantity;
                            subtotalCell.textContent = `₹${subtotal.toFixed(2)}`;
                        });
                    } else {
                        alert(data.data.message || 'Error updating cart.');
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('An error occurred while updating the cart.');
                });
        });
    </script>

    <?php get_footer(); ?>
</body>
</html>
