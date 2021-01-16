// создаем переменную в которой указан адрес нашего сайта
var siteURL = "http://autoprice.local/";

// создаем переменную по селектору для кнопки "Показать еще"
var btnShowMore = document.querySelector("#show-more");
if (btnShowMore) {
	//добавляем клик по кнопке
	btnShowMore.onclick = function () {
		//создаем переменную по селектору для скрытого input, который находится в кнопке "Показать еще" в products.php
		var currentPageInput = document.querySelector("#current-page");
		//делаем ajax запрос
		var ajax = new XMLHttpRequest();
		// открываем запрос и передаем: метод запроса, ссылка по которой мы идем за данными, параметр запроса - синхронный
		ajax.open(
			"GET",
			siteURL + "modules/products/get_more.php?page=" + currentPageInput.value,
			false
		);
		//отправляем запрос
		ajax.send();
		//значение переменной currentPageInput = (+ превращает значение в целое число) предыдущее значение +1
		currentPageInput.value = +currentPageInput.value + 1;
		//если унас ajax запрос пустой (т.е. больше нет товаров)
		if (ajax.response == "") {
			//то скрываем кнопку "Показать еще"
			btnShowMore.style.display = "none";
		}
		//выбираем элемент, куда мы хотим вставить данные полученные через ajax запрос: создаем переменную по селектору для блока с продуктами в products.php
		var productsBlock = document.querySelector("#products");
		// в innerHTML элемента вставляем предыдущий innerHTML + новый
		productsBlock.innerHTML = productsBlock.innerHTML + ajax.response;
	};
}

//создаем функцию для добавления в корзину
function addToCart (btn){
	//создаем обьект
	var ajax = new XMLHttpRequest();
	//создаем запрос
	ajax.open("POST", siteURL +"/modules/cart/add-to-cart.php", false);
	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	//отправляем запрос
	ajax.send("id=" + btn.dataset.id);
	//преобразовыем данные полученные ajax.response в JSON формат
	var response = JSON.parse(ajax.response);
	//выбираем по селектору корзину
	var btnGoBasket = document.querySelector("#go-basket span");
	//присваиваем значение количества товара в корзине
	btnGoBasket.innerText = response.count;

}

/*===========================================
	Функция для удаления товара из корзины
=============================================*/

function deleteProductBasket(obj,id){
	//создаем обьект
	var ajax = new XMLHttpRequest();
	//создаем запрос
	ajax.open("POST", siteURL +"/modules/cart/cart-del.php", false);
	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	//отправляем запрос
	//преобразовыем данные полученные ajax.response в JSON формат

	ajax.send("id=" + id);
	
	obj.parentNode.parentNode.remove();
	var response = JSON.parse(ajax.response);
	var btnGoBasket = document.querySelector("#go-basket span");
	//присваиваем значение количества товара в корзине
	btnGoBasket.innerText = response.count;

}

/*===========================================
	Функция для изменения количества товара в корзине
=============================================*/

function changeCount(obj, id, cost) {
  var count = obj.value;
  var ajax = new XMLHttpRequest();
      const params = "id=" + id + "&count=" + count;
      ajax.open("POST", siteURL + "/modules/cart/change-count.php", false);
      ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      ajax.send(params);
      console.dir(ajax);

      var priceTd = document.querySelector(".price" + id);
      console.dir(priceTd);
          priceTd.innerText = count * cost;


      
}


