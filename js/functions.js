$(window).scroll(function(){
    var wScroll = $(this).scrollTop();
    $('.logo').css({
        'transform' : 'translate(0px, '+ wScroll / 2 + '%)' 
    });
    $('.back-bird').css({
        'transform' : 'translate(0px, '+ wScroll / 4 + '%)' 
    });
    $('.fore-bird').css({
        'transform' : 'translate(0px, -'+ wScroll / 40 + '%)' 
    });

    if(wScroll > $('.clothes-pics').offset().top - ($(window).height() / 1.2)){
        $('.clothes-pics figure').each(function(i){
            setTimeout(function(){
            $('.clothes-pics figure').eq(i).addClass('is-showing');
            }, 150*(i+1));
        });
    }

      // Promoscope
  if(wScroll > $('.large-window').offset().top - $(window).height()){

    $('.large-window').css({'background-position':'center '+ (wScroll - $('.large-window').offset().top) +'px'});

    var opacity = (wScroll - $('.large-window').offset().top + 400) / (wScroll / 5);

    $('.window-tint').css({'opacity': opacity});

  }

  if(wScroll > $('.blog-posts').offset().top - $(window).height()){
      var offset= Math.min(0, wScroll - $('.blog-posts').offset().top + $(window).height() -350);
      $('.post-1').css({'transform': 'translate('+ offset +'px,'+ Math.abs(offset * 0.2) +'px)' });
      $('.post-3').css({'transform': 'translate('+ Math.abs(offset) +'px,'+ Math.abs(offset * 0.2) +'px)' });
  }
});

//MORE.HTML

const countdown = document.querySelector('.countdown');

// Set Launch Date (ms)
const launchDate = new Date('Jan 1, 2020 13:00:00').getTime();

// Update every second
const intvl = setInterval(() => {
  // Get todays date and time (ms)
  const now = new Date().getTime();

  // Distance from now and the launch date (ms)
  const distance = launchDate - now;

  // Time calculation
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display result
  countdown.innerHTML = `
  <div>${days}<span>Days</span></div> 
  <div>${hours}<span>Hours</span></div>
  <div>${mins}<span>Minutes</span></div>
  <div>${seconds}<span>Seconds</span></div>
  `;

  // If launch date is reached
  if (distance < 0) {
    // Stop countdown
    clearInterval(intvl);
    // Style and output text
    countdown.style.color = '#17a2b8';
    countdown.innerHTML = 'Launched!';
  }
}, 1000);

//TEAM.HTML
const left = document.querySelector(".left");
const right = document.querySelector(".right");
const container = document.querySelector(".team");

left.addEventListener("mouseenter", () => {
  container.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  container.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  container.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  container.classList.remove("hover-right");
});
