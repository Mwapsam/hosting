<?php
$template_url = get_bloginfo( 'template_url' );

$rp_twin_themes = array(
	'Clean Style' => 'rp_home_clean_style',
	'CloudHost' => 'rp_home_cloudhost',
	'Cloud Servers' => 'rp_home_cloud_servers',
	'Concept View' => 'rp_home_1',
	'Contrast' => 'rp_home_contrast',
	'Easy Flow' => 'rp_home_easy_flow',
	'FeatureHosting' => 'rp_home_featurehosting',
	'Fresh Looks' => 'rp_home_fresh_looks',
	'Hosting Deluxe' => 'rp_home_hosting_deluxe',
	'Hosting Easy' => 'rp_home_hosting_easy',
	'Hosting Zen' => 'rp_home_hosting_zen',
	'HostPress' => 'rp_home_hostpress',
	'Optimum Hosting' => 'rp_home_optimum_hosting',
	'PHP Hosting' => 'rp_home_php_hosting',
	'Pro Hosting' => 'rp_home_pro_hosting',
	'Simple Honeycomb' => 'rp_home_simple_honeycomb',
	'Simplistic' => 'rp_home_simplistic',
	'Simply Elegant' => 'rp_home_simply_elegant',
	'Smart Hosting' => 'rp_home_smart_hosting',
	'SquareHost' => 'rp_home_squarehost',
);

$vps_virtuozzo_content = <<<EOD
[rp_plans type="vps_virtuozzo" best="" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{vps_virtuozzo_order}}</button>']
VPS GUARANTEES
No Set-up Fee|The first monthly fee is the only payment you have to make when you order a VPS. We do not charge you for setting up your VPS.|yes
1-hour Account Activation|We know how important it is start using your Virtual Private Server as soon as possible and that is why we will set it up within the hour - the maximum time needed for proper configuration of your VPS. |yes
99.9 % Service Uptime Guarantee|As always we guarantee 99.9% uptime and stable operation of the main machine for your VPS.|yes
24/7 Technical Support For Pre-installed Software|Our professional technicians are available for you 24/7 to assist you with any applications that come pre-installed with the Virtual Pivate Server. All you have to do is open a trouble ticket from the VPS Plan Manager and you will get a reply within the hour.|yes
Domain Name Registration / Transfer|You need a domain name for your VPS and if you do not have one yet, you can register it with us. If you have an existing domain you can also transfer the domain registration to our registrar so you have them all under one roof.|=domain_price
Monthly Price|VPS packages are paid monthly and this is the only fee you must pay in order to have your Virtual Private Server set up.|=prices_1
order now

BASIC FEATURES
Data Storage|This feature shows how much data you can upload on your Virtual Private Server and you can use that for any type of file that you wish - text documents, images, html and other web files, etc.|=disk_space
Data Transfer|This features shows the amount of data you can transfer to and from the VPS each month and that includes uploading any files and opening the websites hosted on the VPS.|=traffic
Guaranteed RAM|This feature indicates the minimum RAM that is guaranteed to be at your disposal at all times regardless of how much RAM other users on the VPS server are using.|=guaranteed_ram
CPU Share|This is the maximum portion of a CPU that each VPS package allows you to use.|=cpu_percents
Dedicated IP Address|Each VPS package includes 1 dedicated IP address that you can utilize and if you select a control panel installation as well there will be a second IP address provided to you.|=ips

VPS OS OPTIONS
CentOS|CentOS stands for <b>C</b>ommunity <b>ENT</b>erprise <b>O</b>perating <b>S</b>ystem and that is the most popular Linux version among web servers powering over 30% of Linux based servers worldwide.|yes
Debian|Debian is a free operating system distributed under the GNU licence that is based on Linux Kernel. It is renown for its stability, security and abundance of options.|yes
Ubuntu|This operating system is based on Debian Linux and although it is mainly used for desktop computers, its use for web servers is growing rapidly.|yes

VPS ADMINISTRATION OPTIONS
Virtuozzo Containers 4.0|This operating system virtualization solution is included for free and it allows you to manage the server side of your VPS via user-friendly web-based interface.|yes
Full Root-level Access|The complete root access provided with each VPS package gives you full control over your VPS and the root privileges that some applications may require.|yes
SSH Access|Each VPS allows advanced users to quickly and easily manage their server via SSH client that is available immediately after the VPS is set up.|yes

VPS RESELLING OPTIONS
eNom Domain Name Reseller Account|Since VPS packages can be used for reselling, we provide you with a free sub-reseller account with eNom so you can start selling domain names as well without submitting any deposit.|yes
Client Exec Billing/Support Software|This advanced software will allow you to handle customer invoices as well as ticket-based support along with many other features and customization options.|=clientexec

VPS PLAN PRICING
Monthly Price|VPS packages are paid monthly and this is the only fee you must pay in order to have your Virtual Private Server set up.|=prices_1
order now

[/rp_plans]
[rp_plans upgrades="upgrades" type="vps_virtuozzo" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{vps_virtuozzo_order}}</button>']
CONTROL PANEL INSTALLATION
cPanel licenses|cPanel is one of the most popular web hosting control panels that includes a Web Host Manager (WHM) control panel as well which provides you server administration through a web-based interface. It is also suitable for web hosting resellers which makes it as popular as it is.|=cPanel_price
DirectAdmin with unlimited domains (for CentOS only)|DirectAdmin is considered the fastest and easiest web-based web hosting control panel and it also comes in three levels of administration - server, reseller and user. That makes it suitable for web hosting reselling as well.|=DirectAdmin_price
Hepsia (unlimited domains, no root access) <a target="_blank" href="[rp_store_info key='demo']?auto_login=true"><strong>TRY DEMO</strong></a>|Our in-house built web hosting control panel is very user-friendly and provides full control over the web hosting side of the VPS. Its suitable for web hosting novice and advanced users alike.|=Hepsia

EXTRA DEDICATED IPs
1 additional IP|If you need additional dedicated IP addresses for your Virtual Private Server, you can purchase them via the VPS Plan Manager after the VPS is set up.|=ip_price

ADDITIONAL RAM
+ 128 MB|If you are hosting resource-consuming websites and applications and you need additional RAM, you can purchase during that signup or via the VPS Plan Manager after the VPS is setup.|=ram_128_price
+ 256 MB|If you are hosting resource-consuming websites and applications and you need additional RAM, you can purchase during that signup or via the VPS Plan Manager after the VPS is setup.|=ram_256_price
+ 384 MB|If you are hosting resource-consuming websites and applications and you need additional RAM, you can purchase during that signup or via the VPS Plan Manager after the VPS is setup.|=ram_384_price
+ 512 MB|If you are hosting resource-consuming websites and applications and you need additional RAM, you can purchase during that signup or via the VPS Plan Manager after the VPS is setup.|=ram_512_price

ADMINISTRATION SERVICES
VPS WEEKLY BACKUP|In case you wish to protect yourself from losing important data, you should always have a back up in place. We offer to do that for you and you can sign up for that service during sign-up or via the VPS Plan Manager after the VPS is setup.|=backup_price
MANAGED SERVICES PACKAGE|With this package we will implement different administration services for your VPS including Weekly Backup, Weekly OS Update, Monitoring & Rebooting as well as Installation & Troubleshooting.|=managed_services_price
Weekly Backup |In case you wish to protect yourself from losing important data, you should always have a back up in place. We will do that for you once a week when you get the Managed Services Package.|yes
Weekly OS Update |With the Managed Services Package we will update the Operating System installed on your VPS once a week.|yes
Monitoring &amp; Rebooting |When you get the Managed Sercices Package you will no longer have to worry about monitoring your Virtual Private Server. We will do that for you and reboot it if necessary to restore proper functions.|yes
Installation &amp; Troubleshooting (30 minutes) |With the Managed Service Package you will also get 30 minutes` time each month from one of our professional server administrators to install custom software for you or troubleshoot any script problems.|yes
INSTALLATION &amp; TROUBLESHOOTING|In case you do not have the Managed Services Package or you need additional assistance from our server administrators above the 30 minutes included in the package.|=installation_troubleshooting_price

VPS Plan Monthly Price
||=prices_1
order now
[/rp_plans]
EOD;

$vps_kvm_content = <<<EOD
[rp_plans type="vps_kvm" best="" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{vps_kvm_order}}</button>']


VPS GUARANTEES
No Set-up Fee|The first monthly fee is the only payment you have to make when you order a VPS. We do not charge you for setting up your VPS.|yes
1-hour Account Activation|We know how important it is start using your Virtual Private Server as soon as possible and that is why we will set it up within the hour - the maximum time needed for proper configuration of your VPS. |yes
99.9 % Service Uptime Guarantee|As always we guarantee 99.9% uptime and stable operation of the main machine for your VPS.|yes
24/7 Technical Support For Pre-installed Software|Our professional technicians are available for you 24/7 to assist you with any applications that come pre-installed with the Virtual Pivate Server. All you have to do is open a trouble ticket from the VPS Plan Manager and you will get a reply within the hour.|yes
Domain Name Registration / Transfer|You need a domain name for your VPS and if you do not have one yet, you can register it with us. If you have an existing domain you can also transfer the domain registration to our registrar so you have them all under one roof.|=domain_price
Monthly Price|VPS packages are paid monthly and this is the only fee you must pay in order to have your Virtual Private Server set up.|=prices_1
order now

BASIC FEATURES
Data Storage|This feature shows how much data you can upload on your Virtual Private Server and you can use that for any type of file that you wish - text documents, images, html and other web files, etc.|=disk_space
Data Transfer|This features shows the amount of data you can transfer to and from the VPS each month and that includes uploading any files and opening the websites hosted on the VPS.|=traffic
RAM|This feature indicates the amount of RAM that is guaranteed to be at your disposal at all times regardless of how much RAM other users on the VPS server are using.|=guaranteed_ram
CPU Cores|This is the maximum portion of a CPU that each VPS package allows you to use.|=vcpu
Dedicated IP Address|Each VPS package includes 1 dedicated IP address that you can utilize.|=ips

VPS OS OPTIONS
CentOS|CentOS stands for <b>C</b>ommunity <b>ENT</b>erprise <b>O</b>perating <b>S</b>ystem and that is the most popular Linux version among web servers powering over 30% of Linux based servers worldwide.|yes
Debian|Debian is a free operating system distributed under the GNU licence that is based on Linux Kernel. It is renown for its stability, security and abundance of options.|yes
Ubuntu|This operating system is based on Debian Linux and although it is mainly used for desktop computers, its use for web servers is growing rapidly.|yes

VPS ADMINISTRATION OPTIONS
SolusVM|This web-based interface allows you to fully control your Virtual Private Server and all process that are currently running in a user-friendly manner.|yes
Full Root-level Access|The complete root access provided with each VPS package with cPanel gives you full control over your VPS and the root privileges that some applications may require.|yes
SSH Access|Each VPS allows advanced users to quickly and easily manage their server via SSH client that is available immediately after the VPS is set up.|yes

VPS RESELLING OPTIONS
eNom Domain Name Reseller Account|Since VPS packages can be used for reselling, we provide you with a free sub-reseller account with eNom so you can start selling domain names as well without submitting any deposit.|yes
Client Exec Billing/Support Software|This advanced software will allow you to handle customer invoices as well as ticket-based support along with many other features and customization options.|=clientexec

VPS PLAN PRICING
Monthly Price|VPS packages are paid monthly and this is the only fee you must pay in order to have your Virtual Private Server set up.|=prices_1
order now

[/rp_plans]
[rp_plans upgrades="upgrades" type="vps_kvm" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{vps_kvm_order}}</button>']
CONTROL PANEL INSTALLATION
Hepsia|This is our user-friendly in-house built web hosting Control Panel, available in more than 15 languages. From there you will be able to take care of all website management operations.|=Hepsia
cPanel licenses|cPanel is one of the most popular web hosting control panels that includes a Web Host Manager (WHM) control panel as well which provides you server administration through a web-based interface. It is also suitable for web hosting resellers which makes it as popular as it is.|=cPanel_price


EXTRA DEDICATED IPs
1 additional IP|If you need additional dedicated IP addresses for your Virtual Private Server, you can purchase them via the VPS Plan Manager after the VPS is set up.|=ip_price


ADMINISTRATION SERVICES
Weekly Backup |In case you wish to protect yourself from losing important data, you should always have a back up in place. We will do that for you once a week.|yes
INSTALLATION &amp; TROUBLESHOOTING|If you need additional assistance from our server administrators.|=installation_troubleshooting_price

VPS Plan Monthly Price
||=prices_1
order now
[/rp_plans]
EOD;

$vps_openvz_content = <<<EOD
[rp_plans type="vps_openvz" best="" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{vps_openvz_order}}</button>']
[/rp_plans]
EOD;

$semi_dedicated_content = <<<EOD
[rp_plans type="semi_dedicated" best="" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{semi_dedicated_order}}</button>']
GUARANTEES
1-hour Account Activation|Your semi-dedicated plan will be activated for you within 1 hour after signup. This is the maximum time period necessary for the proper configuration of your own Semi-dedicated Server.|yes
24/7 Customer Support|We provide your customers with general and pre-sale support via live chat, email and phone and with 24/7 technical assistance via email and ticketing system.|yes
1 Hour Response Time|We guarantee that all your requests, no matter whether they are sales or support related, will be responded to within 1 hour.|yes
99.9 % Service Uptime Guarantee|With our services your semi-dedicated server will be guaranteed 99.9% of uptime and stability.|yes
30-Day Free Trial|Sign up for our 30-day free trial to see what makes our hosting services special. No credit card required.|yes
Monthly Price||=prices_1
Order Now

BASIC FEATURES
Data Storage|Disk space is the amount of storage you receive when signing up for a web hosting account with us. It can be used for uploading any type of files – text documents, HTML documents, images, etc.|=disk_space
Data Transfer|Monthly Traffic is the term used to describe the amount of data transferred and the number of visits made to a web site for a given period.|=traffic
CPU Core(s)|This is the maximum processing time that a semi-dedicated server account can utilize of the CPU of the whole server.|=allowed_cpu
MySQL queries/h|This is the maximum number of MySQL queries that can be made through a semi-dedicated server account per hour.|=mysql_queries
Domain Name Registration / Transfer|<b>Domain name registration</b> is the process of obtaining a unique name for your website on the  Internet. A newly registered domain is automatically tied to name servers,  representing the IP address to which it should point.<br><b>Domain name transfer</b> refers to a change of the domain registrar, while the  domain owner stays the same. The process is also associated with a change of  the domain name records to the new registrar`s.|=domain_price


FREE FEATURES
No Set-up Fees|Our semi-dedicated packages do not include any set-up fees. You will be only required to cover the monthly service fee for the selected semi-dedicated server plan.|yes
FREE Domain Name|If you purchase one of our packages, there is a bonus - one free domain name registration or transfer from the list of promotional domains.|=free_domain
Online Website Builder|With all of our shared hosting packages you will get a free online website builder that does not require any design skills or experience since it includes multiple templates and makes website creation a breeze.|yes
50+ Free Apps Installer|Our 1-click Application Installer is included with all our shared hosting packages and it gives you access to install over 50+ applications - you can have a blog, a forum or a shopping cart set up within minutes with just a few clicks and no technical skills.|yes
Free VPN Access|Access blocked websites or use country-restricted services by routing your Internet traffic through a secure connection using multiple access points around the world.|=vpn_traffic
Marketing Tools|If you need help to get your website more popular, the easy-to-use marketing tools that are included with each package come to the rescue. You can submit your website to search engines as well as publish news and stories.|yes
Administration Tools|All the packages are provided with Hotlink protection, IP blocking, .htaccess generator and other tools which make advanced administration easy.|yes
Video Tutorials|Over 40 clips are available through different sections of the web hosting control panel so that you can start finding your way with ease.|yes
Online Documentation|After carefully studying the questions and difficulties our clients experience with the web hosting control panel and our services, we have compiled an extensive help section with lots of FAQs and tutorials that will help you along the way.|yes

CONTROL PANEL
In-house Built Control Panel|The Hepsia control panel is an in-house product that is a result of hard work aimed at providing advanced functionality combined with easy-to-use and intuitive design.|<a title="watch web hosting video presentation" href="[rp_store_info key='demo']?auto_login=true" target="_blank">View Demo</a>
Multi-lingual Interface (over 10 languages)|We have clients from all over the world and therefore the in-house built web hosting control panel is available in over 10 languages and more are on the way to facilitate our international clients.|yes
Colour Skins|And to make working with our web hosting control panel even more pleasant you can choose the colour theme that suits you best.|yes

DOMAINS &amp; SUBDOMAINS
Hosted Domains|You can host with us any top level domain name and this feature shows you how many domain names you can host with each of the shared web hosting packages.|=domain
Subdomains|Subdomains, also known as child domains, are domains that are part of a larger domain. For example anything.my-best-domain.com is a subdomain of the domain name my-best-domain.com|=subdomain
Parked Domains|When you register a domain name just to reserve it for future use, you can use the domain parking feature which allows you to point it to a temporary page (for example "Under Construction") or simply redirect the domain to another site.|Unlimited
Full DNS Management|The web hosting control panel provides you complete access to manage all DNS records of your domain name like changing the A record to point to a different host or the MX records to choose a different mail server to handle your e-mails.|yes
Custom A and MX Records|The A record of the domain name specifies the IP address where the domain name resolves to while the MX records of the domain name specify the mail servers that handle the e-mail of the domain name.|yes
CNAME Records|The CNAME record of the domain name redirects the domain to another domain`s A record and therefore creating a CNAME record removes the A record of the domain.|yes
AAAA/SRV/NS/TXT Records|The advanced features of the web hosting control panel allow you to set up IPv6 related records such as the AAAA record which is used for mapping hostnames to IPv6 addresses. The SRV record (also known as Service record) is used for defining the location of servers for specified services - the hostname and the port number. The NS (Name Server) records of the domain name specify which server handles all the DNS records for this domain name. The SPF e-mail authentication system derives information from the TXT records of the domain name.|yes
Full Whois Management|We provide you complete access to manage the WHOIS record of the domain name as much as the registry allows you. There are specific restrictions for some of the TLDs and you should refer to the Domains page.|yes
Registrar Lock Option|This is a security feature available for some TLDs to prevent unwanted domain transfers and thus protect your domain name from theft.We grant you access to lock and unlock the domain names at will via the web hosting control panel.|yes
EPP Transfer Protection|Some TLDs require this specific EPP transfer authorization key to process domain transfers. This is used in addition or instead of the Registrar Lock for further protection. You can easily obtain the EPP key for your domain names via the web hosting control panel.|yes
ID Protection|We offer an additional service for all TLDs that support this feature to protect your personal data becoming public in the WHOIS record. That is the best way of protection against spammers and possible identity theft.|Optional

E-MAIL SERVICES
Mailboxes (POP3/IMAP &amp; SMTP)|The mailboxes you create with us support POP3, IMAP and SMTP protocols that allow you to use mail client applications such as Outlook and Thunderbird to access and manage your e-mail.|=mailbox
Webmail|You can choose from the three webmail applications we offer to access and manage your e-mail from any computer in the world that is connected to the Internet without any setup or configuration.|yes
E-Mail Forwarding|This feature allows you to receive the same message in two or more e-mail addresses at the same time or simply redirect all incoming messages from one mailbox to another.|yes
Auto-responders|If you enable this feature for a specific e-mail account, an e-mail message with a pre-defined text written by you will be automatically sent as a reply to every e-mail that you receive.|yes
Catch-all e-mails|This feature allows you to collect any messages that have been sent to a mistyped e-mail address @yourdomain.com.|yes
Mailing Lists|The mailist list allows you to send the same message to multiple recipients (that have subscribed to the list) at the same time.|=mail_list
Mailing List Members|This feature shows you how many people can be subscribed to the same list.|Unlimited
Anti-spam Protection|This e-mail feature protects you from receiving unwanted e-mail messages. If the advanced features are properly adjusted, SpamAssassin will filter up to 99% of the spam.|yes
SPF Protection|The Sender Policy Framework (SPF) prevents forging of the "FROM" field and thus it protects your domain names from being used for spamming.|yes
Anti-virus Protection|The ClamAV software has numerous advanced features that guarantee your anti-virus protection by scanning all incoming mail for viruses.|yes
Custom MX Records|The ability to change the MX records of the domain name or simply add more MX records with different priority allows you to control who is handling your mail service.|yes

WEBSITE CONTROLS
Advanced File Manager|The web hosting control panel is equipped with an advanced file manager that will allow you to easily create, delete, move and rename files and folders. It has many other useful features like the ability to work with drag&amp;drop operations.|=filemanager
FTP Accounts|The FTP account allows you to establish an FTP (File Transfer Protocol) connection to the server for faster and easier uploading.|=ftp
FTP Manager|The web hosting control panel provides you with an FTP Manager that you can use to create FTP accounts with different level of access for each one as well as change the password or delete existing accounts.|yes
SSH/Telnet|This feature allows advanced users to access and manage the account via secure connection to the server through an SSH/Telnet encryption software.|=ssh
Web-based SSH|Web Console is a web-based application that allows to execute shell commands on a server directly from a browser (web-based SSH).|=web_ssh
Website Manager|The easy-to-use web hosting control panel is also featured with a remarkable website manager that provides you full control over your domain names and subdomains.|yes
Custom Error Pages|This feature allows you to change the error page that website visitors see if the requested page from your website is not opening for some reason.|yes
Custom Apache Handlers|This is an advanced feature useful for experienced webmasters to determine how the server will treat various webfiles opposed to using the default Apache configuration.|yes
Custom MIME Types|This is another feature for advanced webmasters that allows them to determine how browsers will treat various files and file types.|yes
Password Protected Areas|Enabling a password protection for a certain folder allows you to grant access to a single user or group of people and keep it out of reach for the public..|yes
Guest Users|With our Guest Users feature, you can grant temporary access to different sections of your hosting account to third parties. This is particularly beneficial when partnering with developers or designers, enabling you to maintain control over the information they can view without exposing your entire account.|=subaccounts
Order Now

ADVANCED TOOLS
FrontPage Extensions|This feature gives our web hosting packages compatibility with Microsoft FrontPage so that you can upload and use websites created with FrontPage.|yes
Dreamweaver MX Support|Our web hosting packages are also compatible with websites created using Dreamweaver - probably one of the most popular web design softwares.|yes
PHP4/PHP5/PHP7 Support|PHP is one of the most used scripting languages when it comes to creating dynamic web pages and we are proud to support version 4, 5 and 7 to ensure that your website will work flawlessly.|yes
MySQL Databases|MySQL is a very popular SQL database server capable of working with various scripting languages such as C, C++, Java, Perl, PHP and Python. This feature shows how many MySQL databases you can use with each particular package.|=sql
MySQL Database Storage|This features shows you what is the amount of data that can be stored in all your MySQL databases as a total.|=sql_quota
phpMyAdmin Access|phpMyAdmin is a tool that provides complete access to manage your MySQL databases via easy-to-use interface.|=phpmy_admin
PostgreSQL Databases|PostgreSQL is a more advanced database system known to be stable and providing better data integrity. This feature shows how many PostgreSQL databases you can use with each particular package.|=pgsql
PostgreSQL Storage|This features shows you what is the amount of data that can be stored in all your PostgreSQL databases as a total|=pgsql_quota
phpPgAdmin|phpPgAdmin is a tool that provides complete access to manage your PostgreSQL databases via easy-to-use interface.|=phpPgAdmin
Zend Optimizer|This software optimizes the work of PHP based applications by enabling them to load and execute Zend Guard encoded files.|yes
Perl|Perl is one of the general purpose programming languages widely used for web development and thus it is supported by our servers to provide a wider choice for you.|yes
Over 3400 Perl Modules|Perl modules are packages of software code universally adopted to speed up future developing and you get over 3400 such modules with each of our shared hosting packages.|yes
ImageMagick &amp; GD Library|Both ImageMagick and GD Library are used for working with image files like PNG, GIF and JPEG among others when generating thumbnails, graphics, charts, etc.|yes
Python|Python is another general purpose programming language supported by all of our shared hosting packages and its aim is to combine very clear syntax with remarkable power.|yes
IonCube|Just like Zend Optimizer, IonCube also enhances the performance of PHP applications by enabling them to easily operate with IonCube encoded files.|yes
Server Side Includes|Server Side Includes are bits of coding that can be integrated into html files to tell them to include other information to be displayed as well. It is a good way of saving time and making sure the exact same information is displayed when it has to appear on different pages.|yes
SSL Certificate Generator|SSL (Secure Sockets Layer) is the most common way of securing webpages used especially when sensitive data is collected such as personal or billing information. The SSL Certificate Generator will provide you with unsigned SSL code that needs to be approved by an authorized registrar.|yes
Cron Jobs|Crontab is a command that allows scheduling tasks for future executing and is most widely used for repeating tasks executed at regular intervals.|=crontab
InnoDB|The latest edition of InnoDB offers serious improvements in efficacy, reliability and usability.|yes
Varnish|Varnish Cache is an HTTP accelerator that can improve the speed of your web site.|yes
Memcached|Memcached is a general-purpose memory caching system for increasing the load speed of dynamic database-driven websites.|yes
Node.js|Node.js is a software platform for building highly scalable network apps, built on Chrome`s JavaScript runtime.|yes

WEBSITE STATISTICS
Webalizer Web/FTP Stats|Webalizer is an advanced web statistics application that provides you extensive reports of the current and previous months with graphics for each month and detailed daily statistics including referral URLs|yes
Access Log Manager|When you activate the access logs for a certain hostname, there will be a record of every visit and every hit within your site. You can export the log in a text file for external statistical analysis.|yes
Error Log Viewer|When activated the error log keeps a record of every warning or error that occured on your website so that you can examine them and rectify the issues related to the website.|yes
Traffic Stats|This feature allows you to monitor the total of incoming and outgoing data transfer for each hostname in your account separately.|yes
MySQL Stats|This feature provides you information about the daily amount of queries made by each of your databases with an hourly average calculation as well.|yes
Load Stats|This tool provides you with detailed information about the CPU usage generated by your account over different periods of time - yearly, monthly, daily or even for 6 hour intervals.|yes

OS, CONNECTIVITY AND BACK-UP
Stable Linux with Apache|Linux is the leading server operating system known to be a stable environment with high security and great productivity and that is why it is used by the 10 fastests supercomputers in the world. Apache is the most popular web server that runs more websites than all other webservers combined.|yes
2.5 Gbit Network|The data center is using top quality routers and carriers allowing an outstanding Internet connection with combined speed of 2.5 gigabits per second.|yes
Help UPS &amp; diesel back-up generator|We have powerful UPS devices in place and a diesel generator in case of prolonged outages to ensure the uptime of the network.|yes

CUSTOMER SERVICE
24/7 Customer Support|We are here for our customers 24 hours a day and seven days a week - no holidays, no excuses!Different channels of communication are available to suit you best depending on the issue or query that you have.|yes
Phone Support|Apart from the phone number in US, we also have a AU, UK and international lines available 14 hours day to assist you with any pre-sales, billing or general questions you may have.|yes
Live Chat Support|Our Live Chat operators are waiting to assist you with your questions and problems in real time to ensure our services are always a better experience for you.|yes
Integrated Ticketing System|Whenever you experience technicial difficulties, our professional technicians are at your disposal so all you have to do is simply open a ticket from within your web hosting control panel and you will get a reply within the hour with an average response time of 15-20 minutes.|yes

PRICING
Monthly price||=prices_1
Order Now
[/rp_plans]
EOD;



$shared_content = <<<EOD
[rp_plans type="shared" best="" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_order}}</button>']
GUARANTEES
24/7 Customer Support|Regardless of whether you need assistance before or after you purchase, our customer support is available for you 24/7.|=support
1 Hour Response Time|We value your time and that is why our hosting employee will reply within the hour, no matter the nature of your inquiry.|yes
Uptime Guarantee|Tired of your site timing out, there is no need to worry because here at our hosting we guarantee 99.9% network uptime.|99.9%
Daily Data Backup|In order to ensure the information you upload on our servers is safe and secure, we back it up every day (as long as the account data is less than 5 GB). In case there is a problem, we can restore the content from the day before.|yes
Money Back Guarantee|All our shared web hosting packages come with a 30-day money-back guarantee. That way you can try the service for a month and in case it does not suit your needs and requirements, we will return your money. There is no option for a refund after the 30 days have passed and all domain registrations are final and non-refundable after the domain is registered.|30 Days
30-Day Free Trial|Sign up for our 30-day free trial to see what makes our hosting services special. No credit card required.|yes
Monthly price||=prices_1
Order Now

BASIC FEATURES
Disc Space|The amount of disk space indicates how much data you can upload on our servers once you purchase a shared hosting account with us.|=disk_space
Monthly Traffic|The monthly traffic shows how much data you can transfer to and from the server each month. That includes uploading the websites and any other files along with all the visits of the websites hosted in this account.|=traffic
Domain Name Registration / Transfer|<strong>Domain name registration</strong> is the service that allows you to have a unique address for your website on the Internet. Every domain name that is registered with us is automatically to point to your account with us so no further configuration is required.<strong>Domain name transfer</strong> is the process of changing the company that provides the domain registration service without a change in ownership.|=domain_price

FREE FEATURES
Free Account Set-up|We do not charge you any setup fees - you can simply start working on your websites.|yes
FREE Domain Name|If you purchase one of our packages, there is a bonus - one free domain name registration or transfer from the list of promotional domains.|=free_domain
800+ Website Themes| 800+ free templates are available by default with all shared hosting plans and you do not need coding skills or previous experience to build a site. All templates are free of charge.|yes
Online Website Builder|With all of our shared hosting packages you will get a free online website builder that does not require any design skills or experience since it includes multiple templates and makes website creation a breeze.|yes
50+ Free Apps Installer|Our 1-click Application Installer is included with all our shared hosting packages and it gives you access to install over 50+ applications - you can have a blog, a forum or a shopping cart set up within minutes with just a few clicks and no technical skills.|yes
Free VPN Access|Access blocked websites or use country-restricted services by routing your Internet traffic through a secure connection using multiple access points around the world.|=vpn_traffic
Shared SSL IPs|Our custom cloud hosting platform will allow you to use a shared IP address for SSL certificates, so you can protect the information that customers submit on your website without spending extra money for an IP.|yes
Dropbox/ Google Drive Backups|If you have a Dropbox or a Google Drive account, our system can generate daily backups of your files and databases in it, so you will have a copy of your content at all times and you can access it through a personal computer or a mobile device.|yes
Website Migration|If you are changing hosting providers, we can move all the content for you in a very timely manner and at no extra cost. We will also test your site to make sure that it is working flawlessly before you point your domain name to our cloud platform.|yes
SSD Data Caching|Our cloud shared hosting platform uses SSD drives working in a RAID for better and much faster performance of your websites. To improve the read and write speeds to some parts of the platform, we also use separate SSDs that are set up as to work as cache only. This setup will boost the speed of your websites even more.|yes
ZFS Storage|The ZFS file system that we use on our cloud hosting platform is superior to all other file systems out there. It works much faster, which means faster sites and more frequent backups, and due to the real-time checksum comparison it performs on all files, no file can ever get.|yes
ModSecurity|ModSecurity is a popular Apache module that prevents third parties from using exploits to hack a web application. It uses a set of rules to block certain incoming requests as it monitors the HTTP traffic in real time. ModSecurity comes with each and every shared hosting plan that we offer.|yes
Marketing Tools|If you need help to get your website more popular, the easy-to-use marketing tools that are included with each package come to the rescue. You can submit your website to search engines as well as publish news and stories.|yes
Administration Tools|All the packages are provided with Hotlink protection, IP blocking, .htaccess generator and other tools which make advanced administration easy.|yes
Video Tutorials|Over 40 clips are available through different sections of the web hosting control panel so that you can start finding your way with ease.|yes
Online Documentation|After carefully studying the questions and difficulties our clients experience with the web hosting control panel and our services, we have compiled an extensive help section with lots of FAQs and tutorials that will help you along the way.|yes

CONTROL PANEL
In-house Built Control Panel|The Hepsia control panel is an in-house product that is a result of hard work aimed at providing advanced functionality combined with easy-to-use and intuitive design.|<a target="_blank" href="[rp_store_info key='demo']?auto_login=true" title="watch web hosting video presentation">View Demo</a>
Multi-lingual Interface (over 10 languages)|We have clients from all over the world and therefore the in-house built web hosting control panel is available in over 10 languages and more are on the way to facilitate our international clients.|yes
Colour Skins|And to make working with our web hosting control panel even more pleasant you can choose the colour theme that suits you best.|yes

