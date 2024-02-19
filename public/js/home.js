// SLIDER
let sliderContainerTipe = document.getElementById('slideContainerTipe');
let sliderTipe = document.getElementById('sliderTipe');
let cards = document.querySelectorAll('#card');

let elementToShow = calculateElementToShow();

let sliderContainerTipeWidth = sliderContainerTipe.clientWidth;

let cardWidth = sliderContainerTipeWidth / elementToShow;

sliderTipe.style.width = cards.length * cardWidth + 'px';
sliderTipe.style.transition = 'margin';
sliderTipe.style.transitionDuration = '1s';

for (let index = 0; index < cards.length; index++) {
    const element = cards[index];
    element.style.width = cardWidth + 'px';
}

function calculateElementToShow() {
    return window.innerWidth >= 750 ? 2 : 1; // Adjust the width as needed
}

function prev() {
    console.log(+sliderTipe.style.marginLeft.slice(0, -2));
    console.log(cardWidth * (cards.length - elementToShow));
    if ((+sliderTipe.style.marginLeft.slice(0, -2)) != (-cardWidth * (cards.length - elementToShow)))
        sliderTipe.style.marginLeft = ((+sliderTipe.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
}

function next() {
    if (+sliderTipe.style.marginLeft.slice(0, -2) != 0)
        sliderTipe.style.marginLeft = ((+sliderTipe.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
}

// Recalculate on window resize
window.addEventListener('resize', function () {
    elementToShow = calculateElementToShow();
    sliderContainerTipeWidth = sliderContainerTipe.clientWidth;
    cardWidth = sliderContainerTipeWidth / elementToShow;

    slider.style.width = cards.length * cardWidth + 'px';

    for (let index = 0; index < cards.length; index++) {
        const element = cards[index];
        element.style.width = cardWidth + 'px';
    }
});

// AUTO PLAY SLIDER
$(document).ready(function () {
    $('.slider-sekitar').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 600,
        draggable: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768, // Adjusted breakpoint for max-md
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});

const allStar = document.querySelectorAll('.rating .star')
const ratingValue = document.querySelector('.rating input')

allStar.forEach((item, idx) => {
    item.addEventListener('click', function () {
        let click = 0
        ratingValue.value = idx + 1

        allStar.forEach(i => {
            i.classList.replace('bxs-star', 'bx-star')
            i.classList.remove('active')
        })
        for (let i = 0; i < allStar.length; i++) {
            if (i <= idx) {
                allStar[i].classList.replace('bx-star', 'bxs-star')
                allStar[i].classList.add('active')
            } else {
                allStar[i].style.setProperty('--i', click)
                click++
            }
        }
    })
});

document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.querySelector('#review-name').value;
    const message = document.querySelector('#review-message').value;
    const rating = ratingValue.value;

    // Get the selected files
    const files = document.querySelector('#photo').files;

    // Create a new FormData object
    const formData = new FormData();

    // Append each file to the FormData object
    for (let i = 0; i < files.length; i++) {
        formData.append('photos[]', files[i]);
    }

    // Append other form data
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('name', name);
    formData.append('message', message);
    formData.append('rating', rating);

    // Make the AJAX request
    $.ajax({
        type: 'POST',
        url: reviewUrl,
        data: formData,
        processData: false,  // Prevent jQuery from automatically processing the data
        contentType: false,  // Prevent jQuery from automatically setting content type
        success: function(response) {
            window.location.reload();
        },
        error: function(error) {
            console.log(error);
        }
    });
});
