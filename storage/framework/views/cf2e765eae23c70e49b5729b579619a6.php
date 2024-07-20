<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta tenhang="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        nav {
            background-color: #4CAF50;
            padding: 10px 0;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin: 0 10px;
        }

        nav ul li a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 4px;
        }

        nav ul li a:hover {
            background-color: #45a049;
            color: #f1f1f1;
        }

        .tenhang-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            list-style-type: none;
            margin: 0;
        }

        .tenhang-item {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            background-color: #fff;
        }

        .tenhang-item:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .tenhang-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 1.2em;
            color: #333;
        }

        .tenhang-price {
            color: #888;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/trangchu">Trang chủ</a></li>
            <li><a href="/tenhangs/category/1">Tin tức</a></li>
            <li><a href="/sanpham">sản phẩm</a></li>
            <li><a href="/tenhangs/category/3">Flash sale</a></li>
            <li><a href="/tenhangs/category/4">Giỏ hàng</a></li>
            <li><a href="/tenhangs/category/5">Đăng nhập</a></li>
            
        </ul>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\assphp3\resources\views/layout.blade.php ENDPATH**/ ?>