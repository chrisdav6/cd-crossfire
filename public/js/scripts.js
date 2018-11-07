$(() => {
  
  //rotate fade in and out hero section motivational words
  $(".motivate").animate({
    opacity: 1
  }, 3000);

  count = 0;
  wordsArray = ["Teamwork.", "Values.", "Respect.", "Open-Mindedness.", "Good Humor.", "Passion.", "Courage.", "Commitment."];
  setInterval(function () {
    count++;
    $(".motivate").fadeOut(2000, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(2000);
    });
  },10000);

});