$(() => {

  //rotate fade in and out hero section motivational words
  $(".motivate").animate({
    opacity: 1
  }, 3000);

  count = 0;

  wordsArray = [
    "Teamwork.",
    "Accountability.",
    "Respect.", "Honesty.",
    "Discipline.",
    "Passion.",
    "Motivation.",
    "Commitment.",
    "Competitiveness.",
    "Kindness",
    "Sportsmanship"
  ];

  setInterval(function () {
    count++;
    $(".motivate").fadeOut(2000, function () {
      $(this).text(wordsArray[count % wordsArray.length]).fadeIn(2000);
    });
  }, 10000);

  //Dark Sky API Call
  ajax_JSONP();

  function ajax_JSONP() {
    $.ajax({
      url: "https://api.darksky.net/forecast/bdd5a83541e9c1aa058cffbe9249aede/42.7798,-73.8457",
      dataType: "jsonp",
      timezone: "America/New_York"
    }).done(displayJSON);
  }

  function displayJSON(data) {
    $(".summary").text(data.currently.summary);
    $(".deg").text(data.currently.temperature.toFixed());
    //console.log(data);

    //Skycon Weather Icons
    var icons = new Skycons({ "color": "white" }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    $("#clear-day").attr("id", data.currently.icon);

    for (i = list.length; i--;) {
      icons.set(list[i], list[i]);
      icons.play();
    }
  }

});