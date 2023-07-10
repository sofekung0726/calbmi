<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="./index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</head>
<body>
    <h1>BMI Calculator</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="weight">Weight (kg):</label>
        <input type="text" name="weight" id="weight" required><br>

        <label for="height">Height (cm):</label>
        <input type="text" name="height" id="height" required><br> 

        <input type="submit" value="Calculate BMI"> <br>
        <div class="card" style="width: 18rem;">
  <div class="card-body">
    
  

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
            echo "รูปร่าง :น้ำหนักน้อย / ผอม";
        } elseif($bmi >=18.5 && $bmi <= 22.90) {
            echo "รูปร่าง :ปกติ (สุขภาพดี)";
        } elseif($bmi >=23 && $bmi <= 24.90){
            echo "รูปร่าง :ท้วม / โรคอ้วนระดับ 1 ";
        } elseif ($bmi >=25 && $bmi <= 29.90){
            echo "รูปร่าง :อ้วน / โรคอ้วนระดับ 2";
        }else{
            echo "รูปร่าง :อ้วนมาก / โรคอ้วนระดับ 3	";
        }
    }
    ?>
        </div>
    </form>
   
</body>
</html>