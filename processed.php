<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azar Shop - Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 20px;
            text-align: center;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }

        .logo h1 {
            font-size: 28px;
            font-weight: 700;
            display: flex;
            align-items: center;
        }

        .logo h1 i {
            margin-right: 10px;
            color: #ffdd40;
        }

        .checkout-content {
            display: flex;
            flex-wrap: wrap;
        }

        .order-summary {
            flex: 1;
            padding: 25px;
            background: #f8f9fa;
            min-width: 300px;
        }

        .shipping-info {
            flex: 2;
            padding: 25px;
            min-width: 300px;
        }

        h2 {
            color: #6a11cb;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #6a11cb;
        }

        h3 {
            color: #6a11cb;
            margin: 20px 0 15px;
        }

        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            font-weight: bold;
            font-size: 20px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #ddd;
        }

        .shipping-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
        }

        .detail-group {
            margin-bottom: 15px;
        }

        .detail-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .detail-group .detail-value {
            padding: 10px;
            background: #f8f9fa;
            border-radius: 4px;
            border-left: 4px solid #6a11cb;
        }

        .payment-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin: 20px 0;
        }

        .payment-option {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .payment-option:hover {
            border-color: #6a11cb;
            background-color: #f8f9fa;
        }

        .payment-option input {
            margin-right: 15px;
            transform: scale(1.2);
        }

        .payment-option i {
            margin-right: 15px;
            font-size: 24px;
            color: #6a11cb;
        }

        .payment-option span {
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            border: none;
            padding: 15px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s;
            width: 100%;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary i {
            margin-right: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background: #2c3e50;
            color: white;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .checkout-content {
                flex-direction: column;
            }
            
            .order-summary, .shipping-info {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <h1><i class="fas fa-shopping-bag"></i> Azar Shop</h1>
            </div>
            <p>Complete your purchase</p>
        </header>

        <div class="checkout-content">
            <div class="order-summary">
                <h2>Checkout</h2>
                
                <h3>Order Summary</h3>
                <div class="summary-item">
                    <span>Smart Watch x 1</span>
                    <span>$199.99</span>
                </div>
                <div class="summary-item">
                    <span>Gaming Mouse x 1</span>
                    <span>$59.99</span>
                </div>
                
                <div class="summary-total">
                    <span>Total:</span>
                    <span>$259.98</span>
                </div>
            </div>

            <div class="shipping-info">
                <h3>Shipping Information</h3>
                
                <div class="shipping-details">
                    <div class="detail-group">
                        <label>Full Name</label>
                        <div class="detail-value">Yasir Osman</div>
                    </div>
                    
                    <div class="detail-group">
                        <label>Shipping Address</label>
                        <div class="detail-value">Narakodur to Tenli Rode</div>
                    </div>
                    
                    <div class="detail-group">
                        <label>City</label>
                        <div class="detail-value">Guntur</div>
                    </div>
                    
                    <div class="detail-group">
                        <label>ZIP Code</label>
                        <div class="detail-value">522212</div>
                    </div>
                    
                    <div class="detail-group">
                        <label>Phone Number</label>
                        <div class="detail-value">+91 9052546855</div>
                    </div>
                </div>

                <h3>Payment Method</h3>
                <div class="payment-options">
                    <label class="payment-option">
                        <input type="radio" name="payment-method" value="credit-card">
                        <i class="fas fa-credit-card"></i>
                        <span>Credit Card</span>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment-method" value="paypal" checked>
                        <i class="fab fa-paypal"></i>
                        <span>PayPal</span>
                    </label>
                    <label class="payment-option">
                        <input type="radio" name="payment-method" value="cash">
                        <i class="fas fa-money-bill-wave"></i>
                        <span>Cash on Delivery</span>
                    </label>
                </div>

                <button class="btn-primary" id="proceed-checkout">
                    <i class="fas fa-lock"></i> Proceed to Checkout
                </button>
            </div>
        </div>

        <footer>
            <p>&copy; 2023 Azar Shop. All rights reserved.</p>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const proceedBtn = document.getElementById('proceed-checkout');
            
            proceedBtn.addEventListener('click', function() {
                const paymentMethod = document.querySelector('input[name="payment-method"]:checked').value;
                
                alert(`Order processed successfully with ${paymentMethod} payment!`);
                
                // In a real application, this would redirect to a confirmation page
                // window.location.href = 'order-confirmation.html';
            });
            
            // Add interaction to payment options
            const paymentOptions = document.querySelectorAll('.payment-option');
            
            paymentOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const radio = this.querySelector('input[type="radio"]');
                    radio.checked = true;
                    
                    // Update visual selection
                    paymentOptions.forEach(opt => opt.style.borderColor = '#ddd');
                    this.style.borderColor = '#6a11cb';
                    this.style.backgroundColor = '#f0f4ff';
                });
            });
        });
    </script>
</body>
</html>