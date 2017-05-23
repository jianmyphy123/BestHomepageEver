<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="author" content="Justin Carver">
<title>BestHomepageEver | Tips and Tricks - How to use the homepage more effectively.</title>
<meta name="description" content="Learn how to use BestHomepageEver to browse the Internet quicker, along and other useful tips. Make life simpler by using the homepage for home or work.">
<!-- Bootstrap 3.1.1 -->

<link href="../bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>

<!-- Payment -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>


<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!-- CSS -->
<link href="../css/custom-v6.0.css" rel="stylesheet" />
<link href="../news/news.css" rel="stylesheet" />


<!-- Google Analytics Begin -->
<script type="text/javascript">
var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31333288-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>



</head>

<body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="../"><img src="../Logo/square_small.jpg" /> Go to Homepage</a>
          <a class="blog-nav-item" href="../news/" title="Homepage News & Updates">News and Updates</a>                   
          <a class="blog-nav-item" href="../faq/" title="Questions and Answers">Questions and Help</a> 
          <a class="blog-nav-item" href="../about/">About the homepage</a>          
          <a class="blog-nav-item" href="#" title="Tips and Tricks">Tips and Tricks</a>
          <a class="blog-nav-item active" href="#" title="BestHomepageEver Pro">PRO</a>
        </nav>
      </div>
    </div>

    <div class="container">
		
      <div class="row padding-top-30px">
      	
        <div class="col-lg-8 col-md-8 col-sm-8">
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">COUPON CODE</label>
                                    <input type="text" class="form-control" name="couponCode" />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
        
        
        
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="text-center">
                            PRO PLAN</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead">
                            <strong>$2.99 / month</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i>10 Additional Custom Links</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i>Unlimited projects</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i>27/7 support</li>
                    </ul>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="http://www.jquery2dotnet.com">BUY NOW!</a>
                    </div>
                </div>
            </div>
        </div>
      
        
       </div><!-- /row --> 
       
       <!-- PAYMENT FORM -->
       

        
    </div>
</div>
          
                  
        
        


    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>BestHomepageEver, 2017.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
      
    </footer>

  </body>




