<!DOCTYPE html>
<html lang="en">
<head>@extends('layouts.app')
  <style>
/* 12columns.css | Created by Katherine Kato | Released under the MIT license */
/* GitHub: https://kathykato.github.io/12columns/ */
@import url("https://fonts.googleapis.com/css?family=Old+Standard+TT:400|Muli:300,700");
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
  font-family: "Muli", sans-serif;
  font-size: 1rem;
  font-weight: 300;
  line-height: 1.6;
  margin: 0;
  padding: 0;
  color: #8e8e8e;
  background: #fff;
  text-rendering: optimizeLegibility;
}

h1,
h2,
h3 {
  font-family: "Old Standard TT", serif;
  line-height: 1.1;
}

h2,
h3 {
  color: #282828;
  font-weight: 400;
}

h1 {
  position: relative;
  z-index: 2;
  margin: 0 0 1rem;
  width: 100%;
  font-size: 3.125rem;
  font-weight: 400;
  color: #fff;
}

h2 {
  font-size: 2.0rem;
  margin: 1rem 0 1.5rem;
}

h3 {
  font-size: 1.5rem;
  margin: 0 0 2rem;
}

p {
  margin: 0 0 1.5rem;
}
p.lead {
  font-size: 1.025rem;
  margin: 0 0 2rem;
}
p.copyright {
  margin: 1.5rem 0;
}

a {
  transition: color 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
  color: #d5cdcd;
  text-decoration: none;
}
a:hover {
  color: #fff;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
ul li {
  margin: 0 1.5rem 0 0;
}

.intro {
  height: 100%;
  align-content: center;
  align-items: center;
  justify-content: center;
}

nav {
  position: relative;
  padding: 1.25rem 0 1.25rem 0;
  background: #1e1e1e;
}
nav ul {
  display: flex;
  justify-content: flex-start;
}
nav ul li {
  font-size: 0.6875rem;
  font-weight: 700;
  letter-spacing: 0.1875rem;
  line-height: 1.375rem;
  text-transform: uppercase;
  margin: 0 1.5rem 0 0;
}
nav ul li:last-child {
  margin: 0;
}

nav .grid > [class*=column-] {
  padding: 0.25rem 1rem;
}

#logo {
  color: #fff;
  font-weight: 700;
  font-size: 0.875rem;
  letter-spacing: 0.125rem;
  text-transform: uppercase;
  margin: 0;
}

.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 68rem;
  width: 100%;
}

header {
  margin-top: 50px;
  background: linear-gradient(0deg, #fff 0%, #fff 13%, #1e1e1e 13%, #1e1e1e 50%);
}
header section {
  padding: 0;
}

.grid > [class*=column-] {
  padding: 1rem;
}
.grid#blog {
  padding: 2rem 0 4rem;
}

img {
  display: block;
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
}

.main-img,
#about img {
  height: 25vh;
}

#about.grid > [class*=column-]:first-child {
  order: 2;
}

#about.grid > [class*=column-]:last-child {
  order: 1;
}

.image-holder {
  position: relative;
}
.image-holder .image-block {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;

}

.btn {
  position: relative;
  display: inline-block;
  color: #282828;
  border: none;
  border-radius: 0;
  outline: 0;
  padding: 1rem 1.5rem;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  cursor: pointer;
  transform: translate(0);
  letter-spacing: 0.1875rem;
}
.btn.fill {
  background: #d5cdcd;
}
.btn.outline {
  background: transparent;
  border: 0.0625rem solid #d5cdcd;
}
.btn.outline::before {
  background: #d5cdcd;
}
.btn:hover {
  color: #282828;
}
.btn:hover::before {
  transition: transform 0.65s cubic-bezier(0.165, 0.84, 0.44, 1);
  transform: scaleX(1);
  transform-origin: 0%;
}
.btn::before {
  position: absolute;
  content: "";
  transition: transform 0.65s cubic-bezier(0.165, 0.84, 0.44, 1);
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fff;
  transform: scaleX(0);
  transform-origin: 100%;
}

.info {
  margin: 1rem 0;
}

.about-info {
  padding: 0;
}

.category {
  display: inline-block;
  position: relative;
  margin: 1.125rem 0 1.25rem;
  font-size: 0.875rem;
  font-weight: 700;
  letter-spacing: 0.1875rem;
  color: #282828;
  text-transform: uppercase;
}

.text-center {
  text-align: center;
}

figure {
  position: relative;
  display: block;
  margin: 0;
}
figure > img {
  height: 20rem;
}

a figcaption > * {
  transition: color 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}

a:hover figcaption h3 {
  color: #d07a6a;
}

section {
  padding: 4rem 0;
}


