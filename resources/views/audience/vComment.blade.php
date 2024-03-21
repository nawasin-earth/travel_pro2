<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-cZ9Zp+y/He8sd/zXF0mWo1fMbgIsI18AIibkp3GPPGDDUbi/mk3pHg7SfoJGoIlzF47fEy5AfcJggI+LpBtjz+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>UI/UX Comment Section Design </title>


    <style>

.text {
    margin: 10px 0;
    font-family: sans-serif;
    font-size: 0.9em;
}

.commentbox {
    display: flex;
    justify-content: space-around;
    padding: 10px;
}

.commentbox > img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    /* float: left; */
    margin-right: 20px;
    object-fit: cover;
    object-position: center;
}

.content {
    width: 100%;
}

.user {
    border: none;
    outline: none;
    margin: 5px 0;
    color: #808080;
    margin-left: 20px;
    padding: 10px;
}

.commentinput > input {
    border: none;
    padding: 10px;
    padding-left: 0;
    outline: none;
    border-bottom: 2px solid blue;
    margin-bottom: 10px;
    width: 95%;
}

.buttons {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #808080;
}

.buttons > button {
    padding: 5px 10px;
    background: lightgrey;
    color: #808080;
    text-transform: uppercase;
    border: none;
    outline: none;
    border-radius: 3px;
    cursor: pointer;
}

.buttons > button.abled {
    background: blue;
    color: #fff;
}

.policy {
    margin: 20px 0;
    font-size: 0.8em;
    font-family: Arial, sans-serif;
    color: #808080;
}

.policy a {
    text-decoration: none;
    color: blue;
}

.notify {
    margin-right: 10px;
    display: flex;
    align-items: center;
}

.notify > input {
    margin-right: 5px;
    border: 2px solid #808080;
}

.parents {
    font-family: Arial, sans-serif;
    display: flex;
    margin-bottom: 30px;
}

.parents h1 {
    font-size: 1.2em;
}

.parents p {
    margin: 10px 0;
    font-size: 1.1em;
}

.parents > img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 20px;
    object-fit: cover;
    object-position: center;
}

