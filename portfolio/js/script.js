const cards = [...document.querySelectorAll('.card')];
const cardBodies = [...document.querySelectorAll('.card-body')];
const carouselInners = [...document.querySelectorAll('.carousel-inner')];

for(let i=0; i < cards.length; i++){

    cards[i].addEventListener('mouseenter', function(){
        this.classList.remove('bg-light');
        this.classList.add('bg-dark');

        cardBodies[i].classList.remove('text-dark');
        cardBodies[i].classList.add('text-white');

        carouselInners[i].style.height = "280px";
    })


    cards[i].addEventListener('mouseleave', function(){
        this.classList.remove('bg-dark');
        this.classList.add('bg-light');

        cardBodies[i].classList.remove('text-white');
        cardBodies[i].classList.add('text-dark');

        carouselInners[i].style.height = "320px";
    })

}