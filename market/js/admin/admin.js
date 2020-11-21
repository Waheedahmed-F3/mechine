jQuery(function ($) {

  $(".sidebar-dropdown > a").click(function() {
    $(".sidebar-submenu").slideUp(200);
    if (
      $(this)
      .parent()
      .hasClass("active")
      ) {
      $(".sidebar-dropdown").removeClass("active");
    $(this)
    .parent()
    .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
    .next(".sidebar-submenu")
    .slideDown(200);
    $(this)
    .parent()
    .addClass("active");
  }
});

  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
    $(".content-wrapper").css("margin-left","0px");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
    $(".content-wrapper").css("margin-left","260px");
  });


});


function showTitle(_this) {
  $(_this).hide();
  $('#titleText').removeClass("d-none");
  $('#titleInput').show();
  $('#titleInput').focus();
}

function hideInp() {
  var inp = document.getElementById("titleInput");
  var inpValue = $('#titleInput').val();
  var newVal = inpValue.replace(/[^a-zA-Z ]/g, "").slice(0, 50).toLowerCase();
  var slugKey = newVal.replace(/ /g, "_");
  $('#slugInput').val(slugKey);
  $(inp).hide();
  $('.article-title').show();
  $('#titleText').addClass("d-none");
  if (inpValue == "") {
    $('#title').text("Title" + inpValue);
  } else {
    $('#title').text(inpValue);
  }
}

$('.dropdown').on('show.bs.dropdown', function() {
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

$('.dropdown').on('hide.bs.dropdown', function() {
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});

//---------------------------------//
        //Channel Page
//--------------------------------//

var myText = document.getElementsByClassName("chef-name");
var output = document.getElementsByClassName("chef-icon");
var text = "";
for (i = 0; i < myText.length; i++) {

var result = myText[i].innerHTML.charAt(0);
if (result.match(/[a-e]/i)) {
    $(output[i]).addClass('bg-danger');
    $(output[i]).html(result);
} else if (result.match(/[f-j]/i)) {
    $(output[i]).addClass('bg-warning');
    $(output[i]).html(result);
} else if (result.match(/[k-o]/i)) {
    $(output[i]).addClass('bg-success');
    $(output[i]).html(result);
} else if (result.match(/[p-t]/i)) {
    $(output[i]).addClass('bg-secondary');
    $(output[i]).html(result);
} else if (result.match(/[u-z]/i)) {
    $(output[i]).addClass('bg-info');
    $(output[i]).html(result);
} else if (result.match(/[0-9]/i)) {
    $(output[i]).addClass('bg-primary');
    $(output[i]).html(result);
} else {
    $(output[i]).hide();
}
}