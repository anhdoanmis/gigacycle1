jQuery(document).ready(function($){ 

    $('.menu-area.mobile .menu-item-has-children>a').after('<span class="mobile_arrow"><i class="qodef-sub-arrow fa fa-angle-right"></i><i class="fa fa-angle-down"></i></span>');
     $( "body" ).on( "click", ".mobile_arrow", function() {
        if ( $( this).parent().find('.toggled-on' )[0] ) {
            
            $( this).parent().find('.toggled-on' ).removeClass('toggled-on');
            $( this).find(' i:first-child').show();
              $( this).find(' i:last-child').hide();
            $(this).parent().find('.sub-menu').slideToggle( "slow", function() {
                // Animation complete.
              });
            
        } else {
            $( this).addClass('toggled-on');
            $(this).parent().find('.sub-menu').slideToggle( "slow", function() {
                // Animation complete.
              });
              $( this).find(' i:first-child').hide();
              $( this).find(' i:last-child').show();
        }
        });
//if($('.menu-area.cloned').siblings('#myIframe:first').length == 0)
//$('.menu-area').addClass('original').clone().insertAfter('.menu-area').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();

    scrollIntervalID = setInterval(stickIt, 10);
    
    
    function stickIt() {
    
      var orgElementPos = $('.original').offset();
      orgElementTop = orgElementPos.top;               
    
      if ($(window).scrollTop() >= (orgElementTop)) {
        // scrolled past the original position; now only show the cloned, sticky element.
    
        // Cloned element should always have same left position and width as original element.     
        orgElement = $('.original');
        coordsOrgElement = orgElement.offset();
        leftOrgElement = coordsOrgElement.left;  
        widthOrgElement = orgElement.css('width');
        $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
        $('.original').css('visibility','hidden');
      } else {
        // not scrolled past the menu; only show the original menu.
        $('.cloned').hide();
        $('.original').css('visibility','visible');
      }
    }
    
 $( "body" ).on( "click", ".cloned .qodef-search-opener", function() {

    $('.cloned form.qodef-search-cover').show();
    //alert('ok');
});
 $( "body" ).on( "click", ".cloned .qodef-search-close", function() {

    $('.cloned form.qodef-search-cover').hide();
    //alert('ok');
});
$( "body" ).on( "click", ".original .qodef-search-opener", function() {

    $('.original form.qodef-search-cover').show();
    //alert('ok1');
});
 $( "body" ).on( "click", ".original .qodef-search-close", function() {

    $('.original form.qodef-search-cover').hide();
    //alert('ok1');
});
   
    $(".home .section_2 .col_1 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    });
    $(".home .section_2 .col_2 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    });
    $(".home .section_2 .col_3 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    });
    $(".home .section_2 .col_4 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    });
    $(".collection_1 .col_1 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    });
    $(".collection_1 .col_2 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    }); 
    $(".collection_1 .col_3 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    }); 
    $(".collection_1 .col_4 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    }); 
    $(".collection_1 .col_5 .elementor-widget-wrap").flip({
        trigger: 'hover' ,speed: 200
    }); 
    $(".collection_1 .col_6 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    });
    $(".collection_1 section:nth-child(2) .col_7 .elementor-widget-wrap").flip({
        trigger: 'hover' ,speed: 200
    });
    $(".collection_1 .col_8 .elementor-widget-wrap").flip({
        trigger: 'hover' ,speed: 200
    }); 
    $(".collection_1 .col_9 .elementor-widget-wrap").flip({
        trigger: 'hover' ,speed: 200
    }); 
    $(".collection_1 .col_10 .elementor-widget-wrap").flip({
        trigger: 'hover' ,speed: 200
    }); 
    $(".collection_1 .col_11 .elementor-widget-wrap").flip({
        trigger: 'hover',speed: 200
    }); 
    $(".collection_1 .col_12 .elementor-widget-wrap").flip({
        trigger: 'hover' ,speed: 200
    }); 
    
    $("input#user_login").attr("placeholder","Email Address");
    $("input#user_pass").attr("placeholder","Password");
    /*   
    //$('.home .section_3 .col_1 .elementor-icon i').addClass('circle');        
    $('.page .section_3 .col_1').on({
        mouseenter: function(){
            $('.page .section_3 .col_1 .elementor-icon-wrapper i').addClass('shake-little');  
            $('.page .section_3 .col_1 .elementor-icon-wrapper i').addClass('shake-constant'); 
        },
        mouseleave: function(){
            $('.page .section_3 .col_1 .elementor-icon-wrapper i').removeClass('shake-little');
             $('.page .section_3 .col_1 .elementor-icon-wrapper i').removeClass('shake-constant');
        }
    });
    //$('.home .section_3 .col_2 .elementor-icon i').addClass('circle');        
    $('.page .section_3 .col_2').on({
        mouseenter: function(){
            $('.page .section_3 .col_2 .elementor-icon-wrapper i').addClass('shake-little');  
            $('.page .section_3 .col_2 .elementor-icon-wrapper i').addClass('shake-constant'); 
        },
        mouseleave: function(){
            $('.page .section_3 .col_2 .elementor-icon-wrapper i').removeClass('shake-little');
             $('.page .section_3 .col_2 .elementor-icon-wrapper i').removeClass('shake-constant');
        }
    });
    $('.page .section_3 .col_3 .elementor-icon i').addClass('icon-notebook');        
    $('.page .section_3 .col_3').on({
        mouseenter: function(){
            $('.page .section_3 .col_3 .elementor-icon-wrapper i').addClass('shake-little');  
            $('.page .section_3 .col_3 .elementor-icon-wrapper i').addClass('shake-constant'); 
        },
        mouseleave: function(){
            $('.page .section_3 .col_3 .elementor-icon-wrapper i').removeClass('shake-little');
             $('.page .section_3 .col_3 .elementor-icon-wrapper i').removeClass('shake-constant');
        }
    });
    //$('.home .section_3 .col_4 .elementor-icon i').addClass('circle');        
    $('.page .section_3 .col_4').on({
        mouseenter: function(){
            $('.page .section_3 .col_4 .elementor-icon-wrapper i').addClass('shake-little');  
            $('.page .section_3 .col_4 .elementor-icon-wrapper i').addClass('shake-constant'); 
        },
        mouseleave: function(){
            $('.page .section_3 .col_4 .elementor-icon-wrapper i').removeClass('shake-little');
             $('.page .section_3 .col_4 .elementor-icon-wrapper i').removeClass('shake-constant');
        }
    });
    //$('.home .section_3 .col_5 .elementor-icon i').addClass('circle');        
    $('.page .section_3 .col_5').on({
        mouseenter: function(){
            $('.page .section_3 .col_5 .elementor-icon-wrapper i').addClass('shake-little');  
            $('.page .section_3 .col_5 .elementor-icon-wrapper i').addClass('shake-constant'); 
        },
        mouseleave: function(){
            $('.page .section_3 .col_5 .elementor-icon-wrapper i').removeClass('shake-little');
             $('.page .section_3 .col_5 .elementor-icon-wrapper i').removeClass('shake-constant');
        }
    });
    */
    //$(".home .elementor-tab-title").removeClass("elementor-active");
    
     $( "body" ).on( "click", ".menu-area.mobile .bars", function() {
        if ( $( '.menu-area.mobile .toggled-on' )[0] ) {
            
            $( '.menu-area.mobile .toggled-on' ).removeClass('toggled-on');
            $('.main-navigation ul.nav-menu').slideToggle( "slow", function() {
                // Animation complete.
              });
        } else {
            $( '.menu-area.mobile .bars' ).addClass('toggled-on');
            $('.main-navigation ul.nav-menu').slideToggle( "slow", function() {
                // Animation complete.
              });
        }
        });
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
              $("#qodef-back-to-top").removeClass("off");
              $("#qodef-back-to-top").addClass("on");
          } else {
              $("#qodef-back-to-top").removeClass("on");
              $("#qodef-back-to-top").addClass("off");
          }
      }
      $('#qodef-back-to-top').click(function(){
          $('html, body').animate({scrollTop:0}, 'slow');
      });
   
});