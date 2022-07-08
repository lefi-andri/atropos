<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] 							= 'frontend/home/index';
$route['404_override'] 									= 'frontend/pagecontent/notfound';
$route['translate_uri_dashes'] 							= FALSE;

$route['home'] 											= 'frontend/home/index';
$route['home/account/login'] 							= 'frontend/home/login';
$route['home/search/resultSearch'] 						= 'frontend/home/resultSearch';

$route['page/(:any)'] 									= 'frontend/pagecontent/index/$1';
$route['about'] 										= 'frontend/pagecontent/index/about';
$route['profile-perusahaan'] 							= 'frontend/pagecontent/index/profile-perusahaan';
$route['visi-dan-misi'] 								= 'frontend/pagecontent/index/visi-dan-misi';
$route['kebijakan-mutu'] 								= 'frontend/pagecontent/index/kebijakan-mutu';
$route['manajemen-ketidakberpihakan'] 					= 'frontend/pagecontent/index/manajemen-ketidakberpihakan';
$route['struktur-organisasi'] 							= 'frontend/pagecontent/index/struktur-organisasi';
$route['dasar-hukum'] 									= 'frontend/pagecontent/index/dasar-hukum';

$route['penggunaan-logo'] 								= 'frontend/pagecontent/index/penggunaan-logo';

$route['clients/cek-keabsahan-sertifikat'] 				= 'frontend/pagecontent/index/cek-keabsahan-sertifikat';

$route['prosedur'] 										= 'frontend/pagecontent/index/prosedur';
$route['tahap-sertifikasi'] 							= 'frontend/pagecontent/index/tahap-sertifikasi';
$route['prosedur/proses-sertifikasi'] 					= 'frontend/pagecontent/index/proses-sertifikasi';
$route['prosedur/proses-audit'] 						= 'frontend/pagecontent/index/proses-audit';
$route['prosedur/proses-audit-stage-2'] 				= 'frontend/pagecontent/index/proses-audit-stage-2';
$route['prosedur/proses-penerbitan-sertifikat'] 		= 'frontend/pagecontent/index/proses-penerbitan-sertifikat';
$route['prosedur/proses-pembekuan'] 					= 'frontend/pagecontent/index/proses-pembekuan';
$route['prosedur/proses-pencabutan'] 					= 'frontend/pagecontent/index/proses-pencabutan';
$route['prosedur/proses-pengurangan-ruang-lingkup'] 	= 'frontend/pagecontent/index/proses-pengurangan-ruang-lingkup';
$route['prosedur/proses-penanganan-keluhan-pelanggan'] 	= 'frontend/pagecontent/index/proses-penanganan-keluhan-pelanggan';
$route['prosedur/proses-banding'] 						= 'frontend/pagecontent/index/proses-banding';

$route['career'] 										= 'frontend/pagecontent/index/career';

$route['clients'] 										= 'frontend/clients/index';
$route['clients/list_client'] 							= 'frontend/clients/list_client';
$route['clients/resultSearchCert'] 						= 'frontend/clients/resultSearchCert';
$route['clients/account/login'] 						= 'frontend/clients/login';
$route['clients/(:any)'] 								= 'frontend/clients/view_client/$1';
$route['data_klien'] 									= 'frontend/clients/grab_data_clients';

$route['clients/account/logout'] 						= 'frontend/clients/logout';
$route['logout'] 										= 'auth/login/logout';

$route['clients/certificate/resertifikasi'] 			= 'frontend/clients/resertifikasi';
$route['clients/certificate/pencabutan'] 				= 'frontend/clients/pencabutan';
$route['clients/certificate/pembekuan'] 				= 'frontend/clients/pembekuan';
$route['clients/certificate/keabsahan_sertifikat'] 		= 'frontend/clients/keabsahan_sertifikat';

$route['clients/account'] 								= 'frontend/clients_area/index';
$route['clients/account/dashboard'] 					= 'frontend/clients_area/index';
$route['clients/account/reset_pwd'] 					= 'frontend/clients_area/reset_pwd';
$route['clients/account/lampiran-pendukung'] 			= 'frontend/clients_area/lampiran_pendukung';

$route['clients/list_client/(:num)'] 					= 'frontend/clients/list_client/$1';

$route['clients/search/certificate'] 					= 'frontend/clients/search_certificate';
$route['clients/search/resultSearchCert'] 				= 'frontend/clients/resultSearchCert';
$route['clients/search/looks'] 							= 'frontend/clients/looks_cert';

