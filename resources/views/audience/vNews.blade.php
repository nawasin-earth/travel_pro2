<!DOCTYPE html>
<html lang="en">
<head>@extends('audience.navbar')
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
  margin-top: 6em; /* Adjust as needed */
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




        
  </style>
</head>
<body>





<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>


<div id="drawer">
  <div class="long-card-main" v-for="(news, index) in newsArray" :key="index">

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

  }
});
</script>





</body>
</html>
