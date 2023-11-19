<?php
if(!defined('RP_ERROR')) define('RP_ERROR', 9999);
if(!defined('RP_MAINTENANCE')) define('RP_MAINTENANCE', -1);
if(!defined('RP_INVALID_USERNAME')) define('RP_INVALID_USERNAME', 1000);
if(!defined('RP_INVALID_USERNAME_EXISTS')) define('RP_INVALID_USERNAME_EXISTS', 1032);
if(!defined('RP_INVALID_IP')) define('RP_INVALID_IP', 1001);
if(!defined('RP_INVALID_SUBJECT')) define('RP_INVALID_SUBJECT', 1002);
if(!defined('RP_INVALID_COMMENT')) define('RP_INVALID_COMMENT', 1003);
if(!defined('RP_INVALID_NAME')) define('RP_INVALID_NAME', 1004);
if(!defined('RP_INVALID_FIRSTNAME')) define('RP_INVALID_FIRSTNAME', 1005);
if(!defined('RP_INVALID_LASTNAME')) define('RP_INVALID_LASTNAME', 1006);
if(!defined('RP_INVALID_PASSWORD')) define('RP_INVALID_PASSWORD', 1007);
if(!defined('RP_INVALID_EMAIL')) define('RP_INVALID_EMAIL', 1008);
if(!defined('RP_INVALID_STORE_NAME')) define('RP_INVALID_STORE_NAME', 1009);
if(!defined('RP_INVALID_ADDRESS')) define('RP_INVALID_ADDRESS', 1010);
if(!defined('RP_INVALID_ADDRESS1')) define('RP_INVALID_ADDRESS1', 1029);
if(!defined('RP_INVALID_ADDRESS2')) define('RP_INVALID_ADDRESS2', 1030);
if(!defined('RP_INVALID_MOL')) define('RP_INVALID_MOL', 1011);
if(!defined('RP_INVALID_CITY')) define('RP_INVALID_CITY', 1013);
if(!defined('RP_INVALID_STATE')) define('RP_INVALID_STATE', 1014);
if(!defined('RP_INVALID_ZIP')) define('RP_INVALID_ZIP', 1015);
if(!defined('RP_INVALID_COUNTRY')) define('RP_INVALID_COUNTRY', 1016);
if(!defined('RP_INVALID_PHONE')) define('RP_INVALID_PHONE', 1017);
if(!defined('RP_INVALID_ID')) define('RP_INVALID_ID', 1018);
if(!defined('RP_INVALID_CURRENCY')) define('RP_INVALID_CURRENCY', 1019);
if(!defined('RP_INVALID_SLD')) define('RP_INVALID_SLD', 1020);
if(!defined('RP_INVALID_TLD')) define('RP_INVALID_TLD', 1021);
if(!defined('RP_INVALID_PAYMENT_METHOD')) define('RP_INVALID_PAYMENT_METHOD', 1022);
if(!defined('RP_INVALID_PLAN_PERIOD')) define('RP_INVALID_PLAN_PERIOD', 1023);
if(!defined('RP_INVALID_CURRENCY')) define('RP_INVALID_CURRENCY', 1024);
if(!defined('RP_INVALID_TEXT')) define('RP_INVALID_TEXT', 1025);
if(!defined('RP_INVALID_STORE_ID')) define('RP_INVALID_STORE_ID', 1026);
if(!defined('RP_INVALID_VAT_NUM')) define('RP_INVALID_VAT_NUM', 1027);
if(!defined('RP_INVALID_COMPANY')) define('RP_INVALID_COMPANY', 1028);
if(!defined('RP_INVALID_COMPANY_NAME')) define('RP_INVALID_COMPANY_NAME', 1169);
if(!defined('RP_INVALID_DOMAIN')) define('RP_INVALID_DOMAIN', 1031);
if(!defined('RP_INVALID_DOMAIN_EXISTS')) define('RP_INVALID_DOMAIN_EXISTS', 1046);
if(!defined('RP_INVALID_SUBDOMAIN')) define('RP_INVALID_SUBDOMAIN', 1040);
if(!defined('RP_INVALID_SUBDOMAIN_EXISTS')) define('RP_INVALID_SUBDOMAIN_EXISTS', 1041);
if(!defined('RP_INVALID_EPP')) define('RP_INVALID_EPP', 1042);
if(!defined('RP_NO_WALLET_AMOUNT')) define('RP_NO_WALLET_AMOUNT', 1050);
if(!defined('RP_INVALID_NO_CLIENT')) define('RP_INVALID_NO_CLIENT', 1063);
if(!defined('RP_INVALID_HOSTNAME')) define('RP_INVALID_HOSTNAME', 1076);
if(!defined('RP_INVALID_PASSWORD_NOT_STRONG')) define('RP_INVALID_PASSWORD_NOT_STRONG', 1080);
if(!defined('RP_EMAILS_LIMIT_EXCEEDED')) define('RP_EMAILS_LIMIT_EXCEEDED', 1171); 

if(!defined('RP_INVALID_REGISTRANT_FIRSTNAME')) define('RP_INVALID_REGISTRANT_FIRSTNAME', 1100);
if(!defined('RP_INVALID_REGISTRANT_LASTNAME')) define('RP_INVALID_REGISTRANT_LASTNAME', 1101);
if(!defined('RP_INVALID_REGISTRANT_EMAIL')) define('RP_INVALID_REGISTRANT_EMAIL', 1102);
if(!defined('RP_INVALID_REGISTRANT_ADDRESS1')) define('RP_INVALID_REGISTRANT_ADDRESS1', 1103);
if(!defined('RP_INVALID_REGISTRANT_ADDRESS2')) define('RP_INVALID_REGISTRANT_ADDRESS2', 1104);
if(!defined('RP_INVALID_REGISTRANT_CITY')) define('RP_INVALID_REGISTRANT_CITY', 1105);
if(!defined('RP_INVALID_REGISTRANT_STATE')) define('RP_INVALID_REGISTRANT_STATE', 1106);
if(!defined('RP_INVALID_REGISTRANT_POSTALCODE')) define('RP_INVALID_REGISTRANT_POSTALCODE', 1107);
if(!defined('RP_INVALID_REGISTRANT_FAX')) define('RP_INVALID_REGISTRANT_FAX', 1108);
if(!defined('RP_INVALID_REGISTRANT_COUNTRY')) define('RP_INVALID_REGISTRANT_COUNTRY', 1109);
if(!defined('RP_INVALID_REGISTRANT_PHONE')) define('RP_INVALID_REGISTRANT_PHONE', 1110);
if(!defined('RP_INVALID_REGISTRANT_POSTALCODE')) define('RP_INVALID_REGISTRANT_POSTALCODE', 1111);
if(!defined('RP_INVALID_REGISTRANT_ORGANIZATIONNAME')) define('RP_INVALID_REGISTRANT_ORGANIZATIONNAME', 1112);
if(!defined('RP_INVALID_REGISTRANT_JOBTITLE')) define('RP_INVALID_REGISTRANT_JOBTITLE', 1113);