@media (min-width: 48rem) {
  nav {
    padding: 2rem 0;
  }
  nav ul {
    justify-content: flex-end;
  }
}
@media (min-width: 62rem) {
  body {
    font-size: 1.125rem;
  }

  h1 {
    font-size: 3.25rem;
    width: 34rem;
    margin: 0 0 1.5rem;
  }

  h2 {
    font-size: 2.25rem;
  }

  h3 {
    font-size: 1.8rem;
  }

  p.lead {
    font-size: 1.25rem;
    margin: 0 0 2.5rem;
  }

  .main-img {
    width: 100%;
    height: 80vh;
  }

  #about img {
    height: 100%;
  }

  #about.grid > [class*=column-]:first-child {
    order: 1;
  }

  #about.grid > [class*=column-]:last-child {
    order: 2;
  }

  .about-info {
    padding: 1rem;
  }
}
[data-aos=reveal-bottom] {
  transform: scaleY(1);
  transform-origin: 0% 100%;
  transition-property: transform;
  transition-delay: 0.5s;
}
[data-aos=reveal-bottom].aos-animate {
  transform: scaleY(0);
}

.new-tag {
  background-color: #ff0000; /* สีพื้นหลังของป้ายแปะ */
  color: #fff; /* สีข้อความของป้ายแปะ */
  padding: 3px 8px; /* ขนาดการเข้ารหัสของป้ายแปะ */
  border-radius: 5px; /* ระยะมนของมุมของป้ายแปะ */
  margin-left: 1px; /* ระยะห่างด้านซ้ายของป้ายแปะจากชื่อ */
  font-size: 15px; /* ขนาดตัวอักษรของป้ายแปะ */
}



.contact {
    overflow: hidden; /* ทำให้คอลัมมีความสูงตามข้อความและเนื้อหา */
    background-color: #2E2E2E; /* สีเทาเข้มของพื้นหลัง */
    color: #ECECEC; /* สีของตัวอักษรเป็นสีขาว */
    padding: 20px; /* เพิ่มการเสริมกล่อง */
}

.left-column {
    width: 50%; /* คอลัมซ้ายครอบคลุม 50% ของพื้นที่ */
    float: left; /* จัดวางไปทางซ้าย */
}
.left-column h3 {
    color: #ECECEC; /* สีของตัวอักษรเป็นสีขาว */
}


.right-column {
    width: 50%; /* คอลัมขวาครอบคลุม 50% ของพื้นที่ */
    float: right; /* จัดวางไปทางขวา */
}
.right-column h3 {
    color: #ECECEC; /* สีของตัวอักษรเป็นสีขาว */
}

    /* กำหนดสีของปุ่ม */
.sub {
    background-color: #ccc; /* สีเทา */
    color: #000; /* สีดำ */
    border: 1px solid #ccc; /* เส้นขอบสีเทา */
    padding: 5px 15px; /* ขนาดการเพิ่มขอบ */
    cursor: pointer; /* เปลี่ยนเป็นเคอร์เซอร์ */
    font-weight: bold;
    font-size: 16px;
}

/* การเปลี่ยนสีเมื่อเม้าส์ชี้ */
.sub:hover {
    background-color: #FFFFFF; /* เพิ่มสีเทาอ่อน */
}


  </style>
</head>
<body>

<header>
  <div class="container">
    <section class="grid intro">
      <div class="column-xs-12 column-md-4">
        <div class="info">
          <h1>พาทัวร์ นัวอีสาน</h1>
          <p class="lead">&nbsp;&nbsp;&nbsp; เว็บไซต์ประชาสัมพันธ์แหล่งท่องเที่ยวทางธรรมชาติที่มีเอกลักษณ์และสำคัญในจังหวัดอุดรธานีจังหวัด
หนองคาย และจังหวัดบึงกาฬ ในรูปแบบภาพพาโนรามา</p>
&nbsp;&nbsp;&nbsp;<a class="btn fill" href="{{ route('travel') }}">เริ่มท่องเที่ยว</a>
        </div>
      </div>
      <div class="column-xs-12 column-md-8">
        <div class="image-holder">
          <div class="image-block" data-aos="reveal-bottom"></div>
          <img class="main-img" src="https://ik.imagekit.io/tvlk/blog/2019/01/%E0%B8%A0%E0%B8%B9%E0%B8%9C%E0%B8%B2%E0%B8%94%E0%B8%B1%E0%B8%81-800x534.jpg?tr=dpr-2,w-675">
        </div>
      </div>
    </section>
  </div>
</header>

<main>
  <div class="container">
    
  <section id="about" class="grid">
  <div class="column-xs-12 column-md-6">
    <div class="image-holder">
      <div class="image-block" data-aos="reveal-bottom"></div>
      <img :src="latestNews.imageUrl" alt="Image">
    </div>
  </div>
  <div class="column-xs-12 column-md-6">
  <span class="new-tag">ข่าวใหม่</span>
  <h3>@{{ latestNews.title }}</h3>
    <p>@{{ latestNews.subtitle }}</p>
    <p>&nbsp;&nbsp;&nbsp;@{{ latestNews.content }}</p><br>
    <p>จังหวัด: @{{ latestNews.province }}</p>
  </div>
