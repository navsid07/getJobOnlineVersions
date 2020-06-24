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
//$route['emailtesting']='recruiter/testemaill';
//$route['recruiter'] = 'Welcome';
$route['default_controller'] = 'Welcome';
$route['404_override'] = 'error404';
$route['403_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;
$route['newRoute']='https://get-job.online/versionUpdates';
//routes for welcome controller
$route['CookiePolicy']='Welcome/CookiePolicy';
$route['Report'] = 'Welcome/report';
$route['PrivacyPolicy'] = 'Welcome/privacy_policy';
$route['GetCookie'] = 'Welcome/getcookie';
$route['ChangeCookie'] = 'Welcome/changeCookie';
$route['SelectCountry']='Welcome/index';
$route['Index'] = 'Welcome/dashboardIndex';
$route['Login'] = 'Welcome/login';
$route['NewsletterIndex'] = 'Welcome/newsletterindex';
$route['Email'] = 'Welcome/email';
$route['FeedbackSubmit']='Welcome/feedbacksubmit';
$route['Single'] = 'Welcome/single';
$route['ContactUs'] = 'Welcome/contact';
$route['AboutUs'] = 'Welcome/about';
$route['ContactForm'] = 'Welcome/contactform';
$route['SearchResult']='Welcome/searchresult';
$route['NoApply'] = 'Welcome/noapply';
$route['Redirect'] = 'Welcome/redirectt';
$route['CategorySearch'] = 'Welcome/searchcategory';
$route['SigninAs'] = 'Welcome/signinas';
$route['Dashboard']='Welcome/dashboard';
$route[''] = 'Welcome/paymentfailed';
$route[''] = 'Welcome/paymentsuccess';
$route['Admin'] = 'Welcome/admin';
$route['SaveAdmin'] = 'Welcome/saveadmin';
$route['Search'] = 'Welcome/search';
$route['WelcomeEmployeeDetail'] = 'Welcome/employeeDetailNoSignin';
$route['TrafficAnalytics'] = 'Welcome/trafficAnalytics';

//routes for employee contoller
$route['startSearch']='Employee/searchNoSession';
$route['RateEmployee']='Employee/employeerating';
$route['EmployeeRegistration'] = 'Employee/index';
$route['EmployeePendingRegistrationSteps'] = 'Employee/loademployeeEdit';
$route['EmployeeRegistrationStep2'] = 'Employee/loademployeereg2';
$route['EmployeeRegistrationStep3'] = 'Employee/loademployeereg3';
$route['EmployeeRegistrationStep4']='Employee/loademployeereg4';
$route['EmployeeRegistrationStep5'] = 'Employee/loademployeereg5';
$route['EmployeeRegistrationStep6'] = 'Employee/loademployeereg6';
$route['EmployeeRegistrationStep7'] = 'Employee/loademployeereg7';
$route['EmployeeRegistrationStep8'] = 'Employee/loademployeereg8';
$route['EmployeeRegisterQueryStep1']='Employee/registertest';
$route['EmployeeRegisterQueryStep2'] = 'Employee/registerstep2';
$route['EmployeeRegisterQueryStep3'] = 'Employee/registerstep3';
$route['EmployeeRegisterQueryStep5'] = 'Employee/registerstep5';
$route['EmployeeRegisterQueryStep6'] = 'Employee/registerstep6';
$route['EmployeeRegisterQueryStep7']='Employee/registerstep7';
$route['EmployeeRegisterQueryStep4'] = 'Employee/registerstep4';
$route['EmployeeRegisterQueryStep8'] = 'Employee/registerstep8';
$route['EmployeeChangePasswordQuery'] = 'Employee/changepasswordquery';
$route['EmployeeChangePassword'] = 'Employee/changepassword';
$route['EmployeeCheckPassword']='Employee/checkPassword';
//$route[''] = 'Employee/verificationemailagain1';
$route['EmployeeOldVerificationLink'] = 'Employee/verificationemailagainn';
//$route[''] = 'Employee/verificationemailagain';
$route['RepeatEmployeeVerificationEmail'] = 'Employee/sendagainemail';
$route['ChangeEmployeeEmail']='Employee/fetchdata';
$route['EmployeeChangeEmail'] = 'Employee/changeemail';
$route['EmployeeVerification/(:any)/(:any)'] = 'Employee/verify';
$route['EmployeePayLater'] = 'Employee/paylater';
$route['EditEmployee'] = 'Employee/editprofile';
$route['JobVisitor']='Employee/jobdetailnosignin';
$route['EmployeeJobDetail'] = 'Employee/jobdetail';
$route['ReportEmployee'] = 'Employee/reportEmployee';
$route['ReportArticle'] = 'Employee/reportArticle';
$route['ReportJob'] = 'Employee/reportJob';
$route['ShortlistJob']='Employee/shortlistJob';
$route['EmployeeRefresh'] = 'Employee/refreshpage';
$route['SharedJobDetail'] = 'Employee/jobdetailshare';
$route['EmployeeLogin'] = 'Employee/login';
$route['RedirectEmployeeLogin'] = 'Employee/afterLogin';
//$route['']='Employee/checkform';
$route['EmployeeJqueryLogin'] = 'Employee/loginqueryJquery';
$route['EmployeeLoginQuery'] = 'Employee/loginquery';
$route['EmployeeLogout'] = 'Employee/logout';
$route['EmployeeBalance'] = 'Employee/applycheckbalance';
$route['AddBalance']='Employee/addBalanceLoad';
$route['EmployeeAddBalance'] = 'Employee/addbalance';
//$route[''] = 'Employee/ssearchh'; may be not in use
$route['EmployeeSearch'] = 'Employee/search';
$route['EmployeeSearching'] = 'Employee/search2';
$route['SaveRecruiter'] = 'Employee/save';
$route['EmployeeWishlist'] = 'Employee/wishlist';
$route['DeleteEmployeeWishlist'] = 'Employee/deletewishlist';
$route['DeleteEmployeeShortlist'] = 'Employee/deleteshortlist';
$route['EmployeeRecruiterDetail'] = 'Employee/recruiterdetaill';
$route['EmployeeAddWishlist'] = 'Employee/addwishlist';
$route['EmployeeDashboard'] = 'Employee/dashboard';
$route['EmployeeArticle'] = 'Employee/articleView';
$route['PreviousArticleEmployee'] = 'Employee/previousArticle';
$route['NextArticleEmployee'] = 'Employee/nextArticle';
$route['EmployeeRegistrationStepsAnalytics'] = 'Employee/checkRegistrationSteps';
$route['EmployeeDashboardRedirect'] = 'Employee/employeedashboard';
$route['AddEmployeeCertification'] = 'Employee/addcertification';
$route['DeleteEmployeeCertification'] = 'Employee/deletecertification';
$route['DeleteEmployeeArticle'] = 'Employee/deleteArticle';
$route['AddEmployeeCertificationQuery'] = 'Employee/addCertificationQuery';
$route['AddEmployeePortfolio'] = 'Employee/addPortfolioView';
//$route[''] = 'Employee/profilePublic';
$route['DeleteEmployeePortfolio'] = 'Employee/deletePortfolio';
$route['AddEmployeePortfolioQuery'] = 'Employee/addPortfolioQuery';
$route['EmployeeArticleBody'] = 'Employee/articleBody';
$route['EditEmployeeArticle'] = 'Employee/editarticle';
//$route[''] = 'Employee/articleBodyQuery';
//$route[''] = 'Employee/deleteapplied';
$route['EmployeeDeleteApplied'] = 'Employee/deleteeapplied';
$route['EmployeeDeleteAppliedJob'] = 'Employee/deleteapplied';
//routes for recruiter contoller
//$route['']='Recruiter/submitfinalrdashboard';
//$route[''] = 'Recruiter/submitfinal';
$route['RegistrationView4'] = 'Recruiter/loadview';
//$route[''] = 'Recruiter/recruiterrate';
$route['RecruiterRegistrationStep1'] = 'Recruiter/registrationstep';
$route['RecruiterRating']= 'Recruiter/recruiterrating';
$route['RecruiterRegistrationStep2'] = 'Recruiter/addnowstep2';
$route['RecruiterRegistrationStep4'] = 'Recruiter/addnowstep4';
$route['RecruiterRegistrationStep3'] = 'Recruiter/addnowstep3';
$route['RecruiterRegistrationStep5'] = 'Recruiter/addnowstep5';
$route['RecruiterRegistration']='Recruiter/registration';
$route['RegistrationMessage'] = 'Recruiter/RegistrationMessage';
$route['RecruiterLogin'] = 'Recruiter/login';
$route['SubmitReportQuery'] = 'Recruiter/submitreport';
$route['RecruiterRatingDashboard'] = 'Recruiter/ratingdashboard';
$route['RecruiterRatingDetail/(:num)']='Recruiter/recruiterratingdetail';
$route['RecruiterRatingDetail']='Recruiter/recruiterratingdetail';
$route['RecruiterComments'] = 'Recruiter/allreplies';
$route['RecruiterDetail'] = 'Recruiter/recruiterdetail';
$route['RecruiterReportArticle'] = 'Recruiter/reportArticle';
$route['ReportRecruiter'] = 'Recruiter/reportRecruiter';
$route['RecruiterRegistrationProcess']='Recruiter/RecruiterRegistrationProcess';
$route['RecruiterRegistrationQueryStep3'] = 'Recruiter/recruiterreg3';
$route['RecruiterRegistrationQueryStep4'] = 'Recruiter/recruiterreg4';
$route['RecruiterRegistrationQueryStep2'] = 'Recruiter/recruiterreg2';
$route[''] = 'Recruiter/load5';
$route['RecruiterRegistrationQueryStep5']='Recruiter/recruiterreg5';
$route['RecruiterRegister'] = 'Recruiter/register';
$route['RecruiterRegistrationQueryStep11'] = 'Recruiter/recruiterreg11';
$route['RecruiterRegistrationQueryStep1'] = 'Recruiter/recruiterreg1';
$route['RecruiterPasswordRecovery'] = 'Recruiter/email';
$route['RecruiterChangePassword']='Recruiter/changepassword';
$route['RecruiterCheckPassword'] = 'Recruiter/checkPassword';
$route['RecruiterChangePasswordQuery'] = 'Recruiter/changepasswordquery';
$route['RecruiterAfterLoginProcessing'] = 'Recruiter/afterLogin';
$route['RecruiterJqueryLogin'] = 'Recruiter/loginqueryJquery';
$route['RecruiterLoginQuery']='Recruiter/loginquery';
$route['SubmitJobForm'] = 'Recruiter/submitjob';
$route['SubmitJobQuery'] = 'Recruiter/jobsubmit';
$route['RecruiterLogout'] = 'Recruiter/logout';
$route['RecruiterFavourite'] = 'Recruiter/favourite';
$route['PayuMoneyView'] = 'Recruiter/payumoney';
$route['ChangeRecruiterEmail']='Recruiter/recruiteremail';
$route[''] = 'Recruiter/checkModel';
$route['RecruiterResendVerificationMail'] = 'Recruiter/checkrepeatemail';
$route['RecruiterVerificationEmailAgain'] = 'Recruiter/verificationmailagain';
$route['RecruiterVerificationExpiredEmail'] = 'Recruiter/verificationmailagainn';
$route['RepeatRecruiterVerificationEmail/(:any)/(:any)']='Recruiter/sendagainemail';
$route['VerifyRecruiter/(:any)/(:any)'] = 'Recruiter/verify';
$route['RecruiterPayLater'] = 'Recruiter/paylater';
$route['RecruiterProfile'] = 'Recruiter/profile';
$route['EditRecruiterProfile'] = 'Recruiter/editprofile';
$route['EmployeeDetailRecruiter'] = 'Recruiter/employerdetail';

$route['RecruitEmployee'] = 'Recruiter/recruit';
$route['RecruitEmployeeSearch'] = 'Recruiter/recruitsearch';
$route['RecruiterRedirect'] = 'Recruiter/rredirect';
$route['RecruitedEmployeeDetail'] = 'Recruiter/employerdetaill';
$route['DownloadResumeRecruiter'] = 'Recruiter/downloadresume';
$route['RecruiterAddBalance'] = 'Recruiter/addbalance';
$route['RecruiterShortlistEmployee'] = 'Recruiter/shortlist';
$route['ShortlistedEmployees'] = 'Recruiter/shortlisted';
$route['RecruiterDeleteShortlisted'] = 'Recruiter/deleteshortlisted';
$route['RecruiterDeleteRecruited'] = 'Recruiter/deleterecruit';
$route['JobSearchResultRecruiter'] = 'Recruiter/serachold';
$route['RecruiterSearch'] = 'Recruiter/search';
$route['RecruiterCheckRegistrationSteps'] = 'Recruiter/checkRegistrationSteps';
$route['RecruiterActivateJob'] = 'Recruiter/activatejob';
$route['recruiterDeactivteJob'] = 'Recruiter/deactivatejob';
$route['RecruiterEditJob'] = 'Recruiter/editjob';
$route['RecruiterUpdateJob'] = 'Recruiter/updatejob';
$route['RecruiterAppliedCandidates'] = 'Recruiter/appliedcandidates';
$route['UpdaterecruiterProfile'] = 'Recruiter/update';
$route['RecruiterJobInvitations'] = 'Recruiter/jobinvitations';
$route['RecruiterJobDetail'] = 'Recruiter/jobdetailrecruiter';
$route['RecruiterDashboard'] = 'Recruiter/dashboard';
$route['RecruiterDeleteArticle'] = 'Recruiter/deleteArticle';
$route['RecruiterJobList'] = 'Recruiter/myjobs';
$route['RecruiterPreviousArticle'] = 'Recruiter/previousarticle';
$route['RecruiterNextArticle'] = 'Recruiter/nextarticle';
$route['RecruiterSingleArticle'] = 'Recruiter/articleview';
$route['RecruiterSubmitArticle'] = 'Recruiter/articleBody';
$route['RecruiterEditArticle'] = 'Recruiter/editarticle';
$route['RecruiterArticleBodyQuery'] = 'Recruiter/articleBodyQuery';
$route['RecruiterDeleteRecruitment'] = 'Recruiter/deleterecruitment';


//routes for recruiter contoller
$route['ReferralIndex']='Referral/index';
$route['ReferralRecruiterLogin'] = 'Referral/loginrecruiter';
$route['EmployeeEarningTransferred'] = 'Referral/transferearningemployee';
$route['RecruiterEarningTransferred'] = 'Referral/transferearningrecruiter';
$route['ReferralEmployeeLogin'] = 'Referral/loginemployee';
//$route['Index']='Referral/index1';
$route['startreferralemployee'] = 'Referral/startreferralemployee';
$route['StartReferralRecruiter'] = 'Referral/startreferralrecruiter';
$route['ReferralDashboard'] = 'Referral/dashboard';
$route['ReferralLink'] = 'Referral/referrallink';
//$route['']='Referral/timee';
$route['SavePaytmNumber'] = 'Referral/savepaytm';
$route['ReferralCompleteRecruiter'] = 'Referral/referralcompletedrecruiter';
$route['ReferralCompleteEmployee'] = 'Referral/referralcompletedemployee';
$route['ReferralOffermail'] = 'Referral/offermail';


//routes for payumoney contoller
$route['TransactionFailedEmployee'] = 'payumoney/order_fail_employee';
$route['TransactionSuccessfull'] = 'payumoney/order_success';
$route['TransactionFailedRecruiter'] = 'payumoney/order_fail';



