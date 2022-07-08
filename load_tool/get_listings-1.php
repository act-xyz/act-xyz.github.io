/**
 * Free Seller Tools (c) 2014
 * Script: Dynamic eBay Listings
 * Version: 1.0
 * URL: http://www.freesellertools.com
 * Author: @craigcosford
 * 
 */
function get_listings() {
 
if(!window.jQuery) {
   var script = document.createElement('script');
   script.type = "text/javascript";
   script.src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js";
   script.onload = script.onreadystatechange = function () {
	$(document).ready(function () {
	$('head').append('<link rel="stylesheet" href="https://www.freesellertools.com/load_tool/css/carousel.css.php?font=Ubuntu&items_row=3" type="text/css" />');
	});
}; 
   document.getElementsByTagName('head')[0].appendChild(script);
} else { 
jQuery('head').append('<link rel="stylesheet" href="https://www.freesellertools.com/load_tool/css/carousel.css.php?font=Ubuntu&items_row=3" type="text/css" />');
jQuery('head').append('<link rel="stylesheet" href="https://www.freesellertools.com/load_tool/js/owl-carousel/owl.carousel.css">');
jQuery('head').append('<link rel="stylesheet" href="https://www.freesellertools.com/load_tool/js/owl-carousel/owl.theme.css">');
//$('head').append('<script src="https://freesellertools.com/load_tool/js/owl-carousel/owl.carousel.min.js" ></script>');

var script = document.createElement( 'script' );
script.type = 'text/javascript';
script.src = 'https://www.freesellertools.com/load_tool/js/owl-carousel/owl.carousel.min.js';
script.onload = script.onreadystatechange = function () {
if (jQuery.isFunction(jQuery.fn.owlCarousel)) { 
var slider = jQuery(".ebay_items").owlCarousel({ 
items: 3, 
autoPlay : false, 
navigation: false, 
pagination: false
});   
jQuery("#promo-next").click(function(){
    slider.trigger('owl.next');
  })
  jQuery("#promo-prev").click(function(){
    slider.trigger('owl.prev');
  })
    jQuery("#promo-play").click(function(){
    slider.trigger('owl.play',2000); //owl.play event accept autoPlay speed as second parameter
  })
  jQuery("#promo-stop").click(function(){
    slider.trigger('owl.stop');
  })
} 
};
document.getElementsByTagName('head')[0].appendChild(script); 
}; 


var output="<div class=\"ebay_items-header\">Airedale Computer Recycling</div>"; 
output+='<div class=\"gallery_grid_wrapper\">'; 
output+="<div class='grid_gallery'>";

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165665423&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/iS4AAOSwPGlixCur/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165665423&page=listing' target='_blank' title='Kramer VS-41H 4-way HDMI Switcher'>Kramer VS-41H 4-way HDMI Switcher</a></div>"; 
output+="<div class='item_price'>&pound;50.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 17m 30s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115455315137&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/iLYAAOSwEidixCc0/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115455315137&page=listing' target='_blank' title='Crestron DM-MD6X4 DigitalMedia Distribution Center'>Crestron DM-MD6X4 DigitalMedia&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;199.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 58m 22s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165728033&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/bvsAAOSwkeJixDu-/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165728033&page=listing' target='_blank' title='Ampetronic ILD 500 Audio Induction Loop Driver Amplifier'>Ampetronic ILD 500 Audio Induction&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;199.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 27m 23s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115455378368&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/awsAAOSwsKtixDih/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115455378368&page=listing' target='_blank' title='Kramer VM-8H 8-way HDMI Distribution Amplifier'>Kramer VM-8H 8-way HDMI&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;99.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 12m 46s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373937693653&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/UDsAAOSw6zliD35m/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373937693653&page=listing' target='_blank' title='10 X 320gb 2.5” sata hard drives. various makes '>10 X 320gb 2.5” sata hard drives.&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;40.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 9d 14m 2s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165503118&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/9t8AAOSwAVBixAOk/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165503118&page=listing' target='_blank' title='Onkyo TX-NR818 7.2 Channel AV Receiver amp black home cinema HDMI'>Onkyo TX-NR818 7.2 Channel AV&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;200.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 29m 7s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=372041546668&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/hJYAAOSwweRZjYM5/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=372041546668&page=listing' target='_blank' title='3.5&quot; SATA DESKTOP PC HDD Hard Drive 160GB, 250GB, 320GB VARIOUS BRANDS'>3.5&quot; SATA DESKTOP PC HDD Hard&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;5.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 2d 25m 7s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165623398&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/aV8AAOSwlUJixCVx/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374165623398&page=listing' target='_blank' title='Ecler MPA4-150R Multichannel 4x150W Power Amplifier'>Ecler MPA4-150R Multichannel 4x150W&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;200.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 51m 6s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373989077369&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/eLQAAOSwX5tiOwKh/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373989077369&page=listing' target='_blank' title='Lenovo ThinkPad L560 L570 15.6&quot; LED Screen SD10G84776'>Lenovo ThinkPad L560 L570&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;29.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 14d 21m 50s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287372967&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/hwgAAOSwv5JiKdZ9/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287372967&page=listing' target='_blank' title='Lenovo ThinkPad L570 Laptop LCD Screen Bezel '>Lenovo ThinkPad L570 Laptop LCD&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;12.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 46m 4s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115300697769&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/poEAAOSwQhZiNKIc/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115300697769&page=listing' target='_blank' title='SK Hynix HP 32GB KIT 4X8GB HMT31GR7EFR4C 2Rx4 PC3-12800R Server RAM Memory'>SK Hynix HP 32GB KIT 4X8GB&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;39.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 9d 16m 42s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114956920431&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/~LwAAOSwm0FhKMVC/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114956920431&page=listing' target='_blank' title='25 x Banbridge Inline Headphone Volume Control'>25 x Banbridge Inline Headphone&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;30.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 18d 3m 50s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=372807181749&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/QoYAAOSwY75dqC53/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=372807181749&page=listing' target='_blank' title='Brand-Rex 5m Cat6Plus UTP HF grey Patch / Network Ethernet Cable (40 in Box) '>Brand-Rex 5m Cat6Plus UTP HF grey&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;20.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 7m 36s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936498082&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/4dsAAOSw6mBiDkRm/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936498082&page=listing' target='_blank' title='Dell M8811 DA-2 series Charger 12V 18A  AC DC Adapter External Power Supply 220W'>Dell M8811 DA-2 series Charger 12V&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;24.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 52m 44s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115288973361&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/DCwAAOSwnKFiKyEG/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115288973361&page=listing' target='_blank' title='SK Hynix 32GB KIT 4X8GB HMT41GR7AFR4C 1Rx4 PC3-14900R Server RAM Memory'>SK Hynix 32GB KIT 4X8GB&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;36.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 2d 16m 3s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287369476&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/iEcAAOSwIt9iKdTD/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287369476&page=listing' target='_blank' title='Lenovo ThinkPad L560 L570 Rear Housing Back LCD Lid Cover Case Black'>Lenovo ThinkPad L560 L570 Rear&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;20.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 38m 41s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115364255509&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/AmYAAOSwi25ia6zT/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115364255509&page=listing' target='_blank' title='NEC  ME301X Projector Excellent Condition 1243 Hours used'>NEC  ME301X Projector Excellent&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;99.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 20d 28m 36s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373989060664&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/8XAAAOSwJ05iOv67/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373989060664&page=listing' target='_blank' title='Lenovo Thinkpad L560 Bottom Base Chassis Plastic Case AP1DH000C00'>Lenovo Thinkpad L560 Bottom Base&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;14.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 14d 5m 5s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074179798&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/zckAAOSwJgxhf6x6/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074179798&page=listing' target='_blank' title='Hitachi CP A222N 2200 Lumen'>Hitachi CP A222N 2200 Lumen</a></div>"; 
output+="<div class='item_price'>&pound;40.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 1m 39s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115448800674&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/yqAAAOSwHiNivbDE/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115448800674&page=listing' target='_blank' title='Legamaster penta 8402 85&quot; 4K UHD Touchscreen Display Monitor with remote'>Legamaster penta 8402 85&quot; 4K&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;1000.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 21d 21m 51s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115371779274&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/YEwAAOSwO5Zic5oi/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115371779274&page=listing' target='_blank' title='Panasonic Toughbook Motherboard and bottom case  FZ-G1 Tested working'>Panasonic Toughbook Motherboard and&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;80.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 27d 35m 50s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936504962&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/sdYAAOSwbj1iDkYH/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936504962&page=listing' target='_blank' title='Genuine HP PA-1231-66HH PA-1231-66HV AC Adapter Power Supply Charger PSU'>Genuine HP PA-1231-66HH&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;29.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 1m 6s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115389362558&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/lCIAAOSwUNdihitO/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115389362558&page=listing' target='_blank' title='Aten Altuscn KA7570 USB CPU Module KVM Adapter Cable'>Aten Altuscn KA7570 USB CPU Module&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;39.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 10d 35m 18s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115322465354&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/8ycAAOSw9HtiRsQN/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115322465354&page=listing' target='_blank' title='GENUINE Lenovo ThinkPad X240 Bottom Base Chasis Cover Housing SCB0A45714'>GENUINE Lenovo ThinkPad X240 Bottom&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;12.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 22m 23s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115255021753&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/3UAAAOSwIZNiDk1P/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115255021753&page=listing' target='_blank' title='Genuine Dell 130W 19.5V 6.7A Laptop Adapter Charger with UK Lead DA130PE1-00'>Genuine Dell 130W 19.5V 6.7A Laptop&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;11.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 30m 5s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936520640&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/cP0AAOSwkUJiDkqt/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936520640&page=listing' target='_blank' title='HP AC ADAPTER 481420-001 135W 19.5V 6.9A ROUND TIP CHARGER '>HP AC ADAPTER 481420-001 135W 19.5V&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;14.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 19m 8s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374104876776&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/Y64AAOSwm~5ilMEn/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374104876776&page=listing' target='_blank' title='Canon image FORMULA P-215II Compact Portable Mobile Colour Scanner'>Canon image FORMULA P-215II Compact&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;179.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 21d 7m 28s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074371024&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/qvIAAOSwgQlhf80f/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074371024&page=listing' target='_blank' title='Microsoft Surface 3 Docking Station Model: 1672 '>Microsoft Surface 3 Docking Station&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;35.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 21m 22s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373970040235&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/84oAAOSwoPRiKdva/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373970040235&page=listing' target='_blank' title='Lenovo ThinkPad L560 L570 HDD Caddy'>Lenovo ThinkPad L560 L570 HDD Caddy</a></div>"; 
output+="<div class='item_price'>&pound;7.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 8m 46s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374000790559&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/r7AAAOSwIV9iRtpR/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374000790559&page=listing' target='_blank' title='LENOVO THINKPAD L520 GENUINE SPEAKERS SPEAKER BAR 60Y3334'>LENOVO THINKPAD L520 GENUINE&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;9.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 57m 26s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287374572&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/aaYAAOSwb5xiKddk/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287374572&page=listing' target='_blank' title='Lenovo ThinkPad L560 L570 Laptop Fan Heatsink 01AY478'>Lenovo ThinkPad L560 L570 Laptop&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;12.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 50m 49s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373776160838&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/TYUAAOSwnCBhf67y/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373776160838&page=listing' target='_blank' title='Hitachi CP A2W259N  2500 Lumen'>Hitachi CP A2W259N  2500 Lumen</a></div>"; 
output+="<div class='item_price'>&pound;40.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 15m 32s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287371999&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/2KEAAOSwgOpiKdWY/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115287371999&page=listing' target='_blank' title='Lenovo ThinkPad L570 Touchpad DDHC001'>Lenovo ThinkPad L570 Touchpad&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;12.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 43m 5s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115359022126&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/e9YAAOSwHYZiZpnI/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115359022126&page=listing' target='_blank' title='Cipherlab 9600 Docking Station inc Charger and Data Cable'>Cipherlab 9600 Docking Station inc&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;49.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 16d 58m 18s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115322421588&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/f4cAAOSwivBiRrPi/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115322421588&page=listing' target='_blank' title='Dell Latitude 3410 07CR4F 7CR4F HDD Cable Hard Disk Interposer Caddy'>Dell Latitude 3410 07CR4F 7CR4F HDD&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;10.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 17m 3s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374066558176&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/nNUAAOSwgOBieOQ~/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374066558176&page=listing' target='_blank' title='Lenovo IBM ThinkPad Yoga X380 Palmrest with Touchpad and UK Keyboard QWERTY '>Lenovo IBM ThinkPad Yoga X380&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;49.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 0d 52m 46s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373971560220&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/JFsAAOSwFoZiKydK/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373971560220&page=listing' target='_blank' title='Micron 64GB KIT 4X8GB HMT36KSF2G72PZ 2Rx4 PC3L-12800R Server RAM Memory'>Micron 64GB KIT 4X8GB&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;50.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 2d 42m 6s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115307944957&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/B8UAAOSwnMRiOwNl/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115307944957&page=listing' target='_blank' title='Lenovo ThinkPad L560 Laptop LCD Screen Bezel '>Lenovo ThinkPad L560 Laptop LCD&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;14.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 14d 24m 59s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115322579202&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/IckAAOSwsJJiRtc2/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115322579202&page=listing' target='_blank' title='Lenovo Thinkpad L520 laptop DC Power Jack Cable Charging port P/N:45M2863'>Lenovo Thinkpad L520 laptop DC&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;8.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 43m 56s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374000757954&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/zLIAAOSwNs5iRtNR/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=374000757954&page=listing' target='_blank' title='ORIGINAL LED MATT SCREEN 15.6&quot; FOR IBM LENOVO THINKPAD L520 UK 0A66617'>ORIGINAL LED MATT SCREEN 15.6&quot;&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;29.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 27m 50s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115255045068&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/WkMAAOSw3~BiDlBp/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115255045068&page=listing' target='_blank' title=' Genuine DELL CN-09RN2C , 19.5V 3.34A 65W Charger'>Genuine DELL CN-09RN2C , 19.5V&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;15.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 43m 58s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373990764123&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/C6YAAOSwxyViPIBb/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373990764123&page=listing' target='_blank' title='Netgear Wag102 Dual Band Wireless Access Point'>Netgear Wag102 Dual Band Wireless&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;34.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 15d 30m 26s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373723416594&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/AS4AAOSwjiJhQwZE/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373723416594&page=listing' target='_blank' title='10 X HDMI to DVI-D CABLES 5M'>10 X HDMI to DVI-D CABLES 5M</a></div>"; 
output+="<div class='item_price'>&pound;50.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 7d 0m 38s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114007795307&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/tc8AAOSwJ~dd7kkY/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114007795307&page=listing' target='_blank' title='KRAMER - VP-242/UK - XGA Switcher /distribution amplifier 4 output.'>KRAMER - VP-242/UK - XGA Switcher&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;30.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 0d 23m 24s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373937841312&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/RIsAAOSwIZdiD5iI/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373937841312&page=listing' target='_blank' title=' 5 x Lenovo AC Adapters 65w 20v  Model No. ADLX65NCT3A'>5 x Lenovo AC Adapters 65w 20v &hellip;</a></div>"; 
output+="<div class='item_price'>&pound;50.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 9d 4m 40s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115064394887&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/f40AAOSwmAhhd86U/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115064394887&page=listing' target='_blank' title='Panosonic PT-LB10VE Projector VGA only'>Panosonic PT-LB10VE Projector VGA&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;30.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 17d 52m 27s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074395056&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/RAIAAOSwIDthf9Hk/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074395056&page=listing' target='_blank' title='Sahara  Active & Passive 2 x 15 Watts Speakers '>Sahara  Active & Passive 2 x 15&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;50.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 45m 44s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936613320&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/TZkAAOSwXthiDlhf/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373936613320&page=listing' target='_blank' title='Genuine Lenovo AC Power Adapter Charger P/N 36001580 19.5V 6.7A'>Genuine Lenovo AC Power Adapter&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;29.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 8d 17m 22s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373465339494&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/UaoAAOSw6yBgLkSE/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373465339494&page=listing' target='_blank' title='GENUINE SAMSUNG SF-D560RA SFD560RA TONER SF-560R 565PR'>GENUINE SAMSUNG SF-D560RA SFD560RA&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;15.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 9d 42m 52s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373776363767&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/MVwAAOSweFZhf9ir/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=373776363767&page=listing' target='_blank' title='Brand New in Box  Cisco UC520-8U-4FXO-K9 Unified Communications 520 VoIP gateway'>Brand New in Box  Cisco&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;350.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 10m 47s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114009120974&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/TeQAAOSw5r9d752C/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114009120974&page=listing' target='_blank' title='Bloxx 1215W Real-Time Web Filter ( Brand New & Boxed )'>Bloxx 1215W Real-Time Web Filter (&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;149.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 38m 15s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114008997260&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/0D0AAOSwA75d74W1/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=114008997260&page=listing' target='_blank' title='Belkin OmniView SMB 8-Port CAT5 KVM Switch'>Belkin OmniView SMB 8-Port CAT5 KVM&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;64.99 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 1d 48m 39s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115364255864&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/AmYAAOSwi25ia6zT/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115364255864&page=listing' target='_blank' title='NEC  ME301X Projector Excellent Condition 1124  Hours used'>NEC  ME301X Projector Excellent&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;99.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 20d 30m 6s </div>";
output+="</div>"; 
output+="</div>"; 

output+="<div class='item'>"; 
output+="<div class='item-inside'>"; 
output+="<div class='item_picture wraptocenter'><span></span><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074201267&page=listing' target='_blank'><img src='https://i.ebayimg.com/thumbs/images/g/TYUAAOSwnCBhf67y/s-l140.jpg'></a></div>";
output+="<div class='item_title'><a href='https://www.freesellertools.com/redirect/?site=EBAY-GB&id=115074201267&page=listing' target='_blank' title='Hitachi CP A2W259N  2500 Lumen 3054Hours'>Hitachi CP A2W259N  2500 Lumen&hellip;</a></div>"; 
output+="<div class='item_price'>&pound;40.00 (Buy it Now)</div>"; 
output+="<div class='time_left'>Time Left: 23d 23m 4s </div>";
output+="</div>"; 
output+="</div>"; 
output+="</div>";
output+="</div>";
document.getElementById("fst_listings").innerHTML=output;	

} 
if(location.host.indexOf('ebay')!=-1 || location.host.indexOf('ebaydesc')!=-1) { 
document.getElementById("fst_listings").innerHTML='<p>Free Seller Tools: Sorry your eBay items cannot be loaded on this domain name.</p>';} else { 
get_listings(); 
}