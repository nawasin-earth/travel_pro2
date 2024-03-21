<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>


  <style>

@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

a {
	text-decoration: none;
}

li {
	list-style: none;
}

:root {
	--poppins: 'Poppins', sans-serif;
	--lato: 'Lato', sans-serif;

	--light: #F9F9F9;
	--blue: #3C91E6;
	--light-blue: #CFE8FF;
	--grey: #eee;
	--dark-grey: #AAAAAA;
	--dark: #342E37;
	--red: #DB504A;
	--yellow: #FFCE26;
	--light-yellow: #FFF2C6;
	--orange: #FD7238;
	--light-orange: #FFE0D3;
	--green: #34F330;
	--light-green: #D0FDCF;
}

html {
	overflow-x: hidden;
}

body.dark {
	--light: #0C0C1E;
	--grey: #060714;
	--dark: #FBFBFB;
}

body {
	background: var(--grey);
	overflow-x: hidden;
}



/* MAIN */
#content main {
	width: 100%;
	padding: 60px 120px;
	font-family: var(--poppins);
	overflow-y: auto;
}


#content main .box-info {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
	grid-gap: 24px;
	margin-top: 36px;
}
#content main .box-info li {
	padding: 24px;
	background: var(--light);
	border-radius: 20px;
	display: flex;
	align-items: center;
	grid-gap: 24px;
}
#content main .box-info li .bx {
	width: 80px;
	height: 80px;
	border-radius: 10px;
	font-size: 36px;
	display: flex;
	justify-content: center;
	align-items: center;
}
#content main .box-info li:nth-child(1) .bx {
	background: var(--light-blue);
	color: var(--blue);
}
#content main .box-info li:nth-child(2) .bx {
	background: var(--light-yellow);
	color: var(--yellow);
}
#content main .box-info li:nth-child(3) .bx {
	background: var(--light-green);
	color: var(--green);
}
#content main .box-info li .text h3 {
	font-size: 24px;
	font-weight: 600;
	color: var(--dark);
}
#content main .box-info li .text p {
	color: var(--dark);	
}


#content main .table-data {
	display: flex;
	flex-wrap: wrap;
	grid-gap: 24px;
	margin-top: 24px;
	width: 100%;
	color: var(--dark);
}
#content main .table-data > div {
	border-radius: 20px;
	background: var(--light);
	padding: 24px;
	overflow-x: auto;
}
#content main .table-data .head {
	display: flex;
	align-items: center;
	grid-gap: 16px;
	margin-bottom: 24px;
}
#content main .table-data .head h3 {
	margin-right: auto;
	font-size: 24px;
	font-weight: 600;
}
#content main .table-data .head .bx {
	cursor: pointer;
}

#content main .table-data .order {
	flex-grow: 1;
	flex-basis: 500px;
}
#content main .table-data .order table {
	width: 100%;
	border-collapse: collapse;
}
#content main .table-data .order table th {
	padding-bottom: 12px;
	font-size: 13px;
	text-align: left;
	border-bottom: 1px solid var(--grey);
}
#content main .table-data .order table td {
	padding: 16px 0;
}
#content main .table-data .order table tr td:first-child {
	display: flex;
	align-items: center;
	grid-gap: 12px;
	padding-left: 6px;
}
#content main .table-data .order table td img {
	width: 36px;
	height: 36px;
	border-radius: 50%;
	object-fit: cover;
}
#content main .table-data .order table tbody tr:hover {
	background: var(--grey);
}



#content main .table-data .todo {
	flex-grow: 1;
	flex-basis: 300px;
}
#content main .table-data .todo .todo-list {
    width: 100%;
    max-height: 330px; /* กำหนดความสูงสูงสุดของ todo-list */
    overflow-y: auto; /* เพิ่มการเลื่อนในแนวแกน y หากเนื้อหาเกินความสูงที่กำหนด */
}

#content main .table-data .todo .todo-list li {
	width: 100%;
	margin-bottom: 16px;
	background: var(--grey);
	border-radius: 10px;
	padding: 14px 20px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}
#content main .table-data .todo .todo-list li .bx {
	cursor: pointer;
}

#content main .table-data .todo .todo-list li:last-child {
	margin-bottom: 0;
}
/* MAIN */
/* CONTENT */

#suggestionList li {
    word-break: break-all;
}



  </style>
</head>
<body>


	<!-- CONTENT -->
	<section id="content">


		<!-- MAIN -->
		<main>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>{{ $regularUserCount }}</h3>
						<p>สมาชิก</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user' ></i>
					<span class="text">
						<h3>{{ $adminCount }}</h3>
						<p>ผู้ดูแลระบบ</p>
					</span>
				</li>
				<li>
        <i class='bx bxs-map'></i>
					<span class="text">
						<h3>{{ $travelCount }}</h3>
						<p>แหล่งท่องเที่ยว</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				
				<div class="order">
					<div class="head">
						<h3>ประวัติการแก้ไข</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>แหล่งท่องเที่ยว</th>
								<th>วันที่</th>
								<th>ผู้แก้ไข</th>
							</tr>
						</thead>
						<tbody>
						@foreach($travels as $travel)
        				<tr>
            				<td>{{ $travel->name_t }}</td>
            				<td>{{ $travel->updated_at }}</td>
							<td>{{ $travel->name }}</td>
        				</tr>
        				@endforeach

						</tbody>
					</table>
				</div>

				<div class="todo">
					<div class="head">
						<h3>คำแนะนำ</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						
					<div id="suggestionList">
    					<ul>
        		<!-- รายการข้อเสนอแนะจะถูกแทรกที่นี่ -->
    					</ul>
					</div>

					</ul>
				</div>

			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<script>
document.addEventListener('DOMContentLoaded', function () {
    var suggestionList = document.getElementById('suggestionList');
    var suggestions = JSON.parse(localStorage.getItem('suggestions')) || [];

    if (suggestions.length > 0) {
        var ul = suggestionList.querySelector('ul');
        suggestions.forEach(function (suggestion, index) {
            var li = document.createElement('li');
            li.textContent = suggestion;
            
            // เพิ่ม class ตาม userType
            if (suggestion.userType === 0) {
                li.classList.add('completed');
            } else if (suggestion.userType === 1) {
                li.classList.add('not-completed');
            }
            
            // เพิ่ม icon dots
            var icon = document.createElement('i');
            icon.classList.add('bx', 'bx-x');
            
            // เพิ่ม icon dots เป็น child ของ li
            li.appendChild(icon);
            
            // ใช้ .prepend() เพื่อแทรกข้อเสนอแนะใหม่ล่าสุดที่ด้านบนของลิสต์
            ul.prepend(li);
            
            // เพิ่ม event listener สำหรับคลิกที่ไอคอนเพื่อลบคำแนะนำ
            icon.addEventListener('click', function () {
                var confirmDelete = confirm('คุณต้องการลบคำแนะนำนี้หรือไม่?');
                if (confirmDelete) {
                    // กระทำการลบคำแนะนำ
                    suggestions.splice(index, 1);
                    localStorage.setItem('suggestions', JSON.stringify(suggestions));
                    ul.removeChild(li);
                }
            });
        });
    } else {
        suggestionList.innerHTML = "<p>ยังไม่มีข้อเสนอแนะที่เก็บไว้</p>";
    }
});

</script>
	<script src="script.js"></script>

</body>
</html>