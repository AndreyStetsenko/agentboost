var $ = jQuery.noConflict();

$(document).ready(function () {
    var uaTwo = window.navigator.userAgent;
    var isIETwo = /MSIE|Trident/.test(uaTwo);

    if (isIETwo) {
        document.documentElement.classList.add('ie');
    }

    if (navigator.userAgent.indexOf('Safari') !== -1 &&
        navigator.userAgent.indexOf('Chrome') === -1) {
        $("body").addClass("safari");
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.scroll_to_top').addClass('active');
        } else {
            $('.scroll_to_top').removeClass('active');
        }
    });

    $('.scroll_to_top').click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    const swiper = new Swiper('.promo-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        
        
      
        // Navigation arrows
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        slidesPerView: 'auto',
        slidesOffsetAfter: 0,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: "bullets",
            clickable: true
        }
    
    });
    const controls = `
        <div class="plyr__controls">
            <button type="button" class="plyr__control" aria-label="Play, {title}" data-plyr="play">
                <svg class="icon--pressed" role="presentation"><use xlink:href="#plyr-pause"></use></svg>
                <svg class="icon--not-pressed" role="presentation"><use xlink:href="#plyr-play"></use></svg>
                <span class="label--pressed plyr__tooltip" role="tooltip">Pause</span>
                <span class="label--not-pressed plyr__tooltip" role="tooltip">Play</span>
            </button>
        </div>
        `;
    const player = new Plyr('#player', {controls, muted: true});

    let player_class = document.querySelectorAll(".player");
    if(player_class.length > 0){
        for(let i = 0; i < player_class.length; i++){
            const player = new Plyr(player_class[i], {controls, muted: true});
        }
    }

    let accordeon_item_btn = document.querySelectorAll(".accordeon-item .accordion-action");
    if(accordeon_item_btn.length > 0){
        for(let i = 0; i < accordeon_item_btn.length; i++)
        {
            accordeon_item_btn[i].addEventListener("click", (ev) =>
            {
                ev.preventDefault();
                let target_item = ev.target.closest(".accordeon-item");
                target_item.classList.toggle("active");
                let span_text = ev.target.querySelector("span");
                
                clickerBool(target_item, span_text);
            })
        }
    }

    function clickerBool(bool_el, node){
        if(bool_el.classList.contains("active")){
            node.textContent = "Hide";
        }else{
            node.textContent = "Open";
        }
    }

    let all_accrodeon_item = document.querySelectorAll(".accordeon-item");
    if(all_accrodeon_item.length){
        for(let i = 0; i < all_accrodeon_item.length; i++){
            let btn_text = all_accrodeon_item[i].querySelector(".accordion-action span");
            clickerBool(all_accrodeon_item[i], btn_text);
        }
    }


    let hidden_table = $(".table");
    if(hidden_table){
        let action_more = hidden_table.find(".more-show-btn");
        action_more.on("click", (ev) =>
        {
            ev.preventDefault();
            hidden_table.toggleClass("hidden-table");
        })
    }
});