DOMAINS & SUBDOMAINS
Hosted Domains|You can host with us any top level domain name and this feature shows you how many domain names you can host with each of the shared web hosting packages.|=domain
Subdomains|Subdomains, also known as child domains, are domains that are part of a larger domain. For example anything.my-best-domain.com is a subdomain of the domain name my-best-domain.com|=subdomain
Parked Domains|When you register a domain name just to reserve it for future use, you can use the domain parking feature which allows you to point it to a temporary page (for example "Under Construction") or simply redirect the domain to another site.|Unlimited
Full DNS Management|The web hosting control panel provides you complete access to manage all DNS records of your domain name like changing the A record to point to a different host or the MX records to choose a different mail server to handle your e-mails.|yes
Custom A and MX Records|The A record of the domain name specifies the IP address where the domain name resolves to while the MX records of the domain name specify the mail servers that handle the e-mail of the domain name.|yes
CNAME Records|The CNAME record of the domain name redirects the domain to another domain`s A record and therefore creating a CNAME record removes the A record of the domain.|yes
AAAA/SRV/NS/TXT Records|The advanced features of the web hosting control panel allow you to set up IPv6 related records such as the AAAA record which is used for mapping hostnames to IPv6 addresses. The SRV record (also known as Service record) is used for defining the location of servers for specified services - the hostname and the port number. The NS (Name Server) records of the domain name specify which server handles all the DNS records for this domain name. The SPF e-mail authentication system derives information from the TXT records of the domain name.|yes
Full Whois Management|We provide you complete access to manage the WHOIS record of the domain name as much as the registry allows you. There are specific restrictions for some of the TLDs and you should refer to the Domains page.|yes
Registrar Lock Option|This is a security feature available for some TLDs to prevent unwanted domain transfers and thus protect your domain name from theft.We grant you access to lock and unlock the domain names at will via the web hosting control panel.|yes
EPP Transfer Protection|Some TLDs require this specific EPP transfer authorization key to process domain transfers. This is used in addition or instead of the Registrar Lock for further protection. You can easily obtain the EPP key for your domain names via the web hosting control panel.|yes
ID Protection|We offer an additional service for all TLDs that support this feature to protect your personal data becoming public in the WHOIS record. That is the best way of protection against spammers and possible identity theft.|Optional

E-MAIL SERVICES
Email Accounts|The mailboxes you create with us support POP3, IMAP and SMTP protocols that allow you to use mail client applications such as Outlook and Thunderbird to access and manage your e-mail.|=mailbox
Webmail|You can choose from the three webmail applications we offer to access and manage your e-mail from any computer in the world that is connected to the Internet without any setup or configuration.|yes
E-Mail Aliases|This feature allows you to set up different e-mail addresses that use the same mailbox and that way you can easily check the messages you receive in all e-mail aliases at the same time.|=aliases
E-Mail Forwarding|This feature allows you to receive the same message in two or more e-mail addresses at the same time or simply redirect all incoming messages from one mailbox to another.|yes
Auto-responders|If you enable this feature for a specific e-mail account, an e-mail message with a pre-defined text written by you will be automatically sent as a reply to every e-mail that you receive.|yes
Catch-all e-mails|This feature allows you to collect any messages that have been sent to a mistyped e-mail address @yourdomain.com.|yes
Mailing Lists|The mailist list allows you to send the same message to multiple recipients (that have subscribed to the list) at the same time.|=mail_list
Mailing List Members|This feature shows you how many people can be subscribed to the same list.|Unlimited
Anti-spam Protection|This e-mail feature protects you from receiving unwanted e-mail messages. If the advanced features are properly adjusted, SpamAssassin will filter up to 99% of the spam.|yes
SPF Protection|The Sender Policy Framework (SPF) prevents forging of the "FROM" field and thus it protects your domain names from being used for spamming.|yes
DomainKeys Identified Mail|The DomainKeys Identified Mail system is used to digitally stamp every mail message in order to make sure that it is sent from a trusted server and has not been edited during the delivery itself. By using public and private encryption keys, the system is also used to obstruct email forgery, i.e. disguising an email message to appear as though it was sent from another e-mail address.|yes
Anti-virus Protection|The ClamAV software has numerous advanced features that guarantee your anti-virus protection by scanning all incoming mail for viruses.|yes
Custom MX Records|The ability to change the MX records of the domain name or simply add more MX records with different priority allows you to control who is handling your mail service.|yes

WEBSITE CONTROLS
Advanced File Manager|The web hosting control panel is equipped with an advanced file manager that will allow you to easily create, delete, move and rename files and folders. It has many other useful features like the ability to work with drag&drop operations.|=filemanager
FTP Accounts|The FTP account allows you to establish an FTP (File Transfer Protocol) connection to the server for faster and easier uploading.|=ftp
FTP Manager|The web hosting control panel provides you with an FTP Manager that you can use to create FTP accounts with different level of access for each one as well as change the password or delete existing accounts.|yes
SSH/Telnet|This feature allows advanced users to access and manage the account via secure connection to the server through an SSH/Telnet encryption software.|=ssh
Web-based SSH|Web Console is a web-based application that allows to execute shell commands on a server directly from a browser (web-based SSH).|=web_ssh
Website Manager|The easy-to-use web hosting control panel is also featured with a remarkable website manager that provides you full control over your domain names and subdomains.|yes
Custom Error Pages|This feature allows you to change the error page that website visitors see if the requested page from your website is not opening for some reason.|yes
Custom Apache Handlers|This is an advanced feature useful for experienced webmasters to determine how the server will treat various webfiles opposed to using the default Apache configuration.|yes
Custom MIME Types|This is another feature for advanced webmasters that allows them to determine how browsers will treat various files and file types.|yes
Password Protected Areas|Enabling a password protection for a certain folder allows you to grant access to a single user or group of people and keep it out of reach for the public..|yes
URL Redirection Tool|This is another advanced feature of the web hosting control panel that allows you to easily redirect your URLs using permanent or temporary redirection.|yes
Guest Users|With our Guest Users feature, you can grant temporary access to different sections of your hosting account to third parties. This is particularly beneficial when partnering with developers or designers, enabling you to maintain control over the information they can view without exposing your entire account.|=subaccounts
Order Now

ADVANCED TOOLS
Dedicated IP Address|A dedicated IP address means that you will be the only one in the world using this exact IP address. For example, if you intend to have an online store with a private SSL certificate you will need a dedicated IP address to install it.|=ip
FrontPage Extensions|This feature gives our web hosting packages compatibility with Microsoft FrontPage so that you can upload and use websites created with FrontPage.|yes
Dreamweaver MX Support|Our web hosting packages are also compatible with websites created using Dreamweaver - probably one of the most popular web design softwares.|yes
PHP4/PHP5/PHP7 Support|PHP is one of the most used scripting languages when it comes to creating dynamic web pages and we are proud to support version 4, 5 and 7 to ensure that your website will work flawlessly.|yes
MySQL Databases|MySQL is a very popular SQL database server capable of working with various scripting languages such as C, C++, Java, Perl, PHP and Python. This feature shows how many MySQL databases you can use with each particular package.|=sql
MySQL Database Storage|This features shows you what is the amount of data that can be stored in all your MySQL databases as a total.|=sql_quota
phpMyAdmin Access|phpMyAdmin is a tool that provides complete access to manage your MySQL databases via easy-to-use interface.|=phpmy_admin
PostgreSQL Databases|PostgreSQL is a more advanced database system known to be stable and providing better data integrity. This feature shows how many PostgreSQL databases you can use with each particular package.|=pgsql
PostgreSQL Storage|This features shows you what is the amount of data that can be stored in all your PostgreSQL databases as a total|=pgsql_quota
phpPgAdmin|phpPgAdmin is a tool that provides complete access to manage your PostgreSQL databases via easy-to-use interface.|=phpPgAdmin
Zend Optimizer|This software optimizes the work of PHP based applications by enabling them to load and execute Zend Guard encoded files.|yes
Perl|Perl is one of the general purpose programming languages widely used for web development and thus it is supported by our servers to provide a wider choice for you.|yes
Over 3400 Perl Modules|Perl modules are packages of software code universally adopted to speed up future developing and you get over 3400 such modules with each of our shared hosting packages.|yes
ImageMagick & GD Library|Both ImageMagick and GD Library are used for working with image files like PNG, GIF and JPEG among others when generating thumbnails, graphics, charts, etc.|yes
Python|Python is another general purpose programming language supported by all of our shared hosting packages and its aim is to combine very clear syntax with remarkable power.|yes
IonCube|Just like Zend Optimizer, IonCube also enhances the performance of PHP applications by enabling them to easily operate with IonCube encoded files.|yes
Server Side Includes|Server Side Includes are bits of coding that can be integrated into html files to tell them to include other information to be displayed as well. It is a good way of saving time and making sure the exact same information is displayed when it has to appear on different pages.|yes
SSL Certificate Generator|SSL (Secure Sockets Layer) is the most common way of securing webpages used especially when sensitive data is collected such as personal or billing information. The SSL Certificate Generator will provide you with unsigned SSL code that needs to be approved by an authorized registrar.|yes
Cron Jobs|Crontab is a command that allows scheduling tasks for future executing and is most widely used for repeating tasks executed at regular intervals.|=crontab
InnoDB|The latest edition of InnoDB offers serious improvements in efficacy, reliability and usability.|yes
Varnish|Varnish Cache is an HTTP accelerator that can improve the speed of your web site.|=varnish
Memcached|Memcached is a general-purpose memory caching system for increasing the load speed of dynamic database-driven websites.|=memcached
Node.js|Node.js is a software platform for building highly scalable network apps, built on Chrome`s JavaScript runtime.|=nodejs

WEBSITE STATISTICS
Webalizer Web/FTP Stats|Webalizer is an advanced web statistics application that provides you extensive reports of the current and previous months with graphics for each month and detailed daily statistics including referral URLs|yes
Access Log Manager|When you activate the access logs for a certain hostname, there will be a record of every visit and every hit within your site. You can export the log in a text file for external statistical analysis.|yes
Error Log Viewer|When activated the error log keeps a record of every warning or error that occured on your website so that you can examine them and rectify the issues related to the website.|yes
Traffic Stats|This feature allows you to monitor the total of incoming and outgoing data transfer for each hostname in your account separately.|yes
MySQL Stats|This feature provides you information about the daily amount of queries made by each of your databases with an hourly average calculation as well.|yes
Load Stats|This tool provides you with detailed information about the CPU usage generated by your account over different periods of time - yearly, monthly, daily or even for 6 hour intervals.|yes

OS, CONNECTIVITY AND BACK-UP
Stable Linux with Apache|Linux is the leading server operating system known to be a stable environment with high security and great productivity and that is why it is used by the 10 fastests supercomputers in the world. Apache is the most popular web server that runs more websites than all other webservers combined.|yes
2.5 Gbit Network|The data center is using top quality routers and carriers allowing an outstanding Internet connection with combined speed of 2.5 gigabits per second.|yes
Help UPS & Diesel Backup Generator|We have powerful UPS devices in place and a diesel generator in case of prolonged outages to ensure the uptime of the network.|yes

CUSTOMER SERVICE
24/7 Customer Support|We are here for our customers 24 hours a day and seven days a week - no holidays, no excuses!Different channels of communication are available to suit you best depending on the issue or query that you have.|yes
Phone Support|Apart from the phone number in US, we also have a AU, UK and international lines available 14 hours day to assist you with any pre-sales, billing or general questions you may have.|yes
Live Chat Support|Our Live Chat operators are waiting to assist you with your questions and problems in real time to ensure our services are always a better experience for you.|yes
Integrated Ticketing System|Whenever you experience technicial difficulties, our professional technicians are at your disposal so all you have to do is simply open a ticket from within your web hosting control panel and you will get a reply within the hour with an average response time of 15-20 minutes.|yes

PRICING
Monthly price|Please note that shared web hosting packages are paid annually and this monthly price is calculated for comparison purposes only.|=prices_1
Total annual price |Since shared web hosting packages are paid on annual basis this is the actual fee that you have to pay in order to purchase the package you wish to use.|=prices_12
Order Now
[/rp_plans]
EOD;

$dedicated_content = <<<EOD
[rp_plans type="dedicated" best="" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>']
SERVER FEATURES
Network|Our dedicated server network is powered by Gbit Network Cards.|10 Gbits Network Cards
Dedicated IP Addresses|Your Dedicated Server plan includes 1 dedicated IP address by default.|=ips
Domain Name Registration / Transfer|Your dedicated server plan allows you to register or transfer a domain name to our registrar. More domain registration and transfer options are available via your Dedicated Plan Manager.|=domain_price

OS INSTALLATION OPTIONS
CentOS|Due to its proven stability and high levels of security, CentOS is one of the most widely used Linux operating systems in the web hosting and reseller hosting industries.|yes
Debian|Debian is a free Linux kernel based operating system distributed under the GNU license. It is made up of various software packages, containing executables, scripts, documentation and configuration information.|yes
Ubuntu|Ubuntu is a Debian Linux based OS, including various content processing and email applications, web server software and programming tools.|yes

RESELLING TOOLS
eNom Domain Name Reseller Account|With each Dedicated Server you get a free eNom domain reseller account. No need to submit any deposits!|yes
Client Exec Billing/Support Software |With this tool you will be able to efficiently manage and support your web hosting clients. It includes a fully integrated ticket support system, an invoice manager and many customization options.|=clientexec

SERVER GUARANTEES
No Set-up Fee|A setup fee is usually required for a server to be configured for you after sign-up. Each Dedicated Server plan we offer will be set up for you free of charge.|yes
99.9% Network Uptime|We guarantee that the network where your dedicated server belongs to will be up and running 99.9% of the period of your subscription with us.|yes
Full Root-level Access|With each Dedicated Server plan you will have full root access to your dedicated server.|=root
24/7 Technical Support For Pre-installed Software|We offer 24/7 support via ticketing system for all the applications that your Dedicated Server comes pre-installed with.|=support
[/rp_plans]
[rp_plans upgrades="upgrades" type="dedicated" best="" button='<button class="rpwp-button colorize">{{dedicated_order}}</button>']
CONTROL PANEL INSTALLATION
cPanel (for CentOS only)|cPanel is a graphical interface Control Panel providing functionality for Dedicated Server owners to control the various aspects of website and server administration through a standard web browser. With the installation of a cPanel on your dedicated server you will be able to host unlimited domains on the server.|=cPanel_price
DirectAdmin (for CentOS only)|DirectAdmin is one of the fastest and easiest to use graphical web-based Control Panels available online. It is programmed to automatically recover from crashes, thus preventing any possible downtimes for your services. If you choose to install DirectAdmin on your dedicated server you will have the option to host unlimited domains on the server.|=DirectAdmin_price
Hepsia (no root access; for Debian only) <a target="_blank" href="[rp_store_info key='demo']?auto_login=true"><strong>TRY DEMO</strong></a>|This is our user-friendly in-house built web hosting Control Panel, available in more than 15 languages. From there you will be able to take care of all website management operations.|=Hepsia

EXTRA DEDICATED IPs
1 additional IP|Your dedicated server plan includes 1 IP address by default but you can order 1 additional IP, if necessary, at sign-up or from your Dedicated Plan Manager.|=ip_price

ADMINISTRATION SERVICES
BACKUP SPACE (50 GB)|You can request a backup service for your dedicated server, at sign-up or from your Dedicated Plan Manager.|=backup_price
MANAGED SERVICES PACKAGE|This package includes various administration services such as Backup Space (50GB), Weekly OS Update, Monitoring & Rebooting, Installation &amp; Troubleshooting services.|=managed_services_price
 - Backup Space (50 GB)|This service is a part of the Managed Services Package and provides a backup of 50 GB of the information stored on your dedicated server.|yes
 - Weekly OS Update|This service is integrated into the Managed Services Package and provides a weekly update of your OS installation.|yes
 - Monitoring &amp; Rebooting|This service is a part of the Managed Services Package and provides server monitoring and rebooting services.|yes
 - Installation &amp; Troubleshooting (30 minutes)|The service is included in the Managed Services Package and provides 30 minutes of custom software installation and script troubleshooting assistance from our administrators.|yes
INSTALLATION &amp; TROUBLESHOOTING|Ordering this upgrade service you can request custom software installations for your dedicated server and also get qualified administration assistance in troubleshooting script problems.|=installation_troubleshooting_price

FREE FEATURES WITH HEPSIA CP
VPN Traffic|Access blocked websites or use country-restricted services by routing your Internet traffic through a secure connection using multiple access points around the world.|=vpn_traffic
Dropbox Backups|This service will allow you to link a dedicated server that is set up with the Hepsia Control Panel to a Dropbox account and get regular backups of your web content there. The files can be accessed from any computer or device where Dropbox is installed. If you have enough free space in your account with them, you can have up to fourteen backups at a time.|yes
Memcached|Memcached is a general-purpose memory caching system for increasing the load speed of dynamic database-driven websites.|=memcached
Redis|Redis is an open source, in-memory data structure store, used as a NoSQL database, cache and message broker. It supports data structures such as strings, hashes, lists, sets, sorted sets with range queries, bitmaps, etc. Redis has built-in replication, Lua scripting, transactions and different levels of on-disk persistence, and provides high availability and automatic partitioning.|=redis
Node.js|Node.js is a software platform for building highly scalable network apps, built on Chrome`s JavaScript runtime.|=nodejs
Varnish|Varnish Cache is an HTTP accelerator that can improve the speed of your web site.|=varnish
InnoDB|The latest edition of InnoDB offers serious improvements in efficacy, reliability and usability.|=innodb
Guest Users|With our Guest Users feature, you can grant temporary access to different sections of your hosting account to third parties. This is particularly beneficial when partnering with developers or designers, enabling you to maintain control over the information they can view without exposing your entire account.|=subaccounts
[/rp_plans]
EOD;

$testimonials_content = <<<EOD
	    <div class="personal-feedback">
		 <strong>Samantha S.</strong><p>&quot; I really love the new Control Panel, the whole layout is much easier to navigate. The upload speed is much faster and I really enjoy the look and feel of the new site. &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Erika T.</strong><p>&quot; Very nice! I have really enjoyed the look and feel of the new Control Panel. I don`t know if you have added more features or they are just easier to find now, but I am pleased either way. &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Craig S.</strong><p>&quot; Great job, love the new panel, a huge upgrade! We appreciate your service and hard work! Thanks again!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Ho K. </strong><p>&quot; I love this new Control Panel, good job!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Adilson T. </strong><p>&quot; Amazing! Congrats!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Michael E.</strong><p>&quot; Thanks to all of you guys!!! Your service is cool.  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Robert L.</strong><p>&quot; Sweet. Two thumbs up!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Enrico T.</strong><p>&quot; The new Control Panel is fantastic! It is functional, elegant, simple and complete. I am very happy with the choice you have made.  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Ary G. </strong><p>&quot; I like your new customer Control Panel interface, it`s very nice. And I would like to say thank you for providing the PrestaShop installer - it`s great!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Ryan M. </strong><p>&quot; Just got an account today and I`m already in love with it! A wonderful-looking panel and wonderful options!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Maulik B. </strong><p>&quot; I really like your new Control Panel. I have been an ardent fan of this site. An amazing look and feel! And more importantly, the functionality has been improved to a great extent. &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Roman K. </strong><p>&quot; I`d like to say 'Thank you very much for your high-quality service'!<br />
			Your new Control Panel is just super!<br />
			Your help is always fast and useful!<br />
			Your prices are really good!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Mario R. </strong><p>&quot; Loved the new look! Good upgrade.<br />
			Best regards!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Connor F. </strong><p>&quot; I have had a number of accounts with other web hosts, including GoDaddy and 1and1. I can honestly say that you offer the optimal solution for any web developer. Thank you!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Jason G. </strong><p>&quot; I find that the keyboard shortcuts, such as "Control-S" to save a file, are very helpful. With other hosts, I find myself typing "Control-S" to save a file and nothing happens.  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Furanku M. </strong><p>&quot; To be honest, when I was searching for a GoDaddy replacement, I did a lot of looking around before I finally came across you. This has been the best hosting experience I`ve ever had!  &quot;</p>
		</div>
	    <div class="personal-feedback">
		 <strong>Robert H. </strong><p>&quot; Wanted to add how beautiful the site is now - so clear and easy to navigate - it;s indeed like Heaven on Earth. But don`t ascend yet - I need you here to host my website a bit longer.  &quot;</p>
		</div>
EOD;

global $rp_plan_pages;
$rp_plan_pages = array(
	'rp_single_shared'=>array('title' => '{{single_shared_hosting_title}}',
						    'type' => 'shared_plan', 
							'meta_title' => '{{single_shared_hosting_meta_title}}', 
							'meta_description' => '{{single_shared_hosting_meta_description}}', 
							'meta_keywords' => '{{single_shared_hosting_meta_keywords}}',
						    'page_template' => 'internal_page_1.php', 
							'parent' => 'default_page_shared',
						    'content'=> <<<EOD
 <div id="aboutus-content-main">
    <h1>{{single_shared_hosting_title}}</h1><br />
	$shared_content
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_single_shared"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_single_shared"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_single_shared"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_single_shared"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_single_shared"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_single_shared"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_single_shared"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_single_shared"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>

EOD
	),
	'rp_single_vps_openvz'=>array('title' => '{{single_vps_openvz_hosting_title}}',
						    'type' => 'vps_openvz_plan', 
							'meta_title' => '{{single_vps_openvz_hosting_meta_title}}', 
							'meta_description' => '{{single_vps_openvz_hosting_meta_description}}', 
							'meta_keywords' => '{{single_vps_openvz_hosting_meta_keywords}}',
						    'page_template' => 'internal_page_1.php', 
							'parent' => 'default_page_vps_openvz',
						    'content'=> <<<EOD
 <div id="aboutus-content-main">
    <h1>{{single_vps_openvz_hosting_title}}</h1><br />
$vps_openvz_content
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_single_vps_openvz"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>

EOD
	),
	'rp_single_vps_virtuozzo'=>array('title' => '{{single_vps_virtuozzo_hosting_title}}',
						    'type' => 'vps_virtuozzo_plan', 
							'meta_title' => '{{single_vps_virtuozzo_hosting_meta_title}}', 
							'meta_description' => '{{single_vps_virtuozzo_hosting_meta_description}}', 
							'meta_keywords' => '{{single_vps_virtuozzo_hosting_meta_keywords}}',
						    'page_template' => 'internal_page_1.php', 
							'parent' => 'default_page_vps_virtuozzo',
						    'content'=> <<<EOD
 <div id="aboutus-content-main">
    <h1>{{single_vps_virtuozzo_hosting_title}}</h1><br />
$vps_virtuozzo_content
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_single_vps_virtuozzo"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>

EOD
	),
	'rp_single_vps_kvm'=>array('title' => '{{single_vps_kvm_hosting_title}}',
						    'type' => 'vps_kvm_plan', 
							'meta_title' => '{{single_vps_kvm_hosting_meta_title}}', 
							'meta_description' => '{{single_vps_kvm_hosting_meta_description}}', 
							'meta_keywords' => '{{single_vps_kvm_hosting_meta_keywords}}',
						    'page_template' => 'internal_page_1.php', 
							'parent' => 'default_page_vps_kvm',
						    'content'=> <<<EOD
 <div id="aboutus-content-main">
    <h1>{{single_vps_kvm_hosting_title}}</h1><br />
$vps_kvm_content
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_single_vps_kvm"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>
EOD
	),
	'rp_single_semi_dedicated'=>array('title' => '{{single_semi_dedicated_hosting_title}}',
						    'type' => 'semi_dedicated_plan', 
							'meta_title' => '{{single_semi_dedicated_hosting_meta_title}}', 
							'meta_description' => '{{single_semi_dedicated_hosting_meta_description}}', 
							'meta_keywords' => '{{single_semi_dedicated_hosting_meta_keywords}}',
						    'page_template' => 'internal_page_1.php', 
							'parent' => 'default_page_semi_dedicated',
						    'content'=> <<<EOD
 <div id="aboutus-content-main">
    <h1>{{single_semi_dedicated_hosting_title}}</h1><br />
$semi_dedicated_content
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  <div class="line"></div>
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_single_semi_dedicated"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>

EOD
	),
	'rp_single_dedicated'=>array('title' => '{{single_dedicated_hosting_title}}',
						    'type' => 'dedicated_plan', 
							'meta_title' => '{{single_dedicated_hosting_meta_title}}', 
							'meta_description' => '{{single_dedicated_hosting_meta_description}}', 
							'meta_keywords' => '{{single_dedicated_hosting_meta_keywords}}',
						    'page_template' => 'internal_page_1.php', 
							'parent' => 'default_page_dedicated',
						    'content'=> <<<EOD
 <div id="aboutus-content-main">
    <h1>{{single_dedicated_hosting_title}}</h1><br />
[rp_plans_short type="dedicated_horizontal" show_link="1"][/rp_plans_short]
<div style='display:none'>
	<div id='compare_overlay' style='padding:10px; background:#fff;'>$dedicated_content</div>
</div>
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_single_dedicated"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_single_dedicated"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_single_dedicated"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_single_dedicated"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_single_dedicated"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_single_dedicated"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_single_dedicated"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_single_dedicated"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>

EOD
	),
);

global $rp_install_pages;
$rp_install_pages = array(
	'rp_shared_plan'=>array('title' => '{{shared_hosting_title}}',
						    'type' => 'product', 
						    'page_template' => 'special_page.php', 
							'meta_title' => '{{shared_hosting_meta_title}}', 
							'meta_description' => '{{shared_hosting_meta_description}}', 
							'meta_keywords' => '{{shared_hosting_meta_keywords}}', 
							'menu_title' => '{{shared_hosting_menu_title}}', 
						    'header_type' => 'web_hosting', 
						    'header_title' => '{{shared_hosting_header_title}}', 
						    'header_content' => <<<EOD
{{shared_hosting_header_content}}
EOD
,
						    'content'=> <<<EOD
$shared_content
EOD
	),
	'rp_semi_dedicated_plan'=>array('title' => '{{semi_dedicated_hosting_title}}',
									'type' => 'product', 
									'page_template' => 'special_page.php', 
									'meta_title' => '{{semi_dedicated_hosting_meta_title}}', 
									'meta_description' => '{{semi_dedicated_hosting_meta_description}}', 
									'meta_keywords' => '{{semi_dedicated_hosting_meta_keywords}}', 
									'menu_title' => '{{semi_dedicated_hosting_menu_title}}', 
									'header_type' => 'semi-dedicated', 
								    'header_title' => '{{semi_dedicated_hosting_header_title}}', 
								    'header_content' => <<<EOD
{{semi_dedicated_hosting_header_content}}
EOD
,
									'content'=> <<<EOD
$semi_dedicated_content
EOD
	),
	'rp_vps_compare'=>array('title' => '{{vps_compare_hosting_title}}',
						    'type' => 'product', 
						    'page_template' => 'special_page.php', 
							'meta_title' => '{{vps_compare_hosting_meta_title}}', 
							'meta_description' => '{{vps_compare_hosting_meta_description}}', 
							'meta_keywords' => '{{vps_compare_hosting_meta_keywords}}', 
							'menu_title' => '{{vps_compare_hosting_menu_title}}', 
						    'header_type' => 'vps_compare', 
						    'header_title' => '{{vps_compare_hosting_header_title}}', 
						    'header_content' => <<<EOD
{{vps_compare_hosting_header_content}}
EOD
,
						    'content'=> <<<EOD
[rp_plans_short type="vps_openvz" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_compare_openvz_order}}</button>' title='OpenVZ VPS plans']
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
<br>
<br>
[rp_plans_short type="vps_kvm" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_compare_virtuozzo_order}}</button>' title='KVM VPS plans']
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
EOD
	),
	'rp_vps_plan'=>array('title' => '{{vps_virtuozzo_hosting_title}}',
						  'type' => 'product', 
						  'page_template' => 'special_page.php',
						  'meta_title' => '{{vps_virtuozzo_hosting_meta_title}}', 
						  'meta_description' => '{{vps_virtuozzo_hosting_meta_description}}', 
						  'meta_keywords' => '{{vps_virtuozzo_hosting_meta_keywords}}', 
						  'menu_title' => '{{vps_virtuozzo_hosting_menu_title}}', 
						  'header_type' => 'vps_virtuozzo', 
						  'header_title' => '{{vps_virtuozzo_hosting_header_title}}', 
						  'header_content' => <<<EOD
{{vps_virtuozzo_hosting_header_content}}
EOD
,
						  'content'=> <<<EOD
$vps_virtuozzo_content
EOD
	),
	'rp_vps_kvm_plan'=>array('title' => '{{vps_kvm_hosting_title}}',
						  'type' => 'product', 
						  'page_template' => 'special_page.php',
						  'meta_title' => '{{vps_kvm_hosting_meta_title}}', 
						  'meta_description' => '{{vps_kvm_hosting_meta_description}}', 
						  'meta_keywords' => '{{vps_kvm_hosting_meta_keywords}}', 
						  'menu_title' => '{{vps_kvm_hosting_menu_title}}', 
						  'header_type' => 'none', 
						  'header_title' => '{{vps_kvm_hosting_header_title}}', 
						  'header_content' => <<<EOD
{{vps_kvm_hosting_header_content}}
EOD
,
						  'content'=> <<<EOD
$vps_kvm_content
EOD
	),
	'rp_vps_openvz_plan'=>array('title' => '{{vps_openvz_hosting_title}}',
								  'type' => 'product', 
								  'page_template' => 'special_page.php', 
								  'meta_title' => '{{vps_openvz_hosting_meta_title}}', 
								  'meta_description' => '{{vps_openvz_hosting_meta_description}}', 
								  'meta_keywords' => '{{vps_openvz_hosting_meta_keywords}}', 
								  'menu_title' => '{{vps_openvz_hosting_menu_title}}', 
								  'header_type' => 'vps_openvz', 
								  'header_title' => '{{vps_openvz_hosting_header_title}}', 
								  'header_content' => <<<EOD
{{vps_openvz_hosting_header_content}}
EOD
,
								  'content'=> <<<EOD
$vps_openvz_content
<div class="openvz-info">
  <ul class="openvz-server-info">
    <li><strong>UNLIMITED</strong> Domains</li>
    <li><strong>UNLIMITED</strong> Emails</li>
    <li><strong>UNLIMITED</strong> Databases</li>
    <li><strong>UNLIMITED FTP</strong> Accounts</li>
  </ul>
  <ul class="openvz-server-info">
    <li><strong>FAST</strong> Account Activation</li>
    <li><strong>NO</strong> Setup Fees</li>
    <li><strong>24/7/365</strong> Support</li>
    <li><strong>WEEKLY</strong> Off-site Backups</li>
  </ul>
  <ul class="openvz-server-info">
    <li><strong>SSH/ FULL</strong> Root Access</li>
    <li><strong>OS</strong> Choices (CentOS, Debian, Ubuntu)</li>
    <li><strong>CONTROL PANEL</strong> Choices (Hepsia, cPanel, DirectAdmin)</li>
  </ul>
  <br clear="all" />
</div>
EOD
	),
	'rp_vps_openvz_plan_2'=>array('title' => '{{vps_openvz_hosting_title_2}}',
								  'type' => 'product', 
								  'page_template' => 'special_page.php', 
								  'meta_title' => '{{vps_openvz_hosting_meta_title_2}}', 
								  'meta_description' => '{{vps_openvz_hosting_meta_description_2}}', 
								  'meta_keywords' => '{{vps_openvz_hosting_meta_keywords_2}}', 
								  'menu_title' => '{{vps_openvz_hosting_menu_title_2}}', 
								  'header_type' => 'vps_openvz', 
								  'header_title' => '{{vps_openvz_hosting_header_title_2}}', 
								  'header_content' => <<<EOD
{{vps_openvz_hosting_header_content_2}}
EOD
,
								  'content'=> <<<EOD
[rp_plans_short type="vps_openvz_all" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_openvz_2_order}}</button>']
<div class="openvz-info">
  <ul class="openvz-server-info">
    <li><strong>UNLIMITED</strong> Domains</li>
    <li><strong>UNLIMITED</strong> Emails</li>
    <li><strong>UNLIMITED</strong> Databases</li>
    <li><strong>UNLIMITED FTP</strong> Accounts</li>
  </ul>
  <ul class="openvz-server-info">
    <li><strong>FAST</strong> Account Activation</li>
    <li><strong>NO</strong> Setup Fees</li>
    <li><strong>24/7/365</strong> Support</li>
    <li><strong>WEEKLY</strong> Off-site Backups</li>
  </ul>
  <ul class="openvz-server-info">
    <li><strong>SSH/ FULL</strong> Root Access</li>
    <li><strong>OS</strong> Choices (CentOS, Debian, Ubuntu)</li>
    <li><strong>CONTROL PANEL</strong> Choices (Hepsia, cPanel, DirectAdmin)</li>
  </ul>
  <br clear="all" />
