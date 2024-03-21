<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nanum+Gothic'>
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

.button {
	font-weight: bold;
	line-height: 19px;
	background: #5850eb;
	border: none;
	padding: 15px 25px;
	border-radius: 6px;
	color: white;
	width: 100%;
	margin-top: 24px;
}
.button:hover {
	background: #6e67ee;
}
.button:focus {
	background: #4239e8;
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
<form class="booking-form" action="{{ route('admin.storeTravel') }}" method="post" enctype="multipart/form-data">
@csrf
<h1 class="title">เพิ่มแหล่งท่องเที่ยว</h1>
<div class="grid">

    <div class="form-group a">
        <label for="name_t">ชื่อแหล่งท่องเที่ยว</label>
        <input type="text" id="name_t" name="name_t" placeholder="น้ำตก...." required>
    </div>
    <div class="form-group b">
        <label for="description_t">คำอธิบาย</label>
        <input type="text" id="description_t" name="description_t" placeholder="เดินป่า...." required>
    </div>
    <div class="form-group province">
        <label for="province_t">จังหวัด</label>
        <select id="province" name="province_t" type="" required>
                    <option value="" disabled selected>เลือกจังหวัด</option>
                    <option value="หนองคาย">หนองคาย</option>
                    <option value="อุดรธานี">อุดรธานี</option>
                    <option value="บึงกาฬ">บึงกาฬ</option>
                    <!-- Add more options as needed -->
                </select>
    </div>
    <div class="form-group  email-group">
        <label for="season">ฤดูกาลที่เปิดให้บริการ</label>
        <input type="text" id="season" name="season" placeholder="1 มกราคม - ...." required>
    </div>
    <div class="form-group phone-group">
        <label for="time">เวลาเปิด-ปิด</label>
        <input type="text" id="time" name="time" placeholder="08.00 - .... น." required>
    </div>
    <div class="textarea-group">
        <label for="detail">รายละเอียด</label>
        <textarea id="detail" name="detail" placeholder="รายละเอียดแหล่งท่องเที่ยว" required></textarea>
    </div>
    <div class="form-group">
        <label for="admission">ค่าเข้าชม</label>
        <input type="text" id="admission" name="admission" placeholder=".... บาท" required>
    </div>
    <div class="form-group">
        <label for="address">ที่อยู่</label>
        <input type="text" id="address" name="address" placeholder="123 ม.1 ...." required>
    </div>
    <div class="form-group">
        <label for="contact">ติดต่อ</label>
        <input type="text" id="contact" name="contact" placeholder="092...." required>
    </div>
    <div class="form-group">
        <label for="website">เว็บไซต์</label>
        <input type="text" id="website" name="website" placeholder="https://...." required>
    </div>
    <div class="form-group">
        <label for="coordinates">พิกัด</label>
        <input type="text" id="coordinates" name="coordinates" placeholder="...." required>
    </div>
    <div class="form-group">
        <label for="image">ภาพ</label>
        <input type="file" id="image" name="images[]" multiple>
    </div>
    <div class="form-group">
        <label for="image_360">ภาพ 360</label>
        <input type="text" id="image_360_link" name="image_360_link[]" placeholder="https://...." multiple>
    </div>

</div>

<div class="grid restaurant-divider">

    <div class="form-group">
        <label for="restaurant_name">ร้านอาหาร</label>
        <input type="text" id="restaurant_name" name="restaurant_name" placeholder="ร้านคุณ....">
    </div>
    <div class="form-group">
        <label for="restaurant_link">พิกัดร้านอาหาร</label>
        <input type="text" id="restaurant_link" name="restaurant_link" placeholder="https://....">
    </div>
    <div class="form-group">
        <label for="restaurant_image">ภาพร้านอาหาร</label>
        <input type="file" id="restaurant_image" name="restaurant_image">
    </div>

    <div class="form-group">
        <label for="cafe_name">ร้านกาแฟ</label>
        <input type="text" id="cafe_name" name="cafe_name" placeholder="คาเฟ่....">
    </div>
    <div class="form-group">
        <label for="cafe_link">พิกัดร้านกาแฟ</label>
        <input type="text" id="cafe_link" name="cafe_link" placeholder="https://....">
    </div>
    <div class="form-group">
        <label for="cafe_image">ภาพร้านกาแฟ</label>
        <input type="file" id="cafe_image" name="cafe_image">
    </div>

    <div class="form-group">
        <label for="hotel_name">ที่พัก</label>
        <input type="text" id="hotel_name" name="hotel_name" placeholder="โรงแรม....">
    </div>
    <div class="form-group">
        <label for="hotel_link">พิกัดที่พัก</label>
        <input type="text" id="hotel_link" name="hotel_link" placeholder="https://....">
    </div>
    <div class="form-group">
        <label for="hotel_image">ภาพที่พัก</label>
        <input type="file" id="hotel_image" name="hotel_image">
    </div>

</div>


    <div class="button-container">
    <button type="submit" class="button">บันทึก</button>
</div>
</form>
</div>



<script>
    function confirmSubmit(event) {
        event.preventDefault();
        if (confirm("คุณแน่ใจหรือไม่ที่จะส่งข้อมูลนี้?")) {
            document.querySelector('.booking-form').submit();
        } else {
            // ยกเลิกการส่งข้อมูล
        }
    }

    document.querySelector('button[type="submit"]').addEventListener('click', confirmSubmit);
</script>

</body>
</html>
