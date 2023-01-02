const editButtons = document.querySelectorAll('.editBtn');

for (let editButton of editButtons) {

    editButton.addEventListener('click', function() {

        editButton.parentNode.previousElementSibling.classList.toggle('hiddenElem');
        editButton.parentNode.previousElementSibling.previousElementSibling.classList.toggle('hiddenElem');
    })
}
