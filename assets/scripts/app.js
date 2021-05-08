document.addEventListener("DOMContentLoaded", function() {


/* JS pour la page d'accueil */    
if (document.title == "Virgile Mendes - Développeur full-stack") {

    /* Index / Portfolio for mobile */
    var swiperPortfolio = new Swiper('.portfolio', {
        slidesPerView: 'auto',
        centeredSlides: true,
        grabCursur: true,
        loop: true,
        autoHeight: true,
    });

    /* Index / Portfolio for desktop */
    let portfolioList = document.querySelectorAll('li a');

    for (let item of portfolioList) {
        item.onmouseover = function() {
            let videoTarget = document.getElementById(this.dataset.project);
    
            videoTarget.classList.add("video-actived");
            videoTarget.play();
        }
        item.onmouseout  = function() {
            let videoTarget = document.getElementById(this.dataset.project);
            
            videoTarget.classList.remove("video-actived");
            videoTarget.pause();
            videoTarget.currentTime = 0;
        }
    }


}


/* JS pour les pages projets */
if (location.pathname.includes('/projet/') ){

    let scrollEntreDeuxOffset = (section1,section2) =>
    $(window).scrollTop() >= ($(`${section1}`).offset().top - ($(window).height() / 2)) && $(window).scrollTop() < ($(`${section2}`).offset().top - ($(window).height() / 2));

    $(window).scroll(function(evt) {

            if (scrollEntreDeuxOffset("#intro","#challenge")) {
                showMediaDesktop('intro');
            }
            if (scrollEntreDeuxOffset("#challenge","#processus")) {
                showMediaDesktop('challenge');
            }
            if (scrollEntreDeuxOffset("#processus","#resultats")) {
                showMediaDesktop('processus');
            }
            if ($(window).scrollTop() >= ($("#resultats").offset().top - ($(window).height() / 2))) {
                showMediaDesktop('resultats');
            }
    });

    // Eviter de forcer l'ajout de Class si le media est déjà affiché
    function showMediaDesktop(section){
        if($(`#${section}Media`).hasClass('media-actived') == false){
            $(".medias > *").removeClass("media-actived");
            $(`#${section}Media`).addClass("media-actived");
            $("section > *").removeClass("article-project-h2-active");
            $(`#${section} h2`).addClass("article-project-h2-active");
        }
    }

}


});