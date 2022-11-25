let elements;
let windowHeight;

function init() {
    elements = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
}

function checkPosition () {
    for (let i = 0; i < elements.length; i++) {
        const element = elements[i];
        let positionFromTop = elements[i].getBoundingClientRect().top;
        if (positionFromTop - windowHeight <= 0) {
            element.classList.add('fade-in-element');
            element.classList.remove('hidden');

            let bars = document.querySelectorAll('.bar');
            bars.forEach(bar => {
                let width = bar.lastElementChild.clientWidth;
                let att = bar.firstElementChild.getAttribute('data-att');
                let actual = width * (att / 100);
                // bar.lastElementChild.style.width = '200px';
                setTimeout(() => {
                    bar.firstElementChild.style.width = `${actual}px`;
                }, 2000)

            });


        }
        
    }
}

window.addEventListener('scroll', checkPosition);
window.addEventListener('resize', init);

init();
checkPosition();