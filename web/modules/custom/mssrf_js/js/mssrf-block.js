(function ($) {
  $(document).ready(function () {
    $('#mssrf-team-link').click(function (event) {
      event.preventDefault(); // Prevent default link behavior
      window.location.href = "http://development.mssrf.org/mssrf-team";
    });
  });
})(jQuery);
