<!DOCTYPE html>
<html lang="en">
<head>@extends('layouts.app')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>
    <!-- Include your CSS stylesheets here -->

    <link rel="stylesheet" href="{{ asset('path/to/your/styles.css') }}">

    <style>
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


.card__like {
    width: 30px;
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
    font-size: 12px;
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

.card__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card__like {
    cursor: pointer; /* เปลี่ยน cursor เมื่อนำเมาส์ไปชี้ */
}



    </style>
</head>
<body><br>

<section class="cards">
    @foreach($items as $item)
    <article class="card card--1" data-item-id="{{ $item->id }}">
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
            <a href="{{ route('detail', ['id' => $item->id]) }}" class="card_link">
                <div class="card__img--hover"></div>
            </a>
            <div class="card__info">
                <div class="card__header">
                    <span class="card__category">{{ $item->province_t }}</span>
                    <svg class="card__like" viewBox="0 0 24 24" data-item-id="{{ $item->id }}">
    <path class="heart-path" fill="#FF0000" d="M12,21.4L10.6,20C5.4,15.4,2,12.3,2,8.5C2,5.4,4.4,3,7.5,3c1.7,0,3.4,0.8,4.5,2.1C13.1,3.8,14.8,3,16.5,3C19.6,3,22,5.4,22,8.5c0,3.8-3.4,6.9-8.6,11.5L12,21.4z" />
</svg>
                </div>
                <h3 class="card__title">{{ $item->name_t }}</h3>
                <span class="card__by"> {{ $item->address }}</span>
            </div>
        </article>
    @endforeach
</section>


 


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {
    // Get the authenticated user's ID
    var userId = "{{ Auth::id() }}";

    // ตรวจสอบสถานะบันทึกไว้ใน Local Storage
    var likedItems = getLikedItemsFromLocalStorage(userId);

    // Initial display: show liked items
    showLikedItems();

    // Button click event to toggle display
    $("#toggleButton").on("click", function () {
        if (favoritesContainer.is(":visible")) {
            // If currently displaying liked items, switch to non-liked items
            showNonLikedItems();
        } else {
            // If currently displaying non-liked items, switch to liked items
            showLikedItems();
        }
    });

    // Click event for the heart icon
    $(".card__like").click(function () {
        var itemId = $(this).data("item-id");

        // Check if the item is liked
        if (likedItems.includes(itemId)) {
            // If liked, remove it from likedItems
            removeFromLocalStorage(itemId);

            // Change the heart icon color to gray
            $(this).find(".heart-path").attr("fill", "#D3D3D3");
        } else {
            // If not liked, add it to likedItems
            addToLocalStorage(itemId);

            // Change the heart icon color to red
            $(this).find(".heart-path").attr("fill", "#FF0000");
        }
    });

    // Function to show liked items
    function showLikedItems() {
        // Hide all cards
        $(".card").hide();

        // Loop through all cards
        $(".card").each(function () {
            var itemId = $(this).data("item-id");

            // Check if the item is liked
            if (likedItems.includes(itemId)) {
                // Show the liked card
                $(this).show();
            }
        });
    }

    // Function to show non-liked items
    function showNonLikedItems() {
        favoritesContainer.hide();

        // Clone all cards back to the original section
        $(".card").each(function () {
            var originalCard = $(this).clone();
            $(".cards").append(originalCard);
        });
    }

    // Function to add an item to Local Storage
    function addToLocalStorage(itemId) {
        likedItems.push(itemId);
        localStorage.setItem('likedItems', JSON.stringify({ [userId]: likedItems }));
    }

// Function to remove an item from Local Storage
function removeFromLocalStorage(itemId) {
    likedItems = likedItems.filter(function (id) {
        return id !== itemId;
    });
    localStorage.setItem('likedItems', JSON.stringify({ [userId]: likedItems }));

    // Reload the page after removing the item
    location.reload();
}

    // Function to get liked items from Local Storage
    function getLikedItemsFromLocalStorage(userId) {
        var storedData = JSON.parse(localStorage.getItem('likedItems')) || {};
        return storedData[userId] || [];
    }
});

</script>


    <!-- Include your JavaScript files here -->

</body>
</html>
