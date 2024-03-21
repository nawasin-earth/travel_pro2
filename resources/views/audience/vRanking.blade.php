<!DOCTYPE html>
<html lang="en">
<head>@extends('audience.navbar')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        @import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
@import url('https://fonts.googleapis.com/css?family=Lato:300,400,700,900&subset=latin-ext');

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    padding: 100px 0;
}

img {
    width: 100%;
    vertical-align: middle;
  
}

.blog-item img {
  display: block;
}

.blog-item a {
    display: flex;
    padding: 50px;
    overflow: hidden;
    align-items: center;
    max-width: 1000px;
    margin: auto;
    color: #333;
    font-family: 'Lato', sans-serif;
    font-size: 16px;
    border-radius: 6px;
    margin-bottom: 50px;
    text-decoration: none;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.blog-item a:hover {
    box-shadow: 0 10px 50px 0 rgba(0, 0, 0, 0.2);
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.blog-item .icon {
    width: 35%;
    object-fit: cover;
    margin-right: 50px;
    border-radius: 6px;
    overflow: hidden;
    box-shadow: 0 15px 26px rgba(0, 0, 0, 0.4);
}

.blog-item .content {
    width: 65%;
}

.blog-item .content .title {
    font-size: 21px;
    text-transform: capitalize;
    color: #25aae1;
    font-weight: 600;
    font-family: 'Lato', sans-serif;
}


.blog-item .content .title {
    display: flex;
    align-items: center; /* จัดเรียงองค์ประกอบภายใน .title ให้อยู่ตรงกลางในแนวดิ่ง */
}

.blog-item .content .title .blog-date {
    font-size: 22px;
    color: #333;
    font-family: 'Lato', sans-serif;
    margin-left: auto; /* ย้าย .blog-date ไปชิดขวา */
}

.blog-item .content .title .blog-date:before {
    color: #2bb673;
    font-size: 25px;
    margin-left: 10px; /* เพิ่ม margin-left เพื่อความห่างระหว่างข้อความกับสัญลักษณ์ดาว */
}


.blog-item .content .rounded {
    margin-left: 0;
    margin-top: 10px;
    margin-bottom: 10px;
}


.rounded {
    width: 70px;
    height: 5px;
    border-radius: 6px;
    background-image: linear-gradient(to right, #25aae1, #40e495);
    /* background: #2bb769; */
    margin-left: 0;
    margin-top: 10px;
    margin-bottom: 10px;
}

@media screen and (max-width: 768px){

    .blog-item .content {
        width: 100%;
        margin-top: 35px;
    }

    .blog-item .content .title {
        font-size: 18px;
    }

    .blog-item .icon {
        width: 100%;
    }

    .blog-item .icon img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    .blog-item {
        width: 92%;
        margin: auto;
    }

    .blog-item a {
        display: block;
        padding: 30px;
    }

}




    </style>
</head>
<body>
<br><br><br>
<div id="top-travel-destination">
    @foreach($travels as $index => $travel)
    <div class="blog-item" style="display: none;">
        <a href="{{ route('audience.vDetail', ['id' => $travel->id]) }}">
            <div class="icon">
                @foreach (explode(',', $travel->image) as $index => $imagePath)
                    @if ($index === 0)
                        <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                    @endif
                @endforeach
            </div>
            <div class="content">
                <div class="title">{{ $travel->name_t }}<span class="blog-date rating" data-travel-id="{{ $travel->id }}">{{ $travel->average_rating }}</span></div>
                <div class="rounded"></div>
                <p style="color: black;">จังหวัด: {{ $travel->province_t }}</p>
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $travel->description_t }}</p>
               
            </div>
        </a>
    </div>
    @endforeach
</div>

<div id="second-top-travel-destination">
    @foreach($travels as $index => $travel)
    <div class="blog-item" style="display: none;">
        <a href="{{ route('audience.vDetail', ['id' => $travel->id]) }}">
            <div class="icon">
                @foreach (explode(',', $travel->image) as $index => $imagePath)
                    @if ($index === 0)
                        <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                    @endif
                @endforeach
            </div>
            <div class="content">
                <div class="title">{{ $travel->name_t }}<span class="blog-date rating" data-travel-id="{{ $travel->id }}">{{ $travel->average_rating }}</span></div>
                <div class="rounded"></div>
                <p style="color: black;">จังหวัด: {{ $travel->province_t }}</p>
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $travel->description_t }}</p>
               
            </div>
        </a>
    </div>
    @endforeach
