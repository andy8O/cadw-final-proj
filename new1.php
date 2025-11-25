<!DOCTYPE html>
<html>
<head>
<title>iPear</title>
<style>
        * {
            margin: 0;padding: 0;box-sizing: border-box;
        }

        body {
            font-family: -apple-system, sans-serif;line-height: 1.6;
            color: #000000;
        }

       /* Navigation bar */
        nav {
            position: fixed;top: 0;width: 100%; background: rgba(255, 255, 255, 0.8);backdrop-filter: blur(20px);border-bottom: 1px solid rgba(0, 0, 0, 0.1);z-index: 1000;
        }


        .nav-container {
            max-width: 1200px;margin:0 auto; padding:0 20px;display: flex; justify-content: space-between; align-items: center;height: 60px;
        }

        .logo {
            font-size: 30px;font-weight: 700;
        }

        .nav-links {
            display: flex;gap: 30px;list-style: none;
        }

        .nav-links a {
            text-decoration: none;color: #000000;font-size: 15px;transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.7;
        }

        .nav-icons {
            display: flex; gap: 9px;
        }

        .nav-icons button {
            border: none;background: none;cursor: pointer;padding: 9px;border-radius: 50%;transition: background 0.3s;
        }

        .nav-icons button:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            background: none;border: none;font-size: 24px;display: none;
        }

        .mobile-menu {
            display: none;background: white;border-top: 1px solid #ddd;padding: 20px;
        }


        .mobile-menu a {
            display: block;padding: 10px 0;text-decoration: none;color: #000000;
        }

        /* Hero Section */
        .hero {
            padding-top: 80px;min-height: 100vh;display: flex;align-items: center;justify-content: center;text-align: center;
        }

        .hero-content {
            max-width: 1200px; padding: 40px 20px;
        }

        .hero h1 {
            font-size: 100px;font-weight: 700;margin-bottom: 0px;
        }

        .hero .subtitle {
            font-size: 36px;font-weight: 600;color: #008080; margin-bottom: 0px;
        }

        .hero .description {
            font-size: 20px;color: #808080;max-width: 800px;margin-bottom: 20px;
        }

        .cta-buttons {
            display: flex;gap: 20px;justify-content: center;flex-wrap: wrap;margin-bottom: 30px;
        }

        .btn {
            padding: 12px 32px;border-radius: 25px;font-size: 16px;font-weight: 600;
            transition: all 0.3s;border: none;
        }

        .btn-primary {
            background: #0071e3;color: white;
        }

        .btn-primary:hover {
            background: #20B2AA; transform: scale(1.05);
        }

        .btn-secondary {
            background: transparent; color: #0071e3;border: 2px solid #0071e3;
        }

        .btn-secondary:hover {
            background: rgba(0, 113, 227, 0.05);
        }

        .hero-device {
            max-width: 900px; margin: 0 auto; aspect-ratio: 16/10; background: linear-gradient(135deg, #2d3748, #1a202c);
            border-radius: 30px; display: flex;align-items: center;justify-content: center;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);padding: 20px;
        }

        .hero-device img {
            max-width: 90%;max-height: 90%;object-fit: contain;border-radius: 20px;
        }

        .phone-mockup {
            width: 250px;height: 450px;background: linear-gradient(135deg, #667eea, #764ba2, #f093fb);
            border-radius: 50px;display: flex;align-items: center;justify-content: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);transition: transform 0.5s;font-size: 80px;
        }

        .phone-mockup:hover {
            transform: scale(1.05);
        }

        /* Product Lineup */
        .products {
            padding: 40px 20px; 
        }

        .section-title {
            text-align: center; font-size: 48px; font-weight: 700; margin-bottom: 0px;
        }

        .section-subtitle {
            text-align: center;font-size: 20px;color: #666;margin-bottom: 60px;
        }

        .product-grid {
            max-width: 1200px;margin: 0 auto;display: grid;grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: #f5f5f7;border-radius: 30px;padding: 40px;  text-align: center;  transition: all 0.3s;
        }

        .product-card:hover {
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .product-card h3 {
            font-size: 32px;font-weight: 700;margin-bottom: 10px;
        }

        .product-card .price {
            font-size: 24px;font-weight: 600;color: #666;margin-bottom: 30px;
        }

        .product-image {
            width: 100%; height: 280px; margin: 0 auto 30px; border-radius: 20px;
            display: flex;align-items: center;justify-content: center;overflow: hidden;
            background: #fff;
        }

        .product-image img {
            width: 100%;height: 100%;object-fit: contain;
            transition: transform 0.5s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-features {
            list-style: none; text-align: left; margin-bottom: 30px;
        }

        .product-features li {
            padding: 8px 0;display: flex;align-items: center;
        }

        .product-features li:before {
            content: "✓";color: #34c759;font-weight: bold;margin-right: 10px;
        }

        /* Feature Sections */
        .feature-section {padding: 100px 20px;
        }

        .feature-dark {
            background: #000;color: white;
        }

        .feature-light {
            background: linear-gradient(135deg, #e0f2fe, #f3e8ff);
        }

        .feature-white {
            background:linear-gradient(135deg, #0071e3, #8b5cf6, #ec4899) ;
        }

        .feature-content {
            max-width: 1200px;margin: 0 auto;display: grid;grid-template-columns: 1fr 1fr;
            gap: 60px;align-items: center;
        }

        .feature-text h2 {
            font-size: 48px;font-weight: 700;margin-bottom: 25px;
            line-height: 1.1;
        }

        .feature-text p {
            font-size: 20px;line-height: 1.5;margin-bottom: 25px;
        }

        .feature-dark p {
            color: #ccc;
        }

        .feature-light p {
            color: #555;
        }

        .feature-link {
            color: #0071e3; text-decoration: none; font-weight: 600; display: inline-flex;
            align-items: center;gap: 8px;
        }

        .feature-link:hover {
            text-decoration: none;
        }

        .feature-visual {
            height: 400px;border-radius: 30px;display: flex;align-items: center;
            justify-content: center;font-size: 100px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);overflow: hidden;
        }

        .feature-visual img {
            width: 100%;height: 100%;
            object-fit: cover;
        }

        /* Tech Specs */
        .tech-specs {
            padding: 100px 20px;background: #000;color: white;
        }

        .tech-specs .section-subtitle {
            color: #888;
        }

        .specs-grid {
            max-width: 1200px;margin: 0 auto;display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .spec-card {
            background: #1a1a1a;border-radius: 20px;padding: 40px;text-align: center;
            transition: background 0.3s;
        }

        .spec-card:hover {
            background: #252525;
        }

        .spec-card .icon {
            font-size: 60px;margin-bottom: 20px;
        }

        .spec-card h3 {
            font-size: 20px;font-weight: 700;margin-bottom: 15px;
        }

        .spec-card .spec-value {
            font-size: 24px; font-weight: 600; color: #0071e3; margin-bottom: 10px;
        }

        .spec-card .spec-detail {
            color: #888;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 20px;background: linear-gradient(135deg, #0071e3, #8b5cf6, #ec4899);
            color: white;text-align: center;
        }

        .cta-section h2 {
            font-size: 48px;font-weight: 700;margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 24px;margin-bottom: 40px;
        }

        .cta-section .btn-primary {
            background: white;color: #0071e3;
        }

        .cta-section .btn-secondary {
            border-color: white;
            color: white;
        }

        .cta-section .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Footer */
        footer {
            background: #f5f5f7;padding: 60px 20px;
        }

        .footer-content {
            max-width: 1200px;margin: 0 auto;
        }

        .footer-grid {
            display: grid;grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;margin-bottom: 40px;
        }

        .footer-column h4 {
            font-weight: 600; margin-bottom: 15px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column a {
            color: #666;text-decoration: none;font-size: 14px;display: block;
            margin-bottom: 8px;transition: color 0.3s;
        }

        .footer-column a:hover {
            color: #000;
        }

        .footer-bottom {
            border-top: 1px solid #ddd;padding-top: 30px;display: flex;
            justify-content: space-between;align-items: center;flex-wrap: wrap;gap: 20px;
        }

        .footer-bottom p {
            color: #666;font-size: 14px;
        }

        .footer-links {
            display: flex; gap: 25px;
        }

        .footer-links a {
            color: #666;text-decoration: none;font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .hero h1 {
                font-size: 48px;
            }

            .hero .subtitle {
                font-size: 24px;
            }

            .feature-content {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 36px;
            }
        }
    </style>
</head>
<body>
<div class="products-bar">
  <?php
  if ($_SERVER['REQUEST_METHOD']=='POST' && !empty($_POST)) {
 
  $result = ("SELECT * FROM products");
    echo "<div class='product-card'>";
    echo "<h3>" . $row['name'] . "</h3>";
    echo "<p class='price'>$" . $row['price'] . "</p>";
    echo "<div class='product-image'><img src='" . $row['image_url'] . "' alt='" . $row['name'] . "'></div>";
    echo "<ul class='product-features'>";
    echo "<li>" . $row['feature1'] . "</li>";
    echo "<li>" . $row['feature2'] . "</li>";
    echo "<li>" . $row['feature3'] . "</li>";
    echo "</ul>";
    echo "<button class='btn btn-primary' style='width: 100%;'>Select</button>";
    echo "</div>";
  }
  ?>
</div>