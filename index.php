<?php
$subject = "You have an email from NETSVS Meetup!";
$from_message = "";
if(!empty($_POST['cb'])){
     foreach($_POST['cb'] as $report_id){

        $from_message .= " ". $report_id;
     }
   }

$from_email = $_POST["email"];
$message = "User ". $from_email." would like to request the following case studies:  " .$from_message;

// Put Email Here
 $to = "cdadams1888@gmail.com";

$headers = 'From: noreply@email.com' . "\r\n" .
    'Reply-To: noreply@email.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 mail ($to , $subject , $message, $headers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>NETSVS - Meetup Coming Soon</title>

	<!-- CSS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,300,100,100italic,300italic,400italic,700,700italic">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/form-elements.css">
	<link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media-queries.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="assets/img/netsvsLogo.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>

	<!-- Top menu -->
	<nav>
		<a class="menu-top" href="">Top</a>
		<a class="menu-project" href="">Our Sponsors</a>
		<a class="menu-testimonials" href="">RPA Overview</a>
		<a class="menu-about-us" href="">Our Speakers</a>
		<a class="menu-contact" href="">Case Studies</a>
		<div class="hide-menu">
			<a href="" rel="tooltip" data-placement="bottom" data-original-title="Hide menu">
				<i class="fa fa-bars"></i>
			</a>
		</div>
	</nav>
	<div class="show-menu">
		<a href="" rel="tooltip" data-placement="bottom" data-original-title="Show menu">
			<i class="fa fa-bars"></i>
		</a>
	</div>

	<!-- Coming Soon -->
	<div id="coming-soon" class="coming-soon">
		<div class="inner-bg" style="background-color: #e1eef6;">
			<div class="container">
				<div class="row">
					<img class="mainHeaderLogo" src="assets/img/netsvsLogo.png" id="mainHeaderLogo">
					<div id="timer-container" class="col-sm-12">
						<h2 id="mainHeaderh2">Meetup Coming Soon</h2>
						<!--<p id="mainHeaderP">-->
						<!--Time remaining until our next meetup:-->
						<!--</p>-->
						<div class="timer" id="timerDiv">
							<div class="days-wrapper">
								<span class="days"></span> <br><br>days
							</div>
							<div class="hours-wrapper">
								<span class="hours"></span> <br><br>hours
							</div>
							<div class="minutes-wrapper">
								<span class="minutes"></span> <br><br>minutes
							</div>
							<div class="seconds-wrapper">
								<span class="seconds"></span> <br><br>seconds
							</div>
						</div>
						<p id="chevronArrow" class="top-arrow">
							<i class="fa fa-chevron-down"></i>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Sponsors -->
	<div class="container about-container">
		<div class="row">
			<div class="col-sm-12 about">
				<h3>Our Sponsors</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 about-box-1">
				<div class="about-box-1-icon">
					<!--<i class="fa fa-eye"></i>-->
					<img class="logoStyles" src="assets/img/netsvsLogo.png">
				</div>
				<h4>Net Synergy Virtual Solutions</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					labore et.
				</p>
			</div>
			<div class="col-sm-4 about-box-1">
				<div class="about-box-1-icon">
					<i class="fa fa-table"></i>
				</div>
				<h4>Kofax</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					labore et.
				</p>
			</div>
			<div class="col-sm-4 about-box-1">
				<div class="about-box-1-icon">
					<i class="fa fa-pencil"></i>
				</div>
				<h4>Flat Design</h4>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					labore et.
				</p>
			</div>
		</div>
	</div>

	<!-- RPA Overview -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 testimonials">
				<h3 style="color: #3d3d3d;">RPA Overview</h3>
				<div class="col-md-6">
					<p style="text-align: left;">
						<span id="capitalLetterRobot">R</span>obot automation is here to stay and companies are increasingly realizing the need to adopt in order to gain a competitive edge.
						Robotic Process Automation (RPA)delivers direct profitability while improving accuracy across organizations and industries, often
						allowing employees to move on from the mundane repetitive tasks and on to real issue where their skills can be better used.
						In addition, RPA platforms can run 24-7, automating repetitive tasks by using software robots to interpret, trigger responses and communicate with other enterprise systems.
					</p>
					<p style="text-align: left;">
						<span id="capitalLetterEvery">E</span>very day, more companies are using RPA to transform and streamline their various workflows. RPA allows for increased flexibility and scalability
						throughout the enterprise, allowing for strategic and quick time to value responses to recognized needs.
						RPA platforms can range from the simple; easily trained by non-technical personal to the complex, involving; data extraction,
						data warehousing, data pipeline creation, scalable cloud infrastructure and micro service based web services.
					</p>
				</div>
				<!--<div class="col-md-4">-->

				<!--</div>-->
				<!--<div class="col-md-4">-->

				<!--</div>-->
				<br>
				<br>
				<div class="col-md-6" style="background-color: #e1eef6;">
					<p style="text-align: left;">
						<strong><u>Agenda</u></strong><br>
						<strong>5:00 pm</strong> –Check In & Refreshments<br>
						<strong>6:00 pm</strong> –Presentations<br>
						<strong>7:20 pm</strong> –Open Discussion –Where Can RPA Help You, Open Q&A<br>
						<strong>7:50 pm</strong> –Closing Remarks/Giveaway Prizes<br><br>
						<strong><u>Topics will include:</u></strong><br>
						What is Robot Process Automation (RPA)?<br>
						Smart or Dumb Robots?<br>
						Machine Learning and RPA<br>
						Robots sometimes REST!!<br>
						Combining data centric RPA and ETL to create synthetic REST APIs<br>
						Examples of RPA at work (Overview of use cases with ROI)<br>
						Deeper Dive into RPA at work (Automating Market Research)
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Our Speakers -->
	<div class="container">
		<div class="col-sm-12 whos-behind">
			<h3>Our Speaker</h3>
			<div class="row well"> <div>
				<div id="myCarousel" class="vertical-slider carousel vertical slide col-sm-10 center-block" data-ride="carousel">
					<div class="row">
						<div class="col-md-4">
						<span data-slide="next" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-up "
							  style="font-size: 30px"></span>
						</div>
						<div class="col-md-8">
						</div>
					</div>
					<br />
					<!-- Carousel items -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-xs-6 col-sm-5 col-md-5">
									<a href="http://dotstrap.com/"> <img src="assets/img/team/cMorancie.png" class="thumbnail"
																		 alt="Speaker Chris Morancie" /></a>
								</div>
								<div class="col-xs-6 col-sm-7 col-md-7">
									Chris Morancie is the CTO and lead RPA architect at Net Synergy Virtual Solutions. He has more than 10 years of data automation professional experience with various languages,
									technologies, frameworks, methodologies, and tools.
								</div>
							</div>
							<!--/row-fluid-->
						</div>
						<!--/item-->
						<div class="item ">
							<div class="row">
								<div class="col-xs-6 col-sm-5 col-md-5">
									<a href="http://dotstrap.com/"> <img src="assets/img/team/cMorancie.png" class="thumbnail"
																		 alt="Speaker Chris Morancie" /></a>
								</div>
								<div class="col-xs-6 col-sm-7 col-md-7">
									His passion is to deliver end to end data centric RPA solutions infused with ETL, Microservices and REST principles.
								</div>
							</div>
							<!--/row-fluid-->
						</div>
						<!--/item-->
						<div class="item ">
							<div class="row">
								<div class="col-xs-6 col-sm-5 col-md-5">
									<a href="http://dotstrap.com/"> <img src="assets/img/team/cMorancie.png" class="thumbnail"
																		 alt="Speaker Chris Morancie" /></a>
								</div>
								<div class="col-xs-6 col-sm-7 col-md-7">
									He has delivered high ROI solutions across numerous industries, building and advising on solutions for companies such as ManPower (HR),
									UBS Wealth (Investor Research), Plaid (FinTech), Barclay (Compliance), C.H. Robinson (Transportation), PriceStats (Price Monitoring) and more.
								</div>
							</div>
							<!--/row-fluid-->
						</div>
						<!--/item-->
					</div>
					<div class="row">
						<div class="col-md-4">
						<span data-slide="prev" class="btn-vertical-slider glyphicon glyphicon-circle-arrow-down"
							  style="color: Black; font-size: 30px"></span>
						</div>
						<div class="col-md-8">
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

	<!-- Case studies here -->
	<form role="form" action="" method="post" name="sendemail" target="_self">
		<div class="container">
			<div class="main">
				<div class="col-sm-12 contact">
					<h3>Case Studies</h3>
					<p>
						Select the case studies that you would like to receive more information on.
					</p>
				</div>
			</div>

			<div id="boxContainer">
				<div class="box" onmouseover="additionalTextCaseStudy1();" onmouseout="originalTextCaseStudy1();">
					<img src="http://www.planwallpaper.com/static/images/Eiffel-Tower-lanscape-Wallpaper-HD.jpg" />
					<div class="overlay">
						<h4>NetApp</h4>
						<p id="caseStudy1OriginalText" class="box_p"><strong>NetApp was looking to deploy an Enterprise Search solution that would
							allow customers to find the critical customer service information. By
							doing so, NetApp hoped to greatly reduce customer reliance on costly
							and inefficient phone-based support and to enable customers to easily
							locate the answers to their support questions online.</strong></p>
						<ul id="caseStudy1AdditionalText" class="box_p" style="display: none;"><strong>
							<li>Project was completed at 50% of original budgeted cost.</li>
							<li>All searchable content was complaint with access control policy.</li>
							<li>Customer satisfaction improved, Customer Service costs reduced.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb1" value="NetApp">
						<label for="cb1">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy2();" onmouseout="originalTextCaseStudy2();">
					<img src="http://www.planwallpaper.com/static/images/colorful-easter-eggs-holiday-hd-wallpaper-1920x1200-10811.jpg" />
					<div class="overlay">
						<h4>Schultz</h4>
						<p id="caseStudy2OriginalText" class="box_p"><strong>There are hundreds of government websites with hundreds of thousands of legislative documents,
							legal sub-documents and sub-paragraphs to scan,compare and evaluate on a frequent and recurring basis. In addition,legal documents have multiple
							levels, interrelationships and links that also change unpredictably. Schultz’s domain experts “translate” legal content revisions into
							useful information so customers can easily see what has changed.</strong></p>
						<ul id="caseStudy2AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Improved efficiency in managing 350,000 metadata records with 1 million relationships</li>
							<li>The system delivers high-value, market-leading solutions</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb2" value="Schultz">
						<label for="cb2">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy3();" onmouseout="originalTextCaseStudy3();">
					<img src="http://www.planwallpaper.com/static/images/Eiffel-Tower-lanscape-Wallpaper-HD.jpg" />
					<div class="overlay">
						<h4>Global Research and Consultancy Company</h4>
						<p id="caseStudy3OriginalText" style="display:block;" class="box_p"><strong>Clients from all over the world rely on the global research and consultancy
							company for trusted insights on every sector of the global energy, metals and
							mining industries. To Develop the North America Well Analysis Tool, the group needed a consistent and streamlined way to acquire big volumes of data.
							It wanted to empower teams with easy access to timely, accurate information, so that they could focus on analysis and research work. Driving a standardized
							approach to data aggregation was also a priority, as this would allow the company to ensure that the data was collected and used in full compliance with
							providers’ terms and conditions and copyrights.</strong></p>
						<ul id="caseStudy3AdditionalText" style="display: none;" class="box_p"> <strong>
							<li>Over 95% reduction in person-hours required for data collection.</li>
							<li>The time savings means that teams can focus on value-added activities that
								ultimately help the company deliver a better service to its clients.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb3" value="Global Research and Consultancy Company">
						<label for="cb3">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy4();" onmouseout="originalTextCaseStudy4();">
					<img src="http://www.planwallpaper.com/static/images/colorful-easter-eggs-holiday-hd-wallpaper-1920x1200-10811.jpg" />
					<div class="overlay">
						<h4>Data Fabricator GmbH</h4>
						<p id="caseStudy4OriginalText" class="box_p"><strong>With the burden of regulatory and legal requirements and a constant battle for market share
							and consumer confidence, providing transparency and information has become an imperative for energy providers, public utilities and industrial
							companies today. Data Fabricator GmbH helps provide this transparency with individually tailored energy data dashboards built with the help of automation.</strong></p>
						<ul id="caseStudy4AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Energy data from over 75 data sources is being aggregated, transformed, and integrated every 5 minutes using more than 150 defined integration processes
								built with Robotic Process Automation</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb4" value="Data Fabricator GmbH">
						<label for="cb4">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy5();" onmouseout="originalTextCaseStudy5();">
					<img src="http://www.planwallpaper.com/static/images/HD-Wallpapers1_FOSmVKg.jpeg" />
					<div class="overlay">
						<h4>Audi AG</h4>
						<p id="caseStudy5OriginalText" class="box_p"><strong> Audi sought to simplify its business processes across all company web properties into a central portal for everyone.
							Employees were using various freely available online services to perform their daily work, such as using travel and weather sites for business travel planning.
							While using these sites facilitated daily tasks, the process was too slow, cumbersome, inconsistent navigation tools and pop-up ads distracted staff and led to lengthened workflow.</strong></p>
						<ul id="caseStudy5AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Increase usage of the Robotic Process Automation platform by effectively addressing business staff needs through faster turnaround of requests and a more streamlined process.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb5" value="Audi AG">
						<label for="cb5">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy6();" onmouseout="originalTextCaseStudy6();">
					<img src="http://www.planwallpaper.com/static/images/79438-blue-world-map_nJEOoUQ.jpg" />
					<div class="overlay">
						<h4>Arrow Electronics</h4>
						<p id="caseStudy6OriginalText" class="box_p"><strong>Company specialists in product marketing and procurement, the product management team prepares hundreds of custom proposals
							per partner, per week on average. The process steps were often repetitive across suppliers. For a given request, the same information was provided to each supplier, but
							was submitted via different methods—email, pdf form or web portal, depending on the supplier’s process. Offers from suppliers were
							also returned in varying media formats and these had to be manually incorporated into the proposal. Handling suppliers’ invoices was a
							similar, manually intensive and repetitive data entry process—with a significant volume of several hundreds per day.</strong></p>
						<ul id="caseStudy6AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Reduced manual efforts save hundreds of hours/month</li>
							<li>Integrated quickly and flexibly without typical IT project limitations</li>
							<li>Best-practice-based implementation enabled global scalability</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb6" value="Arrow Electronics">
						<label for="cb6">Send me case study</label>
					</div>
				</div>


				<div class="box" onmouseover="additionalTextCaseStudy7();" onmouseout="originalTextCaseStudy7();">
					<img src="http://www.planwallpaper.com/static/images/6768666-1080p-wallpapers.jpg" />
					<div class="overlay">
						<h4>Deutsche Telekom</h4>
						<p id="caseStudy7OriginalText" class="box_p"><strong>Deutsche Telekom M2M Competence Center wanted to provide excellent M2M customer service experience with their
							eCall Service: A smart emergency system installed in cars that—in the event of a serious road accident—reaches out to local emergency agencies wirelessly,
							sending airbag deployment and impact sensor information, as well as GPS coordinates. There were various analysis tasks required (e.g. authentication of the
							SIM card’s serial number, checking activation status, etc.). This process was quite time consuming as it required manual analysis of data that is distributed
							over several applications—some of which could not be integrated into existing solutions because there were no APIs</strong></p>
						<ul id="caseStudy7AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Series of M2M-related enterprise application solutions were built in order to automate time-consuming data access and analysis tasks using Robotic Process
								Automation , without any manual coding and in only a fraction of time.</li>
							<li>eCall-related analysis process was cut down from 90 minutes to just 4 minutes.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb7" value="Deutsche Telekom">
						<label for="cb7">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy8();" onmouseout="originalTextCaseStudy8();">
					<img src="http://www.planwallpaper.com/static/images/6768666-1080p-wallpapers.jpg" />
					<div class="overlay">
						<h4>Union Bank</h4>
						<p id="caseStudy8OriginalText" class="box_p"><strong>Union Bank packages and sell loans. There is a host of related documentation that they need to
							exchange with investors. In the past, it was a struggle to manage all of this content and get it out to the right people in a timely manner. Simply
							converting the original loan documents into electronic files took considerable time and expense. They had to ship the paper documents to a thirdparty
							contractor, then wait for them to scan the files and upload them to our content management system. It could take up to 15 days until the electronic files were available.</strong></p>
						<ul id="caseStudy8AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Reduction in person-hours required for data collection.</li>
							<li>Consolidated and delivered data through a single interface.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb8" value="Union Bank">
						<label for="cb8">Send me case study</label>
					</div>
				</div>
				<div class="box" onmouseover="additionalTextCaseStudy9();" onmouseout="originalTextCaseStudy9();">
					<img src="http://www.planwallpaper.com/static/images/Eiffel-Tower-lanscape-Wallpaper-HD.jpg" />
					<div class="overlay">
						<h4>PITT Ohio</h4>
						<p id="caseStudy9OriginalText" class="box_p"><strong>PITT OHIO found that manually accessing the B2B portals of their trading partners—over 70 in all, each with different
							logins, navigation, transactions, and reports—had become prohibitively expensive. Even more costly was the need to carry out repetitive
							business processes that involved their partners—processes that required PITT OHIO to enter duplicate transactions on multiple
							systems merely to keep them synchronized.</strong></p>
						<ul id="caseStudy9AdditionalText" style="display: none;" class="box_p"><strong>
							<li>100% of routine CSR effort has been eliminated by automating with Robotic Process Automation</li>
							<li>Over 95% reduction in person-hours required for data collection.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb9" value="PITT Ohio">
						<label for="cb9">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy10();" onmouseout="originalTextCaseStudy10();">
					<img src="http://www.planwallpaper.com/static/images/colorful-easter-eggs-holiday-hd-wallpaper-1920x1200-10811.jpg" />
					<div class="overlay">
						<h4>Trinity Logistics</h4>
						<p id="caseStudy10OriginalText" class="box_p"><strong>Trinity needs access to data such as invoices, proofs of delivery, vital documents used to capture new loads, monitor shipment
							status etc.Trinity’s initial approach was to assign staff to access these outside systems and integrate them manually by keying transactions and copying data
							from one system to the next—an approach common to 3PLs. However, The direct cost was very high, and robbed Trinity of resources that could be used to create new business instead.</strong></p>
						<ul id="caseStudy10AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Trinity staff focuses on handling exceptions, not carrying out manual activities, improving margins</li>
							<li>Enabling staff to work on revenue-generating activities improves top-line growth</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb10" value="Trinity Logistics">
						<label for="cb10">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy11();" onmouseout="originalTextCaseStudy11();">
					<img src="http://www.planwallpaper.com/static/images/HD-Wallpapers1_FOSmVKg.jpeg" />
					<div class="overlay">
						<h4>Pharmaceutical Company</h4>
						<p id="caseStudy11OriginalText" class="box_p"><strong>Knowledge is a vital asset for today’s leading pharmaceutical companies.The organization’s challenge was to find a way
							to bring all technical knowledge into a single store to better manage the content... Critical technical process knowledge about their top products were dispersed across
							multiple SharePoint sites and File Shares, comprising almost two million documents. Each product could have up to 15,000 relevant documents.To make things even more complex,
							each team site had different standards, information structures, kinds of content, metadata and access rights. The ultimate goal was to ensure information was consistent and
							based on a standardized template.</strong></p>
						<ul id="caseStudy11AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Reduces document processing costs from $4.00 to between $0.05 and $0.40 per document</li>
							<li>Reduction in person-hours required for data collection.</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb11" value="Pharmaceutical Company">
						<label for="cb11">Send me case study</label>
					</div>
				</div>

				<div class="box" onmouseover="additionalTextCaseStudy12();" onmouseout="originalTextCaseStudy12();">
					<img src="http://www.planwallpaper.com/static/images/79438-blue-world-map_nJEOoUQ.jpg" />

					<div class="overlay">
						<h4>Davies-Turner</h4>
						<p id="caseStudy12OriginalText" class="box_p"><strong>It is vital for Davies Turner to have a clear view of shipments and inventory at all times. In the past,
							order tracking was a reactive and manual process at Davies Turner. When the company received a customer query about an order, the teams would have to visit
							the relevant carrier’s website and search their tracking systems for more information about the shipment. If a team member was unable to find this information
							online, they would have to contact the carrier by phone or email, incurring further delays. On average, it took around 10 to 15 minutes to respond to order tracking requests.</strong></p>
						<ul id="caseStudy12AdditionalText" style="display: none;" class="box_p"><strong>
							<li>Streamlined order and inventory tracking</li>
							<li>Increased the number of shipments tracked by 1000%</li></strong>
						</ul>
					</div>
					<div>
						<input type="checkbox" name="cb[]" id="cb12" value="Davies-Turner">
						<label for="cb12">Send me case study</label>
					</div>
				</div>
			</div>
		</div>
		<!-- End of case studies -->

		<!-- Send case studies -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 contact">
					<h3>Send me the selected case studies!</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7 contact-form">
						<div class="form-group">
							<label class="sr-only" for="contact-email">Email</label>
							<input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email" required>
						</div>
						<button onclick="" type="submit" class="btn">Send</button>
						<div></div>
				</div>
			</div>
		</div>
	</form>
	<!-- End of send case studies -->

	<!-- Start of Personal Case Study -->
	<div class="container">
		<div class="jumbotron">
			<h2>Upload your own case study</h2>
			<p class="lead">We can take the time to review your case study, and possibly discuss it in our next meetup!</p>
			<p class="lead">
				<a class="btn btn-primary btn-lg"href="mailto:someone@example.com?Subject=Hello%20again" target="_top" role="button">Upload</a>
			</p>
		</div>
	</div>
	<!-- End of Personal Case Study -->

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="footer-social">
					<a class="ultm ultm-facebook ultm-48 ultm-square ultm-gray-to-color" href="https://www.facebook.com/NETSVS/" target="_blank"></a>
					<a class="ultm ultm-twitter ultm-48 ultm-square ultm-gray-to-color" href=""></a>
					<a class="ultm ultm-google-plus-1 ultm-48 ultm-square ultm-gray-to-color" href=""></a>
					<a class="ultm ultm-dribbble ultm-48 ultm-square ultm-gray-to-color" href=""></a>
					<a class="ultm ultm-pinterest ultm-48 ultm-square ultm-gray-to-color" href=""></a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/twitter/jquery.tweet.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/jquery.ui.map.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script src="assets/js/caseStudies.js"></script>
	<!--[if lt IE 10]>
	<script src="assets/js/placeholder.js"></script>
	<![endif]-->
	<script>
        // Our Speakers Slider
        $(document).ready(function () {

            $('.btn-vertical-slider').on('click', function () {

                if ($(this).attr('data-slide') == 'next') {
                    $('#myCarousel').carousel('next');
                }
                if ($(this).attr('data-slide') == 'prev') {
                    $('#myCarousel').carousel('prev')
                }

            });
        });

	</script>
    </body>

</html>