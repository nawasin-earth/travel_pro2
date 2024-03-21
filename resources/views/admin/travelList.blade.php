<!DOCTYPE html>
<html lang="en">
<head>@extends('admin.sidebar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Document</title>

    <style>

@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700');
@import url('https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');

*{
  box-sizing: border-box;
}



.cards {
    margin-top: 60px;
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.card__clock {
    width: 25px;
  vertical-align: middle;
    fill: #AD7D52;
}
.card__time {
    font-size: 15px;
    color: #AD7D52;
    vertical-align: middle;
    margin-left: 5px;
}

.card__clock-info {
    float: right;
}

.card__img {
  visibility: visible;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 235px;
  border-top-left-radius: 12px;
border-top-right-radius: 12px;
  
}

.card__info-hover {
    position: absolute;
    padding: 16px;
  width: 100%;
  opacity: 0;
  top: 0;
}

.card__img--hover {
  transition: 0.2s all ease-out;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
  position: absolute;
    height: 235px;
  border-top-left-radius: 12px;
border-top-right-radius: 12px;
top: 0;
  
}
.card {
    margin-bottom: 25px; /* Add space between rows */
    transition: all .4s cubic-bezier(0.175, 0.885, 0, 1);
    background-color: #fff;
    width: calc(33.3% - 25px); /* Adjust the width to fit three cards in a row with spacing */
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0px 13px 10px -7px rgba(0, 0, 0, 0.1);
}
.card:hover {
  box-shadow: 0px 30px 18px -8px rgba(0, 0, 0,0.1);
    transform: scale(1.10, 1.10);
}

.card__info {
z-index: 2;
  background-color: #fff;
  border-bottom-left-radius: 12px;
border-bottom-right-radius: 12px;
   padding: 16px 24px 24px 24px;
}

.card__category {
    font-family: 'Raleway', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
    letter-spacing: 2px;
    font-weight: 500;
  color: #868686;
}

.card__title {
    margin-top: 5px;
    margin-bottom: 10px;
    font-family: 'Roboto Slab', serif;
}

.card__by {
    font-size: 15px;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
}

.card__author {
    font-weight: 600;
    text-decoration: none;
    color: #AD7D52;
}

.card:hover .card__img--hover {
    height: 100%;
    opacity: 0.3;
}

.card:hover .card__info {
    background-color: transparent;
    position: relative;
}

.card:hover .card__info-hover {
    opacity: 1;
}

@media only screen and (max-width: 768px) {
    .cards {
        flex-wrap: wrap;
    }

    .card {
        width: 80%;
        margin-right: 0;
    }
}


.hidden-card {
    display: none;
}


* {

    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: sans-serif;
}

#filterButtons {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #333; /* Change the background color as needed */
    padding: 10px 0; /* Adjust the padding as needed */
    text-align: center;
    z-index: 2; /* Ensure the filter buttons appear above the navigation */
}

#filterButtons button {
    color: #fff; /* Change the text color as needed */
    background-color: #555; /* Change the button background color as needed */
    border: none;
    padding: 8px 12px; /* Adjust the button padding as needed */
    margin: 0 5px; /* Adjust the button margin as needed */
    cursor: pointer;
}

#filterButtons button:hover {
    background-color: #777; /* Change the button background color on hover as needed */
}





        .search-box {
  font-size: 15px;
  border: solid 0.2em #000000;
  display: inline-block;
  position: relative;
  border-radius: 2.0em;
}
.search-box input[type=text] {
  font-family: inherit;
  font-weight: bold;
  width: 2.5em;
  height: 2.5em;
  padding: 0.3em 0.4em 0.3em 2.1em;
  border: none;
  box-sizing: border-box;
  border-radius: 2.5em;
  transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55) 150ms;
}
.search-box input[type=text]:focus {
  outline: none;
}
.search-box input[type=text]:focus, .search-box input[type=text]:not(:placeholder-shown) {
  width: 18em;
  transition: width 800ms cubic-bezier(0.68, -0.55, 0.27, 1.55);
}
.search-box input[type=text]:focus + button[type=reset], .search-box input[type=text]:not(:placeholder-shown) + button[type=reset] {
  transform: rotate(-45deg) translateY(0);
  transition: transform 150ms ease-out 800ms;
}
.search-box input[type=text]:focus + button[type=reset]:after, .search-box input[type=text]:not(:placeholder-shown) + button[type=reset]:after {
  opacity: 1;
  transition: top 150ms ease-out 950ms, right 150ms ease-out 950ms, opacity 150ms ease 950ms;
}
.search-box button[type=reset] {
  background-color: transparent;
  width: 1.4em;
  height: 1.4em;
  border: 0;
  padding: 0;
  outline: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 0.55em;
  right: 0.55em;
  transform: rotate(-45deg) translateY(2.2em);
  transition: transform 150ms ease-out 150ms;
}
.search-box button[type=reset]:before, .search-box button[type=reset]:after {
  content: "";
  background-color: #000000;
  width: 0.3em;
  height: 1.4em;
  position: absolute;
}
.search-box button[type=reset]:after {
  transform: rotate(90deg);
  opacity: 0;
  transition: transform 150ms ease-out, opacity 150ms ease-out;
}

