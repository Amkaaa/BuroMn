window.onload=function()
                {
            let req = new XMLHttpRequest();

            req.onreadystatechange = () => {
              if (req.readyState == XMLHttpRequest.DONE) {
                let articlesJSON=JSON.parse(req.responseText).sections;
                let articles=document.getElementById("carouselExampleFade");


                /*
                Dynamic add
                */
                // for (const iterator of articlesJSON) {
                //     var element = document.getElementsByClassName("carousel-inner");
                //     element.classList.add("mystyle");
                //     articleElement.innerHTML=`<div class="articleImg"><img src="${iterator.imgURL}"" alt="${iterator.altText}"/>
                //     </div><div class="articleText">${iterator.para}</div>`
                //     articles.appendChild(articleElement);
                // }



                /*
                Replace content
                */
                let imgCollection= articles.getElementsByClassName("carousel-item");

                for (const i in imgCollection) 
                {

                            let artImg=document.createElement("img");
                            artImg.setAttribute("src", articlesJSON[i].imgURL);
                            artImg.setAttribute("alt", articlesJSON[i].imgtext);
                            artImg.setAttribute("class", articlesJSON[i].imgclass);

                            imgCollection[i].childNodes[0].appendChild(artImg);
                            imgCollection[i].childNodes[0].classList.remove("del");

                            imgCollection[i].childNodes[1].classList.remove("del");
                            imgCollection[i].childNodes[1].innerHTML=articlesJSON[i].para;
                }    
                   


              }
            };

            req.open("GET", "https://api.jsonbin.io/b/5dd2aa50ad952a6f46ce355e/latest", true);
            req.setRequestHeader("secret-key", "$2b$10$d3b7RhB6gaaEUHjIKKC2muOhRPwXBcL9DkFob7b.orIwNRu5tnvze");
            req.send();

            }

// JQUERY SECTION is HERE

// autoplay үүсгэх
var auto = true;
 
// slider хоорондох хугацаа
var pause = 7000;

var $this = $('#carouselExampleFade');
 
// Slides container
var slidesCont = $this.children('.carousel-inner');
// Get all slides
var slides = slidesCont.children('.carousel-item');

var prevSlide = arrowsCont.children('.prev');
var nextSlide = arrowsCont.children('.next');

var currentSlide = slides.first();
var currentSlideIndex = 1;

var autoPlay = null;

$(function() { //  $(document).ready() - НЫ ТОВЧЛОЛ
   
   // Эхний идэвхтэй слайдаас бусдыг нь нууна.
    slides.not(':first').css('display', 'none');
    currentSlide.addClass('active');

    // Дараагийн хуудас руу шилжих хөдөлгөөн эффект *fade*
    function fadeNext() {
        currentSlide.removeClass('active').fadeOut(700);
     
        if(currentSlideIndex == slidesCount) {
            currentSlide = slides.first();
            currentSlide.delay(500).addClass('active').fadeIn(700);
            currentSlideIndex = 1;
        } else {
            currentSlideIndex++;
            currentSlide = currentSlide.next();
            currentSlide.delay(500).addClass('active').fadeIn(700);
        }
     
        pager.text(currentSlideIndex+' / '+slidesCount);
    }
     
    // Өмнөх хуудас руу шилжих хөдөлгөөн эффект *fade*
    function fadePrev() {
        currentSlide.removeClass('active').fadeOut(700);
     
        if(currentSlideIndex == 1) {
            currentSlide = slides.last();
            currentSlide.delay(500).addClass('active').fadeIn();
            currentSlideIndex = slidesCount;
        } else {
            currentSlideIndex--;
            currentSlide = currentSlide.prev();
            currentSlide.delay(500).addClass('active').fadeIn(700);
        }
     
        pager.text(currentSlideIndex+' / '+slidesCount);
    }


    $(nextSlide).click(function(e) {
        e.preventDefault();
        fadeNext();
        AutoPlay();
    });
     
    
    $(prevSlide).click(function(e) {
        e.preventDefault();
        fadePrev();
        AutoPlay();
    });
     
    
    AutoPlay();
});