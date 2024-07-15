document.addEventListener('DOMContentLoaded', function() {
    const inputElements = document.querySelectorAll('.myInput2');
    const buttonElement = document.getElementById('llamada223');

    const checkFields = function() {
        const allFieldsFilled = Array.from(inputElements).every(inputElement => inputElement.value.trim() !== '');
        buttonElement.disabled = !allFieldsFilled;
    };

    inputElements.forEach(inputElement => {
        inputElement.addEventListener('input', checkFields);
    });
});