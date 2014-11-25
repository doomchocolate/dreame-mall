/**
 * Created with JetBrains PhpStorm.
 * User: Administrator
 * Date: 7/2/13
 * Time: 1:34 PM
 * To change this template use File | Settings | File Templates.
 */

function TzTemplateResizeImage(obj){


    var widthStage;
    var heightStage ;
    var widthImage;
    var heightImage;
    obj.each(function (i,el){
        var featureboolean = jQuery(el).find('.TzPortfolioMedia').hasClass('TZPorfolioMedium');
       if(featureboolean == true){
           heightStage = jQuery(el).find('.TZPorfolioMedium').height();
       }
        if(featureboolean == false){

            heightStage = jQuery(this).parent('.TzInner').height();

        }


        widthStage = jQuery (this).width();
//        heightStage = jQuery (this).height();
        widthImage = jQuery(this).find('img').width();
        heightImage = jQuery(this).find('img').height();
        //alert(widthStage);


        //alert(widthImage + ' ' + heightImage + ' ' + widthStage + ' ' + mediaHeight);
//        alert(mediaHeight);

        var tzimg	=	new resizeImage(widthImage, heightImage, widthStage, heightStage);
        //alert(tzimg.top,tzimg.left);
        jQuery(this).find('img').css ({ top: tzimg.top, left: tzimg.left, width: tzimg.width, height: tzimg.height });
    });

}