$route['contact'] 										= 'frontend/contact/index';

$route['downloadpage'] 									= 'frontend/downloads/index';
$route['downloadpage/register'] 						= 'frontend/downloads/register';
$route['downloadpage/sendmail'] 						= 'frontend/downloads/sendmail';

$route['event'] 										= 'frontend/event/index';
$route['event-calendar'] 								= 'frontend/event/event_calendar';
$route['registration-form'] 							= 'frontend/event/registration_form';
$route['confirmation'] 									= 'frontend/event/confirmation';
$route['event-process'] 								= 'frontend/event/event_process';

$route['gallery'] 										= 'frontend/gallery/gallery_photo';
$route['gallery/photo'] 								= 'frontend/gallery/gallery_photo';
$route['gallery/photo/(:any)'] 							= 'frontend/gallery/view_photo/$1';

$route['services'] 										= 'frontend/services/index';
$route['services/(:any)'] 								= 'frontend/services/view_services/$1';

$route['sertifikasi'] 									= 'frontend/sertifikasi/index';
$route['sertifikasi/(:any)'] 							= 'frontend/sertifikasi/view_sertifikasi/$1';

$route['news'] 											= 'frontend/news/index';
$route['news/(:any)'] 									= 'frontend/news/view_news/$1';
$route['news/page/(:num)'] 								= 'frontend/news/index/$1';
$route['news/your_comment'] 							= 'frontend/news/your_comment';
$route['news/comment/your_reply'] 						= 'frontend/news/your_reply';
$route['news/comment/your_reply_process'] 				= 'frontend/news/your_reply_process';
$route['news/comment/confirmation/(:any)'] 				= 'frontend/news/confirmation/$1';
$route['news/comment/rejection/(:any)'] 				= 'frontend/news/rejection/$1';

$route['search']										= 'frontend/search/index';

$route['subscribes'] 									= 'frontend/subscribes/index';
$route['subscribes/new_subscribes'] 					= 'frontend/subscribes/new_subscribes';
$route['subscribes/verification'] 						= 'frontend/subscribes/index';
$route['subscribes/verification/(:any)'] 				= 'frontend/subscribes/verification/$1';

$route['privacy-policy'] 								= 'frontend/pagecontent/index/privacy-policy';
$route['terms-and-conditions'] 							= 'frontend/pagecontent/index/terms-and-conditions';
$route['peta-situs'] 									= 'frontend/pagecontent/index/peta-situs';


/*
certipedia
*/

$route['certipedia'] 									= 'certipedia/dashboard';


/*
| -------------------------------------------------------------------------------------------------------------
| URI AUTHENTICATION
| -------------------------------------------------------------------------------------------------------------
*/
$route['authentication'] 					= 'auth/login/index';
$route['logout'] 							= 'auth/login/logout';

#$route['authentication'] 								= 'authentication/auth/index';
#$route['logout'] 										= 'authentication/auth/logout';

/*
| -------------------------------------------------------------------------
| URI BACKEND
| -------------------------------------------------------------------------
*/
$route['adm_dashboard'] 											= 'backend/adm_dashboard/index';

$route['adm_pagecontent'] 											= 'backend/adm_pagecontent/index';
$route['adm_pagecontent/page/(:num)'] 								= 'backend/adm_pagecontent/index/$1';
$route['adm_pagecontent/edit/(:any)'] 								= 'backend/adm_pagecontent/edit/$1';
$route['adm_pagecontent/update'] 									= 'backend/adm_pagecontent/update';

$route['adm_banner'] 												= 'backend/adm_banner/index';
$route['adm_banner/add_banner'] 									= 'backend/adm_banner/add_banner';
$route['adm_banner/looks'] 											= 'backend/adm_banner/looks';
$route['adm_banner/edit_banner/(:any)'] 							= 'backend/adm_banner/edit_banner/$1';
$route['adm_banner/delete_banner/(:any)'] 							= 'backend/adm_banner/delete_banner/$1';

$route['adm_users_sertifikat'] 										= 'backend/adm_users_sertifikat/index';
$route['adm_users_sertifikat/add_users_sertifikat'] 				= 'backend/adm_users_sertifikat/add_users_sertifikat';
$route['adm_users_sertifikat/edit_users_sertifikat/(:any)'] 		= 'backend/adm_users_sertifikat/edit_users_sertifikat/$1';
$route['adm_users_sertifikat/delete_users_sertifikat/(:any)'] 		= 'backend/adm_users_sertifikat/delete_users_sertifikat/$1';

