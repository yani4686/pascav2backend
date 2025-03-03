<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/testInformix', 'Home::test_informix');
$routes->get('/apply', 'Home::applySc');
$routes->get('/accept', 'Home::acceptanceSc');
$routes->get('/dashboard', 'Home::dashboardSc');
$routes->get('/summary', 'Home::summmarySc');
$routes->get('/test', 'Home::test');

$routes->get('/getdata', 'DashboardController::getAllSessionData');
$routes->get('/getdisplaystatusmohon', 'DashboardController::getDisplayStatusMohon');
$routes->get('/countdisplaydashboard', 'DashboardController::countDisplayDashboard');


$routes->get('/testdb', 'LoginController::testDb');
$routes->post('/retlogin', 'LoginController::retlogin');
$routes->post('/logout', 'LoginController::logout');
$routes->post('/regnewlogin', 'LoginController::regnewlogin');
$routes->match(['GET','POST'],'/verifylogin/(:any)', 'LoginController::verifylogin/$1');
$routes->get('/verify', 'LoginController::verify');
$routes->post('/forgotpwd', 'LoginController::forgotpwd');

$routes->get('/getkodprogram', 'ApplyController::getkodprogram');
$routes->get('/getkodnegara', 'ApplyController::getkodnegara');
$routes->get('/getkodnegeri', 'ApplyController::getkodnegeri');
$routes->get('/getkodkecacatan', 'ApplyController::getkodkecacatan');
$routes->get('/getkodpenaja', 'ApplyController::getkodpenaja');
$routes->get('/getkoddun', 'ApplyController::getkoddun');
$routes->get('/getkodlayak', 'ApplyController::getkodlayak');
$routes->get('/getkodsek', 'ApplyController::getkodsek');
$routes->get('/displayprofile', 'ApplyController::DisplayProfile');
$routes->post('/insstep1', 'ApplyController::InsStep1');
$routes->post('/insstep2', 'ApplyController::InsStep2');
$routes->post('/insstep3', 'ApplyController::InsStep3');
$routes->post('/insstep4', 'ApplyController::InsStep4');
$routes->post('/insstep5', 'ApplyController::InsStep5');
$routes->get('/generatePdf', 'ApplyController::generatePdfExample');
$routes->post('/generatepdf', 'ApplyController::generatePdf');

$routes->post('/updaccept', 'AcceptController::UpdAccept');
$routes->post('/viewsurat', 'AcceptController::ViewSurat');

$routes->get('/retpermohonan', 'SaringController::retpermohonan');
$routes->get('/countpermohonan', 'SaringController::countpermohonan');
$routes->post('/updsaringan', 'SaringController::updsaringan');
$routes->get('/retpermohonanbynokp/(:any)', 'SaringController::retpermohonanbynokp/$1');
// $routes->match(['GET','POST'],'/retpermohonanbynokp/(:any)', 'SaringController::retpermohonanbynokp/$1');

$routes->get('/retpermohonansaring', 'LulusPpsController::retpermohonansaring');
$routes->get('/countpermohonanpps', 'LulusPpsController::countpermohonanpps');
$routes->get('/countcalonjaya', 'LulusPpsController::countcalonjaya');
$routes->post('/updsaringanpps', 'LulusPpsController::updsaringanpps');
$routes->get('/retcalonjaya', 'LulusPpsController::retcalonjaya');
$routes->get('/retpermohonanbynokp/(:any)', 'LulusPpsController::retpermohonanbynokp/$1');

$routes->get('/generateletter', 'PdfController::GenerateLetter');

 $routes->post('/retloginadminq', 'LoginControllerQuasar::retloginAdminQuasar');
// $routes->post('/list-reg', 'LoginController::getLogin');