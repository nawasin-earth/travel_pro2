<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap");
body {
	box-sizing: border-box;
	background: #f2f2f2;
	font-family: "Roboto", sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
}

.container {
	background: #fff;
	width: 100%;
	padding: 5rem;
    
}

.title {
	font-size: 24px;
	line-height: 28px;
	font-weight: bold;
	color: #374151;
	padding-bottom: 11px;
	border-bottom: 1px solid #d7dbdf;
}

.form-group {
	margin-top: 25px;
	display: flex;
	flex-direction: column;
}

.textarea-group label,
.form-group label {
	color: #374151;
	font-size: 16px;
	line-height: 19px;
	margin-bottom: 10px;
}

.form-group [type],
.textarea-group textarea {
	border: 1px solid #d2d6db;
	border-radius: 6px;
	padding: 15px;
}
.form-group [type]:hover,
.textarea-group textarea:hover {
	border-color: #a8afb9;
}
.form-group [type]:focus,
.textarea-group textarea:focus {
	border-color: #5850eb;
}

.textarea-group {
	margin-top: 24px;
}

.textarea-group textarea {
	resize: none;
	width: 100%;
	margin-top: 10px;
	height: calc(100% - 59px);
}

.button-container {
    text-align: center; /* จัดให้ปุ่มอยู่ตรงกลาง */
    margin-top: 20px; /* ระยะห่างด้านบน */
}

.button {
    padding: 10px 20px; /* ขนาดของปุ่ม */
    border: none; /* ไม่มีเส้นขอบ */
    border-radius: 5px; /* มุมของปุ่ม */
    cursor: pointer; /* เปลี่ยน cursor เมื่อโฮเวอร์ปุ่ม */
}

.cancel {
    background-color: #ccc; /* สีพื้นหลัง */
    color: #000; /* สีตัวอักษร */
}

.save {
    background-color: #007bff; /* สีพื้นหลัง */
    color: #fff; /* สีตัวอักษร */
}

/* เมื่อโฮเวอร์ปุ่ม */
.button:hover {
    opacity: 0.8; /* เพิ่มเฉพาะปุ่มทั้งหมด */
}

/* เมื่อคลิกปุ่ม */
.button:active {
    transform: translateY(1px); /* เลื่อนลงเล็กน้อยเมื่อคลิก */
}

@media screen and (min-width: 768px) {
	body {
		align-items: center;
		justify-content: center;
	}

	.container {
		margin: 4rem;
		box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
		border-radius: 4px;
		max-width: 32rem;
		padding: 2rem;
	}
}
@media screen and (min-width: 1024px) {
	.container {
		max-width: 80%;
		width: 100%;
	}

	.grid {
		display: grid;
		grid-gap: 24px;
		grid-template-columns: 1fr 1fr 1fr;
		grid-auto-rows: 1fr;
	}

	.email-group {
		grid-column: 1;
		grid-row: 2;
	}

	.phone-group {
		grid-column: 2;
		grid-row: 2;
	}

	.textarea-group {
		grid-column: 3;
		grid-row: span 2;
		margin-right: 2rem;
	}

	.button-container {
		text-align: right;
	}

	.button {
		/* bon, bon, bon
		c'est pas tout mais j'ai faim moi ^^
		*/
		width: auto;
	}
}

.restaurant-divider {
    border-top: 1px solid #ccc; /* เพิ่มเส้นขีดด้านบน */
    margin-top: 54px; /* ระยะห่างด้านบนของเส้นขีด */
    padding-top: 24px; /* ระยะห่างด้านบนของเนื้อหา */
}



    </style>
</head>
<body>
<div class="container">
<form method="POST" action="{{ route('admin.update', $item->id) }}" enctype="multipart/form-data">
    @csrf
<h1 class="title">แก้ไขแหล่งท่องเที่ยว {{ $item->name_t }}</h1>
<div class="grid">

    <div class="form-group a">
        <label for="name_t">ชื่อแหล่งท่องเที่ยว</label>
        <input id="name_t" type="text" name="name_t" value="{{ $item->name_t }}">
    </div>

    <div class="form-group province">
    <label for="province_t">จังหวัด</label>
    <select id="province" name="province_t" type="" required>
        <option value="" disabled {{ $item->province_t ? '' : 'selected' }}>เลือกจังหวัด</option>
        <option value="หนองคาย" {{ $item->province_t == 'หนองคาย' ? 'selected' : '' }}>หนองคาย</option>
        <option value="อุดรธานี" {{ $item->province_t == 'อุดรธานี' ? 'selected' : '' }}>อุดรธานี</option>
        <option value="บึงกาฬ" {{ $item->province_t == 'บึงกาฬ' ? 'selected' : '' }}>บึงกาฬ</option>
        <!-- Add more options as needed -->
    </select>
