<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <title>Document</title>
  <style>

.pg-banner	{
  width:100%;
  height:500px;
}

.pg-banner-img-about	{
  background:url("https://cdn.shopify.com/s/files/1/0106/1244/1145/files/running-rx-sports-sunglass-bnr.jpg?7109621913818307385") no-repeat;
  background-size: cover;
  bax-shadow: 
}

.pg-banner-img-tech	{
  background:url("https://cdn.shopify.com/s/files/1/0106/1244/1145/files/digital-raypath-cover.jpg?4349066261614824186") no-repeat;
  background-size: cover;
  background-position: bottom;
}

.pg-title-color	{
  color: white !important;
  font-weight:bold;
}

.pad{
  margin-top: 2.5em !important;
  margin-bottom: 5em;
}
.long-card-main{
  display:flex;
  flex-direction:column;
  box-shadow: 0 20px 20px rgba(0,0,0,.08);
  width: 65%;
  margin: auto;
  /* margin-top: 6em;  Adjust as needed */
      margin-bottom: 2em; /* Adjust as needed */
}
.long-card{
  display: flex;
  background: white !important;
/*   box-shadow: 0 20px 20px rgba(0,0,0,.08); */
  width: 100%;
  height: 300px;
  border-bottom: 1px solid rgba(0,0,0,.08);
}
.long-card a{
  color: #909090 !important;
  background: none !important;
  text-decoration: none !important;
  border: none !important;
  font-weight: bold;
}
.long-card a:hover{
  color: #404040 !important;
}
.long-card-drawer{
  background: none !important;
  width:100%;
  height: 0;
  overflow:hidden;
  transition: all 200ms ease-in-out;
}
.autoHeight{
  height: 300px;
}
.long-card-drawer-inner{
  height: 500px;
  width: 100%;
  transition: all 200ms ease-in-out;

  justify-content: center;
  align-items: center;
  background-color: #f9fafa !important;
  color: #333333 !important;
}
.long-card-drawer-inner div{
  display: flex;
  flex-direction: column;

  height: auto;
  padding: 5% 3%;
  font-size: 90%;
}
.slideDrawer{
  transform: translateY(-500px);
}
.lc-text-section{
  width: 60%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-end;
  font-family: 'Lato', sans-serif;
  margin: 0 3% !important;
}
.handsome-hr{
  width: 100%;
  border-color: #e1e1e1 !important;
  margin-top: 1em;
  margin-bottom: 2em;
}
.lens-bold{
  font-weight: bold;
  margin: 0 !important;
}

.lc-text-section-link{
  padding: 1% 0;
  background-color: #00719C !important;
  color: white !important;
  text-decoration: none;
  border: none !important;
  cursor: pointer;
  font-weight: bold;
}
.lc-text-section-link:hover{
  text-decoration: none;
  border: none !important;
}
.lc-left{
  text-align: right;
  margin-bottom: 5% !important;
  max-width: 80%;
  
}
.lc-right{
  text-align: left;
  margin-bottom: 2% !important;
  align-self:flex-start;
  max-width: 80%;
  
}
.lc-image-section{
  width: 60%;
  height: 100%;
  background-color: #222;
}
.lc-image-section img {
  width: 100%; /* กำหนดให้ภาพเต็มความกว้างของพื้นที่ที่กำหนดไว้ใน .lc-image-section */
  height: 100%; /* กำหนดให้ภาพเต็มความสูงของพื้นที่ที่กำหนดไว้ใน .lc-image-section */
  object-fit: cover; /* ทำให้ภาพปรับขนาดเพื่อครอบคลุมพื้นที่ที่กำหนดไว้ใน .lc-image-section โดยไม่เสียสัดส่วน */
}


/* -------------------------------------------------------------background-images */
.drawer-image{
  height: 100% !important;
  width: 30% !important;
}

.drawer-image{
  background-position: center;
  background-size: contain;
}
.po-special{
    height: 100% !important;
    align-items: center;
    justify-content: center;
    width: auto;
}
/* jem's */

