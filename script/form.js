const maxCharacter = 300;


function updateText(value) {
  const validText = validateText(value);
  updateCharInfo(validText);
  updateDisplayedText(validText);
}

function validateText(value) {
  return value;
}

function updateCharInfo(value) {
  const length = value.length;
  if (length >= maxCharacter) {
    value = value.substring(0, maxCharacter);
  } else {
    const characterInformationEl = document.getElementById('characterInfo');
    const characterInformation = `${length}/${maxCharacter}`;
    characterInformationEl.textContent = characterInformation;
  }
}

function updateDisplayedText(value) {
  const displayedTextEl = document.getElementById('displayedText');
  displayedTextEl.textContent = value;
}

// DROPDOWN