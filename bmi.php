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
        // ฟังก์ชันคำนวณ BMI
        function calculateBMI($weight, $height) {
            $heightInMeters = $height / 100;  // แปลงส่วนสูงเป็นเมตร
            return $weight / ($heightInMeters * $heightInMeters);  // คำนวณ BMI
        }

        // ฟังก์ชันแปลผล BMI
        function getBMICategory($bmi) {
            if ($bmi < 18.5) {
                return ['ผลการประเมิน: น้ำหนักน้อยกว่ามาตรฐาน', 'bmi-category-underweight', 'คุณควรเพิ่มน้ำหนักและรับประทานอาหารที่มีประโยชน์ รวมถึงออกกำลังกายเพื่อสร้างกล้ามเนื้อ'];
            } elseif ($bmi >= 18.5 && $bmi < 24.9) {
                return ['ผลการประเมิน: น้ำหนักปกติ', 'bmi-category-normal', 'รักษาน้ำหนักให้อยู่ในช่วงนี้ด้วยการรับประทานอาหารครบ 5 หมู่และออกกำลังกายอย่างสม่ำเสมอ'];
            } elseif ($bmi >= 25 && $bmi < 29.9) {
                return ['ผลการประเมิน: น้ำหนักเกิน', 'bmi-category-overweight', 'ลดปริมาณแป้งและน้ำตาล รวมถึงออกกำลังกายเพื่อควบคุมน้ำหนัก'];
            } else {
                return ['ผลการประเมิน: โรคอ้วน', 'bmi-category-obese', 'ควรปรึกษาแพทย์เพื่อวางแผนลดน้ำหนักและปรับเปลี่ยนวิถีชีวิต'];
            }
        }

        // รับข้อมูลจากฟอร์ม
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $firstName = $_POST['firstName']; // ชื่อ
            $lastName = $_POST['lastName']; // นามสกุล
            $age = $_POST['age']; // อายุ
            $weight = $_POST['weight']; // น้ำหนัก (กิโลกรัม)
            $height = $_POST['height']; // ส่วนสูง (เซนติเมตร)
            // hello
            // คำนวณ BMI
            $bmi = calculateBMI($weight, $height);

            // แปลผล BMI
            list($bmiResult, $categoryClass, $advice) = getBMICategory($bmi);

            echo "<div class='result'>";
            echo "<h3>ข้อมูลผู้ใช้</h3>";
            echo "<p>ชื่อ: $firstName $lastName</p>";
            echo "<p>อายุ: $age ปี</p>";
            echo "<h3>ผลลัพธ์</h3>";
            echo "<p>น้ำหนัก: $weight กิโลกรัม</p>";
            echo "<p>ส่วนสูง: $height เซนติเมตร</p>";
            echo "<p>BMI: " . number_format($bmi, 2) . "</p>";
            echo "<p class='bmi-category $categoryClass'>$bmiResult</p>";
            echo "<p>$advice</p>";
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
