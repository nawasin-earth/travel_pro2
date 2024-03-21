<!DOCTYPE html>
<html lang="en">
<head>@extends('audience.navbar')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        body {
            background: #f8fafc;
            font-family: "Pontano Sans", sans-serif;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .login-container {
            background: white;
            position: relative;
            border-radius: 5px;
            display: flex;
            width: 70vw;
            height: 70vh;
            box-shadow: 0 19px 38px rgba(0, 0, 0, 0.07);
            transition: .4s;
        }

        .login {
            transition: .4s;
            font-family: "Muli", sans-serif;
        }

        .login#login-form {
            width: 50%;
            display: block;
            padding: 15px;
            align-items: center;
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        .login#login-bg {
            width: 50%;
            display: inline-flex;
            background: url(https://thailand.opendevelopmentmekong.net/wp-content/uploads/sites/5/2019/12/768928ba55094d28916cf70e8eb8-1580747.jpg);
            background-size: cover;
            background-position: center center;
            float: right;
            border-radius: 0 5px 5px 0;
        }/*https://picsum.photos/700*/

        .register {
            width: 50%;
            display: block;
            padding: 15px;
            align-items: center;
            text-align: center;
            position: relative;
            margin-top: 30px;
            transition: .4s;
            font-family: "Muli", sans-serif;
            display: none;
        }

        .form-title {
            position: absolute;
            top: 11%;
            left: 0;
            right: 0;
            text-align: center;
            color: black;
            font-size: 2.2em;
            font-family: 'Spartan', sans-serif;
            line-height: 1.4;
            margin-top: -24px;
        }

        .form-title hr {
            width: 75%;
            border: 2px solid #dedede1f;
            border-radius: 10px;
            margin-top: 20px;
        }

        .register .form-title {
            margin-top: -54px;
        }

        .form-container {
            padding: 25px 10px;
            border-radius: 5px;
            width: 80%;
            text-align: left;
            margin-top: 70px;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        label {
            font-size: 1em;
            color: black;
            margin: 0px 0 !important;
            margin-left: 4px !important;
        }

        input {
            background: #f8fafc;
            border: 0;
            width: 100%;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 20px !important;
            outline: 0;
            transition: .4s;
        }

        input::placeholder {
            opacity: .4;
        }

        .submit-buttons {
            display: flex;
        }

        .submit-buttons input {
            width: 50%;
            text-align: center;
            color: white;
            transition: .2s;
            font-size: 1em;
        }

        .submit-buttons input:hover {
            opacity: .7;
        }

        .submit-buttons input:nth-of-type(1) {
            border-radius: 5px 0 0 5px;
            background: #54a0ff;
        }

        .submit-buttons input:nth-of-type(2) {
            border-radius: 0 5px 5px 0;
            background: #c8d6e5;
        }

        .forgot {
            text-align: right;
            margin-top: -10px;
        }

        .forgot a {
            text-decoration: none;
            color: black;
            font-size: 0.8em;
        }

        @media (max-width: 933px) {
            .login#login-bg {
                width: 0;
            }

            .login#login-form,
            .register {
                width: 100%;
            }

            input {
                width: 100%;
            }
        }

        .back-icon {
            font-size: 16px;
            color: #412C2C;
            cursor: pointer;
            text-decoration: none; /* Remove default underline */
            transition: color 0.3s; /* Add transition for color change */
            padding: 5px 10px;
        }

        .back-icon:hover {
            color: #000000;
            
        }

    </style>

</head>
<body>
<div class="login animated fadeIn" style="animation-delay:.7s;animation-duration:4s;" id="login-bg" alt="Background Image"></div>
<div class="container">
    <div class="content">

    <a class="back-icon" onclick="goBack()">
            <i class="fas fa-arrow-left"></i> ย้อนกลับ
        </a>

        <div class="login-container animated fadeInDown" style="animation-delay:.3s;">
            <!--   Login   -->
            <div class="login justify-content-center" id="login-form">
                <h1 class="form-title"> เข้าสู่ระบบ </h1>

                <div class="form-container animated fadeIn" style="animation-delay:.7s;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <label for="email"><i class="fas fa-at"></i> อีเมล </label>
                        <input type="email" name="email" placeholder="กรอกอีเมลของคุณ" value="{{ old('email') }}">
                        @error('email')
                        <span class="error-message" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror

                        <label for="password"><i class="fab fa-slack-hash"></i> รหัสผ่าน </label>
                        <input type="password" name="password" placeholder="กรอกรหัสผ่านของคุณ">
                        @error('password')
                        <span class="error-message" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                        <div class="forgot">
                            <a href="{{ route('password.request') }}">{{ __('ลืมรหัสผ่านหรือไม่?') }}</a>
                        </div><br><br>
                        <div class="submit-buttons">
                            <input type="submit" value="ยืนยัน">
                            <input type="button" value="สมัครสมาชิก" class="btn-register">
                        </div>
                    </form>
                </div>
            </div>
            <!--   Login   -->

            <!--    Register    -->

            <div class="register justify-content-center animatedr" style="animation-delay:.3s">
                <h1 class="form-title "> สมัครสมาชิก </h1>

    <div class="form-container animated fadeIn" style="animation-delay:.7s;">
        <form method="POST" action="{{ route('register') }}">
            @csrf <!-- Add this CSRF token for security -->

            <label for=""><i class="fab fa-amilia"></i> ชื่อ </label>
            <input type="text" name="name" placeholder="กรอกชื่อของคุณ" required autofocus>

            <label for=""><i class="fas fa-at"></i> อีเมล </label>
            <input type="email" name="email" placeholder="กรอกอีเมลของคุณ">

            <label for=""><i class="fab fa-slack-hash"></i> รหัสผ่าน </label>
            <input type="password" name="password" placeholder="กรอกรหัสผ่านของคุณ">

            <label for=""><i class="fab fa-slack-hash"></i> ยืนยันรหัสผ่าน </label>
            <input type="password" name="password_confirmation" placeholder="กรอกรหัสผ่านของคุณอีกครั้ง">

            <label for=""><i class="fas fa-map-marker-alt"></i> จังหวัด </label>
            <select name="province" class="select2" required>
    <option value="" disabled selected>เลือกจังหวัดของคุณ</option>
    <?php
    $provinces = [             'กรุงเทพมหานคร', 'สมุทรปราการ', 'นนทบุรี', 'ปทุมธานี', 'พระนครศรีอยุธยา',
    'อ่างทอง', 'ลพบุรี', 'สิงห์บุรี', 'ชัยนาท', 'สระบุรี',
    'ชลบุรี', 'ระยอง', 'จันทบุรี', 'ตราด', 'ฉะเชิงเทรา',
    'ปราจีนบุรี', 'นครนายก', 'สระแก้ว', 'นครราชสีมา', 'บุรีรัมย์',
    'สุรินทร์', 'ศรีสะเกษ', 'อุบลราชธานี', 'ยโสธร', 'ชัยภูมิ',
    'อำนาจเจริญ', 'หนองบัวลำภู', 'ขอนแก่น', 'อุดรธานี', 'เลย',
    'หนองคาย', 'มหาสารคาม', 'ร้อยเอ็ด', 'กาฬสินธุ์', 'สกลนคร',
    'นครพนม', 'มุกดาหาร', 'เชียงใหม่', 'ลำพูน', 'ลำปาง',
    'อุตรดิตถ์', 'แพร่', 'น่าน', 'แพร่', 'เชียงราย',
    'แม่ฮ่องสอน', 'นครสวรรค์', 'อุทัยธานี', 'กำแพงเพชร', 'ตาก',
    'สุโขทัย', 'พิษณุโลก', 'พิจิตร', 'เพชรบูรณ์', 'ราชบุรี',
    'กาญจนบุรี', 'สุพรรณบุรี', 'นครปฐม', 'สมุทรสาคร', 'สมุทรสงคราม',
    'เพชรบุรี', 'ประจวบคีรีขันธ์', 'ชุมพร', 'ระนอง', 'สุราษฎร์ธานี',
    'พังงา', 'ภูเก็ต', 'กระบี่', 'นครศรีธรรมราช', 'ตรัง',
    'พัทลุง', 'สตูล', 'สงขลา', 'ปัตตานี', 'ยะลา',
    'นราธิวาส', 'บึงกาฬ'];
    foreach ($provinces as $province) {
        echo "<option value=\"$province\">$province</option>";
    }
    ?>
</select><br><br><br>

            <div class="submit-buttons">
                <input type="submit" value="ยืนยัน" style="background:#55efc4;">
                <input type="button" value="เข้าสู่ระบบ" class="btn-login">
            </div>
        </form>
    </div>
</div>

            <!--    Register    -->

            <div class="login animated fadeIn" style="animation-delay:.7s;animation-duration:4s;" id="login-bg"></div>

        </div>

    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

    $(document).ready(function () {

        $('.btn-register').click(function () {

            setTimeout(function () {
                $('#login-form').removeClass('fadeIn');
                $('.register').removeClass(' zoomOut');
                $('#login-form').css('animation-delay', '0');
                $('.register').css(' animation-delay', '0');
            }, 10)

            $('#login-form').addClass('animated zoomOut');
            $('#login-form').css('display', 'none');
            $('.register').addClass('animated fadeIn');
            $('.register').css('display', 'block');
            $('.login-container').css('height', '95vh');
        })

        $('.btn-login').click(function () {
            setTimeout(function () {
                $('.register').removeClass('fadeIn');
                $('#login-form').removeClass(' zoomOut');
            }, 10)


            $('.register').addClass('animated zoomOut');
            $('.register').css('display', 'none');
            $('#login-form').addClass('animated fadeIn');
            $('#login-form').css('display', 'block');
            $('.login-container').css('height', '70vh');
        })

    })

</script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    function goBack() {
        window.location.href = '/';
    }
</script>
</body>
</html>
