function selectfocus(theP) {
    var x = document.getElementsByTagName("p");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "";
        x[i].style.color = "";
        x[i].style.border = "";
        x[i].style.transition = "1s ease";
    }
    theP.style.backgroundColor = "white";
    theP.style.color = "black";
    theP.style.border = "1px solid var(--primary)";
    theP.style.transition = "0.3s ease";
}

function selectfocuss(boxfocus) {
    var x = document.getElementsByTagName("p");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].style.backgroundColor = "";
        x[i].style.color = "";
        x[i].style.border = "";
        x[i].style.boxShadow = "";
        x[i].style.transition = "0.3s ease";
    }
    boxfocus.style.backgroundColor = "white";
    boxfocus.style.color = "black";
    boxfocus.style.border = "1px solid var(--gray-lines)";
    boxfocus.style.transition = "0.3s ease";
    boxfocus.style.boxShadow = "0px 0px 8px 0px rgba(235, 34, 39, 0.25)";
}

// 
const emailInputs = document.getElementsByClassName('email');
        const emailErrors = document.getElementsByClassName('email-error');

        for (let i = 0; i < emailInputs.length; i++) {
            const emailInput = emailInputs[i];
            const emailError = emailErrors[i];

            emailInput.addEventListener('input', function() {
                if (emailInput.validity.valid) {
                    emailError.textContent = '';
                    emailError.style.display = 'none';
                    emailInput.classList.remove('warning');
                } else {
                    showError('*Email is invalid', emailError);
                    emailInput.classList.add('warning');
                }
            });
        }

        function showError(message, errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }

const fileInputs = document.getElementsByClassName('file-input');
const errorMessages = document.getElementsByClassName('input-warning');

for (let i = 0; i < fileInputs.length; i++) {
  const fileInput = fileInputs[i];
  const errorMessage = errorMessages[i];

  fileInput.addEventListener('change', function() {
    validateFile(fileInput, errorMessage);
  });
}

function validateFile(fileInput, errorMessage) {
  const file = fileInput.files && fileInput.files[0]; // Tambahkan pengecekan apakah properti files ada

  if (!file) {
    showError(errorMessage, '*Please choose a file');
    fileInput.classList.add('warning');
    return;
  } else {
    fileInput.classList.remove('warning');
    errorMessage.textContent = '';
    errorMessage.style.display = 'none';
  }

  if (file.size > 5 * 1024 * 1024) { // 5MB
    showError(errorMessage, '*File is too big');
    fileInput.classList.add('warning');
    return;
  } else {
    fileInput.classList.remove('warning');
    errorMessage.textContent = '';
    errorMessage.style.display = 'none';
  }

  // Lanjutkan dengan pengiriman file
  // ...
}

function showError(errorElement, message) {
  errorElement.textContent = message;
  errorElement.style.display = 'block';
}

const submitButtons = document.getElementsByClassName('save-btn');

for (let i = 0; i < submitButtons.length; i++) {
  const submitButton = submitButtons[i];

  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah pengiriman form jika validasi tidak berhasil

    const fileInput = submitButton.previousElementSibling; // Mengakses elemen input file sebelumnya
    const errorMessage = submitButton.nextElementSibling; // Mengakses elemen pesan error berikutnya

    validateFile(fileInput, errorMessage);

    // Lanjutkan dengan pengiriman file jika validasi berhasil
    if (!fileInput.classList.contains('warning')) {
      // ...
    }
  });
}

//////////////////////////
const linkInputs = document.getElementsByClassName('link-input');
const linkInvalid = document.getElementsByClassName('link-invalid');

for (let i = 0; i < linkInputs.length; i++) {
  const linkInput = linkInputs[i];
  const errorMessage = linkInvalid[i];

  linkInput.addEventListener('input', function() {
    const link = linkInput.value.trim();

    if (!link) {
      showError(errorMessage, '*Please fill the field');
      linkInput.classList.add('warning');
      return;
    }

    const urlPattern = /^(https?:\/\/)?([\w.-]+)\.([a-z]{2,})(\/.*)?$/i;

    if (!urlPattern.test(link)) {
      showError(errorMessage, '*Link invalid');
      linkInput.classList.add('warning');
      return;
    }

    // Validasi berhasil, tidak ada pesan error
    clearError(errorMessage);
  });
}

function showError(errorElement, message) {
  errorElement.textContent = message;
  errorElement.style.display = 'block';
}

function clearError(errorElement) {
  errorElement.textContent = '';
  errorElement.style.display = 'none';
}
