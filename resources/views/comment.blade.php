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

    <input type="hidden" class="travel-id" value="{{ $item->id }}">
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

<div class="popup-overlay" id="popupOverlay">
  <div class="popup-content">
    <div class="stars" id="popupStars">
      <input type="radio" id="popupStar1" name="popupRating" value="1" />
      <input type="radio" id="popupStar2" name="popupRating" value="2" />
      <input type="radio" id="popupStar3" name="popupRating" value="3" />
      <input type="radio" id="popupStar4" name="popupRating" value="4" />
      <input type="radio" id="popupStar5" name="popupRating" value="5" />
      <label for="popupStar1" aria-label="1 star">&#9733;</label>
      <label for="popupStar2">&#9733;</label>
      <label for="popupStar3">&#9733;</label>
      <label for="popupStar4">&#9733;</label>
      <label for="popupStar5">&#9733;</label>
    </div>
    <div class="popup-buttons">
      <button class="cancel-btn" onclick="closePopup()">ยกเลิก</button>
      <button class="confirm-btn" onclick="confirmRating()">ยืนยัน</button>
    </div>
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
                <input value="{{ auth()->user()->name }}" class="user" readonly>
                <div class="commentinput">
                &nbsp;&nbsp;&nbsp;<input type="text" placeholder="ป้อนความคิดเห็น" class="usercomment">
                    <div class="buttons">
                    &nbsp;<button type="submit" disabled id="publish">Publish</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments"></div>
    </div><br><br>



    <script>
        const USERID = {
            name: null,
            identity: null,
            message: null,
            date: null
        };

        const userComment = document.querySelector(".usercomment");
        const publishBtn = document.querySelector("#publish");
        const comments = document.querySelector(".comments");
        const userName = document.querySelector(".user");

        userComment.addEventListener("input", () => {
            if (!userComment.value) {
                publishBtn.setAttribute("disabled", "disabled");
                publishBtn.classList.remove("abled");
            } else {
                publishBtn.removeAttribute("disabled");
                publishBtn.classList.add("abled");
            }
        });

        function addPost() {
    if (!userComment.value) {
        // Display an alert or handle the empty comment case
        alert('Please enter a comment before publishing.');
        return;
    }

    USERID.name = userName.value;
    USERID.identity = USERID.name === "Anonymous" ? false : true;

    USERID.message = userComment.value;
    USERID.date = new Date().toLocaleString();

    try {
        let commentId = Date.now(); // Unique ID for each comment
        let currentTravelId = {{ $item->id ?? null }};
        let commentData = {
            id: commentId,
            userId: "{{ auth()->user()->id }}", // Add the user id to the comment data
            travel_id: currentTravelId, // Add the travel_id to the comment data
            name: USERID.name,

            message: USERID.message,
            date: USERID.date
        };

        // Save the comment in localStorage
        let storedComments = JSON.parse(localStorage.getItem('comments')) || [];
        storedComments.push(commentData);
        localStorage.setItem('comments', JSON.stringify(storedComments));

        // Display the comment immediately
        displayComment(commentData);

        userComment.value = "";
        publishBtn.classList.remove("abled");

        let commentsNum = document.querySelectorAll(".parents").length;
        document.getElementById("comment").textContent = commentsNum;
    } catch (error) {
        console.error('Error adding post:', error);
        // Handle the error (e.g., display an error message to the user)
    }
}

function deleteComment(commentId) {
    if (confirm('Are you sure you want to delete this comment?')) {
        try {
            let storedComments = JSON.parse(localStorage.getItem('comments')) || [];
            let commentToDelete = storedComments.find(comment => comment.id === commentId);

            // Check if the user attempting to delete is the same as the user who added the comment
            if (commentToDelete && commentToDelete.userId === "{{ auth()->user()->id }}") {
                let commentElement = document.getElementById(commentId);
                if (commentElement) {
                    commentElement.remove();
                    storedComments = storedComments.filter(comment => comment.id !== commentId);
                    localStorage.setItem('comments', JSON.stringify(storedComments));

                    let commentsNum = document.querySelectorAll(".parents").length;
                    document.getElementById("comment").textContent = commentsNum;
                }
            }
        } catch (error) {
            console.error('Error deleting comment:', error);
            // Handle the error (e.g., display an error message to the user)
        }
    }
}

function displayComment(comment) {
    let deleteIcon = "";
    if (comment.userId === "{{ auth()->user()->id }}") {
        // Include delete icon only for comments created by the currently logged-in user
        deleteIcon = `<span class="delete-icon" onclick="deleteComment(${comment.id})">DELETE</span>`;
    }

    // Add style attribute to set the text color
    let textColor = comment.userId === "{{ auth()->user()->id }}" ? "black" : "black";
    let lines = [];
    for (let i = 0; i < comment.message.length; i += 70) {
        lines.push(comment.message.substring(i, i + 70));
    }

    // Join the lines with line breaks
    let formattedMessage = lines.join("<br>");

    let published = `
        <div id="${comment.id}" class="parents">
            <div>
                <h1 style="color: ${textColor}; margin: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${comment.name}</h1>
                <p style="margin: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${formattedMessage}</p>
                <span class="date" style="margin: 0;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${comment.date}</span>
                <h1 style="margin: 0;">&nbsp;${deleteIcon}</h1>
            </div>
        </div>`;
    comments.innerHTML += published;
}



// Load comments from localStorage on page load
window.addEventListener('load', () => {
    let storedComments = JSON.parse(localStorage.getItem('comments')) || [];
    
    // Filter comments based on the travel_id of the current travel page
    let currentTravelId = {{ $item->id ?? null }};
    let commentsToDisplay = storedComments.filter(comment => comment.travel_id === currentTravelId);

    commentsToDisplay.forEach(comment => displayComment(comment));
    updateCommentCount();
});

