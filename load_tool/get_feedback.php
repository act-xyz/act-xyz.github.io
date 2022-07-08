
if(location.host.indexOf('ebay')!=-1) { 
document.getElementById("fst_feedback").innerHTML='<p><strong>Notice</strong>: Sorry, the eBay feedback widget from Free Seller Tools can not be used on eBay listings.</p>';} else { 
/**
 * Free Seller Tools (c) 2014
 * Script: eBay Feedback Tool
 * Version: 1.1
 * URL: http://www.freesellertools.com
 * Author: @craigcosford
 * 
 */
 
 
function LoadFeedback() { 

var css1 = document.createElement("link");
css1.setAttribute("rel", "stylesheet"); 
css1.setAttribute("type", "text/css"); 
css1.setAttribute("href", "https://freesellertools.com/load_tool/css/feedback.css");
document.getElementsByTagName("head")[0].appendChild(css1)

var output = '';
output += '<table class="fst_feedbacktable"> \
			<thead> \
				<tr> \
					<th width="60%">Feedback</th> \
					<th width="20%">From</th> \
					<th width="20%">Date</th> \
				</tr> \
			</thead> \
			<tbody> \
			\
			<tr> \
				<td class="feedback_comment">Good buyer, prompt payment, valued customer, highly recommended.<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">ajparts-trade (19678)</td>\
				<td class="feedback_date">04-07-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Thank you for an easy, pleasant transaction. Excellent buyer. A++++++.<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">cambridge_accessories (132501)</td>\
				<td class="feedback_date">04-07-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Excellent seller.Thanks <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=374142049855&page=listing" class="fst_feedback_item" title="5 x Lenovo T410 Core i5 Laptops Spares Repairs Job Lot #3" target="_blank">5 x Lenovo T410 Core i5 Laptops Spares Repairs Job Lot #3 (#374142049855)</a></td>\
				<td class="feedback_user">n***d (1991)</td>\
				<td class="feedback_date">27-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Excellent seller.Thanks <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=115437210067&page=listing" class="fst_feedback_item" title="5 x Lenovo T410 Core i5 Laptops Spares Repairs Job Lot #5" target="_blank">5 x Lenovo T410 Core i5 Laptops Spares Repairs Job Lot #5 (#115437210067)</a></td>\
				<td class="feedback_user">n***d (1991)</td>\
				<td class="feedback_date">27-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Thank you for an easy, pleasant transaction. Excellent buyer. A++++++.<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">hyundaipowerproductsdirect (25356)</td>\
				<td class="feedback_date">27-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Good price, item as described, arrived on time,nice to do business with. <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=115437228549&page=listing" class="fst_feedback_item" title="5 x Lenovo T410 Core i5 Laptops Spares Repairs Job Lot #6" target="_blank">5 x Lenovo T410 Core i5 Laptops Spares Repairs Job Lot #6 (#115437228549)</a></td>\
				<td class="feedback_user">4***4 (161)</td>\
				<td class="feedback_date">27-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Thank you for an easy, pleasant transaction. Excellent buyer. A++++++.<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">landscapeandgardensupplies (26033)</td>\
				<td class="feedback_date">27-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Great buyer immediate payment THANKS<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">ishop247-net (385863)</td>\
				<td class="feedback_date">27-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Good buyer, prompt payment, valued customer, highly recommended. Thanks!!<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">giftdealsuk (145138)</td>\
				<td class="feedback_date">20-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Good buyer, prompt payment, valued customer, highly recommended.<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">marts_car_parts_uk (3563)</td>\
				<td class="feedback_date">20-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Schnelle Lieferung, gerne wieder!<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=374044631124&page=listing" class="fst_feedback_item" title="5 x Acer Asus Quad Core/Core i3 Laptops Faulty for Spares Repairs Job Lot #9" target="_blank">5 x Acer Asus Quad Core/Core i3 Laptops Faulty for Spares Repairs Job Lot #9 (#374044631124)</a></td>\
				<td class="feedback_user">o***8 (313)</td>\
				<td class="feedback_date">13-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">gut verpackt, gerne wieder!<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=373937693653&page=listing" class="fst_feedback_item" title="10 X 320gb 2.5 sata hard drives. various makes " target="_blank">10 X 320gb 2.5 sata hard drives. various makes  (#373937693653)</a></td>\
				<td class="feedback_user">o***8 (313)</td>\
				<td class="feedback_date">13-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Quick response and fast payment. Perfect! THANKS!!<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">smartpartsshop (11333)</td>\
				<td class="feedback_date">13-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Thank a lot..<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=373772832729&page=listing" class="fst_feedback_item" title="NEC UM280X Projector Short Throw 2883  hours used" target="_blank">NEC UM280X Projector Short Throw 2883  hours used (#373772832729)</a></td>\
				<td class="feedback_user">0***l (3)</td>\
				<td class="feedback_date">06-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Easy transaction. As described. Would buy again.<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=115255097641&page=listing" class="fst_feedback_item" title="LENOVO 130W AC Adapter Laptop/Dock Charger 19.5V 6.66A 42T5278 / 53Y3078" target="_blank">LENOVO 130W AC Adapter Laptop/Dock Charger 19.5V 6.66A 42T5278 / 53Y3078 (#115255097641)</a></td>\
				<td class="feedback_user">l***_ (1544)</td>\
				<td class="feedback_date">06-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Big thank you from Selling4everyone!<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=1111111111&page=listing" class="fst_feedback_item" title="" target="_blank"> (#1111111111)</a></td>\
				<td class="feedback_user">selling4everyone (1617)</td>\
				<td class="feedback_date">06-06-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Good price, item as described, arrived on time <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=374096910037&page=listing" class="fst_feedback_item" title="5 x Core i3 i5 Laptops Spares Repairs Job Lot #2" target="_blank">5 x Core i3 i5 Laptops Spares Repairs Job Lot #2 (#374096910037)</a></td>\
				<td class="feedback_user">4***4 (161)</td>\
				<td class="feedback_date">30-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Did send a replacement promptly.  <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=372041546668&page=listing" class="fst_feedback_item" title="3.5 SATA DESKTOP PC HDD Hard Drive 160GB, 250GB, 320GB VARIOUS BRANDS" target="_blank">3.5 SATA DESKTOP PC HDD Hard Drive 160GB, 250GB, 320GB VARIOUS BRANDS (#372041546668)</a></td>\
				<td class="feedback_user">0***t (189)</td>\
				<td class="feedback_date">30-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Excellent seller.Thanks <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=374086908023&page=listing" class="fst_feedback_item" title="5 x Lenovo Core i3 Laptops Spares Repairs Job Lot #3" target="_blank">5 x Lenovo Core i3 Laptops Spares Repairs Job Lot #3 (#374086908023)</a></td>\
				<td class="feedback_user">n***d (1991)</td>\
				<td class="feedback_date">23-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Excellent seller.Thanks <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=115390567264&page=listing" class="fst_feedback_item" title="5 x Lenovo Core i3 Laptops Spares Repairs Job Lot #4" target="_blank">5 x Lenovo Core i3 Laptops Spares Repairs Job Lot #4 (#115390567264)</a></td>\
				<td class="feedback_user">n***d (1991)</td>\
				<td class="feedback_date">23-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Excellent seller.Thanks <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=374082874894&page=listing" class="fst_feedback_item" title="5 x Dell Toshiba HP Acer Core i3 i5 Laptops Spares Repairs Job Lot #2" target="_blank">5 x Dell Toshiba HP Acer Core i3 i5 Laptops Spares Repairs Job Lot #2 (#374082874894)</a></td>\
				<td class="feedback_user">n***d (1991)</td>\
				<td class="feedback_date">23-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Perfect  <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=373979372130&page=listing" class="fst_feedback_item" title="5 x  HP Samsung Core i3 i5 Faulty Laptops for Spares or Repairs Job Lot #11" target="_blank">5 x  HP Samsung Core i3 i5 Faulty Laptops for Spares or Repairs Job Lot #11 (#373979372130)</a></td>\
				<td class="feedback_user">t***9 (12)</td>\
				<td class="feedback_date">16-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Courier damaged monitor. Refunded immediately, seller as good as Ive seen so far on ebay. No issues A+++<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=115373210653&page=listing" class="fst_feedback_item" title="DELL Ultrasharp P2414HB 24 Widescreen HD LED IPS Monitor Display Port DVI VGA" target="_blank">DELL Ultrasharp P2414HB 24 Widescreen HD LED IPS Monitor Display Port DVI VGA (#115373210653)</a></td>\
				<td class="feedback_user">l***s (1991)</td>\
				<td class="feedback_date">16-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">ottimo ebayer 5++++<br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=373772715968&page=listing" class="fst_feedback_item" title="NEC UM280X Projector Short Throw 803 hours used" target="_blank">NEC UM280X Projector Short Throw 803 hours used (#373772715968)</a></td>\
				<td class="feedback_user">l***t (536)</td>\
				<td class="feedback_date">16-05-2022</td>\
			</tr>\
\
			<tr> \
				<td class="feedback_comment">Excellent service will buy from you again . Thanks <br />\
				<a href="http://www.freesellertools.com/redirect/?site=3&id=115380966408&page=listing" class="fst_feedback_item" title="5 x Fujitsu Core i3 i5 Laptops Spares Repairs Job Lot #1" target="_blank">5 x Fujitsu Core i3 i5 Laptops Spares Repairs Job Lot #1 (#115380966408)</a></td>\
				<td class="feedback_user">1***g (501)</td>\
				<td class="feedback_date">16-05-2022</td>\
			</tr>\
</tbody>\
</table>\
<div class="fst_branding" style="text-align: right;"><a href="https://www.freesellertools.com" target="_blank">eBay Feedback Widget</a> by <a href="https://www.freesellertools.com" target="_blank">Free Seller Tools</a></div>'
document.getElementById("fst_feedback").innerHTML=output;
}
LoadFeedback(); 	
}
