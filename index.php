<!-- ภานุวัฒน์ ไคร้อุดม รหัสนักศึกษา 60050231 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASS4-ภานุวัฒน์ ไคร้อุดม รหัสนักศึกษา 60050231</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>
<?php error_reporting(E_ERROR | E_PARSE); ?>
<body>
    <div class="main container mt-3">
    <h5 class="text-center">
    คำนวณหาค่าดัชนีมวลกาย BMI
    </h5>
    <div class="name mt-5">
    <p>ผู้จัดทำ</p>
        <span>นาย ภานุวัฒน์ ไคร้อุดม รหัสนักศึกษา 60050231</span>
    </div>
    </div>
    <div class="container">
    <table class="table table-dark mt-5 text-center">
        <thead>
            <tr class="bg-primary">
                <th scope="col">เกณฑ์การวัดผม</th>
                <th scope="col">ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>มากกว่า 23</td>
                <td>อ้วน</td>
            </tr>
            <tr>
                <td>18.5 - 22.9</td>
                <td>ปกติ</td>
            </tr>
            <tr>
                <td>น้อยกว่า 18.5</td>
                <td>ผอม</td>
            </tr>
        </tbody>
    </table>

<form method="post">
        <div class="row mt-5 mx-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">กรุณากรอกส่วนสูง (cm.)</span>
            </div>
            <input
                id="replyNumber1" 
                min="0" 
                data-bind="value:replyNumber1"
                name="Height"
                type="number"
                class="form-control"
                aria-label="Height"
                aria-describedby="basic-addon1"
                required
            />
          </div>
        </div>
        <div class="row mt-2 mx-3">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">กรุณากรอกน้ำหนัก (kg.)</span>
            </div>
            <input
                id="replyNumber2" 
                min="0" 
                data-bind="value:replyNumber2"
                name="weight"
                type="number"
                class="form-control"
                aria-label="weight"
                aria-describedby="basic-addon1"
                required
            />
          </div>
        </div>
        <div class="row justify-content-center">
          <button
            type="submit"
            name="submit"
            id="cal"
            class="btn btn-success mx-4"
          >
            ตรวจสอบ
          </button>
          <button type="reset" class="btn btn-secondary" >ยกเลิก</button>
        </div>
      </form>
</div>

<?php 
   if (isset($_POST['submit'])) { 
     $Height = $_POST['Height'];
     $weight = $_POST['weight'];
     $MHeight = ($Height / 100);
     $bmi = 0;
     $result = "กรุณากรอกข้อมูลให้ถูกต้อง";
     $bmi = $weight / ($MHeight*$MHeight);

    
    if ($bmi>=23) 
        { $result= "อ้วน"; }
    else if (($bmi>=18.5)&&($bmi<=22.9)) 
        { $result= "ปกติ" ; }
    else if ($bmi<=18.5) 
        { $result= "ผอม" ; }
  ?> 
  
  <div class="text-center">
    <div class="row my-5 justify-content-center">
        <div class="card w-75">
          <div class="card-body">
            <h5 class="card-title">สรุปผล</h5>
            <p class="card-text">
              ค่า BMI ของคุณคือ <?php 
              if(($Height <= 0)||($weight <= 0)){
                echo " ไม่สามารถคำนวณได้"; 
                } 
               else echo number_format($bmi,1)  ?> 
            </p>
            <h5 class="card-text" style="color: green;">
              อยู่ในเกณฑ์ <?php echo $result?>
            </h5>
          </div>
        </div>
      </div>
      </div>
    <?php	} ?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
        }
</script>
</body>
</html>