let views = document.querySelectorAll('#view-btn');
let modal = document.getElementById('modal');

views.forEach(view => view.addEventListener('click', seeCar));

function seeCar (e) {
    let product = e.target.parentElement.parentElement.cloneNode(true);
    modal.firstElementChild.appendChild(product);
    modal.style.display = 'block';
    console.log(product);
}

window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
        modal.firstElementChild.removeChild(modal.firstElementChild.firstElementChild);
    }
})
