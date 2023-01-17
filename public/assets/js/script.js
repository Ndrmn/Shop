//Add image preview

FReader = new FileReader();

// событие, когда файл загрузится
FReader.onload = function(e) {
    document.querySelector("#result").src = e.target.result;
};

// выполнение функции при выборки файла

document.addEventListener("DOMContentLoaded", () => {

    try {
        document.querySelector(".uploadImage").addEventListener("change", loadImageFile);
    } catch(e) {
        // console.log(e);
    };
});

// функция выборки файла
function loadImageFile() {
    let file = document.querySelector(".uploadImage").files[0];
    FReader.readAsDataURL(file);
    let imageToHide = document.querySelector('.old-image');
    imageToHide.classList.add('hiddenElem');
    let imageToShow = document.querySelector('.new-image');
    imageToShow.classList.remove('hiddenElem');
};

//snackbar

function showSnackbar () {

    try {
        const snackbar = document.querySelector('.snackbar_notification');

        setTimeout( () => snackbar.classList.remove('hiddenElem'), 1000);
        setTimeout( () => snackbar.classList.add('hiddenElem'), 5000);
    } catch (e) {

    }

}

showSnackbar();
