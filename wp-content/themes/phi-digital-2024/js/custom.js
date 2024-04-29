jQuery(document).ready(function ($) {
  // Delay for 500ms before getting the width of #hero-dropdown-selections
  setTimeout(function () {
    // Get the width of #hero-dropdown-selections
    var selectionsWidth = $("#hero-dropdown-selections").outerWidth(true);

    // Set the final width of #hero-dropdown
    var finalWidth =
      selectionsWidth + parseFloat($("body").css("font-size")) * 4.8;

    $("#new-box").animate(
      {
        width: finalWidth * 1.1,
      },
      3000,
      function () {
        // Animation complete. Chain the second animation using a promise
        $("#new-box").animate(
          {
            width: finalWidth,
          },
          1000
        );
      }
    );

    setTimeout(function () {
      $("#hero-dropdown")
        .css("visibility", "visible")
        .animate(
          {
            width: finalWidth * 1.05,
          },
          800,
          function () {
            $("#hero-dropdown").animate(
              {
                width: finalWidth,
              },
              200,
              function () {
                $("#hero-dropdown-selections").outerWidth(
                  $("#hero-dropdown").outerWidth()
                );
              }
            );
          }
        );

      //$("#hero-dropdown-selections").width();
    }, 700);
  }, 200);

  var dropdown = $("#hero-dropdown");
  var selections = $("#hero-dropdown-selections");
  var selected = $("#hero-dropdown-selected");

  // Toggle slide animation when #hero-dropdown is clicked
  dropdown.click(function () {
    if (selections.is(":visible")) {
      selections.slideUp();
    } else {
      selections.slideDown();
    }
  });

  // Handle click on <li> element within #hero-dropdown-selections
  selections.on("click", "li", function () {
    var clickedText = $(this).text(); // Get the text content of the clicked <li> element
    selected.text(clickedText); // Replace the text content of #hero-dropdown-selected
    selections.slideUp(); // Slide up #hero-dropdown-selections after selection
  });
});
