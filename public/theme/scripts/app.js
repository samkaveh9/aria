$(function () {
  $("#button1").click(function () {
    $("#topmenu ul").slideToggle();
    $(".cats").css("position", "relative");
    $(".cats").css("z-index", "0");
  });

  $("#button2").click(function () {
    if ($("#cats").css("right") == "-300px") {
      $("#cats").css("right", "0");
      $("#cats").css("z-index", "20");
      $("#topmenu ul").slideUp();
    } else {
      $("#cats").css("right", "-300px");
    }
  });

  $("#cats &rsaquo;").click(function (event) {
    $(this).parent().siblings("ul").slideToggle();
    event.preventDefault();
  });

  $(window).resize(function () {
    if ($("#cats").css("width") != "300px") {
      $("#cats .submenu").slideUp();
    }
  });
});

function Func(Shahrestanha) {
  var _Shahrestan = document.getElementById("Shahrestan");
  _Shahrestan.options.length = 0;
  if (Shahrestanha != "") {
    var arr = Shahrestanha.split(",");
    for (i = 0; i < arr.length; i++) {
      if (arr[i] != "") {
        _Shahrestan.options[_Shahrestan.options.length] = new Option(
          arr[i],
          arr[i]
        );
      }
    }
  }
}

$(document).ready(function () {
  function toggleSidebar() {
    $(".button").toggleClass("active");
    $("main").toggleClass("move-to-left");
    $(".sidebar-item").toggleClass("active");
  }

  $(".button").on("click tap", function () {
    toggleSidebar();
  });

  $(document).keyup(function (e) {
    if (e.keyCode === 27) {
      toggleSidebar();
    }
  });
});

// $(document).ready(function () {
//   itemCount = 0;

//   $(".btnAdd").on("click", function () {
//     console.log("called");
//     itemCount += 1;
//     if (itemCount <= 99) {
//       $("#badge")[0].textContent = itemCount;
//     } else {
//       $("#badge")[0].textContent = "99";
//       itemCount = 99;
//     }
//   });

//   $("#btnRemove").on("click", function () {
//     itemCount -= 1;
//     if (itemCount >= 0 && itemCount <= 99) {
//       $("#badge")[0].textContent = itemCount;
//     } else if (itemCount < 0) {
//       itemCount = 0;
//     }
//   });
// });

// shopping cart

const addProductBtns = [...document.querySelectorAll(".btnAdd")];
const removeProductBtns = [...document.querySelectorAll(".btnRemove")];
const products = [...document.querySelectorAll(".product")];
const badges = [...document.querySelectorAll(".badge")];

addProductBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    const currentProduct = products[index];
    const currentBadge = badges[index];
    let productQuantity = +currentProduct.getAttribute("data-counter");
    currentProduct.setAttribute("data-counter", ++productQuantity);

    currentBadge.innerHTML = productQuantity;
  });
});

removeProductBtns.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    const currentProduct = products[index];
    const currentBadge = badges[index];
    let productQuantity = +currentProduct.getAttribute("data-counter");
    currentProduct.setAttribute("data-counter", --productQuantity);
    
    
    
    if (productQuantity <= 0) {
      currentProduct.setAttribute("data-counter", 0);
    }

    currentBadge.innerHTML = +currentProduct.getAttribute("data-counter");
  });
});