</div>

<div class="form-group b">
        <label for="description_t">คำอธิบาย</label>
        <input id="description_t" type="text" name="description_t" value="{{ $item->description_t }}">
    </div>

    <div class="form-group  email-group">
        <label for="season">ฤดูกาลที่เปิดให้บริการ</label>
        <input id="season" type="text" name="season" value="{{ $item->season }}">
    </div>

    <div class="form-group phone-group">
        <label for="time">เวลาเปิด-ปิด</label>
        <input id="time" type="text" name="time" value="{{ $item->time }}">
    </div>

    <div class="textarea-group">
    <label for="detail">รายละเอียด</label>
    <textarea id="detail" name="detail">{{ $item->detail }}</textarea>
</div>

    <div class="form-group">
        <label for="admission">ค่าเข้าชม</label>
        <input id="admission" type="text"  name="admission" value="{{ $item->admission }}">
    </div>

    <div class="form-group">
        <label for="address">ที่อยู่</label>
        <input id="address" type="text"  name="address" value="{{ $item->address }}">
    </div>

    <div class="form-group">
        <label for="contact">ติดต่อ</label>
        <input id="contact" type="text" name="contact" name="contact" value="{{ $item->contact }}">
    </div>

    <div class="form-group">
        <label for="website">เว็บไซต์</label>
        <input id="website" type="text" name="website" value="{{ $item->website }}">
    </div>

    <div class="form-group">
        <label for="coordinates">พิกัด</label>
        <input id="coordinates" type="text" name="coordinates" value="{{ $item->coordinates }}">
    </div>

    <div class="form-group">
        <label for="image">ภาพ</label>
        <input id="image" type="file" name="images[]" value="{{ $item->image }}" multiple>
    </div>

    @foreach ($travel360 as $item)
    <div class="form-group">
        <label for="image_360">ลิงค์ภาพ 360</label>
        <input id="image_360_link" type="text" name="image_360_link[]" value="{{ $item->image_360_link }}">
    </div>
@endforeach

</div>

<div class="grid restaurant-divider">
    
@foreach($recommends as $recommend)
<div class="form-group">
    <label for="restaurant_name">ร้านอาหาร</label>
    <input id="restaurant_name" type="text" name="restaurant_name" value="{{ $recommend->restaurant_name }}">
</div>

<div class="form-group">
    <label for="restaurant_link">พิกัดร้านอาหาร</label>
    <input id="restaurant_link" type="text" name="restaurant_link" value="{{ $recommend->restaurant_link }}">
</div>

<div class="form-group">
    <label for="restaurant_image">ภาพร้านอาหาร</label>
    <input id="restaurant_image" type="file" name="restaurant_image" value="{{ $recommend->restaurant_image }}">
</div>

<div class="form-group">
    <label for="cafe_name">ร้านกาแฟ</label>
    <input id="cafe_name" type="text" name="cafe_name" value="{{ $recommend->cafe_name }}">
</div>

<div class="form-group">
    <label for="cafe_link">พิกัดร้านกาแฟ</label>
    <input id="cafe_link" type="text" name="cafe_link" value="{{ $recommend->cafe_link }}">
</div>

<div class="form-group">
    <label for="cafe_image">ภาพร้านกาแฟ</label>
    <input id="cafe_image" type="file" name="cafe_image" value="{{ $recommend->cafe_image }}">
</div>

<div class="form-group">
    <label for="hotel_name">ที่พัก</label>
    <input id="hotel_name" type="text" name="hotel_name" value="{{ $recommend->hotel_name }}">
</div>

<div class="form-group">
    <label for="hotel_link">พิกัดที่พัก</label>
    <input id="hotel_link" type="text" name="hotel_link" value="{{ $recommend->hotel_link }}">
</div>

<div class="form-group">
    <label for="hotel_image">ภาพที่พัก</label>
    <input id="hotel_image" type="file" name="hotel_image" value="{{ $recommend->hotel_image }}">
</div>
@endforeach

</div>

<div class="button-container">
    <a href="{{ url()->previous() }}" class="button cancel">ยกเลิก</a>
    <button type="submit" class="button save" onclick="return confirmSubmit()">บันทึก</button>
</div>
</form>

</div>



<script>
    function confirmSubmit() {
    // แสดงกล่องข้อความเตือน
    var result = confirm("คุณต้องการบันทึกข้อมูลหรือไม่?");
    
    // ถ้าผู้ใช้กด "ตกลง" ให้ส่งข้อมูล
    if (result) {
        return true;
    } else {
        // ถ้าผู้ใช้กด "ยกเลิก" ไม่ต้องส่งข้อมูล
        return false;
    }
}

</script>
</body>
</html>