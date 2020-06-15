jQuery(window).scroll(function () {
  var scroll = jQuery(window).scrollTop();

  if (scroll >= 50) {
    jQuery(".header").addClass("scrolled");
  } else {
    jQuery(".header").removeClass("scrolled");
  }
});

jQuery(document).ready(function () {
  var rangeSliderBreak = document.getElementById('slider-range-break');
  var rangeSliderMeat = document.getElementById('slider-range-meat');
  var rangeSliderVege = document.getElementById('slider-range-vege');

  if (rangeSliderBreak){
    noUiSlider.create(rangeSliderBreak, {
      start: [1],
      step: 1,
      connect: [true, false],
      tooltips: wNumb({ decimals: 0 }),
      range: {
        'min': [1],
        'max': [10]
      },
      pips: {
        mode: 'values',
        values: [1, 2, 5, 10],
        density: [10, 20, 50, 100]
      }
    });
    noUiSlider.create(rangeSliderMeat, {
      start: [1],
      step: 1,
      connect: [true, false],
      tooltips: wNumb({ decimals: 0 }),
      range: {
        'min': [1],
        'max': [10]
      },
      pips: {
        mode: 'values',
        values: [1, 2, 5, 10],
        density: [10, 20, 50, 100]
      }
    });
    noUiSlider.create(rangeSliderVege, {
      start: [1],
      step: 1,
      connect: [true, false],
      tooltips: wNumb({ decimals: 0 }),
      range: {
        'min': [1],
        'max': [10]
      },
      pips: {
        mode: 'values',
        values: [1, 2, 5, 10],
        density: [10, 10, 40, 50]
      }
    });
  }
  
  let sum = 0;
  let sumPrice = 0;
  let a;
  let b;
  let c;
  let ids = "";

  jQuery( rangeSliderBreak ).mouseup(function() {
    a = jQuery("#slider-range-break .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    b = jQuery("#slider-range-meat .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    c = jQuery("#slider-range-vege .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    
    a = a.substring(0, a.length - 2);
    b = b.substring(0, b.length - 2);
    c = c.substring(0, c.length - 2);
    
    a = parseInt(a, 10);
    b = parseInt(b, 10);
    c = parseInt(c, 10);
    
    sum = a + b + c;

    sumPrice = (a*8)+(b*10)+(c*9);

    jQuery("#mealsCount").empty();
    jQuery("#mealsCount").append(sum);
    
    jQuery("#mealsPriceTotal").empty();
    jQuery("#mealsPriceTotal").append(sumPrice);
    if (sum >= 10){
      jQuery("#choosePlansContinue").prop("disabled", false);
    } else {
      jQuery("#choosePlansContinue").prop("disabled", true);
    }
  });

  jQuery( rangeSliderMeat ).mouseup(function() {
    a = jQuery("#slider-range-break .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    b = jQuery("#slider-range-meat .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    c = jQuery("#slider-range-vege .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    
    a = a.substring(0, a.length - 2);
    b = b.substring(0, b.length - 2);
    c = c.substring(0, c.length - 2);
    
    a = parseInt(a, 10);
    b = parseInt(b, 10);
    c = parseInt(c, 10);
    
    sum = a + b + c;

    sumPrice = (a*8)+(b*10)+(c*9);

    jQuery("#mealsCount").empty();
    jQuery("#mealsCount").append(sum);
    
    jQuery("#mealsPriceTotal").empty();
    jQuery("#mealsPriceTotal").append(sumPrice);
    if (sum >= 10){
      jQuery("#choosePlansContinue").prop("disabled", false);
    } else {
      jQuery("#choosePlansContinue").prop("disabled", true);
    }
  });

  jQuery( rangeSliderVege ).mouseup(function() {
    a = jQuery("#slider-range-break .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    b = jQuery("#slider-range-meat .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    c = jQuery("#slider-range-vege .noUi-base .noUi-origin .noUi-handle").attr('aria-valuenow');
    
    a = a.substring(0, a.length - 2);
    b = b.substring(0, b.length - 2);
    c = c.substring(0, c.length - 2);
    
    a = parseInt(a, 10);
    b = parseInt(b, 10);
    c = parseInt(c, 10);
    
    sum = a + b + c;

    sumPrice = (a*8)+(b*10)+(c*9);

    jQuery("#mealsCount").empty();
    jQuery("#mealsCount").append(sum);
    
    jQuery("#mealsPriceTotal").empty();
    jQuery("#mealsPriceTotal").append(sumPrice);

    if (sum >= 10){
      jQuery("#choosePlansContinue").prop("disabled", false);
    } else {
      jQuery("#choosePlansContinue").prop("disabled", true);
    }
  });

  jQuery( "#choosePlansContinue" ).click(function() {

    jQuery( "#choosePlansContinue" ).attr( "disabled", true );
    jQuery( "#choosePlansContinue" ).hide();
    jQuery( "#spinerBtn" ).show();

    for (var i = 0; i<a; i++){
      ids = ids + '50,';
    }
    for (var y = 0; y<c; y++){
      ids = ids + '52,';
    }
    for (var x = 0; x<b; x++){
      ids = ids + '51,';
    }
    var url = window.location.href;
    ids = ids.substring(0, ids.length - 1);
    jQuery.get(url+'?add-to-cart='+ids, function() {});
    
    setTimeout(function(){ 
      window.location.href = document.location.origin+"/moolay/meals-subscribe/";
    }, 3000);
  });

  jQuery( "#beef" ).click(function() {
    jQuery(this).addClass('active');
    jQuery("#chicken").removeClass('active');
    jQuery("#turkey").removeClass('active');
    jQuery("#fish").removeClass('active');
    jQuery("#vege").removeClass('active');
    
    jQuery("#beefWrap").show();
    jQuery("#chickenWrap").hide();
    jQuery("#turkeyWrap").hide();
    jQuery("#fishWrap").hide();
    jQuery("#vegeWrap").hide();
  });
  jQuery( "#chicken" ).click(function() {
    jQuery(this).addClass('active');
    jQuery("#beef").removeClass('active');
    jQuery("#turkey").removeClass('active');
    jQuery("#fish").removeClass('active');
    jQuery("#vege").removeClass('active');
    
    jQuery("#chickenWrap").show();
    jQuery("#beefWrap").hide();
    jQuery("#turkeyWrap").hide();
    jQuery("#fishWrap").hide();
    jQuery("#vegeWrap").hide();
  });
  jQuery( "#turkey" ).click(function() {
    jQuery(this).addClass('active');
    jQuery("#beef").removeClass('active');
    jQuery("#chicken").removeClass('active');
    jQuery("#fish").removeClass('active');
    jQuery("#vege").removeClass('active');
    
    jQuery("#turkeyWrap").show();
    jQuery("#beefWrap").hide();
    jQuery("#chickenWrap").hide();
    jQuery("#fishWrap").hide();
    jQuery("#vegeWrap").hide();
  });
  jQuery( "#fish" ).click(function() {
    jQuery(this).addClass('active');
    jQuery("#beef").removeClass('active');
    jQuery("#chicken").removeClass('active');
    jQuery("#turkey").removeClass('active');
    jQuery("#vege").removeClass('active');
    
    jQuery("#fishWrap").show();
    jQuery("#beefWrap").hide();
    jQuery("#chickenWrap").hide();
    jQuery("#turkeyWrap").hide();
    jQuery("#vegeWrap").hide();
  });
  jQuery( "#vege" ).click(function() {
    jQuery(this).addClass('active');
    jQuery("#beef").removeClass('active');
    jQuery("#chicken").removeClass('active');
    jQuery("#turkey").removeClass('active');
    jQuery("#fish").removeClass('active');
    
    jQuery("#vegeWrap").show();
    jQuery("#beefWrap").hide();
    jQuery("#chickenWrap").hide();
    jQuery("#turkeyWrap").hide();
    jQuery("#fishWrap").hide();
  });

  jQuery( "#continueToCustomizeOneTime" ).click(function() {
    var selected = '';
    var flag;
    var url = window.location.href;
    jQuery('#oneTimeWrap input:checked').each(function() {
        var id = jQuery(this).attr('product-id');
        if (jQuery("."+id).val()){
          for (var i = 1; i <= jQuery("."+id).val(); i++){
            selected = selected + ',' + jQuery(this).attr('product-id'); 
          }
        } else {
          flag = 1;
        }
    });
    if (flag == 1){
      jQuery( "#errorMessageOnetime" ).show();
    } else {
      selected = selected.substr(1);
      jQuery.get(url+'?add-to-cart='+selected, function() {});
      jQuery( "#continueToCustomizeOneTime" ).hide();
      jQuery( "#spinerBtn" ).show();
      setTimeout(function(){ 
        window.location.href = document.location.origin+"/moolay/cart/";
      }, 3000);
      
    }
  });

  jQuery( "#continueToCustomizeSubscription" ).click(function() {
    var selected = '';
    var flag;
    var url = window.location.href;
    jQuery('#subscribeTimeWrap input:checked').each(function() {
        var id = jQuery(this).attr('product-id');
        if (id){
          selected = selected + ',' + jQuery(this).attr('product-id'); 
        } else {
          flag = 1;
        }
    });
    if (flag == 1){
      jQuery( "#errorMessageSubscribe" ).show();
    } else {
      selected = selected.substr(1);
      jQuery.get(url+'?add-to-cart='+selected, function() {});
      window.location.href = document.location.origin+"/moolay/cart/";
      console.log(selected);
    }
  });

});
