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

        .form-group {
            display: flex;
            justify-content: space-between;
        }

        .form-group input {
            width: 48%;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>คำนวณ BMI (ดัชนีมวลกาย)</h1>

        <form action="bmi.php" method="POST">
            <div class="form-group">
                <label for="weight">น้ำหนัก (กิโลกรัม):</label>
                <input type="text" name="weight" id="weight" required>
            </div>
            
            <div class="form-group">
                <label for="height">ส่วนสูง (เซนติเมตร):</label>
                <input type="text" name="height" id="height" required>
            </div>

            <input type="submit" value="คำนวณ BMI">
            <input type="reset" value="ล้างข้อมูล">
        </form>

        <div class="form-footer">
            <p>การคำนวณ BMI เพื่อประเมินดัชนีมวลกายของคุณ</p>
        </div>
    </div>

</body>
</html>