.blk-overlay{
  height: inherit;
  width: 30%;
/*   background-color: #0d8ab9; */
  background-color: black;
  opacity: .6;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.blk-overlay *{
  color: white !important;
  width: 50%;
  text-align: center;
}
.blk-overlay h1{
  font-size: 300% !important;
}


        /* สไตล์ของปุ่ม */
        .btn-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 100px;
            margin-right: 10%;
        }

        .btn {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
            border: none;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        /* สไตล์ของกล่องรับข้อมูล */
        .form-group {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            width: 70%; /* กำหนดความกว้างของฟอร์ม */
            margin: auto; /* จัดให้ฟอร์มอยู่ตรงกลางของหน้าจอ */
        }

        .form-control {
            width: calc(100% - 20px); /* หักค่า padding ของปุ่ม */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* เริ่มต้นซ่อนฟอร์ม */
        .my-form {
            display: none;
        }

        /* แสดงฟอร์มเมื่อกดปุ่ม */
        .form-visible .my-form {
            display: block;
        }

        /* ปุ่มยกเลิก */
        .btn-submit {
            margin-left: 30px; /* กำหนดระยะห่างของปุ่มยกเลิก */
        }

   .btn-red {
            background-color: #F20707;
            color: #fff;
        }
        .btn-green {
            background-color: #00BC0E;
            color: #fff;
        }



        
  </style>
</head>
<body>


    <div class="btn-container">
        <button id="showFormBtn" class="btn btn-green">เพิ่มข่าว</button>
    </div>

    <!-- ฟอร์ม -->
    <form action="{{ route('admin.storeNews') }}" method="POST" class="my-form">
        @csrf
        <div class="form-group">
            <input type="hidden" name="newsId" id="newsId">
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="title">หัวข้อ</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                
                <div style="width: 48%;">
    <label for="province">จังหวัด</label>
    <select name="province" id="province" class="form-control">
        <option value="อุดรธานี">อุดรธานี</option>
        <option value="หนองคาย">หนองคาย</option>
        <option value="บึงกาฬ">บึงกาฬ</option>
    </select>
</div>

            </div>
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="subtitle">คำบรรยาย</label>
                    <input type="text" name="subtitle" id="subtitle" class="form-control">
                </div>
                <div style="width: 48%;">
                    <label for="imageUrl">ลิงค์ภาพ</label>
                    <input type="text" name="imageUrl" id="imageUrl" class="form-control">
                </div>
            </div>
            <label for="content">เนื้อหา</label>
            <textarea name="content" id="content" class="form-control" rows="5"></textarea>
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="startDate">วันที่เปิด</label>
                    <input type="date" name="startDate" id="startDate" class="form-control">
                </div>
                <div style="width: 48%;">
                    <label for="endDate">วันที่ปิด</label>
                    <input type="date" name="endDate" id="endDate" class="form-control">
                </div>
            </div>
                    <!-- เพิ่มปุ่มยกเลิก -->
        <div class="btn-container">
            <button type="button" class="btn btn-secondary" id="cancelBtn">ยกเลิก</button>
            <button type="submit" class="btn btn-green btn-submit">ยืนยัน</button>
        </div>
        </div>
    </form>



<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>


<div id="drawer">
  <div class="long-card-main" v-for="(news, index) in newsArray" :key="index">
    
  <div class="edit-delete">
      <span class="btn btn-red delete-icon" @click="deleteNews(index)"><i class="fas fa-trash-alt"></i></span>
  </div>
  
    <div class="long-card">
      <div class="lc-text-section">
        <h2 class="lc-left">@{{ news.title }}</h2>
        <p class="lc-left">@{{ news.subtitle }}</p>
        <p class="lc-left">@{{ news.province }}</p>
        <a v-on:click="toggleDrawer(index)" class="lc-left lc-text-section-link">Learn More</a>
      </div>
      <div class="lc-image-section">
        <img :src="news.imageUrl" alt="Image">
      </div>
    </div>
    <div class="long-card-drawer" :class="{autoHeight: !news.hcDrawer}">
      <div class="long-card-drawer-inner" :class="{slideDrawer : news.hcDrawer}">
        <div>
          <p class="lens-bold">&nbsp;&nbsp;&nbsp; @{{ news.subtitle }}</p>
          <hr class="handsome-hr" />
          <p>&nbsp;&nbsp;&nbsp;@{{ news.content }}</p>

  <p style="margin: 0;">วันที่เปิด: @{{ news.startDate }}</p>
  <p style="margin: 0;">วันที่ปิด: @{{ news.endDate }}</p>

        </div>
      </div>
    </div>
  </div>
</div>


  



<script>
// รับข้อมูลข่าวที่มีอยู่ใน localStorage มาเก็บไว้ในตัวแปร newsDataArray
var newsDataArray = JSON.parse(localStorage.getItem('newsDataArray')) || [];

// ตัวแปรสำหรับเก็บไอดีข่าว
var newsIdCounter = 1;

// เมื่อฟอร์มถูกส่ง
document.querySelector('.my-form').addEventListener('submit', function(event) {
    // หยุดการกระทำเริ่มต้นของฟอร์ม
    event.preventDefault();
    
    // รับค่าจากฟอร์ม
    var title = document.getElementById('title').value;
    var subtitle = document.getElementById('subtitle').value;
    var province = document.getElementById('province').value;
    var content = document.getElementById('content').value;
    var imageUrl = document.getElementById('imageUrl').value;
    var startDate = document.getElementById('startDate').value;
    var endDate = document.getElementById('endDate').value;
    
    // สร้างอ็อบเจ็กต์เพื่อเก็บข้อมูล
    var newsData = {
        id: newsIdCounter++, // เพิ่มไอดีข่าวและบวกเพิ่มค่าไอดีข่าวในแต่ละครั้ง
        title: title,
        subtitle: subtitle,
        province: province,
        content: content,
        imageUrl: imageUrl,
        startDate: startDate,
        endDate: endDate
    };
    
    // เพิ่มข้อมูลข่าวใหม่ลงในอาเรย์
    newsDataArray.push(newsData);
    
    // บันทึกอาเรย์ข้อมูลข่าวลงใน localStorage
    localStorage.setItem('newsDataArray', JSON.stringify(newsDataArray));
    
    // สร้างกล่องยืนยัน
    var confirmResult = confirm("คุณต้องการที่จะบันทึกข้อมูลหรือไม่?");
    
    // ถ้าผู้ใช้กด OK ให้ส่งฟอร์ม
    if(confirmResult) {
        // ส่งฟอร์มเพื่อบันทึกข้อมูล
        this.submit();
    }
});

</script>

<script>
// ดึงข้อมูลข่าวจาก localStorage
var newsDataArray = JSON.parse(localStorage.getItem('newsDataArray')) || [];

// สร้าง Vue instance
var app = new Vue({
  el: '#drawer',
  data: {
    newsArray: newsDataArray.map(function(news) {
      return Object.assign(news, { hcDrawer: true });
    }).reverse() // เรียงลำดับข่าวใหม่อยู่ด้านบน
  },
  methods: {
    toggleDrawer: function(index) {
      // สลับค่า hcDrawer ของข่าวที่ index ที่คลิก
      this.newsArray[index].hcDrawer = !this.newsArray[index].hcDrawer;
    },
    deleteNews: function(index) {
  // แสดงหน้าต่างยืนยันการลบ
  var confirmation = confirm("คุณแน่ใจหรือไม่ที่จะลบข่าวนี้?");
  
  // ถ้ายืนยันการลบ
  if (confirmation) {
    // ลบข่าวที่ index ที่คลิก
    this.newsArray.splice(index, 1);
    // บันทึกข้อมูลใหม่ลงใน localStorage
    localStorage.setItem('newsDataArray', JSON.stringify(this.newsArray));
  }
}

  }
});
</script>


<script>
        // เพิ่มการเปลี่ยนสถานะเมื่อกดปุ่ม Show Form
        document.getElementById('showFormBtn').addEventListener('click', function() {
            document.body.classList.add('form-visible');
        });

        // เพิ่มการปิดฟอร์มเมื่อกดปุ่มยกเลิก
        document.getElementById('cancelBtn').addEventListener('click', function() {
            document.body.classList.remove('form-visible');
        });
    </script>


</body>
</html>