$route['adm_jenis_sertifikat'] 										= 'backend/adm_jenis_sertifikat/index';
$route['adm_jenis_sertifikat/add_jenis_sertifikat'] 				= 'backend/adm_jenis_sertifikat/add_jenis_sertifikat';
$route['adm_jenis_sertifikat/edit_jenis_sertifikat/(:any)'] 		= 'backend/adm_jenis_sertifikat/edit_jenis_sertifikat/$1';
$route['adm_jenis_sertifikat/delete_jenis_sertifikat/(:any)'] 		= 'backend/adm_jenis_sertifikat/delete_jenis_sertifikat/$1';

$route['adm_ruang_lingkup_cert'] 									= 'backend/adm_ruang_lingkup_cert/index';
$route['adm_ruang_lingkup_cert/add_ruang_lingkup'] 					= 'backend/adm_ruang_lingkup_cert/add_ruang_lingkup';
$route['adm_ruang_lingkup_cert/edit_ruang_lingkup/(:any)'] 			= 'backend/adm_ruang_lingkup_cert/edit_ruang_lingkup/$1';
$route['adm_ruang_lingkup_cert/delete_ruang_lingkup/(:any)'] 		= 'backend/adm_ruang_lingkup_cert/delete_ruang_lingkup/$1';

$route['adm_resertifikasi_cert'] 									= 'backend/adm_resertifikasi_cert/index';
$route['adm_resertifikasi_cert/resertifikasi'] 						= 'backend/adm_resertifikasi_cert/resertifikasi';
$route['adm_resertifikasi_cert/non_resertifikasi'] 					= 'backend/adm_resertifikasi_cert/non_resertifikasi';

$route['adm_pencabutan_cert'] 										= 'backend/adm_pencabutan_cert/index';
$route['adm_pencabutan_cert/pencabutan'] 							= 'backend/adm_pencabutan_cert/pencabutan';
$route['adm_pencabutan_cert/non_pencabutan'] 						= 'backend/adm_pencabutan_cert/non_pencabutan';

$route['adm_pembekuan_cert'] 										= 'backend/adm_pembekuan_cert/index';
$route['adm_pembekuan_cert/pembekuan'] 								= 'backend/adm_pembekuan_cert/index';
$route['adm_pembekuan_cert/non_pembekuan'] 							= 'backend/adm_pembekuan_cert/non_pembekuan';

$route['adm_badan_usaha'] 											= 'backend/adm_badan_usaha/index';
$route['adm_badan_usaha/add_badan_usaha'] 							= 'backend/adm_badan_usaha/add_badan_usaha';
$route['adm_badan_usaha/edit_badan_usaha/(:any)'] 					= 'backend/adm_badan_usaha/edit_badan_usaha/$1';
$route['adm_badan_usaha/delete_badan_usaha/(:any)'] 				= 'backend/adm_badan_usaha/delete_badan_usaha/$1';

$route['adm_sertifikat'] 											= 'backend/adm_sertifikat/index';
$route['adm_sertifikat/add_sertifikat'] 							= 'backend/adm_sertifikat/add_sertifikat';
$route['adm_sertifikat/edit_sertifikat/(:any)'] 					= 'backend/adm_sertifikat/edit_sertifikat/$1';
$route['adm_sertifikat/delete_sertifikat/(:any)'] 					= 'backend/adm_sertifikat/delete_sertifikat/$1';

$route['adm_sertifikat/js_opsi_one/(:any)'] 						= 'backend/adm_sertifikat/js_opsi_one/$1';

$route['adm_clients'] 												= 'backend/adm_clients/index';
$route['adm_clients/add_clients'] 									= 'backend/adm_clients/add_clients';
$route['adm_clients/edit_clients/(:any)'] 							= 'backend/adm_clients/edit_clients/$1';
$route['adm_clients/delete_clients/(:any)'] 						= 'backend/adm_clients/delete_clients/$1';



