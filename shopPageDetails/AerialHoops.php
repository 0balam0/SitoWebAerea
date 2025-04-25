<?php
// AerialHoops.php - Product detail page
?>
<link rel="stylesheet" href="aerialHoopsStyle.css">

<div class="aerial-hoops-container">
    <div class="product-detail">
        <!-- Image Gallery -->
        <div class="product-image-gallery">
            <div class="main-image">
                <img src="./images/shopping/cerchio.jpg" alt="Aerial Hoop" id="main-product-image">
            </div>
            <div class="small-images">
                <img src="./images/shopping/cerchio.jpg" alt="Aerial Hoop - Main View" class="active" onclick="updateMainImage(this)">
                <img src="./images/shopping/cerchio.jpg" alt="Aerial Hoop - Side View" onclick="updateMainImage(this)">
                <img src="./images/shopping/cerchio.jpg" alt="Aerial Hoop - Close Up" onclick="updateMainImage(this)">
                <img src="./images/shopping/cerchio.jpg" alt="Aerial Hoop - In Use" onclick="updateMainImage(this)">
            </div>
        </div>
        
        <!-- Product Information -->
        <div class="product-info">
            <div class="product-header">
                <h1 class="product-title">Professional Aerial Hoop</h1>
                <p class="product-subtitle">Premium Quality Lyra for Aerial Performers</p>
            </div>
            
            <div class="price-section">
                <span class="product-price">€399.99</span>
                <span class="stock-badge">In Stock</span>
            </div>
            
            <div class="product-tabs">
                <div class="tab-button active" data-tab="description">Description</div>
                <div class="tab-button" data-tab="specifications">Specifications</div>
                <div class="tab-button" data-tab="shipping">Shipping</div>
            </div>
            
            <div id="description" class="tab-content active">
                <p>Our Professional Aerial Hoop (Lyra) is designed for both beginners and experienced aerialists. Made from high-grade stainless steel, this hoop provides the perfect balance of strength and flexibility for dynamic aerial performances.</p>
                <p>Each hoop is hand-finished and undergoes rigorous safety testing to ensure durability and performance. The hoop comes with a swivel and carabiner for easy rigging, and optional padding for comfort during long training sessions.</p>
                <p>Whether you're performing in a studio, at home, or on stage, our aerial hoop will provide the reliability and precision you need for your aerial art.</p>
            </div>
            
            <div id="specifications" class="tab-content">
                <dl class="specs-list">
                    <dt>Diameter</dt>
                    <dd>90cm (36 inches) - Other sizes available on request</dd>
                    
                    <dt>Material</dt>
                    <dd>Polished Stainless Steel</dd>
                    
                    <dt>Tube Thickness</dt>
                    <dd>25mm (1 inch)</dd>
                    
                    <dt>Weight Capacity</dt>
                    <dd>150kg (330 lbs)</dd>
                    
                    <dt>Weight</dt>
                    <dd>4.5kg (10 lbs)</dd>
                    
                    <dt>Includes</dt>
                    <dd>Hoop, Safety Swivel, Carabiner, Setup Instructions</dd>
                    
                    <dt>Optional Extras</dt>
                    <dd>Padding, Colored Tape, Training Guide</dd>
                </dl>
            </div>
            
            <div id="shipping" class="tab-content">
                <p>We take great care in packaging and shipping our aerial equipment to ensure it arrives safely:</p>
                <ul class="shipping-list">
                    <li>Free shipping within Europe (3-5 business days)</li>
                    <li>International shipping available (7-14 business days)</li>
                    <li>All hoops are inspected before shipping</li>
                    <li>Custom sizes may require additional production time</li>
                    <li>Tracking number provided with all orders</li>
                </ul>
                <p>For custom orders or specialized requirements, please contact our customer service team.</p>
            </div>
            
            <div class="action-buttons">
                <button class="primary-button" onclick="addToCart('Professional Aerial Hoop', 399.99)">Add to Cart</button>
                <button class="secondary-button" onclick="showCustomSizeForm()">Request Custom Size</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab functionality
    document.addEventListener('DOMContentLoaded', function() {
        // Set up tab switching
        const tabButtons = document.querySelectorAll('.tab-button');
        
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Get the tab to show
                const tabName = this.getAttribute('data-tab');
                
                // Hide all tabs
                document.querySelectorAll('.tab-content').forEach(tab => {
                    tab.classList.remove('active');
                });
                
                // Remove active class from all buttons
                tabButtons.forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Show the selected tab
                document.getElementById(tabName).classList.add('active');
                
                // Set active class on clicked button
                this.classList.add('active');
            });
        });
    });

    // Image Gallery Functions
    function updateMainImage(smallImg) {
        // Update main image source
        document.getElementById('main-product-image').src = smallImg.src;
        
        // Update active class on thumbnails
        let thumbnails = document.querySelectorAll('.small-images img');
        thumbnails.forEach(img => {
            img.classList.remove('active');
        });
        smallImg.classList.add('active');
    }

    // Add to cart functionality
    function addToCart(productName, price) {
        alert(`${productName} added to cart!`);
        // Here you would add code to actually add the product to a cart
    }

    // Show custom size form
    function showCustomSizeForm() {
        alert("Custom size request feature will be implemented soon.");
        // In a real implementation, this would show a form or modal
    }
</script>