</div>

<div id="third-top-travel-destination">
    @foreach($travels as $index => $travel)
    <div class="blog-item" style="display: none;">
        <a href="{{ route('audience.vDetail', ['id' => $travel->id]) }}">
            <div class="icon">
                @foreach (explode(',', $travel->image) as $index => $imagePath)
                    @if ($index === 0)
                        <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                    @endif
                @endforeach
            </div>
            <div class="content">
                <div class="title">{{ $travel->name_t }}<span class="blog-date rating" data-travel-id="{{ $travel->id }}">{{ $travel->average_rating }}</span></div>
                <div class="rounded"></div>
                <p style="color: black;">จังหวัด: {{ $travel->province_t }}</p>
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $travel->description_t }}</p>
               
            </div>
        </a>
    </div>
    @endforeach
</div>

<div id="fourth-top-travel-destination">
    @foreach($travels as $index => $travel)
    <div class="blog-item" style="display: none;">
        <a href="{{ route('audience.vDetail', ['id' => $travel->id]) }}">
            <div class="icon">
                @foreach (explode(',', $travel->image) as $index => $imagePath)
                    @if ($index === 0)
                        <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                    @endif
                @endforeach
            </div>
            <div class="content">
                <div class="title">{{ $travel->name_t }}<span class="blog-date rating" data-travel-id="{{ $travel->id }}">{{ $travel->average_rating }}</span></div>
                <div class="rounded"></div>
                <p style="color: black;">จังหวัด: {{ $travel->province_t }}</p>
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $travel->description_t }}</p>
               
            </div>
        </a>
    </div>
    @endforeach
</div>

