<?php
error_reporting(0);
if (isset($_REQUEST['submit_btn'])) {
    $servername = "localhost";
    $username = "cdaaudit_cda";
    $password = "_}y}&PtfEtz!";
    $dbname = "cdaaudit_cda";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $company = '';
    $date = date('Y-m-d');

    $sql = "INSERT INTO contact_enquiry (name, email, phone,company,message,date)
VALUES ('$name', '$email', '$phone','$message','$company','$date')";

    if ($conn->query($sql) === TRUE) {
        $success = 'Your enquiry send successfully';
        require './class.phpmailer.php';
        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->SMTPDebug = 0; // set mailer to use SMTP

        $mail->Host = "smtp.gmail.com";  // specify main and backup server
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->SMTPAuth = true;     // turn on SMTP authentication
        $mail->Username = "info@cdaaudit.com";  // SMTP username
        $mail->Password = "12info34@"; // SMTP password

        $mail->From = "info@cdaaudit.com";
        $mail->FromName = "cdaaudit";
        $mail->AddAddress("info@cdaaudit.com");
        $mail->AddAddress("meenujoze@gmail.com");
        $mail->AddAddress("charles@cdaaudit.com");
        $mail->WordWrap = 50;                                 // set word wrap to 50 characters
        $mail->IsHTML(true);                                  // set email format to HTML

        $mail->Subject = "Enquiry From cdaaudit.com";
        $content = '<div class="msg-box" style="border: 1px solid #9E9E9E;padding: 30px 20px;">
                                                <table style="border-collapse:collapse;width:100%;text-align:left;border:1px solid #c7c4c4;">
                                                    <tr>
                                                        <th style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">Name</th>
                                                        <td style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">' . $name . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">Email</th>
                                                        <td style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">' . $email . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">Phone</th>
                                                        <td style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">' . $phone . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">Message</th>
                                                        <td style="border:1px solid #c7c4c4;text-align:left;padding:5px 10px;">' . $message . '</td>
                                                    </tr>
                                                </table>
                                            </div>';
        $mail->Body = $content;
        $mail->AltBody = $content;
        $mail->Send();
    }
    $conn->close();
}
?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="robots" content="noindex,nofollow">
                <title>CDA : Top Management Consulting Services | Accounting Firms in Dubai | UAE</title>
                <link rel="shortcut icon" href="favicon/icon.png">
                    <!-- Bootstrap -->
                    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
                        <link href="css/stylesheet.css" rel="stylesheet">
                            <link href="css/responsive.css" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
                                    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
                                        </head>
                                        <body>
                                            <div class="quick-contact">
                                                <ul>
                                                    <a href="tel:+971 42 610 089">
                                                        <li>
                                                            <div class="icon"><img class="img-fluid" width="22" src="images/icon/phone2.png" alt="Contact Phone No"></div>
                                                            <span></span>+971 426 100 89</li>
                                                    </a> <a class="mail" href="mailto:info@cdaaudit.com">
                                                        <li>
                                                            <div class="icon icon2"><img class="img-fluid" width="20" src="images/icon/mail-open-outline.png" alt="Contact Email"></div>
                                                            <span></span>info@cdaaudit.com</li>
                                                    </a>
                                                </ul>
                                            </div>
                                            <!--main-right-call-->
                                            <section class="main-section-header"><!--main-section-top"-->
                                                <div class="container">
                                                    <header class="header">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h1 class="logo"><a href="index.html"><img src="images/logo.png" class="img-fluid" alt="Epitome" title="Epitome"></a></h1>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="top-call-box">
                                                                    <div class="call-now"><a href="tel:+971557188763" class="link">Call Now: +971 557 188 763</a></div>
                                                                    <div class="mail"><a href="mailto:info@cdaaudit.com" class="link">Email: info@cdaaudit.com</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </header>
                                                </div>
                                                <section class="banner-section">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="cont-box">
                                                                    <h2 class="sub-head">We provide the <b>Best, Reliable</b>, and <b>Cost-Effective</b> </h2>
                                                                    <h1 class="head-text">Accounting, Auditing, Bookkeeping, and Tax Consultation</h1>
                                                                    <h3 class="sub-head">services in Dubai and all across UAE.</h3>
                                                                    <a href="https://www.cdaaudit.com/contact-us" class="sub-link">contact Now</a> </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-box">
                                                                    <form class="in-main-form" method="post">
                                                                        <p class="text">Fill in the form below, and we'll get back to you within 24 hours.</p>

                                                                        <?php
                                                                        if (isset($success)) {
                                                                            ?>
                                                                            <div id="message">
                                                                                <?php
                                                                                echo $success;
                                                                                ?>
                                                                                <a href="" class="close-msg"><img src="images/icon/error.png" class="img-fluid"></a>
                                                                            </div>
                                                                            <?php
                                                                        }
                                                                        ?>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input name="name" type="text" class="form-control" placeholder="Name" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input name="email" type="text" class="form-control" placeholder="Email" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input name="phone" type="text" class="form-control" placeholder="Phone No" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <textarea name="message" cols="" rows="" class="form-control" placeholder="Message" required></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <input name="submit_btn" type="submit" value="Send Request!" class="submit">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </section>

                                            <!--main-section-top"-->

                                            <section class="home-services-section"><!--home-welcome-section-->
                                                <div class="container">
                                                    <div class="main-heading">
                                                        <h2 class="head"><span>CDA</span> Services</h2>
                                                        <small class="small">Our Services</small> </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-sm-6 service-box"> <a href="https://www.cdaaudit.com/service/advisory-services-or-cfo-services" class="overflow">
                                                                <div class="img-box" style="background: url(images/services/01.jpg)"></div>
                                                            </a>
                                                            <div class="content-box">
                                                                <h4 class="service-tilte">Advisory Services Or CFO Services</h4>
                                                                <p>The Advisory or CFO services from CDA can assist your company to prioritize & organize the strategy, break down & analyze the essential processes, and lift profitability over the long haul.</p>
                                                                <a class="read-more" href="https://www.cdaaudit.com/service/advisory-services-or-cfo-services">Read More</a> </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 service-box"> <a href="https://www.cdaaudit.com/service/management-accounting-bookkeeping" class="overflow">
                                                                <div class="img-box" style="background: url(images/services/02.jpg)"></div>
                                                            </a>
                                                            <div class="content-box">
                                                                <h4 class="service-tilte">Management Accounting & Bookkeeping</h4>
                                                                <p>Our Management Accounting & Bookkeeping services can help you get rid of the legalities or administrative troubles. CDA takes care of all technical and legal aspects of bookkeeping. </p>
                                                                <a class="read-more" href="https://www.cdaaudit.com/service/management-accounting-bookkeeping">Read More</a> </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 service-box"> <a href="https://www.cdaaudit.com/service/internal-audit-restructuring-corporate" class="overflow">
                                                                <div class="img-box" style="background: url(images/services/03.jpg)"></div>
                                                            </a>
                                                            <div class="content-box">
                                                                <h4 class="service-tilte">Internal Audit & Restructuring Corporate</h4>
                                                                <p>CDA provides the best Internal Audit services and is intended to work flawlessly and with brilliant standards. We complete all the internal audits of a firm in light of a risk-based methodology. </p>
                                                                <a class="read-more" href="https://www.cdaaudit.com/service/internal-audit-restructuring-corporate">Read More</a> </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 service-box"> <a href="https://www.cdaaudit.com/service/vat-consultancy-tax-audit" class="overflow">
                                                                <div class="img-box" style="background: url(images/services/04.jpg)"></div>
                                                            </a>
                                                            <div class="content-box">
                                                                <h4 class="service-tilte">VAT Consultancy & Tax Audit</h4>
                                                                <p>Our VAT Consultancy & Tax Audit services can help you achieve hassle-free VAT compliance while saving assets over the long haul. CDA can also assist you with UAE VAT registration. </p>
                                                                <a class="read-more" href="https://www.cdaaudit.com/service/vat-consultancy-tax-audit">Read More</a> </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 service-box"> <a href="https://www.cdaaudit.com/service/accounting-software-support" class="overflow">
                                                                <div class="img-box" style="background: url(images/services/05.jpg)"></div>
                                                            </a>
                                                            <div class="content-box">
                                                                <h4 class="service-tilte">Accounting Software Support</h4>
                                                                <p>Accounting Software Support services from CDA are available for accounting accords like VAT implementation & auditing. We can assist you to set up the best accounting software for you firm.</p>
                                                                <a class="read-more" href="https://www.cdaaudit.com/service/accounting-software-support">Read More</a> </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6 col-sm-6 service-box"> <a href="https://www.cdaaudit.com/service/due-diligence-valuation-services" class="overflow">
                                                                <div class="img-box" style="background: url(images/services/06.jpg)"></div>
                                                            </a>
                                                            <div class="content-box">
                                                                <h4 class="service-tilte">Due Diligence & Valuation Services</h4>
                                                                <p>CDA can deliver the best diligence and valuation services. If you are confused about any acquisition or investment for your company, then our services can help you out with data-based analysis and metrics.</p>
                                                                <a class="read-more" href="https://www.cdaaudit.com/service/due-diligence-valuation-services">Read More</a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!--home-service-section-->
                                            <section class="home-company-features"><!--home-company-features-->
                                                <div class="container">
                                                    <div class="main-heading">
                                                        <h2 class="head">Company Features</h2>
                                                        <p>For the past five years, CDA Accounting and Bookkeeping Services LLC</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-3">
                                                            <div class="cont-box">
                                                                <div class="icon"></div>
                                                                <h3 class="head"><b class="bold">5+ Years </b>of experience in industry</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="cont-box">
                                                                <div class="icon icon2"></div>
                                                                <h3 class="head">More than <b class="bold">300+ Clients</b></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3 col-6">
                                                            <div class="cont-box">
                                                                <div class="icon icon3"></div>
                                                                <h3 class="head"><b class="bold">24/7 </b>Support</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="cont-box">
                                                                <div class="icon icon4"></div>
                                                                <h3 class="head">Cost<b class="bold">Effective </b></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="cont-box">
                                                                <div class="icon icon5"></div>
                                                                <h3 class="head"> <b class="bold">Professional </b> Approach</h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="cont-box">
                                                                <div class="icon icon6"></div>
                                                                <h3 class="head">Customer <b class="bold">Loyalty </b></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <!--home-company-features-->

                                            <section class="home-welcome-section"><!--home-welcome-section-->
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="cont-box">
                                                                <div class="main-heading">
                                                                    <h2 class="head"><span>Who</span> we are</h2>
                                                                    <small class="small">company profile</small> </div>
                                                                <p>CDA Accounting and Bookkeeping Services LLC is one of the best accounting companies in Dubai, UAE. It is a one-stop solution for all your Accounting and Management Consulting needs. From Tax Auditing to Advisory Services, we offer exceedingly proficient and esteemed services to a comprehensive customer base. Being a leading audit firms in Dubai, CDA comprises of a team with accounting experts & professionals who are talented as well as enthusiastic about the services they provide.
                                                                    <p><br>
                                                                            <p >With over 5 years of expertise in accounting services in Dubai, CDA can provide the best outcomes and work experience. We operate across UAE, that means regardless of whether you are searching for Accounts Outsourcing in UAE, Bookkeeping Services in Dubai, Tax Consultant in Abu Dhabi, Auditors in Sharjah, or CFO Services in Ajman, CDA is equipped and ready for delivering </p>
                                                                            <a href="https://www.cdaaudit.com/about-us" class="link">Know More</a> </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="img-box"> <img src="images/welocome-img.jpg" class="img-fluid">
                                                                                        <div class="years-box"> <b class="no">5+</b><span class="text">years experience</span> </div>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            </section>

                                                                            <!--home-work-section-->
                                                                            <section class="home-ready-discuss"><!--home-ready-discuss-->
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col-md-5">
                                                                                            <h4 class="head-text">Ready to discuss your project?</h4>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <div class="get-free-quote"><a href="https://www.cdaaudit.com/contact-us" class="link">Get Free Quote</a></div>
                                                                                        </div>
                                                                                        <div class="col-md-3"> <a href="tel:+971557188763" class="call-now">Call Now: +971 557 188 763</a> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <section class="work-features-section"><!--work-features-section-->
                                                                                <div class="container">
                                                                                    <div class="main-heading">
                                                                                        <h2 class="head">Why Choose Us<span> CDA</span></h2>
                                                                                        <small class="small">Why Choose Us</small> </div>
                                                                                    <div class="row">
                                                                                        <div class="col-lg-6">
                                                                                            <p>CDA Accounting and Bookkeeping Services LLC has over 5 years of extensive experience in providing accounting services in UAE. We are always been praised by our satisfied clients as the best bookkeeping and accounting firms in Dubai. We provide all-inclusive financial services including Tax Auditing, Internal Auditing, VAT Consultancy, Management Accounting & Bookkeeping, and much more. Regardless, our services make no kind of trade off or compromise with regards to quality and moral position. Our thorough services can ensure cost savings over the long haul.</p>
                                                                                        </div>
                                                                                        <div class="col-lg-6">
                                                                                            <ul class="list">
                                                                                                <li>An Experienced Team</li>
                                                                                                <li>Wide Exposure to Market</li>
                                                                                                <li>Custom-Tailored Services</li>
                                                                                                <li>Professional Approach</li>
                                                                                            </ul>
                                                                                            <ul class="list">
                                                                                                <li>Quick & Trusted Support</li>
                                                                                                <li>A Diverse Clientele</li>
                                                                                                <li>One-Stop Solution Provider</li>
                                                                                                <li>Customer Loyalty</li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="sub-link-box"><a href="https://www.cdaaudit.com/contact-us" class="link">request a free quote</a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <!--work-features-section-->
                                                                            <section class="testimonial-section"><!--testimonial-section-->
                                                                                <div class="container">
                                                                                    <div class="testimonial-box">
                                                                                        <p>CDA is a highly professional company for Accounting and Bookkeeping services across UAE. I personally experienced their result-oriented approach and the services from CDA have been just awesome. On any day, I’d recommend their services.</p>
                                                                                        <h6 class="head-text"> Jithin Jacob</h6>
                                                                                        <span>Assistant Manager - KPMG</span> </div>
                                                                                </div>
                                                                            </section>
                                                                            <!--testimonial-section-->
                                                                            <section class="industry-practices-section">
                                                                                <div class="container">
                                                                                    <div class="main-heading">
                                                                                        <h2 class="head"><span> Some</span> of our valued customers</h2>
                                                                                        <p>Every service offered by CDA Accounting and Bookkeeping Services LLC has been designed to match with a trusted line of industry practices.<br>
                                                                                                So, while we do the work, you can sit back and relax.</p>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-sm-6 line">
                                                                                            <div class="Practices-box">
                                                                                                <div class="title"> Al Andalous Electromechanical Works co.(L.L.C.)</div>
                                                                                                <img src="images/01.jpg" alt="" class="img-fluid"> </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 line">
                                                                                            <div class="Practices-box">
                                                                                                <div class="title"> French Industrial Technology LLC</div>
                                                                                                <img src="images/02.jpg" alt="" class="img-fluid"> </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6 line">
                                                                                            <div class="Practices-box line-right">
                                                                                                <div class="title"> Al Nahdah National insurance Brokers Co. L.L.C.</div>
                                                                                                <img src="images/03.jpg" alt="" class="img-fluid"> </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6">
                                                                                            <div class="Practices-box">
                                                                                                <div class="title"> Media Way Advertising & Publishing LLC</div>
                                                                                                <img src="images/04.jpg" alt="" class="img-fluid"> </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6">
                                                                                            <div class="Practices-box">
                                                                                                <div class="title"> Tile Marine LLC Marine Equipment, Spares Supply & Services</div>
                                                                                                <img src="images/05.jpg" alt="" class="img-fluid"> </div>
                                                                                        </div>
                                                                                        <div class="col-md-4 col-sm-6">
                                                                                            <div class="Practices-box line-right">
                                                                                                <div class="title"> Ronaldo's Spago </div>
                                                                                                <img src="images/06.jpg" alt="" class="img-fluid"> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <footer class="footer"><!--footer-->
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <div class="f-address">
                                                                                                <h4 class="f-haed">CDA Accounting & Bookkeeping Services LLC</h4>
                                                                                                <p>40th Floor, Citadel Tower, Business Bay,<br>
                                                                                                        Dubai, PO Box : 5586</p>
                                                                                                <a href="https://www.google.com/maps/place/The+Citadel+Tower/@25.183697,55.260828,16z/data=!4m5!3m4!1s0x0:0x9ad7e353822dc797!8m2!3d25.1836968!4d55.2608279?hl=en-US" target="_blank" class="link">Location Map</a> </div>
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <div class="f-contact">
                                                                                                <h5 class="f-haed">Contact us</h5>
                                                                                                <a href="tel:+971557188763" class="link">+971 557 188 763</a> <a href="tel:+971 426 100 89" class="link">+971 426 100 89</a>
                                                                                                <p class="text">EMAIL<br>
                                                                                                        <a href="mailto:info@cdaaudit.com" class="link2">info@cdaaudit.com</a></p>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm-4">
                                                                                            <div class="f-working-time">
                                                                                                <h6 class="f-haed">Working Time</h6>
                                                                                                <p>Sunday - Thursday : 9:00 to 18:00</p>
                                                                                                <div class="f-follows"> 
                                                                                                    <a href="https://www.facebook.com/CDA-Accounting-Bookkeeping-Services-LLC-2264426423868017/?modal=admin_todo_tour" target="_blank" class="icon"></a> 
                                                                                                    <a href="https://twitter.com/cda_llc" target="_blank" class="icon t-icon"></a> 
                                                                                                    <a href="https://www.linkedin.com/in/cda-audit-services-a51391172/" target="_blank" class="icon g-icon"></a> 
                                                                                                    <a href="https://www.instagram.com/cdaaccountingandbookkeeping/" target="_blank" class="icon in-icon"></a> </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </footer>
                                                                            <!--footer-->
                                                                            <section class="copyright-section">
                                                                                <div class="container">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <p class="text">2018 Copyright © <b>CDA Audit.</b> All Rights Reserved.</p>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="copy-link"><a href="https://www.cdaaudit.com/privacy-policy" target="_blank">Privacy Policy</a><span> |</span> <a href="https://www.cdaaudit.com/terms-and-conditions" target="_blank">Terms & Conditions</a></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <a href="https://api.whatsapp.com/send?phone=971557188763" class="whatsapp" target="_blank"> <i><img src="images/icon/whatsapp.png" class="img-fluid" ></i> </a> 
                                                                            <script src="js/jquery-min.js"></script> 
                                                                            <script src="js/popper.min.js" ></script> 
                                                                            <script src="js/bootstrap.min.js"></script> 
                                                                            <!--Start of Tawk.to Script--> 
                                                                            <script type="text/javascript">
                                                                                var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
                                                                                (function () {
                                                                                    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                                                                                    s1.async = true;
                                                                                    s1.src = 'https://embed.tawk.to/5c6a376f77e0730ce04368dd/default';
                                                                                    s1.charset = 'UTF-8';
                                                                                    s1.setAttribute('crossorigin', '*');
                                                                                    s0.parentNode.insertBefore(s1, s0);
                                                                                })();
                                                                            </script>
                                                                            </body>
                                                                            </html>
