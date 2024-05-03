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
        .css("margin", "0 0.6rem")
        .animate(
          {
            width: finalWidth * 1.06,
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
    }, 700);
  }, 200);

  var dropdown = $("#hero-dropdown");
  var selections = $("#hero-dropdown-selections");
  var selected = $("#hero-dropdown-selected");

  // Toggle slide animation when #hero-dropdown is clicked
  dropdown.click(function () {
    $(this).addClass("clicked");
    if (selections.is(":visible")) {
      selections.slideUp();
    } else {
      selections.slideDown();
    }
  });

  // Handle click on <li> element within #hero-dropdown-selections
  selections.on("click", "li", function () {
    var clickedText = $(this).text();

    selected.fadeOut(300, function () {
      selected.text(clickedText);
      selected.fadeIn(300);
    });

    selections.slideUp();
  });

  $(document).click(function (event) {
    // Check if the clicked element is not within the dropdown area
    if (
      !dropdown.is(event.target) &&
      !selections.is(event.target) &&
      dropdown.has(event.target).length === 0 &&
      selections.has(event.target).length === 0
    ) {
      // Slide up #hero-dropdown-selections if visible
      if (selections.is(":visible")) {
        selections.slideUp();
      }
    }
  });

  var $body = $("body");
  var $logoMain = $(".logo-main");
  var $logoMainMask = $("#logo-main-mask rect");
  var $logoAltMask = $("#logo-alt-mask rect");
  var logoDimensions = {
    width: $logoMain.outerWidth(),
    height: $logoMain.outerHeight(),
  };
  var scale = $logoMain.outerHeight() / 80;
  var $sections = $("section");
  var sections = generateSectionsMap();
  var maskCache = {};

  function setLogoMasks(isDark, amount) {
    if (maskCache.isDark === isDark && maskCache.amount === amount) {
      return;
    }

    var alt = {};
    var main = {};

    if (isDark) {
      alt.y = amount / scale;
      alt.height = logoDimensions.height / scale - amount;

      main.y = 0;
      main.height = amount / scale;
    } else {
      alt.y = 0;
      alt.height = amount / scale;

      main.y = amount / scale;
      main.height = logoDimensions.height / scale - amount;
    }

    $logoAltMask.attr({
      y: alt.y - 1,
      height: alt.height + 1,
    });

    $logoMainMask.attr({
      y: main.y,
      height: main.height,
    });

    maskCache.isDark = isDark;
    maskCache.amount = amount;
  }

  function generateSectionsMap() {
    var sections = [];

    $sections.each(function () {
      var top = $(this).offset().top;

      sections.push({
        $el: this,
        start: top,
        end: top + $(this).outerHeight(),
        isDark: $(this).hasClass("section-dark"),
      });
    });

    return sections;
  }

  function updateLogo(sections) {
    var scrollOffset = $body.scrollTop();
    var logoStart = $logoMain.offset().top;
    var logoEnd = logoStart + logoDimensions.height;
    var section;

    $.each(sections, function (index, section) {
      if (section.end >= logoStart) {
        if (
          section.end <= logoEnd &&
          sections[index + 1] &&
          sections[index + 1].isDark !== section.isDark
        ) {
          setLogoMasks(section.isDark, section.end - logoStart);
        } else {
          setLogoMasks(section.isDark, logoDimensions.height);
        }

        return false;
      }
    });
  }

  updateLogo(sections);

  $(window).on("scroll", function () {
    updateLogo(sections);
  });
});
