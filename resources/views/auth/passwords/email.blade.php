<!DOCTYPE html>
<html lang="en">
<head>
    @extends('audience.navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Include Font Awesome CSS -->
    <title>Reset Password</title>
    <style>
.login-form {
    max-width: 400px;
    width: 100%;
    position: absolute; /* ใช้ absolute position */
    top: 150px; /* ตำแหน่งตามความสูงที่ต้องการ */
    left: 50%; /* จัดให้ตรงกลางตามแนวนอน */
    transform: translateX(-50%); /* ย้ายไปที่ตำแหน่งจริงของตัวแบบฟอร์ม */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px; /* เพิ่มช่องว่างรอบๆ form */
}


        .card-body {
            padding: 30px;
        }

        .back-icon {
            font-size: 16px;
            color: #333;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        .card-title {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        .card-text {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 14px;
            display: block;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body> <!-- ตำแหน่ง body เริ่มต้นที่นี่ -->

<div class="card login-form">
    <div class="card-body">
        <!-- Back button -->
        <a class="back-icon" onclick="goBack()">
            <i class="fas fa-arrow-left"></i> ย้อนกลับ
        </a>

        <h3 class="card-title">เปลี่ยนรหัสผ่าน</h3>
        
        <div class="card-text">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email">ป้อนที่อยู่อีเมลของคุณแล้วเราจะส่งลิงก์เพื่อรีเซ็ตรหัสผ่านไปให้คุณ</label>
                    <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="กรอกที่อยู่อีเมลของคุณ">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn">ส่งอีเมลเปลี่ยนรหัสผ่าน</button>

            </form>
        </div>
    </div>
</div>

<!-- JavaScript function to go back -->
<script>
    function goBack() {
        window.location.href = '/login';
    }
</script>
</body> <!-- ตำแหน่ง body สิ้นสุดที่นี่ -->
</html>
