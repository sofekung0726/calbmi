<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>BMI Calculator</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="weight">Weight (kg):</label>
        <input type="text" name="weight" id="weight" required><br>

        <label for="height">Height (cm):</label>
        <input type="text" name="height" id="height" required><br>

        <input type="submit" value="Calculate BMI">

        
        
    </form>
    <?php
    
    // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST หรือไม่
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าน้ำหนักและส่วนสูงจากฟอร์ม
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        if ($height>3) {
            $height =  $height/100;
        }
        // คำนวณ BMI
        $bmi = $weight / ($height * $height);
        echo "BMI: " . $bmi . "<br>";
        if ($bmi <18.5) {
            echo "น้ำหนักน้อย / ผอม";
        } elseif($bmi >=18.5 && $bmi <= 22.90) {
            echo "ปกติ (สุขภาพดี)";
        } elseif($bmi >=23 && $bmi <= 24.90){
            echo "ท้วม / โรคอ้วนระดับ 1 ";
        } elseif ($bmi >=25 && $bmi <= 29.90){
            echo "อ้วน / โรคอ้วนระดับ 2";
        }else{
            echo "อ้วนมาก / โรคอ้วนระดับ 3	";
        }
    }
    ?>
</body>
</html>