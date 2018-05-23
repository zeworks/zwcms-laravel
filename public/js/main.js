var $blocoItem = $(".bloc").html();


//Chamar todas as funções relacionadas com tamanhos para tomarem alterações no resize
function resizableElements(viewport) {

}

//Chamar todas as funções iniciais, esperando pelas imagens serem carregadas
(function ($, viewport) {
  $(document).ready(function () {
    resizableElements(viewport);

    $("aside").css("padding-top", $("nav").outerHeight(true));

    $("aside ul li .aside__link").click(function () {
      $(this).children("i.rtl").toggleClass("active");
      $(this).toggleClass("active");
      menu_items($(this).parent().children("ul"));
    });

    $(".match-height").matchHeight();

    // toggle items
    toggleItems();

    $('.text-editor').summernote({
      tabsize: 2,
      height: 200
    });

    if($(".alert").is(":visible")){
      setTimeout(function(){
        $(".alert").fadeOut(1000, function(){
          $(this).remove();
        })
      }, 3000);
    }

    $("#upload_photo").change(function () {
      readURL(this);
    });

    $('#upload_images').on('change', function () {
      imagesPreview(this, '.aditional-images');
    });

    if ($(".alert").hasClass("active")) {
      setTimeout(function () {
        $(".alert").removeClass("active");
      }, 2000);
    }

    var bloc_item_count = $(".bloc").length;
    $(".btn-addBloc").click(function () {
        bloc_item_count++;
        // replace os IDs com um count e o numero do bloco no HTML
        var $blocoItemNew = $blocoItem.replace(/\_1/g, '_' + bloc_item_count).replace(/ 1/g, '' + bloc_item_count);
        // adicionar o HTML
        $(this).parent().children(".bloc").append($blocoItemNew);
        // inicializar o texteditor
        $('.text-editor').summernote({
          tabsize: 2,
          height: 200
        });
    });

    $(".btn-delBloc").click(function(){
      $(this).parent().parent().remove();
      return false;
    })

  });
})(jQuery);

//Vai chamar a função que possui todas as funções associadas ao resize
(function ($, viewport) {
  $(window).resize(function () {
    resizableElements(viewport);
  });
})(jQuery);

//Caso se pretenda aplicar um fadeOut ao body antes de todo se carregar
$(window).load(function () {

});

function menu_items(item) {
  $(item).slideToggle("300");
}


function toggleItems() {
  // search input field
  $(".search__btn--fake").click(function (e) {
    $(this).parent().addClass("active");
    return false;
  });

  // toggle user info links top bar
  $(".user-top-bar").click(function (e) {
    $(this).toggleClass("active");
  });

  // input keydown/click to show the topbar to save the info;
  $("input").keydown(function () {
    $(".buttons-top-absolute").addClass("active");
  });

  $(".text-editor").keydown(function () {
    $(".buttons-top-absolute").addClass("active");
  });

  $("input[type='file'],input[type='checkbox'],input[type='radio']").click(function () {
    $(".buttons-top-absolute").addClass("active");
  });

  // .decline class button to hide the topbar;
  $(".decline").click(function () {
    $(".buttons-top-absolute").removeClass("active");
    return false;
  });
  $('body').keypress(function (e) {
    if (e.keyCode == 27) {
      $(".buttons-top-absolute").removeClass("active");
    }
  });

  $(".upload").click(function (e) {
    var target = $(this).attr("data-target");
    $("#" + target).click();
    return false;
  });

  $(document).on("click", ".toggle", function () {
    $(this).parent().toggleClass("checked");
    $(this).parent().children(".btsp-check").click();
    if ($(this).parent().hasClass("checked")) {
      $(".status_hidden").val(1);
      $(this).parent().children(".btsp-check").attr('checked', 'checked');
    } else {
      $(".status_hidden").val(0);
      $(this).parent().children(".btsp-check").removeAttr('checked');
    }
  });

  $(".tree ul li input").click(function () {
    $(this).toggleClass("checked");
    if ($(this).hasClass("checked")) {
      $(".category-val").val(1);
    } else {
      $(".category-val").val("");
    }
  });


  $("#upload_files").change(function () {
    $("#files_pageUpload").submit();
  });

  $(".change-email").click(function () {
    var target = $(this).attr("data-toggle");

    $(target).toggleClass("hidden");
  });


  // add discount page
  $("form select").change(function () {
    var target = $(this).find(":selected").attr("data-toggle");
    $(".form-toggle .item").removeClass("active");
    $("." + target).addClass("active");
  });

  // main content collapse
  $("nav .menu").click(function () {
    $(this).toggleClass("active");

    if ($(this).hasClass("active")) {
      $("body").addClass("content-collapse");
    } else {
      $("body").removeClass("content-collapse");
    }
    return false;
  });


}

// for single image preview - featured image
function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('.image-previewer').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

function imagesPreview(input, placeToInsertImagePreview) {

  if (input.files) {
    var filesAmount = input.files.length;

    for (i = 0; i < filesAmount; i++) {
      var reader = new FileReader();

      reader.onload = function (event) {
        $($.parseHTML("<img class='aditional-image' width='200' height='200'>")).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
      }

      reader.readAsDataURL(input.files[i]);
    }
  }

};

// previous history page
function goBack() {
  window.history.back();
}

// gen_code class, to when click generate code
$("body").on("click", ".gen_code", function (e) {
  var code = generate_discount_code();
  $("#discount_code").val(code);
  e.preventDefault();
});

// function to generate discount code
function generate_discount_code() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 10; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return "#" + text;
}

function insertColorProduct($color){
  var char = "#";
  if($color.indexOf(char) > -1)
    $(".available-colors").append("<span class='color-item' style='background-color: "+$color+"'></span>");
}