.card__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}



.card__edit-delete-icons {
    display: flex;
    align-items: center;
    justify-content: flex-end; /* ย้ายไปทางขวา */
}

.card__edit-delete-icons a {
    margin-left: 20px; /* ใช้ margin-left แทน margin-right เพื่อเว้นระยะห่างไว้ด้านซ้าย */
}

.edit-icon, .delete-icon {
    color: #333;
    font-size: 20px; /* เพิ่มขนาด */
    transition: color 0.3s ease;
}

.edit-icon:hover, .delete-icon:hover {
    color: #FF0000; /* เปลี่ยนสีไอคอนเมื่อโฮเวอร์ */
}


.select-dropdown {
    position: relative;
    background-color: #e6e6e6;
    border-radius: 4px;
    display: inline-block; /* เพิ่มส่วนนี้เพื่อให้เหมือนกับการใช้งานที่แตกต่างกัน */
}
.select-dropdown select {
    font-size: 1rem;
    font-weight: normal;
    max-width: 100%;
    padding: 8px 24px 8px 10px;
    border: none;
    background-color: transparent;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
.select-dropdown select:active,
.select-dropdown select:focus {
    outline: none;
    box-shadow: none;
}
.select-dropdown:after {
    content: "";
    position: absolute;
    top: 50%;
    right: 8px;
    width: 0;
    height: 0;
    margin-top: -2px;
    border-top: 5px solid #aaa;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}

.nav {
    display: flex;
    align-items: center;
    margin-top: 100px;
}

.select-dropdown {
    margin-right: auto; /* ให้ select-dropdown ไปอยู่ด้านซ้ายสุด */
    margin-left: 200px; /* ระยะห่างระหว่าง select-dropdown กับ right-buttons */
}

.right-buttons {
    margin-left: auto; /* ให้ right-buttons ไปอยู่ด้านขวาสุด */
    margin-right: 200px;
}

    </style>

</head>

<body>

<ul class="nav">
<div class="select-dropdown">
    <select onchange="filterByProvince(this.value)">
        <option value="All">ทั้งหมด</option>
        @foreach($uniqueProvinces as $province)
            <option value="{{ $province }}">{{ $province }}</option>
        @endforeach
    </select>
</div>

        <div class="right-buttons">
            <form class="search-box" onsubmit="searchByName(); return false;">
                <input id="searchInput" type="text" placeholder="     ค้นหาตามชื่อ" />
                <button type="reset"></button>
            </form>
        </div>
    </ul>


    <section class="cards">
    @foreach($data as $item)
        <article class="card card--1" data-province="{{ $item->province_t }}">
            <div class="card__info-hover">
                <div class="card__clock-info">
                    <svg class="card__clock" viewBox="0 0 24 24">
                        <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                    </svg><span class="card__time">{{ $item->time }}</span>
                </div>
            </div>
            @foreach (explode(',', $item->image) as $index => $imagePath)
                @if ($index === 0)
                    <div class="card__img" style="background-image: url('{{ asset('images/'.$imagePath) }}'); width: 100%; height: 235px;"></div>
                @endif
            @endforeach
            <a href="{{ route('admin.detail', ['id' => $item->id]) }}" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <div class="card__header">
                    <span class="card__category">{{ $item->province_t }}</span>
                </div>
                <h3 class="card__title">{{ $item->name_t }}</h3>
                <span class="card__by"> {{ $item->description_t }}</span>

                <div class="card__edit-delete-icons">
    <a href="{{ route('admin.edit', ['id' => $item->id]) }}"><i class="fas fa-edit edit-icon"></i></a>
    
    <form id="delete-form-{{ $item->id }}" action="{{ route('admin.delete', ['id' => $item->id]) }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
<a href="#" onclick="confirmDelete(event, '{{ $item->id }}')">
    <i class="fas fa-trash-alt delete-icon"></i>
</a>

</div>

            
            </div>
        </article>
    @endforeach
</section><br><br>




<script>
    function confirmDelete(event, itemId) {
        event.preventDefault();
        if (confirm('คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลนี้? \n แหล่งท่องเที่ยว ID: {{ $item->id }} {{ $item->name_t }}')) {
            document.getElementById('delete-form-' + itemId).submit();
        }
    }
</script>

    <script>
    function filterByProvince(province) {
      const cards = document.querySelectorAll('.card');

      cards.forEach(card => {
        const cardProvince = card.getAttribute('data-province');
        if (province === 'All' || province === cardProvince) {
          card.classList.remove('hidden-card');
          card.classList.add('visible-card');
        } else {
          card.classList.remove('visible-card');
          card.classList.add('hidden-card');
        }
      });
    }

    function searchByName() {
      const searchValue = document.getElementById("searchInput").value.toLowerCase();
      const cards = document.querySelectorAll('.card');

      cards.forEach(card => {
        const cardName = card.querySelector('.card__title').textContent.toLowerCase();
        if (cardName.includes(searchValue)) {
          card.classList.remove('hidden-card');
          card.classList.add('visible-card');
        } else {
          card.classList.remove('visible-card');
          card.classList.add('hidden-card');
        }
      });
    }
  </script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>