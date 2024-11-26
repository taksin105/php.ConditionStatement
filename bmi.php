<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์การคำนวณ BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        h3 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        p {
            color: #333;
            font-size: 18px;
            text-align: center;
            margin-top: 20px;
        }

        .result {
            margin-top: 30px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .result h3 {
            color: #4CAF50;
        }

        .result .bmi-category {
            font-size: 18px;
            font-weight: bold;
        }

        .bmi-category-normal {
            color: #4CAF50;
        }

        .bmi-category-overweight {
            color: #FF9800;
        }

        .bmi-category-obese {
            color: #F44336;
        }

        .bmi-category-underweight {
            color: #2196F3;
        }

        .button-container {
            text-align: center;
            margin-top: 30px;
        }

        .button-container a {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>ผลลัพธ์การคำนวณ BMI</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // รับค่าจากฟอร์ม
            $name = $_POST['name'];
            $age = $_POST['age'];
            $gender = $_POST['gender'];
            $weight = $_POST['weight'];
            $height = $_POST['height'];

            // แปลงส่วนสูงเป็นเมตร
            $heightInMeters = $height / 100;

            // คำนวณ BMI
            $bmi = $weight / ($heightInMeters * $heightInMeters);

            // แสดงผล
            echo "<div class='result'>";
            echo "<h3>ชื่อ-นามสกุล: $name</h3>";
            echo "<h3>อายุ: $age ปี</h3>";
            echo "<h3>เพศ: $gender</h3>";
            echo "<h3>น้ำหนัก: $weight กิโลกรัม</h3>";
            echo "<h3>ส่วนสูง: $height เซนติเมตร</h3>";
            echo "<h3>BMI: " . number_format($bmi, 2) . "</h3>";

            if ($bmi < 18.5) {
                echo "<p class='bmi-category bmi-category-underweight'>ผลการประเมิน: น้ำหนักน้อยกว่ามาตรฐาน</p>";
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                echo "<p class='bmi-category bmi-category-normal'>ผลการประเมิน: น้ำหนักปกติ</p>";
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                echo "<p class='bmi-category bmi-category-overweight'>ผลการประเมิน: น้ำหนักเกิน</p>";
            } else {
                echo "<p class='bmi-category bmi-category-obese'>ผลการประเมิน: โรคอ้วน</p>";
            }

            echo "</div>";
        } else {
            echo "<p>กรุณากรอกข้อมูลในฟอร์มเพื่อคำนวณ BMI</p>";
        }
        ?>

        <div class="button-container">
            <a href="bmi_form.php">กลับไปหน้าหลัก</a>
        </div>
    </div>

</body>
</html>
