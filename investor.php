<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lovely Films</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<style type="text/css">
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
}
.title {
    color: grey;
    font-size: 14px;
    padding: 10px;
    margin-bottom: 0 !important;
}
button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}
a {
    text-decoration: none;
    font-size: 22px;
    color: #e35325;
}
button:hover, a:hover {
    color: #e47a58;
}
</style>
</head>

<body>
<!-- Navigation -->
<?php include('header.php');?>
<?php 

include('header.php');

include('second-header.php');
?>
<!--news section-->
<section>
  <div class="full bg-white" style="margin-top:100px;">
    <div class="mycontainer">
      <div class="full">
        <h1 class="text-uppercase text-center mt-my">Investors</h1>
      </div>
      <div class="full mt-5">
        <div class="col-xl-4 float-left">
          <div class="row">
            <div class="card"> <img src="images/Satish.jpeg" alt="John" style="width:100%">
              <h3 class="mt-4">Mr. Satish Kumar</h3>
              <p class="title">Company Secretary & Compliance Officer Tell: Board line - +91-22- 67080500</p>
              <div class="full mb-5"><a href="mailto:info@lovelyfilms.in" style="font-size: 15px;"><i class="fa fa-mail-forward"></i> info@lovelyfilms.in</a></div>
              <!--<p>Lorem Ipsum</p>--> 
              <!--       <div style="margin: 24px 0;"> <a href="#"><i class="fa fa-dribbble"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> </div>--> 
              <!--                <div class="full text-center">
        <button type="button" class="btn btn-danger btn-danger1 text-uppercase text-center">Contact</button>
      </div>--> 
            </div>
          </div>
        </div>
        <div class="col-xl-8 float-left">
          <div class="row">
            <ul class="full mb-4">
              <li>Board Meetings</li>
              <li>Schedule of Conference Call / Investors-Analysts Meeting</li>
              <li>Announcement / Press Release</li>
              <li>Unpaid Dividend Information</li>
            </ul>
            <h4 class="full mb-3">Reports:</h4>
            <ul class="full mb-4">
              <li>Annual Reports</li>
              <li>Quarterly Reports</li>
              <li>Shareholding Pattern</li>
              <li>Corporate Governance Reports</li>
              <li>Scrutinizer's Report on e-voting & Poll held at AGM</li>
              <li>Postal Ballot</li>
            </ul>
            <h4 class="full mb-3">Corporate Governance:</h4>
            <p class="full">Corporate governance is a reflection of the company’s culture, policies, relationship with stakeholders, commitment to values and ethical business conduct. In the same spirit, timely and accurate disclosure of information regarding the financial situation, performance, ownership and governance of the company is an important part of corporate governance.</p>
            <ul class="full mb-4">
              <li>Terms and conditions for appointment of Independent Directors</li>
              <li>Board Committees</li>
              <li>Code of Conduct for Board and Senior management Personnel</li>
              <li>Whistle Blower Policy</li>
              <li>Criteria for making payments to non-executive directors</li>
              <li>Fair Disclosure Policy</li>
              <li>Familiarization program for Independent Directors</li>
            </ul>
			    <h4 class="full mb-3">Policies :</h4>
            <ul class="full mb-4">
              <li>Policy on Related Party Transactions</li>
              <li>Policy on material subsidiaries</li>
              <li>Nomination and Remuneration Policy</li>
              <li>Policy on Board Diversity</li>
              <li>Policy on material subsidiaries</li>
               </ul>
     
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--end of news section--> 

<!--footer section-->
<?php include('footer.php');?>
<!--end of footer section--> 

</body>
</html>
