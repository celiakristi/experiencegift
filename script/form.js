const maxCharacter = 300;
const apiURL = 'https://thingproxy.freeboard.io/fetch/https://experiencegift.com/currencies.php';
// There's cors issue, that's why I use the proxy
let currenciesOption;
let selectedCurrency;
let showCurrencyOption = false;
const minQuantity = 1;
const maxQuantity = 10;
let quantity = 1;

function initiateEmojiLb() {
  new EmojiPicker();
}

function updateText(value) {
  const validText = validateText(value);
  updateCharInfo(validText);
  updateDisplayedText(validText);
}

function validateText(value) {
  if (value.match(/\n\n\n\n/g)) {
    value = value.replace(/\n\n\n\n/g, '\n\n\n');
  }
  const breakLineCount = value.match(/\n/g)?.length | 0;
  if (breakLineCount > 10) {
    const position = value.lastIndexOf('\n');
    value = value.substring(0, position) + value.substring(position + (value.length - 1));
  }
  return value;
}

function updateCharInfo(value) {
  const length = value.length;
  if (length >= maxCharacter) {
    value = value.substring(0, maxCharacter);
  } else {
    const characterInformation = `${length}/${maxCharacter}`;
    $('#characterInfo').text(characterInformation);
  }
}

function updateDisplayedText(value) {
  $('#textInput, #displayedText').val(value);
}

function loadCurrency() {
  fetch(apiURL)
    .then(response => response.json())
    .then(currencies => currencyDropdownInit(currencies));
}

function currencyDropdownInit(currencies) {
  const list = $('<ul/>', { class: 'currency-option-ul'});//document.createElement('ul');
  for (let [key, value] of Object.entries(currencies)) {
    $('<li/>', {
      class: 'currency-option-li pointer',
      html: `<div class="currency-key inline-block">${key}</div><div class="currency-value inline-block">${value}</div>`
    }).attr('data-val', key).appendTo(list);
  }
  $('#currencyOptions').html(list);

  // select random default value
  const keys = Object.keys(currencies);
  selectedCurrency = keys[ keys.length * Math.random() << 0];
  updateSelectedCurrencyDisplay();
  
  $('#currencyOptions .currency-option-li').click(event => {
    selectedCurrency = event.currentTarget.dataset["val"];
    updateSelectedCurrencyDisplay();
    openCurrencyOption(false);
  });
}

function updateSelectedCurrencyDisplay() {
  $("#displayedSelectedOption").text(selectedCurrency);
}

function toggleCurrencyOption() {
  showCurrencyOption = !showCurrencyOption;
  openCurrencyOption(showCurrencyOption);
}

function openCurrencyOption(isOpen) {
  $('#currencyOptions').css('visibility', isOpen ? 'visible' : 'hidden');
  showCurrencyOption = isOpen;
}

function addQuantity(number) {
  const total = quantity + number
  if (minQuantity <= total && total <= maxQuantity) {
    quantity = total;
  }
  $('#quantityNumber').val(quantity);
}