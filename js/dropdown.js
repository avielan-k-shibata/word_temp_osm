

$(function () {
  $('span.stylebook').click(function() {
    // メニュー表示/非表示
    $(this).next('ul.stylebook1').slideToggle('fast');
  });

  //　マウスカーソルの位置（メニュー上/メニュー外）
  $('span.stylebook,ul.stylebook1').hover(function(){
    over_flg = true;
  }, function(){
    over_flg = false;
  });
  
  // メニュー領域外をクリックしたらメニューを閉じる
  $('body').click(function() {
    if (over_flg == false) {
      $('ul.stylebook1').slideUp('fast');
    }
  });
    // メニュー領域外をクリックしたらメニューを閉じる
  $('li.stylebookclose').click(function() {
     {
      $('ul.stylebook1').slideUp('fast');
    }
  });
});