if(!defined('RP_INVALID_BILLING_FIRSTNAME')) define('RP_INVALID_BILLING_FIRSTNAME', 1114);
if(!defined('RP_INVALID_BILLING_LASTNAME')) define('RP_INVALID_BILLING_LASTNAME', 1115);
if(!defined('RP_INVALID_BILLING_EMAIL')) define('RP_INVALID_BILLING_EMAIL', 1116);
if(!defined('RP_INVALID_BILLING_ADDRESS1')) define('RP_INVALID_BILLING_ADDRESS1', 1117);
if(!defined('RP_INVALID_BILLING_ADDRESS2')) define('RP_INVALID_BILLING_ADDRESS2', 1118);
if(!defined('RP_INVALID_BILLING_CITY')) define('RP_INVALID_BILLING_CITY', 1119);
if(!defined('RP_INVALID_BILLING_STATE')) define('RP_INVALID_BILLING_STATE', 1120);
if(!defined('RP_INVALID_BILLING_POSTALCODE')) define('RP_INVALID_BILLING_POSTALCODE', 1121);
if(!defined('RP_INVALID_BILLING_FAX')) define('RP_INVALID_BILLING_FAX', 1122);
if(!defined('RP_INVALID_BILLING_COUNTRY')) define('RP_INVALID_BILLING_COUNTRY', 1123);
if(!defined('RP_INVALID_BILLING_PHONE')) define('RP_INVALID_BILLING_PHONE', 1124);
if(!defined('RP_INVALID_BILLING_POSTALCODE')) define('RP_INVALID_BILLING_POSTALCODE', 1125);
if(!defined('RP_INVALID_BILLING_ORGANIZATIONNAME')) define('RP_INVALID_BILLING_ORGANIZATIONNAME', 1126);
if(!defined('RP_INVALID_BILLING_JOBTITLE')) define('RP_INVALID_BILLING_JOBTITLE', 1127);

if(!defined('RP_INVALID_ADMIN_FIRSTNAME')) define('RP_INVALID_ADMIN_FIRSTNAME', 1128);
if(!defined('RP_INVALID_ADMIN_LASTNAME')) define('RP_INVALID_ADMIN_LASTNAME', 1129);
if(!defined('RP_INVALID_ADMIN_EMAIL')) define('RP_INVALID_ADMIN_EMAIL', 1130);
if(!defined('RP_INVALID_ADMIN_ADDRESS1')) define('RP_INVALID_ADMIN_ADDRESS1', 1131);
if(!defined('RP_INVALID_ADMIN_ADDRESS2')) define('RP_INVALID_ADMIN_ADDRESS2', 1132);
if(!defined('RP_INVALID_ADMIN_CITY')) define('RP_INVALID_ADMIN_CITY', 1133);
if(!defined('RP_INVALID_ADMIN_STATE')) define('RP_INVALID_ADMIN_STATE', 1134);
if(!defined('RP_INVALID_ADMIN_POSTALCODE')) define('RP_INVALID_ADMIN_POSTALCODE', 1135);
if(!defined('RP_INVALID_ADMIN_FAX')) define('RP_INVALID_ADMIN_FAX', 1136);
if(!defined('RP_INVALID_ADMIN_COUNTRY')) define('RP_INVALID_ADMIN_COUNTRY', 1137);
if(!defined('RP_INVALID_ADMIN_PHONE')) define('RP_INVALID_ADMIN_PHONE', 1138);
if(!defined('RP_INVALID_ADMIN_POSTALCODE')) define('RP_INVALID_ADMIN_POSTALCODE', 1139);
if(!defined('RP_INVALID_ADMIN_ORGANIZATIONNAME')) define('RP_INVALID_ADMIN_ORGANIZATIONNAME', 1140);
if(!defined('RP_INVALID_ADMIN_JOBTITLE')) define('RP_INVALID_ADMIN_JOBTITLE', 1141);

if(!defined('RP_INVALID_TECH_FIRSTNAME')) define('RP_INVALID_TECH_FIRSTNAME', 1142);
if(!defined('RP_INVALID_TECH_LASTNAME')) define('RP_INVALID_TECH_LASTNAME', 1143);
if(!defined('RP_INVALID_TECH_EMAIL')) define('RP_INVALID_TECH_EMAIL', 1144);
if(!defined('RP_INVALID_TECH_ADDRESS1')) define('RP_INVALID_TECH_ADDRESS1', 1145);
if(!defined('RP_INVALID_TECH_ADDRESS2')) define('RP_INVALID_TECH_ADDRESS2', 1146);
if(!defined('RP_INVALID_TECH_CITY')) define('RP_INVALID_TECH_CITY', 1147);
if(!defined('RP_INVALID_TECH_STATE')) define('RP_INVALID_TECH_STATE', 1148);
if(!defined('RP_INVALID_TECH_POSTALCODE')) define('RP_INVALID_TECH_POSTALCODE', 1149);
if(!defined('RP_INVALID_TECH_FAX')) define('RP_INVALID_TECH_FAX', 1150);
if(!defined('RP_INVALID_TECH_COUNTRY')) define('RP_INVALID_TECH_COUNTRY', 1151);
if(!defined('RP_INVALID_TECH_PHONE')) define('RP_INVALID_TECH_PHONE', 1152);
if(!defined('RP_INVALID_TECH_POSTALCODE')) define('RP_INVALID_TECH_POSTALCODE', 1153);
if(!defined('RP_INVALID_TECH_ORGANIZATIONNAME')) define('RP_INVALID_TECH_ORGANIZATIONNAME', 1154);
if(!defined('RP_INVALID_TECH_JOBTITLE')) define('RP_INVALID_TECH_JOBTITLE', 1155);

if(!defined('RP_MISSING_PURPOSE')) define('RP_MISSING_PURPOSE', 1166);

if(!defined('RP_INVALID_EXTRA_ATTRIBUTE')) define('RP_INVALID_EXTRA_ATTRIBUTE', 1070);

