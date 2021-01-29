<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Experience Gift | Assesment</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="./styles/main.css" rel="stylesheet" type="text/css" />
    <link href="./styles/form.css" rel="stylesheet" type="text/css" />
    <link href="./styles/slider.css" rel="stylesheet" type="text/css" />
    <link href="./styles/responsive.css" rel="stylesheet" type="text/css" />

    <script src="./script/upload.js"></script>
    <script src="./script/slider.js"></script>
    <script src="./script/form.js"></script>
</head>

<body>
    <div id="contentWrapper">
        <div id="formWrapper" class="flex-wrapper">
            <div class="form-item">
                <div class="form-item-container">
                    <input type="file" id="imageUpload" accept="image/gif, image/jpeg, image/png" onchange="uploadImage(event)" style="display: none;">
                    <label for="imageUpload"><img id="uploadedImage" alt="Click to choose image" src="./images/hotel_gift_1.jpg"></label>
                </div>
            </div>
            <div class="form-item">
                <div class="form-item-container">
                    <textarea class="form-layout" onkeyup="updateText(this.value)"></textarea>
                    <div id="characterInfo"></div>
                </div>
            </div>
            <!-- <div class="form-item flex-wrapper">
                <div class="form-layout flex-wrapper">



                    <div class="inline-block">value</div>
                    <div class="inline-block">
                        <select id="currencyDropdown" name="currency">
                        </select>
                    </div>
                    <div class="inline-block"><input type="number" min="25" max="10000" placeholder="25 - 10000"></div>




                </div>
                <div class="form-layout flex-wrapper">

                    <div class="inline-block" style="flex-grow:1;">Quantity</div>
                    <div class="inline-block">
                        <a><img src="./images/plus.svg"></a>
                        <input type="number" min="25" max="10000" placeholder="25 - 10000">
                        <a><img src="./images/minus.svg"></a>
                    </div>
                    <div class="inline-block"></div>





                </div>
            </div> -->
        </div>
        <div id="sliderWrapper">
            <div id="sliderItemWrapper" class="form-layout">
                <div class="slider-overflow">
                    <div id="sliderContainer" class="slider-items">
                        <div class="slider-items-wrapper">
                            <div id="innerPreview" class="slider-image">
                                <textarea id="displayedText"></textarea>
                            </div>
                            <div id="outerPreview" class="slider-image">
                                <img id="displayedImage">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="slider-button previous" onclick="previousSlide()"><img src="./images/left-arrow.svg"></a>
                <a class="slider-button next" onclick="nextSlide()"><img src="./images/right-arrow.svg"></a>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            updateCharInfo("");
            updateDisplayedImage();
        }
    </script>
</body>

</html>