<div id="fifth-top-travel-destination">
    @foreach($travels as $index => $travel)
    <div class="blog-item" style="display: none;">
        <a href="{{ route('audience.vDetail', ['id' => $travel->id]) }}">
            <div class="icon">
                @foreach (explode(',', $travel->image) as $index => $imagePath)
                    @if ($index === 0)
                        <img class="c-article__img" src="{{ asset('images/'.$imagePath) }}" />
                    @endif
                @endforeach
            </div>
            <div class="content">
                <div class="title">{{ $travel->name_t }}<span class="blog-date rating" data-travel-id="{{ $travel->id }}">{{ $travel->average_rating }}</span></div>
                <div class="rounded"></div>
                <p style="color: black;">จังหวัด: {{ $travel->province_t }}</p>
                <p style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $travel->description_t }}</p>
               
            </div>
        </a>
    </div>
    @endforeach
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Load and display ratings for the top travel destination
    loadAndDisplayTopRatings();

    // Load and display ratings for the second top travel destination
    loadAndDisplaySecondTopRatings();

    // Load and display ratings for the third top travel destination
    loadAndDisplayThirdTopRatings();

    // Load and display ratings for the fourth top travel destination
    loadAndDisplayFourthTopRatings();

    // Load and display ratings for the fifth top travel destination
    loadAndDisplayFifthTopRatings();

    // Function to load and display ratings for the top travel destination
    function loadAndDisplayTopRatings() {
        try {
            // Load ratings data from localStorage
            var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
            var highestRating = 0;
            var highestRatedTravelId = null;

            // Loop through each travel destination
            @foreach($travels as $travel)
                var travelId = "{{ $travel->id }}";
                var averageRating = calculateAverageRating(userRatings, travelId);
                
                // Check if the current travel destination has a higher rating than the previous highest
                if (averageRating > highestRating) {
                    highestRating = averageRating;
                    highestRatedTravelId = travelId;
                }
            @endforeach

            // Display the highest-rated travel destination
            if (highestRatedTravelId) {
                var highestRatedElement = document.querySelector('#top-travel-destination .rating[data-travel-id="' + highestRatedTravelId + '"]').closest('.blog-item');
                if (highestRatedElement) {
                    highestRatedElement.style.display = 'block';
                    var averageRating = calculateAverageRating(userRatings, highestRatedTravelId);
                    displayStarRating(highestRatedElement.querySelector('.rating'), averageRating);
                }
            }
        } catch (error) {
            console.error('Error loading and displaying ratings:', error);
        }
    }

    // Function to load and display ratings for the second top travel destination
    function loadAndDisplaySecondTopRatings() {
        try {
            // Load ratings data from localStorage
            var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
            var highestRatings = [];

            // Loop through each travel destination
            @foreach($travels as $travel)
                var travelId = "{{ $travel->id }}";
                var averageRating = calculateAverageRating(userRatings, travelId);
                
                // Store travel id and rating in an array
                highestRatings.push({ id: travelId, rating: averageRating });
            @endforeach

            // Sort travel destinations by rating (descending order)
            highestRatings.sort(function (a, b) {
                return b.rating - a.rating;
            });

            // Get the second highest rated travel destination
            var secondHighestRating = highestRatings[1];

            // Display star ratings for the second highest rated travel destination
            if (secondHighestRating) {
                var secondHighestRatedElement = document.querySelector('#second-top-travel-destination .rating[data-travel-id="' + secondHighestRating.id + '"]').closest('.blog-item');
                if (secondHighestRatedElement) {
                    secondHighestRatedElement.style.display = 'block';
                    var averageRating = calculateAverageRating(userRatings, secondHighestRating.id);
                    displayStarRating(secondHighestRatedElement.querySelector('.rating'), averageRating);
                }
            }
        } catch (error) {
            console.error('Error loading and displaying ratings:', error);
        }
    }

    // Function to load and display ratings for the third top travel destination
    function loadAndDisplayThirdTopRatings() {
        try {
            // Load ratings data from localStorage
            var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
            var highestRatings = [];

            // Loop through each travel destination
            @foreach($travels as $travel)
                var travelId = "{{ $travel->id }}";
                var averageRating = calculateAverageRating(userRatings, travelId);
                
                // Store travel id and rating in an array
                highestRatings.push({ id: travelId, rating: averageRating });
            @endforeach

            // Sort travel destinations by rating (descending order)
            highestRatings.sort(function (a, b) {
                return b.rating - a.rating;
            });

            // Get the third highest rated travel destination
            var thirdHighestRating = highestRatings[2];

            // Display star ratings for the third highest rated travel destination
            if (thirdHighestRating) {
                var thirdHighestRatedElement = document.querySelector('#third-top-travel-destination .rating[data-travel-id="' + thirdHighestRating.id + '"]').closest('.blog-item');
                if (thirdHighestRatedElement) {
                    thirdHighestRatedElement.style.display = 'block';
                    var averageRating = calculateAverageRating(userRatings, thirdHighestRating.id);
                    displayStarRating(thirdHighestRatedElement.querySelector('.rating'), averageRating);
                }
            }
        } catch (error) {
            console.error('Error loading and displaying ratings:', error);
        }
    }

    // Function to load and display ratings for the fourth top travel destination
    function loadAndDisplayFourthTopRatings() {
        try {
            // Load ratings data from localStorage
            var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
            var highestRatings = [];

            // Loop through each travel destination
            @foreach($travels as $travel)
                var travelId = "{{ $travel->id }}";
                var averageRating = calculateAverageRating(userRatings, travelId);
                
                // Store travel id and rating in an array
                highestRatings.push({ id: travelId, rating: averageRating });
            @endforeach

            // Sort travel destinations by rating (descending order)
            highestRatings.sort(function (a, b) {
                return b.rating - a.rating;
            });

            // Get the fourth highest rated travel destination
            var fourthHighestRating = highestRatings[3];

            // Display star ratings for the fourth highest rated travel destination
            if (fourthHighestRating) {
                var fourthHighestRatedElement = document.querySelector('#fourth-top-travel-destination .rating[data-travel-id="' + fourthHighestRating.id + '"]').closest('.blog-item');
                if (fourthHighestRatedElement) {
                    fourthHighestRatedElement.style.display = 'block';
                    var averageRating = calculateAverageRating(userRatings, fourthHighestRating.id);
                    displayStarRating(fourthHighestRatedElement.querySelector('.rating'), averageRating);
                }
            }
        } catch (error) {
            console.error('Error loading and displaying ratings:', error);
        }
    }

    // Function to load and display ratings for the fifth top travel destination
    function loadAndDisplayFifthTopRatings() {
        try {
            // Load ratings data from localStorage
            var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
            var highestRatings = [];

            // Loop through each travel destination
            @foreach($travels as $travel)
                var travelId = "{{ $travel->id }}";
                var averageRating = calculateAverageRating(userRatings, travelId);
                
                // Store travel id and rating in an array
                highestRatings.push({ id: travelId, rating: averageRating });
            @endforeach

            // Sort travel destinations by rating (descending order)
            highestRatings.sort(function (a, b) {
                return b.rating - a.rating;
            });

            // Get the fifth highest rated travel destination
            var fifthHighestRating = highestRatings[4];

            // Display star ratings for the fifth highest rated travel destination
            if (fifthHighestRating) {
                var fifthHighestRatedElement = document.querySelector('#fifth-top-travel-destination .rating[data-travel-id="' + fifthHighestRating.id + '"]').closest('.blog-item');
                if (fifthHighestRatedElement) {
                    fifthHighestRatedElement.style.display = 'block';
                    var averageRating = calculateAverageRating(userRatings, fifthHighestRating.id);
                    displayStarRating(fifthHighestRatedElement.querySelector('.rating'), averageRating);
                }
            }
        } catch (error) {
            console.error('Error loading and displaying ratings:', error);
        }
    }

    // Function to calculate the average rating for a travel destination
    function calculateAverageRating(userRatings, travelId) {
        var totalRating = 0;
        var numberOfRatings = 0;

        // Loop through user ratings and count the total rating and number of ratings for the travel destination
        for (var userId in userRatings) {
            if (userRatings.hasOwnProperty(userId) && userRatings[userId][travelId] !== undefined) {
                totalRating += parseFloat(userRatings[userId][travelId]);
                numberOfRatings++;
            }
        }

        // Calculate the average rating
        var averageRating = numberOfRatings > 0 ? totalRating / numberOfRatings : 0;
        return averageRating;
    }

    // Function to display star ratings
    function displayStarRating(ratingElement, averageRating) {
        var fullStars = Math.floor(averageRating); // Number of full stars
        var halfStars = Math.ceil(averageRating - fullStars); // Number of half stars

        var starsHTML = '';
        for (var i = 1; i <= fullStars; i++) {
            starsHTML += '<i class="fa fa-star"></i>';
        }
        if (halfStars > 0) {
            starsHTML += '<i class="fa fa-star-half-o"></i>'; // Add half star if necessary
        }
        var remainingStars = 5 - fullStars - halfStars; // Number of remaining stars
        for (var j = 1; j <= remainingStars; j++) {
            starsHTML += '<i class="fa fa-star-o"></i>';
        }
        ratingElement.innerHTML = starsHTML;
    }
});

</script>



</body>
</html>