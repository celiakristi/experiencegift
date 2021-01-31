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

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./node_modules/vanilla-emoji-picker/dist/emojiPicker.min.js"></script>

    <script type="text/javascript" src="./script/upload.js"></script>
    <script type="text/javascript" src="./script/slider.js"></script>
    <script type="text/javascript" src="./script/form.js"></script>
</head>

<body>
    <div id="contentWrapper">
        <div id="formWrapper" class="flex-wrapper">
            <div class="form-item">
                <div class="form-item-container">
                    <input type="file" id="imageUpload" accept="image/jpg, image/jpeg, image/png" onchange="uploadImage(event)" style="display: none;">
                    <label for="imageUpload"><img class="pointer" id="uploadedImage" alt="Click to choose image"></label>
                </div>
            </div>
            <div class="form-item flex-grow-2">
                <div class="form-item-container" id="textAreaContainer">
                    <textarea id="textInput" class="form-layout border-box-sizing" onkeyup="updateText(this.value)" data-emoji-picker="true"></textarea>
                    <div id="characterInfo"></div>
                </div>
            </div>
            <div class="form-item flex-grow-2">
                <div id="inputFormWrapper" class="flex-wrapper">
                    <div class="form-layout flex-wrapper input-form-item border-box-sizing flex-grow-1">
                        <div class="inline-block input-item border-box-sizing flex-grow-1">Value</div>
                        <div class="inline-block input-item border-box-sizing flex-grow-1" class="currency-select-wrapper">
                            <div class="custom-select pointer" onclick="toggleCurrencyOption()">
                                <span id="displayedSelectedOption"></span>
                                <i class="arrow down"></i>
                            </div>
                            <div class="form-layout" id="currencyOptionsWrapper">
                                <div id="currencyOptions"></div>  
                            </div>
                        </div>
                        <div class="inline-block input-item border-box-sizing flex-grow-2">
                            <input id="valueInput" type="number" min="25" max="10000" placeholder="25 - 10000" onchange="validateValue(this.value)">
                        </div>
                    </div>
                    <div class="form-layout flex-wrapper input-form-item border-box-sizing flex-grow-1">
                        <div class="inline-block flex-grow-1">Quantity</div>
                        <div class="inline-block">
                            <a class="number-button minus pointer" onclick="addQuantity(-1)"><img src="./images/minus.svg"></a>
                        </div>
                        <div class="inline-block"><input id="quantityNumber" type="number" placeholder="1 - 10" value="1"></div>
                        <div class="inline-block">
                            <a class="number-button plus pointer" onclick="addQuantity(1)"><img src="./images/plus.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sliderWrapper" class="form-item">
            <div id="sliderItemWrapper" class="form-layout">
                <div class="slider-overflow">
                    <div id="sliderContainer" class="slider-items">
                        <div class="slider-items-wrapper">
                            <div id="innerPreview" class="slider-image">
                                <textarea id="displayedText" readonly disabled="disabled"></textarea>
                            </div>
                            <div id="outerPreview" class="slider-image">
                                <img id="displayedImage">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="slider-button previous pointer" onclick="previousSlide()"><img src="./images/left-arrow.svg"></a>
                <a class="slider-button next pointer" onclick="nextSlide()"><img src="./images/right-arrow.svg"></a>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            initiateEmojiLb();
            updateCharInfo("");
            updateDisplayedImage();
            loadCurrency();
            openCurrencyOption(false);
        });
    </script>
</body>

</html>