function updateCommentCount() {
            let commentsNum = document.querySelectorAll(".parents").length;
            document.getElementById("comment").textContent = commentsNum;
        }

        publishBtn.addEventListener("click", addPost);
    </script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var stars = document.querySelectorAll('.stars input');
  var popupStars = document.querySelectorAll('.popup-overlay .stars input');
  var popupOverlay = document.getElementById('popupOverlay');

  // Load the saved rating from localStorage
  function loadRating(userId, travelId) {
    if (travelId === null || userId === null) {
        console.error('TravelId or userId is null or undefined.');
        return null;
    }

    // Load the existing ratings for this user
    var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};

    // Load the existing ratings for this travelId
    var travelRatings = userRatings[userId] || {};

    // Load the existing rating for this user and travelId
    var savedRating = travelRatings[travelId] || null;

    return savedRating;
}

function updateTravelRating(userId) {
    var travelIdElement = document.querySelector('.travel-id');
    var travelId = travelIdElement ? travelIdElement.value : null;

    var savedRating = loadRating(userId, travelId);
    if (savedRating !== null) {
      updateStars(stars, savedRating);
    }else {
      // If the rating is null, it means the travel destination has been deleted.
      // Reset the rating to zero.
      updateStars(stars, 0);
    }
    updateUserCount(travelId);
    updateAverageRating(travelId); // Add this line to update the average rating
  }

function updateAverageRating(travelId) {
    try {
      var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
      var totalRating = 0;
      var numberOfRatings = 0;

      // Iterate through ratings for the current travelId
      for (var userId in userRatings) {
        if (userRatings.hasOwnProperty(userId) && userRatings[userId][travelId] !== undefined) {
          totalRating += parseFloat(userRatings[userId][travelId]);
          numberOfRatings++;
        }
      }

      // Calculate the average rating for the current travelId
      var averageRating = numberOfRatings > 0 ? totalRating / numberOfRatings : 0;

      // Display the average rating in the specified element
      var averageRatingElement = document.querySelector('.rating-num');
      averageRatingElement.textContent = averageRating.toFixed(2);
    } catch (error) {
      console.error('Error updating average rating:', error);
    }
  }


  function updateUserCount(travelId) {
  try {
    var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};
    var totalUsers = 0;

    // นับจำนวนผู้ให้คะแนนใน travelId นี้
    for (var userId in userRatings) {
      if (userRatings.hasOwnProperty(userId) && userRatings[userId][travelId] !== undefined) {
        totalUsers++;
      }
    }

    // แสดงจำนวนผู้ให้คะแนนใน HTML
    document.getElementById('userCount').textContent = totalUsers;
  } catch (error) {
    console.error('Error updating user count:', error);
  }
}


  // Get the current user ID
  var userId = "{{ auth()->user()->id }}";

  // Update rating for the current travelId on page load
  updateTravelRating(userId);

  function updateStars(starsCollection, rating) {
    starsCollection.forEach(function (star, index) {
      star.checked = index < rating;
    });
  }

  function saveRating(userId, travelId, rating) {
    try {
        if (travelId === null || userId === null) {
            console.error('TravelId or userId is null or undefined.');
            return;
        }

        // Load the existing ratings for this user
        var userRatings = JSON.parse(localStorage.getItem('userRatings')) || {};

        // Load the existing ratings for this travelId
        var travelRatings = userRatings[userId] || {};

        // If there's an existing rating, remove it before saving the new rating
        if (travelRatings.hasOwnProperty(travelId)) {
            console.log('Removing existing rating for Travel ID', travelId);
            delete travelRatings[travelId];
        }

        // Add the new rating
        travelRatings[travelId] = rating;
        userRatings[userId] = travelRatings;

        var ratingData = {
            uId: userId,
            travel_id: travelId,
            rating: rating
        };

        // Now you can send the rating data to the server or perform any additional actions
        console.log('Rating Data:', ratingData);
        console.log('Stored in localStorage with key "userRatings"');

        // Save the updated ratings to localStorage
        localStorage.setItem('userRatings', JSON.stringify(userRatings));
    } catch (error) {
        console.error('Error saving rating:', error);
    }
}


  function setupStarClickEvent(starsCollection, updateFunction) {
    starsCollection.forEach(function (star, index) {
      star.addEventListener('click', function () {
        updateFunction(index + 1);
      });
    });
  }

  setupStarClickEvent(stars, function (rating) {
    updatePopupContent(rating);
    popupOverlay.style.display = 'flex';
  });

  setupStarClickEvent(popupStars, function (rating) {
    updatePopupContent(rating);
  });

  function updatePopupContent(selectedRating) {
    updateStars(popupStars, selectedRating);
  }

  function closePopup() {
    popupOverlay.style.display = 'none';
  }

  function confirmRating() {
    var selectedRating = document.querySelector('.popup-overlay .stars input:checked').value;

    // Get travelId from the current travel item or set to null if not available
    var travelIdElement = document.querySelector('.travel-id');
    var travelId = travelIdElement ? travelIdElement.value : null;

    if (travelId === null) {
      console.error('TravelId is null or undefined.');
      return;
    }

    alert('คุณให้คะแนน: ' + selectedRating + ' สำหรับ travelId: ' + travelId);
    saveRating(userId, travelId, selectedRating);
    closePopup();

      // Reload the page
  location.reload();
  }

  // Attach click event handlers to the buttons
  document.querySelector('.cancel-btn').addEventListener('click', closePopup);
  document.querySelector('.confirm-btn').addEventListener('click', confirmRating);
});

</script>


</body>
</html>