.engagements {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.engagements img {
    width: 20px;

}

.engagements img:nth-child(1) {
    margin-right: 10px;
    width: 25px;
}

.date {
    color: #808080;
    font-size: 0.9em;
}

.parents {
    margin-bottom: 10px; /* Adjust the spacing between comments */
}

.delete-icon {
    cursor: pointer;
    color: black; /* Set the initial color of the delete icon */
    margin-left: 100px; /* Adjust the spacing between the user name and delete icon */
    transition: color 0.3s, background-color 0.3s; /* Add transitions for color and background-color changes */
    padding: 5px; /* Add padding for a better visual appearance */

    /* Set the font size */
    font-size: 12px;
}

.delete-icon:hover {
    color: white; /* Change the color of the delete icon to white on hover */
    background-color: red; /* Change the background color to red on hover */
}




    /* Styles for stars and popup */
    .stars-container {
      display: flex;
      flex-direction: column; /* Align stars in a column */
      align-items: center; /* Center stars horizontally */
    }

    .stars {
      display: flex;
      align-items: center;
    }

    .stars-text {
      margin-bottom: 10px; /* Add margin at the bottom for spacing */
    }

    .stars input {
      position: absolute;
      clip: rect(0, 0, 0, 0);
    }

    .stars label {
      box-sizing: border-box;
      display: inline-block;
      margin-right: 6px;
      height: 30px;
      width: 30px;
      background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='transparent' stroke='slategray' stroke-width='38' d='M259.216 29.942L330.27 173.92l158.89 23.087L374.185 309.08l27.145 158.23-142.114-74.698-142.112 74.698 27.146-158.23L29.274 197.007l158.89-23.088z' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
      font-size: 0;
      cursor: pointer;
    }

    .stars input:nth-child(1):checked ~ label:nth-of-type(-n + 1),
    .stars input:nth-child(2):checked ~ label:nth-of-type(-n + 2),
    .stars input:nth-child(3):checked ~ label:nth-of-type(-n + 3),
    .stars input:nth-child(4):checked ~ label:nth-of-type(-n + 4),
    .stars input:nth-child(5):checked ~ label:nth-of-type(-n + 5) {
      background: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='slategray' stroke='slategray' stroke-width='38' d='M259.216 29.942L330.27 173.92l158.89 23.087L374.185 309.08l27.145 158.23-142.114-74.698-142.112 74.698 27.146-158.23L29.274 197.007l158.89-23.088z' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
    }

    .popup-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    .popup-content {
      background: #fff;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .popup-buttons {
  display: flex;
  justify-content: space-around;
  margin-top: 20px;
}

.popup-buttons button {
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border: none;
  transition: background-color 0.3s ease;
}

.popup-buttons button.cancel-btn {
  background-color: transparent; /* Remove background color */
  color: #333;
}

.popup-buttons button.confirm-btn {
  background-color: transparent; /* Remove background color */
  color: #4caf50;
}

.popup-buttons button:hover {
  background-color: transparent; /* Remove hover background color */
}


    .cancel-btn, .confirm-btn {
      padding: 8px 16px;
      margin: 0 5px;
      cursor: pointer;
    }



.rating {
  text-align: right;
}

.rating-num {
  color: #333333;
  font-size: 50px;
}

.rating-stars {
  font-size: 20px;
  color: #E3E3E3;
  margin-bottom: .5em;
}

.rating-stars .active {
  color: #737373;
}

.rating-users {
  font-size: 16px;
}





    </style>


</head>
<body><br><br>
    <div class="container">

    
    <div class="header-container"><br>

    <div class="stars-container">
  <span class="stars-text">ให้คะแนนแหล่งท่องเที่ยว</span>
  <div class="stars">
    <input type="radio" id="star1" name="rating" value="1" />
    <input type="radio" id="star2" name="rating" value="2" />
    <input type="radio" id="star3" name="rating" value="3" />
    <input type="radio" id="star4" name="rating" value="4" />
    <input type="radio" id="star5" name="rating" value="5" />
    <label for="star1" aria-label="1 star">1 star</label>
    <label for="star2" aria-label="2 stars">2 stars</label>
    <label for="star3" aria-label="3 stars">3 stars</label>
    <label for="star4" aria-label="4 stars">4 stars</label>
    <label for="star5" aria-label="5 stars">5 stars</label>
  </div>
</div>


  <!-- Rating container -->
  <div class="rating">
    <span class="rating-num">0.0</span>
    <div class="rating-stars">
      <span><i class="active icon-star"></i></span>
      <span><i class="active icon-star"></i></span>
      <span><i class="active icon-star"></i></span>
      <span><i class="active icon-star"></i></span>
      <span><i class="active icon-star"></i></span>
    </div>
    <div class="rating-users">
  <i class="icon-user"></i> <span id="userCount">0</span> total
</div>
  </div>
  
</div>


        
<div style="margin-top: -90px;">
    <span id="comment" style="font-size: 45px; margin-left: 25px; color: black;">0</span>&nbsp;&nbsp;
    <span style="font-size: 35px; margin-right: 5px; color: black;">ความคิดเห็น</span>
</div>

        <div class="commentbox">
            <div class="content">
                <input class="user" readonly>
                <div class="commentinput">
                &nbsp;&nbsp;&nbsp;<input type="text" placeholder="ป้อนความคิดเห็น" class="usercomment" onclick="checkLogin()">
                    <div class="buttons">
                    &nbsp;<button type="submit" disabled id="publish">Publish</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments"></div>
    </div><br><br>


<script>
    const comments = document.querySelector(".comments");

    // Load comments from localStorage on page load
    window.addEventListener('load', () => {
        let storedComments = JSON.parse(localStorage.getItem('comments')) || [];
        
        // Filter comments based on the travel_id of the current travel page
        let currentTravelId = {{ $item->id ?? null }};
        let commentsToDisplay = storedComments.filter(comment => comment.travel_id === currentTravelId);

        commentsToDisplay.forEach(comment => displayComment(comment));
        updateCommentCount();
    });

    function displayComment(comment) {
        let published = `
            <div id="${comment.id}" class="parents">
                <div>
                    <h1 style="color: black; margin: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${comment.name}</h1>
                    <p style="margin: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${comment.message}</p>
                    <span class="date" style="margin: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${comment.date}</span>
                </div>
            </div>`;
        comments.innerHTML += published;
    }

    function updateCommentCount() {
        let commentsNum = document.querySelectorAll(".parents").length;
        document.getElementById("comment").textContent = commentsNum;
    }
</script>
<script>
function checkLogin() {
    // ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือไม่
    var isLoggedIn = {{ Auth::check() ? 'true' : 'false' }};
    if (!isLoggedIn) {
        // เรียกใช้ confirm เพื่อแสดงหน้าต่างลอยเตือน
        var agree = confirm('กรุณาเข้าสู่ระบบเพื่อกรอกความคิดเห็น');
        if (agree) {
            // ถ้าผู้ใช้กดตกลง ให้ redirect ไปยังหน้า login
            window.location.href = "{{ route('login') }}";
        } else {
            // ถ้าผู้ใช้กดยกเลิก ไม่ต้องกระทำอะไร
        }
    }else {
        window.location.href = "{{ route('detail', ['id' => $item->id]) }}";
  }
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Get the current travel ID
    var travelId = "{{ $item->id ?? null }}";

    // Update the rating and user count for the current travel ID on page load
    updateRatingAndUserCount(travelId);
});

function updateRatingAndUserCount(travelId) {
    try {
        var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
        var totalRating = 0;
        var numberOfRatings = 0;

        // Iterate through ratings for the current travel ID
        for (var userId in userRatings) {
            if (userRatings.hasOwnProperty(userId) && userRatings[userId][travelId] !== undefined) {
                totalRating += parseFloat(userRatings[userId][travelId]);
                numberOfRatings++;
            }
        }

        // Calculate the average rating for the current travel ID
        var averageRating = numberOfRatings > 0 ? totalRating / numberOfRatings : 0;

        // Display the average rating and user count in the specified elements
        var averageRatingElement = document.querySelector('.rating-num');
        var userCountElement = document.getElementById('userCount');

        averageRatingElement.textContent = averageRating.toFixed(2);
        userCountElement.textContent = numberOfRatings;
    } catch (error) {
        console.error('Error updating rating and user count:', error);
    }
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var starsContainer = document.querySelector('.stars-container');
    
    starsContainer.addEventListener('click', function (event) {
        // Check if the user is logged in
        var isLoggedIn = "{{ Auth::check() }}";
        
        if (!isLoggedIn) {
            // Display a confirmation popup if the user is not logged in
            var agree = confirm('กรุณาเข้าสู่ระบบเพื่อให้คะแนน');
            if (agree) {
                // Redirect the user to the login page if they agree
                window.location.href = "{{ route('login') }}";
            }
        } else {
            // Redirect the user to the detail page if they are logged in
            window.location.href = "{{ route('detail', ['id' => $item->id]) }}";
        }
        
        // Prevent the default action of the click event
        event.preventDefault();
    });
});
</script>

</body>
</html>