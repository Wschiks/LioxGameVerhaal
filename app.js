const observer = new IntersectionObserver((entries)=>{
entries.forEach((entry) =>{
    console.log(entry)
    if(entry.isIntersecting){
        entry.target.classList.add('show');
    } else{
        entry.target.classList.remove('show');
    }
});
});


const hiddenElements = document.querySelectorAll('.hidden')
hiddenElements.forEach((el)=> observer.observe(el));


/** 
let images = ["img/dier/vos1.png", "img/dier/vos2.png"];
let currentIndex = 0;

setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById("foxImage").src = images[currentIndex];
}, 1000);
**/



