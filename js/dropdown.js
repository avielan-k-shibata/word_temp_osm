

$(function () {
  $('span.stylebook').click(function() {
    // ���j���[�\��/��\��
    $(this).next('ul.stylebook1').slideToggle('fast');
  });

  //�@�}�E�X�J�[�\���̈ʒu�i���j���[��/���j���[�O�j
  $('span.stylebook,ul.stylebook1').hover(function(){
    over_flg = true;
  }, function(){
    over_flg = false;
  });
  
  // ���j���[�̈�O���N���b�N�����烁�j���[�����
  $('body').click(function() {
    if (over_flg == false) {
      $('ul.stylebook1').slideUp('fast');
    }
  });
    // ���j���[�̈�O���N���b�N�����烁�j���[�����
  $('li.stylebookclose').click(function() {
     {
      $('ul.stylebook1').slideUp('fast');
    }
  });
});