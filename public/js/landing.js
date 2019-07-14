var buttonHide  = false;

$(document).ready(function(){
    $('.slider-item').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    

    $('#btnSend').click(function(){
      var firstName = $('#firstName').val();
      var lastName = $('#lastName').val();
      var msg = $('#msg').val();
      console.log(firstName);
      console.log(lastName);
      console.log(msg);
    });

    $('#left-toggle').click(function(){
      // $('#btn-toggle').toggle();
      var ukHide = '-3px';
      var ukArr = '-5px';

      if(buttonHide == true){
        ukHide = '40px';
        ukArr = '28px';
      }else{
        ukHide = '-3px';
        ukArr = '-5px';
      }
      buttonHide = !buttonHide;

      $('#btn-toggle').animate({
        width : ukHide
      });
      $('#left-toggle').animate({
        right: ukArr
      });

    });

    

});