</div>
EOD
	),
	'rp_dedicated_plan'=>array('title' => '{{dedicated_hosting_title}}',
								'type' => 'product', 
								'page_template' => 'special_page.php', 
								'meta_title' => '{{dedicated_hosting_meta_title}}', 
								'meta_description' => '{{dedicated_hosting_meta_description}}', 
								'meta_keywords' => '{{dedicated_hosting_meta_keywords}}', 
								'menu_title' => '{{dedicated_hosting_menu_title}}', 
								'header_type' => 'dedicated', 
								'header_title' => '{{dedicated_hosting_header_title}}', 
								'header_content' => <<<EOD
{{dedicated_hosting_header_content}}
EOD
,
								'content'=> <<<EOD
[rp_plans_short type="dedicated_horizontal"][/rp_plans_short]
$dedicated_content
EOD
	),
	'rp_shared_plans_short'=>array('title' => '{{shared_plans_short_title}}',
									'type' => 'product', 
									'meta_title' => '{{shared_plans_short_meta_title}}', 
									'meta_description' => '{{shared_plans_short_meta_description}}', 
									'meta_keywords' => '{{shared_plans_short_meta_keywords}}', 
									'menu_title' => '{{shared_plans_short_menu_title}}', 
									'header_type' => 'web_hosting', 
									'header_title' => '{{shared_hosting_header_title}}', 
									'header_content' => <<<EOD
{{shared_hosting_header_content}}
EOD
,
									'content'=> <<<EOD
	<h1>{{shared_plans_short_title}}</h1><br />
[rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  <br />
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_1}}</h3>
      <span>{{shared_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_2}}</h3>
      <span>{{shared_feature_listing_content_2}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_3}}</h3>
      <span>{{shared_feature_listing_content_3}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_4}}</h3>
      <span>{{shared_feature_listing_content_4}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_5}}</h3>
      <span>{{shared_feature_listing_content_5}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_6}}</h3>
      <span>{{shared_feature_listing_content_6}}</span> </div>
  </div>
  <br clear="all" /><br />
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  
EOD
	),
	'rp_vps_virtuozzo_plans_short'=>array('title' => '{{vps_virtuozzo_plans_short_title}}',
											'type' => 'product', 
											'meta_title' => '{{vps_virtuozzo_plans_short_meta_title}}', 
											'meta_description' => '{{vps_virtuozzo_plans_short_meta_description}}', 
											'meta_keywords' => '{{vps_virtuozzo_plans_short_meta_keywords}}', 
											'menu_title' => '{{vps_virtuozzo_plans_short_menu_title}}', 
											'header_type' => 'vps_virtuozzo', 
											'header_title' => '{{vps_virtuozzo_hosting_header_title}}', 
											'header_content' => <<<EOD
{{vps_virtuozzo_hosting_header_content}}
EOD
,
											'content'=> <<<EOD
	<h1>{{vps_virtuozzo_plans_short_title}}</h1><br />
[rp_plans_short type="vps_virtuozzo_short" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{vps_virtuozzo_short_order}}</button>']
min_price_plan|{{min_price_plan_vps_virtuozzo_note}}
max_price_plan|{{max_price_plan_vps_virtuozzo_note}}
plan1|{{plan_vps_virtuozzo_note_1}}
plan2|{{plan_vps_virtuozzo_note_2}}
plan3|{{plan_vps_virtuozzo_note_3}}
plan4|{{plan_vps_virtuozzo_note_4}}
[/rp_plans_short]
  <br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_1}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_2}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_2}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_3}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_3}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_4}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_4}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_5}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_5}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_6}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_6}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_7}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_7}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_8}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_8}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_9}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_9}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_virtuozzo_feature_listing_title_10}}</h3>
      <span>{{vps_virtuozzo_feature_listing_content_10}}</span> </div>
  </div>
  <br clear="all" /><br />
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$vps_virtuozzo_content</div>
		</div>
  
EOD
	),
	'rp_vps_kvm_plans_short'=>array('title' => '{{vps_kvm_plans_short_title}}',
											'type' => 'product', 
											'meta_title' => '{{vps_kvm_plans_short_meta_title}}', 
											'meta_description' => '{{vps_kvm_plans_short_meta_description}}', 
											'meta_keywords' => '{{vps_kvm_plans_short_meta_keywords}}', 
											'menu_title' => '{{vps_kvm_plans_short_menu_title}}', 
											'header_type' => 'vps_kvm', 
											'header_title' => '{{vps_kvm_hosting_header_title}}', 
											'header_content' => <<<EOD
{{vps_kvm_hosting_header_content}}
EOD
,
											'content'=> <<<EOD
	<h1>{{vps_kvm_plans_short_title}}</h1><br />
[rp_plans_short type="vps_kvm_short" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{vps_kvm_short_order}}</button>']
min_price_plan|{{min_price_plan_vps_kvm_note}}
max_price_plan|{{max_price_plan_vps_kvm_note}}
plan1|{{plan_vps_kvm_note_1}}
plan2|{{plan_vps_kvm_note_2}}
plan3|{{plan_vps_kvm_note_3}}
plan4|{{plan_vps_kvm_note_4}}
[/rp_plans_short]
  <br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_1}}</h3>
      <span>{{vps_kvm_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_2}}</h3>
      <span>{{vps_kvm_feature_listing_content_2}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_3}}</h3>
      <span>{{vps_kvm_feature_listing_content_3}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_4}}</h3>
      <span>{{vps_kvm_feature_listing_content_4}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_5}}</h3>
      <span>{{vps_kvm_feature_listing_content_5}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_6}}</h3>
      <span>{{vps_kvm_feature_listing_content_6}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_7}}</h3>
      <span>{{vps_kvm_feature_listing_content_7}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_8}}</h3>
      <span>{{vps_kvm_feature_listing_content_8}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_9}}</h3>
      <span>{{vps_kvm_feature_listing_content_9}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_kvm_feature_listing_title_10}}</h3>
      <span>{{vps_kvm_feature_listing_content_10}}</span> </div>
  </div>
  <br clear="all" /><br />
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$vps_kvm_content</div>
		</div>
  
EOD
	),
	'rp_vps_openvz_plans_short'=>array('title' => '{{vps_openvz_plans_short_title}}',
										  'type' => 'product', 
										  'meta_title' => '{{vps_openvz_plans_short_meta_title}}', 
										  'meta_description' => '{{vps_openvz_plans_short_meta_description}}', 
										  'meta_keywords' => '{{vps_openvz_plans_short_meta_keywords}}', 
										  'menu_title' => '{{vps_openvz_plans_short_menu_title}}', 
										  'header_type' => 'vps_openvz', 
										  'header_title' => '{{vps_openvz_hosting_header_title}}', 
										  'header_content' => <<<EOD
{{vps_openvz_hosting_header_content}}
EOD
,
										  'content'=> <<<EOD
	<h1>{{vps_openvz_plans_short_title}}</h1><br />
[rp_plans_short type="vps_openvz_short" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{vps_openvz_short_order}}</button>']
min_price_plan|{{min_price_plan_vps_openvz_note}}
max_price_plan|{{max_price_plan_vps_openvz_note}}
plan1|{{plan_vps_openvz_note_1}}
plan2|{{plan_vps_openvz_note_2}}
plan3|{{plan_vps_openvz_note_3}}
plan4|{{plan_vps_openvz_note_4}}
[/rp_plans_short]
  <br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_1}}</h3>
      <span>{{vps_openvz_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_2}}</h3>
      <span>{{vps_openvz_feature_listing_content_2}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_3}}</h3>
      <span>{{vps_openvz_feature_listing_content_3}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_4}}</h3>
      <span>{{vps_openvz_feature_listing_content_4}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_5}}</h3>
      <span>{{vps_openvz_feature_listing_content_5}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_6}}</h3>
      <span>{{vps_openvz_feature_listing_content_6}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_7}}</h3>
      <span>{{vps_openvz_feature_listing_content_7}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_8}}</h3>
      <span>{{vps_openvz_feature_listing_content_8}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_9}}</h3>
      <span>{{vps_openvz_feature_listing_content_9}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{vps_openvz_feature_listing_title_10}}</h3>
      <span>{{vps_openvz_feature_listing_content_10}}</span> </div>
  </div>
  <br clear="all" /><br />
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$vps_openvz_content</div>
		</div>
  
EOD
	),
	'rp_semi_dedicated_plans_short'=>array('title' => '{{semi_dedicated_plans_short_title}}',
										  'type' => 'product', 
										  'meta_title' => '{{semi_dedicated_plans_short_meta_title}}', 
										  'meta_description' => '{{semi_dedicated_plans_short_meta_description}}', 
										  'meta_keywords' => '{{semi_dedicated_plans_short_meta_keywords}}', 
										  'menu_title' => '{{semi_dedicated_plans_short_menu_title}}', 
										  'header_type' => 'semi-dedicated', 
										  'header_title' => '{{semi_dedicated_hosting_header_title}}', 
										  'header_content' => <<<EOD
{{semi_dedicated_hosting_header_content}}
EOD
,
										  'content'=> <<<EOD
	<h1>{{semi_dedicated_plans_short_title}}</h1><br />
[rp_plans_short type="semi_dedicated" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{semi_dedicated_short_order}}</button>']
min_price_plan|{{min_price_plan_semi_dedicated_note}}
max_price_plan|{{max_price_plan_semi_dedicated_note}}
plan1|{{plan_semi_dedicated_note_1}}
plan2|{{plan_semi_dedicated_note_2}}
plan3|{{plan_semi_dedicated_note_3}}
plan4|{{plan_semi_dedicated_note_4}}
[/rp_plans_short]
  <br />
  <div class="text-box without-img">
    <div>
      <h3>{{semi_dedicated_feature_listing_title_1}}</h3>
      <span>{{semi_dedicated_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{semi_dedicated_feature_listing_title_2}}</h3>
      <span>{{semi_dedicated_feature_listing_content_2}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{semi_dedicated_feature_listing_title_3}}</h3>
      <span>{{semi_dedicated_feature_listing_content_3}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{semi_dedicated_feature_listing_title_4}}</h3>
      <span>{{semi_dedicated_feature_listing_content_4}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{semi_dedicated_feature_listing_title_5}}</h3>
      <span>{{semi_dedicated_feature_listing_content_5}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{semi_dedicated_feature_listing_title_6}}</h3>
      <span>{{semi_dedicated_feature_listing_content_6}}</span> </div>
  </div>
  <br clear="all" /><br />
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$semi_dedicated_content</div>
		</div>
  
EOD
	),
	'rp_dedicated_plans_short'=>array('title' => '{{dedicated_plans_short_title}}',
									  'type' => 'product', 
									  'meta_title' => '{{dedicated_plans_short_meta_title}}', 
									  'meta_description' => '{{dedicated_plans_short_meta_description}}', 
									  'meta_keywords' => '{{dedicated_plans_short_meta_keywords}}', 
									  'menu_title' => '{{dedicated_plans_short_menu_title}}', 
									  'header_type' => 'dedicated', 
									  'header_title' => '{{dedicated_hosting_header_title}}', 
									  'header_content' => <<<EOD
{{dedicated_hosting_header_content}}
EOD
,
									  'content'=> <<<EOD
	<h1>{{dedicated_plans_short_title}}</h1><br />
[rp_plans_short type="dedicated_horizontal" show_link="1"][/rp_plans_short]
  <br />
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_1}}</h3>
      <span>{{dedicated_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_2}}</h3>
      <span>{{dedicated_feature_listing_content_2}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_3}}</h3>
      <span>{{dedicated_feature_listing_content_3}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_4}}</h3>
      <span>{{dedicated_feature_listing_content_4}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_5}}</h3>
      <span>{{dedicated_feature_listing_content_5}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_6}}</h3>
      <span>{{dedicated_feature_listing_content_6}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_7}}</h3>
      <span>{{dedicated_feature_listing_content_7}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_8}}</h3>
      <span>{{dedicated_feature_listing_content_8}}</span> </div>
  </div>
  <br clear="all" /><br />
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_9}}</h3>
      <span>{{dedicated_feature_listing_content_9}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{dedicated_feature_listing_title_10}}</h3>
      <span>{{dedicated_feature_listing_content_10}}</span> </div>
  </div>
  <br clear="all" />
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$dedicated_content</div>
		</div>
  