</section>

    <section id="blog" class="grid">
      <div class="column-xs-12 text-center">
        <h2>แหล่งท่องเที่ยวแนะนำ</h2>
      </div>


        <!-- แสดงข้อมูลแหล่งท่องเที่ยวของจังหวัดหนองคาย -->
        <div class="column-xs-12 column-sm-4">
            <a href="{{ route('detail', ['id' => $nongkhaiTravel->id]) }}">
                <figure>
                    @foreach (explode(',', $nongkhaiTravel->image) as $index => $imagePath)
                        @if ($index === 0)
                            <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                        @endif
                    @endforeach
                    <figcaption>
                        <h4 class="category">{{ $nongkhaiTravel->province_t }}</h4>
                        <h3>{{ $nongkhaiTravel->name_t }}</h3>
                    </figcaption>
                </figure>
            </a>
        </div>

        <!-- แสดงข้อมูลแหล่งท่องเที่ยวของจังหวัดอุดรธานี -->
        <div class="column-xs-12 column-sm-4">
            <a href="{{ route('detail', ['id' => $udonThaniTravel->id]) }}">
                <figure>
                    @foreach (explode(',', $udonThaniTravel->image) as $index => $imagePath)
                        @if ($index === 0)
                            <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                        @endif
                    @endforeach
                    <figcaption>
                        <h4 class="category">{{ $udonThaniTravel->province_t }}</h4>
                        <h3>{{ $udonThaniTravel->name_t }}</h3>
                    </figcaption>
                </figure>
            </a>
        </div>

        <!-- แสดงข้อมูลแหล่งท่องเที่ยวของจังหวัดบึงกาฬ -->
        <div class="column-xs-12 column-sm-4">
            <a href="{{ route('detail', ['id' => $buengKanTravel->id]) }}">
                <figure>
                    @foreach (explode(',', $buengKanTravel->image) as $index => $imagePath)
                        @if ($index === 0)
                            <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                        @endif
                    @endforeach
                    <figcaption>
                        <h4 class="category">{{ $buengKanTravel->province_t }}</h4>
                        <h3>{{ $buengKanTravel->name_t }}</h3>
                    </figcaption>
                </figure>
            </a>
        </div>

      <!--
      <div class="column-xs-12 text-center">
        <a class="btn outline" href="#">Read more</a>
      </div>
-->

    </section>

  </div>
</main>


<div class="contact">
<div class="container">
    <div class="left-column">
        <!-- คอลัมที่ 1 -->
        <h3>ข้อมูลติดต่อ</h3>
        <p style="margin: 0;">เบอร์โทรศัพท์: 092-313-8819</p>
        <p style="margin: 0;">อีเมล: nawasin@kkumail.com</p>
    </div>
    <div class="right-column">
    <!-- คอลัมที่ 2 -->
    <h3>แนะนำ</h3>
    <form id="suggestionForm" action="/submit-suggestion" method="post">
    @csrf <!-- ใน Laravel ให้ใส่ csrf token เพื่อความปลอดภัย -->
    <label for="suggestion">ข้อเสนอแนะ:</label><br>
    <textarea id="suggestion" name="suggestion" rows="3.5" cols="40"></textarea><br>
    <input class="sub" type="submit" value="ส่ง">
</form>
</div>
</div>
</div>


<script>
    AOS.init({
  duration: 800,
  once: true
});
</script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

<script>
// สร้าง Vue instance
var app = new Vue({
  el: '#about',
  data: {
    newsDataArray: [], // กำหนดให้ newsDataArray เป็นอาเรย์ว่างเพื่อรอรับข้อมูลที่มาจาก localStorage
    latestNews: {} // กำหนดให้ latestNews เป็นอ็อบเจ็กต์เพื่อเก็บข่าวล่าสุด
  },
  mounted() {
    // ดึงข้อมูลข่าวจาก localStorage เมื่อ Vue instance ถูกโหลดเสร็จสมบูรณ์
    this.newsDataArray = JSON.parse(localStorage.getItem('newsDataArray')) || [];
    
    // กำหนดข่าวล่าสุดโดยใช้ข่าวที่มี index ล่าสุดในอาเรย์
    if (this.newsDataArray.length > 0) {
      this.latestNews = this.newsDataArray[this.newsDataArray.length - 1];
    }
  }
});
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var form = document.querySelector('form');
    form.addEventListener('submit', function (event) {
        event.preventDefault(); // ป้องกันการส่งแบบฟอร์ม

        var suggestion = document.getElementById('suggestion').value; // รับค่าข้อเสนอแนะจากฟอร์ม
        saveSuggestion(suggestion); // เรียกใช้ฟังก์ชันเพื่อเก็บข้อมูลใน localStorage
    });

    function saveSuggestion(suggestion) {
        var suggestions = JSON.parse(localStorage.getItem('suggestions')) || []; // รับข้อมูลที่มีอยู่ใน localStorage หากไม่มีจะสร้าง array ใหม่
        suggestions.push(suggestion); // เพิ่มข้อเสนอแนะลงใน array
        localStorage.setItem('suggestions', JSON.stringify(suggestions)); // บันทึกข้อมูลทั้งหมดกลับไปยัง localStorage
        alert('ข้อเสนอแนะของคุณถูกบันทึกเรียบร้อยแล้ว!');
            // รีโหลดหน้าเว็บ
    window.location.reload()
    }
});

</script>

</body>
</html>