$route['adm_klien'] 							= 'backend/adm_klien/index';
$route['adm_klien/add_klien'] 					= 'backend/adm_klien/add_klien';
$route['adm_klien/edit_klien/(:any)'] 			= 'backend/adm_klien/edit_klien/$1';
$route['adm_klien/delete_klien/(:any)'] 		= 'backend/adm_klien/delete_klien/$1';
$route['adm_klien/penggolongan'] 						= 'backend/adm_klien/penggolongan';
$route['adm_klien/add_penggolongan'] 					= 'backend/adm_klien/add_penggolongan';
$route['adm_klien/edit_penggolongan/(:any)'] 			= 'backend/adm_klien/edit_penggolongan/$1';
$route['adm_klien/delete_penggolongan/(:any)'] 			= 'backend/adm_klien/delete_penggolongan/$1';
$route['adm_klien/status'] 						= 'backend/adm_klien/status';
$route['adm_klien/add_status'] 					= 'backend/adm_klien/add_status';
$route['adm_klien/edit_status/(:any)'] 			= 'backend/adm_klien/edit_status/$1';
$route['adm_klien/delete_status/(:any)'] 		= 'backend/adm_klien/delete_status/$1';
$route['adm_klien/kategori_klien'] 							= 'backend/adm_klien/kategori_klien';
$route['adm_klien/add_kategori_klien'] 						= 'backend/adm_klien/add_kategori_klien';
$route['adm_klien/edit_kategori_klien/(:any)'] 				= 'backend/adm_klien/edit_kategori_klien/$1';
$route['adm_klien/delete_kategori_klien/(:any)'] 			= 'backend/adm_klien/delete_kategori_klien/$1';
$route['adm_klien/klien'] 							= 'backend/adm_klien/klien';
$route['adm_klien/add_klien'] 						= 'backend/adm_klien/add_klien';
$route['adm_klien/edit_klien/(:any)'] 				= 'backend/adm_klien/edit_klien/$1';
$route['adm_klien/delete_klien/(:any)'] 			= 'backend/adm_klien/delete_klien/$1';



$route['adm_tahap_sertifikasi'] 						= 'backend/adm_tahap_sertifikasi/index';
$route['adm_tahap_sertifikasi/add_tahap'] 				= 'backend/adm_tahap_sertifikasi/add_tahap';
$route['adm_tahap_sertifikasi/edit_tahap/(:any)'] 		= 'backend/adm_tahap_sertifikasi/edit_tahap/$1';
$route['adm_tahap_sertifikasi/delete_tahap/(:any)'] 	= 'backend/adm_tahap_sertifikasi/delete_tahap/$1';

$route['adm_services'] 							= 'backend/adm_services/index';
$route['adm_services/add_servicescat'] 				= 'backend/adm_services/add_servicescat';
$route['adm_services/edit_servicescat/(:any)'] 		= 'backend/adm_services/edit_servicescat/$1';
$route['adm_services/delete_servicescat/(:any)'] 	= 'backend/adm_services/delete_servicescat/$1';
$route['adm_services/add_services'] 				= 'backend/adm_services/add_services';
$route['adm_services/edit_services/(:any)'] 		= 'backend/adm_services/edit_services/$1';
$route['adm_services/delete_services/(:any)'] 		= 'backend/adm_services/delete_services/$1';

$route['adm_news'] 							= 'backend/adm_news/index';
$route['adm_news/add_newscat'] 				= 'backend/adm_news/add_newscat';
$route['adm_news/edit_newscat/(:any)'] 		= 'backend/adm_news/edit_newscat/$1';
$route['adm_news/delete_newscat/(:any)'] 	= 'backend/adm_news/delete_newscat/$1';
$route['adm_news/add_news'] 				= 'backend/adm_news/add_news';
$route['adm_news/edit_news/(:any)'] 		= 'backend/adm_news/edit_news/$1';
$route['adm_news/delete_news/(:any)'] 		= 'backend/adm_news/delete_news/$1';
$route['adm_news/comment'] 					= 'backend/adm_news/comment';
$route['adm_news/open_comment/(:any)'] 		= 'backend/adm_news/open_comment/$1';

$route['adm_contact'] 							= 'backend/adm_contact/index';
$route['adm_contact/looks'] 					= 'backend/adm_contact/looks';
$route['adm_contact/delete_contact/(:any)'] 	= 'backend/adm_contact/delete_contact/$1';

$route['adm_users'] 								= 'backend/adm_users/index';
$route['adm_users/add_administrator'] 				= 'backend/adm_users/add_administrator';
$route['adm_users/edit/(:any)'] 					= 'backend/adm_users/edit/$1';
$route['adm_users/read_user'] 						= 'backend/adm_users/read_user';
$route['adm_users/delete_administrator/(:any)'] 	= 'backend/adm_users/delete_administrator/$1';