EOD
	),
	'rp_ssl_certificates'=>array('title' => '{{ssl_certificates_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{ssl_certificates_meta_title}}', 
					   'meta_description' => '{{ssl_certificates_meta_description}}', 
					   'meta_keywords' => '{{ssl_certificates_meta_keywords}}',
					   'menu_title' => '{{ssl_certificates_menu_title}}', 
					   'content'=> <<<EOD
[ssl_banner type="ssl_certificate" features_version="{{ssl_certificates_featuresver}}"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{ssl_certificates_title_1}}</h2>
    </center>
    {{ssl_certificates_text_1}}
  </div>
  <br />
  <center>
    <h2>{{ssl_certificates_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{ssl_certificates_text_2}}</div>
  <div class="script-text-col-2">{{ssl_certificates_text_3}}</div>
  <div class="script-text-col-3">{{ssl_certificates_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{ssl_certificates_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_wordpress_hosting'=>array('title' => '{{wordpress_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{wordpress_hosting_meta_title}}', 
					   'meta_description' => '{{wordpress_hosting_meta_description}}', 
					   'meta_keywords' => '{{wordpress_hosting_meta_keywords}}',
					   'menu_title' => '{{wordpress_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="wordpress"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{wordpress_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-wordpress-installation.png" title="{{wordpress_hosting_title_1}}" align="right"]		
	</a>{{wordpress_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{wordpress_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{wordpress_hosting_text_2}}</div>
  <div class="script-text-col-2">{{wordpress_hosting_text_3}}</div>
  <div class="script-text-col-3">{{wordpress_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{wordpress_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_joomla_hosting'=>array('title' => '{{joomla_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{joomla_hosting_meta_title}}', 
					   'meta_description' => '{{joomla_hosting_meta_description}}', 
					   'meta_keywords' => '{{joomla_hosting_meta_keywords}}',
					   'menu_title' => '{{joomla_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="joomla"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{joomla_hosting_title_1}}</h2>
	</center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-joomla-installation.png" title="{{joomla_hosting_title_1}}" align="right"]		
	</a>{{joomla_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{joomla_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{joomla_hosting_text_2}}</div>
  <div class="script-text-col-2">{{joomla_hosting_text_3}}</div>
  <div class="script-text-col-3">{{joomla_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{joomla_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_drupal_hosting'=>array('title' => '{{drupal_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{drupal_hosting_meta_title}}', 
					   'meta_description' => '{{drupal_hosting_meta_description}}', 
					   'meta_keywords' => '{{drupal_hosting_meta_keywords}}',
					   'menu_title' => '{{drupal_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="drupal"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{drupal_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-drupal-installation.png" title="{{drupal_hosting_title_1}}" align="right"]		
	</a>{{drupal_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{drupal_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{drupal_hosting_text_2}}</div>
  <div class="script-text-col-2">{{drupal_hosting_text_3}}</div>
  <div class="script-text-col-3">{{drupal_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{drupal_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_moodle_hosting'=>array('title' => '{{moodle_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{moodle_hosting_meta_title}}', 
					   'meta_description' => '{{moodle_hosting_meta_description}}', 
					   'meta_keywords' => '{{moodle_hosting_meta_keywords}}',
					   'menu_title' => '{{moodle_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="moodle"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{moodle_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-moodle-installation.png" title="{{moodle_hosting_title_1}}" align="right"]		
	</a>{{moodle_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{moodle_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{moodle_hosting_text_2}}</div>
  <div class="script-text-col-2">{{moodle_hosting_text_3}}</div>
  <div class="script-text-col-3">{{moodle_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{moodle_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_openrealty_hosting'=>array('title' => '{{openrealty_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{openrealty_hosting_meta_title}}', 
					   'meta_description' => '{{openrealty_hosting_meta_description}}', 
					   'meta_keywords' => '{{openrealty_hosting_meta_keywords}}',
					   'menu_title' => '{{openrealty_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="open-realty"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{openrealty_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">
		
			<img src="$template_url/images/script-hosting/1-click-open-realty-installation.png" title="{{openrealty_hosting_title_1}}" align="right"]		
	</a>{{openrealty_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{openrealty_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{openrealty_hosting_text_2}}</div>
  <div class="script-text-col-2">{{openrealty_hosting_text_3}}</div>
  <div class="script-text-col-3">{{openrealty_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{openrealty_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_opencart_hosting'=>array('title' => '{{opencart_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{opencart_hosting_meta_title}}', 
					   'meta_description' => '{{opencart_hosting_meta_description}}', 
					   'meta_keywords' => '{{opencart_hosting_meta_keywords}}',
					   'menu_title' => '{{opencart_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="opencart"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{opencart_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-opencart-installation.png" title="{{opencart_hosting_title_1}}" align="right"]		
	</a>{{opencart_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{opencart_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{opencart_hosting_text_2}}</div>
  <div class="script-text-col-2">{{opencart_hosting_text_3}}</div>
  <div class="script-text-col-3">{{opencart_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{opencart_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_phpbb_hosting'=>array('title' => '{{phpbb_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{phpbb_hosting_meta_title}}', 
					   'meta_description' => '{{phpbb_hosting_meta_description}}', 
					   'meta_keywords' => '{{phpbb_hosting_meta_keywords}}',
					   'menu_title' => '{{phpbb_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="phpbb"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{phpbb_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-phpbb-installation.png" title="{{phpbb_hosting_title_1}}" align="right"]		
	</a>{{phpbb_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{phpbb_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{phpbb_hosting_text_2}}</div>
  <div class="script-text-col-2">{{phpbb_hosting_text_3}}</div>
  <div class="script-text-col-3">{{phpbb_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{phpbb_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_prestashop_hosting'=>array('title' => '{{prestashop_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{prestashop_hosting_meta_title}}', 
					   'meta_description' => '{{prestashop_hosting_meta_description}}', 
					   'meta_keywords' => '{{prestashop_hosting_meta_keywords}}',
					   'menu_title' => '{{prestashop_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="prestashop"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{prestashop_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-prestashop-installation.png" title="{{prestashop_hosting_title_1}}" align="right"]		
	</a>{{prestashop_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{prestashop_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{prestashop_hosting_text_2}}</div>
  <div class="script-text-col-2">{{prestashop_hosting_text_3}}</div>
  <div class="script-text-col-3">{{prestashop_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{prestashop_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_vtiger_hosting'=>array('title' => '{{vtiger_hosting_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{vtiger_hosting_meta_title}}', 
					   'meta_description' => '{{vtiger_hosting_meta_description}}', 
					   'meta_keywords' => '{{vtiger_hosting_meta_keywords}}',
					   'menu_title' => '{{vtiger_hosting_menu_title}}', 
					   'content'=> <<<EOD
[script_hosting_banner type="vtiger"]
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
    <center>
      <h2>{{vtiger_hosting_title_1}}</h2>
    </center>
	<a href="[rp_page_link key='rp_order_form']">[webp img="script-hosting/1-click-vtiger-installation.png" title="{{vtiger_hosting_title_1}}" align="right"]		
	</a>{{vtiger_hosting_text_1}}
  </div>
  <br />
  <center>
    <h2>{{vtiger_hosting_title_2}}</h2>
  </center>
  <div class="script-text-col-1">{{vtiger_hosting_text_2}}</div>
  <div class="script-text-col-2">{{vtiger_hosting_text_3}}</div>
  <div class="script-text-col-3">{{vtiger_hosting_text_4}}</div>
  <br clear="all" />
  <br />
  <center>
    <h2>{{vtiger_hosting_title_3}}</h2>
  </center>
  [rp_plans_short type="shared" best="1" button='<button type="submit" class="rpwp-button colorize"><span class="gloss"></span>{{shared_short_order}}</button>']
min_price_plan|{{min_price_plan_shared_note}}
max_price_plan|{{max_price_plan_shared_note}}
plan1|{{plan_shared_note_1}}
plan2|{{plan_shared_note_2}}
plan3|{{plan_shared_note_3}}
plan4|{{plan_shared_note_4}}
[/rp_plans_short]
  
       <div style='display:none'>
			<div id='compare_overlay' style='padding:10px; background:#fff;'>$shared_content</div>
		</div>
  <br clear="all" />
EOD
	),
	'rp_domain_names_1'=>array('title' => '{{domain_names_title}}',
								'type' => 'product', 
								'page_template' => 'special_page.php', 
								'meta_title' => '{{domain_names_meta_title}}', 
								'meta_description' => '{{domain_names_meta_description}}', 
								'meta_keywords' => '{{domain_names_meta_keywords}}', 
							    'menu_title' => '{{domain_names_menu_title}}', 
								'header_type' => 'domains', 
								'header_title' => '{{domain_names_header_title}}', 
								'header_content' => <<<EOD
{{domain_names_header_content}}
EOD
,
								'content'=> <<<EOD
[domain_search_box variant="7"]
[rp_domain_results]
<h2>Domain Results</h2>
[/rp_domain_results]
<h2>Domain Names: Domain Pricing</h2>
<div id="domain-tables">[rp_domain_tabs]</div>
EOD
	),
	'rp_domain_names_2'=>array('title' => '{{domain_names_2_title}}',
								'type' => 'product', 
								'page_template' => 'internal_page_with_sidebar.php', 
								'meta_title' => '{{domain_names_2_meta_title}}', 
								'meta_description' => '{{domain_names_2_meta_description}}', 
								'meta_keywords' => '{{domain_names_2_meta_keywords}}', 
							    'menu_title' => '{{domain_names_2_menu_title}}', 
								'content'=> <<<EOD
  <div id="domain-content-main">
  	<h1>{{domain_names_2_title}}</h1>
	[domain_search_box variant="6"]
[rp_domain_results]
<h2>Domain Results</h2>
[/rp_domain_results]
    <br />
    {{domain_names_2_content}}
  </div>
  <div id="domain-sidebar">[domain_extensions_table]</div>
  <br clear="all" />

EOD
	),
	'rp_domain_names_3'=>array('title' => '{{domain_names_3_title}}',
								'type' => 'product', 
								'page_template' => 'internal_page_with_sidebar.php', 
								'meta_title' => '{{domain_names_3_meta_title}}', 
								'meta_description' => '{{domain_names_3_meta_description}}', 
								'meta_keywords' => '{{domain_names_3_meta_keywords}}', 
							    'menu_title' => '{{domain_names_3_menu_title}}', 
								'content'=> <<<EOD
  <div id="domain-content-main">
  	<h1>{{domain_names_3_title}}</h1>
	[domain_search_box variant="6"]
[rp_domain_results]<br />
<h2>Domain Results</h2>
[/rp_domain_results]
    <br />
{{domain_names_3_content}}
  </div>
  <div id="domain-sidebar">[domain_extensions_accordion]</div>
  <br clear="all" />
EOD
	),
	'rp_domain_names_4'=>array('title' => '{{domain_names_4_title}}',
								'type' => 'product', 
								'page_template' => 'internal_page_with_sidebar.php', 
								'meta_title' => '{{domain_names_4_meta_title}}', 
								'meta_description' => '{{domain_names_4_meta_description}}', 
								'meta_keywords' => '{{domain_names_4_meta_keywords}}', 
							    'menu_title' => '{{domain_names_4_menu_title}}', 
								'content'=> <<<EOD
  <div id="domain-content-main">
  	<h1>{{domain_names_4_title}}</h1>
	[domain_search_box variant="6"]
	[rp_domain_results]<br />
	<h2>Domain Results</h2>
	[/rp_domain_results]
    <br />
{{domain_names_4_content}}
<h2>Free Bonuses with Hepsia Control Panel</h2>
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_1}}</h3>
      <span>{{shared_feature_listing_content_1}}</span> </div>
  </div>
  <div class="text-box without-img">
    <div>
      <h3>{{shared_feature_listing_title_2}}</h3>
      <span>{{shared_feature_listing_content_2}}</span> </div>
  </div>

  </div>
  <div id="domain-sidebar">[domain_extensions_accordion]</div>
  <br clear="all" />
EOD
	),
	'rp_domain_names_5'=>array('title' => '{{domain_names_5_title}}',
								'type' => 'product', 
								'page_template' => 'internal_page_with_sidebar.php', 
								'meta_title' => '{{domain_names_5_meta_title}}', 
								'meta_description' => '{{domain_names_5_meta_description}}', 
								'meta_keywords' => '{{domain_names_5_meta_keywords}}', 
							    'menu_title' => '{{domain_names_5_menu_title}}', 
								'content'=> <<<EOD
  <div id="domain-content-main">
  	<h1>{{domain_names_5_title}}</h1>
	[domain_search_box variant="6"]
	[rp_domain_results]<br />
	<h2>Domain Results</h2>
	[/rp_domain_results]
    <br />
{{domain_names_5_content}}
  </div>
  <div id="domain-sidebar">[domain_extensions_accordion active="1"]</div>
  <br clear="all" />
EOD
	),
	'rp_domain_names_6'=>array('title' => '{{domain_names_6_title}}',
								'type' => 'product', 
								'page_template' => 'internal_page_with_sidebar.php', 
								'meta_title' => '{{domain_names_6_meta_title}}', 
								'meta_description' => '{{domain_names_6_meta_description}}', 
								'meta_keywords' => '{{domain_names_6_meta_keywords}}', 
							    'menu_title' => '{{domain_names_6_menu_title}}', 
								'content'=> <<<EOD
  <div id="domain-content-main">
  	<h1>{{domain_names_6_title}}</h1>
	[domain_search_box variant="6"]
	[rp_domain_results]<br />
	<h2>Domain Results</h2>
	[/rp_domain_results]
    <br />
{{domain_names_6_content}}

  </div>
  <div id="domain-sidebar">[domain_extensions_accordion active="2"]</div>
  <br clear="all" />
EOD
	),
	'rp_domain_names_sole'=>array('title' => '{{domain_names_sole_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_sole_meta_title}}', 
								  'meta_description' => '{{domain_names_sole_meta_description}}', 
								  'meta_keywords' => '{{domain_names_sole_meta_keywords}}', 
							      'menu_title' => '{{domain_names_sole_menu_title}}', 
								  'content'=> <<<EOD
[domain_names_sole_banner tld="co.uk"]
[domain_search_box variant="4"]
<h2>Domain Pricing: Domain Name with Hosting</h2>
<div id="domain-tables">[rp_domain_tabs_sole type='domain_name_hosting']</div>
EOD
	),
	'rp_domain_names_hosting'=>array('title' => '{{domain_names_hosting_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_hosting_meta_title}}', 
								  'meta_description' => '{{domain_names_hosting_meta_description}}', 
								  'meta_keywords' => '{{domain_names_hosting_meta_keywords}}', 
							      'menu_title' => '{{domain_names_hosting_menu_title}}', 
								  'content'=> <<<EOD
[domain_names_hosting_banner]
[domain_search_box variant="4"]
<h2>Domain Pricing: Domain Name with Hosting</h2>
<div id="domain-tables">[rp_domain_tabs_sole type='domain_name_hosting']</div>
EOD
	),
	'rp_domain_names_only'=>array('title' => '{{domain_names_only_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_only_meta_title}}', 
								  'meta_description' => '{{domain_names_only_meta_description}}', 
								  'meta_keywords' => '{{domain_names_only_meta_keywords}}', 
							      'menu_title' => '{{domain_names_only_menu_title}}', 
								  'content'=> <<<EOD
[domain_names_only_banner]
[domain_search_box variant="5"]
<h2>Domain Pricing: Domain Name Only</h2>
<div id="domain-tables">[rp_domain_tabs_sole type='domain_name_only']</div>
EOD
	),
	'rp_domain_names_tld_info'=>array('title' => '{{domain_names_tld_info_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_tld_info_meta_title}}', 
								  'meta_description' => '{{domain_names_tld_info_meta_description}}', 
								  'meta_keywords' => '{{domain_names_tld_info_meta_keywords}}', 
							      'menu_title' => '{{domain_names_tld_info_menu_title}}', 
								  'content'=> <<<EOD
[domain_names_only_banner]
[domain_search_box variant="5"]
<h2>Domain Names: TLD Details</h2>
<div id="domain-tables">[rp_domain_tabs_sole type='domain_names_tld_info']</div>
EOD
	),
	'rp_domain_names_com'=>array('title' => '{{domain_names_com_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_com_meta_title}}', 
								  'meta_description' => '{{domain_names_com_meta_description}}', 
								  'meta_keywords' => '{{domain_names_com_meta_keywords}}', 
							      'menu_title' => '{{domain_names_com_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains', 
								  'content'=> <<<EOD
[domain_names_sole_banner tld="com" variant="2"]
[domain_search_box variant="4" tld="com"]
<div id="domain-content-main">
<h1>{{domain_names_com_h1}}</h1>
{{domain_names_com_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="com"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_net'=>array('title' => '{{domain_names_net_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_net_meta_title}}', 
								  'meta_description' => '{{domain_names_net_meta_description}}', 
								  'meta_keywords' => '{{domain_names_net_meta_keywords}}', 
							      'menu_title' => '{{domain_names_net_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="net" variant="2"]
[domain_search_box variant="4" tld="net"]
<div id="domain-content-main">
<h1>{{domain_names_net_h1}}</h1>
{{domain_names_net_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="net"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_org'=>array('title' => '{{domain_names_org_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_org_meta_title}}', 
								  'meta_description' => '{{domain_names_org_meta_description}}', 
								  'meta_keywords' => '{{domain_names_org_meta_keywords}}', 
							      'menu_title' => '{{domain_names_org_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="org" variant="2"]
[domain_search_box variant="4" tld="org"]
<div id="domain-content-main">
<h1>{{domain_names_org_h1}}</h1>
{{domain_names_org_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="org"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_info'=>array('title' => '{{domain_names_info_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_info_meta_title}}', 
								  'meta_description' => '{{domain_names_info_meta_description}}', 
								  'meta_keywords' => '{{domain_names_info_meta_keywords}}', 
							      'menu_title' => '{{domain_names_info_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="info" variant="2"]
[domain_search_box variant="4" tld="info"]
<div id="domain-content-main">
<h1>{{domain_names_info_h1}}</h1>
{{domain_names_info_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="info"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_biz'=>array('title' => '{{domain_names_biz_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_biz_meta_title}}', 
								  'meta_description' => '{{domain_names_biz_meta_description}}', 
								  'meta_keywords' => '{{domain_names_biz_meta_keywords}}', 
							      'menu_title' => '{{domain_names_biz_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="biz" variant="2"]
[domain_search_box variant="4" tld="biz"]
<div id="domain-content-main">
<h1>{{domain_names_biz_h1}}</h1>
{{domain_names_biz_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="biz"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_name'=>array('title' => '{{domain_names_name_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_name_meta_title}}', 
								  'meta_description' => '{{domain_names_name_meta_description}}', 
								  'meta_keywords' => '{{domain_names_name_meta_keywords}}', 
							      'menu_title' => '{{domain_names_name_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="name" variant="2"]
[domain_search_box variant="4" tld="name"]
<div id="domain-content-main">
<h1>{{domain_names_name_h1}}</h1>
{{domain_names_name_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="name"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_mobi'=>array('title' => '{{domain_names_mobi_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_mobi_meta_title}}', 
								  'meta_description' => '{{domain_names_mobi_meta_description}}', 
								  'meta_keywords' => '{{domain_names_mobi_meta_keywords}}', 
							      'menu_title' => '{{domain_names_mobi_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="mobi" variant="2"]
[domain_search_box variant="4" tld="mobi"]
<div id="domain-content-main">
<h1>{{domain_names_mobi_h1}}</h1>
{{domain_names_mobi_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="mobi"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_pro'=>array('title' => '{{domain_names_pro_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_pro_meta_title}}', 
								  'meta_description' => '{{domain_names_pro_meta_description}}', 
								  'meta_keywords' => '{{domain_names_pro_meta_keywords}}', 
							      'menu_title' => '{{domain_names_pro_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="pro" variant="2"]
[domain_search_box variant="4" tld="pro"]
<div id="domain-content-main">
<h1>{{domain_names_pro_h1}}</h1>
{{domain_names_pro_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="pro"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_us'=>array('title' => '{{domain_names_us_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_us_meta_title}}', 
								  'meta_description' => '{{domain_names_us_meta_description}}', 
								  'meta_keywords' => '{{domain_names_us_meta_keywords}}', 
							      'menu_title' => '{{domain_names_us_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="us" variant="2"]
[domain_search_box variant="4" tld="us"]
<div id="domain-content-main">
<h1>{{domain_names_us_h1}}</h1>
{{domain_names_us_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="us"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_de'=>array('title' => '{{domain_names_de_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_de_meta_title}}', 
								  'meta_description' => '{{domain_names_de_meta_description}}', 
								  'meta_keywords' => '{{domain_names_de_meta_keywords}}', 
							      'menu_title' => '{{domain_names_de_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="de" variant="2"]
[domain_search_box variant="4" tld="de"]
<div id="domain-content-main">
<h1>{{domain_names_de_h1}}</h1>
{{domain_names_de_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="de"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_ru'=>array('title' => '{{domain_names_ru_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_ru_meta_title}}', 
								  'meta_description' => '{{domain_names_ru_meta_description}}', 
								  'meta_keywords' => '{{domain_names_ru_meta_keywords}}', 
							      'menu_title' => '{{domain_names_ru_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="ru" variant="2"]
[domain_search_box variant="4" tld="ru"]
<div id="domain-content-main">
<h1>{{domain_names_ru_h1}}</h1>
{{domain_names_ru_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="ru"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_eu'=>array('title' => '{{domain_names_eu_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_eu_meta_title}}', 
								  'meta_description' => '{{domain_names_eu_meta_description}}', 
								  'meta_keywords' => '{{domain_names_eu_meta_keywords}}', 
							      'menu_title' => '{{domain_names_eu_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="eu" variant="2"]
[domain_search_box variant="4" tld="eu"]
<div id="domain-content-main">
<h1>{{domain_names_eu_h1}}</h1>
{{domain_names_eu_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="eu"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_co.uk'=>array('title' => '{{domain_names_co_uk_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_co_uk_meta_title}}', 
								  'meta_description' => '{{domain_names_co_uk_meta_description}}', 
								  'meta_keywords' => '{{domain_names_co_uk_meta_keywords}}', 
							      'menu_title' => '{{domain_names_co_uk_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="co.uk" variant="2"]
[domain_search_box variant="4" tld="co.uk"]
<div id="domain-content-main">
<h1>{{domain_names_co_uk_h1}}</h1>
{{domain_names_co_uk_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="co.uk"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_me.uk'=>array('title' => '{{domain_names_me_uk_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_me_uk_meta_title}}', 
								  'meta_description' => '{{domain_names_me_uk_meta_description}}', 
								  'meta_keywords' => '{{domain_names_me_uk_meta_keywords}}', 
							      'menu_title' => '{{domain_names_me_uk_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="me.uk" variant="2"]
[domain_search_box variant="4" tld="me.uk"]
<div id="domain-content-main">
<h1>{{domain_names_me_uk_h1}}</h1>
{{domain_names_me_uk_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="me.uk"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_org.uk'=>array('title' => '{{domain_names_org_uk_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_org_uk_meta_title}}', 
								  'meta_description' => '{{domain_names_org_uk_meta_description}}', 
								  'meta_keywords' => '{{domain_names_org_uk_meta_keywords}}', 
							      'menu_title' => '{{domain_names_org_uk_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="org.uk" variant="2"]
[domain_search_box variant="4" tld="org.uk"]
<div id="domain-content-main">
<h1>{{domain_names_org_uk_h1}}</h1>
{{domain_names_org_uk_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="org.uk"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_ca'=>array('title' => '{{domain_names_ca_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_ca_meta_title}}', 
								  'meta_description' => '{{domain_names_ca_meta_description}}', 
								  'meta_keywords' => '{{domain_names_ca_meta_keywords}}', 
							      'menu_title' => '{{domain_names_ca_menu_title}}', 
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="ca" variant="2"]
[domain_search_box variant="4" tld="ca"]
<div id="domain-content-main">
<h1>{{domain_names_ca_h1}}</h1>
{{domain_names_ca_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="ca"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_asia'=>array('title' => '{{domain_names_asia_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_asia_meta_title}}', 
								  'meta_description' => '{{domain_names_asia_meta_description}}', 
								  'meta_keywords' => '{{domain_names_asia_meta_keywords}}',
							      'menu_title' => '{{domain_names_asia_menu_title}}',  
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="asia" variant="2"]
[domain_search_box variant="4" tld="asia"]
<div id="domain-content-main">
<h1>{{domain_names_asia_h1}}</h1>
{{domain_names_asia_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="asia"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_com.au'=>array('title' => '{{domain_names_com_au_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_com_au_meta_title}}', 
								  'meta_description' => '{{domain_names_com_au_meta_description}}', 
								  'meta_keywords' => '{{domain_names_com_au_meta_keywords}}', 
							      'menu_title' => '{{domain_names_com_au_menu_title}}',  
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="com.au" variant="2"]
[domain_search_box variant="4" tld="com.au"]
<div id="domain-content-main">
<h1>{{domain_names_com_au_h1}}</h1>
{{domain_names_com_au_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="com.au"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_net.au'=>array('title' => '{{domain_names_net_au_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_net_au_meta_title}}', 
								  'meta_description' => '{{domain_names_net_au_meta_description}}', 
								  'meta_keywords' => '{{domain_names_net_au_meta_keywords}}', 
							      'menu_title' => '{{domain_names_net_au_menu_title}}',
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="net.au" variant="2"]
[domain_search_box variant="4" tld="net.au"]
<div id="domain-content-main">
<h1>{{domain_names_net_au_h1}}</h1>
{{domain_names_net_au_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="net.au"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_co.nz'=>array('title' => '{{domain_names_co_nz_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_co_nz_meta_title}}', 
								  'meta_description' => '{{domain_names_co_nz_meta_description}}', 
								  'meta_keywords' => '{{domain_names_co_nz_meta_keywords}}', 
							      'menu_title' => '{{domain_names_co_nz_menu_title}}',
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="co.nz" variant="2"]
[domain_search_box variant="4" tld="co.nz"]
<div id="domain-content-main">
<h1>{{domain_names_co_nz_h1}}</h1>
{{domain_names_co_nz_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="co.nz"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_net.nz'=>array('title' => '{{domain_names_net_nz_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_net_nz_meta_title}}', 
								  'meta_description' => '{{domain_names_net_nz_meta_description}}', 
								  'meta_keywords' => '{{domain_names_net_nz_meta_keywords}}', 
							      'menu_title' => '{{domain_names_net_nz_menu_title}}',
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="net.nz" variant="2"]
[domain_search_box variant="4" tld="net.nz"]
<div id="domain-content-main">
<h1>{{domain_names_net_nz_h1}}</h1>
{{domain_names_net_nz_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="net.nz"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_org.nz'=>array('title' => '{{domain_names_org_nz_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_org_nz_meta_title}}', 
								  'meta_description' => '{{domain_names_org_nz_meta_description}}', 
								  'meta_keywords' => '{{domain_names_org_nz_meta_keywords}}', 
							      'menu_title' => '{{domain_names_org_nz_menu_title}}',
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="org.nz" variant="2"]
[domain_search_box variant="4" tld="org.nz"]
<div id="domain-content-main">
<h1>{{domain_names_org_nz_h1}}</h1>
{{domain_names_org_nz_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="org.nz"]</div> 
  <br clear="all" />
EOD
	),
	'rp_domain_names_co.za'=>array('title' => '{{domain_names_co_za_title}}', 
								  'type' => 'product', 
								  'meta_title' => '{{domain_names_co_za_meta_title}}', 
								  'meta_description' => '{{domain_names_co_za_meta_description}}', 
								  'meta_keywords' => '{{domain_names_co_za_meta_keywords}}', 
							      'menu_title' => '{{domain_names_co_za_menu_title}}',
								  'parent' => 'default_page_domains',
								  'post_parent' => 'default_page_domains',
								  'content'=> <<<EOD
[domain_names_sole_banner tld="co.za" variant="2"]
[domain_search_box variant="4" tld="co.za"]
<div id="domain-content-main">
<h1>{{domain_names_co_za_h1}}</h1>
{{domain_names_co_za_text}}
</div>
<div id="domain-sidebar">[domain_prices_box tld="co.za"]</div> 
  <br clear="all" />
EOD
	),
	'rp_whois_id_protection'=>array('title' => '{{whois_id_protection_title}}', 
					   'type' => 'product', 
					   'meta_title' => '{{whois_id_protection_meta_title}}', 
					   'meta_description' => '{{whois_id_protection_meta_description}}', 
					   'meta_keywords' => '{{whois_id_protection_meta_keywords}}',
					   'menu_title' => '{{whois_id_protection_menu_title}}',
					   'parent' => 'default_page_domains',
					   'post_parent' => 'default_page_domains',
					   'content'=> <<<EOD
<div id="whois_id_protection_banner"><h3>{{whois_id_protection_banner_title}}</h3></div>
[domain_search_box variant="4"]
	<div class="line-height-10px"></div>
  <div class="script-main-text">
	<h2>{{whois_id_protection_title}}</h2>
    {{whois_id_protection_text}}
  </div>
  <br />
  <h2>Domain Names: Domain Pricing</h2>
<div id="domain-tables">[rp_domain_tabs id_protect="1"]</div>
  <br clear="all" />
EOD
	),
	'rp_customer_support'=>array('title' => '{{customer_support_title}}',
						  'meta_title' => '{{customer_support_meta_title}}', 
						  'meta_description' => '{{customer_support_meta_description}}', 
						  'meta_keywords' => '{{customer_support_meta_keywords}}', 
						  'menu_title' => '{{customer_support_menu_title}}',
						  'page_template' => 'internal_page_1.php', 
						  'content'=> <<<EOD
  <div id="aboutus-content-main">
    <h1>{{customer_support_title}}</h1><br />
    <div id="cs_context_help_areas"><h2>{{customer_support_context_help_title}}</h2>{{customer_support_context_help_text}}</div>
    <div id="cs_video_tutorials"><h2>{{customer_support_video_tutorials_title}}</h2>{{customer_support_video_tutorials_text}}</div>
    <div id="cs_faq"><h2>{{customer_support_faq_title}}</h2>{{customer_support_faq_text}}</div>
    <div id="cs_ticketing_system"><h2>{{customer_support_ticketing_system_title}}</h2>{{customer_support_ticketing_system_text}}</div>
   </div>
  <div id="aboutus-sidebar">
  <h3>Contact Details</h3>
    US Toll Free Phone: <strong>[store_phones number="us_toll_free"]</strong><br />
	US International: <strong>[store_phones number="us_international"]</strong><br />
	UK Phone: <strong>[store_phones number="uk"]</strong><br />
	AU Phone: <strong>[store_phones number="au"]</strong><br />
	OUR ID: <strong>[rp_store_info key='store_id']</strong><br />
	<br />
	<strong>Sales Lines Working Hours:</strong><br />
	Monday to Friday:<br />
	10.00 AM - 06.00 PM GMT/UK<br />
	05.00 AM - 01.00 PM EST/USA<br />
	08.00 PM - 04.00 AM EST/AU<br /><br />
	
	email: <a href="mailto:support@propersupport.com">support@propersupport.com</a><br /><br />
	<a href="[rp_page_link key='rp_contact_us']">Online Contact Form</a><br /><br />
	
	<strong>Check your server status</strong>
	To check the status of your server if you think there is a problem, please go to: <a href="http://www.properstatus.com" target="_blank">www.properstatus.com</a>
   </div> 
  <br clear="all" />
EOD
	),
	'rp_about_us'=>array('title' => '{{aboutus_title}}',
						  'meta_title' => '{{aboutus_meta_title}}', 
						  'meta_description' => '{{aboutus_meta_description}}', 
						  'meta_keywords' => '{{aboutus_meta_keywords}}', 
						  'menu_title' => '{{aboutus_menu_title}}',
						  'page_template' => 'internal_page_1.php', 
						  'content'=> <<<EOD
  <div id="aboutus-content-main">
    <h1>{{aboutus_title}}</h1><br />
    {{aboutus_text}}
   </div>
  <div id="aboutus-sidebar">
  <h3>Contact Details</h3>
    US Toll Free Phone: <strong>[store_phones number="us_toll_free"]</strong><br />
	US International: <strong>[store_phones number="us_international"]</strong><br />
	UK Phone: <strong>[store_phones number="uk"]</strong><br />
	AU Phone: <strong>[store_phones number="au"]</strong><br />
	OUR ID: <strong>[rp_store_info key='store_id']</strong><br />
	<br />
	<strong>Sales Lines Working Hours:</strong><br />
	Monday to Friday:<br />
	10.00 AM - 06.00 PM GMT/UK<br />
	05.00 AM - 01.00 PM EST/USA<br />
	08.00 PM - 04.00 AM EST/AU<br /><br />
	
	<strong>Check your server status</strong>
	To check the status of your server if you think there is a problem, please go to: <a href="http://www.properstatus.com" target="_blank">www.properstatus.com</a>
   </div> 
  <br clear="all" />
EOD
	),
	'rp_contact_us'=>array('title' => '{{contactus_title}}',
							'meta_title' => '{{contactus_meta_title}}',
							'meta_description' => '{{contactus_meta_description}}',
							'meta_keywords' => '{{contactus_meta_keywords}}',
							'menu_title' => '{{contactus_menu_title}}',
							'page_template' => 'contacts_page.php',
							'content'=> <<<EOD
	<div id="aboutus-content-main">
    <h1>{{contactus_title}}</h1><br />
    {{contactus_text}}
	<br />
	[contactus_form]
    
   </div>
  <div id="aboutus-sidebar">
  <h3>Contact Details</h3>
    US Toll Free Phone: <strong>[store_phones number="us_toll_free"]</strong><br />
	US International: <strong>[store_phones number="us_international"]</strong><br />
	UK Phone: <strong>[store_phones number="uk"]</strong><br />
	AU Phone: <strong>[store_phones number="au"]</strong><br />
	OUR ID: <strong>[rp_store_info key='store_id']</strong><br />
	<br />
	<strong>Sales Lines Working Hours:</strong><br />
	Monday to Friday:<br />
	10.00 AM - 06.00 PM GMT/UK<br />
	05.00 AM - 01.00 PM EST/USA<br />
	08.00 PM - 04.00 AM EST/AU<br /><br />
	
	<strong>Check your server status</strong>
	To check the status of your server if you think there is a problem, please go to: <a href="http://www.properstatus.com" target="_blank">www.properstatus.com</a>
   </div> 
  <br clear="all" />
EOD
	),
	'rp_hepsia_cp'=>array('title' => '{{hepsia_cp_title}}',
							'page_template' => 'internal_page_2.php',
							'meta_title' => '{{hepsia_cp_meta_title}}', 
							'meta_description' => '{{hepsia_cp_meta_description}}', 
							'meta_keywords' => '{{hepsia_cp_meta_keywords}}', 
							'menu_title' => '{{hepsia_cp_menu_title}}',
							'content'=> <<<EOD
    <div id="content_header" class="header_hepsia">
      <h1 id="content_title">{{hepsia_cp_header_title}}</h1>
      <div id="content_text" class="text_hepsia">{{hepsia_cp_header_content}}</div>
      <div class="hepsia-top-video">[rp_video type="hepsia_cp"]
	  </div>
    </div>
    <br class="clear" />
    <div id="default_content" class="rpwp_header_left content_vps_openvz">
      <h2>{{hepsia_cp_domain_manager_title}}</h2>
      <p><a href="[rp_page_link key='rp_domain_manager']"><img src="[bloginfo key='template_url']/images/domain-manager-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" /></a>{{hepsia_cp_domain_manager_content}}<br /><br /><span><a href="[rp_store_info key='demo']domains/hosted/?auto_login=true" target="_blank" class="demo-link">{{hepsia_cp_domain_manager_more}}</a> | <a href="#video1" class="inline_video video-link">Play Video</a></span></p>
	  <div style='display:none'><div id='video1' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-Domain-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
      <h2>{{hepsia_cp_file_manager_title}}</h2>
      <p><a href="[rp_page_link key='rp_file_manager']"><img src="[bloginfo key='template_url']/images/file-manager-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" /></a>{{hepsia_cp_file_manager_content}}<br /><br /><span><a href="[rp_store_info key='demo']filemanager/?auto_login=true" target="_blank" class="demo-link">{{hepsia_cp_file_manager_more}}</a> | <a href="#video2" class="inline_video video-link">Play Video</a></span></p>
	  <div style='display:none'><div id='video2' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-File-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
      <h2>{{hepsia_cp_email_manager_title}}</h2>
      <p><a href="[rp_page_link key='rp_email_manager']"><img src="[bloginfo key='template_url']/images/email-manager-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" /></a>{{hepsia_cp_email_manager_content}}<br /><br /><span><a href="[rp_store_info key='demo']mail/?auto_login=true" target="_blank" class="demo-link">{{hepsia_cp_email_manager_more}}</a> | <a href="#video3" class="inline_video video-link">Play Video</a></span></p>
	  <div style='display:none'><div id='video3' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-Email-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
      <h2>{{hepsia_cp_more_features_title}}</h2>
      <p>{{hepsia_cp_more_features_content}}</p>
	  <div class="clear"></div>
	  <p>[services_table_short]</p>
	</div>
EOD
	),
	'rp_stats_manager'=>array('title' => '{{stats_manager_title}}',
							'page_template' => 'internal_page_2.php',
							'meta_title' => '{{stats_manager_meta_title}}', 
							'meta_description' => '{{stats_manager_meta_description}}', 
							'meta_keywords' => '{{stats_manager_meta_keywords}}', 
							'menu_title' => '{{stats_manager_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
    <div id="content_header" class="header_hepsia">
      <h1 id="content_title">{{stats_manager_header_title}}</h1>
      <div id="content_text" class="text_hepsia">{{stats_manager_header_content}}</div>
      <div class="hepsia-top-video">[rp_video type="stats_manager"]
	  </div>
    </div>
    <br class="clear" />
    <div id="default_content" class="rpwp_header_left content_vps_openvz">
      <h2>Server Information</h2>
      <p><img src="[bloginfo key='template_url']/images/server-information-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" />{{stats_manager_server_information_content}}<br /><br /><span><a href="[rp_store_info key='demo']statistics/server-information/?auto_login=true" target="_blank" class="demo-link">See Server Information here</a></span></p>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
      <h2>Access &amp; Error Logs</h2>
      <p><img src="[bloginfo key='template_url']/images/access-error-logs-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" />{{stats_manager_logs_content}}<br /><br /><span><a href="[rp_store_info key='demo']statistics/logs/?auto_login=true" target="_blank" class="demo-link">See Access &amp; Error Logs here</a></span></p>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
      <h2>Traffic Statistics</h2>
      <p><img src="[bloginfo key='template_url']/images/traffic-statistics-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" />{{stats_manager_traffic_statistics_content}}<br /><br /><span><a href="[rp_store_info key='demo']statistics/traffic-stats/?auto_login=true" target="_blank" class="demo-link">See Traffic Statistics here</a></span></p>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
      <h2>CPU Statistics</h2>
      <p><img src="[bloginfo key='template_url']/images/cpu-statistics-thumb.gif" width="319" height="195" align="right" style="border:4px solid #DDDDDD; margin-left:40px;" />{{stats_manager_cpu_statistics_content}}<br /><br /><span><a href="[rp_store_info key='demo']statistics/load-stats/?auto_login=true" target="_blank" class="demo-link">See CPU Statistics here</a></span></p>
	  <br clear="all" />
      <br />
      <div class="line-full-width"></div>
	  <p>[services_table_short]</p>
	</div>
EOD
	),
	'rp_data_centers'=>array('title' => '{{data_centers_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_meta_title}}', 
							'meta_description' => '{{data_centers_meta_description}}', 
							'meta_keywords' => '{{data_centers_meta_keywords}}', 
							'menu_title' => '{{data_centers_menu_title}}',
							'content'=> <<<EOD
<div id="us-dc-banner">
    <h3>USA Data Center</h3>
	{{data_centers_chicago_short_text}}
    <br clear="all" />
  </div>
  [domain_search_box variant="4"]
  
<h1>{{data_centers_title}}</h1><br />

<div id="dc-box" class="left">
    <div id="box-title">
      <h2>Sydney / <span class="box-sub-title">Australia</span></h2>
    </div>
	<div id="box-content">[webp img="au-data-center-img.jpg" title="Australia" width="445" height="109"]
		
	<br />
	{{data_centers_sydney_short_text}}    
    </div>
    <div id="box-bottom">
        <div class="learn-more-link"><a href="[rp_default_page_link key='datacenter_rp_data_centers_sydney']">Learn more</a></div>
      </div>
  </div>

<div id="dc-box" class="right">
  <div id="box-title">
	<h2>UK Servers / <span class="box-sub-title">United Kingdom</span></h2>
  </div>
  <div id="box-content">[webp img="uk-data-center-img.jpg" title="United Kingdom" width="445" height="109"]
		
	<br />
      {{data_centers_berkshire_short_text}}     
    </div>
    <div id="box-bottom">
        <div class="learn-more-link"><a href="[rp_default_page_link key='datacenter_rp_data_centers_berkshire']">Learn more</a></div>
      </div>
</div>

<br clear="all" />
<br clear="all" />

<div id="dc-box" class="left">
    <div id="box-title">
      <h2>Pori / <span class="box-sub-title">Finland</span></h2>
    </div>
	<div id="box-content">[webp img="fi-data-center-img.jpg" title="Finland" width="445" height="109"]
		
	<br />
	{{data_centers_ficolo_short_text}}    
    </div>
    <div id="box-bottom">
        <div class="learn-more-link"><a href="[rp_default_page_link key='datacenter_rp_data_centers_ficolo']">Learn more</a></div>
      </div>
  </div>
<div id="dc-box" class="right">
  <div id="box-title">
	<h2>Sofia / <span class="box-sub-title">Bulgaria</span></h2>
  </div>
  <div id="box-content">[webp img="bg-data-center.jpg" title="Bulgaria" width="445" height="109"]
		
	<br />
	{{data_centers_sofia_short_text}}     
    </div>
    <div id="box-bottom">
        <div class="learn-more-link"><a href="[rp_default_page_link key='datacenter_rp_data_centers_sofia']">Learn more</a></div>
      </div>
</div>
EOD
	),
	'rp_data_centers_steadfast_1'=>array('title' => '{{data_centers_steadfast_1_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_steadfast_1_meta_title}}', 
							'meta_description' => '{{data_centers_steadfast_meta_description}}', 
							'meta_keywords' => '{{data_centers_steadfast_meta_keywords}}', 
							'menu_title' => '{{data_centers_steadfast_1_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{data_centers_steadfast_1_title}}</h1>
  	<p>{{data_centers_steadfast_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <div class="dc-image">[webp img="data-center-usa-colohouse.jpg" title="More Data Centers" width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="colohouse" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans']
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]
  
[dc_plans dc="colohouse" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_openvz_order}}</button>' title='OpenVZ VPS plans']
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="colohouse" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_kvm_order}}</button>' title='KVM VPS plans']
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="colohouse" type="semi_dedicated"]
[rp_plans_short type="semi_dedicated_compare" plans="" best="" title='Semi-Dedicated Plans']
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="colohouse" type="dedicated"]
[rp_plans_short type="dedicated_compare" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_data_centers_ficolo_1'=>array('title' => '{{data_centers_ficolo_1_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_ficolo_1_meta_title}}', 
							'meta_description' => '{{data_centers_ficolo_meta_description}}', 
							'meta_keywords' => '{{data_centers_ficolo_meta_keywords}}', 
							'menu_title' => '{{data_centers_ficolo_1_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{data_centers_ficolo_1_title}}</h1>
  	<p>{{data_centers_ficolo_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <div class="dc-image">[webp img="data-center-finland-ficolo.jpg" title="More Data Centers" width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="ficolo" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="ficolo"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]
  
[dc_plans dc="ficolo" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" dc="ficolo" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_openvz_order}}</button>' title='OpenVZ VPS plans']
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ficolo" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" dc="ficolo" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_kvm_order}}</button>' title='KVM VPS plans']
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ficolo" type="semi_dedicated"]
[rp_plans_short type="semi_dedicated_compare" plans="" best="" title='Semi-Dedicated Plans' dc="ficolo"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ficolo" type="dedicated"]
[rp_plans_short type="dedicated_compare" plans="" best="" dc="ficolo" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_data_centers_sofia_1'=>array('title' => '{{data_centers_sofia_1_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_sofia_1_meta_title}}', 
							'meta_description' => '{{data_centers_sofia_meta_description}}', 
							'meta_keywords' => '{{data_centers_sofia_meta_keywords}}', 
							'menu_title' => '{{data_centers_sofia_1_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{data_centers_sofia_1_title}}</h1>
  	<p>{{data_centers_sofia_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <div class="dc-image">[webp img="data-center-bulgaria-sofia.jpg" title="More Data Centers" width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="s3c" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="s3c"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]
  
[dc_plans dc="s3c" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" dc="s3c" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_openvz_order}}</button>' title='OpenVZ VPS plans']
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="s3c" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" dc="s3c" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{vps_kvm_order}}</button>' title='KVM VPS plans']
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="s3c" type="semi_dedicated" dc="s3c"]
[rp_plans_short type="semi_dedicated_compare" plans="" best="" title='Semi-Dedicated Plans']
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="s3c" type="dedicated"]
[rp_plans_short type="dedicated_compare" plans="" best="" dc="s3c" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_data_centers_sydney_1'=>array('title' => '{{data_centers_sydney_1_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_sydney_1_meta_title}}', 
							'meta_description' => '{{data_centers_sydney_meta_description}}', 
							'meta_keywords' => '{{data_centers_sydney_meta_keywords}}', 
							'menu_title' => '{{data_centers_sydney_1_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{data_centers_sydney_1_title}}</h1>
  	<p>{{data_centers_sydney_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <div class="dc-image">[webp img="data-center-australia.jpg" title="More Data Centers" width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="sydney" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="sis_group"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]
  
[dc_plans dc="sydney" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" dc="sis_group" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='OpenVZ VPS plans']
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="sydney" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" dc="sis_group" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='KVM VPS plans']
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="sydney" type="semi_dedicated"]
[rp_plans_short type="semi_dedicated_compare" plans="" best="" dc="sis_group" title='Semi-Dedicated Plans']
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="sydney" type="dedicated"]
[rp_plans_short type="dedicated_compare" plans="" best="" dc="sis_group" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  							
EOD
	),
	'rp_data_centers_berkshire_1'=>array('title' => '{{data_centers_berkshire_1_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_berkshire_meta_1_title}}', 
							'meta_description' => '{{data_centers_berkshire_meta_description}}', 
							'meta_keywords' => '{{data_centers_berkshire_meta_keywords}}', 
							'menu_title' => '{{data_centers_berkshire_1_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{data_centers_berkshire_1_title}}</h1>
  	<p>{{data_centers_berkshire_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <div class="dc-image">[webp img="data-center-uk.jpg" title="More Data Centers" width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="ukservers" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="london"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]
  
[dc_plans dc="ukservers" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" dc="london" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='OpenVZ VPS plans']
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ukservers" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" dc="london" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='KVM VPS plans']
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ukservers" type="semi_dedicated"]
[rp_plans_short type="semi_dedicated_compare" plans="" best="" dc="london" title='Semi-Dedicated Plans']
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ukservers" type="dedicated"]
[rp_plans_short type="dedicated_compare" plans="" best="" dc="london" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  						
EOD
	),
	'rp_data_centers_steadfast_2'=>array('title' => '{{data_centers_steadfast_2_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_steadfast_2_meta_title}}', 
							'meta_description' => '{{data_centers_steadfast_meta_description}}', 
							'meta_keywords' => '{{data_centers_steadfast_meta_keywords}}', 
							'menu_title' => '{{data_centers_steadfast_2_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="us-dc-banner">
    <h1>{{data_centers_steadfast_2_title}}</h1>
  	<p>{{data_centers_steadfast_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br />
  <div id="dc-plans">[rp_plans_tabs dc="colohouse"]</div>


</div>  				
EOD
	),
	'rp_data_centers_ficolo_2'=>array('title' => '{{data_centers_ficolo_2_title}}',
							'type' => 'datacenter', 
							'meta_title' => '{{data_centers_ficolo_2_meta_title}}', 
							'meta_description' => '{{data_centers_ficolo_meta_description}}', 
							'meta_keywords' => '{{data_centers_ficolo_meta_keywords}}', 
							'menu_title' => '{{data_centers_ficolo_2_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="us-dc-banner">
    <h1>{{data_centers_ficolo_2_title}}</h1>
  	<p>{{data_centers_ficolo_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br />
  <div id="dc-plans">[rp_plans_tabs dc="ficolo"]</div>


</div>  				
EOD
	),
	'rp_data_centers_sofia_2'=>array('title' => '{{data_centers_sofia_2_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_sofia_2_meta_title}}', 
							'meta_description' => '{{data_centers_sofia_meta_description}}', 
							'meta_keywords' => '{{data_centers_sofia_meta_keywords}}', 
							'menu_title' => '{{data_centers_sofia_2_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="us-dc-banner">
    <h1>{{data_centers_sofia_2_title}}</h1>
  	<p>{{data_centers_sofia_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br />
  <div id="dc-plans">[rp_plans_tabs dc="s3c"]</div>


</div>  				
EOD
	),
	'rp_data_centers_sydney_2'=>array('title' => '{{data_centers_sydney_2_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_sydney_2_meta_title}}', 
							'meta_description' => '{{data_centers_sydney_meta_description}}', 
							'meta_keywords' => '{{data_centers_sydney_meta_keywords}}', 
							'menu_title' => '{{data_centers_sydney_2_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="au-dc-banner">
    <h1>{{data_centers_sydney_2_title}}</h1>
  	<p>{{data_centers_sydney_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br />
  <div id="dc-plans">[rp_plans_tabs dc="sydney"]</div>
  

</div>  							
EOD
	),
	'rp_data_centers_berkshire_2'=>array('title' => '{{data_centers_berkshire_2_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{data_centers_berkshire_2_meta_title}}', 
							'meta_description' => '{{data_centers_berkshire_meta_description}}', 
							'meta_keywords' => '{{data_centers_berkshire_meta_keywords}}', 
							'menu_title' => '{{data_centers_berkshire_2_menu_title}}',
							'parent' => 'rp_data_centers', 
							'post_parent' => 'rp_data_centers', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="uk-dc-banner">
    <h1>{{data_centers_berkshire_2_title}}</h1>
  	<p>{{data_centers_berkshire_text}}</p>
  	<div align="right"><a href="[rp_page_link key='rp_data_centers']">More Data Centers</a></div>
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br />
  <div id="dc-plans">[rp_plans_tabs dc="ukservers"]</div>


</div>  						
EOD
	),
	'rp_hosting_us'=>array('title' => '{{hosting_us_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{hosting_us_meta_title}}', 
							'meta_description' => '{{hosting_us_meta_description}}', 
							'meta_keywords' => '{{hosting_us_meta_keywords}}', 
							'menu_title' => '{{hosting_us_menu_title}}',
							'parent' => 'default_page_shared',
							'post_parent' => 'default_page_shared',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{hosting_us_title}}</h1>
  	<p>{{hosting_us_text}}</p>
  </div>
  <div class="dc-image">[webp img="us-hosting.png" title="{{hosting_us_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="colohouse" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="colohouse"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_hosting_uk'=>array('title' => '{{hosting_uk_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{hosting_uk_meta_title}}', 
							'meta_description' => '{{hosting_uk_meta_description}}', 
							'meta_keywords' => '{{hosting_uk_meta_keywords}}', 
							'menu_title' => '{{hosting_uk_menu_title}}',
							'parent' => 'default_page_shared',
							'post_parent' => 'default_page_shared',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{hosting_uk_title}}</h1>
  	<p>{{hosting_uk_text}}</p>
  </div>
  <div class="dc-image">[webp img="uk-hosting.png" title="{{hosting_uk_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="ukservers" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="london"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_hosting_au'=>array('title' => '{{hosting_au_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{hosting_au_meta_title}}', 
							'meta_description' => '{{hosting_au_meta_description}}', 
							'meta_keywords' => '{{hosting_au_meta_keywords}}', 
							'menu_title' => '{{hosting_au_menu_title}}',
							'parent' => 'default_page_shared',
							'post_parent' => 'default_page_shared',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{hosting_au_title}}</h1>
  	<p>{{hosting_au_text}}</p>
  </div>
  <div class="dc-image">[webp img="au-hosting.png" title="{{hosting_au_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="sydney" type="shared"]
[rp_plans_short type="shared_compare" plans="" best="" title='Shared Hosting Plans' dc="sis_group"]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]


</div>  				
EOD
	),
	'rp_vps_hosting_us'=>array('title' => '{{vps_hosting_us_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{vps_hosting_us_meta_title}}', 
							'meta_description' => '{{vps_hosting_us_meta_description}}', 
							'meta_keywords' => '{{vps_hosting_us_meta_keywords}}',
							'menu_title' => '{{vps_hosting_us_menu_title}}',
							'parent' => 'default_page_vps', 
							'post_parent' => 'default_page_vps',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{vps_hosting_us_title}}</h1>
  	<p>{{vps_hosting_us_text}}</p>
  </div>
  <div class="dc-image">[webp img="vps-hosting-usa.png" title="{{vps_hosting_us_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="colohouse" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='OpenVZ VPS plans' dc="colohouse"]
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="colohouse" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='KVM VPS plans' dc="colohouse"]
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_vps_hosting_uk'=>array('title' => '{{vps_hosting_uk_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{vps_hosting_uk_meta_title}}', 
							'meta_description' => '{{vps_hosting_uk_meta_description}}', 
							'meta_keywords' => '{{vps_hosting_uk_meta_keywords}}', 
							'menu_title' => '{{vps_hosting_uk_menu_title}}',
							'parent' => 'default_page_vps', 
							'post_parent' => 'default_page_vps',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{vps_hosting_uk_title}}</h1>
  	<p>{{vps_hosting_uk_text}}</p>
  </div>
  <div class="dc-image">[webp img="vps-hosting-uk.png" title="{{vps_hosting_uk_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="ukservers" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='OpenVZ VPS plans' dc="london"]
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="ukservers" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='KVM VPS plans' dc="london"]
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_vps_hosting_au'=>array('title' => '{{vps_hosting_au_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{vps_hosting_au_meta_title}}', 
							'meta_description' => '{{vps_hosting_au_meta_description}}', 
							'meta_keywords' => '{{vps_hosting_au_meta_keywords}}', 
							'menu_title' => '{{vps_hosting_au_menu_title}}',
							'parent' => 'default_page_vps', 
							'post_parent' => 'default_page_vps',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{vps_hosting_au_title}}</h1>
  	<p>{{vps_hosting_au_text}}</p>
  </div>
  <div class="dc-image">[webp img="vps-hosting-au.png" title="{{vps_hosting_au_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="sydney" type="vps_openvz"]
[rp_plans_short type="vps_openvz" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='OpenVZ VPS plans' dc="sis_group"]
We have more OpenVZ virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

[dc_plans dc="sydney" type="vps_kvm"]
[rp_plans_short type="vps_kvm" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>' title='KVM VPS plans' dc="sis_group"]
We have several KVM virtual servers available - find the one that is right for you.
[/rp_plans_short]
  <br><br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_dedicated_hosting_us'=>array('title' => '{{dedicated_hosting_us_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{dedicated_hosting_us_meta_title}}', 
							'meta_description' => '{{dedicated_hosting_us_meta_description}}', 
							'meta_keywords' => '{{dedicated_hosting_us_meta_keywords}}', 
							'menu_title' => '{{dedicated_hosting_us_menu_title}}',
							'parent' => 'default_page_dedicated', 
							'post_parent' => 'default_page_dedicated',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{dedicated_hosting_us_title}}</h1>
  	<p>{{dedicated_hosting_us_text}}</p>
  </div>
  <div class="dc-image">[webp img="dedicated-hosting-usa.png" title="{{dedicated_hosting_us_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="colohouse" type="dedicated"]
<br>
[rp_plans_short type="dedicated_compare" plans="" best="" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_dedicated_hosting_uk'=>array('title' => '{{dedicated_hosting_uk_title}}',
					   		'type' => 'datacenter', 
							'meta_title' => '{{dedicated_hosting_uk_meta_title}}', 
							'meta_description' => '{{dedicated_hosting_uk_meta_description}}', 
							'meta_keywords' => '{{dedicated_hosting_uk_meta_keywords}}', 
							'menu_title' => '{{dedicated_hosting_uk_menu_title}}',
							'parent' => 'default_page_dedicated', 
							'post_parent' => 'default_page_dedicated',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{dedicated_hosting_uk_title}}</h1>
  	<p>{{dedicated_hosting_uk_text}}</p>
  </div>
  <div class="dc-image">[webp img="dedicated-hosting-uk.png" title="{dedicated_hosting_uk_title}}"  width="351" height="222"]
		
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  
[dc_plans dc="ukservers" type="dedicated"]
<br>
[rp_plans_short type="dedicated_compare" plans="" best="" dc="london" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>{{dedicated_order}}</button>' title='Dedicated Servers']We have more dedicated servers available - find the one that is right for you.[/rp_plans_short]
  <br clear="all">
  <hr class="thin">
[/dc_plans]

</div>  				
EOD
	),
	'rp_whyus_1'=>array('title' => '{{whyus_1_title}}',
							'meta_title' => '{{whyus_1_meta_title}}', 
							'meta_description' => '{{whyus_1_meta_description}}', 
							'meta_keywords' => '{{whyus_1_meta_keywords}}', 
							'menu_title' => '{{whyus_1_menu_title}}',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{whyus_1_title}}</h1>
  	<p>{{whyus_1_text}}</p>
  </div>
  <div class="dc-image">
  	[webp img="why-us.jpg" title="{{whyus_1_title}}" width="351" height="222"]	
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- App -->
  <div class="app-preview-left">
	[webp img="why-us/{{whyus_paragraph_1_img}}-img.jpg" title="{{whyus_paragraph_1_title}}" width="460" height="195"]
  </div>
  <div class="app-text-right">
      <h3>{{whyus_paragraph_1_title}}</h3>  
      <p>{{whyus_paragraph_1_text}}</p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="why-us/{{whyus_paragraph_2_img}}-img.jpg" title="{{whyus_paragraph_2_title}}" width="460" height="195"]
  </div>
  <div class="app-text-left">
      <h3>{{whyus_paragraph_2_title}}</h3>  
      <p>{{whyus_paragraph_2_text}}</p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-left">
	[webp img="why-us/{{whyus_paragraph_3_img}}-img.jpg" title="{{whyus_paragraph_3_title}}" width="460" height="195"]
  </div>
  <div class="app-text-right">
      <h3>{{whyus_paragraph_3_title}}</h3>  
      <p>{{whyus_paragraph_3_text}}</p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="why-us/{{whyus_paragraph_4_img}}-img.jpg" title="{{whyus_paragraph_4_title}}" width="460" height="195"]
  </div>
  <div class="app-text-left">
      <h3>{{whyus_paragraph_4_title}}</h3>  
      <p>{{whyus_paragraph_4_text}}</p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-left">
	[webp img="why-us/{{whyus_paragraph_5_img}}-img.jpg" title="{{whyus_paragraph_5_title}}" width="460" height="195"]
  </div>
  <div class="app-text-right">
      <h3>{{whyus_paragraph_5_title}}</h3>  
      <p>{{whyus_paragraph_5_text}}</p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="why-us/{{whyus_paragraph_6_img}}-img.jpg" title="{{whyus_paragraph_6_title}}" width="460" height="195"]
  </div>
  <div class="app-text-left">
      <h3>{{whyus_paragraph_6_title}}</h3>  
      <p>{{whyus_paragraph_6_text}}</p>
  </div> 
  <div class="clear"></div>
  <br />
</div>
			
EOD
	),
	'rp_whyus_2'=>array('title' => '{{whyus_2_title}}',
							'meta_title' => '{{whyus_2_meta_title}}', 
							'meta_description' => '{{whyus_2_meta_description}}', 
							'meta_keywords' => '{{whyus_2_meta_keywords}}', 
							'menu_title' => '{{whyus_2_menu_title}}',
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{whyus_2_title}}</h1>
  	<p>{{whyus_2_text}}</p>
  </div>
  <div class="dc-image">
	[webp img="why-us.jpg" title="{{whyus_2_title}}" width="351" height="222"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
	<div class="text-box why-us-2 left">
		<div>
            <h3>{{whyus_paragraph_1_title}}</h3>
			<span>		
				[webp img="why-us/{{whyus_paragraph_1_img}}.png" title="{{whyus_paragraph_1_title}}"  width="96" height="96" align="left"]
				{{whyus_paragraph_1_text}}
			</span>
		</div>
    </div>
	<div class="text-box why-us-2 right">
          <div>
            <h3>{{whyus_paragraph_2_title}}</h3>
			<span>
				[webp img="why-us/{{whyus_paragraph_2_img}}.png" title="{{whyus_paragraph_2_title}}"  width="96" height="96" align="left"]
				{{whyus_paragraph_2_text}}
			</span>
		</div>
     </div>
	<div class="text-box why-us-2 left">
          <div>
            <h3>{{whyus_paragraph_3_title}}</h3>
			<span>
				[webp img="why-us/{{whyus_paragraph_3_img}}.png" title="{{whyus_paragraph_3_title}}"  width="96" height="96" align="left"]
				{{whyus_paragraph_3_text}}
			</span>
		</div>
    </div>
	<div class="text-box why-us-2 right">
          <div>
            <h3>{{whyus_paragraph_4_title}}</h3>
			<span>
				[webp img="why-us/{{whyus_paragraph_4_img}}.png" title="{{whyus_paragraph_4_title}}"  width="96" height="96" align="left"]
				{{whyus_paragraph_4_text}}
			</span>
		</div>
     </div>
     <div class="text-box why-us-2 left">
          <div>
            <h3>{{whyus_paragraph_5_title}}</h3>
			<span>
				[webp img="why-us/{{whyus_paragraph_5_img}}.png" title="{{whyus_paragraph_5_title}}"  width="96" height="96" align="left"]
				{{whyus_paragraph_5_text}}
			</span>
		</div>
    </div>
	<div class="text-box why-us-2 right">
          <div>
            <h3>{{whyus_paragraph_6_title}}</h3>
			<span>
				[webp img="why-us/{{whyus_paragraph_6_img}}.png" title="{{whyus_paragraph_6_title}}"  width="96" height="96" align="left"]
				{{whyus_paragraph_6_text}}
			</span>
		</div>
     </div>
  <div class="clear"></div>
  </div>
			
EOD
	),
	'rp_application_installer_1'=>array('title' => '{{application_installer_1_title}}',
							'meta_title' => '{{application_installer_1_meta_title}}', 
							'meta_description' => '{{application_installer_1_meta_description}}', 
							'meta_keywords' => '{{application_installer_1_meta_keywords}}', 
							'menu_title' => '{{application_installer_1_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{application_installer_1_title}}</h1>
  	<p>{{application_installer_1_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']installer/software/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-image">
	[webp img="app-installation-in-1-click.jpg" title="{{application_installer_1_title}}" width="351" height="222"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- App -->
  <div class="app-preview-left">
	[webp img="1-click-app-wordpress.png" title="WordPress" width="460" height="386"]
  </div>
  <div class="app-text-right">
      <h3><a href="[rp_page_link key='rp_wordpress_hosting']">WordPress</a></h3>  
      <p>{{application_installer_wordpress_text}}</p>
      <p><strong><a href="http://www.elefanteinstaller.com/demo/?script=wordpress" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="1-click-app-prestashop.png" title="PrestaShop" width="460" height="386"]
  </div>
  <div class="app-text-left">
      <h3><a href="[rp_page_link key='rp_prestashop_hosting']">PrestaShop</a></h3>  
      <p>{{application_installer_prestashop_text}}</p>
      <p class="tar"><strong><a href="http://www.elefanteinstaller.com/demo/?script=prestashop" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-left">
	[webp img="1-click-app-opencart.png" title="OpenCart" width="460" height="386"]
  </div>
  <div class="app-text-right">
      <h3><a href="[rp_page_link key='rp_opencart_hosting']">OpenCart</a></h3>  
      <p>{{application_installer_opencart_text}}</p>
      <p><strong><a href="http://www.elefanteinstaller.com/demo/?script=opencart" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="1-click-app-joomla.png" title="Joomla!" width="460" height="386"]
  </div>
  <div class="app-text-left">
      <h3><a href="[rp_page_link key='rp_joomla_hosting']">Joomla!</a></h3>  
      <p>{{application_installer_joomla_text}}</p>
      <p class="tar"><strong><a href="http://www.elefanteinstaller.com/demo/?script=joomla17" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-left">
	[webp img="1-click-app-drupal.png" title="Drupal" width="460" height="386"]
  </div>
  <div class="app-text-right">
      <h3><a href="[rp_page_link key='rp_drupal_hosting']">Drupal</a></h3>  
      <p>{{application_installer_drupal_text}}</p>
      <p><strong><a href="http://www.elefanteinstaller.com/demo/?script=drupal" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="1-click-app-moodle.png" title="Moodle" width="460" height="386"]
  </div>
  <div class="app-text-left">
      <h3><a href="[rp_page_link key='rp_moodle_hosting']">Moodle</a></h3>  
      <p>{{application_installer_moodle_text}}</p>
      <p class="tar"><strong><a href="http://www.elefanteinstaller.com/demo/?script=moodle" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-left">
	[webp img="1-click-app-vtiger.png" title="vTiger" width="460" height="386"]
  </div>
  <div class="app-text-right">
      <h3><a href="[rp_page_link key='rp_vtiger_hosting']">vTiger</a></h3>  
      <p>{{application_installer_vtiger_text}}</p>
      <p><strong><a href="http://www.elefanteinstaller.com/demo/?script=vtigercrm" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <br />
  <!-- App -->
  <div class="app-preview-right">
	[webp img="1-click-app-openrealty.png" title="Open-Realty" width="460" height="386"]
  </div>
  <div class="app-text-left">
      <h3><a href="[rp_page_link key='rp_openrealty_hosting']">Open-Realty<sup>&#174;</sup></a></h3>  
      <p>{{application_installer_openrealty_text}}</p>
      <p class="tar"><strong><a href="http://www.elefanteinstaller.com/demo/?script=open-realty" target="_blank">View Demo</a> &nbsp; | &nbsp; <a href="#">Free Installation</a></strong></p>
  </div> 
  <div class="clear"></div>
  <!-- App -->
	  <p>[services_table_short]</p>

</div>

EOD
	),
	'rp_application_installer_2'=>array('title' => '{{application_installer_2_title}}',
							'meta_title' => '{{application_installer_2_meta_title}}', 
							'meta_description' => '{{application_installer_2_meta_description}}', 
							'meta_keywords' => '{{application_installer_2_meta_keywords}}', 
							'menu_title' => '{{application_installer_2_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{application_installer_2_title}}</h1>
  	<p>{{application_installer_2_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']installer/software/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-image">
	[webp img="app-installation-in-1-click.jpg" title="{{application_installer_1_title}}" width="351" height="222"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- Apps line -->
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_wordpress_hosting']">WordPress</a></h3>
	<span>
		[webp img="app-thumb-wordpress.png" title="WordPress" width="174" height="119"]
	</span>
    <p class="app-box-text">{{application_installer_wordpress_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=wordpress" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="app-box-divider">&nbsp;</div>
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_prestashop_hosting']">PrestaShop</a></h3>
	<span>
		[webp img="app-thumb-prestashop.png" title="PrestaShop" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_prestashop_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=prestashop" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="app-box-divider">&nbsp;</div>
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_opencart_hosting']">OpenCart</a></h3>
	<span>
		[webp img="app-thumb-opencart.png" title="OpenCart" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_opencart_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=opencart" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="app-box-divider">&nbsp;</div>
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_joomla_hosting']">Joomla!</a></h3>
	<span>
		[webp img="app-thumb-joomla.png" title="Joomla!" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_joomla_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=joomla17" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="clear">&nbsp;</div>
  <!-- Apps line -->
  <br>
  <!-- Apps line -->
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_drupal_hosting']">Drupal</a></h3>
	<span>
		[webp img="app-thumb-drupal.png" title="Drupal" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_drupal_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=drupal" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="app-box-divider">&nbsp;</div>
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_moodle_hosting']">Moodle</a></h3>
	<span>
		[webp img="app-thumb-moodle.png" title="Moodle" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_moodle_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=moodle" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="app-box-divider">&nbsp;</div>
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_vtiger_hosting']">vTiger</a></h3>
	<span>
		[webp img="app-thumb-vtiger.png" title="vTiger" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_vtiger_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=vtigercrm" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="app-box-divider">&nbsp;</div>
  <div class="app-box-item">
  	<h3><a href="[rp_page_link key='rp_openrealty_hosting']">Open-Realty<sup>&#174;</sup></a></h3>
	<span>
		[webp img="app-thumb-openrealty.png" title="Open-Realty<sup>&#174;</sup>" width="174" height="119"]
	</span>
	<p class="app-box-text">{{application_installer_openrealty_text}}</p>
    <div class="app-box-demo-signup"><a href="http://www.elefanteinstaller.com/demo/?script=open-realty" target="_blank">Demo</a> &nbsp; | &nbsp; <a href="[rp_page_link key='rp_order_form']">Sign Up</a></div>
  </div>
  <div class="clear">&nbsp;</div>
  <!-- Apps line -->
	  <p>[services_table_short]</p>
</div>  

EOD
	),
	'rp_database_manager'=>array('title' => '{{database_manager_title}}',
							'meta_title' => '{{database_manager_meta_title}}', 
							'meta_description' => '{{database_manager_meta_description}}', 
							'meta_keywords' => '{{database_manager_meta_keywords}}', 
							'menu_title' => '{{database_manager_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{database_manager_title}}</h1>
  	<p>{{database_manager_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']mysql/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-video-containter">[rp_video type="database_manager"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- feature -->
  <div class="hepsia-feature">
  		[webp img="easy-interface.jpg" title="{{database_manager_paragraph_1_title}}" width="319" height="195"]
        <h4>{{database_manager_paragraph_1_title}}</h4>
        <p>{{database_manager_paragraph_1_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="simple-db-backup.jpg" title="{{database_manager_paragraph_2_title}}" width="319" height="195"]
        <h4>{{database_manager_paragraph_2_title}}</h4>
        <p>{{database_manager_paragraph_2_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="mysql-pgsql-databases.jpg" title="{{database_manager_paragraph_3_title}}" width="319" height="195"]
        <h4>{{database_manager_paragraph_3_title}}</h4>
        <p>{{database_manager_paragraph_3_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="innodb-support.jpg" title="{{database_manager_paragraph_4_title}}" width="319" height="195"]
        <h4>{{database_manager_paragraph_4_title}}</h4>
        <p>{{database_manager_paragraph_4_text}}</p>
        <br class="clear">
  </div>
  <br>
  <!-- end of features -->
  <div class="line-full-width"></div>
  <h2>{{database_manager_paragraph_5_title}}</h2>
  <p>{{database_manager_paragraph_5_text}}</p>
  <div class="clear"></div>
	  <p>[services_table_short]</p>
</div>

EOD
	),
	'rp_domain_manager'=>array('title' => '{{domain_manager_title}}',
							'meta_title' => '{{domain_manager_meta_title}}', 
							'meta_description' => '{{domain_manager_meta_description}}', 
							'meta_keywords' => '{{domain_manager_meta_keywords}}', 
							'menu_title' => '{{domain_manager_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{domain_manager_title}}</h1>
  	<p>{{domain_manager_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']domains/registered/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-video-containter">[rp_video type="domain_manager"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- feature -->
  <div class="hepsia-feature">
  		[webp img="domain-manager-easy-interface.jpg" title="{{domain_manager_paragraph_1_title}}" width="319" height="195"]
        <h4>{{domain_manager_paragraph_1_title}}</h4>
        <p>{{domain_manager_paragraph_1_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="domain-manager-multi-domain.jpg" title="{{domain_manager_paragraph_2_title}}" width="319" height="195"]
        <h4>{{domain_manager_paragraph_2_title}}</h4>
        <p>{{domain_manager_paragraph_2_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="domain-manager-domain-parking.jpg" title="{{domain_manager_paragraph_3_title}}" width="319" height="195"]
        <h4>{{domain_manager_paragraph_3_title}}</h4>
        <p>{{domain_manager_paragraph_3_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="domain-manager-id-protection.jpg" title="{{domain_manager_paragraph_4_title}}" width="319" height="195"]
        <h4>{{domain_manager_paragraph_4_title}}</h4>
        <p>{{domain_manager_paragraph_4_text}}</p>
        <br class="clear">
  </div>
  <br>
  <!-- end of features -->
  <div class="line-full-width"></div>
  <h2>{{domain_manager_paragraph_5_title}}</h2>
  <p>{{domain_manager_paragraph_5_text}}</p>
  <div class="clear"></div>
	  <p>[services_table_short]</p>
</div>

EOD
	),
	'rp_email_manager'=>array('title' => '{{email_manager_title}}',
							'meta_title' => '{{email_manager_meta_title}}', 
							'meta_description' => '{{email_manager_meta_description}}', 
							'meta_keywords' => '{{email_manager_meta_keywords}}', 
							'menu_title' => '{{email_manager_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{email_manager_title}}</h1>
  	<p>{{email_manager_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']mail/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-video-containter">
   	  [rp_video type="email_manager"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- feature -->
  <div class="hepsia-feature">
  		[webp img="email-manager-easy-interface.jpg" title="{{email_manager_paragraph_1_title}}" width="319" height="195"]
        <h4>{{email_manager_paragraph_1_title}}</h4>
        <p>{{email_manager_paragraph_1_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="email-manager-anti-spam.jpg" title="{{email_manager_paragraph_2_title}}" width="319" height="195"]
        <h4>{{email_manager_paragraph_2_title}}</h4>
        <p>{{email_manager_paragraph_2_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="email-manager-filters.jpg" title="{{email_manager_paragraph_3_title}}" width="319" height="195"]
        <h4>{{email_manager_paragraph_3_title}}</h4>
        <p>{{email_manager_paragraph_3_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="email-manager-forwarding.jpg" title="{{email_manager_paragraph_4_title}}" width="319" height="195"]
        <h4>{{email_manager_paragraph_4_title}}</h4>
        <p>{{email_manager_paragraph_4_text}}</p>
        <br class="clear">
  </div>
  <br>
  <!-- end of features -->
  <div class="line-full-width"></div>
  <h2>{{email_manager_paragraph_5_title}}</h2>
  <p>{{email_manager_paragraph_5_text}}</p>
  <div class="clear"></div>
	  <p>[services_table_short]</p>
</div>

EOD
	),
	'rp_file_manager'=>array('title' => '{{file_manager_title}}',
							'meta_title' => '{{file_manager_meta_title}}', 
							'meta_description' => '{{file_manager_meta_description}}', 
							'meta_keywords' => '{{file_manager_meta_keywords}}', 
							'menu_title' => '{{file_manager_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{file_manager_title}}</h1>
  	<p>{{file_manager_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']filemanager/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-video-containter">[rp_video type="file_manager"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- feature -->
  <div class="hepsia-feature">
  		[webp img="file-manager-easy-interface.jpg" title="{{file_manager_paragraph_1_title}}" width="319" height="195"]
        <h4>{{file_manager_paragraph_1_title}}</h4>
        <p>{{file_manager_paragraph_1_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="file-manager-drag-n-drop.jpg" title="{{file_manager_paragraph_2_title}}" width="319" height="195"]
        <h4>{{file_manager_paragraph_2_title}}</h4>
        <p>{{file_manager_paragraph_2_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="file-manager-archives.jpg" title="{{file_manager_paragraph_3_title}}" width="319" height="195"]
        <h4>{{file_manager_paragraph_3_title}}</h4>
        <p>{{file_manager_paragraph_3_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="file-manager-wysiwyg.jpg" title="{{file_manager_paragraph_4_title}}" width="319" height="195"]
        <h4>{{file_manager_paragraph_4_title}}</h4>
        <p>{{file_manager_paragraph_4_text}}</p>
        <br class="clear">
  </div>
  <br>
  <!-- end of features -->
  <div class="line-full-width"></div>
  <h2>{{file_manager_paragraph_5_title}}</h2>
  <p>{{file_manager_paragraph_5_text}}</p>
  <div class="clear"></div>
	  <p>[services_table_short]</p>
</div>

EOD
	),
	'rp_web_accelerators'=>array('title' => '{{web_accelerators_title}}',
							'meta_title' => '{{web_accelerators_meta_title}}', 
							'meta_description' => '{{web_accelerators_meta_description}}', 
							'meta_keywords' => '{{web_accelerators_meta_keywords}}', 
							'menu_title' => '{{web_accelerators_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{web_accelerators_title}}</h1>
  	<p>{{web_accelerators_text}}</p>
  	<div align="right"><a class="rpwp-button colorize rpwp-btn" href="[rp_store_info key='demo']advanced/varnish/?auto_login=true">VIEW DEMO</a></div>
  </div>
  <div class="dc-video-containter">[rp_video type="web_accelerators"]
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
  <!-- feature -->
  <div class="hepsia-feature">
  		[webp img="web-accelerators-varnish.jpg" title="{{web_accelerators_paragraph_1_title}}" width="319" height="195"]
        <h4>{{web_accelerators_paragraph_1_title}}</h4>
        <p>{{web_accelerators_paragraph_1_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="web-accelerators-memcached.jpg" title="{{web_accelerators_paragraph_2_title}}" width="319" height="195"]
        <h4>{{web_accelerators_paragraph_2_title}}</h4>
        <p>{{web_accelerators_paragraph_2_text}}</p>
        <br class="clear">
  </div>
  <br>
  <div class="hepsia-feature">
  		[webp img="web-accelerators-nodejs.jpg" title="{{web_accelerators_paragraph_3_title}}" width="319" height="195"]
        <h4>{{web_accelerators_paragraph_3_title}}</h4>
        <p>{{web_accelerators_paragraph_3_text}}</p>
        <br class="clear">
  </div>
  <br>
  <!-- end of features -->
  <div class="line-full-width"></div>
  <h2>{{web_accelerators_paragraph_4_title}}</h2>
  <p>{{web_accelerators_paragraph_4_text}}</p>
  <div class="clear"></div>
	  <p>[services_table_short]</p>
</div>

EOD
	),
	'rp_hepsia_vs_cpanel'=>array('title' => '{{hepsia_vs_cpanel_title}}',
							'meta_title' => '{{hepsia_vs_cpanel_meta_title}}', 
							'meta_description' => '{{hepsia_vs_cpanel_meta_description}}', 
							'meta_keywords' => '{{hepsia_vs_cpanel_meta_keywords}}', 
							'menu_title' => '{{hepsia_vs_cpanel_menu_title}}',
							'parent' => 'rp_hepsia_cp',
							'post_parent' => 'rp_hepsia_cp', 
							'content'=> <<<EOD
<div class="dc-header-container">
  <div class="dc-information">
    <h1>{{hepsia_vs_cpanel_title}}</h1>
  	<p>{{hepsia_vs_cpanel_text}}</p>

<p>{{hepsia_vs_cpanel_differences_text}}</p>
  </div>
  <div class="dc-image">
	[webp img="banner-hepsia-vs-cpanel.jpg" title="{{hepsia_vs_cpanel_title}}" width="351" height="222">
  </div>
  <br clear="all" />
  <div class="dc-bottom-line">&nbsp;</div>
  <br>
	<div class="left">
		[webp img="hepsia-logo.png" title="Hepsia" width="250" height="100"]
	</div>
	<div class="right">
		[webp img="cpanel-logo.png" title="cPanel" width="250" height="100"]
	</div>
	<div class="clear"></div>
    <h3 align="center">1. {{hepsia_vs_cpanel_paragraph_1_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-controls.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_1_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_1_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-controls.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_1_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_1_cpanel_text}}</div>
    <div class="clear"></div>
    <h3 align="center">2. {{hepsia_vs_cpanel_paragraph_2_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-file-structure.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_2_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_2_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-file-structure.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_2_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_2_cpanel_text}}</div>
     <div class="clear"></div>
     <h3 align="center">3. {{hepsia_vs_cpanel_paragraph_3_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-file-manager.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_3_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_3_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-file-manager.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_3_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_3_cpanel_text}}</div>
     <div class="clear"></div>
     <h3 align="center">4. {{hepsia_vs_cpanel_paragraph_4_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-free-bonuses.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_4_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_4_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-free-bonuses.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_4_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_4_cpanel_text}}</div>
     <div class="clear"></div>
     <h3 align="center">5. {{hepsia_vs_cpanel_paragraph_5_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-speed.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_5_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_5_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-speed.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_5_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_5_cpanel_text}}</div>
    <div class="clear"></div>
     <h3 align="center">6. {{hepsia_vs_cpanel_paragraph_6_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-mutli-domain.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_6_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_6_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-mutli-domain.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_6_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_6_cpanel_text}}</div>
     <div class="clear"></div>
     <h3 align="center">7. {{hepsia_vs_cpanel_paragraph_7_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-cp.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_7_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_7_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-cp.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_7_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_7_cpanel_text}}</div>
     <div class="clear"></div>
     <h3 align="center">8. {{hepsia_vs_cpanel_paragraph_8_title}}</h3>
	<div class="compare-panels left">[webp img="hepsia-demo.jpg" title="Hepsia - {{hepsia_vs_cpanel_paragraph_8_title}}" width="176" height="129" align="right"]
		
	{{hepsia_vs_cpanel_paragraph_8_hepsia_text}}</div>
	<div class="compare-panels right">[webp img="cpanel-demo.jpg" title="cPanel - {{hepsia_vs_cpanel_paragraph_8_title}}" width="176" height="129" align="left"]
		
	{{hepsia_vs_cpanel_paragraph_8_cpanel_text}}</div>
     <div class="clear"></div>
	 <br />
     <p>{{hepsia_vs_cpanel_bottom_text}}</p>
	  <p>[services_table_short]</p>
  </div>

EOD
	),
	'rp_home_1'=>array('title' => 'Home 1', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD
[home_banner variant="1" plan="1" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']
<div id="home_domain_search1">[domain_search_box variant="1"]</div>
<div id="front_page_content-main">
<div class="home-main-text">
<h1>{{home_main_title_1}}</h1>
<div class="line-height-10px"></div>
{{home_main_1}}
</div>
[home_plan_boxes variant="1" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']
	<div class="text-box cp-box">
      <div><h3>{{home_cp_box_title_1}}</h3>
          <span>{{home_cp_box_text_1}}</span>
          </div>
    </div>
        <div class="text-box app-installer-box">
    <div><h3>{{home_app_installer_box_title_1}}</h3>
          <span>{{home_app_installer_box_text_1}}</span>
          </div>
    </div>
        <div class="text-box free-designs-box">
      <div><h3>{{home_web_designes_box_title_1}}</h3>
          <span>{{home_web_designes_box_text_1}}</span>
          </div>
    </div>
        <div class="text-box support-box">
    <div><h3>{{home_support_box_title_1}}</h3>
          <span>{{home_support_box_text_1}}</span>
          </div>
    </div>
	
</div>
<div id="home-sidebar"><br />
   <div><h3>Want More?</h3><br />
	   [home_sidebar_box type="vps_openvz" variant="1"]
		   {{home_sidebar_vps_openvz_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="vps_kvm" variant="1"]
		   {{home_sidebar_vps_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="semi_dedicated" variant="1"]
		   {{home_sidebar_semi_dedicated_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="dedicated" variant="1"]
		   {{home_sidebar_dedicated_1}}
	   [/home_sidebar_box]
	   <div class="line"></div>
   </div>
   
     <div>
       <h3>Our Clients Are Saying:</h3>
       <br />
       <div class="testimonials">
		$testimonials_content
       </div>
	 </div>
     <div class="line"></div>
</div>
   <div class="clear"></div>

EOD
	),
	'rp_home_2'=>array('title' => 'Home 2', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD
<div id="front_page_content-main">
[home_banner variant="2" plan="1" button='<button type="input" class="rpwp-button get-started"><span class="gloss"></span>{{home_2_banner_order}}</button>']
<div class="home-main-text">
<h1>{{home_main_title_1}}</h1>
<div class="line-height-10px"></div>
{{home_main_1}}
</div>
[home_plan_boxes variant="1" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_2_plans_order}}</button>']
	<div class="text-box cp-box">
      <div><h3>{{home_cp_box_title_1}}</h3>
          <span>{{home_cp_box_text_1}}</span>
          </div>
    </div>
        <div class="text-box app-installer-box">
    <div><h3>{{home_app_installer_box_title_1}}</h3>
          <span>{{home_app_installer_box_text_1}}</span>
          </div>
    </div>
        <div class="text-box free-designs-box">
      <div><h3>{{home_web_designes_box_title_1}}</h3>
          <span>{{home_web_designes_box_text_1}}</span>
          </div>
    </div>
        <div class="text-box support-box">
    <div><h3>{{home_support_box_title_1}}</h3>
          <span>{{home_support_box_text_1}}</span>
          </div>
    </div>
	
</div>
<div id="home-sidebar">
[domain_search_box variant="3"]
   <div><h3>Want More?</h3><br />
	   [home_sidebar_box type="vps_openvz" variant="1"]
		   {{home_sidebar_vps_openvz_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="vps_kvm" variant="1"]
		   {{home_sidebar_vps_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="semi_dedicated" variant="1"]
		   {{home_sidebar_semi_dedicated_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="dedicated" variant="1"]
		   {{home_sidebar_dedicated_1}}
	   [/home_sidebar_box]
	   <div class="line"></div>
   </div>
   
     <div>
       <h3>Our Clients Are Saying:</h3>
       <br />
       <div class="testimonials">
	    $testimonials_content
       </div>
	 </div>
     <div class="line"></div>
</div>
   <div class="clear"></div>

EOD
	),
	'rp_home_3'=>array('title' => 'Home 3', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD
[home_banner variant="1" plan="1" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_3_banner_order}}</button>']
<div id="home_domain_search1">[domain_search_box variant="1"]</div>
<div class="line-height-10px"></div>
    <center>
      <h1>{{home_main_title_1}}</h1>
    </center><br />
	<div class="line-height-20px"></div>
<div id="text-box-2" class="{{home_custom_box_class_1}} left"><h2>{{home_custom_box_title_1}}</h2>{{home_custom_box_text_1}}</div>
<div id="text-box-2" class="{{home_custom_box_class_2}} left second"><h2>{{home_custom_box_title_2}}</h2>{{home_custom_box_text_2}} </div>
<div id="text-box-2" class="{{home_custom_box_class_3}} right"><h2>{{home_custom_box_title_3}}</h2>{{home_custom_box_text_3}}</div>
<br clear="all" />
<div class="line-height-20px"></div><br />
<div id="service-box" class="left">
  <div id="box-title">
	<h2>{{cp_demo_box_title}}</h2>
  </div>
  <div id="box-content"><div class="cp-demo">
	{{cp_demo_box_text}} <strong><a href="[rp_store_info key='demo']?auto_login=true">View Demo</a></strong>
	<div class="clear"></div></div>
  </div>
</div>

[more_than_shared_box title="More Than Shared Hosting" onlyshared="{{home_cp_box_title_1}}|{{home_app_installer_box_title_1}}|{{home_web_designes_box_title_1}}|{{home_support_box_title_1}}"]

<div id="service-box" class="right">
  <div id="box-title">
	<h2>Our Clients Are Saying:</h2>
  </div>
  <div id="box-content">
    $testimonials_content
	<div class="clear"></div>
  </div>
</div><br clear="all" />
<div class="line-height-20px"></div>
<div id="text-box-3"><h2>{{home_custom_box_title_4}}</h2>{{home_custom_box_text_4}}</div>
<br clear="all" />
<div class="line-full-width"></div>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="316"><a class="rpwp-button free-1-click-box-button colorize-2" href="[rp_default_page_link key='application_installer']"><span class="gloss"></span>Free 1-Click Script Installs!</a></td>
	<td width="94" align="center">[webp img="wordpress-logo.png" title="WordPress" width="60" height="60"]
		
	<br />WordPress</td>
	<td width="94" align="center">[webp img="joomla-logo.png" title="Joomla" width="60" height="60"]
		
	<br />Joomla</td>
	<td width="94" align="center">[webp img="drupal-logo.png" title="Drupal" width="60" height="60"]
		
	<br />Drupal</td>
	<td width="94" align="center">[webp img="moodle-logo.png" title="Moodle" width="60" height="60"]
		
	<br />Moodle</td>
	<td width="94" align="center">[webp img="mambo-logo.png" title="Mambo" width="60" height="60"]
		
	<br />Mambo</td>
	<td width="94" align="center">[webp img="prestashop-logo.png" title="PrestaShop" width="60" height="60"]
		
	<br />PrestaShop</td>
	<td width="94" align="center">[webp img="phpbb-logo.png" title="phpBB" width="60" height="60"]
		
	<br />phpBB</td></tr>
</table>
<br clear="all" />

EOD
	),
	'rp_home_4'=>array('title' => 'Home 4', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD
[home_banner variant="1" plan="1" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_4_banner_order}}</button>']
<div id="home_domain_search1">[domain_search_box variant="1"]</div>
<div class="line-height-10px"></div>
  <div class="home-4-main-text">
    <center>
      <h1>{{home_main_title_1}}</h1>
    </center>
	<div class="line-height-20px"></div>
    {{home_main_1}}
  </div>
  <br />
  
[home_plan_boxes variant="2" plans="1,2,44" best="2" title="Find the Right Hosting Plan For You" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_4_plans_order}}</button>']
shared_min_price_plan|{{min_price_plan_shared_note}}
shared_max_price_plan|{{max_price_plan_shared_note}}
shared_plan1|{{plan_shared_note_1}}
shared_plan2|{{plan_shared_note_2}}
shared_plan3|{{plan_shared_note_3}}
shared_plan4|{{plan_shared_note_4}}

vps_kvm_min_price_plan|{{min_price_plan_vps_kvm_note}}
vps_kvm_max_price_plan|{{max_price_plan_vps_kvm_note}}
vps_kvm_plan1|{{plan_vps_kvm_note_1}}
vps_kvm_plan2|{{plan_vps_kvm_note_2}}
vps_kvm_plan3|{{plan_vps_kvm_note_3}}
vps_kvm_plan4|{{plan_vps_kvm_note_4}}

vps_openvz_min_price_plan|{{min_price_plan_vps_openvz_note}}
vps_openvz_max_price_plan|{{max_price_plan_vps_openvz_note}}
vps_openvz_plan1|{{plan_vps_openvz_note_1}}
vps_openvz_plan2|{{plan_vps_openvz_note_2}}
vps_openvz_plan3|{{plan_vps_openvz_note_3}}
vps_openvz_plan4|{{plan_vps_openvz_note_4}}

semi_dedicated_min_price_plan|{{min_price_plan_semi_dedicated_note}}
semi_dedicated_max_price_plan|{{max_price_plan_semi_dedicated_note}}
semi_dedicated_plan1|{{plan_semi_dedicated_note_1}}
semi_dedicated_plan2|{{plan_semi_dedicated_note_2}}
semi_dedicated_plan3|{{plan_semi_dedicated_note_3}}
semi_dedicated_plan4|{{plan_semi_dedicated_note_4}}

dedicated_min_price_plan|{{min_price_plan_dedicated_note}}
dedicated_max_price_plan|{{max_price_plan_dedicated_note}}
dedicated_plan1|{{plan_dedicated_note_1}}
dedicated_plan2|{{plan_dedicated_note_2}}
dedicated_plan3|{{plan_dedicated_note_3}}
dedicated_plan4|{{plan_dedicated_note_4}}

[/home_plan_boxes]
  
       <div style='display:none'>
			<div id='compare_overlay_shared' style='padding:10px; background:#fff;'>$shared_content</div>
			<div id='compare_overlay_vps_kvm' style='padding:10px; background:#fff;'>$vps_kvm_content</div>
			<div id='compare_overlay_vps_openvz' style='padding:10px; background:#fff;'>$vps_openvz_content</div>
			<div id='compare_overlay_semi_dedicated' style='padding:10px; background:#fff;'>$semi_dedicated_content</div>
			<div id='compare_overlay_dedicated' style='padding:10px; background:#fff;'>$dedicated_content</div>
		</div>

  <center>
    <h2>More Than Shared Hosting</h2>
  </center>
	   [home_sidebar_box type="vps_openvz" variant="2"]
		   {{home_sidebar_vps_openvz_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="vps_kvm" variant="2"]
		   {{home_sidebar_vps_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="semi_dedicated" variant="2"]
		   {{home_sidebar_semi_dedicated_1}}
	   [/home_sidebar_box]
	   [home_sidebar_box type="dedicated" variant="2"]
		   {{home_sidebar_dedicated_1}}
	   [/home_sidebar_box]
  <br clear="all" />
EOD
	),
	'rp_home_5'=>array('title' => 'Home 5', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD
[home_banner variant="3" plan="1" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_5_banner_order}}</button>']
<div id="home_domain_search1">[domain_search_box variant="1"]</div>
<div class="line-height-10px"></div>
    <center>
      <h1>{{home_main_title_1}}</h1>
    </center><br />
	<div class="line-height-20px"></div>
<div id="text-box-2" class="{{home_custom_box_class_1}} left"><h2>{{home_custom_box_title_1}}</h2>{{home_custom_box_text_1}}</div>
<div id="text-box-2" class="{{home_custom_box_class_2}} left second"><h2>{{home_custom_box_title_2}}</h2>{{home_custom_box_text_2}} </div>
<div id="text-box-2" class="{{home_custom_box_class_3}} right"><h2>{{home_custom_box_title_3}}</h2>{{home_custom_box_text_3}}</div>
<br clear="all" />
<div class="line-height-20px"></div><br />
<div id="service-box" class="left">
  <div id="box-title">
	<h2>{{cp_demo_box_title}}</h2>
  </div>
  <div id="box-content"><div class="cp-demo">
	{{cp_demo_box_text}} <strong><a href="[rp_store_info key='demo']?auto_login=true">View Demo</a></strong>
	<div class="clear"></div></div>
  </div>
</div>

[more_than_shared_box title="More Than Shared Hosting" onlyshared="{{home_cp_box_title_1}}|{{home_app_installer_box_title_1}}|{{home_web_designes_box_title_1}}|{{home_support_box_title_1}}"]

<div id="service-box" class="right">
  <div id="box-title">
	<h2>Our Clients Are Saying:</h2>
  </div>
  <div id="box-content">
    $testimonials_content
	<div class="clear"></div>
  </div>
</div><br clear="all" />
<div class="line-height-20px"></div>
<div id="text-box-3"><h2>{{home_custom_box_title_4}}</h2>{{home_custom_box_text_4}}</div>
<br clear="all" />
<div class="line-full-width"></div>

<table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="316"><a class="rpwp-button free-1-click-box-button colorize-2" href="[rp_default_page_link key='application_installer']"><span class="gloss"></span>Free 1-Click Script Installs!</a></td>
	<td width="94" align="center">[webp img="wordpress-logo.png" title="WordPress" width="60" height="60"]
		
	<br />WordPress</td>
	<td width="94" align="center">[webp img="joomla-logo.png" title="Joomla" width="60" height="60"]
		
	<br />Joomla</td>
	<td width="94" align="center">[webp img="drupal-logo.png" title="Drupal" width="60" height="60"]
		
	<br />Drupal</td>
	<td width="94" align="center">[webp img="moodle-logo.png" title="Moodle" width="60" height="60"]
		
	<br />Moodle</td>
	<td width="94" align="center">[webp img="mambo-logo.png" title="Mambo" width="60" height="60"]
		
	<br />Mambo</td>
	<td width="94" align="center">[webp img="prestashop-logo.png" title="PrestaShop" width="60" height="60"]
		
	<br />PrestaShop</td>
	<td width="94" align="center">[webp img="phpbb-logo.png" title="phpBB" width="60" height="60"]
		
	<br />phpBB</td></tr>
</table>
<br clear="all" />

EOD
	),
// home Clean Style theme
	'rp_home_clean_style'=>array('title' => 'Home Clean Style', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="clean_style" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[domain_search_box variant="8"]
			
			<div id="front_page_content-titles">
				<h3>Web Hosting <span>Plans</span></h3>
				View our top hosting plans. Select the one that suits you best!
			</div>
			
[home_plan_boxes variant="clean_style" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']


			<div id="home-main-text">
				<h2>{{home_main_title_1}}</h2>
				{{home_main_1}}
			</div>
			
[home_other_hosting_boxes]
vps_openvz_content|{{home_sidebar_vps_openvz_1}}
vps_kvm_content|{{home_sidebar_vps_1}}
semi_dedicated_content|{{home_sidebar_semi_dedicated_1}}
dedicated_content|{{home_sidebar_dedicated_1}}
[/home_other_hosting_boxes]


EOD
	),
// home CloudHost theme
	'rp_home_cloudhost'=>array('title' => 'Home CloudHost', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="cloudhost" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[domain_search_box variant="9"]
			
			<div id="front_page_content-wrapper">
				<div id="leftcol">
					<div id="front_page_content-titles">
						<h3>Web Hosting <span>Plans</span></h3>
						View our top plans. Select the one that suits you best!
					</div>

[home_plan_boxes variant="cloudhost" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']
				
				</div>
				
				<div id="rightcol">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					
[more_than_shared_box variant="cloudhost" title="Other hosting services"]
					
					
					<div class="testimonials">
						<h2>Customer feedback</h2>
						$testimonials_content
					</div>


				</div>
				<div class="clear"></div>
				
				<div id="front_page_content-scripts">
					<h2>Free 1-Click Script Installs!</h2>
					<div id="wordpress">
						<span>WordPress</span>
					</div>
					<div id="joomla">
						<span>Joomla</span>
					</div>
					<div id="drupal">
						<span>Drupal</span>
					</div>
					<div id="moodle">
						<span>Moodle</span>
					</div>
					<div id="mambo">
						<span>Mambo</span>
					</div>
					<div id="prestashop">
						<span>PrestaShop</span>
					</div>
					<div id="phpbb">
						<span>phpBB</span>
					</div>
				</div>
			</div>



EOD
	),
// home Cloud Servers theme
	'rp_home_cloud_servers'=>array('title' => 'Home Cloud Servers', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="cloud_servers" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[domain_search_box variant="9"]
			<br clear="all" />
			<div id="front_page_content-wrapper">
					<div id="front_page_content-titles">
						<h3>Web Hosting <span>Plans</span></h3>
						View our top plans. Select the one that suits you best!
					</div>

[home_plan_boxes variant="cloud_servers" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-titles">
					<h3>Features <span>&amp; Services</span></h3>
					Choose the best service for you packed with lots of features at your disposal!
				</div>

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					[more_than_shared_box variant="cloud_servers" title="Other hosting services"]
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
				</div>
			
		  </div>



EOD
	),
// home Contrast theme
	'rp_home_contrast'=>array('title' => 'Home Contrast', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="contrast" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[domain_search_box variant="9"]
			
				<div id="front_page_content-titles">
					<h3>Web Hosting <span>Plans</span></h3>
					View our top plans. Select the one that suits you best!
				</div>

[home_plan_boxes variant="contrast" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-titles">
					<h3>Features <span>&amp; Services</span></h3>
					Choose the best service for you packed with lots of features at your disposal!
				</div>

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					[more_than_shared_box variant="contrast" title="Other hosting services"]
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
				</div>
				
				<div id="front_page_content-scripts">
					<h2>Free 1-Click Script Installs!</h2>
					<div id="wordpress">
						<span>WordPress</span>
					</div>
					<div id="joomla">
						<span>Joomla</span>
					</div>
					<div id="drupal">
						<span>Drupal</span>
					</div>
					<div id="moodle">
						<span>Moodle</span>
					</div>
					<div id="mambo">
						<span>Mambo</span>
					</div>
					<div id="prestashop">
						<span>PrestaShop</span>
					</div>
					<div id="phpbb">
						<span>phpBB</span>
					</div>
				</div>



EOD
	),
// home Easy Flow theme
	'rp_home_easy_flow'=>array('title' => 'Home Easy Flow', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="easy_flow" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[domain_search_box variant="10"]
			
				<div id="front_page_content-titles">
					<h3>Web Hosting <span>Plans</span></h3>
					View our top plans. Select the one that suits you best!
				</div>

[home_plan_boxes variant="easy_flow" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-titles">
					<h3>Features <span>&amp; Services</span></h3>
					Choose the best service for you packed with lots of features at your disposal!
				</div>

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					[more_than_shared_box variant="easy_flow" title="Other hosting services"]
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
				</div>
			</div>



EOD
	),
// home FeatureHosting theme
	'rp_home_featurehosting'=>array('title' => 'Home FeatureHosting', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="featurehosting" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[domain_search_box variant="9"]
			
			
			<div id="front_page_content-wrapper">
				<div id="leftcol">
					<div id="front_page_content-titles">
						<h3>Web Hosting <span>Plans</span></h3>
						View our top plans. Select the one that suits you best!
					</div>

					[home_plan_boxes variant="featurehosting" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']
					
				</div>


				<div id="rightcol">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					
					[more_than_shared_box variant="featurehosting" title="Other hosting services"]
					
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
					
					
					<div class="testimonials">
						<h2>Customer feedback</h2>
						$testimonials_content
					</div>


				</div>
				<div class="clear"></div>
				
				<div id="front_page_content-scripts">
					<h2>Free 1-Click Script Installs!</h2>
					<div id="wordpress">
						<span>WordPress</span>
					</div>
					<div id="joomla">
						<span>Joomla</span>
					</div>
					<div id="drupal">
						<span>Drupal</span>
					</div>
					<div id="moodle">
						<span>Moodle</span>
					</div>
					<div id="mambo">
						<span>Mambo</span>
					</div>
					<div id="prestashop">
						<span>PrestaShop</span>
					</div>
					<div id="phpbb">
						<span>phpBB</span>
					</div>
				</div>
				
			</div>
			
EOD
	),
// home Fresh Looks theme
	'rp_home_fresh_looks'=>array('title' => 'Home Fresh Looks', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="fresh_looks" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

<div id="default_content">
[domain_search_box variant="7"]
</div>
			
			<div id="front_page_content-plan-area">
				[home_sidebar_box type="shared" variant="3"]
				   {{home_sidebar_shared_1}}
				[/home_sidebar_box]
				[home_sidebar_box type="vps_openvz" variant="3"]
				   {{home_sidebar_vps_openvz_1}}
				[/home_sidebar_box]
				[home_sidebar_box type="vps_kvm" variant="3"]
				   {{home_sidebar_vps_1}}
				[/home_sidebar_box]
				[home_sidebar_box type="semi_dedicated" variant="3"]
				   {{home_sidebar_semi_dedicated_1}}
				[/home_sidebar_box]
				[home_sidebar_box type="dedicated" variant="3"]
				   {{home_sidebar_dedicated_1}}
				[/home_sidebar_box]
				
			</div>

			<div id="front_page_content-main">
				<div id="home-cp-text">
					<h2>{{home_cp_box_title_1}}</h2>
					{{home_cp_box_text_1}}
					<div id="view-demo"><a href="[rp_store_info key='demo']?auto_login=true">View Demo</a></div>
				</div>
				<div id="home-webapp-text">
					<h2>{{home_app_installer_box_title_1}}</h2>
					{{home_app_installer_box_text_1}}
					<div id="view-demo"><a href="[rp_store_info key='demo']?auto_login=true">View Demo</a></div>
				</div>
				<div class="testimonials">
				  <h2>Customer feedback</h2>
				  $testimonials_content
			  </div>
			  
			</div>


EOD
	),
// home Hosting Deluxe theme
	'rp_home_hosting_deluxe'=>array('title' => 'Home Hosting Deluxe', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="hosting_deluxe" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

<div id="domain-search-area-frontpage">
[domain_search_box variant="7"]
</div>
			
[home_plan_boxes variant="hosting_deluxe" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

			<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					
					[more_than_shared_box variant="hosting_deluxe" title="Other hosting services"]
					
					
					<div class="testimonials">
						<h2>Customer feedback</h2>
						$testimonials_content
					</div>
			  
			</div>


EOD
	),
// home Hosting Easy theme
	'rp_home_hosting_easy'=>array('title' => 'Home Hosting Easy', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="hosting_easy" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

<div id="domain-search-area-frontpage">
[domain_search_box variant="9"]
</div>
			
			
		<div id="front_page_content-wrapper">
			<div id="front_page_content-titles">
				<h3>Web Hosting <span>Plans</span></h3>
				View our top hosting plans. Select the one that suits you best!
			</div>
[home_plan_boxes variant="hosting_easy" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					
					[more_than_shared_box variant="hosting_easy" title="Other hosting services"]
					
					
					<div class="testimonials">
						<h2>Customer feedback</h2>
						$testimonials_content
					</div>
					
				</div>
				
				<div id="front_page_content-scripts">
					<h2>Free 1-Click Script Installs!</h2>
					<div id="wordpress">
						<span>WordPress</span>
					</div>
					<div id="joomla">
						<span>Joomla</span>
					</div>
					<div id="drupal">
						<span>Drupal</span>
					</div>
					<div id="moodle">
						<span>Moodle</span>
					</div>
					<div id="mambo">
						<span>Mambo</span>
					</div>
					<div id="prestashop">
						<span>PrestaShop</span>
					</div>
					<div id="phpbb">
						<span>phpBB</span>
					</div>
				</div>
		</div>


EOD
	),
// home Hosting Zen theme
	'rp_home_hosting_zen'=>array('title' => 'Home Hosting Zen', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="hosting_zen" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']
		
			<div id="front_page_content-welcome">
				<h2>{{home_main_title_1}}</h2>
				{{home_main_1}}
			</div>
						
[home_plan_boxes variant="hosting_zen" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

			<div id="front_page_content-main">
				<div id="other-services">
					<h2>Other Hosting Services</h2>
					[home_sidebar_box type="vps_openvz" variant="4"]
					   {{home_sidebar_vps_openvz_1}}
					[/home_sidebar_box]
					[home_sidebar_box type="vps_kvm" variant="4"]
					   {{home_sidebar_vps_1}}
					[/home_sidebar_box]
					[home_sidebar_box type="semi_dedicated" variant="4"]
					   {{home_sidebar_semi_dedicated_1}}
					[/home_sidebar_box]
					[home_sidebar_box type="dedicated" variant="4"]
					   {{home_sidebar_dedicated_1}}
					[/home_sidebar_box]
				</div>
				<div id="hosting-features">
					<h2>Hosting Features</h2>
					<div id="hosting-features-text">
						<div class="service_header"><span>{{home_cp_box_title_1}}</span><div class="right"><a href="[rp_store_info key='demo']?auto_login=true">view demo</a></div></div>
						{{home_cp_box_text_1}}
					</div>
					<div id="hosting-features-text">
						<div class="service_header"><span>{{home_support_box_title_1}}</span></div>
						{{home_support_box_text_1}}
					</div>
					<div id="hosting-features-text">
						<div class="service_header"><span>{{home_app_installer_box_title_1}}</span><div class="right"><a href="[rp_store_info key='demo']?auto_login=true">view demo</a></div></div>
						{{home_app_installer_box_text_1}}
					</div>
					<div id="hosting-features-text">
						<div class="service_header"><span>{{home_web_designes_box_title_1}}</span></div>
						{{home_web_designes_box_text_1}}
					</div>
				</div>
			</div>
			



EOD
	),
// home HostPress theme
	'rp_home_hostpress'=>array('title' => 'Home HostPress', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="hostpress" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

<div id="domain-search-area-frontpage">
[domain_search_box variant="9"]
</div>
		

			<div id="front_page_content-wrapper">
				<div id="front_page_content-titles">
					<h3>Web Hosting <span>Plans</span></h3>
					View our top hosting plans. Select the one that suits you best!
				</div>
						
[home_plan_boxes variant="hostpress" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-titles">
					<h3>Features <span>&amp; Services</span></h3>
					Choose the best service for you packed with lots of features at your disposal!
				</div>
				
				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					
					[more_than_shared_box variant="hostpress" title="Other hosting services"]
					
					
					<div class="testimonials">
						<h2>Customer feedback</h2>
						$testimonials_content
					</div>
					
				</div>
				
				<div id="front_page_content-scripts">
					<h2>Free 1-Click Script Installs!</h2>
					<div id="wordpress">
						<span>WordPress</span>
					</div>
					<div id="joomla">
						<span>Joomla</span>
					</div>
					<div id="drupal">
						<span>Drupal</span>
					</div>
					<div id="moodle">
						<span>Moodle</span>
					</div>
					<div id="mambo">
						<span>Mambo</span>
					</div>
					<div id="prestashop">
						<span>PrestaShop</span>
					</div>
					<div id="phpbb">
						<span>phpBB</span>
					</div>
				</div>
				
				
		  </div>
			



EOD
	),
// home Optimum Hosting theme
	'rp_home_optimum_hosting'=>array('title' => 'Home Optimum Hosting', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="optimum_hosting" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[home_plan_boxes variant="optimum_hosting" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']
	
			<div id="front_page_content-welcome">
				<h2>{{home_main_title_1}}</h2>
				{{home_main_1}}
				<h2>{{home_app_installer_box_title_1}}</h2>
				{{home_app_installer_box_text_1}}
				<h2>{{home_support_box_title_1}}</h2>
				{{home_support_box_text_1}}
			</div>
			
			[more_than_shared_box variant="optimum_hosting" title="Other hosting services"]
			
			<div id="hosting-features">
				<div class="testimonials">
					<h2>Customer feedback</h2>
					$testimonials_content
				</div>
			</div>

			<div class="clear"></div>



EOD
	),
// home PHP Hosting theme
	'rp_home_php_hosting'=>array('title' => 'Home PHP Hosting', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="php_hosting" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

[home_plan_boxes variant="php_hosting" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']
	
			<div id="front_page_content-welcome">
				<h2>{{home_main_title_1}}</h2>
				{{home_main_1}}
				<h2>{{home_app_installer_box_title_1}}</h2>
				{{home_app_installer_box_text_1}}
				<h2>{{home_support_box_title_1}}</h2>
				{{home_support_box_text_1}}
			</div>
			
			[more_than_shared_box variant="php_hosting" title="Other hosting services"]
			
			<div id="hosting-features">
				<div class="testimonials">
					<h2>Customer feedback</h2>
					$testimonials_content
				</div>
			</div>

			<div class="clear"></div>



EOD
	),
// home Pro Hosting theme
	'rp_home_pro_hosting'=>array('title' => 'Home Pro Hosting', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

[home_banner variant="pro_hosting" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

<div id="default_content">
[domain_search_box variant="7"]
</div>

[home_plan_boxes variant="pro_hosting" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']
	

			<div id="front_page_content-welcome">
				<div id="front_page_content-halfcol">
					<h2>Our Web Hosting Features!</h2>
					<div id="hosting-features-text1">
						<div class="service_header"><span>{{home_cp_box_title_1}}</span><div class="right"><a href="[rp_store_info key='demo']?auto_login=true">VIEW<br />DEMO</a></div></div>
						{{home_cp_box_text_1}}
					</div>
					<div id="hosting-features-text2">
						<div class="service_header"><span>{{home_app_installer_box_title_1}}</span></div>
						{{home_app_installer_box_text_1}}
					</div>
					<div id="hosting-features-text3">
						<div class="service_header"><span>{{home_web_designes_box_title_1}}</span></div>
						{{home_web_designes_box_text_1}}
					</div>
					<div id="hosting-features-text4">
						<div class="service_header"><span>{{home_support_box_title_1}}</span></div>
						{{home_support_box_text_1}}
					</div>
				</div>
				<div id="front_page_content-halfcol">
					<h2>Additional Hosting Plans!</h2>
					[home_sidebar_box type="vps_openvz" variant="5"]
					   {{home_sidebar_vps_openvz_1}}
					[/home_sidebar_box]
					[home_sidebar_box type="vps_kvm" variant="5"]
					   {{home_sidebar_vps_1}}
					[/home_sidebar_box]
					[home_sidebar_box type="semi_dedicated" variant="5"]
					   {{home_sidebar_semi_dedicated_1}}
					[/home_sidebar_box]
					[home_sidebar_box type="dedicated" variant="5"]
					   {{home_sidebar_dedicated_1}}
					[/home_sidebar_box]
				</div>
			</div>



EOD
	),
// home Simple Honeycomb
	'rp_home_simple_honeycomb'=>array('title' => 'Home Simple Honeycomb', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="simple_honeycomb" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

		<div id="front_page_content-plan-area">
			[domain_search_box variant="11"]
		</div>		
		
		[home_plan_boxes variant="simple_honeycomb" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

			<div id="front_page_content-main">
				<div id="home-main-text">
					<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
				</div>
				<div id="other-services">
					[more_than_shared_box variant="simple_honeycomb" title="Other hosting services"]
				</div>
				<div class="testimonials">
					<h2>Customer feedback</h2>
					$testimonials_content
				</div>
			</div>
			
			
			<div id="front_page_content-main">
				<div id="front_page_content-features">
					<div class="features-box-1">
						<h3>{{home_cloud_hosting_box_title_1}}</h3>
						<div>
							<span>{{home_cloud_hosting_box_text_1}}</span>
						</div>
					</div>
					<div class="features-box-2">
						<h3>{{home_cp_box_title_1}}</h3>
						<div>
							<span>{{home_cp_box_text_1}} <a href="[rp_store_info key='demo']?auto_login=true">View Demo</a></span>
						</div>
					</div>
				</div>
				<div id="front_page_content-features">
					<div class="features-box-3">
						<h3>{{home_support_box_title_1}}</h3>
						<div>
							<span>{{home_support_box_text_1}}</span>
						</div>
					</div>
					<div class="features-box-4">
						<h3>{{home_app_installer_box_title_1}}</h3>
						<div>
							<span>{{home_app_installer_box_text_1}}</span>
						</div>
					</div>
				</div>
				<div id="front_page_content-features">
					<div class="features-box-5">
						<h3>{{home_website_installer_box_title_1}}</h3>
						<div>
							<span>{{home_website_installer_box_text_1}}</span>
						</div>
					</div>
					<div class="features-box-6">
						<h3>{{home_web_designes_box_title_1}}</h3>
						<div>
							<span>{{home_web_designes_box_text_1}}</span>
						</div>
					</div>
				</div>
			</div>
				



EOD
	),
// home Simplistic
	'rp_home_simplistic'=>array('title' => 'Home Simplistic', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


[home_banner variant="simplistic" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

		[domain_search_box variant="12"]	

			<br clear="all" />
			<div id="front_page_content-wrapper">
					<div id="front_page_content-titles">
						<h3>Web Hosting <span>Plans</span></h3>
						View our top plans. Select the one that suits you best!
					</div>

[home_plan_boxes variant="simplistic" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-titles">
					<h3>Features <span>&amp; Services</span></h3>
					Choose the best service for you packed with lots of features at your disposal!
				</div>

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					[more_than_shared_box variant="simplistic" title="Other hosting services"]
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
				</div>
			
		  </div>
				



EOD
	),
// home Simply Elegant
	'rp_home_simply_elegant'=>array('title' => 'Home Simply Elegant', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD

		[home_banner variant="simply_elegant" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

		[domain_search_box variant="11"]		
		
		[home_plan_boxes variant="simply_elegant" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

			<div id="front_page_content-main">
				<div id="home-main-text">
					<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
				</div>
				<div id="other-services">
					[more_than_shared_box variant="simply_elegant" title="Other hosting services"]
				</div>
				<div class="testimonials">
					<h2>Customer feedback</h2>
					$testimonials_content
				</div>
			</div>
			
			
				<div id="front_page_content-features">
					<div class="features-box-1">
						<div>
							<h3>{{home_cloud_hosting_box_title_1}}</h3>
							<span>{{home_cloud_hosting_box_text_1}}</span>
						</div>
					</div>
					<div class="features-box-2">
						<div>
							<h3>{{home_cp_box_title_1}}</h3>
							<span>{{home_cp_box_text_1}} <a href="[rp_store_info key='demo']?auto_login=true">View Demo</a></span>
						</div>
					</div>
					<div class="features-box-3">
						<div>
							<h3>{{home_support_box_title_1}}</h3>
							<span>{{home_support_box_text_1}}</span>
						</div>
					</div>
    				<div class="clear"></div>
					<div class="features-box-4">
						<div>
							<h3>{{home_app_installer_box_title_1}}</h3>
							<span>{{home_app_installer_box_text_1}}</span>
						</div>
					</div>
					<div class="features-box-5">
						<div>
							<h3>{{home_website_installer_box_title_1}}</h3>
							<span>{{home_website_installer_box_text_1}}</span>
						</div>
					</div>
					<div class="features-box-6">
						<div>
							<h3>{{home_web_designes_box_title_1}}</h3>
							<span>{{home_web_designes_box_text_1}}</span>
						</div>
					</div>
				</div>

EOD
	),
// home Smart Hosting
	'rp_home_smart_hosting'=>array('title' => 'Home Smart Hosting', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


		[home_banner variant="smart_hosting" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

		[domain_search_box variant="8"]	

			<br clear="all" />
			
				<div id="front_page_content-titles">
					<h3>Web Hosting <span>Plans</span></h3>
					View our top plans. Select the one that suits you best!
				</div>

[home_plan_boxes variant="smart_hosting" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					[more_than_shared_box variant="smart_hosting" title="Other hosting services"]
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
				</div>
			
			<div id="front_page_content-scripts">
				<h2>Free 1-Click Script Installs!</h2>
				<div id="wordpress">
					<span>WordPress</span>
				</div>
				<div id="joomla">
					<span>Joomla</span>
				</div>
				<div id="drupal">
					<span>Drupal</span>
				</div>
				<div id="moodle">
					<span>Moodle</span>
				</div>
				<div id="mambo">
					<span>Mambo</span>
				</div>
				<div id="prestashop">
					<span>PrestaShop</span>
				</div>
				<div id="phpbb">
					<span>phpBB</span>
				</div>
			</div>
				

EOD
	),
// home SquareHost
	'rp_home_squarehost'=>array('title' => 'Home SquareHost', 
					   'type' => 'home', 
					   'meta_title' => '{{home_1_meta_title}}', 
					   'meta_description' => '{{home_1_meta_description}}', 
					   'meta_keywords' => '{{home_1_meta_keywords}}',
					   'content'=> <<<EOD


		[home_banner variant="squarehost" plan="1" button='<button class="rpwp-button2 colorize"><span class="gloss"></span>{{home_1_banner_order}}</button>']

		[domain_search_box variant="13"]	

			<br clear="all" />
			
				<div id="front_page_content-titles">
					<h3>Web Hosting <span>Plans</span></h3>
					View our top plans. Select the one that suits you best!
				</div>

[home_plan_boxes variant="squarehost" plans="1,2,44" button='<button class="rpwp-button colorize"><span class="gloss"></span>{{home_1_plans_order}}</button>']

				<div id="front_page_content-titles">
					<h3>Features <span>&amp; Services</span></h3>
					Choose the best service for you packed with lots of features at your disposal!
				</div>

				<div id="front_page_content-main">
					<div id="home-main-text">
						<h2>{{home_main_title_1}}</h2>
						{{home_main_1}}
					</div>
					[more_than_shared_box variant="squarehost" title="Other hosting services"]
					<div id="hosting-features">
						<h2>Hosting features</h2>
						<ul>
							<li>An Advanced Hosting Control Panel</li>
							<li>A web Apps Installer</li>
							<li>Free Website Templates</li>
							<li>A 24/7/365 Customer Support Service</li>
						</ul>
					</div>
				</div>
			
			<div id="front_page_content-scripts">
				<h2>Free 1-Click Script Installs!</h2>
				<div id="wordpress">
					<span>WordPress</span>
				</div>
				<div id="joomla">
					<span>Joomla</span>
				</div>
				<div id="drupal">
					<span>Drupal</span>
				</div>
				<div id="moodle">
					<span>Moodle</span>
				</div>
				<div id="mambo">
					<span>Mambo</span>
				</div>
				<div id="prestashop">
					<span>PrestaShop</span>
				</div>
				<div id="phpbb">
					<span>phpBB</span>
				</div>
			</div>
				

EOD
	),
// videos page
	'rp_videos'=>array('title' => '{{videos_title}}',
									 'meta_title' => '{{videos_meta_title}}', 
									 'meta_description' => '{{videos_meta_description}}', 
									 'meta_keywords' => '{{videos_meta_keywords}}', 
									 'menu_title' => '{{videos_menu_title}}',
									 'content'=> <<<EOD
 <div id="aboutus-content-main">
	<h1>{{videos_title}}</h1>
	<p>{{videos_text}}</p><br />
	  <div class="video-box"><a href="#video1" class="inline_video">[webp img="videos-thumbs/hepsia-control-panel.jpg" title="Hepsia Control Panel" class="video-thumb"]		
	</a><a href="#video1" class="inline_video">Hepsia Control Panel</a><br />Duration: <strong>01:18</strong></div>
	  <div style='display:none'><div id='video1' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-intro-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>

	  <div class="video-box"><a href="#video2" class="inline_video">[webp img="videos-thumbs/point-click-domain-manager.jpg" title="Point &amp; Click Domain Manager" class="video-thumb"]
		
</a><a href="#video2" class="inline_video">Point &amp; Click Domain Manager</a><br />Duration: <strong>01:26</strong></div>
	  <div style='display:none'><div id='video2' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-Domain-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>

	  <div class="video-box"><a href="#video3" class="inline_video">[webp img="videos-thumbs/advanced-database-manager.jpg" title="Advanced Database Manager" class="video-thumb"]
		
</a><a href="#video3" class="inline_video">Advanced Database Manager</a><br />Duration: <strong>01:19</strong></div>
	  <div style='display:none'><div id='video3' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-Database-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>

	  <div class="video-box"><a href="#video4" class="inline_video">[webp img="videos-thumbs/drag-drop-file-manager.jpg" title="Drag &amp; Drop File Manager" class="video-thumb"]
		
</a><a href="#video4" class="inline_video">Drag &amp; Drop File Manager</a><br />Duration: <strong>01:18</strong></div>
	  <div style='display:none'><div id='video4' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-File-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>

	  <div class="video-box"><a href="#video5" class="inline_video">[webp img="videos-thumbs/fully-featured-email-manager.jpg" title="Fully-featured Email Manager" class="video-thumb"]
		
</a><a href="#video5" class="inline_video">Fully-featured Email Manager</a><br />Duration: <strong>01:26</strong></div>
	  <div style='display:none'><div id='video5' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-Email-Manager-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>

	  <div class="video-box"><a href="#video6" class="inline_video">[webp img="videos-thumbs/web-accelerators.jpg" title="Web Accelerators" class="video-thumb"]
		
</a><a href="#video6" class="inline_video">Web Accelerators</a><br />Duration: <strong>01:21</strong></div>
	  <div style='display:none'><div id='video6' style='padding:10px; background:#fff;'>
		<video src="https://[rp_store_info key='store_name'].duoservers.com/videos/hepsia/Hepsia-Web-Acceleration-640-us.mp4" width="640" controls style="max-width:100%"></video>
	  </div></div>
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_videos"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_videos"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_videos"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_videos"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_videos"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_videos"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_videos"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_videos"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
  <h3>Contact Details</h3>
    US Toll Free Phone: <strong>[store_phones number="us_toll_free"]</strong><br />
	US International: <strong>[store_phones number="us_international"]</strong><br />
	UK Phone: <strong>[store_phones number="uk"]</strong><br />
	AU Phone: <strong>[store_phones number="au"]</strong><br />
	OUR ID: <strong>[rp_store_info key='store_id']</strong><br />
	<br />
	<strong>Sales Lines Working Hours:</strong><br />
	Monday to Friday:<br />
	10.00 AM - 06.00 PM GMT/UK<br />
	05.00 AM - 01.00 PM EST/USA<br />
	08.00 PM - 04.00 AM EST/AU<br /><br />
	
	<strong>Check your server status</strong>
	To check the status of your server if you think there is a problem, please go to: <a href="http://www.properstatus.com" target="_blank">www.properstatus.com</a>
 </div> 
  <br clear="all" /><br/>
EOD
	),
// article pages
	'rp_articles_main'=>array('title' => '{{articles_main_title}}',
									 'type' => 'article', 
									 'meta_title' => '{{articles_main_meta_title}}', 
									 'meta_description' => '{{articles_main_meta_description}}', 
									 'meta_keywords' => '{{articles_main_meta_keywords}}', 
									 'menu_title' => '{{articles_main_menu_title}}',
									 'content'=> <<<EOD
 <div id="aboutus-content-main">
	<h1>{{articles_main_title}}</h1>
	<p>{{articles_main_text}}</p><br />
[rp_article_summaries]
article_rp_article_best_hosting|{{best_hosting_summary_title}}|{{best_hosting_summary_text}}
article_rp_article_dedicated_hosting|{{dedicated_hosting_summary_title}}|{{dedicated_hosting_summary_text}}
article_rp_article_domain_manager|{{domain_manager_summary_title}}|{{domain_manager_summary_text}}
article_rp_article_domain_names|{{domain_names_summary_title}}|{{domain_names_summary_text}}
article_rp_article_domain_web_hosting|{{domain_web_hosting_summary_title}}|{{domain_web_hosting_summary_text}}
article_rp_article_how_cpanel_hosting_works|{{how_cpanel_hosting_works_summary_title}}|{{how_cpanel_hosting_works_summary_text}}
article_rp_article_semi_dedicated_hosting|{{semi_dedicated_hosting_summary_title}}|{{semi_dedicated_hosting_summary_text}}
article_rp_article_shared_hosting|{{shared_hosting_summary_title}}|{{shared_hosting_summary_text}}
article_rp_article_ssl_certificates|{{ssl_certificates_summary_title}}|{{ssl_certificates_summary_text}}
article_rp_article_vps_hosting|{{vps_hosting_summary_title}}|{{vps_hosting_summary_text}}
article_rp_article_web_hosting_hosting|{{web_hosting_hosting_summary_title}}|{{web_hosting_hosting_summary_text}}
article_rp_article_web_hosting_services|{{web_hosting_services_summary_title}}|{{web_hosting_services_summary_text}}
article_rp_article_what_is_cloud_hosting|{{what_is_cloud_hosting_summary_title}}|{{what_is_cloud_hosting_summary_text}}
article_rp_article_reseller_hosting|{{reseller_hosting_summary_title}}|{{reseller_hosting_summary_text}}
article_rp_article_affordable_hosting|{{affordable_hosting_summary_title}}|{{affordable_hosting_summary_text}}
[/rp_article_summaries]
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="rp_articles_main"]
  [rp_datacenters_1_sidebar_box visibility="default" page="rp_articles_main"]
  [rp_datacenters_2_sidebar_box visibility="default" page="rp_articles_main"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="rp_articles_main"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="rp_articles_main"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="rp_articles_main"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="rp_articles_main"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="rp_articles_main"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>
EOD
	),
	'rp_article_best_hosting_1'=>array('title' => '{{article_best_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_best_hosting_meta_title_1}}', 
							//		 'meta_description' => '{{article_best_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_best_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_best_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_best_hosting_title_1}}</h1><br />
{{article_best_hosting_text}}
EOD
	),
	'rp_article_best_hosting_2'=>array('title' => '{{article_best_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_best_hosting_meta_title_2}}', 
						//			 'meta_description' => '{{article_best_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_best_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_best_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_best_hosting_title_2}}</h1>
		{{article_best_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_best_hosting_3'=>array('title' => '{{article_best_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_best_hosting_meta_title_3}}', 
						//			 'meta_description' => '{{article_best_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_best_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_best_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_best_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_best_hosting_title_3}}</h1>
		{{article_best_hosting_3_text}}		
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_dedicated_hosting_1'=>array('title' => '{{article_dedicated_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_dedicated_hosting_meta_title_1}}', 
							//		 'meta_description' => '{{article_dedicated_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_dedicated_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_dedicated_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_dedicated_hosting_title_1}}</h1>
{{article_dedicated_hosting_text}}
EOD
	),
	'rp_article_dedicated_hosting_2'=>array('title' => '{{article_dedicated_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_dedicated_hosting_meta_title_2}}', 
						//			 'meta_description' => '{{article_dedicated_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_dedicated_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_dedicated_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="dedicated"]</div>
	<div class="article1-text-area">
    	<h1>{{article_dedicated_hosting_title_2}}</h1>
		{{article_dedicated_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_dedicated_hosting_3'=>array('title' => '{{article_dedicated_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_dedicated_hosting_meta_title_3}}', 
						//			 'meta_description' => '{{article_dedicated_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_dedicated_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_dedicated_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_dedicated_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_dedicated_hosting_title_3}}</h1>
		{{article_dedicated_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_domain_manager_1'=>array('title' => '{{article_domain_manager_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_manager_meta_title_1}}', 
						//			 'meta_description' => '{{article_domain_manager_meta_description}}', 
									 'meta_keywords' => '{{article_domain_manager_meta_keywords}}', 
									 'menu_title' => '{{article_domain_manager_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_domain_manager_title_1}}</h1>
{{article_domain_manager_text}}
EOD
	),
	'rp_article_domain_manager_2'=>array('title' => '{{article_domain_manager_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_manager_meta_title_2}}', 
						//			 'meta_description' => '{{article_domain_manager_meta_description}}', 
									 'meta_keywords' => '{{article_domain_manager_meta_keywords}}', 
									 'menu_title' => '{{article_domain_manager_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[domain_search_box variant="3"]<center><a href="[rp_default_page_link key='domains']" style="text-decoration:underline">See all available TLDs</a></center></div>
	<div class="article1-text-area">
    	<h1>{{article_domain_manager_title_2}}</h1>
		{{article_domain_manager_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_domain_manager_3'=>array('title' => '{{article_domain_manager_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_manager_meta_title_3}}', 
						//			 'meta_description' => '{{article_domain_manager_meta_description}}', 
									 'meta_keywords' => '{{article_domain_manager_meta_keywords}}', 
									 'menu_title' => '{{article_domain_manager_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_domain_manager_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_domain_manager_title_3}}</h1>
		{{article_domain_manager_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_domain_names_1'=>array('title' => '{{article_domain_names_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_names_meta_title_1}}', 
						//			 'meta_description' => '{{article_domain_names_meta_description}}', 
									 'meta_keywords' => '{{article_domain_names_meta_keywords}}', 
									 'menu_title' => '{{article_domain_names_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_domain_names_title_1}}</h1>
{{article_domain_names_text}}
EOD
	),
	'rp_article_domain_names_2'=>array('title' => '{{article_domain_names_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_names_meta_title_2}}', 
						//			 'meta_description' => '{{article_domain_names_meta_description}}', 
									 'meta_keywords' => '{{article_domain_names_meta_keywords}}', 
									 'menu_title' => '{{article_domain_names_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[domain_search_box variant="3"]<center><a href="[rp_default_page_link key='domains']" style="text-decoration:underline">See all available TLDs</a></center></div>
	<div class="article1-text-area">
    	<h1>{{article_domain_names_title_2}}</h1>
		{{article_domain_names_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_domain_names_3'=>array('title' => '{{article_domain_names_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_names_meta_title_3}}', 
						//			 'meta_description' => '{{article_domain_names_meta_description}}', 
									 'meta_keywords' => '{{article_domain_names_meta_keywords}}', 
									 'menu_title' => '{{article_domain_names_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_domain_names_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_domain_names_title_3}}</h1>
		{{article_domain_names_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_domain_web_hosting_1'=>array('title' => '{{article_domain_web_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_web_hosting_meta_title_1}}', 
						//			 'meta_description' => '{{article_domain_web_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_domain_web_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_domain_web_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_domain_web_hosting_title_1}}</h1><br />
{{article_domain_web_hosting_text}}
EOD
	),
	'rp_article_domain_web_hosting_2'=>array('title' => '{{article_domain_web_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_web_hosting_meta_title_2}}', 
						//			 'meta_description' => '{{article_domain_web_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_domain_web_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_domain_web_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[domain_search_box variant="3"]<center><a href="[rp_default_page_link key='domains']" style="text-decoration:underline">See all available TLDs</a></center></div>
	<div class="article1-text-area">
    	<h1>{{article_domain_web_hosting_title_2}}</h1>
		{{article_domain_web_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_domain_web_hosting_3'=>array('title' => '{{article_domain_web_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_domain_web_hosting_meta_title_3}}', 
						//			 'meta_description' => '{{article_domain_web_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_domain_web_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_domain_web_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_domain_web_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_domain_web_hosting_title_3}}</h1>
		{{article_domain_web_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_how_cpanel_hosting_works_1'=>array('title' => '{{article_how_cpanel_hosting_works_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_how_cpanel_hosting_works_meta_title_1}}', 
						//			 'meta_description' => '{{article_how_cpanel_hosting_works_meta_description}}', 
									 'meta_keywords' => '{{article_how_cpanel_hosting_works_meta_keywords}}', 
									 'menu_title' => '{{article_how_cpanel_hosting_works_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_how_cpanel_hosting_works_title_1}}</h1>
{{article_how_cpanel_hosting_works_text}}
EOD
	),
	'rp_article_how_cpanel_hosting_works_2'=>array('title' => '{{article_how_cpanel_hosting_works_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_how_cpanel_hosting_works_meta_title_2}}', 
						//			 'meta_description' => '{{article_how_cpanel_hosting_works_meta_description}}', 
									 'meta_keywords' => '{{article_how_cpanel_hosting_works_meta_keywords}}', 
									 'menu_title' => '{{article_how_cpanel_hosting_works_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_how_cpanel_hosting_works_title_2}}</h1>
		{{article_how_cpanel_hosting_works_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_how_cpanel_hosting_works_3'=>array('title' => '{{article_how_cpanel_hosting_works_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_how_cpanel_hosting_works_meta_title_3}}', 
						//			 'meta_description' => '{{article_how_cpanel_hosting_works_meta_description}}', 
									 'meta_keywords' => '{{article_how_cpanel_hosting_works_meta_keywords}}', 
									 'menu_title' => '{{article_how_cpanel_hosting_works_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_how_cpanel_hosting_works_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_how_cpanel_hosting_works_title_3}}</h1>
		{{article_how_cpanel_hosting_works_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_semi_dedicated_hosting_1'=>array('title' => '{{article_semi_dedicated_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_semi_dedicated_hosting_meta_title_1}}', 
						//			 'meta_description' => '{{article_semi_dedicated_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_semi_dedicated_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_semi_dedicated_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_semi_dedicated_hosting_title_1}}</h1>
{{article_semi_dedicated_hosting_text}}
EOD
	),
	'rp_article_semi_dedicated_hosting_2'=>array('title' => '{{article_semi_dedicated_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_semi_dedicated_hosting_meta_title_2}}', 
						//			 'meta_description' => '{{article_semi_dedicated_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_semi_dedicated_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_semi_dedicated_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="semi_dedicated"]</div>
	<div class="article1-text-area">
    	<h1>{{article_semi_dedicated_hosting_title_2}}</h1>
		{{article_semi_dedicated_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_semi_dedicated_hosting_3'=>array('title' => '{{article_semi_dedicated_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_semi_dedicated_hosting_meta_title_3}}', 
						//			 'meta_description' => '{{article_semi_dedicated_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_semi_dedicated_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_semi_dedicated_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_semi_dedicated_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_semi_dedicated_hosting_title_3}}</h1>
		{{article_semi_dedicated_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_shared_hosting_1'=>array('title' => '{{article_shared_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_shared_hosting_meta_title_1}}', 
						//			 'meta_description' => '{{article_shared_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_shared_hosting_meta_keywords}}',
									 'menu_title' => '{{article_shared_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main', 
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_shared_hosting_title_1}}</h1>
{{article_shared_hosting_text}}
EOD
	),
	'rp_article_shared_hosting_2'=>array('title' => '{{article_shared_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_shared_hosting_meta_title_2}}', 
									 'meta_description' => '{{article_shared_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_shared_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_shared_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_shared_hosting_title_2}}</h1>
		{{article_shared_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_shared_hosting_3'=>array('title' => '{{article_shared_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_shared_hosting_meta_title_3}}', 
						//			 'meta_description' => '{{article_shared_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_shared_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_shared_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_shared_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_shared_hosting_title_3}}</h1>
		{{article_shared_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_ssl_certificates_1'=>array('title' => '{{article_ssl_certificates_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_ssl_certificates_meta_title_1}}', 
						//			 'meta_description' => '{{article_ssl_certificates_meta_description}}', 
									 'meta_keywords' => '{{article_ssl_certificates_meta_keywords}}', 
									 'menu_title' => '{{article_ssl_certificates_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_ssl_certificates_title_1}}</h1>
{{article_ssl_certificates_text}}
EOD
	),
	'rp_article_ssl_certificates_2'=>array('title' => '{{article_ssl_certificates_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_ssl_certificates_meta_title_2}}', 
						//			 'meta_description' => '{{article_ssl_certificates_meta_description}}', 
									 'meta_keywords' => '{{article_ssl_certificates_meta_keywords}}', 
									 'menu_title' => '{{article_ssl_certificates_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_ssl_certificates_title_2}}</h1>
		{{article_ssl_certificates_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_ssl_certificates_3'=>array('title' => '{{article_ssl_certificates_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_ssl_certificates_meta_title_3}}', 
						//			 'meta_description' => '{{article_ssl_certificates_meta_description}}', 
									 'meta_keywords' => '{{article_ssl_certificates_meta_keywords}}', 
									 'menu_title' => '{{article_ssl_certificates_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_ssl_certificates_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_ssl_certificates_title_3}}</h1>
		{{article_ssl_certificates_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_vps_hosting_1'=>array('title' => '{{article_vps_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_vps_hosting_meta_title_1}}', 
						//			 'meta_description' => '{{article_vps_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_vps_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_vps_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_vps_hosting_title_1}}</h1>
{{article_vps_hosting_text}}
EOD
	),
	'rp_article_vps_hosting_2'=>array('title' => '{{article_vps_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_vps_hosting_meta_title_2}}', 
					//				 'meta_description' => '{{article_vps_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_vps_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_vps_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="vps_openvz"]</div>
	<div class="article1-text-area">
    	<h1>{{article_vps_hosting_title_2}}</h1>
		{{article_vps_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_vps_hosting_3'=>array('title' => '{{article_vps_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_vps_hosting_meta_title_3}}', 
					//				 'meta_description' => '{{article_vps_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_vps_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_vps_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_vps_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_vps_hosting_title_3}}</h1>
		{{article_vps_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_web_hosting_hosting_1'=>array('title' => '{{article_web_hosting_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_web_hosting_hosting_meta_title_1}}', 
						//			 'meta_description' => '{{article_web_hosting_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_web_hosting_hosting_meta_keywords}}',  
									 'menu_title' => '{{article_web_hosting_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_web_hosting_hosting_title_1}}</h1>
{{article_web_hosting_hosting_text}}
EOD
	),
	'rp_article_web_hosting_hosting_2'=>array('title' => '{{article_web_hosting_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_web_hosting_hosting_meta_title_2}}', 
					//				 'meta_description' => '{{article_web_hosting_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_web_hosting_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_web_hosting_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_web_hosting_hosting_title_2}}</h1>
		{{article_web_hosting_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_web_hosting_hosting_3'=>array('title' => '{{article_web_hosting_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_web_hosting_hosting_meta_title_3}}', 
					//				 'meta_description' => '{{article_web_hosting_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_web_hosting_hosting_meta_keywords}}',
									 'menu_title' => '{{article_web_hosting_hosting_menu_title_3}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_web_hosting_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_web_hosting_hosting_title_3}}</h1>
		{{article_web_hosting_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_web_hosting_services_1'=>array('title' => '{{article_web_hosting_services_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_web_hosting_services_meta_title_1}}', 
					//				 'meta_description' => '{{article_web_hosting_services_meta_description}}', 
									 'meta_keywords' => '{{article_web_hosting_services_meta_keywords}}', 
									 'menu_title' => '{{article_web_hosting_services_menu_title_1}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_web_hosting_services_title_1}}</h1>
{{article_web_hosting_services_text}}
EOD
	),
	'rp_article_web_hosting_services_2'=>array('title' => '{{article_web_hosting_services_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_web_hosting_services_meta_title_2}}', 
					//				 'meta_description' => '{{article_web_hosting_services_meta_description}}', 
									 'meta_keywords' => '{{article_web_hosting_services_meta_keywords}}', 
									 'menu_title' => '{{article_web_hosting_services_menu_title_2}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_web_hosting_services_title_2}}</h1>
		{{article_web_hosting_services_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_web_hosting_services_3'=>array('title' => '{{article_web_hosting_services_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_web_hosting_services_meta_title_3}}', 
					//				 'meta_description' => '{{article_web_hosting_services_meta_description}}', 
									 'meta_keywords' => '{{article_web_hosting_services_meta_keywords}}', 
									 'menu_title' => '{{article_web_hosting_services_menu_title_3}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_web_hosting_services_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_web_hosting_services_title_3}}</h1>
		{{article_web_hosting_services_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_what_is_cloud_hosting_1'=>array('title' => '{{article_what_is_cloud_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_what_is_cloud_hosting_meta_title_1}}', 
					//				 'meta_description' => '{{article_what_is_cloud_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_what_is_cloud_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_what_is_cloud_hosting_menu_title_1}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_what_is_cloud_hosting_title_1}}</h1>
{{article_what_is_cloud_hosting_text}}
EOD
	),
	'rp_article_what_is_cloud_hosting_2'=>array('title' => '{{article_what_is_cloud_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_what_is_cloud_hosting_meta_title_2}}', 
					//				 'meta_description' => '{{article_what_is_cloud_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_what_is_cloud_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_what_is_cloud_hosting_menu_title_2}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_what_is_cloud_hosting_title_2}}</h1>
		{{article_what_is_cloud_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_what_is_cloud_hosting_3'=>array('title' => '{{article_what_is_cloud_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_what_is_cloud_hosting_meta_title_3}}', 
						//			 'meta_description' => '{{article_what_is_cloud_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_what_is_cloud_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_what_is_cloud_hosting_menu_title_3}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_what_is_cloud_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_what_is_cloud_hosting_title_3}}</h1>
		{{article_what_is_cloud_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_reseller_hosting_1'=>array('title' => '{{article_reseller_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_reseller_hosting_meta_title_1}}', 
					//				 'meta_description' => '{{article_reseller_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_reseller_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_reseller_hosting_menu_title_1}}', 
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_reseller_hosting_title_1}}</h1>
{{article_reseller_hosting_text}}
EOD
	),
	'rp_article_reseller_hosting_2'=>array('title' => '{{article_reseller_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_reseller_hosting_meta_title_2}}', 
					//				 'meta_description' => '{{article_reseller_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_reseller_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_reseller_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_reseller_hosting_title_2}}</h1>
		{{article_reseller_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_reseller_hosting_3'=>array('title' => '{{article_reseller_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_reseller_hosting_meta_title_3}}', 
					//				 'meta_description' => '{{article_reseller_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_reseller_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_reseller_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_reseller_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_reseller_hosting_title_3}}</h1>
		{{article_reseller_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_affordable_hosting_1'=>array('title' => '{{article_affordable_hosting_title_1}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_affordable_hosting_meta_title_1}}', 
					//				 'meta_description' => '{{article_affordable_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_affordable_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_affordable_hosting_menu_title_1}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<h1>{{article_affordable_hosting_title_1}}</h1>
{{article_affordable_hosting_text}}
EOD
	),
	'rp_article_affordable_hosting_2'=>array('title' => '{{article_affordable_hosting_title_2}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_affordable_hosting_meta_title_2}}', 
					//				 'meta_description' => '{{article_affordable_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_affordable_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_affordable_hosting_menu_title_2}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article1-container-area">
	<div class="article1-plans-area">[article_plans_left type="shared"]</div>
	<div class="article1-text-area">
    	<h1>{{article_affordable_hosting_title_2}}</h1>
		{{article_affordable_hosting_2_text}}
    </div>
	<div class="clean">&nbsp;</div>
</div>
EOD
	),
	'rp_article_affordable_hosting_3'=>array('title' => '{{article_affordable_hosting_title_3}}',
									 'type' => 'article', 
									 'meta_title' => '{{article_affordable_hosting_meta_title_3}}', 
					//				 'meta_description' => '{{article_affordable_hosting_meta_description}}', 
									 'meta_keywords' => '{{article_affordable_hosting_meta_keywords}}', 
									 'menu_title' => '{{article_affordable_hosting_menu_title_3}}',
								  	 'parent' => 'rp_articles_main',
									 'post_parent' => 'rp_articles_main', 
									 'content'=> <<<EOD
<div class="article2-container-area">
	<div class="article2-links-area">[article_sidebar_menu article_type="3" selected="rp_article_affordable_hosting_3"]</div>
    <div class="article2-text-area">
    	<h1>{{article_affordable_hosting_title_3}}</h1>
		{{article_affordable_hosting_3_text}}
    </div>
    <div class="clean">&nbsp;</div>
</div>
EOD
	),
// end article pages
	'rp_error_400'=>array('title' => 'Error 400: Bad Request!',
									 'type' => 'error', 
									 'meta_title' => 'Error 400: Bad Request!', 
									 'meta_description' => 'Error 400: Bad Request!', 
									 'meta_keywords' => 'Error 400: Bad Request!', 
									 'menu_title' => 'Error 400',
									 'content'=> <<<EOD
  <div id="aboutus-content-main">
    <h1>Error 400: Bad Request!</h1><br />
    <br/>
	[webp img="404-img.png" title="Error 400: Bad Request!" width="252" height="258" style="float:left; margin-right:40px;"]
	
    {{error_400_text}}
    <br clear="all" />
    <br /><br />
    <h2>Quick Links:</h2>
    <ul>
        <li><a href="[bloginfo key='url']">Home Page</a></li>
        <li><a href="[rp_default_page_link key='shared']">Web hosting</a></li>
        <li><a href="[rp_default_page_link key='domains']">Domain Names</a></li>
        <li><a href="[rp_default_page_link key='application_installer']">1 Click Scripts Installer</a></li>
        <li><a href="[rp_page_link key='rp_order_form']">Order</a></li>
    </ul>
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="404"]
  [rp_datacenters_1_sidebar_box visibility="default" page="404"]
  [rp_datacenters_2_sidebar_box visibility="default" page="404"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="404"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="404"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="404"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="404"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="404"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>
EOD
	),
	'rp_error_401'=>array('title' => 'Error 401: Authentication Required!',
									 'type' => 'error', 
									 'meta_title' => 'Error 401: Authentication Required!', 
									 'meta_description' => 'Error 401: Authentication Required!', 
									 'meta_keywords' => 'Error 401: Authentication Required!', 
									 'menu_title' => 'Error 401',
									 'content'=> <<<EOD
  <div id="aboutus-content-main">
    <h1>Error 401: Unauthorized Access!</h1><br />
    <br/>
	[webp img="404-img.png" title="Error 401: Unauthorized Access!" width="252" height="258" style="float:left; margin-right:40px;"]
	
    {{error_401_text}}
    <br clear="all" />
    <br /><br />
    <h2>Quick Links:</h2>
    <ul>
        <li><a href="[bloginfo key='url']">Home Page</a></li>
        <li><a href="[rp_default_page_link key='shared']">Web hosting</a></li>
        <li><a href="[rp_default_page_link key='domains']">Domain Names</a></li>
        <li><a href="[rp_default_page_link key='application_installer']">1 Click Scripts Installer</a></li>
        <li><a href="[rp_page_link key='rp_order_form']">Order</a></li>
    </ul>
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="404"]
  [rp_datacenters_1_sidebar_box visibility="default" page="404"]
  [rp_datacenters_2_sidebar_box visibility="default" page="404"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="404"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="404"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="404"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="404"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="404"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>
EOD
	),
	'rp_error_403'=>array('title' => 'Error 403: Forbidden!',
									 'type' => 'error', 
									 'meta_title' => 'Error 403: Forbidden!', 
									 'meta_description' => 'Error 403: Forbidden!', 
									 'meta_keywords' => 'Error 403: Forbidden!', 
									 'menu_title' => 'Error 403',
									 'content'=> <<<EOD
  <div id="aboutus-content-main">
    <h1>Error 403: Forbidden!</h1><br />
    <br/>
	[webp img="404-img.png" title="Error 403: Forbidden!" width="252" height="258" style="float:left; margin-right:40px;"]
	
    {{error_403_text}}
    <br clear="all" />
    <br /><br />
    <h2>Quick Links:</h2>
    <ul>
        <li><a href="[bloginfo key='url']">Home Page</a></li>
        <li><a href="[rp_default_page_link key='shared']">Web hosting</a></li>
        <li><a href="[rp_default_page_link key='domains']">Domain Names</a></li>
        <li><a href="[rp_default_page_link key='application_installer']">1 Click Scripts Installer</a></li>
        <li><a href="[rp_page_link key='rp_order_form']">Order</a></li>
    </ul>
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="404"]
  [rp_datacenters_1_sidebar_box visibility="default" page="404"]
  [rp_datacenters_2_sidebar_box visibility="default" page="404"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="404"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="404"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="404"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="404"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="404"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>
EOD
	),
	'rp_error_500'=>array('title' => 'Error 500: Server Error!',
									 'type' => 'error', 
									 'meta_title' => 'Error 500: Server Error!', 
									 'meta_description' => 'Error 500: Server Error!', 
									 'meta_keywords' => 'Error 500: Server Error!', 
									 'menu_title' => 'Error 500',
									 'content'=> <<<EOD
  <div id="aboutus-content-main">
    <h1>Error 500: Server Error!</h1><br />
    <br/>
	[webp img="404-img.png" title="Error 500: Server Error!" width="252" height="258" style="float:left; margin-right:40px;"]
	
    {{error_500_text}}
    <br clear="all" />
    <br /><br />
    <h2>Quick Links:</h2>
    <ul>
        <li><a href="[bloginfo key='url']">Home Page</a></li>
        <li><a href="[rp_default_page_link key='shared']">Web hosting</a></li>
        <li><a href="[rp_default_page_link key='domains']">Domain Names</a></li>
        <li><a href="[rp_default_page_link key='application_installer']">1 Click Scripts Installer</a></li>
        <li><a href="[rp_page_link key='rp_order_form']">Order</a></li>
    </ul>
 </div>
 <div id="aboutus-sidebar">
  [rp_customer_support_sidebar_box visibility="default" page="404"]
  [rp_datacenters_1_sidebar_box visibility="default" page="404"]
  [rp_datacenters_2_sidebar_box visibility="default" page="404"]
  [rp_hepsia_cp_sidebar_box visibility="default" page="404"]
  {{hepsia_cp_sidebar_text}}
  [/rp_hepsia_cp_sidebar_box]
  [rp_email_manager_sidebar_box visibility="default" page="404"]
  {{email_manager_sidebar_text}}
  [/rp_email_manager_sidebar_box]
  [rp_web_accelerators_sidebar_box visibility="default" page="404"]
  {{web_accelerators_sidebar_text}}
  [/rp_web_accelerators_sidebar_box]
  [rp_click_installer_sidebar_box visibility="default" page="404"]
  {{click_installer_sidebar_text}}
  [/rp_click_installer_sidebar_box]
  [rp_domain_manager_sidebar_box visibility="default" page="404"]
  {{domain_manager_sidebar_text}}
  [/rp_domain_manager_sidebar_box]
 </div> 
  <br clear="all" /><br/>
EOD
	),
	'rp_order_form'=>array('title' => 'Order Form',
						   'content'=>'[rp_order_form]'
	),
	'rp_shared_order_form'=>array('title' => '{{order_form_shared_title}}',
								  'meta_title' => '{{order_form_shared_meta_title}}', 
								  'meta_description' => '{{order_form_shared_meta_description}}', 
								  'meta_keywords' => '{{order_form_shared_meta_keywords}}',
								  'parent' => 'rp_order_form',
								  'post_parent' => 'rp_order_form',
								  'content'=>'[rp_order_form page="rp_shared_order_form"]',
	),
	'rp_vps_virtuozzo_order_form'=>array('title' => '{{order_form_vps_virtuozzo_title}}',
								  'meta_title' => '{{order_form_vps_virtuozzo_meta_title}}', 
								  'meta_description' => '{{order_form_vps_virtuozzo_meta_description}}', 
								  'meta_keywords' => '{{order_form_vps_virtuozzo_meta_keywords}}',
								  'parent' => 'rp_order_form',
								  'post_parent' => 'rp_order_form',
								  'content'=>'[rp_order_form page="rp_vps_virtuozzo_order_form"]',
	),
	'rp_vps_kvm_order_form'=>array('title' => '{{order_form_vps_kvm_title}}',
								  'meta_title' => '{{order_form_vps_kvm_meta_title}}', 
								  'meta_description' => '{{order_form_vps_kvm_meta_description}}', 
								  'meta_keywords' => '{{order_form_vps_kvm_meta_keywords}}',
								  'parent' => 'rp_order_form',
								  'post_parent' => 'rp_order_form',
								  'content'=>'[rp_order_form page="rp_vps_kvm_order_form"]',
	),
	'rp_vps_openvz_order_form'=>array('title' => '{{order_form_vps_openvz_title}}',
								  'meta_title' => '{{order_form_vps_openvz_meta_title}}', 
								  'meta_description' => '{{order_form_vps_openvz_meta_description}}', 
								  'meta_keywords' => '{{order_form_vps_openvz_meta_keywords}}',
								  'parent' => 'rp_order_form',
								  'post_parent' => 'rp_order_form',
								  'content'=>'[rp_order_form page="rp_vps_openvz_order_form"]',
	),
	'rp_semi_dedicated_order_form'=>array('title' => '{{order_form_semi_dedicated_title}}',
								  'meta_title' => '{{order_form_semi_dedicated_meta_title}}', 
								  'meta_description' => '{{order_form_semi_dedicated_meta_description}}', 
								  'meta_keywords' => '{{order_form_semi_dedicated_meta_keywords}}',
								  'parent' => 'rp_order_form',
								  'post_parent' => 'rp_order_form',
								  'content'=>'[rp_order_form page="rp_semi_dedicated_order_form"]',
	),
	'rp_dedicated_order_form'=>array('title' => '{{order_form_dedicated_title}}',
								  'meta_title' => '{{order_form_dedicated_meta_title}}', 
								  'meta_description' => '{{order_form_dedicated_meta_description}}', 
								  'meta_keywords' => '{{order_form_dedicated_meta_keywords}}',
								  'parent' => 'rp_order_form',
								  'post_parent' => 'rp_order_form',
								  'content'=>'[rp_order_form page="rp_dedicated_order_form"]',
	),
	'rp_main_terms'=>array('title' => 'Terms and Conditions', 'type' => 'tos', 'content'=>'<h1>Terms and Conditions</h1><br />[rp_terms type="main"]'),
	'rp_duoservers_terms'=>array('title' => 'Web Hosting Terms Of Service', 'type' => 'tos', 'content'=>'[rp_terms type="duoservers_terms"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_vps_terms'=>array('title' => 'VPS Terms Of Service', 'type' => 'tos', 'content'=>'[rp_terms type="vps_terms"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_cancellation_refund_policy'=>array('title' => 'Cancellation/Refund Policy', 'type' => 'tos', 'content'=>'[rp_terms type="cancellation_refund_policy"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_service_level_guarantees'=>array('title' => 'Service Level Guarantees', 'type' => 'tos', 'content'=>'[rp_terms type="service_level_guarantees"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_domain_name_registration_agreement'=>array('title' => 'Domain Name Registration Agreement', 'type' => 'tos', 'content'=>'[rp_terms type="domain_name_registration_agreement"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_domain_name_dispute_resolution_policy'=>array('title' => 'Domain Name Dispute Resolution Policy', 'type' => 'tos', 'content'=>'[rp_terms type="domain_name_dispute_resolution_policy"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_id_protection_service_agreement'=>array('title' => 'ID Protection Agreement', 'type' => 'tos', 'content'=>'[rp_terms type="id_protection_service_agreement"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_duoservers_privacy_policy'=>array('title' => 'Privacy Policy', 'type' => 'tos', 'content'=>'[rp_terms type="duoservers_privacy_policy"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_aup'=>array('title' => 'Acceptable Use Policy', 'type' => 'tos', 'content'=>'[rp_terms type="aup"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_semi_terms_of_service'=>array('title' => 'Semi-Dedicated Servers Terms Of Service', 'type' => 'tos', 'content'=>'[rp_terms type="semi_terms_of_service"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_service_level_guarantees_semi'=>array('title' => 'Semi-Dedicated Servers Service Level Guarantees', 'type' => 'tos', 'content'=>'[rp_terms type="service_level_guarantees_semi"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_aup_semi'=>array('title' => 'Semi-Dedicated Servers Acceptable Use Policy', 'type' => 'tos', 'content'=>'[rp_terms type="aup_semi"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_service_level_guarantees_vps'=>array('title' => 'VPS Service Level Guarantees', 'type' => 'tos', 'content'=>'[rp_terms type="service_level_guarantees_vps"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_aup_vps'=>array('title' => 'VPS Acceptable Use Policy', 'type' => 'tos', 'content'=>'[rp_terms type="aup_vps"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_dedicated_terms_of_service'=>array('title' => 'Dedicated Servers Terms Of Service', 'type' => 'tos', 'content'=>'[rp_terms type="dedicated_terms_of_service"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_service_level_guarantees_dedicated'=>array('title' => 'Dedicated Servers Service Level Guarantees', 'type' => 'tos', 'content'=>'[rp_terms type="service_level_guarantees_dedicated"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_acceptable_use_policy_dedicated'=>array('title' => 'Dedicated Servers Acceptable Use Policy', 'type' => 'tos', 'content'=>'[rp_terms type="acceptable_use_policy_dedicated"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
	'rp_duoservers_order_verification'=>array('title' => 'Order Verification Policy', 'type' => 'tos', 'content'=>'[rp_terms type="duoservers_order_verification"]', 'parent' => 'rp_main_terms', 'post_parent' => 'rp_main_terms'),
);


$GLOBALS['rp_string_references'] = array(
	'store_title' => "[rp_store_info key='store_title']",
	'store_name' => "[rp_store_info key='store_name']",
	'home_url' => "[rp_home_url]",
	'template_url' => "[bloginfo key='template_url']",
	'host' => "[rp_host]",
	'demo_link' => "[rp_store_info key='demo']",
	'page_link' => "[rp_page_link key='url']",
	'default_page_link' => "[rp_default_page_link key='type']",
	'min_price_tld' => "[rp_min_price_domain domain='tld']",
	'min_price_shared' => "[rp_min_price type='shared']",
	'min_price_vps_openvz' => "[rp_min_price type='vps_openvz']",
	'min_price_vps_virtuozzo' => "[rp_min_price type='vps_virtuozzo']",
	'min_price_vps_kvm' => "[rp_min_price type='vps_kvm']",
	'min_price_semi_dedicated' => "[rp_min_price type='semi_dedicated']",
	'min_price_dedicated' => "[rp_min_price type='dedicated']",
	'whois_protection_price' => "[rp_whois_protection_price]",
	'article_domain_search' => '[article_domain_search]',
	'article_plan_box_shared' => '[article_plan_box type="shared"]',
	'article_plan_box_dedicated' => '[article_plan_box type="dedicated"]',
	'article_plan_box_semi_dedicated' => '[article_plan_box type="semi_dedicated"]',
	'article_plan_box_vps_openvz' => '[article_plan_box type="vps_openvz"]',
	'article_plan_box_vps_virtuozzo' => '[article_plan_box type="vps_virtuozzo"]',
	'article_plan_box_vps_kvm' => '[article_plan_box type="vps_kvm"]',
	'article_plans_table_shared' => '[article_plans_table type="shared"]',
	'article_plans_table_dedicated' => '[article_plans_table type="dedicated"]',
	'article_plans_table_semi_dedicated' => '[article_plans_table type="semi_dedicated"]',
	'article_plans_table_vps_openvz' => '[article_plans_table type="vps_openvz"]',
	'article_plans_table_vps_virtuozzo' => '[article_plans_table type="vps_virtuozzo"]',
	'article_plans_table_vps_kvm' => '[article_plans_table type="vps_kvm"]',
	'article_plans_table_shared_2' => '[article_plans_table_2 type="shared"]',
	'article_plans_table_dedicated_2' => '[article_plans_table_2 type="dedicated"]',
	'article_plans_table_semi_dedicated_2' => '[article_plans_table_2 type="semi_dedicated"]',
	'article_plans_table_vps_openvz_2' => '[article_plans_table_2 type="vps_openvz"]',
	'article_plans_table_vps_kvm_2' => '[article_plans_table_2 type="vps_kvm"]'
);

$GLOBALS['durls'] = array(
	'domain_search' => array('rp_domain_names_1','rp_domain_names_2','rp_domain_names_3','rp_domain_names_4','rp_domain_names_5','rp_domain_names_6'),
	'shared_hosting' => array('rp_shared_plan','rp_shared_plans_short'),
	'vps_hosting' => array('rp_vps_compare','rp_vps_plan','rp_vps_openvz_plan','rp_vps_openvz_plan_2','rp_vps_kvm_plans_short','rp_vps_openvz_plans_short'),
	'vps_openvz_hosting' => array('rp_vps_openvz_plan','rp_vps_openvz_plan_2','rp_vps_openvz_plans_short'),
	'vps_virtuozzo_hosting' => array('rp_vps_plan','rp_vps_virtuozzo_plans_short'),
	'vps_kvm_hosting' => array('rp_vps_kvm_plan','rp_vps_kvm_plans_short'),
	'semi_dedicated_hosting' => array('rp_semi_dedicated_plan','rp_semi_dedicated_plans_short'),
	'dedicated_hosting' => array('rp_dedicated_plan','rp_dedicated_plans_short'),
	'whyus' => array('rp_whyus_1','rp_whyus_2'),
	'datacenters' => array(1,2),
	'articles' => array(1,2,3),
	'application_installer' => array('rp_application_installer_1', 'rp_application_installer_2'),
);

function get_default_urls()
{
	$ret = array();
	foreach($GLOBALS['durls'] as $key=>$value)
		if(is_array($value)) $ret[$key] = $value[rand(0,count($value)-1)];
	return $ret;
}

$GLOBALS['dboxes'] = array('customer_support','datacenters','hepsia_cp','email_manager','web_accelerators','click_installer','domain_manager');

function get_default_boxes($count=4)
{
	if($count > count($GLOBALS['dboxes']) or $count<1) $count = 4;
	$arr = array_rand(array_flip($GLOBALS['dboxes']), (int)$count);
	$dc_key = array_search('datacenters',$arr);
	if($dc_key !== false) $arr[$dc_key] = 'datacenters_'.rand(1,2);
	return $arr;
}

function get_default_articles_order()
{
	$articles = array();
	foreach($GLOBALS['rp_install_pages'] as $page=>$options)
	{
		if($options['type'] == 'article' and $page != 'rp_articles_main') $articles[] = $page;
	}
	shuffle($articles);
	return $articles;
}

function _rp_replace_references($matches)
{
	if(isset($GLOBALS['rp_string_references'][$matches[1]])) return trim($GLOBALS['rp_string_references'][$matches[1]]);
	
	if(preg_match('/^page_link=(.+)$/',$matches[1],$m))
		if(!empty($m[1]))
			return trim(preg_replace('/url/',$m[1],$GLOBALS['rp_string_references']['page_link']));
	
	if(preg_match('/^default_page_link=(.+)$/',$matches[1],$m))
		if(!empty($m[1]))
			return trim(preg_replace('/type/',$m[1],$GLOBALS['rp_string_references']['default_page_link']));
			
	if(preg_match('/^min_price_tld=(.+)$/',$matches[1],$m))
		if(!empty($m[1]))
			return trim(preg_replace('/tld/',$m[1],$GLOBALS['rp_string_references']['min_price_tld']));
			
}

function _rp_replace_text_template($matches)
{
	$GLOBALS['rp_strings'][$matches[1]] = trim($GLOBALS['store_texts'][$matches[1]]);
	if(!empty($GLOBALS['store_texts'][$matches[1]])) return trim($GLOBALS['store_texts'][$matches[1]]);
	else{
		//echo '{{'.$matches[1].'}}<br />';
		return '{{'.$matches[1].'}}';
	}
}

function rp_install($call = 'install'){
	$rp_settings = get_option('rp_settings');
	
	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: start install');
	global $rp_install_pages;

	foreach ($rp_install_pages as $option => $cnt){
		// don't update selected pages
		if (
			in_array($option, (array) $rp_settings['noupdate']) && 
			!in_array($option, array('rp_application_installer_1', 'rp_application_installer_2', 'rp_openrealty_hosting', 'rp_moodle_hosting'))
		)
			continue;

		//logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: update page - '.$option);
		if ($id = get_option($option)){
			wp_update_post( array(
				'ID' => $id,
				'post_title' => $cnt['title'],
				'post_content' => $cnt['content'],
				'post_type' => 'page',
				'post_status' => 'publish'
			));
		}
		else{
			$id = wp_insert_post( array(
				'post_title'	=> $cnt['title'],
				'post_content'	=> $cnt['content'],
				'post_status'	=> 'publish',
				'post_type'		=> 'page',
				'post_author'	=> 1,
			));
			update_option($option, $id);
		}
		if(isset($cnt['meta_title'])) update_post_meta($id, 'rpwp_meta_title', $cnt['meta_title']);
		if(isset($cnt['meta_description'])) update_post_meta($id, 'rpwp_meta_description', $cnt['meta_description']);
		if(isset($cnt['meta_keywords'])) update_post_meta($id, 'rpwp_meta_keywords', $cnt['meta_keywords']);
	}
	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: insert/update pages complete');
	$rp_settings['plugin_version'] = plugin_get_version();
	if(!is_array($rp_settings['default_urls'])) $rp_settings['default_urls'] = get_default_urls();
	if(!is_array($rp_settings['default_sitebar_boxes'])){
		$rp_settings['default_sitebar_boxes']['404'] = get_default_boxes(3);
		$rp_settings['default_sitebar_boxes']['rp_single_shared'] = get_default_boxes(4);
		$rp_settings['default_sitebar_boxes']['rp_single_vps_openvz'] = get_default_boxes(2);
		$rp_settings['default_sitebar_boxes']['rp_single_vps_kvm'] = get_default_boxes(4);
		$rp_settings['default_sitebar_boxes']['rp_single_semi_dedicated'] = get_default_boxes(4);
		$rp_settings['default_sitebar_boxes']['rp_single_dedicated'] = get_default_boxes(3);
		$rp_settings['default_sitebar_boxes']['rp_videos'] = get_default_boxes(3);
		$rp_settings['default_sitebar_boxes']['rp_articles_main'] = get_default_boxes(4);
	}
	if(!is_array($rp_settings['default_articles_order'])){
		$rp_settings['default_articles_order'] = get_default_articles_order();
	}
	update_option('rp_settings', $rp_settings);
	
	if($call != 'update'){
		logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: update htaccess rules and wp link structure');

		if (!is_object($GLOBALS['wp_rewrite']))
			$GLOBALS['wp_rewrite'] = new WP_Rewrite();

		$GLOBALS['wp_rewrite']->set_permalink_structure('/%postname%/');
		create_initial_taxonomies();
		$GLOBALS['wp_rewrite']->using_index_permalinks();
		$GLOBALS['wp_rewrite']->flush_rules(true);
	}
	//rp_update_rules();
}

function rp_install_plan_pages()
{	
	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: start install single plan pages');
	global $rp_plan_pages;
	$plan_pages = array();
	if(is_array($GLOBALS['rp_info']['shared_plans'])){
		foreach($GLOBALS['rp_info']['shared_plans'] as $key=>$value)
		{
			$plan_pages['rp_single_shared_'.$key] = array('cnt'=>$rp_plan_pages['rp_single_shared'], 'plan'=>$value);
		}
	}
	if(is_array($GLOBALS['rp_info']['vps_plans'])){
		foreach($GLOBALS['rp_info']['vps_plans'] as $key=>$value)
		{
			$plan_pages['rp_single_vps_virtuozzo_'.$key] = array('cnt'=>$rp_plan_pages['rp_single_vps_virtuozzo'], 'plan'=>$value);
		}
	}
	if(is_array($GLOBALS['rp_info']['vps_kvm_plans'])){
		foreach($GLOBALS['rp_info']['vps_kvm_plans'] as $key=>$value)
		{
			$plan_pages['rp_single_vps_kvm_'.$key] = array('cnt'=>$rp_plan_pages['rp_single_vps_kvm'], 'plan'=>$value);
		}
	}
	if(is_array($GLOBALS['rp_info']['vps_openvz_plans'])){
		foreach($GLOBALS['rp_info']['vps_openvz_plans'] as $key=>$value)
		{
			$plan_pages['rp_single_vps_openvz_'.$key] = array('cnt'=>$rp_plan_pages['rp_single_vps_openvz'], 'plan'=>$value);
		}
	}
	if(is_array($GLOBALS['rp_info']['semi_dedicated_plans'])){
		foreach($GLOBALS['rp_info']['semi_dedicated_plans'] as $key=>$value)
		{
			$plan_pages['rp_single_semi_dedicated_'.$key] = array('cnt'=>$rp_plan_pages['rp_single_semi_dedicated'], 'plan'=>$value);
		}
	}
	if(is_array($GLOBALS['rp_info']['dedicated_plans'])){
		foreach($GLOBALS['rp_info']['dedicated_plans'] as $key=>$value)
		{
			$plan_pages['rp_single_dedicated_'.$key] = array('cnt'=>$rp_plan_pages['rp_single_dedicated'], 'plan'=>$value);
		}
	}
	
	if(count($plan_pages) == 0) return false;
	
	if(!is_array($GLOBALS['rp_settings'])) $GLOBALS['rp_settings'] = get_option('rp_settings');
	
	foreach ($plan_pages as $option => $cnt){
		if(in_array($option,(array)$GLOBALS['rp_settings']['noupdate'])) continue; // don't update selected pages
		$cnt['cnt']['content'] = preg_replace('/\[rp_plans/','[rp_plan_single plan="'.$cnt['plan']['rp_product_id'].'"', $cnt['cnt']['content']);
		$cnt['cnt']['content'] = preg_replace('/\[\/rp_plans/','[/rp_plan_single', $cnt['cnt']['content']);
		if ($id = get_option($option)){
			wp_update_post( array(
				'ID' => $id,
				'post_title' => $cnt['plan']['name'].' '.$cnt['cnt']['title'],
				'post_content' => $cnt['cnt']['content'],
				'post_type' => 'page',
				'post_status' => 'publish'
			));
		}
		else{
			$id = wp_insert_post( array(
				'post_title'	=> $cnt['plan']['name'].' '.$cnt['cnt']['title'],
				'post_content'	=> $cnt['cnt']['content'],
				'post_status'	=> 'publish',
				'post_type'		=> 'page',
				'post_author'	=> 1,
			));
			update_option($option, $id);
		}
		if(isset($cnt['meta_title'])) update_post_meta($id, 'rpwp_meta_title', $cnt['cnt']['meta_title']);
		if(isset($cnt['meta_description'])) update_post_meta($id, 'rpwp_meta_description', $cnt['cnt']['meta_description']);
		if(isset($cnt['meta_keywords'])) update_post_meta($id, 'rpwp_meta_keywords', $cnt['cnt']['meta_keywords']);
	}
	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: insert/update single plan pages complete');
	
	$plan_keys = array_keys($plan_pages);
	if(is_array($GLOBALS['rp_settings']['single_plan_pages'])){
		foreach($GLOBALS['rp_settings']['single_plan_pages'] as $value){
			if(!in_array($value,$plan_keys) and !in_array($value,(array)$GLOBALS['rp_settings']['noupdate'])){
				wp_delete_post(get_option($value),true);
				delete_option($value);
			}	
		}
	}
	unset($GLOBALS['rp_settings']['single_plan_pages']);
	$GLOBALS['rp_settings']['single_plan_pages'] = $plan_keys;
	update_option('rp_settings', $GLOBALS['rp_settings']);
}

function rp_install_footer_links() {
	if(!is_array($GLOBALS['rp_settings'])) $GLOBALS['rp_settings'] = get_option('rp_settings');
		unset($GLOBALS['rp_settings']['footer_article_links']);
	
	if(empty($GLOBALS['rp_settings']['footer_article_links'])){
		logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: start footer links install');
		$arrArticles = array();
		foreach ($GLOBALS['rp_install_pages'] as $key => $page) {
			if (empty($page['type']) || $page['type'] != 'article')
				continue; // not article

			if ($key == 'rp_articles_main')
				continue; // main article page

			if (strpos($key, 'rp_article_reseller_hosting_') !== false)
				continue;

			$arrArticles[] = preg_replace('/_\d$/','',$key);
		}
		if (count($arrArticles) > 3)
			$selarrArticles = array_rand(array_flip($arrArticles), 5);
		else
			$selarrArticles = $arrArticles;

		$GLOBALS['rp_settings']['footer_article_links'] = $selarrArticles;

		update_option('rp_settings', $GLOBALS['rp_settings']);
	}
	return;
}

function rp_get_page_keys(){
	$keys = array_keys($GLOBALS['rp_install_pages']);
	$rp_settings = get_option('rp_settings');
	if(!empty($rp_settings['single_plan_pages']) && is_array($rp_settings['single_plan_pages']))
		$keys = array_merge($keys,$rp_settings['single_plan_pages']);
	$ret = array();
	foreach($keys as $key)
		$ret[$key] = get_option($key);
		
	return $ret;
}

function rp_remove(){
	global $rp_install_pages;
	$rp_settings = get_option('rp_settings');
	
	foreach($rp_install_pages as $key => $page){
		if(in_array($key,(array)$rp_settings['noupdate'])) continue; // don't delete selected pages
		wp_delete_post(get_option($key),true);
		delete_option($key);
	}
	
	
	// Delete plugin settings
	unset($rp_settings['store_texts']);
	update_option('rp_settings', $rp_settings );
}

function rp_update(){
	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: start update');
	rp_remove();
	rp_install('update');
}

function rp_update_rules(){
  logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: start htaccess update for the order');
  if(empty($GLOBALS['rp_info']['store_name'])) return;
  $order_path = parse_url(get_permalink(get_option('rp_order_form')),PHP_URL_PATH);
  $shared_order_path = parse_url(get_permalink(get_option('rp_shared_order_form')),PHP_URL_PATH);
  $vps_virtuozzo_order_path = parse_url(get_permalink(get_option('rp_vps_virtuozzo_order_form')),PHP_URL_PATH);
  $vps_kvm_order_path = parse_url(get_permalink(get_option('rp_vps_kvm_order_form')),PHP_URL_PATH);
  $vps_openvz_order_path = parse_url(get_permalink(get_option('rp_vps_openvz_order_form')),PHP_URL_PATH);
  $semi_dedicated_order_path = parse_url(get_permalink(get_option('rp_semi_dedicated_order_form')),PHP_URL_PATH);
  $dedicated_order_path = parse_url(get_permalink(get_option('rp_dedicated_order_form')),PHP_URL_PATH);
  
  $err400_path = parse_url(get_permalink(get_option('rp_error_400')),PHP_URL_PATH);
  $err401_path = parse_url(get_permalink(get_option('rp_error_401')),PHP_URL_PATH);
  $err403_path = parse_url(get_permalink(get_option('rp_error_403')),PHP_URL_PATH);
  $err500_path = parse_url(get_permalink(get_option('rp_error_500')),PHP_URL_PATH);
  $blog_path = parse_url(get_bloginfo('url'),PHP_URL_PATH);
  $plugin_path = parse_url(plugin_dir_url( __FILE__ ),PHP_URL_PATH);
  if(empty($order_path) or $order_path == '/' or $order_path == $blog_path) return;
  if(substr($order_path, -1, 1) != '/') $order_path .= '/';
  $order_path = str_replace($blog_path,'',$order_path);
  $order_path = preg_replace('/^\//','',$order_path);
  
  if(!empty($shared_order_path)){
	  if(substr($shared_order_path, -1, 1) != '/') $shared_order_path .= '/';
	  $shared_order_path = str_replace($blog_path,'',$shared_order_path);
	  $shared_order_path = preg_replace('/^\//','',$shared_order_path);
	  $shared_insert = "\n".'RewriteRule '.$shared_order_path.'([^\?]+) '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]';
  }
  
  if(!empty($vps_virtuozzo_order_path)){
	  if(substr($vps_virtuozzo_order_path, -1, 1) != '/') $vps_virtuozzo_order_path .= '/';
	  $vps_virtuozzo_order_path = str_replace($blog_path,'',$vps_virtuozzo_order_path);
	  $vps_virtuozzo_order_path = preg_replace('/^\//','',$vps_virtuozzo_order_path);
	  $vps_virtuozzo_insert = "\n".'RewriteRule '.$vps_virtuozzo_order_path.'([^\?]+) '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]';
  }
  
  if(!empty($vps_kvm_order_path)){
	  if(substr($vps_kvm_order_path, -1, 1) != '/') $vps_kvm_order_path .= '/';
	  $vps_kvm_order_path = str_replace($blog_path,'',$vps_kvm_order_path);
	  $vps_kvm_order_path = preg_replace('/^\//','',$vps_kvm_order_path);
	  $vps_kvm_insert = "\n".'RewriteRule '.$vps_kvm_order_path.'([^\?]+) '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]';
  }
  
  if(!empty($vps_openvz_order_path)){
	  if(substr($vps_openvz_order_path, -1, 1) != '/') $vps_openvz_order_path .= '/';
	  $vps_openvz_order_path = str_replace($blog_path,'',$vps_openvz_order_path);
	  $vps_openvz_order_path = preg_replace('/^\//','',$vps_openvz_order_path);
	  $vps_openvz_insert = "\n".'RewriteRule '.$vps_openvz_order_path.'([^\?]+) '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]';
  }
  
  if(!empty($semi_dedicated_order_path)){
	  if(substr($semi_dedicated_order_path, -1, 1) != '/') $semi_dedicated_order_path .= '/';
	  $semi_dedicated_order_path = str_replace($blog_path,'',$semi_dedicated_order_path);
	  $semi_dedicated_order_path = preg_replace('/^\//','',$semi_dedicated_order_path);
	  $semi_dedicated_insert = "\n".'RewriteRule '.$semi_dedicated_order_path.'([^\?]+) '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]';
  }
  
  if(!empty($dedicated_order_path)){
	  if(substr($dedicated_order_path, -1, 1) != '/') $dedicated_order_path .= '/';
	  $dedicated_order_path = str_replace($blog_path,'',$dedicated_order_path);
	  $dedicated_order_path = preg_replace('/^\//','',$dedicated_order_path);
	  $dedicated_insert = "\n".'RewriteRule '.$dedicated_order_path.'([^\?]+) '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]';
  }
  
  $insertion = array(
	  'ErrorDocument 400 '.$err400_path,
	  'ErrorDocument 401 '.$err401_path,
	  'ErrorDocument 403 '.$err403_path,
	  'ErrorDocument 500 '.$err500_path,
	  '<IfModule mod_rewrite.c>',
	  'RewriteEngine On'.$shared_insert.$vps_virtuozzo_insert.$vps_kvm_insert.$vps_openvz_insert.$semi_dedicated_insert.$dedicated_insert,
	  'RewriteRule '.$order_path.'(.+\.(css|js|gif|png|webp|jp?g|php))$ '.$plugin_path.'rp_proxy.php?store_name='.$GLOBALS['rp_info']['store_name'].'&uri=$1&redirect_params=%{QUERY_STRING} [L]',
	  'RewriteRule stockcheck.php ' . $plugin_path . 'stock-check.php?store_name=' . $GLOBALS['rp_info']['store_name'] . ' [L]',
	  '</IfModule>'
  ); 
  $home_path = rp_get_home_path();
  $htaccess_file = $home_path.'.htaccess';
  if ((!file_exists($htaccess_file) && is_writable($home_path)) || is_writable($htaccess_file)) {
  	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: htaccess is writable');
	  $is_here = rp_extract_from_markers($htaccess_file, 'ResellersPanel');
	  if(empty($is_here))
	  {
  		  logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: htaccess without ResellersPanel entries, put order entries');
		  $content = "# BEGIN ResellersPanel\n".implode("\n",$insertion)."\n# END ResellersPanel\n\n".file_get_contents($htaccess_file);
		  file_put_contents($htaccess_file, $content, LOCK_EX);
	  }else{
		  logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: htaccess with ResellersPanel entries, put order entries');
		  rp_insert_with_markers( $htaccess_file, 'ResellersPanel', $insertion );
	  }
  }
}

if(rp_is_plugin_active('resellerspanel/resellerspanel.php') and version_compare($GLOBALS['rp_settings']['plugin_version'], plugin_get_version(), '<'))
{ 
	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: new plugin available, call handler: admin init, function: rp_update, rp_settings='.serialize($GLOBALS['rp_settings']));
	add_action('admin_init','rp_update');
	//add_action('admin_init','rp_update_rules');
}

/* Runs when plugin is activated */
register_activation_hook( dirname(dirname(__FILE__)).'/resellerspanel.php' , 'rp_install' ); 

/* Runs on plugin deactivation*/
register_deactivation_hook( dirname(dirname(__FILE__)).'/resellerspanel.php' , 'rp_remove' );






/**
 * {@internal Missing Short Description}}
 *
 * @since 1.5.0
 *
 * @param unknown_type $filename
 * @param unknown_type $marker
 * @return array An array of strings from a file (.htaccess ) from between BEGIN and END markers.
 */
function rp_extract_from_markers( $filename, $marker ) {
	$result = array ();

	if (!file_exists( $filename ) ) {
		return $result;
	}

	if ( $markerdata = explode( "\n", implode( '', file( $filename ) ) ));
	{
		$state = false;
		foreach ( $markerdata as $markerline ) {
			if (strpos($markerline, '# END ' . $marker) !== false)
				$state = false;
			if ( $state )
				$result[] = $markerline;
			if (strpos($markerline, '# BEGIN ' . $marker) !== false)
				$state = true;
		}
	}

	return $result;
}

/**
 * {@internal Missing Short Description}}
 *
 * Inserts an array of strings into a file (.htaccess ), placing it between
 * BEGIN and END markers. Replaces existing marked info. Retains surrounding
 * data. Creates file if none exists.
 *
 * @since 1.5.0
 *
 * @param unknown_type $filename
 * @param unknown_type $marker
 * @param unknown_type $insertion
 * @return bool True on write success, false on failure.
 */
function rp_insert_with_markers( $filename, $marker, $insertion ) {
	if (!file_exists( $filename ) || is_writeable( $filename ) ) {
		if (!file_exists( $filename ) ) {
			$markerdata = '';
		} else {
			$markerdata = explode( "\n", implode( '', file( $filename ) ) );
		}

		if ( !$f = @fopen( $filename, 'w' ) )
			return false;

		$foundit = false;
		if ( $markerdata ) {
			$state = true;
			foreach ( $markerdata as $n => $markerline ) {
				if (strpos($markerline, '# BEGIN ' . $marker) !== false)
					$state = false;
				if ( $state ) {
					if ( $n + 1 < count( $markerdata ) )
						fwrite( $f, "{$markerline}\n" );
					else
						fwrite( $f, "{$markerline}" );
				}
				if (strpos($markerline, '# END ' . $marker) !== false) {
					fwrite( $f, "# BEGIN {$marker}\n" );
					if ( is_array( $insertion ))
						foreach ( $insertion as $insertline )
							fwrite( $f, "{$insertline}\n" );
					fwrite( $f, "# END {$marker}\n" );
					$state = true;
					$foundit = true;
				}
			}
		}
		if (!$foundit) {
			fwrite( $f, "\n# BEGIN {$marker}\n" );
			foreach ( $insertion as $insertline )
				fwrite( $f, "{$insertline}\n" );
			fwrite( $f, "# END {$marker}\n" );
		}
		fclose( $f );
		return true;
	} else {
		return false;
	}
}

function plugin_get_version(){
	if ( ! function_exists( 'get_plugins' ) )
		require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	$plugin_folder = get_plugins( '/' . plugin_basename( dirname(dirname(__FILE__)) ) );
	return $plugin_folder['resellerspanel.php']['Version'];
}
function rp_is_plugin_active($plugin) {
    return in_array( $plugin, (array) get_option( 'active_plugins', array() ) );
}
function rp_get_home_path() {
	$home = get_option( 'home' );
	$siteurl = get_option( 'siteurl' );
	if ( ! empty( $home ) && 0 !== strcasecmp( $home, $siteurl ) ) {
		$wp_path_rel_to_home = str_ireplace( $home, '', $siteurl );
		$pos = strripos( str_replace( '\\', '/', $_SERVER['SCRIPT_FILENAME'] ), $wp_path_rel_to_home);
		$home_path = substr( $_SERVER['SCRIPT_FILENAME'], 0, $pos );
		$home_path = trailingslashit( $home_path );
	} else {
		$home_path = ABSPATH;
	}

	return $home_path;
}

function logAdd($string)
{
	$filename = dirname(dirname( __FILE__ )) . '/tmp/log.txt';
	if (!($fp = @fopen($filename, 'a')))
		return false;	
	if (!@flock($fp, LOCK_EX))
		return false;
	
	$date = date("D M j G:i:s").': ';
	@fwrite($fp, $date, strlen($date));
	@fwrite($fp, $string, strlen($string));
	@fwrite($fp, "\n");
	
	@fflush($fp);
	@flock($fp, LOCK_UN);
	@fclose($fp);
}