(function ($) {
    "use strict";
    /*--
        Commons Variables
    -----------------------------------*/
    var $window = $(window),
        $body = $('body');

     /**********************
     * Sticky Menu
     ***********************/
    $(window).on('scroll', function(event) {    
        var scroll = $(window).scrollTop();
        if (scroll < 350) {
            $(".header-menu").removeClass("is-sticky");
        } else{
            $(".header-menu").addClass("is-sticky");
        }
    });

    /*--
        Off Canvas Function
    -----------------------------------*/
    (function () {
        var $offCanvasToggle = $('.offcanvas-toggle'),
            $offCanvas = $('.offcanvas'),
            $offCanvasOverlay = $('.offcanvas-overlay'),
            $mobileMenuToggle = $('.mobile-menu-toggle');
        $offCanvasToggle.on('click', function (e) {
            e.preventDefault();
            var $this = $(this),
                $target = $this.attr('href');
            $body.addClass('offcanvas-open');
            $($target).addClass('offcanvas-open');
            $offCanvasOverlay.fadeIn();
            if ($this.parent().hasClass('mobile-menu-toggle')) {
                $this.addClass('close');
            }
        });
        $('.offcanvas-close, .offcanvas-overlay').on('click', function (e) {
            e.preventDefault();
            $body.removeClass('offcanvas-open');
            $offCanvas.removeClass('offcanvas-open');
            $offCanvasOverlay.fadeOut();
            $mobileMenuToggle.find('a').removeClass('close');
        });
    })();


    /**********************
     * Offcanvas: Menu Content
     ***********************/
    function mobileOffCanvasMenu() {
        var $offCanvasNav = $('.offcanvas-menu'),
            $offCanvasNavSubMenu = $offCanvasNav.find('.sub-menu');

        /*Add Toggle Button With Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.parent().prepend('<span class="offcanvas__menu-expand"></span>');

        /*Category Sub Menu Toggle*/
        $offCanvasNav.on('click', 'li a, .offcanvas__menu-expand', function (e) {
            var $this = $(this);
            if ($this.attr('href') === '#' || $this.hasClass('offcanvas__menu-expand')) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.parent('li').removeClass('active');
                    $this.siblings('ul').slideUp();
                    $this.parent('li').find('li').removeClass('active');
                    $this.parent('li').find('ul:visible').slideUp();
                } else {
                    $this.parent('li').addClass('active');
                    $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                    $this.closest('li').siblings('li').find('ul:visible').slideUp();
                    $this.siblings('ul').slideDown();
                }
            }
        });
    }
    mobileOffCanvasMenu();

    /**********************
     * Offcanvas: User Panel
     ***********************/
    function mobileOffCanvasUserPanel() {
        var $offCanvasNav = $('.offcanvas-userpanel'),
            $offCanvasNavSubMenu = $offCanvasNav.find('.user-sub-menu');

        /*Add Toggle Button With Off Canvas Sub Menu*/
        $offCanvasNavSubMenu.parent().prepend('<span class="offcanvas__user-expand"></span>');

        /*Category Sub Menu Toggle*/
        $offCanvasNav.on('click', 'li a, .offcanvas__user-expand', function (e) {
            var $this = $(this);
            if ($this.attr('href') === '#' || $this.hasClass('offcanvas__user-expand')) {
                e.preventDefault();
                if ($this.siblings('ul:visible').length) {
                    $this.parent('li').removeClass('active');
                    $this.siblings('ul').slideUp();
                    $this.parent('li').find('li').removeClass('active');
                    $this.parent('li').find('ul:visible').slideUp();
                } else {
                    $this.parent('li').addClass('active');
                    $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                    $this.closest('li').siblings('li').find('ul:visible').slideUp();
                    $this.siblings('ul').slideDown();
                }
            }
        });
    }
    mobileOffCanvasUserPanel();


    /**********************
     * Vertical Menu
     ***********************/
    $('.header-menu-vertical .menu-title').on('click', function (event) {
      $('.header-menu-vertical .menu-content').slideToggle(500);
    });

    $('.menu-content').each(function () {
        var $ul = $(this),
            $lis = $ul.find('.menu-item:gt(7)'),
            isExpanded = $ul.hasClass('expanded');
        $lis[isExpanded ? 'show' : 'hide']();

        if ($lis.length > 0) {
            $ul
                .append($('<li class="expand">' + (isExpanded ? '<a href="javascript:;"><span><i class="icon-minus-square"></i>Close Categories</span></a>' : '<a href="javascript:;"><span><i class="icon-plus-square"></i>More Categories</span></a>') + '</li>')
                    .on('click',function (event) {
                        var isExpanded = $ul.hasClass('expanded');
                        event.preventDefault();
                        $(this).html(isExpanded ? '<a href="javascript:;"><span><i class="icon-plus-square"></i>More Categories</span></a>' : '<a href="javascript:;"><span><i class="icon-minus-square"></i>Close Categories</span></a>');
                        $ul.toggleClass('expanded');
                        $lis.toggle(300);
                    }));
        }
    });

    /*--------------------  
    Category more toggle  
    ----------------------*/

    $(".category-menu li.hidden").hide();
    $("#more-btn").on('click', function (e) {

        e.preventDefault();
        $(".category-menu li.hidden").toggle(500);
        var htmlAfter = '<i class="ion-ios-minus-empty" aria-hidden="true"></i> Less Categories';
        var htmlBefore = '<i class="ion-ios-plus-empty" aria-hidden="true"></i> More Categories';


        if ($(this).html() == htmlBefore) {
            $(this).html(htmlAfter);
        } else {
            $(this).html(htmlBefore);
        }
    });


    /**********************
     * Price Range
     ***********************/
    $("#slider-range").slider({
      range: true,
      orientation: "horizontal",
      min: 0,
      max: 1000,
      values: [0, 1000],
      step: 100,
    
      slide: function (event, ui) {
        if (ui.values[0] == ui.values[1]) {
          return false;
        }
        
        $("#min_price").val(ui.values[0]);
        $("#max_price").val(ui.values[1]);
      }
    });


    /**********************
     * Hero Slider
     ***********************/
    var heroSlider = new Swiper('.hero-slider', {
        slidesPerView: 1,
        effect: "fade",
        speed: 1500,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    /*********************************************
     * Product Slider - Counter 5 Grid  [Home - 1]
     *********************************************/
    var productCounterSlider = new Swiper('.product-counter-slider', {
        slidesPerView: 5,
        spaceBetween: 0,
        speed: 500,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          }
    });

    /*********************************************
     * Product Slider - Counter 4 Grid  [Home - 3]
     *********************************************/
    var productCounterSlider4Grid = new Swiper('.product-counter-slider-4grid', {
      slidesPerView: 4,
      spaceBetween: 20,
      speed: 500,

      navigation: {
          nextEl: '.text__nav--next',
          prevEl: '.text__nav--prev',
      },

      breakpoints: {
          0: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 2,
          },
          700: {
            slidesPerView: 3,
          },
          768: {
            slidesPerView: 2,
          },
          992: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 4,
          },
        }
    });

    /*********************************************
     * Product Slider - Counter 4 Grid  [Home - 4]
     *********************************************/
    var productCounterSlider1Grid = new Swiper('.product-counter-slider-1grid', {
      slidesPerView: 1,
      spaceBetween: 0,
      speed: 500,

      navigation: {
          nextEl: '.swiper-button-next ',
          prevEl: '.wiper-button-prev',
      },

      breakpoints: {
          0: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 2,
          },
          700: {
            slidesPerView: 3,
          },
          768: {
            slidesPerView: 3,
          },
          992: {
            slidesPerView: 1,
          },
          1200: {
            slidesPerView: 1,
          },
        }
    });

    /**********************************************
     * Product Slider - Category 5 Grid  [Home - 1]
     **********************************************/
    var productCategorySlider = new Swiper('.product-category-slider', {
        slidesPerView: 5,
        spaceBetween: 30,
        speed: 400,
        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          }
    });

    /********************************************
     * Large Product Slider - 2 Grid [Home - 1]
     ********************************************/
    var productlargeSlider = new Swiper('.large-product-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        } 
    });


    /******************************************************
     * Default Product Slider - Default - 5 Grid [Home - 1]
     ******************************************************/
    var productDefaultSlider5Grid = new Swiper('.product-default-slider-5grid', {
        slidesPerView: 5,
        spaceBetween: 0,
        speed: 500,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          }
    });

    /******************************************************
     * Default Product Slider - Default - 5 Grid 2 row [Home - 2]
     ******************************************************/
    var productDefaultSlider5Grid2Row = new Swiper('.product-default-slider-5grid-2row', {
        slidesPerView: 5,
        spaceBetween: 0,
        speed: 500,
        slidesPerGroup:5,
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          }
     });

    /******************************************************
     * Default Product Slider - Default - 4 Grid [Home - 1]
     ******************************************************/
    var productDefaultSlider4Grid = new Swiper('.product-default-slider-4grid', {
        slidesPerView: 4,
        spaceBetween: 0,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 3,
            },
            1200: {
              slidesPerView: 4,
            },
          }
    });

    /******************************************************
    * Default Product Slider - Default - 4 Grid 2 row [Home - 4]
    ******************************************************/
    var productDefaultSlider4Grid2Row = new Swiper('.product-default-slider-4grid-2row', {
      slidesPerView: 4,
      spaceBetween: 0,
      speed: 500,
      slidesPerGroup:4,
      slidesPerColumn: 2,
      slidesPerColumnFill: 'row',

      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },

      breakpoints: {
          0: {
            slidesPerView: 1,
          },
          480: {
            slidesPerView: 2,
          },
          768: {
            slidesPerView: 3,
          },
          992: {
            slidesPerView: 3,
          },
          1200: {
            slidesPerView: 4,
          },
        }
    });


    /******************************************************
     * Testimonial Slider - Small [Home - 1]
     ******************************************************/
    var testimonialSmall = new Swiper('.testimonial--small', {

        slidesPerView: 1,
        spaceBetween: 0,
        speed: 500,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    /******************************************************
     * Blog Slider - Small [Home - 1]
     ******************************************************/
    var blogNews3Grid = new Swiper('.blog-news-3grid', {
        slidesPerView: 3,
        spaceBetween: 30,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 1,
            },
            576: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
          }
    });
    /******************************************************
     * Blog Slider - Small [Home - 4]
     ******************************************************/
    var blogNews1Grid = new Swiper('.blog-news-1grid', {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 500,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
                slidesPerView: 1,
            }
          }
    });

    /******************************************************
     * Company Slider - [Home - 1]
     ******************************************************/
    var swiper = new Swiper('.company-logo__area', {
        slidesPerView: 5,
        slidesPerGroup:6,
        slidesPerColumn: 2,
        slidesPerColumnFill: 'row',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          }
    });

    /******************************************************
     * Segment Product Slider - [Home - 2]
     ******************************************************/
    var productDefaultSliderSegment = new Swiper('.product-segment-slider', {
        slidesPerView: 1,
        speed: 500,
        slidesPerColumn: 3,
        slidesPerColumnFill: 'row',

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 1,
            },
            575: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 2,
            },
            992: {
              slidesPerView: 1,
            },
            1200: {
              slidesPerView: 1,
            },
          }
    });
    /******************************************************
     * Segment Product Slider - [Home - 2]
     ******************************************************/
    var productDefaultSliderSegment2 = new Swiper('.product-segment-slider-2', {
        slidesPerView: 1,
        speed: 500,
        slidesPerColumn: 3,
        slidesPerColumnFill: 'row',

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 1,
            },
            575: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 1,
            },
            1200: {
              slidesPerView: 1,
            },
          }
    });

    /******************************************************
     * Product Gallery - Horizontal
     ******************************************************/
    var galleryThumbsHorizontal = new Swiper('.product-image--thumb-horizontal ', {
      
      spaceBetween: 10,
      slidesPerView: 4,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
      
    });

     /******************************************************
     * Product Gallery - Verticel
     ******************************************************/
    var galleryThumbsVertical = new Swiper('.product-image--thumb-vertical ', {
      direction: 'vertical',
      centeredSlidesBounds: true,
      slidesPerView: 4,
      watchOverflow: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      spaceBetween: 10,
      freeMode: true,
    });

     /******************************************************
     * Product Gallery - Single SLide
     ******************************************************/
    var gallerySingleSlide = new Swiper('.product-image--single-slide ', {
      centeredSlidesBounds: true,
      slidesPerView: 5,
      watchOverflow: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      spaceBetween: 10,
      freeMode: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
            0: {
              slidesPerView: 1,
            },
            480: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 5,
            },
          }
    });


    /******************************************************
     * Quickview Product Gallery - Horizontal
     ******************************************************/
    $(".modal").on('show.bs.modal', function() {
      setTimeout(function() {
        var modalGalleryThumbs = new Swiper('.modal-product-image--thumb', {
          spaceBetween: 10,
          slidesPerView: 4,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },

          breakpoints: {
            0: {
              slidesPerView: 2,
            },
            480: {
              slidesPerView: 2,
            },
            575: {
              slidesPerView: 4,
            },
            768: {
              slidesPerView: 3,
            },
            992: {
              slidesPerView: 4,
            },
            1200: {
              slidesPerView: 4,
            },
          }
        });

        var modalGalleryTop = new Swiper('.modal-product-image--large', { 
          thumbs: {
            swiper: modalGalleryThumbs
          }
        });
      }, 1000);
  });

  /******************************************************
  *  Product Gallery - Image Zoom
  ******************************************************/
  $("#img-zoom").elevateZoom({
        gallery: "gallery-zoom",
        galleryActiveClass: "zoom-active",
        constrainSize:274, 
        zoomType: "lens", 
        containLensZoom: true,
    });


  /******************************************************
     * Blog Slider - Single Slide
     ******************************************************/
    var blogSlider = new Swiper('.blog__slider', {
      slidesPerView: 1,
      
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    /******************************************************
     * Video Popup
     ******************************************************/
    $('.vinobox-popup').venobox();


    /*---------------------
        Countdown
    --------------------- */
    $('[data-countdown]').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<span class="cdown day">%-D <p>Days</p></span> <span class="cdown hour">%-H <p>Hours</p></span> <span class="cdown minutes">%M <p>Mins</p></span> <span class="cdown second">%S <p>Sec</p></span>'));
        });
    });

    /*-------------------------------
        Create an account toggle
    ---------------------------------*/
    $(".creat-account").on("click", function () {
      $(".open-create-account").slideToggle(1000);
    });

    $(".shipping-account").on("click", function () {
      $(".open-shipping-account").slideToggle(1000);
    });

    /*----------------------------------
        Scroll To Top Active
    -----------------------------------*/
    $('body').materialScrollTop();

})(jQuery);
