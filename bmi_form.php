<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณ BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"], input[type="reset"] {
            width: 48%;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover, input[type="reset"]:hover {
            background-color: #45a049;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>คำนวณ BMI (ดัชนีมวลกาย)</h1>

        <form action="bmi.php" method="POST">
            <label for="firstName">ชื่อ:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">นามสกุล:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="age">อายุ (ปี):</label>
            <input type="text" id="age" name="age" required>

            <label for="weight">น้ำหนัก (กิโลกรัม):</label>
            <input type="text" id="weight" name="weight" required>

            <label for="height">ส่วนสูง (เซนติเมตร):</label>
            <input type="text" id="height" name="height" required>

            <div style="display: flex; justify-content: space-between;">
                <input type="submit" value="คำนวณ BMI">
                <input type="reset" value="ล้างข้อมูล">
            </div>
        </form>
    </div>

</body>
</html>