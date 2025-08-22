<?php
require_once 'config.php';

header('Content-Type: application/json');
session_start();

if (!isset($_SESSION['user_id'])) {
    echo json_encode([
        'success' => false,
        'message' => 'User not logged in'
    ]);
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    if (isset($data['action'])) {
        if ($data['action'] == 'add') {
            $product_id = $data['product_id'];
            $quantity = $data['quantity'];
            
            // Check if product already in cart
            $stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id = :user_id AND product_id = :product_id");
            $stmt->execute([
                'user_id' => $user_id,
                'product_id' => $product_id
            ]);
            
            if ($stmt->rowCount() > 0) {
                // Update quantity
                $stmt = $pdo->prepare("UPDATE cart SET quantity = quantity + :quantity WHERE user_id = :user_id AND product_id = :product_id");
                $stmt->execute([
                    'quantity' => $quantity,
                    'user_id' => $user_id,
                    'product_id' => $product_id
                ]);
            } else {
                // Add new item
                $stmt = $pdo->prepare("INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)");
                $stmt->execute([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'quantity' => $quantity
                ]);
            }
            
            echo json_encode([
                'success' => true,
                'message' => 'Product added to cart'
            ]);
        } elseif ($data['action'] == 'update') {
            $product_id = $data['product_id'];
            $quantity = $data['quantity'];
            
            if ($quantity <= 0) {
                // Remove item
                $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = :user_id AND product_id = :product_id");
                $stmt->execute([
                    'user_id' => $user_id,
                    'product_id' => $product_id
                ]);
            } else {
                // Update quantity
                $stmt = $pdo->prepare("UPDATE cart SET quantity = :quantity WHERE user_id = :user_id AND product_id = :product_id");
                $stmt->execute([
                    'quantity' => $quantity,
                    'user_id' => $user_id,
                    'product_id' => $product_id
                ]);
            }
            
            echo json_encode([
                'success' => true,
                'message' => 'Cart updated'
            ]);
        } elseif ($data['action'] == 'remove') {
            $product_id = $data['product_id'];
            
            $stmt = $pdo->prepare("DELETE FROM cart WHERE user_id = :user_id AND product_id = :product_id");
            $stmt->execute([
                'user_id' => $user_id,
                'product_id' => $product_id
            ]);
            
            echo json_encode([
                'success' => true,
                'message' => 'Product removed from cart'
            ]);
        }
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'Invalid action'
        ]);
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Get cart items
    $stmt = $pdo->prepare("
        SELECT p.*, c.quantity 
        FROM cart c 
        JOIN products p ON c.product_id = p.id 
        WHERE c.user_id = :user_id
    ");
    $stmt->execute(['user_id => $user_id']);
    $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode([
        'success' => true,
        'cart' => $cart_items
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
}
?>