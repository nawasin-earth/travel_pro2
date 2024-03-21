<!DOCTYPE html>
<html lang="en">
<head>@extends('layouts.app')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Pontano+Sans");
.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 71.25rem;
  width: 100%;
}

.grid {
  display: flex;
  flex-direction: column;
  flex-flow: row wrap;
}
.grid > [class*=column-] {
  display: block;
}

.first {
  order: -1;
}

.last {
  order: 12;
}

.align-top {
  align-items: start;
}

.align-center {
  align-items: center;
}

.align-bottom {
  align-items: end;
}

.column-xs-1 {
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-xs-2 {
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-xs-3 {
  flex-basis: 25%;
  max-width: 25%;
}

.column-xs-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-xs-5 {
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-xs-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-xs-7 {
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-xs-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-xs-9 {
  flex-basis: 75%;
  max-width: 75%;
}

.column-xs-10 {
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-xs-11 {
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-xs-12 {
  flex-basis: 100%;
  max-width: 100%;
}

@media (min-width: 48rem) {
  .column-sm-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-sm-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-sm-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-sm-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-sm-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-sm-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-sm-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-sm-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-sm-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-sm-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-sm-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-sm-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 62rem) {
  .column-md-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-md-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-md-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-md-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-md-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-md-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-md-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-md-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-md-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-md-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-md-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-md-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 75rem) {
  .column-lg-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-lg-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-lg-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-lg-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-lg-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-lg-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-lg-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-lg-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-lg-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-lg-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-lg-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-lg-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@supports (display: grid) {
  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
  }
  .grid > [class*=column-] {
    margin: 0;
    max-width: 100%;
  }

  .column-xs-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-xs-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-xs-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-xs-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-xs-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-xs-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-xs-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-xs-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-xs-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-xs-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-xs-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-xs-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }

  @media (min-width: 48rem) {
    .column-sm-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-sm-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-sm-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-sm-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-sm-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-sm-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-sm-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-sm-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-sm-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-sm-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-sm-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-sm-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 62rem) {
    .column-md-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-md-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-md-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-md-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-md-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-md-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-md-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-md-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-md-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-md-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-md-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-md-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 75rem) {
    .column-lg-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-lg-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-lg-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-lg-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-lg-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-lg-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-lg-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-lg-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-lg-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-lg-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-lg-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-lg-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
}
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}

body {
  font-family: "Pontano Sans", sans-serif;
  font-size: 1.125rem;
  line-height: 1.5;
  margin: 0;
  padding: 0;
  color: #888;
  background: #fff;
  text-rendering: optimizeLegibility;
}

ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
ul li {
  margin: 0 1.75rem 0 0;
}

a {
  color: #888;
  text-decoration: none;
  transition: all 0.2s ease;
}
a:hover {
  color: #333;
}
a.active {
  color: #333;
}

h1 {
  color: #000000;
  font-weight: normal;
  margin: 1.75rem 0 1rem 0;
}

h2, h3, h4 {
  color: #333;
  font-weight: normal;
  margin: 1.75rem 0 1rem 0;
}

h1 {
  font-size: 2rem;
}

h2 {
  font-size: 2.125rem;
  margin: 0;
}

h3 {
  font-size: 2rem;
}

h4 {
  font-size: 1.5rem;
  margin: 1rem 0 0.5rem 0;
}

section {
  display: block;
}

img {
  max-width: 100%;
  height: auto;
  -o-object-fit: cover;
     object-fit: cover;
}

nav {
  display: block;
}
nav li {
  font-size: 1.125rem;
  margin: 0;
}

.toggle-nav {
  display: flex;
  justify-content: flex-end;
  font-size: 1.125rem;
  line-height: 1.7;
  margin: 1rem 0;
}
.toggle-nav i {
  font-size: 1.5rem;
  line-height: 1.4;
  margin: 0 0 0 0.5rem;
}

#highlight {
  color: #333;
  font-size: 1.125rem;
  text-transform: uppercase;
}

.price {
  margin: 0;
}

.breadcrumb-list {
  display: flex;
  flex-wrap: wrap;
  padding: 0;
  margin: 1rem 0 0 0;
  list-style: none;
}
.breadcrumb-list li {
  font-size: 0.85rem;
  letter-spacing: 0.125rem;
  text-transform: uppercase;
}

.breadcrumb-item.active {
  color: #333;
}
.breadcrumb-item + .breadcrumb-item::before {
  content: "/";
  display: inline-block;
  padding: 0 0.5rem;
  color: #d5d5d5;
}

.description {
  border-top: 0.0625rem solid #e3dddd;
  margin: 2rem 0;
  padding: 1rem 0 0 0;
}

.add-to-cart {
  position: relative;
  display: inline-block;
  background: #3e3e3f;
  color: #fff;
  border: none;
  border-radius: 0;
  padding: 1.25rem 2.5rem;
  font-size: 1rem;
  cursor: pointer;
  transform: translateZ(0);
  transition: color 0.3s ease;
  letter-spacing: 0.0625rem;
  font-weight: bold;
}
.add-to-cart:hover::before {
  transform: scaleX(1);
}
.add-to-cart::before {
  position: absolute;
  content: "";
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #565657;
  transform: scaleX(0);
  transform-origin: 0 50%;
  transition: transform 0.3s ease-out;
}

.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 75rem;
  width: 100%;
}

.grid > [class*=column-] {
  padding: 1rem;
}
.grid.menu, .grid.product {
  border-bottom: 0.0625rem solid #e3dddd;
}
.grid.menu > [class*=column-] {
  padding: 0.5rem 1rem 0.5rem 1rem;
}
.grid.product {
  padding: 0 0 1.5rem 0;
}

footer {
  padding: 1rem 0;
  text-align: center;
}

.product-image {
  display: none;
}

.image-list li {
  margin: 0;
}

@media (min-width: 62rem) {
  .product-image img, .image-list img {
    width: 100%;
  }

  .product-image {
    display: block;
  }
  .product-image img {
    height: 52vh;
  }
  .product-image img.active {
    display: block;
    margin: 0 0 0.75rem 0;
  }

  .image-list {
    display: flex;
    overflow: hidden;
  }
  .image-list li {
    margin: 0 0.75rem 0 0;
    flex-basis: 100%;
  }
  .image-list li:nth-child(3) {
    margin: 0;
  }
  .image-list img {
    height: 10rem;
    width: 100%;
    transition: opacity 0.3s ease;
    cursor: pointer;
  }
  .image-list img:hover {
    opacity: 0.7;
  }

  nav ul {
    justify-content: flex-end;
  }

  .toggle-nav {
    display: none;
  }

}
@-webkit-keyframes fadeImg {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeImg {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.product-name {
  font-size: 40px; /* ปรับขนาดตามที่ต้องการ */
  color: #333; /* ปรับสีตามที่ต้องการ */
}

/*.column-xs-12.column-md-5 {
  display: flex;
  flex-direction: column;
}
*/
.product-name {
  display: flex;
  align-items: center;
}

.card__like {
  margin-left: auto;
  cursor: pointer;
  width: 40px;
  height: 40px;
}
.map {
  display: flex;
  justify-content: center;
  align-items: center;
}


  .tag {
    background-color: #007bff;
    color: #fff;
    padding: 2px 8px;
    border-radius: 4px;
    margin-right: 5px;
    font-size: 19px;
}

/* สไตล์ของหน้าต่างลอย */
.modal {
  display: none; /* ซ่อนเริ่มต้น */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: hidden; /* ป้องกันการเลื่อนหน้าต่าง */
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  margin: 7% auto;
  width: 55%;
}

.close {
  color: #FFFFFF;
  float: right;
  font-size: 32px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.modal-content iframe {
  width: 100%;
  height: 480px; /* ลดความสูงเป็น 480px */
}
    .btn {
        color: #000; /* กำหนดสีของตัวอักษรเป็นสีดำ */
        text-decoration: none; /* ลบขีดเส้นใต้ข้อความ */
        transition: color 0.3s; /* ทำให้การเปลี่ยนสีมีอาการเปลี่ยนแปลงอย่างนุ่มนวล */
    }

    .btn:hover {
        color: #333; /* กำหนดสีของตัวอักษรเป็นสีเทาเข้มเมื่อโฮเวอร์ */
    }
    .price a {
        color: #0200FF; /* ตั้งสีข้อความเป็นสีฟ้า */
        text-decoration: none; /* ไม่มีเส้นใต้ */
    }

    .price a:hover {
        text-decoration: underline; /* เมื่อชี้ hover ให้มีเส้นใต้ */
        color: darkblue;
    }

    .website {
    color: blue; /* ตั้งสีข้อความเป็นสีฟ้า */
}

.website:hover {
    text-decoration: underline; /* เมื่อชี้ hover ให้มีเส้นใต้ */
}
#panoramaLink {
    color: white; /* ตั้งสีข้อความเป็นสีขาว */
}


    
    </style>

</head>
<body>
<main>
  <div class="container"><br><br><br>

  <a class="btn" href="#" onclick="goBack()">
    <i class="fas fa-caret-left"></i> ย้อนกลับ
</a>


    <div class="grid product">
    <div class="column-xs-12 column-md-7">
  <div class="product-gallery">
    <div class="product-image">
      @foreach (explode(',', $item->image) as $index => $imagePath)
        <img class="{{ $index === 0 ? 'active' : '' }}" src="{{ asset('images/'.$imagePath) }}" alt="Product Image" style="max-width: 100%;">
        @break
      @endforeach
    </div>
    <ul class="image-list">
      @foreach (explode(',', $item->image) as $index => $imagePath)
        <li class="image-item"><img src="{{ asset('images/'.$imagePath) }}" alt="Product Image" style="max-width: 100%;"></li>
      @endforeach
    </ul>
  </div>
</div>
<div class="column-xs-12 column-md-5">
  <h class="product-name">{{ $item->name_t }}
    <svg class="card__like" viewBox="0 0 24 24" data-item-id="{{ $item->id }}">
      <path class="heart-path" fill="#D3D3D3" d="M12,21.4L10.6,20C5.4,15.4,2,12.3,2,8.5C2,5.4,4.4,3,7.5,3c1.7,0,3.4,0.8,4.5,2.1C13.1,3.8,14.8,3,16.5,3C19.6,3,22,5.4,22,8.5c0,3.8-3.4,6.9-8.6,11.5L12,21.4z" />
    </svg>
  </h>
  <div class="description">
  <p>&nbsp;&nbsp;&nbsp; {{ $item->description_t }}</p>
    <p>จังหวัด : {{ $item->province_t }}</p>
    <p>ฤดูกาล : {{ $item->season }}</p>
    <p>เปิดให้เข้าชม : {{ $item->time }}</p>
  </div><br>
<!-- ปุ่มเปิดหน้าต่างลอย -->
<a class="add-to-cart" id="panoramaLink">Panorama 360°</a>

<!-- หน้าต่างลอย -->
<div id="panoramaModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    @foreach ($images360 as $image360)
    <iframe width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="{{ $image360->image_360_link }}"></iframe><br>
    @endforeach
  </div>
</div>

</div>
</div>


  <div><br>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $item->detail }}</p>
  <br><br><br>
  <p>&nbsp; ค่าเข้าชม : {{ $item->admission }}</p>
  <p>&nbsp; โทร : {{ $item->contact }}</p>
  <p>&nbsp; ที่อยู่ : {{ $item->address }}</p>
  <p>&nbsp; เว็บไซต์ : <a class="website" href="{{ $item->website }}">{{ $item->website }}</a></p><br><br>
  <div class="map">
  <iframe src="{{ $item->coordinates }}" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  </div><br><br>


  <div class="grid related-products">
    <div class="column-xs-12">
        <h3>สถานที่ใกล้เคียง</h3>
    </div>
    @if ($Recommend)
        @if ($Recommend->restaurant_name && $Recommend->restaurant_link)
        <div class="column-xs-12 column-md-4">
            <img src="{{ Storage::url($Recommend['restaurant_image']) }}"> <!-- เรียกใช้ URL ของรูปภาพ -->
            <h4>{{ $Recommend->restaurant_name }}</h4>
            <p class="price"><a href="{{ $Recommend->restaurant_link }}"><i class="fas fa-map-marker-alt"></i> ดูแผนที่</a></p>
        </div>
        @endif

        @if ($Recommend->cafe_name && $Recommend->cafe_link)
        <div class="column-xs-12 column-md-4">
            <img src="{{ Storage::url($Recommend['cafe_image']) }}"> <!-- เรียกใช้ URL ของรูปภาพ -->
            <h4>{{ $Recommend->cafe_name }}</h4>
            <p class="price"><a href="{{ $Recommend->cafe_link }}"><i class="fas fa-map-marker-alt"></i> ดูแผนที่</a></p>
        </div>
        @endif

        @if ($Recommend->hotel_name && $Recommend->hotel_link)
        <div class="column-xs-12 column-md-4">
            <img src="{{ Storage::url($Recommend['hotel_image']) }}"> <!-- เรียกใช้ URL ของรูปภาพ -->
            <h4>{{ $Recommend->hotel_name }}</h4>
            <p class="price"><a href="{{ $Recommend->hotel_link }}"><i class="fas fa-map-marker-alt"></i> ดูแผนที่</a></p>
        </div>
        @endif
    @endif
</div>

  </div>
</main><br><br>

@extends('comment')


    <script>

function goBack() {
    window.history.back();
}


        const activeImage = document.querySelector(".product-image .active");
const productImages = document.querySelectorAll(".image-list img");
const navItem = document.querySelector('a.toggle-nav');

function changeImage(e) {
  activeImage.src = e.target.src;
}

function toggleNavigation(){
  this.nextElementSibling.classList.toggle('active');
}

productImages.forEach(image => image.addEventListener("click", changeImage));
navItem.addEventListener('click', toggleNavigation);
    </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        // Get user data from PHP
        var userData = {!! json_encode($userData) !!};
        var likedItems = getLikedItemsFromLocalStorage(userData.id);

        // Apply styling to liked items on page load
        likedItems.forEach(function (itemId) {
            var likeIcon = $(".card__like[data-item-id='" + itemId + "']");
            var heartPath = likeIcon.find('.heart-path');
            likeIcon.addClass('active');
            heartPath.attr('fill', 'red');
        });

        // Handle click event for the like button
        $(".card__like").click(function () {
            var heartPath = $(this).find('.heart-path');
            var itemId = $(this).data('item-id');

            if ($(this).hasClass('active')) {
                heartPath.attr('fill', '#D3D3D3');
                likedItems = likedItems.filter(function (id) {
                    return id !== itemId;
                });
            } else {
                heartPath.attr('fill', 'red');
                likedItems.push(itemId);
            }

            $(this).toggleClass("active");

            // Save liked items to local storage
            saveLikedItemsToLocalStorage(userData.id, likedItems);
        });

        // Function to get liked items from local storage
        function getLikedItemsFromLocalStorage(userId) {
            var storedData = JSON.parse(localStorage.getItem('likedItems')) || {};
            return storedData[userId] || [];
        }

        // Function to save liked items to local storage
        function saveLikedItemsToLocalStorage(userId, items) {
            var storedData = JSON.parse(localStorage.getItem('likedItems')) || {};
            storedData[userId] = items;
            localStorage.setItem('likedItems', JSON.stringify(storedData));
        }
    });
</script>
<script>
  // เลือกปุ่ม Panorama 360° ด้วย ID
var panoramaLink = document.getElementById("panoramaLink");

// เลือกหน้าต่างลอยด้วย ID
var panoramaModal = document.getElementById("panoramaModal");

// เลือกปุ่มปิดหน้าต่างลอยด้วย class="close"
var closeBtn = document.getElementsByClassName("close")[0];

// เมื่อปุ่ม Panorama 360° ถูกคลิก
panoramaLink.onclick = function() {
  // แสดงหน้าต่างลอย
  panoramaModal.style.display = "block";
}

// เมื่อปุ่มปิดหน้าต่างลอยถูกคลิก
closeBtn.onclick = function() {
  // ซ่อนหน้าต่างลอย
  panoramaModal.style.display = "none";
}

// เมื่อผู้ใช้คลิกนอกเหนือจากหน้าต่างลอย
window.onclick = function(event) {
  if (event.target == panoramaModal) {
    // ซ่อนหน้าต่างลอย
    panoramaModal.style.display = "none";
  }
}

</script>

</body>
</html>