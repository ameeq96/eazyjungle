<?php

use Illuminate\Support\Facades\Route;

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.home');
});

Route::get('about-us', function () {
    return view('pages.about-us');
})->name("about-us");

Route::get('services', function () {
    return view('pages.services');
})->name("services");

Route::get('pricing', function () {
    return view('pages.pricing');
})->name("pricing");

Route::get('contact-us', function () {
    return view('pages.contact-us');
})->name("contact-us");

Route::get('shared-hosting', function () {
    return view('pages.shared-hosting');
})->name("shared-hosting");

Route::get('vps-hosting', function () {
    return view('pages.vps-hosting');
})->name("vps-hosting");

Route::get('dedicated-server-hosting', function () {
    return view('pages.dedicated-server-hosting');
})->name("dedicated-server-hosting");

Route::get('business-development', function () {
    return view('pages.business-development');
})->name("business-development");

Route::get('website-hosting-solutions', function () {
    return view('pages.website-hosting-solutions');
})->name("website-hosting-solutions");

Route::get('domain-registration', function () {
    return view('pages.domain-registration');
})->name("domain-registration");

Route::get('cyber-security-solutions', function () {
    return view('pages.cyber-security-solutions');
})->name("cyber-security-solutions");

Route::get('computing-and-client-management', function () {
    return view('pages.computing-and-client-management');
})->name("computing-and-client-management");

Route::get('training-and-testing-solutions', function () {
    return view('pages.training-and-testing-solutions');
})->name("training-and-testing-solutions");

Route::get('cloud-hosting', function () {
    return view('pages.cloud-hosting');
})->name("cloud-hosting");

Route::get('email-hosting', function () {
    return view('pages.email-hosting');
})->name("email-hosting");

Route::get('shared-wp-hosting', function () {
    return view('pages.shared-wp-hosting');
})->name("shared-wp-hosting");

Route::get('wp-hosting', function () {
    return view('pages.wp-hosting');
})->name("wp-hosting");

Route::get('woocommerce-hosting', function () {
    return view('pages.woocommerce-hosting');
})->name("woocommerce-hosting");

Route::get('privacy-policy', function () {
    return view('pages.privacy-policy');
})->name("privacy-policy");

Route::get('legal-information', function () {
    return view('pages.legal-information');
})->name("legal-information");

Route::get('report-abuse', function () {
    return view('pages.report-abuse');
})->name("report-abuse");

Route::get('terms-of-service', function () {
    return view('pages.terms-of-service');
})->name("terms-of-service");

Route::get('login', function () {
    return view('pages.login');
})->name("login");

Route::get('signup', function () {
    return view('pages.signup');
})->name("signup");

Route::get('web-development', function () {
    return view('pages.web-development');
})->name('web-development');

Route::get('app-development', function () {
    return view('pages.app-development');
})->name('app-development');

Route::get('recover-account', function () {
    return view('pages.recover-account');
})->name('recover-account');

Route::get('ecommerce-solutions', function () {
    return view('pages.ecommerce-solutions');
})->name('ecommerce-solutions');

Route::get('maintenance-support', function () {
    return view('pages.maintenance-support');
})->name('maintenance-support');

Route::get('custom-solutions', function () {
    return view('pages.custom-solutions');
})->name('custom-solutions');

Route::get('seo-services', function () {
    return view('pages.seo-services');
})->name('seo-services');

Route::get('graphic-design', function () {
    return view('pages.graphic-design');
})->name('graphic-design');

Route::get('ui-ux-design', function () {
    return view('pages.ui-ux-design');
})->name('ui-ux-design');

Route::get('content-writing', function () {
    return view('pages.content-writing');
})->name('content-writing');