$route['adm_contact'] 							= 'backend/adm_contact/index';
$route['adm_contact/looks'] 					= 'backend/adm_contact/looks';
$route['adm_contact/delete_contact/(:any)'] 	= 'backend/adm_contact/delete_contact/$1';

$route['adm_socialmedia'] 								= 'backend/adm_socialmedia/index';
$route['adm_socialmedia/edit_socialmedia/(:any)'] 		= 'backend/adm_socialmedia/edit_socialmedia/$1';


$route['imgfly'] 							= 'backend/adm_imgfly/index';
$route['imgfly/add'] 						= 'backend/adm_imgfly/add';
$route['imgfly/delete/(:any)'] 				= 'backend/adm_imgfly/delete/$1';
$route['imgfly/looks'] 						= 'backend/adm_imgfly/looks';

$route['filefly'] 							= 'backend/adm_filefly/index';
$route['filefly/add'] 						= 'backend/adm_filefly/add';
$route['filefly/delete/(:any)'] 			= 'backend/adm_filefly/delete/$1';
$route['filefly/looks'] 					= 'backend/adm_filefly/looks';

$route['adm_event'] 								= 'backend/adm_event/index';
$route['adm_event/add_event'] 						= 'backend/adm_event/add_event';
$route['adm_event/edit_event/(:any)'] 				= 'backend/adm_event/edit_event/$1';
$route['adm_event/delete_event/(:any)'] 			= 'backend/adm_event/delete_event/$1';
$route['adm_event/event_calendar'] 					= 'backend/adm_event/event_calendar';
$route['adm_event/add_event_calendar'] 				= 'backend/adm_event/add_event_calendar';
$route['adm_event/edit_event_calendar/(:any)'] 		= 'backend/adm_event/edit_event_calendar/$1';
$route['adm_event/delete_event_calendar/(:any)'] 	= 'backend/adm_event/delete_event_calendar/$1';
$route['adm_event/event_registration'] 				= 'backend/adm_event/event_registration';
$route['adm_event/looks'] 							= 'backend/adm_event/looks';
$route['adm_event/event_registration_report'] 		= 'backend/adm_event/event_registration_report';
$route['adm_event/cetak_laporan/(:any)'] 			= 'backend/adm_event/cetak_laporan/$1';

$route['adm_gallery_pictures'] 							= 'backend/adm_gallery_pictures/index';
$route['adm_gallery_pictures/add_gallery'] 				= 'backend/adm_gallery_pictures/add_gallery';
$route['adm_gallery_pictures/edit_gallery/(:any)'] 		= 'backend/adm_gallery_pictures/edit_gallery/$1';
$route['adm_gallery_pictures/delete_gallery/(:any)'] 	= 'backend/adm_gallery_pictures/delete_gallery/$1';
$route['adm_gallery_pictures/add_picture/(:any)'] 		= 'backend/adm_gallery_pictures/add_picture/$1';
$route['adm_gallery_pictures/delete_picture/(:any)'] 	= 'backend/adm_gallery_pictures/delete_picture/$1';
$route['adm_gallery_pictures/proses_upload/(:any)'] 	= 'backend/adm_gallery_pictures/proses_upload/$1';
$route['adm_gallery_pictures/remove_foto/(:any)'] 		= 'backend/adm_gallery_pictures/remove_foto/$1';
$route['adm_gallery_pictures/delete_pic/(:any)'] 		= 'backend/adm_gallery_pictures/delete_pic/$1';

$route['adm_download'] 								= 'backend/adm_download/index';
$route['adm_download/add_downloadcat'] 				= 'backend/adm_download/add_downloadcat';
$route['adm_download/edit_downloadcat/(:any)'] 		= 'backend/adm_download/edit_downloadcat/$1';
$route['adm_download/delete_downloadcat/(:any)'] 	= 'backend/adm_download/delete_downloadcat/$1';

$route['adm_download/list_download/(:any)'] 			= 'backend/adm_download/list_download/$1';

$route['adm_download/add_download/(:any)'] 				= 'backend/adm_download/add_download/$1';
$route['adm_download/edit_download/(:any)'] 			= 'backend/adm_download/edit_download/$1';
$route['adm_download/delete_download/(:any)'] 			= 'backend/adm_download/delete_download/$1';

$route['adm_download/download_member'] 				= 'backend/adm_download/download_member';