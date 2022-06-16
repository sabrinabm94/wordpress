function progressBar(element, pageToShow, $) {
  let progress = $(".progress-bar-container .progress");

  if($(element).length > 0 && $(pageToShow).length > 0 && progress.length > 0) {
    $(window).scroll(function() {

      let documentElement = $(element)[0];
      let bodyElement = document.body;
      let scrollTop = documentElement.scrollTop || bodyElement['scrollTop'];
      let scrollBottom = (documentElement.scrollHeight || bodyElement['scrollHeight']) - window.innerHeight;
      let scrollPercent = (scrollTop / scrollBottom * 100);

      progress.css("width", scrollPercent + "%");
    });
  }
}

function wpAdminBarFix() {
  let progressBar = $(".progress-bar-container");
  let wpAdminBar = $("#wpadminbar");
  
  if(wpAdminBar) {
    progressBar.css("top", "46px");
  }
}