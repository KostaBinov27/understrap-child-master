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


  noUiSlider.create(rangeSliderBreak, {
    start: [10],
    step: 1,
    connect: [true, false],
    tooltips: wNumb({ decimals: 0 }),
    range: {
      'min': [10],
      'max': [100]
    },
    pips: {
      mode: 'values',
      values: [10, 20, 50, 100],
      density: [10, 20, 50, 100]
    }
  });
  noUiSlider.create(rangeSliderMeat, {
    start: [10],
    step: 1,
    connect: [true, false],
    tooltips: wNumb({ decimals: 0 }),
    range: {
      'min': [10],
      'max': [100]
    },
    pips: {
      mode: 'values',
      values: [10, 20, 50, 100],
      density: [10, 20, 50, 100]
    }
  });
  noUiSlider.create(rangeSliderVege, {
    start: [10],
    step: 1,
    connect: [true, false],
    tooltips: wNumb({ decimals: 0 }),
    range: {
      'min': [10],
      'max': [100]
    },
    pips: {
      mode: 'values',
      values: [10, 20, 50, 100],
      density: [10, 10, 40, 50]
    }
  });
})