if(!defined('RP_INVALID_US_NEXUS')) define('RP_INVALID_US_NEXUS', 1180);
if(!defined('RP_INVALID_US_PURPOSE')) define('RP_INVALID_US_PURPOSE', 1181);
if(!defined('RP_INVALID_GLOBAL_CC_US')) define('RP_INVALID_GLOBAL_CC_US', 1182);
if(!defined('RP_INVALID_CIRA_LEGAL_TYPE')) define('RP_INVALID_CIRA_LEGAL_TYPE', 1183);
if(!defined('RP_INVALID_CIRA_ORG_REGISTERED_IN')) define('RP_INVALID_CIRA_ORG_REGISTERED_IN', 1184);
if(!defined('RP_INVALID_CIRA_REGISTRANT')) define('RP_INVALID_CIRA_REGISTRANT', 1185);
if(!defined('RP_INVALID_REGISTERED_FOR')) define('RP_INVALID_REGISTERED_FOR', 1186);
if(!defined('RP_INVALID_UK_LEGAL_TYPE')) define('RP_INVALID_UK_LEGAL_TYPE', 1187);
if(!defined('RP_INVALID_UK_REG_OPT_OUT')) define('RP_INVALID_UK_REG_OPT_OUT', 1188);
if(!defined('RP_INVALID_UK_REG_CO_NO')) define('RP_INVALID_UK_REG_CO_NO', 1189);
if(!defined('RP_INVALID_EU_WHOISPOLICY')) define('RP_INVALID_EU_WHOISPOLICY', 1190);
if(!defined('RP_INVALID_EU_AGREEDELETE')) define('RP_INVALID_EU_AGREEDELETE', 1191);
if(!defined('RP_INVALID_EU_ADR_LANG')) define('RP_INVALID_EU_ADR_LANG', 1192);
if(!defined('RP_INVALID_COM_MX_AGREEDELETE')) define('RP_INVALID_COM_MX_AGREEDELETE', 1193);
if(!defined('RP_INVALID_CONFIRMADDRESS')) define('RP_INVALID_CONFIRMADDRESS', 1194);
if(!defined('RP_INVALID_DE_AGREEDELETE')) define('RP_INVALID_DE_AGREEDELETE', 1195);
if(!defined('RP_INVALID_ASIA_CCLOCALITY')) define('RP_INVALID_ASIA_CCLOCALITY', 1196);
if(!defined('RP_INVALID_ASIA_LOCALITYCITY')) define('RP_INVALID_ASIA_LOCALITYCITY', 1197);
if(!defined('RP_INVALID_ASIA_LOCALITYSP')) define('RP_INVALID_ASIA_LOCALITYSP', 1198);
if(!defined('RP_INVALID_ASIA_LEGALENTITYTYPE')) define('RP_INVALID_ASIA_LEGALENTITYTYPE', 1199);
if(!defined('RP_INVALID_ASIA_OTHERLETYPE')) define('RP_INVALID_ASIA_OTHERLETYPE', 1200);
if(!defined('RP_INVALID_ASIA_IDENTFORM')) define('RP_INVALID_ASIA_IDENTFORM', 1201);
if(!defined('RP_INVALID_ASIA_OTHERIDENTFORM')) define('RP_INVALID_ASIA_OTHERIDENTFORM', 1202);
if(!defined('RP_INVALID_ASIA_IDENT_NUMBER')) define('RP_INVALID_ASIA_IDENT_NUMBER', 1203);
if(!defined('RP_INVALID_MOBI_AGREEMENT')) define('RP_INVALID_MOBI_AGREEMENT', 1204);
if(!defined('RP_INVALID_NL_REG_TYPE')) define('RP_INVALID_NL_REG_TYPE', 1205);
if(!defined('RP_INVALID_NL_DOC_NUMBER')) define('RP_INVALID_NL_DOC_NUMBER', 1206);
if(!defined('RP_INVALID_BE_AGREEDELETE')) define('RP_INVALID_BE_AGREEDELETE', 1207);
if(!defined('RP_INVALID_IT_AGREEDELETE')) define('RP_INVALID_IT_AGREEDELETE', 1208);
if(!defined('RP_INVALID_IT_NOTE')) define('RP_INVALID_IT_NOTE', 1209);
if(!defined('RP_INVALID_AT_AGREEDELETE')) define('RP_INVALID_AT_AGREEDELETE', 1210);
if(!defined('RP_INVALID_NZ_AGREEDELETE')) define('RP_INVALID_NZ_AGREEDELETE', 1211);
if(!defined('RP_INVALID_JP_PREFECTURE')) define('RP_INVALID_JP_PREFECTURE', 1212);
if(!defined('RP_INVALID_JP_AGREEDELETE')) define('RP_INVALID_JP_AGREEDELETE', 1213);
if(!defined('RP_INVALID_AU_REG_NAME')) define('RP_INVALID_AU_REG_NAME', 1214);
if(!defined('RP_INVALID_AU_DOC_TYPE')) define('RP_INVALID_AU_DOC_TYPE', 1215);
if(!defined('RP_INVALID_AU_DOC_NUMBER')) define('RP_INVALID_AU_DOC_NUMBER', 1216);
if(!defined('RP_INVALID_AU_POLICY_REASON')) define('RP_INVALID_AU_POLICY_REASON', 1217);
if(!defined('RP_INVALID_AU_REQUIREMENT_COUNTRY')) define('RP_INVALID_AU_REQUIREMENT_COUNTRY', 1353);
if(!defined('RP_INVALID_PRO_NOTE')) define('RP_INVALID_PRO_NOTE', 1218);
if(!defined('RP_INVALID_IT_DOC_NUMBER')) define('RP_INVALID_IT_DOC_NUMBER', 1224);
if(!defined('RP_INVALID_IT_REG_TYPE')) define('RP_INVALID_IT_REG_TYPE', 1225);
if(!defined('RP_INVALID_IT_REG_COUNTRY')) define('RP_INVALID_IT_REG_COUNTRY', 1226);


if(!defined('RP_INVALID_VPS_OS')) define('RP_INVALID_VPS_OS', 1400);
if(!defined('RP_INVALID_VPS_IPS')) define('RP_INVALID_VPS_IPS', 1401);
if(!defined('RP_INVALID_VPS_MANAGED_SERVICES')) define('RP_INVALID_VPS_MANAGED_SERVICES', 1402);



if(!defined('RP_INVALID_USERNAME_PASSWORD')) define('RP_INVALID_USERNAME_PASSWORD', 100);
if(!defined('RP_INVALID_PLAN_ID')) define('RP_INVALID_PLAN_ID', 101);
if(!defined('RP_INVALID_INQUIRY')) define('RP_INVALID_INQUIRY', 102);
if(!defined('RP_INVALID_COMMAND')) define('RP_INVALID_COMMAND', 103);
if(!defined('RP_INVALID_REPASSWORD')) define('RP_INVALID_REPASSWORD', 104);
if(!defined('RP_INVALID_IMAGE_CODE')) define('RP_INVALID_IMAGE_CODE', 105);

