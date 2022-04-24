const cardBodies = [...document.querySelectorAll('.card')];
console.log(cardBodies);

for(let i=0; i < cardBodies.length; i++){
    cardBodies[i].addEventListener('mouseenter', function(){
        this.style.transition = 'all 0.4s ease-in-out';
        this.classList.remove('bg-secondary');
        this.classList.add('bg-info');
    })

    cardBodies[i].addEventListener('mouseleave', function(){
        this.style.transition = 'all 0.4s ease-in-out';
        this.classList.remove('bg-info');
        this.classList.add('bg-secondary');
    })
}