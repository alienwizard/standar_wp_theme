$(function(){  
    var i =0;
    var images = ['img/banner.jpg','img/banner2.jpg'];
    var image = $('.banner');
    image.css('background-image', 'url(img/banner.jpeg)');
    setInterval(function(){  
        image.fadeOut(2000, function () {
            image.css('background-image', 'url(' + images[i] +')');
            image.fadeIn(2000);
        });
        if(i == (images.length - 1)){
            i = 0; 
        } else {
            i++;
        }
    }, 5000);
})