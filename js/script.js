









    jQuery(function(){
     
      jQuery('#camera_wrap_1').camera({
       transPeriod: 1500,     
      pagination: true,
      thumbnails: false,
      navigation: false,
       playPause: false
      });
    });


 

  var second = new Date().getTime() / 1000;
    $('document').ready(function() {
        
        
        $('.countdown').final_countdown({
            'start': second,
            'end': 1488326400,
            'now': second ,
           hours: {
                borderColor: '#e74c3c',
                 borderWidth: '4'
                  },
           days: {
                borderColor: '#FF9900',
                 borderWidth: '4'
                  },
            seconds: {
                borderColor: '#3498db',
                 borderWidth: '4'
                  },  
            minutes: {
                borderColor: '#27ae60',
                 borderWidth: '4'
                  },                 

          });
        });