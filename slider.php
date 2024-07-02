<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .slider-container {
            width: 100%;
            height: 400px;
            overflow: hidden;
            position: relative;
        }

        .slider {
            width: 300%;
            height: 100%;
            display: flex;
            animation: slide 9s infinite; /* Adjust the duration as needed */
        }

        .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slide {
            width: 33.33%;
            flex-shrink: 0;
            animation: slideImage 9s infinite; /* Adjust the duration as needed */
        }

        @keyframes slide {
            0% {
                transform: translateX(0);
            }
            33.33% {
                transform: translateX(-100%);
            }
            66.66% {
                transform: translateX(-200%);
            }
            100% {
                transform: translateX(0);
            }
        }

        @keyframes slideImage {
            0%, 100% {
                opacity: 0;
            }
            11%, 22% {
                opacity: 1;
            }
            33%, 100% {
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="slider-container">
        <div class="slider">
            <div class="slide">
                <img src="dd.jpg" alt="Image 1">
            </div>
            <div class="slide">
                <img src="dd.jpg" alt="Image 2">
            </div>
            <div class="slide">
                <img src="dd.jpg" alt="Image 3">
            </div>
        </div>
    </div>
</body>
</html>
