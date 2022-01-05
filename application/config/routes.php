<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Indexci';
$route['management-committe'] = 'MyController';
$route['temple-rules'] = 'myController/temple_rules';
$route['executive'] = 'myController/executive';
$route['advisors-trustees'] = 'myController/advisors_trustees';
$route['administration-priest-organisation-chart'] = 'myController/administration_priest_organisation_chart';
$route['terms-and-conditions'] = 'myController/terms_and_conditions';
$route['privacy-policy'] = 'myController/privacy_policy';
$route['skeyword'] = 'searchController';

$route['News/(:any)/(:any)'] = 'News/Details';
/*Blogs*/
$route['poojaBooking/getTimeSlotOfPooja'] = 'PoojaBooking/getTimeSlotOfPooja';
$route['poojaBooking/(:any)'] = 'PoojaBooking';
$route['pujaBooking/ExpireNotification'] = 'PoojaBooking/red';
$route['PoojaBooking/getServices'] = 'PoojaBooking/getServices';
$route['products/(:any)/(:any)'] = 'Product/details';
$route['Temple-Refreshment-Booking'] = 'TempleRefreshmentBooking';

$route['blog/(:any)'] = 'Blogs/blogsDetails';
$route['Events/(:any)'] = 'Events/EventsDetails';

$route['Login/(:any)'] = 'Login';
$route['donation/getSlabDetails'] = 'AjaxController/getSlabDetails';
$route['Login/(:any)/(:any)'] = 'Login';
$route['EventsPaymentSummery/(:any)'] = 'Events/PaymentSummery';
$route['EventStatus/Cancel/(:any)'] = 'Events/Cancel';
$route['EventStatus/Thank-You/(:any)'] = 'Events/Success';
$route['Gallery/(:any)'] = 'Gallery';


$route['poojaBooking/Preview-and-Payment/PayNow'] = 'PoojaBooking';
$route['poojaBooking/otp/verify'] = 'PoojaBooking';
$route['poojaBooking/Services-Date-Time/save'] = 'PoojaBooking';
$route['poojaBooking/Thank-You/(:any)/(:any)'] = 'PoojaBooking';
$route['poojaBooking/Booking-Information/save-booking-info'] = 'PoojaBooking';
$route['poojaBooking/Services-Date-Time/Update_services'] = 'PoojaBooking';
$route['poojaBooking/recover/GetNewPassword'] = 'PoojaBooking';
$route['CreatePassword/(:any)/(:any)/(:any)'] = 'CreatePassword';
$route['CreatePassword/(:any)/(:any)/(:any)/(:any)'] = 'CreatePassword';


$route['Membership/MembershipPay/(:any)'] = 'Membership/MemPaymentLink';
$route['Membership/(:any)'] = 'Membership';
$route['Ceremonies/getPujaSamagri'] = 'Ceremonies/getPujaSamagri';
$route['Ceremonies/getHavanSamagri'] = 'Ceremonies/getHavanSamagri';
$route['Ceremonies/getBhogPrasad'] = 'Ceremonies/getBhogPrasad';
$route['Ceremonies/getCatering'] = 'Ceremonies/getCatering';
$route['CeremoniesPaymentBooking/(:any)/(:any)'] = 'Ceremonies/PaymentNowLink';
$route['CeremoniesPaymentBookingSuccess/(:any)/(:any)'] = 'Ceremonies/PaymentSucessFinal';
$route['CeremoniesPaymentBooking/(:any)/(:any)/(:any)'] = 'Ceremonies/PaymentNowLink';
$route['Ceremonies/(:any)'] = 'Ceremonies';
$route['Ceremonies/(:any)/(:any)'] = 'Ceremonies';

$route['Membership/(:any)/(:any)'] = 'Membership';
$route['Membership/(:any)/(:any)/(:any)'] = 'Membership';
$route['Cart/SaveFamily'] = 'Cart/SaveFamily';
$route['Cart/Remove/(:any)'] = 'Cart/Remove';

$route['Donation/PayNow'] = 'Donation';
$route['Donation/ConfirmToPayPal'] = 'Donation/ConfirmToPayPal';
$route['Donation/DonationPrintApplication/Cancel/(:any)/(:any)'] = 'Donation';
$route['Donation/DonationPrintApplication/Success/(:any)/(:any)'] = 'Donation/Success';
$route['PayWithPayPal/(:any)'] = 'PayWithPayPal';
$route['PayWithPayPal/Success/(:any)/(:any)'] = 'PayWithPayPal/success';
    $route['PayWithPayPal/Cancel/(:any)/(:any)'] = 'PayWithPayPal/Cancel';
    $route['poojaBooking/Sent-Email-Notification-To-Users-Of-Pooja-Booking/(:any)/(:any)'] = 'PayWithPayPal/SendEmailNotifications';
$route['PayMemberCancel/(:any)/(:any)'] = 'PayMemberCancel';
$route['Membership/MembershipPrintApplication/Cancel/(:any)/(:any)'] = 'Membership';
$route['Membership/MembershipPrintApplication/Success/(:any)/(:any)'] = 'Membership';


 	$route['Pooja'] = 'Pooja/index';
	$route['Pooja/(:any)/'] = 'Pooja/index/$1';
	$route['Pooja/(:num)'] = 'Pooja';
	$route['Pooja/(:any)'] = 'Pooja/index/$1';
	$route['Pooja/(:any)/(:any)'] = 'Pooja/index/$1/$1';
	$route['Pooja/details/(:num)/(:any)'] = 'Pooja/PoojaDetails';
	$route['Pooja/booking/(:num)/(:any)'] = 'Pooja/booking';

	$route['blogs'] = 'Blogs/index';
	$route['blogs/(:any)/'] = 'Blogs/index/$1';
	$route['blogs/(:num)'] = 'blogs';
	$route['blogs/(:any)'] = 'blogs/index/$1';
	$route['blogs/(:any)/(:any)'] = 'blogs/index/$1/$1';
/*Blogs*/


$route['404_override'] = 'erro404';
$route['translate_uri_dashes'] = FALSE;

