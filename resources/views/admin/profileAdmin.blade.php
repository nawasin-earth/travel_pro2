<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Profile</title>
<link rel="stylesheet" href="styles.css"> <!-- เชื่อมต่อไฟล์ CSS -->
<style>
/* เพิ่มสไตล์เฉพาะสำหรับหน้านี้ */
.form-container {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: 100px auto 0;
}

.form-section {
    width: 45%; /* กำหนดความกว้างของกล่องเป็น 45% */
    padding: 40px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-bottom: 40px;
    box-sizing: border-box; /* เพื่อให้ padding ถูกนับเข้าไปในความกว้าง */
    height: 100%; /* ความสูงเท่ากับ 100% ของพื้นที่ในกล่อง */
}

.form-section h2 {
    margin-top: 0;
    margin-bottom: 15px;
}

.form-section form {
    display: flex;
    flex-direction: column;
}

.form-section label {
    font-weight: bold;
}

.form-section input,
.form-section select {
    margin-bottom: 10px;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.form-section button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: white;
    cursor: pointer;
}

.password-section {
    background-color: #f2f2f2;
}

/* เพิ่ม media query เพื่อปรับการแสดงผลเมื่อหน้าจอมีขนาดเล็กลง */
@media screen and (max-width: 768px) {
    .form-container {
        flex-direction: column; /* เปลี่ยนเรียงลำดับเป็นคอลัมน์ */
    }

    .form-section {
        width: 100%; /* กำหนดความกว้างของกล่องให้เต็มขอบ */
    }
}

</style>
</head>
<body>

<!-- เริ่มต้นการแสดงผลของแบบฟอร์ม -->
<div class="form-container">

    <!-- Update Profile Form -->
    <div class="form-section">
        <h2>ข้อมูลส่วนตัว</h2>
        <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="name">ชื่อ</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" required>

            <label for="email">อีเมล</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" required>

            <label for="province">จังหวัด</label>
            <select name="province" id="province" required>
                @foreach ($provinces as $province)
                    <option value="{{ $province }}" {{ $user->province === $province ? 'selected' : '' }}>
                        {{ $province }}
                    </option>
                @endforeach
            </select>

            <button type="submit">บันทึกข้อมูลส่วนตัว</button>
        </form>
    </div>

    <!-- Password Change Section -->
    <div class="form-section password-section">
        <h2>เปลี่ยนรหัสผ่าน</h2>
        <form action="{{ route('update.password') }}" method="post">
            @csrf
            @method('PUT')

            <label for="current_password">รหัสผ่านปัจจุบัน</label>
            <input type="password" name="current_password" id="current_password" required>

            <label for="new_password">รหัสผ่านใหม่</label>
            <input type="password" name="new_password" id="new_password" required>

            <label for="new_password_confirmation">ยืนยันรหัสผ่านใหม่</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" required>

            <button type="submit">บันทึกรหัสผ่าน</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="script.js"></script>
</body>
</html>
