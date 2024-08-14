<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['username']);
    $class = htmlspecialchars($_POST['password']);
    $number = htmlspecialchars($_POST['additional']);
    $gender = htmlspecialchars($_POST['gender']);
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลที่ได้รับ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .info-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .info-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .info-container p {
            margin: 5px 0;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="info-container">
        <h2>ข้อมูล</h2>
        <p><strong>ชื่อ-สกุล:</strong> <?php echo $name; ?></p>
        <p><strong>ชั้น:</strong> <?php echo $class; ?></p>
        <p><strong>เลขที่:</strong> <?php echo $number; ?></p>
        <p><strong>เพศ:</strong> <?php echo $gender; ?></p>
    </div>
</body>
</html>
<?php
}
?>