if (isset($_POST['rp_lang'])) $rp_lang = @$_POST['rp_lang'];
$rp_error_messages = array();
$rp_error_messages[RP_ERROR] = __rp('RP_ERROR','An error has occurred while processing your order. Please try again in a few minutes.');
$rp_error_messages[RP_MAINTENANCE] = __rp('RP_MAINTENANCE','Service is under maintenance');
$rp_error_messages[RP_INVALID_NAME] = __rp('RP_INVALID_NAME','Invalid Name! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_FIRSTNAME] = __rp('RP_INVALID_FIRSTNAME','Invalid First Name! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_REGISTRANT_FIRSTNAME] = __rp('RP_INVALID_REGISTRANT_FIRSTNAME','Invalid First Name filled in the Registrant Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_BILLING_FIRSTNAME] = __rp('RP_INVALID_BILLING_FIRSTNAME','Invalid First Name filled in the Billing Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_ADMIN_FIRSTNAME] = __rp('RP_INVALID_ADMIN_FIRSTNAME','Invalid First Name filled in the Administrative Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_TECH_FIRSTNAME] = __rp('RP_INVALID_TECH_FIRSTNAME','Invalid First Name filled in the Technical Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_LASTNAME] = __rp('RP_INVALID_LASTNAME','Invalid Last Name! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_REGISTRANT_LASTNAME] = __rp('RP_INVALID_REGISTRANT_LASTNAME','Invalid Last Name filled in the Registrant Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_BILLING_LASTNAME] = __rp('RP_INVALID_BILLING_LASTNAME','Invalid Last Name filled in the Billing Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_ADMIN_LASTNAME] = __rp('RP_INVALID_ADMIN_LASTNAME','Invalid Last Name filled in the Administrative Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_TECH_LASTNAME] = __rp('RP_INVALID_TECH_LASTNAME','Invalid Last Name filled in the Technical Information section! Please try again by using only A-z letters, e.g. John.');
$rp_error_messages[RP_INVALID_EMAIL] = __rp('RP_INVALID_EMAIL','Invalid E-mail! Please try again to enter your e-mail address, e.g. you@my-best-domain.com.');
$rp_error_messages[RP_INVALID_REGISTRANT_EMAIL] = __rp('RP_INVALID_REGISTRANT_EMAIL','Invalid E-mail filled in the Registrant Information section! Please try again to enter your e-mail address, e.g. you@my-best-domain.com.');
$rp_error_messages[RP_INVALID_BILLING_EMAIL] = __rp('RP_INVALID_BILLING_EMAIL','Invalid E-mail filled in the Billing Information section! Please try again to enter your e-mail address, e.g. you@my-best-domain.com.');
$rp_error_messages[RP_INVALID_ADMIN_EMAIL] = __rp('RP_INVALID_ADMIN_EMAIL','Invalid E-mail filled in the Administrative Information section! Please try again to enter your e-mail address, e.g. you@my-best-domain.com.');
$rp_error_messages[RP_INVALID_TECH_EMAIL] = __rp('RP_INVALID_TECH_EMAIL','Invalid E-mail filled in the Technical Information section! Please try again to enter your e-mail address, e.g. you@my-best-domain.com.');
$rp_error_messages[RP_INVALID_VAT_NUM] = __rp('RP_INVALID_VAT_NUM','Invalid VAT number! Please try again by using only 0-9 numbers and A-z letters, e.g. 12345678.');
$rp_error_messages[RP_INVALID_COMPANY] = __rp('RP_INVALID_COMPANY','Invalid Company! Please try again by using only A-z letters and 0-9 numbers, e.g. My Company Ltd.');
$rp_error_messages[RP_INVALID_USERNAME] = __rp('RP_INVALID_USERNAME','Invalid Username! Please try again by using only small letters and 0-9 numbers, e.g. john28.');
$rp_error_messages[RP_INVALID_USERNAME_EXISTS] = __rp('RP_INVALID_USERNAME_EXISTS','This username already exists in our database! Please choose another username.');
$rp_error_messages[RP_INVALID_SUBDOMAIN] = __rp('RP_INVALID_SUBDOMAIN','Invalid Subdomain! Please try again by using only small letters and 0-9 numbers, e.g. "home.my-best-domain.com".');
$rp_error_messages[RP_INVALID_SUBDOMAIN_EXISTS] = __rp('RP_INVALID_SUBDOMAIN_EXISTS','This subdomain already exists in our database! Please choose another subdomain.');
$rp_error_messages[RP_INVALID_EPP] = __rp('RP_INVALID_EPP','Invalid EPP Authorization Code! Please try again by using only A-z letters and 0-9 numbers, e.g. ABCD1234');
$rp_error_messages[RP_INVALID_USERNAME_PASSWORD] = __rp('RP_INVALID_USERNAME_PASSWORD','Invalid Username/Password Combination! Please try again by using only A-z letters and 0-9 numbers.');
$rp_error_messages[RP_INVALID_NO_CLIENT] = __rp('RP_INVALID_NO_CLIENT','Invalid Username/Password Combination! Please try again by using only A-z letters and 0-9 numbers.');
$rp_error_messages[RP_INVALID_PASSWORD_NOT_STRONG] = __rp('RP_INVALID_PASSWORD_NOT_STRONG','Invalid Root Password! Please enter a password starting with A-z letters and 0-9 numbers, 6 to 20 symbols.');
$rp_error_messages[RP_INVALID_REPASSWORD] = __rp('RP_INVALID_REPASSWORD','Invalid Re-Password! Root Password and Re-Password must be the same.');
$rp_error_messages[RP_INVALID_ADDRESS] = __rp('RP_INVALID_ADDRESS','Invalid Address! Please try again by using only A-z letters and 0-9 numbers, e.g. 38 King Street, app. 45.');
$rp_error_messages[RP_INVALID_BILLING_ADDRESS1] = __rp('RP_INVALID_BILLING_ADDRESS1','Invalid Address filled in the Billing Information section! Please, try again using only A-z letters and ,0-9 numbers e.g. 1900 University Drive, suite 109.');
$rp_error_messages[RP_INVALID_ADMIN_ADDRESS1] = __rp('RP_INVALID_ADMIN_ADDRESS1','Invalid Address filled in the Administrative Information section! Please, try again using only A-z letters and ,0-9 numbers e.g. 1900 University Drive, suite 109.');
$rp_error_messages[RP_INVALID_TECH_ADDRESS1] = __rp('RP_INVALID_TECH_ADDRESS1','Invalid Address! Please try again by using only A-z letters and 0-9 numbers, e.g. 38 King Street, app. 45.');
$rp_error_messages[RP_INVALID_ZIP] = __rp('RP_INVALID_ZIP','Invalid ZIP/Postal Code! Please try again by using only A-z letters and 0-9 numbers, e.g. 25355 for US and E14 5HP for the UK.');
$rp_error_messages[RP_INVALID_REGISTRANT_POSTALCODE] = __rp('RP_INVALID_REGISTRANT_POSTALCODE','Please fill a valid ZIP/Postal Code in the Registrant Information section! Please try again by using only A-z letters and 0-9 numbers, e.g. 25355 for US and E14 5HP for the UK.');
$rp_error_messages[RP_INVALID_BILLING_POSTALCODE] = __rp('RP_INVALID_BILLING_POSTALCODE','Please fill a valid ZIP/Postal Code in the Billing Information section! Please try again by using only A-z letters and 0-9 numbers, e.g. 25355 for US and E14 5HP for the UK.');
$rp_error_messages[RP_INVALID_ADMIN_POSTALCODE] = __rp('RP_INVALID_ADMIN_POSTALCODE','Please fill a valid ZIP/Postal Code in the Administrative Information section! Please try again by using only A-z letters and 0-9 numbers, e.g. 25355 for US and E14 5HP for the UK.');
$rp_error_messages[RP_INVALID_TECH_POSTALCODE] = __rp('RP_INVALID_TECH_POSTALCODE','Please fill a valid ZIP/Postal Code in the Technical Information section! Please try again by using only A-z letters and 0-9 numbers, e.g. 25355 for US and E14 5HP for the UK.');
$rp_error_messages[RP_INVALID_CITY] = __rp('RP_INVALID_CITY','Invalid City! Please try again by using only A-z letters, e.g. London.');
$rp_error_messages[RP_INVALID_REGISTRANT_CITY] = __rp('RP_INVALID_REGISTRANT_CITY','Invalid City filled in the Registrant Information section! Please, try again using only A-z letters, e.g. London.');
$rp_error_messages[RP_INVALID_BILLING_CITY] = __rp('RP_INVALID_BILLING_CITY','Invalid City filled in the Billing Information section! Please, try again using only A-z letters, e.g. London.');
$rp_error_messages[RP_INVALID_ADMIN_CITY] = __rp('RP_INVALID_ADMIN_CITY','Invalid City filled in the Administrative Information section! Please, try again using only A-z letters, e.g. London.');
$rp_error_messages[RP_INVALID_TECH_CITY] = __rp('RP_INVALID_TECH_CITY','Invalid City filled in the Technical Information section! Please, try again using only A-z letters, e.g. London.');
$rp_error_messages[RP_INVALID_STATE] = __rp('RP_INVALID_STATE','Invalid State! Please try again by using only A-z letters, e.g. Georgia.');
$rp_error_messages[RP_INVALID_REGISTRANT_STATE] = __rp('RP_INVALID_REGISTRANT_STATE','Invalid State filled in the Registrant Information section!! Please, try again using only A-z letters, e.g. Georgia.');
$rp_error_messages[RP_INVALID_BILLING_STATE] = __rp('RP_INVALID_BILLING_STATE','Invalid State filled in the Billing Information section!! Please, try again using only A-z letters, e.g. Georgia.');
$rp_error_messages[RP_INVALID_ADMIN_STATE] = __rp('RP_INVALID_ADMIN_STATE','Invalid State filled in the Administrative Information section!! Please, try again using only A-z letters, e.g. Georgia.');
$rp_error_messages[RP_INVALID_TECH_STATE] = __rp('RP_INVALID_TECH_STATE','Invalid State filled in the Technical Information section!! Please, try again using only A-z letters, e.g. Georgia.');
$rp_error_messages[RP_INVALID_COUNTRY] = __rp('RP_INVALID_COUNTRY','Invalid Country! Please try again by using only A-z letters, e.g. United States.');
$rp_error_messages[RP_INVALID_REGISTRANT_COUNTRY] = __rp('RP_INVALID_REGISTRANT_COUNTRY','Invalid Country filled in the Registrant Information section!');
$rp_error_messages[RP_INVALID_BILLING_COUNTRY] = __rp('RP_INVALID_BILLING_COUNTRY','Invalid Country filled in the Billing Information section!');
$rp_error_messages[RP_INVALID_ADMIN_COUNTRY] = __rp('RP_INVALID_ADMIN_COUNTRY','Invalid Country filled in the Administrative Information section!');
$rp_error_messages[RP_INVALID_TECH_COUNTRY] = __rp('RP_INVALID_TECH_COUNTRY','Invalid Country filled in the Technical Information section!');
$rp_error_messages[RP_INVALID_PHONE] = __rp('RP_INVALID_PHONE','Invalid Phone! Please try again by using only 0-9 numbers, e.g. +1 555 870 370.');
$rp_error_messages[RP_INVALID_REGISTRANT_PHONE] = __rp('RP_INVALID_REGISTRANT_PHONE','Invalid Phone filled in the Registrant Information section! Please, try again using only 0-9 numbers, e.g. +1.555870370.');
$rp_error_messages[RP_INVALID_BILLING_PHONE] = __rp('RP_INVALID_BILLING_PHONE','Invalid Phone filled in the Billing Information section! Please, try again using only 0-9 numbers, e.g. +1.555870370.');
$rp_error_messages[RP_INVALID_ADMIN_PHONE] = __rp('RP_INVALID_ADMIN_PHONE','Invalid Phone filled in the Administrative Information section! Please, try again using only 0-9 numbers, e.g. +1.555870370.');
$rp_error_messages[RP_INVALID_TECH_PHONE] = __rp('RP_INVALID_TECH_PHONE','Invalid Phone filled in the Technical Information section! Please, try again using only 0-9 numbers, e.g. +1.555870370.');
$rp_error_messages[RP_INVALID_PLAN_ID] = __rp('RP_INVALID_PLAN_ID','Invalid plan ID! Please try again in 15 minutes.');
$rp_error_messages[RP_INVALID_HOSTNAME] = __rp('RP_INVALID_HOSTNAME','Invalid Hostname! Please try again by using only small letters and 0-9 numbers, e.g. my-hostname.com.');
$rp_error_messages[RP_INVALID_DOMAIN] = __rp('RP_INVALID_DOMAIN','Invalid Domain! Please try again by using only small letters and 0-9 numbers, e.g. my-best-domain.com.');
$rp_error_messages["NO_SLD"] = $rp_error_messages[RP_INVALID_DOMAIN];//__rp('RP_NO_SLD','Invalid Domain! Please try again by using only small letters and 0-9 numbers, e.g. my-best-domain.com.');
$rp_error_messages[RP_INVALID_DOMAIN_EXISTS] = __rp('RP_INVALID_DOMAIN_EXISTS','This domain already exists in our database! Please choose another domain.');
$rp_error_messages[RP_INVALID_SUBJECT] = __rp('RP_INVALID_SUBJECT','Invalid Subject! Please try again.');
$rp_error_messages[RP_INVALID_COMMENT] = __rp('RP_INVALID_COMMENT','Invalid Comment! Please try again.');
$rp_error_messages[RP_INVALID_IMAGE_CODE] = __rp('RP_INVALID_IMAGE_CODE','Invalid Verification Code! Please try again.');
$rp_error_messages[RP_INVALID_COMPANY_NAME] = __rp('RP_INVALID_COMPANY_NAME','Invalid Company Name! Please try again.');
$rp_error_messages[RP_NO_WALLET_AMOUNT] = __rp('RP_NO_WALLET_AMOUNT','You do not have enough money in your wallet!');
$rp_error_messages[RP_MISSING_PURPOSE] = __rp('RP_MISSING_PURPOSE','Missing purpose!');
$rp_error_messages[RP_EMAILS_LIMIT_EXCEEDED] = __rp('RP_EMAILS_LIMIT_EXCEEDED','This email has signuped too many times already!');
$rp_error_messages[RP_INVALID_EXTRA_ATTRIBUTE] = __rp('RP_INVALID_EXTRA_ATTRIBUTE','Invalid Domain Registry Requirements Data!');
$rp_error_messages[RP_INVALID_US_NEXUS] = __rp('RP_INVALID_US_NEXUS','Invalid data filled in the "Nexus Category" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_US_PURPOSE] = __rp('RP_INVALID_US_PURPOSE','Invalid data filled in the "Application Purpose" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_GLOBAL_CC_US] = __rp('RP_INVALID_GLOBAL_CC_US','Invalid Country filled in the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_CIRA_LEGAL_TYPE] = __rp('RP_INVALID_CIRA_LEGAL_TYPE','Invalid data filled in the "Legal type of registrant contact" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_CIRA_ORG_REGISTERED_IN] = __rp('RP_INVALID_CIRA_ORG_REGISTERED_IN','Invalid Organization registered location filled in the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_CIRA_REGISTRANT] = __rp('RP_INVALID_CIRA_REGISTRANT','Invalid Registrant of domain filled in the Domain Registry Requirements section! Please try again by using only a-z/A-Z letters, e.g. John Smith.');
$rp_error_messages[RP_INVALID_REGISTERED_FOR] = __rp('RP_INVALID_REGISTERED_FOR','Invalid data filled in the "Company or person domain is registered for" field of the Domain Registry Requirements section! Please try again by using only a-z/A-Z letters, e.g. John Smith.');
$rp_error_messages[RP_INVALID_UK_LEGAL_TYPE] = __rp('RP_INVALID_UK_LEGAL_TYPE','Invalid data filled in the "Legal type of registrant contact" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_UK_REG_OPT_OUT] = __rp('RP_INVALID_UK_REG_OPT_OUT','Invalid data filled in the "Hide registrant data in Nominet WHOIS" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_UK_REG_CO_NO] = __rp('RP_INVALID_UK_REG_CO_NO','Invalid data filled in the "Company identification number" field of the Domain Registry Requirements section! Please, try again using only 0-9 numbers.');
$rp_error_messages[RP_INVALID_EU_WHOISPOLICY] = __rp('RP_INVALID_EU_WHOISPOLICY','In order to proceed with the domain name registration you must agree with the WHOIS policy of the Registry in the Domain Registry Requirements.');
$rp_error_messages[RP_INVALID_EU_AGREEDELETE] = __rp('RP_INVALID_EU_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_EU_ADR_LANG] = __rp('RP_INVALID_EU_ADR_LANG','Invalid data filled in the "Language you will be handling your .EU legal disputes in" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_COM_MX_AGREEDELETE] = __rp('RP_INVALID_COM_MX_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_CONFIRMADDRESS] = __rp('RP_INVALID_CONFIRMADDRESS','In order to proceed with the domain name registration you must agree with the Special adress and country terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_DE_AGREEDELETE] = __rp('RP_INVALID_DE_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_ASIA_CCLOCALITY] = __rp('RP_INVALID_ASIA_CCLOCALITY','Invalid data filled in the "Locality of Establishment of the Entity" field of the Charter Eligibility Declaration section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_ASIA_LOCALITYCITY] = __rp('RP_INVALID_ASIA_LOCALITYCITY','Invalid data filled in the "City of Establishment of the Entity" field of the Charter Eligibility Declaration section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_ASIA_LOCALITYSP] = __rp('RP_INVALID_ASIA_LOCALITYSP','Invalid data filled in the "State/Province of Establishment of the Entity" field of the Charter Eligibility Declaration section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_ASIA_LEGALENTITYTYPE] = __rp('RP_INVALID_ASIA_LEGALENTITYTYPE','Invalid data filled in the "Type of Entity" field of the Charter Eligibility Declaration section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_ASIA_OTHERLETYPE] = __rp('RP_INVALID_ASIA_OTHERLETYPE','Invalid data filled in the "Other Entity Type" field of the Charter Eligibility Declaration section!');
$rp_error_messages[RP_INVALID_ASIA_IDENTFORM] = __rp('RP_INVALID_ASIA_IDENTFORM','Invalid data filled in the "Form of Identity" field of the Charter Eligibility Declaration section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_ASIA_OTHERIDENTFORM] = __rp('RP_INVALID_ASIA_OTHERIDENTFORM','Invalid data filled in the "Other Identification Form" field of the Charter Eligibility Declaration section!');
$rp_error_messages[RP_INVALID_ASIA_IDENT_NUMBER] = __rp('RP_INVALID_ASIA_IDENT_NUMBER','Invalid data filled in the "Form of Identity ID Number/Code of Reference" field of the Charter Eligibility Declaration section!');
$rp_error_messages[RP_INVALID_MOBI_AGREEMENT] = __rp('RP_INVALID_MOBI_AGREEMENT','In order to proceed with the domain name registration you must agree with the special .MOBI website set-up requirements.');
$rp_error_messages[RP_INVALID_NL_REG_TYPE] = __rp('RP_INVALID_NL_REG_TYPE','Invalid data filled in the "Legal Form" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_NL_DOC_NUMBER] = __rp('RP_INVALID_NL_DOC_NUMBER','Invalid data filled in the "Legal Registration Number" field of the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_BE_AGREEDELETE] = __rp('RP_INVALID_BE_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_IT_AGREEDELETE] = __rp('RP_INVALID_IT_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_IT_NOTE] = __rp('RP_INVALID_IT_NOTE','To proceed with the registration procedure you must confirm that you will sign the domain registration agreement, which will be sent to you by the .IT official registry after completing this registration form.');
$rp_error_messages[RP_INVALID_AT_AGREEDELETE] = __rp('RP_INVALID_AT_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_NZ_AGREEDELETE] = __rp('RP_INVALID_NZ_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_JP_PREFECTURE] = __rp('RP_INVALID_JP_PREFECTURE','Invalid Prefecture filled in the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_JP_AGREEDELETE] = __rp('RP_INVALID_JP_AGREEDELETE','In order to proceed with the domain name registration you must agree with the Special renewal and expiration terms part of the Domain Registry Requirements section.');
$rp_error_messages[RP_INVALID_AU_REG_NAME] = __rp('RP_INVALID_AU_REG_NAME','Invalid data filled in the "Business Name" field of the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_AU_DOC_TYPE] = __rp('RP_INVALID_AU_DOC_TYPE','Invalid data filled in the "Business Registration" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_AU_DOC_NUMBER] = __rp('RP_INVALID_AU_DOC_NUMBER','Invalid data filled in the "Business Number" field of the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_AU_POLICY_REASON] = __rp('RP_INVALID_AU_POLICY_REASON','Invalid data filled in the "Policy Reason" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_AU_REQUIREMENT_COUNTRY] = __rp('RP_INVALID_AU_REQUIREMENT_COUNTRY','AU domain names require a valid address within Australia in the Registrant, Technical, Administrative and Billing contact sections.');
$rp_error_messages[RP_INVALID_PRO_NOTE] = __rp('RP_INVALID_PRO_NOTE','To proceed with the registration procedure you must confirm that you are able to comply with the unique registration requirements for the .PRO TLD.');
$rp_error_messages[RP_INVALID_IT_DOC_NUMBER] = __rp('RP_INVALID_IT_DOC_NUMBER','Invalid data filled in the "Identity Card Number / Taxpayer Code" field of the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_IT_REG_TYPE] = __rp('RP_INVALID_IT_REG_TYPE','Invalid data filled in the "Registrant Type" field of the Domain Registry Requirements section! Please select one of the listed options and try again.');
$rp_error_messages[RP_INVALID_IT_REG_COUNTRY] = __rp('RP_INVALID_IT_REG_COUNTRY','Invalid data filled in the "Registrant Country" field of the Domain Registry Requirements section!');
$rp_error_messages[RP_INVALID_VPS_OS] = __rp('RP_INVALID_VPS_OS','Invalid OS');
$rp_error_messages[RP_INVALID_VPS_IPS] = __rp('RP_INVALID_VPS_IPS','Invalid ips quantity');
$rp_error_messages[RP_INVALID_VPS_MANAGED_SERVICES] = __rp('RP_INVALID_VPS_MANAGED_SERVICES','Invalid Managed Services');


/**
 * Get default feature by it's key
 * 
 * @example echo rp_feature_default('ssh')
 * 
 * @param string key feature key
 * @return string default feature value for this key. If no default value is available return $key
 * @todo Move to rp_plans. Function is optional - use simple arrays
 */
function rp_feature_default($key){
	$all_feautres = array(
		'support' => null,
		'redirect_url' => null,
		'register_domain' => null,
		'fpe' => null,
		'ppa' => null,
		'site_studio' => 'Site Studio', // 1 = On
		'ssh' => 'SSH', // 0 = Off 1 = On
		'web_ssh' => 'Web-based SSH',
		'ip' => 'IP Addresses', // number of ip addresses
		'ssl' => null,
		'cgi' => null,
		'filemanager' => null,
		'sql' => 'Mysql Databases', // 99999 = unlimited number of databases
		'stats' => null, // i presume Site Statistics
		'sql_quota' => 'Mysql Quota', //99999 = unlimited
		'webmail' => null,
		'phpmy_admin' => 'phpMyAdmin', // 1 = on
		'template' => null,
		'smtp' => null,
		'allowed_cpu' => 'Max CPU Usage', //value is in %
		'crontab' => 'Cron Jobs', //99999 = unlimited number of cron jobs
		'domain' => 'Domains', // 99999 = unlimited number of domains
		'subdomain' => 'Subdomains', // 99999 = unlimited
		'max_files' => null,
		'backup' => null,
		//'aliases' => 'E-mail Aliases', // 99999 = unlimited
		'mailbox' => 'E-mail addresses', // 99999 = unlimited
		'mail_list' => 'E-mail Lists', // 99999 = unlimited number of mail lists
		'ftp' => 'FTP Accounts', // 99999 = unlimited
		'pgsql_quota' => 'Postgresql Quota', // 99999 = unlimited size in MB 
		'pgsql' => 'Postgresql Databases', // number of databases
		'disk_space' => 'Disk Space', // 0 = unlimited size in MB
		'traffic' => 'Monthly Traffic', // 0 = unlimited size in MB
		'guaranteed_ram' => 'Guaranteed RAM', //size in mb
		'cpu_percents' => 'Cpu Usage', //cpu max usage
		'control_panel' => 'Control Panel',
	//	'disk_space' => 'Disk Space', //used to display disk_space_full disk_space/1024000 = size in GB
	//	'hdd' => '4', //used to display disk_space_full number of Hard disks each with size disk_space
	//	'hdd_type' => 'SATA 2', //used to display disk_space_full Hard Disk type
	//	'ram' => '4', //used to display ram_full how many GB
	//	'ram_type' => 'DDR3', //used to display ram_full ram type
		'root' => 'Root access', //Root access to the server maybe?
	//	'support' => null,
		'clientexec' => 'ClientExec Setup',
		'disk_space_full' => 'Disk Space / HDDs', // = (hdd>1?hdd.'x':'').(disk_space/1024000).' GB '.hdd_type
		'processor' => 'CPU',
		'vcpu' => 'CPU Cores',
		'ram_full' => 'RAM', // = ram.' GB '.(isset(ram_type)?ram_type:'')
		'ips' => 'Dedicated IPs',
		'prices_1' => 'Monthly price',
		'prices_12' => 'Total annual price',
		'guest_users' => null,
	);
	if (isset($all_feautres[$key])){
		return $all_feautres[$key];}
	else return $key;
}
function rp_get_plan_categories($type){
	switch ($type){
		case 'shared':
		case 'semi_dedicated':
			return array(
				'overview' => __rp('plan_cat_overview', 'Overview'),
				'rest' => __rp('plan_cat_rest', 'More'),
			);
		case 'vps':
			return array(
				'overview' => __rp('plan_cat_overview', 'Overview'),
//				'rest' => __rp('plan_cat_rest', 'More'),
			);
		case 'dedicated':
			return array(
				'overview' => __rp('plan_cat_overview', 'Overview'),
//				'rest' => __rp('plan_cat_rest', 'More'),
			);
		default:
			throw new Exception('Invalid plan type: '.$type);
	}
}
/**
 * Get features by plan's type
 * 
 * @example $vps_features = rp_get_features('vps')
 * 
 * @param string $type type of the plan which features you want to take options: 'shared', 'semi_dedicated', 'vps', 'dedicated'.
 * @return array with all features keys as values
 * @todo Use if ($type == "a" || $type == "b") return array();
 */
function rp_get_features($type, $category){
	// TODO all feature should have user friendly name
	// TODO learn all feature available values
	// This are all features that would be visible to end users
	$shared = array(
	'overview' => 
	array(
		'support',// => null,
		'redirect_url',// => null,
		'register_domain',// => null,
		'fpe',// => null,
		'ppa',// => null,
		'site_studio',// => 'Site Studio', // 1 = On
		'ssh',// => 'SSH', // 0 = Off 1 = On
		'web_ssh',
		'prices_1',// => 'Monthly price',
		'prices_12',// => 'Total annual price',
	),
	'rest' => 
	array(
		'ip',// => 'IP Addresses', // number of ip addresses
		'ssl',// => null,
		'cgi',// => null,
		'filemanager',// => null,
		'sql',// => 'Mysql Databases', // 99999 = unlimited number of databases
		'stats',// => null, // i presume Site Statistics
		'sql_quota',// => 'Mysql Quota', //99999 = unlimited
		'webmail',// => null,
		'phpmy_admin',// => 'phpMyAdmin', // 1 = on
		'template',// => null,
		'smtp',// => null,
		'allowed_cpu',// => 'Max CPU Usage', //value is in %
		'crontab',// => 'Cron Jobs', //99999 = unlimited number of cron jobs
		'domain',// => 'Domains', // 99999 = unlimited number of domains
		'subdomain',// => 'Subdomains', // 99999 = unlimited
		'max_files',// => null,
		'backup',// => null,
		//'aliases',// => 'E-mail Aliases', // 99999 = unlimited
		'mailbox',// => 'E-mail addresses', // 99999 = unlimited
		'mail_list',// => 'E-mail Lists', // 99999 = unlimited number of mail lists
		'ftp',// => 'FTP Accounts', // 99999 = unlimited
		'pgsql_quota',// => 'Postgresql Quota', // 99999 = unlimited size in MB 
		'pgsql',// => 'Postgresql Databases', // number of databases
		'disk_space',// => 'Disk Space', // 0 = unlimited size in MB
		'traffic',// => 'Monthly Traffic', // 0 = unlimited size in MB
		'guest_users'// => null,
	)
	);
	
	// TODO all feature should have user friendly name
	// TODO learn all feature available values
	// This are all features that would be visible to end users
	$vps = array( 
	'overview' => array(
		'guaranteed_ram',// => 'Guaranteed RAM', //size in mb
		'ips',// => 'IP Addresses', //number of ips
		'disk_space',// => 'Disk Space', //size in gb
		'traffic',// => 'Monthly Traffic', //size in gb
		'cpu_percents',// => 'Cpu Usage', //cpu max usage
		'clientexec',// => 'ClientExec Setup',
		'control_panel',// => 'Control Panel',
		'prices_1',// => 'Monthly price',
		'prices_12',// => 'Total annual price',
	)
	);
	
	// TODO all feature should have user friendly name
	// TODO learn all feature available values
	// This are all features that would be visible to end users
	$dedicated = array(
	'overview' => array(
	//	'disk_space',// => 'Disk Space', //used to display disk_space_full disk_space/1024000 = size in GB
	//	'hdd',// => '4', //used to display disk_space_full number of Hard disks each with size disk_space
	//	'hdd_type',// => 'SATA 2', //used to display disk_space_full Hard Disk type
	//	'ram',// => '4', //used to display ram_full how many GB
	//	'ram_type',// => 'DDR3', //used to display ram_full ram type
		'root',// => 'Root access', //Root access to the server maybe?
	//	'support',// => null,
		'clientexec',// => 'ClientExec Setup',
		'disk_space_full',// => 'Disk Space / HDDs', // = (hdd>1?hdd.'x':'').(disk_space/1024000).' GB '.hdd_type
		'traffic',// => 'Monthly Traffic', // traffic/1024000 = size in GB
		'processor',// => 'CPU',
		'ram_full',// => 'RAM', // = ram.' GB '.(isset(ram_type)?ram_type:'')
		'ips',// => 'Dedicated IPs',
		'prices_1',// => 'Monthly price',
		'prices_12',// => 'Total annual price',
	)
	);
	switch ($type){
		case 'shared':
		case 'semi_dedicated':
			return $shared[$category];
		case 'vps':
			return $vps[$category];
		case 'dedicated':
			return $dedicated[$category];
	}
}
// TODO the values below should be hardcoded inside admin page for translation
//$rp_translateable_content = array(
//	'month' => 'month',
//	'year' => 'year',
//	'unlimited' => 'unlimited',
//	'free' => 'free',
//	'overview' => 'Overview',
//	'order_now'=> 'order now',
//);

/**
 * Translate a key using the RP transation tables
 * 
 * Example: 
 * echo __rp("site_studio", "Site Studio"); // When the global $rp_lang is already set to the desired language or
 * echo __rp("site_studio", "Site Studio", "bg"); // otherwise
 * 
 * @param string $key
 * @param string $default
 * @param string $lang
 * @return string
 */
function __rp($key, $default=null, $lang=null){
	global $rp_lang, $rp_settings;
	if (!$lang)$lang = $rp_lang;
	if (!isset($default))$default=$key;

	if (isset($rp_settings['lang'][$lang][$key]) && $rp_settings['lang'][$lang][$key])return $rp_settings['lang'][$lang][$key];
	else return $default;
}
function _erp($key, $default=null, $lang=null){
	echo __rp($key, $default, $lang);
}

// TODO check this function just in case
// This function translate features value to user readable format

/**
 * Translate and format service value by its key
 * 
 * @example echo rp_translate_value($value, 'site_studio')
 * @param array $value the value that needs to be formatted/translated
 * @param string $type column identifier
 * @return string translations
 * 
 * 
 */
function __rp_value($value, $type, $lang=null){

	$rp_feature_no = do_shortcode('[webp img="dont_support_feature.png" title="No"]');
	$rp_feature_yes = do_shortcode('[webp img="support_feature.png" title="Yes"]');

	switch ($type) {
		case false: // Hardcoded values
			if ($value == 'yes') return $rp_feature_yes;
			if ($value == 'no') return $rp_feature_no;
			return $value;
		// Boolean
		case 'ssh':
		case 'web_ssh':
		case 'varnish':
		case 'nodejs':
		case 'innodb':
		case 'redis':
		case 'memcached':
			if (!$value) return __rp('optional','Optional', $lang);
		case 'site_studio':
		case 'support':
		case 'phpmy_admin':
		case 'clientexec':
		case 'control_panel':
		case 'root':
		case 'filemanager':
		case 'webmail':
		case 'free_domain':
			if ($value) return $rp_feature_yes;
			else return $rp_feature_no;
			break;
		// Megabytes or unlimited on 0
		case 'disk_space':
		case 'traffic':
			if ($value == 0)
				return __rp('unlimited','Unlimited', $lang);
			else if (1024000000 <= $value)
				$value = ($value/1024000000) . ' TB';
			else if (1024000 < $value)
				$value = ($value/1024000) . ' GB';
			else if (1024 < $value)
				$value = ($value/1024) . ' MB';
			break;
		case 'vpn_traffic':
			$value = $value / pow(1024, 2) . ' GB';
			break;
		// Megabytes or unlimited on 0
		case 'sql_quota':
		case 'sql':
		case 'crontab':
		case 'domain':
		case 'subdomain':
		case 'aliases':
		case 'mailbox':
		case 'mail_list':
		case 'ftp':
		case 'pgsql':
		case 'pgsql_quota':
			if (!$value) $value = __rp('optional','Optional', $lang);
			elseif ($value == 99999) return __rp('unlimited','Unlimited', $lang);
			elseif($type == 'sql_quota' || $type == 'pgsql_quota')
				$value .= ' MB';
			break;
		case 'guaranteed_ram':
			$value .= ' MB';
			break;
		// Percentages
		case 'allowed_cpu':
			if ($value >= 100) {
				$value = floor($value / 100);
				break;
			}
		case 'cpu_percents':
			$value .= '%';
			break;
		case 'ip':
			if (!$value) return __rp('optional','Optional', $lang);
		case 'cPanel_price':
		case 'DirectAdmin_price':
		case 'Hepsia':
			if (!$value) return $rp_feature_no;
			break;
		case 'upgradeable_storage':
			if ($value)
				return 'Yes';
			else
				return 'No';
		case 'phpPgAdmin':
			if (!empty($value) || $value != 0) 
				return $rp_feature_yes;
			else
				return __rp('optional','Optional', $lang);
		case 'guest_users':
			if (!empty($value)) {
				if ($value == 0) 
					return __rp('optional','Optional', $lang);
				else
					return $value;
			} else {
				return $rp_feature_no;
			}
	}

	return $value;
}

function __erp_value($value, $type, $lang=null){
	echo __rp_value($value, $type, $lang);
}

function rp_state_options($selected = '') {
	$states = array(
	'AL'=>'Alabama',
	'AK'=>'Alaska',
	'AZ'=>'Arizona',
	'AR'=>'Arkansas',
	'CA'=>'California',
	'CO'=>'Colorado',
	'CT'=>'Connecticut',
	'DE'=>'Delaware',
	'DC'=>'Dist. of Columbia',
	'FL'=>'Florida',
	'GA'=>'Georgia',
	'HI'=>'Hawaii',
	'ID'=>'Idaho',
	'IL'=>'Illinois',
	'IN'=>'Indiana',
	'IA'=>'Iowa',
	'KS'=>'Kansas',
	'KY'=>'Kentucky',
	'LA'=>'Louisiana',
	'ME'=>'Maine',
	'MD'=>'Maryland',
	'MA'=>'Massachusetts',
	'MI'=>'Michigan',
	'MN'=>'Minnesota',
	'MS'=>'Mississippi',
	'MO'=>'Missouri',
	'MT'=>'Montana',
	'NE'=>'Nebraska',
	'NV'=>'Nevada',
	'NH'=>'New Hampshire',
	'NJ'=>'New Jersey',
	'NM'=>'New Mexico',
	'NY'=>'New York',
	'NC'=>'North Carolina',
	'ND'=>'North Dakota',
	'OH'=>'Ohio',
	'OK'=>'Oklahoma',
	'OR'=>'Oregon',
	'PA'=>'Pennsylvania',
	'RI'=>'Rhode Island',
	'SC'=>'South Carolina',
	'SD'=>'South Dakota',
	'TN'=>'Tennessee',
	'TX'=>'Texas',
	'UT'=>'Utah',
	'VT'=>'Vermont',
	'VA'=>'Virginia',
	'WA'=>'Washington',
	'WV'=>'West Virginia',
	'WI'=>'Wisconsin',
	'WY'=>'Wyoming');

	$result = '';
	foreach ($states as $k => $v) {
		$s = $k == $selected ? ' selected="selected"' : '';	
		$result = $result . '<option value="' . $k . '"' . $s . '>' . $v . '</option>';
	}
	return $result;
}

function script_options() {
	$scripts = array(
		'Forum' => array(
			'403' => 'phpBB2',
			'5' => 'phpBB3',
			'417' => 'Simple Machines Forum',
		),
		'Blog' => array(
			'410' => 'b2evolution',
			'418' => 'Movable Type',
			'409' => 'Textpattern',
			'400' => 'WordPress',
		),
		'Wiki' => array(
			'413' => 'DokuWiki',
		),
		'Calendar' => array(
			'399' => 'Maian Events',
		),
		'CMS' => array(
			'381' => 'Drupal',
			'414' => 'Fuzzylime',
			'401' => 'GeekLog',
			'394' => 'Joomla 1.0.x',
			'2' => 'Joomla 1.5.x',
			'395' => 'Mambo',
			'379' => 'Moodle',
			'396' => 'Nucleus',
			'397' => 'Open Realty',
			'416' => 'PHP-Fusion',
			'378' => 'phpWebSite',
			'393' => 'WebSiteBaker',
			'415' => 'XOOPS',
		),
		'E-Commerce' => array(
			'392' => 'OS Commerce',
			'389' => 'OS CommRes',
		),
		'Guestbook' => array(
			'353' => 'MJguest',
		),
		'Photo Gallery' => array(
			'398' => '4images Gallery',
			'384' => 'Coppermine',
			'408' => 'Gallery2',
			'407' => 'Plogger',
		),
		'Project Management' => array(
			'385' => 'DOTproject',
			'386' => 'PHProject',
		),
		'Client Management' => array(
			'390' => 'phpcoin',
			'347' => 'phpFormGenerator',
		),
		'Customer Support' => array(
			'402' => 'Help Center Live',
			'391' => 'PHPTickets',
		),
		'Ad Management' => array(
			'387' => 'Openads',
			'375' => 'phpList',
		),
		'Classified Ads' => array(
			'194' => 'Classifieds',
		),
	);
	$result = '<option value="">'.__rp('none','none').'</option>';
	foreach ($scripts as $group => $list) {
		$result .= "<optgroup label=\"$group\">";
		foreach ($list as $script_key => $script_value) {
			$the_script = isset($_GET['script']) ? $_GET['script'] : false;
			$result .= "<option value=\"$script_key\"".($script_key == $the_script ? ' selected="selected"' : '').">$script_value</option>";
		}
		$result .= '</optgroup>';
	}
	return $result;
}

function rp_validate($text, $as, &$error) {
	try{
		$result = $GLOBALS['rp_api']->command('validate', $as, array('text' => $text));
	}catch(rp_paymentapi_exception $e){
			$error = $e->code;
			return 0;
	}
	return 1;
}

?>
