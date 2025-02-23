<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            
        }
        .like-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .like-button,.comment-button {
            background-color:#007bff65;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }
        .like-button.liked {
            background-color: #007bff;
        }
        .like-count {
            font-size: 18px;
            font-weight: bold;
        }
        .comment-section {
            margin-top: 15px;
        }
        .comment-input {
            width: 80%;
            padding: 8px;
            margin-bottom: 10px;
        }
        .comment-list {
            text-align: left;
            padding: 0;
            list-style-type: none;
        }
        .comment-list li {
            background-color:#007bff65;
            color:white;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="menu">
            <ul>
                <li class="profile">
                    <div class="photo">
                        <img src="images/myphoto.jpg" alt="profile">
                    </div>
                    <h2>abdelwahab</h2>
                </li>
                <li class="feature">
                    <a href="#" class="active">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="feature">
                    <a href="#">
                        <i class="fas fa-user-group"></i>
                        <p>My Profile</p>
                    </a>
                </li>
                <li class="feature">
                    <a href="#">
                        <i class="fas fa-table"></i>
                        <p>Create a Post</p>
                    </a>
                </li>
                <li class="feature">
                    <a href="#">
                        <i class="fas fa-chart-pie"></i>
                        <p>Requests</p>
                    </a>
                </li>
                <li class="feature">
                    <a href="#">
                        <i class="fas fa-pen"></i>
                        <p>My Friends</p>
                    </a>
                </li>
                <li class="feature">
                    <a href="#">
                        <i class="fas fa-star"></i>
                        <p>My Posts</p>
                    </a>
                </li>
                <li class="feature">
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        <p>Settings</p>
                    </a>
                </li>
                <li class="logout">
                    <a href="#">
                        <i class="fas fa-sign-out"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="content">
        <div class="header">
            <p>Small Village</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <div class="data">
            <div class="box">
                <h3>Name : Abdelwahab Mohamed</h3><br>
                <h3>Friends : 500</h3><br>
            </div>
            <div class="box">
                <ul>
                    <li class="profile">
                        <div class="photo">
                            <img src="images/myphoto.jpg" alt="profile">
                        </div>
                        <h2>abdelwahab</h2>
                    </li>
                </ul>
                <br>
                <div class="info">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facere incidunt cupiditate et! Veniam, labore architecto fugit saepe ipsa, quidem odio doloremque, velit consequuntur eius recusandae beatae praesentium eveniet laudantium.</h3>
                </div><br>
                <div class="like-container">
                    <button class="like-button" onclick="toggleLike(this)">👍 Like</button>
                    <span class="like-count">0</span>
                    <button class="comment-button" onclick="toggleCommentSection()">💬 Comment</button>
                </div>
                <div class="comment-section" style="display: none;">
                    <input type="text" class="comment-input" placeholder="Write a comment..." style="color: black;">
                    <button class="comment-button" onclick="addComment()">Post</button>
                    <ul class="comment-list"></ul>
                </div>
            </div>
            <script>
                function toggleLike(button) {
                    let likeCountSpan = button.nextElementSibling;
                    let currentCount = parseInt(likeCountSpan.textContent);
        
                    if (button.classList.contains("liked")) {
                        likeCountSpan.textContent = currentCount - 1;
                        button.classList.remove("liked");
                    } else {
                        likeCountSpan.textContent = currentCount + 1;
                        button.classList.add("liked");
                    }
                }
        
                function toggleCommentSection() {
                    let commentSection = document.querySelector(".comment-section");
                    commentSection.style.display = commentSection.style.display === "none" ? "block" : "none";
                }
        
                function addComment() {
                    let commentInput = document.querySelector(".comment-input");
                    let commentList = document.querySelector(".comment-list");
        
                    if (commentInput.value.trim() !== "") {
                        let newComment = document.createElement("li");
                        newComment.textContent = commentInput.value;
                        commentList.appendChild(newComment);
                        commentInput.value = ""; // Clear input after posting
                    }
                }
            </script>
        
</body>
</html>