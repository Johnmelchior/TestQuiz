<?php
	$baseURL = 'https://www.shoretel.com/buildabettermeeting';
	$pageLocation = 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://www.shoretel.com/buildabettermeeting';
	//$pageLocation = 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
	$shareTitle = 'Learn how to Build a Better Meeting, #BuildABetterMeeting';
	$shareDesc = 'Take the challenge to see what your meeting style is, with tips on how you can improve your meetings! #BuildABetterMeeting';
	$shortURL = 'http://bit.ly/meetingquiz';

	$results = (isset($_REQUEST['r']) && !empty($_REQUEST['r']))?($_REQUEST['r']):'';

 //to change the page title for sharing purposes
 /*	mmtr	Meeting Multitasker
	mmiz	Meeting Maximizer
	mmvk	Meeting Maverick
	*/

	if($results=='mmtr'){
		$shareTitle = 'I\'m a Meeting Multitasker! Curious about your meeting style?';
		$shareDesc = 'I am able to get a lot of things done at the same time. Meeting time is important for coordinating activities with others, yet I also use this time to accomplish other tasks. I am great at active listening and can balance meeting participation with multitasking.';
	} else if($results=='mmiz'){
		$shareTitle = 'I\'m a Meeting Maximizer! Curious about your meeting style?';
		$shareDesc = 'I can be highly productive with my meeting time. I make sure to set an agenda, send it out ahead of the meeting and I start all of my meetings on time. I truly maximize the time I allocate for meetings to keep them efficient and on-task.';
	} else if($results=='mmvk'){
		$shareTitle = 'I\'m a Meeting Maverick! Curious about your meeting style?';
		$shareDesc = 'I\'m independent and need collaboration and productivity tools that adapt to me, including my phone system. I know there is no one way to run a meeting, and no location is off limits for a productive meeting. I am a true maverick when it comes to getting work done.';
	}
?>
<!DOCTYPE html>
<!--[if lte IE 8]> <html class="ie8" xmlns="http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1" />
<meta name="keywords" content="ShoreTel, meeting, BuildABetterMeeting" />
<meta name="description" content="<?php echo $shareDesc; ?>" />
<title><?php echo $shareTitle; ?></title>

<meta property="og:type" content="website" />
<?php
	if($results!==''){
		echo '<meta property="og:url" content="'.$pageLocation.'/?r='.$results.'" />';
	} else {
		echo '<meta property="og:url" content="'.$pageLocation.'/" />';
	}
?>

<meta property="og:title" content="<?php echo $shareTitle; ?>" />
<meta property="og:description" content="<?php echo $shareDesc; ?>" />
<meta property="og:site_name" content="ShoreTel" />
<meta property="og:image" content="<?php echo $pageLocation; ?>/images/fbShare.jpg" />
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1234" />
<meta property="og:image:height" content="747" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo $shareTitle; ?>" />
<meta name="twitter:description" content="<?php echo $shareDesc; ?> #BuildABetterMeeting <?php echo $shortURL; ?>" />
<meta name="twitter:image" content="<?php echo $pageLocation; ?>/images/googleShare.jpg" />

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
<link rel="icon" href="images/favicon.ico" sizes="16x16">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="css/media.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="cssmap-continents/cssmap-continents.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/modernizr-custom.js"></script>

<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="css/ie8.css" />
<![endif]-->
</head>

<body>



<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0039/6184.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-82592-1', 'auto');
  ga('send', 'pageview');

</script>


<script>
	var resultsTag = '<!-- EXPORTED TAGS --><!------- Tags for Shoretel Activity Buttons-------><!--  Spotlight Tag: Shoretel (4986) | Shoretel Assessment TYP (54771) | Shoretel Activity Buttons (3743) | Expected URL:  --><div style="position:absolute;"><img style="width:1px; height:1px;" src="http://servedby.flashtalking.com/spot/4/4986;54771;3743/?spotName=Shoretel_Assessment_TYP" /></div><img src="//pixel.mathtag.com/event/img?mt_id=916719&mt_adid=126869&v1=&v2=&v3=&s1=&s2=&s3=&mt_nsync=1" width="1" height="1" />';
</script>



<img src="images/googleShare.jpg" alt="ShoreTel Business Meeting Culture" class="googleshareHack" style="position:absolute;top:-5000px;left:-4000px;" />
<div id="welcome">
	<div class="title-container">
		<div class="title">
  		<div class="shoretel-icon"><img src="images/shortel-icon.png"></div> What’s your business
  	</div>
  	<div class="clearfix"></div>
  	<div class="title line2">
  		meeting style?
  	</div>
  </div>
  <div class="clearfix"></div>
  <div class="build-title">
  	#BuildABetterMeeting
  </div>
  <a class="challenge-link" href="javascript:void(0);">Take the Challenge and find out! <span><img src="images/link-arrow.png"></span></a>
</div>

<div id="quiz">
    <!-- Question-1 -->
	<div class="outer-wrapper quiz-question-screen ques_1" data-percentdone="10">
		<div class="head-bar">
			<div class="head-orange">
				<span>10</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
 	   <div class="wrapper">
			<div class="question">
				How many hours a week do you spend in meetings?
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
			<div class="options hoverable">
				<input type="hidden" class="option" data-key="bmc_q1" value="5" data-value="0-4 hours">
				<div class="top">
					<img src="images/q1a.png" />
					<div class="text">
						0-4 hours
					</div>
					<div class="hoverOverlay"></div>
				</div>
				<div class="bottom">
					I keep it to a minimum
				</div>
			</div>
			<div class="options hoverable">
				<input type="hidden" class="option" data-key="bmc_q1" value="5" data-value="5-8 hours">
				<div class="top">
					<img src="images/q1b.png" />
					<div class="text">
						5-8 hours                </div>
					<div class="hoverOverlay"></div>
				</div>
				<div class="bottom">
					I have quite a few meetings
				</div>
			</div>
			<div class="options hoverable last">
				<input type="hidden" class="option" data-key="bmc_q1" value="5" data-value="9+ hours">
				<div class="top">
					<img src="images/q1c.png" />
					<div class="text">
						9+ hours                </div>
					<div class="hoverOverlay"></div>
				</div>
				<div class="bottom">
					Are you kidding me, I live in meetings!
				</div>
			</div>
			</div>
			 <div class="clearfix">
			</div>
			<div class="clue">
				<table width="100%">
					<tr>
						<td  class="icon" align="center" valign="middle">
							 <img src="images/clue.png" />
						</td>
						<td  class="content">
							   <strong>Did You know?</strong> The average worker spends 9 hours a week preparing for and attending meetings (Source: Clarizen).</span>
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-2 -->
	<div class="outer-wrapper quiz-question-screen ques_2" data-last="trans" data-trans="1" data-percentdone="20" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>20</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
 		<div class="wrapper">
			<div class="question">
				How long do you spend (on average) trying to get meeting technology to work?
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q2" value="5" data-value="0-5 minutes">
					<div class="top">
						<img src="images/q2a.png" />
						<div class="text">
							0-5 minutes                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						Just a couple of minutes
					</div>
				</div>
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q2" value="3" data-value="6-10 minutes">
					<div class="top">
						<img src="images/q2b.png" />
						<div class="text">
							6-10 minutes                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						It takes quite a bit of time
					</div>
				</div>
				<div class="options last hoverable">
					<input type="hidden" class="option" data-key="bmc_q2" value="1" data-value="11+ minutes">
					<div class="top">
						<img src="images/q2c.png" />
						<div class="text">
							11+ minutes                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						I can never get the technology to work!
					</div>
				</div>
			</div>
         	<div class="clearfix">
        </div>
        <div class="clue">
            <table width="100%">
                <tr>
                    <td  class="icon" align="center" valign="middle">
                         <img src="images/e-book.png" />
                    </td>
                    <td  class="content">
                           Learn more about connecting Silent Generation, Baby Boomers, Gen X, Gen Y on a meeting platform that allows everyone to communicate however they want on whatever device they choose. Check out our eBook available for download at the end of this challenge!
                    </td>
                </tr>
            </table>
        </div>
        <div class="clearfix">
        </div>
    </div>
	</div>

    <!-- Question-3 -->
	<div class="outer-wrapper quiz-question-screen ques_3" data-percentdone="30" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>30</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
 		<div class="wrapper">
        <div class="question">
            How do you attend the majority of meetings?
        </div>
        <div class="clearfix">
        </div>
        <div class="row">
            <div class="options hoverable">
                <input type="hidden" class="option" data-key="bmc_q3" value="5" data-value="In a conference room">
                <div class="top">
                    <img src="images/q3a.png" />
                    <div class="text">
                        In a conference room                </div>
				<div class="hoverOverlay"></div>
                </div>
                <div class="bottom">
                    I like to present with my co-workers and see them in person!
                </div>
            </div>
            <div class="options hoverable">
                <input type="hidden" class="option" data-key="bmc_q3" value="5" data-value="From my desk">
                <div class="top">
                    <img src="images/q3b.png" />
                    <div class="text">
                        From my desk                </div>
				<div class="hoverOverlay"></div>
                </div>
                <div class="bottom">
                    My desk phone works great for me!
                </div>
            </div>
            <div class="options last hoverable">
                <input type="hidden" class="option" data-key="bmc_q3" value="5" data-value="Remotely">
                <div class="top">
                    <img src="images/q3c.png" />
                    <div class="text">
                        Remotely                </div>
				<div class="hoverOverlay"></div>
                </div>
                <div class="bottom">
                    Who says you can't be on a beach and attend a meeting?
                </div>
            </div>
        </div>
         <div class="clearfix">
        </div>
        <div class="clue">
            <table width="100%">
                <tr>
                    <td  class="icon" align="center" valign="middle">
                          <img src="images/clue.png" />
                    </td>
                    <td  class="content">
                          <strong>Did You know?</strong> The science here goes both ways. According to InterCall, employees are happier when they attend meetings from their mobile device as it allows flexibility, but according to Meetology, working together face-to-face generates more ideas
                    </td>
                </tr>
            </table>
        </div>
        <div class="clearfix">
        </div>
    </div>
	</div>

    <!-- Question-4 -->
	<div class="outer-wrapper quiz-question-screen ques_4" data-percentdone="40" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>40</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
    	<div class="wrapper">
			<div class="question">
				How productive are your meetings?
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q4" value="5" data-value="Productive">
					<div class="top">
						<img src="images/q4a.png" />
						<div class="text">
							Productive                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						We get a lot done!
					</div>
				</div>
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q4" value="3" data-value="Sort of productive">
					<div class="top">
						<img src="images/q4b.png" />
						<div class="text">
							Sort of productive                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						Eh, not so much. I go to 2-hour long meetings to give a 10 min status report
					</div>
				</div>
				<div class="options last hoverable">
					<input type="hidden" class="option" data-key="bmc_q4" value="1" data-value="A waste of time">
					<div class="top">
						<img src="images/q4c.png" />
						<div class="text">
							A waste of time!                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						We go round and round, it's like <em>Groundhogs Day</em>!
					</div>
				</div>
			</div>
			 <div class="clearfix">
			</div>
			<div class="clue">
				<table width="100%">
					<tr>
						<td  class="icon" align="center" valign="middle">
							   <img src="images/clue.png" />
						</td>
						<td  class="content">
							<strong>Did You know?</strong> Studies show that people are able to pay attention to someone speaking no more than 10-18 minutes and that the act of listening can be equally draining as thinking hard about a subject! See how ShoreTel CONNECT can help manage meeting agendas.
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-5 -->
	<div class="outer-wrapper quiz-question-screen ques_5" data-last="trans" data-trans="2" data-percentdone="50" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>50</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				What do you really do in meetings?
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q5" value="5" data-value="Listen and take notes">
					<div class="top">
						<img src="images/q5a.png" />
						<div class="text">
							Listen and take notes                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						I'm always engaged and listening during a meeting. I never multi-task!
					</div>
				</div>
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q5" value="3" data-value="Get other work done">
					<div class="top">
						<img src="images/q5b.png" />
						<div class="text">
							Get other work done                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						Meetings are the only time I can check email and actually get stuff done!
					</div>
				</div>
				<div class="options last hoverable">
					<input type="hidden" class="option" data-key="bmc_q5" value="1" data-value="Check personal email, text, or social media">
					<div class="top">
						<img src="images/q5c.png" />
						<div class="text">
							Check personal email, text, or social media                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						Meetings are the best times to do a little internet shopping, or check in on my social media feeds!
					</div>
				</div>
			</div>
			 <div class="clearfix">
			</div>
			<div class="clue">
				<table width="100%">
					<tr>
						<td  class="icon" align="center" valign="middle">
							   <img src="images/clue.png" />
						</td>
						<td  class="content">
						   <strong>Did You know?</strong> According to a Harris Poll sponsored by Clarizen, 3 out of 5 workers reported that they multitask during status meetings.
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-6 -->
	<div class="outer-wrapper quiz-question-screen ques_6" data-last="" data-percentdone="60" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>60</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				As a meeting organizer, do you plan an agenda prior to meetings?
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q6" value="5" data-value="Always">
					<div class="top">
						<img src="images/q6a.png" />
						<div class="text">
							Always                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						Agendas help make meetings productive!
					</div>
				</div>
				<div class="options hoverable">
					<input type="hidden" class="option" data-key="bmc_q6" value="3" data-value="Occasionally">
					<div class="top">
						<img src="images/q6b.png" />
						<div class="text">
							Occasionally                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						I try my best!
					</div>
				</div>
				<div class="options last hoverable">
					<input type="hidden" class="option" data-key="bmc_q6" value="1" data-value="Rarely">
					<div class="top">
						<img src="images/q6c.png" />
						<div class="text">
							Rarely                </div>
					<div class="hoverOverlay"></div>
					</div>
					<div class="bottom">
						What's an agenda?
					</div>
				</div>
			</div>
			 <div class="clearfix">
			</div>
			<div class="clue">
				<table width="100%">
					<tr>
						<td  class="icon" align="center" valign="middle">
							 <img src="images/e-book.png" />
						</td>
						<td  class="content">
						   People have limited attention spans. So, meetings are a lot more effective when you organize them into an agenda with timed segments for each topic.
					Find out more in our eBook!
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-7 -->
	<div class="outer-wrapper quiz-question-screen ques_7" data-last="" data-percentdone="70" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>70</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				Are you taking this challenge while you are in a meeting? (We won't tell!)
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				   <div class="options-two hoverable">
				   <input type="hidden" class="option" data-key="bmc_q7" value="Yes" data-value="Yes">
						<div class="top">
					<img src="images/q7a.png" />
					<div class="text">
						Yes
					</div>
					<div class="hoverOverlay"></div>
				</div>
				   </div>
				   <div class="options-two last2 hoverable">
				   <input type="hidden" class="option" data-key="bmc_q7" value="No" data-value="No">
						<div class="top">
					<img src="images/q7b.png" />
					<div class="text">
						No
					</div>
					<div class="hoverOverlay"></div>
				</div>
				   </div>
			</div>
			 <div class="clearfix">
			</div>
				<div class="clue">
				<table width="100%">
					<tr>
						<td  class="icon" align="center" valign="middle">
							 <img src="images/e-book.png" />
						</td>
						<td  class="content">
						   Keeping everyone engaged during a meeting is key.
					Find out more about creating flexibility in meetings that satisfy everyone's needs in our eBook at the end of this challenge.
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-8 -->
	<div class="outer-wrapper quiz-question-screen quiz-question-screen ques_8" data-last="trans" data-trans="3" data-percentdone="80" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>80</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				What are some of the best meeting tips you would like to share?
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
			  <div class="options-text">
				<div class="meeting-head">
					Share your best tips and we’ll share them on ShoreTel’s social media pages!
				</div>
			   <textarea name="bmc_q8" data-key="bmc_q8" placeholder="Tell us your best tips and/or click Submit to keep going..." class="option meeting-text"></textarea>
			   <div class="clearfix"></div>
			   <input type="submit" class="meeting-but submit" value="Submit" />
			   </div>
			</div>
			 <div class="clearfix">
			</div>
				<div class="clue">
				<table width="100%">
					<tr>
						<td  class="icon" align="center" valign="middle">
						  <img src="images/e-book.png" />
						</td>
						<td  class="content">
						   Because we have tips to share with you, check out our 7 Tips to Productive Meetings eBook available for download on your results page!
						</td>
					</tr>
				</table>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-9 -->
    <!--Demographic Question 1 and 2 -->
	<div class="outer-wrapper quiz-question-screen ques_9" data-last="" data-percentdone="85" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>85</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				Tell us a little about you...
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
					<div class="information info_1">
						<div class="header">
							What is your generation?
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q1" data-value="Silent Generation (Born 1925-1942)">
								<a class="hoverable" href="javascript:">Silent Generation (Born 1925-1942)</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q1" data-value="Baby Boomer (Born 1943-1964)">
								<a class="hoverable" href="javascript:">Baby Boomer (Born 1943-1964)</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q1" data-value="Generation X (Born 1965-1979)">
								<a class="hoverable" href="javascript:">Generation X (Born 1965-1979)</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q1" data-value="Millennial (Born 1980-2000)">
								<a class="hoverable" href="javascript:">Millennial (Born 1980-2000)</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q1" data-value="Generation Z (Born 2001-Present)">
								<a class="hoverable" href="javascript:">Generation Z (Born 2001-Present)</a>
							</div>
						</div>
					</div>
					<div class="information info_2">
						<div class="header">
							What size company do you work for?
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q2" data-value="Startup / Small business">
								<a class="hoverable" href="javascript:">Startup / Small business</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q2" data-value="Medium-sized business">
								<a class="hoverable" href="javascript:">Medium-sized business</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q2" data-value="Enterprise">
								<a class="hoverable" href="javascript:">Enterprise</a>
							</div>
						</div>
					</div>



			</div>
			 <div class="clearfix">
			</div>

			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-10 -->
    <!--Demographic Question 3 and 4 -->
	<div class="outer-wrapper quiz-question-screen ques_10" data-last="" data-percentdone="90" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>90</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				Tell us a little more about you...
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
					<div class="information info_3">
						<div class="header">
							Industry / Company Type
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Education">
								<a class="hoverable" href="javascript:">Education</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Finance">
								<a class="hoverable" href="javascript:">Finance</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Government">
								<a class="hoverable" href="javascript:">Government</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Healthcare">
								<a class="hoverable" href="javascript:">Healthcare</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Marketing">
								<a class="hoverable" href="javascript:">Marketing</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Technology">
								<a class="hoverable" href="javascript:">Technology</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q3" data-value="Other">
								<a class="hoverable" href="javascript:">Other</a>
							</div>
						</div>
					</div>
					<div class="information info_4">
						<div class="header">
							How many days per week do you work remotely?
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q4" data-value="0">
								<a class="hoverable" href="javascript:">0</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q4" data-value="1">
								<a class="hoverable" href="javascript:">1</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q4" data-value="2">
								<a class="hoverable" href="javascript:">2</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q4" data-value="3">
								<a class="hoverable" href="javascript:">3</a>
							</div>
						</div>
						<div class="options_demograph">
							<div class="option" data-key="bmc_demographic_q4" data-value="4+">
								<a class="hoverable" href="javascript:">4+</a>
							</div>
						</div>
					</div>



			</div>
			 <div class="clearfix">
			</div>

			<div class="clearfix">
			</div>
		</div>
	</div>

    <!-- Question-11 -->
    <!-- Map -->
	<div class="outer-wrapper quiz-question-screen ques_map" data-last="last" data-percentdone="95" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				<span>95</span>% Done!
				<div class="arrow">
					<img src="images/arrow.png" />
				</div>
			</div>
			<div class="head-black">
				<!--Wow! Something witty goes here-->
			</div>
		</div>
		<div class="wrapper">
			<div class="question">
				One last thing...
			</div>
			<div class="clearfix">
			</div>
			<div class="row">
				<div class="map-container">
					<div class="map-left">
						Where do you live?
					</div>
					<div class="map-right">
						<svg id="QuizMap" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 675 311" width="675px" height="311px">
						 <defs>
						  <path id="eastern-hemi" d="m99.945 35.204c-2.742-2.337-7.408 0.852-10.52 0.649-1.329-0.085-3.08-1.071-3.506-2.336-0.135-0.4-0.024-0.938-0.132-1.685-0.118-0.829-0.547-1.698-0.518-2.209 0.131-2.344 5.972-2.786 5.972-5.71-1.115-1.069-4.385-0.888-5.454 0.259-0.383 0.413-0.364 1.248-0.908 2.078-1.164 1.773-4.926 1.983-6.103 4.152-0.262 0.482-0.718 1.8-0.522 2.596 0.309 1.23 3.031 1.564 3.119 2.855 0.151 2.176-3.328 1.904-3.768 3.766-0.197 0.843 0.407 1.967 0.262 2.724-0.265 1.364-1.584 0.967-3.246 1.688-0.85 0.367-1.673 1.717-2.598 1.816-0.856 0.091-1.377-0.498-1.948-0.387-0.852 0.16-0.567 1.206-1.82 1.425-0.997 0.174-2.741-0.891-2.857 0.391-0.075 0.822 1.569 1.268 2.598 1.167 0.817-0.079 1.413-0.639 2.207-0.649 1.538-0.014 2.539 1.14 3.506 1.17 2.23 0.062 4.418-2.059 6.756-1.82 1.056 0.109 1.682 0.856 2.466 0.781 1.253-0.118 2.319-1.564 3.247-2.078-0.394-2.187 0.036-5.071 2.079-5.192 1.403-0.082 3.509 2.399 3.765 0 0.111-1.042-1.109-1.964-1.948-1.947-0.748 0.016-1.729 1.478-2.339 0.262 0.004-1.19 1.338-0.875 2.079-1.17 0.552-0.219 0.942-0.82 1.558-1.039 3.09-1.085 7.373 1.065 8.573-1.557m12.595 160.3c0.52-0.95-0.82-1.57-1.04-2.6-0.25-1.2 0.29-2.6-0.78-3.24h-0.39c-0.94 2.13 0.39 5.64 2.21 5.84m7.92-13.37c0.44-0.9 1.47-1.85 1.3-2.98-0.37-2.5-5.05-1.27-5.58 0.51-0.36 1.21 0.21 2.16-0.26 3.38 0.51 0.96 1.79 1.15 3.37 1.04 0.88-0.39 0.77-1.12 1.17-1.95m1.82 27.13c0.6-0.96 1.36-3.64 0-4.29h-0.26c-0.58 1.08-1.19 3.69 0.26 4.29m0.13-114.61c0.07-1.393-0.53-2.442-0.65-4.412-2.4-1.445-4.19 1.341-6.62 1.036-1.5-0.187-2.57-1.927-4.16-1.685-0.87 0.132-1.3 1.262-2.21 1.426-1.85 0.341-2.7-1.484-4.67-0.777-2.78-2.117-4.02-5.565-4.677-9.475-1.515-1.986-3.827-0.37-4.935 0.908-0.682-0.007-1.535-0.377-1.686 0.39-0.512 2.399 3.394 2.655 3.375 4.284-0.013 1.058-1.525 0.96-2.207 1.684-0.725 0.771-0.243 1.456-1.168 1.948-2.561 0.307-3.41-1.092-3.377-3.373-1.106-1.678-2.503-2.901-3.506-4.284-0.371-0.511-0.925-1.308-1.04-2.078-0.092-0.607 0.288-1.377 0.131-2.075-0.282-1.239-2.591-2.173-4.027-2.855-1.535-0.73-3.456-1.422-4.546-2.337-0.77-0.649-1.134-1.776-1.816-2.205-0.581-0.364-1.302-0.289-1.82-0.649-0.712-0.499-0.594-1.328-1.558-1.561-0.489-0.18-1.243 0.486-1.558 0.912-0.633 2.832 1.673 3.025 2.725 4.28 0.725 0.862 1.086 2.16 1.82 2.727 0.784 0.606 1.85 0.495 2.857 0.908 0.695 0.285 1.148 1.151 1.817 1.557 1.239 0.754 3.23 0.885 3.378 2.337-0.771 0.524-2.519-0.764-3.116 0.521-0.154 0.842 0.669 1.275 0.649 2.075-0.032 1.278-1.453 2.677-2.728 2.468-0.128-0.761 0.679-1.383 0.649-2.209-0.056-1.652-3.378-4.173-5.063-4.93-0.791-0.357-1.752-0.377-2.47-0.78-1.275-0.718-3.509-2.481-4.286-3.504-0.928-1.229-1.722-3.503-3.765-3.375-0.833 0.052-1.522 0.816-2.207 1.17-0.623 0.317-1.312 0.612-1.948 1.035-0.758 0.502-1.374 1.01-2.079 1.039-1.63 0.069-3.014-1.209-4.415-0.908-0.472 0.102-0.866 0.525-1.43 1.039-0.019 0.757 0.227 1.243 0.132 2.075-0.423 0.731-1.679 0.685-2.598 1.17-1.344 0.708-2.541 2.164-3.637 3.245-0.704 0.695-1.341 1.268-1.43 1.816-0.068 0.429 0.365 1.242 0.263 1.819-0.115 0.626-1.292 1.923-2.079 2.464-0.459 0.315-1.069 0.358-1.558 0.649-1.023 0.607-1.483 1.397-2.338 1.557-2.27 0.424-6.395-0.455-6.362 1.947 0.019 1.607 2.187 1.613 3.505 1.557 1.837-0.072 3.398 0.39 4.414 0.131 0.702-0.176 1.47-0.963 2.208-1.298 0.465-0.21 0.948-0.213 1.298-0.39 0.777-0.39 1.217-1.023 1.82-1.298 1.187-0.541 3.398-0.963 4.674-1.039 1.751-0.101 3.581 0.181 5.844 0 0.806-0.062 1.603-0.58 2.469-0.649 1.414-0.111 3.273 0.557 4.414 0.522 0.791-0.027 1.673-0.794 2.598-0.781 1.046 0.017 2.148 0.761 2.338 1.43 0.108 0.38-0.22 0.986-0.131 1.556 0.151 0.944 0.961 1.334 0.912 1.947-0.069 0.813-2.096 1.898-1.82 2.855 0.18 0.616 1.633 1.259 2.338 1.688 0.738 0.449 1.984 1.072 2.856 1.167 0.735 0.082 1.384-0.203 2.079-0.128 1.119 0.121 2.929 0.8 3.637 1.296 1.22 0.86 1.05 2.24 2.467 2.73 0.603 0.21 1.692 0.09 2.466 0.26 1.892 0.41 3.296 1.97 4.676 1.81 2.175-0.25 1.184-2.3 1.43-3.76 0.554-3.313 7.031-3.162 8.311-0.91 0.947 0.25 1.777 0.04 2.856 0.39 0.623 0.2 1.089 0.88 1.689 1.04 0.456 0.11 1.116-0.07 1.686 0 2.49 0.28 4.75 2.13 6.89 1.81 1.35-0.2 2.34-1.47 3.63-1.55 2.49-0.16 4.08 1.85 6.76 0.91 1.97-0.7 1.53-2.74 2.2-4.806 0.47-1.439 1.38-2.419 1.43-3.504m8.31-15.316c3.52-0.636 1.91-3.608 0.13-4.671-1.35-0.806-2.97-1.507-4.54-2.468-0.92-0.557-4.4-1.609-4.42-2.723-0.02-1.22 2.59-1.62 1.56-3.766-1.78-0.433-6.01 0.249-5.71 2.205 0.16 1.131 1.5 0.505 1.81 1.688-1.27 0.453-2.82 1.639-4.15 1.429-1.59-0.249-2-2.202-2.86-3.375-1.23 0.039-2.05-1.197-3.5-1.04-1.53 0.168-2.34 2.384-3.12 3.508-0.42 0.589-1.08 0.894-1.3 1.426-0.14 0.321 0.01 0.832-0.13 1.297-0.45 1.442-1.69 1.97-1.56 3.245 0.12 1.124 1.34 1.629 1.43 2.596-0.09 0.997-1.69 0.478-1.56 1.688 2.33 1.918 2.45-0.905 3.64-1.298 0.95-0.318 2.82 0.262 4.02 0 0.98-0.213 1.74-1.141 2.86-1.557 0.68-0.256 1.52-0.481 2.47-0.521 4.13-0.17 6.8 2.517 10.39 2.596 1.18 0.026 3.31-0.036 4.54-0.259m30.52 9.344c0.65-4.5-2.86-4.838-3.5-8.046 0.29 0.039 0.14-0.374 0.38-0.39 0.86-0.41 2.15 0.656 2.6-0.387 0.01-1.537-1.94-2.684-3.9-1.947-0.56-0.386-0.64-1.262-0.77-2.078-1.48-0.875-5.12-2.789-5.07-4.543 0.04-1.442 1.9-2.251 4.03-2.206 0.89-0.678 0.32-2.762-0.52-3.244-3.36-0.734-5.15-0.239-7.27 1.297-1.02 0.738-2.16 1.246-2.73 1.689-0.53 0.406-1.23 1.517-1.17 2.075 0.08 0.802 1.23 1.274 1.69 2.336 0.23 0.548 0.18 1.233 0.39 1.688 0.57 1.252 2.02 2.062 3.11 3.114 0.78 0.744 2.95 2.357 2.99 3.245 0.04 0.74-0.66 0.904-0.91 1.688-0.24 0.767-0.52 2.579-0.39 3.244 0.29 1.426 1.77 1.475 3.12 2.079 1.34 0.596 2.63 1.652 4.03 1.685 1.48 0.039 3.06-0.437 3.89-1.299m9.61-16.742c2.11-0.406 0.03-3.769-1.56-3.376-2.07 0.518 0.13 3.651 1.56 3.376m2.73-50.619c3.05 0.711 4.49-2.733 2.47-4.674-0.48-0.452-2.07-0.629-2.73-1.684-0.79-1.269-0.68-2.964-2.6-2.596-0.02 0.15 0.02 0.367-0.13 0.386-0.18 2.839 3.96 3.553 3.9 5.841-0.03 1.2-1.3 1.328-0.91 2.727m27.53 45.296c-0.49-0.98-1.89 0.289-1.3 1.171 0.88 0.055 1.2-0.453 1.3-1.171m27.27-61.261c-1.43 0-1.96 0.5638-2.85 1.0391-0.49 0.2589-1.49 0.4032-1.17 1.1672 1.25-0.1513 3.73-0.7146 4.02-2.2063m34.03 45.037c0.51-1.652-0.29-3.32-1.3-4.411-1.5 0.258-0.42 1.816-0.52 2.727-0.15 1.288-1.51 2.182-1.43 3.503-0.5 0.584-1.35 0.814-1.43 1.816 0.83 0.57 1.19-0.449 1.82-1.039 1-0.931 2.51-1.481 2.86-2.596m114.15-30.111c3.93 0.026 8.54 1.659 8.18 5.323-4.59 1.006-8.43-3.16-13.24-1.947-0.77 0.193-1.62 1.036-1.56 1.816 0.18 2.261 5.88 2.072 6.36 4.283-0.93 0.699-1.96 0.04-2.72 0.132-1.17 0.138-3.15 1.373-3.9 2.074-0.88 0.823-1.65 2.931-2.6 3.117-1.16 0.227-2.93-1.143-4.67-0.78-0.64 0.135-1.26 0.931-1.82 1.039-1.43 0.272-3.26-0.78-4.15 0.908 0.47 1.187 0.18 2.839 1.16 3.504 0.64 0.433 1.43 0.099 2.21 0.39 0.91 0.341 1.42 1.452 2.21 2.078 0.64 0.508 1.33 0.521 1.69 1.167 0.08 0.957-0.38 1.062-0.26 1.688 0.2 1.088 1.9 1.334 1.94 2.074 0.06 0.938-1.07 0.738-1.29 1.688-0.08 0.603 0.7 0.764 0.78 1.557 0.05 0.532-0.43 1.085-0.39 1.688 0.05 0.866 0.73 1.442 0.65 2.206-0.08 0.656-0.65 1.167-1.18 1.429-2.48-1.596-4.72-3.795-7.4-5.84-2.74-2.098-7.08-4.674-7.53-9.086-0.01-0.675 1.44-1.206 1.69-2.206 0.1-0.41-0.16-0.993-0.13-1.557 0.09-1.524 1.35-2.989 1.3-3.894-0.06-0.992-1.92-2.838-2.86-3.116-0.75 0.396-0.01 1.183-0.13 1.819-0.15 0.783-1.1 1.74-1.95 1.815-2.45 0.213-2.73-3.163-6.62-2.205-1.01 0.249-2.43 1.766-2.08 3.634 0.11 0.567 1.67 1.177 1.56 1.947-0.11 0.748-3.54 0.967-4.29 0.908-2.09-0.167-3.17-1.734-5.06-1.688-0.93 0.023-1.74 0.777-2.47 0.908-4.09 0.748-10.16-2.012-11.56 1.557-0.19 0.505-0.08 1.164-0.25 1.688-0.26 0.75-0.86 1.341-1.04 1.819-0.16 0.4-0.13 1.19-0.39 1.816-0.24 0.567-2.7 2.783-0.52 3.376 0.51 0.137 0.76-0.223 1.42-0.131 1.12 0.15 2.98 1.94 4.29 1.947 0.78 0.003 1.87-0.882 2.47-0.908 1.2-0.059 2.07 0.718 2.98 1.166 0.88 0.43 2.21 1.331 2.86 1.298 1.23-0.062 0.64-0.911 1.82-1.298 2.25 0.666 3.3 3.045 5.45 4.933 0.79 0.682 1.94 1.269 2.99 2.206 0.59 0.524 2.39 1.931 2.47 2.596 0.07 0.619-0.5 0.885-0.65 1.429-0.21 0.79 0.28 1.37-0.26 1.947-2.08-0.767-2.54-2.809-4.03-4.543-0.55-0.645-1.11-1.412-1.94-2.337-0.38-0.416-1.76-1.878-2.6-1.557-1.64 0.62 0.89 3.094 1.3 3.635 0.86 1.144 2 2.684 2.08 3.894 0.04 0.774-0.51 2.18-0.52 3.504-0.01 0.895 0.22 1.708 0.12 2.465-0.09 0.76-0.63 1.629-0.9 2.468-0.31 0.95-0.38 2.087-0.65 2.723-0.5 1.17-2.2 2.547-3.38 2.596-1.08 0.046-1.54-0.829-2.6-0.777-1.59 0.076-1.89 1.547-2.85 2.724 0.08 1.278 0.48 1.717 0.25 2.596-0.35 1.376-2.26 1.616-2.2 2.986 0.05 1.268 1.75 1.514 2.59 2.078 1.16 0.77 3.19 2.484 4.29 3.894 0.73 0.924 1.77 2.651 1.69 3.631-0.1 1.285-3.8 3.071-5.33 2.596-1.45-0.449-0.95-1.836-1.29-3.114-0.27-0.983-1.04-1.406-1.43-2.205-0.21-0.42-0.11-1.085-0.39-1.557-0.78-1.322-2.16-0.6-3.77-1.429-1.06-0.544-0.75-1.688-1.17-2.727-0.56-1.397-2.91-2.055-4.8-1.685-1.39 0.269-1.82 1.436-3.12 1.685-1.9-1.128 0.39-3.911-1.95-4.153-1.79-0.187-2.97 2.57-4.02 3.376-0.71 0.541-2 0.652-2.08 1.426-0.15 1.432 1.51 1.14 2.86 1.688 1.21 0.497 1.35 1.874 2.46 1.946 0.93 0.063 1.55-0.956 2.47-1.038 1.59-0.141 2.89 0.576 3.9 1.17-0.66 1.573-4.15 2.726-4.16 4.801 0 1.203 1.39 1.41 2.47 2.206 0.91 0.672 2.1 2.57 3.38 3.894 0.55 0.568 1.44 0.948 1.68 1.298 0.61 0.86 0.51 1.9 1.17 2.47 0.11 0.71-0.32 0.88-0.26 1.55 0.32 0.94 1.76 0.76 2.08 1.69-0.27 2.24 0.67 4.35-1.17 5.19-0.84 4.02-1.8 7.16-4.54 9.35-2.47 1.96-5.73 2.54-8.7 3.5-0.77 0.25-1.39 1.06-2.08 1.3-1.73 0.59-4.8 0.23-4.94 2.34-0.06 1.04 1.32 1.66 1.43 2.72 0.17 1.63-1.29 3.26-2.34 3.38-0.75 0.08-2.38-0.45-2.46-1.82-0.11-1.55 1.92-2.18 2.08-3.12 0.27-1.65-1.43-3.26-3.38-3.11-1.71 0.13-5.62 3.57-5.72 5.45-0.07 1.41 2.8 4.33 3.77 5.19 3.65 3.21 7.52 5.14 6.88 12.98-0.91 1.99-3.24 2.41-5.06 3.51-1.39 0.83-2.08 3.41-4.42 3.63-0.94-0.32-0.39-1.79-0.65-2.46-0.35-0.93-2.21-1.39-3.37-2.34-0.95-0.78-1.35-2.01-2.08-2.73-0.91-0.89-2.27-1.08-3.38-1.69-0.7-0.38-1.25-1.71-1.95-1.68-1.14 0.05-0.74 1.15-1.04 2.98-0.28 1.81-1.6 3.19-1.16 5.33 0.18 0.87 1.27 1.57 1.81 2.46 0.9 1.47 1.03 3.19 1.95 4.02 0.61 0.56 1.65 0.68 2.34 1.17 1.37 0.99 3.8 3.12 4.29 4.29 0.56 1.36 0.02 2.97 0.39 4.41 0.43 1.66 2.6 2.85 1.29 4.54-1.24-0.23-2.32-1.04-3.37-1.69-1.79-1.1-2.61-2.05-3.77-3.89-0.34-0.54-0.84-1.06-1.04-1.56-0.45-1.16-0.36-2.48-0.78-3.89-0.36-1.22-1.77-3.14-2.85-4.16-0.92-0.85-2.53-1.36-2.6-2.59-0.1-1.74 0.58-3.79 0.52-5.84-0.02-0.44-0.32-0.89-0.39-1.43-0.14-0.99 0.1-2.21-0.13-3.11-0.22-0.83-0.82-1.58-1.17-2.34-0.35-0.75-0.7-1.5-1.04-2.47-0.52-1.5-1.11-4.39-2.34-4.54-1.3-0.16-2.59 2.44-4.28 2.47-0.88 0.01-2.03-0.69-2.21-1.56-0.16-0.8 0.41-1.6 0.39-2.47-0.05-1.74-1.28-2.41-2.21-3.63-0.37-0.5-0.47-1.19-0.78-1.56-0.59-0.7-1.72-1.1-2.46-1.81-0.72-0.69-1.5-1.68-1.82-2.34-0.51-1.02-0.67-2.33-1.43-2.47-0.74-0.13-1.58 0.92-2.34 1.17-0.79 0.26-2.73 0.6-3.51 0.65-2.6 0.18-4.72-0.51-4.41 2.6-0.41 1.39-1.88 1.41-2.86 2.07-1.24 0.85-2.15 2.54-3.51 3.9-0.65 0.66-1.61 1.07-2.2 1.68-0.5 0.51-0.66 1.33-1.17 1.82-1.39 1.31-3.47 1.42-4.42 3.25-0.05 2.15 1.03 3.79 0.78 5.83-0.11 0.94-0.81 1.77-0.91 2.73-0.08 0.83 0.34 1.72 0.13 2.6-0.11 0.47-0.63 0.72-1.04 1.29-0.36 0.52-0.5 1.21-0.77 1.56-0.44 0.56-1.16 0.95-1.57 1.43-0.65 0.78-0.79 1.34-1.42 1.43-2.85 0.41-3.55-5-4.81-7.27-0.58-1.04-1.76-1.98-2.33-3.24-0.67-1.46-0.87-3.29-1.82-4.94-0.81-1.41-1.93-2.82-2.47-4.28-0.46-1.24-0.86-2.78-1.3-4.15-0.46-1.45-0.96-3.27-1.04-4.42-0.11-1.68 0.32-2.72-1.04-3.37-1.25 0.29-1.81 1.56-3.25 1.56-1.38 0-5.1-2.4-4.02-4.55-0.9-1.28-3.19-1.99-4.94-3.5-1-0.87-1.89-2.94-3.63-3.11-0.48-0.05-1.1 0.21-1.56 0.25-1.1 0.1-3.05-0.09-4.29 0-1.55 0.13-3.48 0.48-5.45 0.26-1.27-0.13-2.85-0.38-4.16-0.51-1.66-0.18-3.87-0.57-4.8-1.43-0.57-0.53-0.81-2.24-1.82-2.47-1.2-0.28-1.87 0.65-2.99 0.91-2.37 0.54-4.36-0.49-5.97-1.56-1.14-0.75-2.18-1.15-2.99-1.69-1.97-1.32-2.33-5.29-5.32-5.32-1.05-0.01-2.7 0.64-2.86 1.82-0.1 0.83 0.99 2.36 1.43 2.99 1.46 2.05 4.13 2.82 4.94 5.57 0.53 0.21 1.63-0.47 2.2 0.14 0.51 1.18 0 3.38 1.17 3.89 5.4 0.89 6.94-2.07 9.35-4.15 1.4 0.91 0.94 1.71 1.43 2.72 0.5 1.04 1.28 1.85 2.21 2.21 0.65 0.25 1.49 0.02 2.47 0.39 0.61 0.23 3.17 2.65 3.24 3.5 0.07 0.77-1.67 3.37-2.21 4.03-0.51 0.64-1.31 0.97-1.55 1.55-0.19 0.45-0.13 1.41-0.26 1.69-0.24 0.52-1.41 1.19-2.08 1.82-0.71 0.66-1.54 1.17-2.21 1.68-0.82 0.63-1.33 1.5-2.21 1.82-1.72 0.64-3.37 0.37-4.8 1.3-0.94 0.61-0.94 1.99-2.08 2.72-1.18 0.77-3.21 0.78-4.94 1.56-1.1 0.51-1.76 1.48-2.72 1.82-0.39 0.14-0.88 0.02-1.3 0.13-0.87 0.22-1.66 0.83-2.47 1.04-0.64 0.16-1.32 0.08-1.95 0.26-2 0.58-3.83 2.61-5.84 1.43-0.95-2.19-1.1-4.94-2.21-6.88-0.56-0.99-1.67-1.3-2.07-2.34-0.06-0.83 0.95-0.6 1.03-1.3-0.33-1.4-1.65-2.05-2.46-3.24-0.4-0.58-0.59-1.41-1.04-2.08-1.55-2.25-4.61-3.42-5.2-6.23-0.16-0.76 0.03-1.36-0.13-1.95-0.25-0.96-0.9-1.97-1.56-2.72-0.49-0.58-1.51-0.97-2.07-1.82-0.38-0.56-0.46-1.35-0.78-1.95-1.3-2.41-3.17-4.53-5.2-6.23-1.06 0.16-2.2 0.23-2.72 0.91 0.52 1.7 1.33 3.12 2.2 4.55 0.8 1.29 1.92 2.69 2.47 4.15 0.2 0.54 0.17 1.25 0.39 1.82 0.82 2.05 3.38 2.69 3.9 5.06 0.34 1.59-0.08 2.69 0.39 4.28 0.44 1.53 2.7 2.43 3.63 3.89 0.76 1.2 0.77 2.89 1.3 4.03 0.78 1.66 2.95 2.38 4.55 3.5 1.43 1.01 2.45 2.56 3.63 3.64 0.7 0.63 1.65 0.74 1.82 1.43 0.22 0.87-0.37 1.17-0.52 1.94 1 1.04 1.97 2.96 3.64 3.12 0.68 0.06 1.55-0.63 2.59-0.78 0.53-0.08 1.12 0.08 1.56 0 0.69-0.13 1.3-0.74 2.08-0.91 1.33-0.29 2.87-0.17 4.55-0.39 1.58-0.21 2.67-1.55 3.89-1.17 1.34 1.47 0.38 3.13 0 4.55-0.13 0.49-0.13 1.01-0.26 1.42-0.7 2.31-2.53 4.03-3.38 6.1-0.25 0.64-0.21 1.42-0.51 2.08-0.97 2.08-2.98 4.13-4.55 5.84-0.88 0.96-1.66 1.83-2.6 2.59-0.93 0.77-2.07 1.19-3.11 1.95-2.08 1.52-4.25 3.7-5.72 5.71-0.57 0.78-0.84 1.68-1.43 2.34-0.84 0.95-2.15 1.41-2.85 2.34-0.56 0.73-0.93 2.05-1.56 3.37-0.72 1.49-2.21 2.49-1.95 4.54 0.1 0.79 0.8 1.28 1.04 2.08 0.4 1.38 0.09 2.55-0.13 4.02 0.73 1.78 1.26 3.76 2.6 4.94 0.16 2.62-0.22 5.17 0 7.39 0.13 1.42 0.69 2.46 0.13 3.77-0.49 1.15-2.38 3.17-3.51 3.89-1.23 0.79-3.1 1-4.42 1.95-0.91 0.66-1.67 1.82-2.59 2.6-1.53 1.27-3.63 2.47-3.77 3.76-0.08 0.75 0.59 1.87 0.78 2.6 0.51 1.91 1 4.67 0.13 6.74-0.94 2.25-5.7 1.78-6.23 4.16-0.17 0.72 0.31 1.29 0.25 2.07-0.04 0.66-0.91 3.05-1.29 3.77-0.58 1.07-1.88 1.55-2.73 2.47-1.06 1.14-1.6 2.81-2.73 4.02-1.53 1.64-3.6 3.38-5.58 4.8-1.73 1.24-4.82 2.53-7.532 2.73-1.578 0.11-3.27-0.37-4.936-0.13-0.61 0.08-1.272 0.64-2.079 0.77-0.469 0.08-0.948-0.08-1.427 0-0.817 0.14-1.58 0.79-2.338 0.78-1.683-0.02-3.844-2.02-3.896-4.02-0.02-0.77 0.659-1.5 0.649-2.21-0.013-0.83-1.029-1.86-1.82-3.37-0.757-1.45-1.056-3.1-1.817-4.28-0.806-1.26-1.872-1.86-2.466-2.86-1.197-1.99-1.286-4.36-1.689-6.75-0.131-0.78-0.666-1.63-0.78-2.6-0.141-1.19 0.144-2.51-0.128-3.5-0.21-0.76-1.053-1.54-1.561-2.47-0.915-1.68-1.558-3.88-2.336-5.19-0.73-1.22-2.206-2.5-2.338-3.89-0.088-0.94 0.118-2.7 0.259-3.63 0.142-0.92 0.817-1.64 1.04-2.6 0.147-0.64-0.029-1.37 0.128-2.08 0.662-2.96 3.935-4.05 3.509-7.65-0.184-1.54-1.266-2.29-1.43-4.03-0.075-0.82 0.407-1.53 0.39-2.34-0.023-1.09-0.951-2.72-1.429-3.76-1.316-2.86-2.122-5.48-4.024-7.66-1.037-1.18-2.394-2.02-3.247-3.11-0.699-0.89-1.548-2.57-1.561-3.25-0.013-0.74 0.57-1.2 0.78-1.94 0.272-0.96 0.292-2.77 0.65-4.29 0.164-0.69 0.915-2.37 0.78-3.5-0.131-1.09-1.748-3.17-3.119-3.51-1.813-0.44-3.679 0.58-5.972 0.39-1.974-1.24-1.826-4.51-4.676-4.93-3.742-0.55-7.569 0.96-10.13 2.08-1.479 0.64-2.985 1.63-4.287 1.68-1.233 0.06-2.446-0.65-3.634-0.77-1.548-0.16-3.532-0.02-5.067 0.26-1.492 0.26-2.839 1.33-4.154 1.42-2.519 0.19-4.913-2.27-6.494-3.5-0.967-0.76-1.952-1.37-2.856-2.08-0.971-0.76-2.231-1.22-2.988-1.94-1.0231-0.99-1.0231-2.71-1.5578-4.03-0.6331-1.55-2.558-2.68-4.0272-4.15-1.0985-1.1-3.6205-2.74-3.8963-4.15-0.1374-0.73 0.3084-1.56 0.2595-2.34-0.069-1.14-0.92517-1.78-0.90886-2.6 0.02655-1.14 1.371-2.02 1.6892-2.98 0.1639-0.49 0.0852-1.19 0.2594-1.82 0.3639-1.32 1.2359-2.1 1.0393-4.02-0.0787-0.77-0.7379-1.47-0.7803-2.47-0.0265-0.68 0.4491-1.06 0.39-1.69-0.0983-1.1-1.5382-1.32-1.6887-2.59-0.1509-1.32 1.2559-2.4 2.079-3.9 0.3704-0.66 0.5739-1.69 0.9084-2.2 0.7281-1.11 1.9151-1.64 2.4694-2.73 0.4067-0.8 0.5381-1.99 0.9084-2.59 0.4789-0.78 1.4301-1.19 2.3386-2.21 0.738-0.83 1.04-1.83 1.558-2.21 0.652-0.47 1.626-0.58 2.338-0.9 2.404-1.1 4.162-2.51 5.322-4.81-0.354-2.09 0.181-2.97 1.04-4.41 0.794-1.334 1.374-2.609 2.729-3.376 1.623-0.918 3.148-1.003 4.282-2.724 0.568-0.862 1.421-2.35 1.431-3.244 0.013-1.285-1.319-2.931-2.467-3.118-1.174-0.187-2.977 0.892-3.636-0.386-0.21-0.41 0.078-1.367 0-1.819-0.152-0.849-0.879-1.449-0.909-2.075-0.062-1.22 1.2-2.488 1.558-3.894 0.485-1.914 0.016-3.379-0.131-5.582 1.816-2.861 5.85-1.442 9.871-1.17 0.603 0.043 1.295-0.144 1.948-0.128 2.384 0.056 4.26 0.774 5.064-1.298 0.301-0.779 0.57-3.68 0.39-4.415-0.213-0.868-1.919-3.12-2.729-3.631-1.288-0.819-3.158-0.462-3.896-1.947 0.6-2.563 3.473-0.429 5.195-1.039 0.879-0.311 0.781-1.832 1.561-2.078 0.531-0.167 1.21 0.535 1.948 0.521 0.63-0.013 2.909-1.157 3.506-1.56 0.83-0.561 1.085-1.724 1.817-2.206 0.495-0.324 1.147-0.285 1.688-0.518 1.106-0.475 2.503-1.442 3.247-2.336 1.073-1.285 1.555-2.879 2.857-3.114 1.741-0.318 5.68 0.344 5.975-1.56 0.279-1.813-1.597-3.239-0.908-5.192 0.544-1.544 1.931-1.272 3.895-2.206 0.948 0.672 0.673 2.593 0.778 3.766 1.206 0.01 3.663-0.357 3.896-1.429 0.292-1.338-1.758-2.697-2.207-3.504-0.486-0.875-0.591-2.412-1.558-2.596-1.978-0.38-3.899 2.724-6.365 2.724-1.621 0-3.339-1.249-3.765-2.465-0.243-0.695-0.024-1.35-0.132-2.078-0.157-1.062-0.793-2.163-0.518-3.631 0.994-1.705 3.286-1.98 4.936-2.858 0.623-0.331 1.125-1.04 1.817-1.298 1.164-0.43 2.886 0.003 4.027-0.649 0.721-0.41 0.518-1.118 1.04-1.947 0.324-0.521 1.118-0.826 1.557-1.426 0.306-0.416 0.341-1.046 0.65-1.429 1.128-1.403 3.187-1.921 4.024-3.373 0.37-0.642-0.64-0.882-0.387-1.819 0.419-0.904 2.039-0.239 2.984-0.39 1.292-0.2 2.486-1.77 3.896-2.075 1.473-0.318 3.05-0.124 4.418-0.649 0.816-0.314 1.567-1.055 2.338-1.17 0.272-0.039 1.039 0.148 1.426 0.131 0.496-0.019 1.03-0.324 1.69-0.389 0.954-0.096 2.137 0.232 3.377 0.258 2.053 0.046 4.005-0.616 5.713 0.131 0.896 0.39 0.794 1.403 1.945 1.816 0.58 0.21 1.35-0.082 2.21 0 1.27 0.122 2.6 1 4.29 1.17 0.6 0.06 1.22-0.075 1.81 0 1.86 0.227 3.9 1.203 5.72 1.816 1.52 0.515 4.74 1.154 4.8 2.596 0.08 1.707-2.8 2.206-4.02 2.206-2.05 0-4.75-1.193-6.88-0.518 0.03 2.937 3.2 5.159 6.1 4.802 0.26-1.38-1.64-0.613-1.43-1.947 1.3-0.977 2.85 0.655 4.68 0.39 0.71-0.193 0.59-1.226 0.77-1.947 1.55-0.937 3.48-2.314 5.85-1.298 0.12-0.229 0.29-0.403 0.52-0.518 0.15-1.425-1.56-2.17-0.65-3.507 0.45-0.921 2.87-0.603 3.25 0.131 0.18 0.878-0.6 0.783-0.53 1.557 0.46 1.036 1.52 1.2 2.08 1.17 1.28-0.069 1.53-1.209 2.73-1.819 0.49-0.246 1.2-0.272 1.82-0.518 0.73-0.291 1.36-0.881 1.95-1.039 0.43-0.114 1.08 0 1.69-0.131 0.76-0.164 1.57-0.78 2.2-0.777 0.79 0 1.35 0.905 2.34 1.039 0.54 0.072 1.16-0.308 1.95-0.39 0.64-0.068 1.3 0.076 1.82 0 1.24-0.18 2.09-0.832 3.12-0.78 0.72 0.04 1.96 1.016 2.46 0.521 0.84-0.832-1.12-1.452-0.52-2.209 2 0.151 4.11 0.105 6.11 0.391 2.96 0.422 5.76 1.891 8.44 1.946-0.25-1.803-2.32-1.285-3.25-2.074-0.28-0.243-1.44-2.144-1.43-2.727 0.01-0.292 1.47-2.7895 1.82-3.114 1.15-1.0754 4.9-1.0689 5.97 0.3864 0.74 0.9966 0.5 2.4976 1.56 2.4686 0.92-0.027 1.41-2.2814 2.47-2.3373 0.88-0.0461 1.32 1.4453 2.21 1.4293 1.07-0.023 1.82-2.0261 3.24-2.0783 0.77-0.0293 1.03 0.3934 2.21 0.5177 0.82-0.5209-0.27-1.209 0.13-1.9465 1.46-1.0554 4.77-0.2528 6.62-0.9083 0.52-0.616-0.65-1.0517-0.12-1.6877 1.59-1.1178 4.29-1.2193 7.01-1.6849 1.66-0.2849 3.24-1.4419 4.54-1.5601 1.37-0.1211 2.67 0.7998 3.9 0.7803 0.74-0.0131 1.62-0.2393 2.34-0.5182 0.73-0.2849 1.23-0.99306 1.95-1.17 1.14-0.27839 2.58 0.13457 3.89 0.00002 1.4-0.14107 2.63-0.68159 3.64-0.51771 0.94 0.15038 1.7 1.1569 2.6 1.298 2.73 0.426 5.55-0.4102 8.05 0.2589 0.44 0.121 0.89 0.5833 1.43 0.7798 1.67 0.6099 2.8 0.4199 3.11 2.4647 1.32 0.4656 2.09 1.6686 3.64 2.0783 1.04 0.2719 2.08-0.1313 3.25-0.1313 1.53 0 3.5 0.0592 4.8 0.2593 0.75 0.1146 1.36 0.6616 2.08 0.7799 0.53 0.0852 1.22-0.0559 1.82 0 0.81 0.0754 1.54 0.4097 2.2 0.3901 1.37-0.0428 2.4-1.2556 3.51-1.4293 0.6-0.0917 1.39 0.2133 1.95 0.2593 2.18 0.1835 4.7-0.2853 6.49 0.1309 0.96 0.223 2.59 1.2714 3.64 2.0745 0.76 0.5836 1.22 1.5106 1.95 1.9466 0.68 0.413 2.41 1.154 3.12 1.04 0.82-0.132 0.86-1.056 1.68-1.426 2.58-0.574 7.15 0.819 9.22-0.131 0.81-0.371 0.65-1.2196 1.3-1.6884 3.9-0.19 7.78 0.1606 11.43 0.2588 1.28 0.0359 2.61-0.3277 3.77-0.1275 1.28 0.2225 2.22 1.5111 3.5 1.9471 0.85 0.288 2.36 0.137 3.64 0.39 0.86 0.167 1.56 0.685 2.21 0.777 1.38 0.196 2.71-0.154 4.02-0.259 2.98-0.24 6.81-0.397 9.74 0.78 1.56 0.626 2.22 1.891 3.9 2.075 2.4 0.265 6.11-0.197 8.57 0 0.59 0.049 1.14 0.291 1.56 0.258 0.82-0.059 1.32-0.757 2.34-0.777 1.28-0.029 3.33 2.003 5.19 1.689 0.81-0.545-0.64-1.302 0.13-1.819 0.73-0.607 1.73-0.007 2.86 0 0.61 0.006 1.37-0.312 1.94-0.26 1.43 0.125 2.79 1.406 4.55 1.816 1.4 0.328 3.33 0.449 5.07 0.263 1.25-0.138 2.32-0.558 3.5-0.391 0.58 0.079 1.09 0.495 1.69 0.649 0.55 0.142 1.1 0.007 1.56 0.128 0.43 0.118 0.86 0.525 1.3 0.649 2.42 0.692 5.63 1.033 8.18 1.819 1.5 0.462 3.04 1.393 4.29 1.426 0.61 0.02 1.16-0.265 1.94-0.259"/>
						  <path id="western-hemi" d="m47.909 37.215c0.029-0.246-0.148-0.289-0.128-0.521-0.397-0.003-0.856-0.075-0.781 0.39 0.187 0.374 0.689 0.439 0.909 0.131m3.637 18.82c0.613-0.629-0.259-1.96-1.171-1.429-0.089 0.475 0.167 1.622 1.171 1.429m44.673-37.902c0.83-0.141 1.682 0.233 2.21-0.518-0.619-2.858-4.575-1.111-6.883-0.908-0.486 0.813-1.135 1.462-1.299 2.596 1.791 0.452 3.952-0.826 5.972-1.17m0.649 9.348c0.738-0.256 1.761-0.125 1.949-0.912-0.607-0.485-1.23-1.14-1.949-1.167-0.941-0.032-1.393 0.8-2.338 1.299-1.099 0.58-2.62 0.72-2.725 1.687 2.01 0.394 3.821-0.481 5.063-0.907m23.252-13.37c0.43-0.279 1.09-0.655 0.77-1.298-1.43-0.672-3.85-0.16-5.97-0.389-1.2-1.696-3.21-1.958-3.38 0.779 2.42 1.96 6.08-0.914 8.58 0.908m5.97 48.932c-0.54-0.633-3.45 0.075-4.29 0.649-0.57 0.396-0.96 1.363-1.56 2.078-0.61 0.737-1.29 1.307-1.81 1.946-0.47 0.577-3.1 4.369-1.04 4.802 0.88 0.184 2.68-1.639 2.85-2.337 0.59-2.379 1.66-4.077 3.51-5.191 1.07-0.646 2.16-0.564 2.34-1.947m1.82-2.078c2.59-1.102-0.51-4.494-1.69-4.802-2.11-0.551-5.1 1.544-7.53 2.206-1.37 0.374-2.68 0.406-2.99 1.56 1.23 2.032 3.66-0.446 5.45-0.131 0.91 0.161 1.44 1.403 2.34 1.557 0.61 0.105 4.17-0.286 4.42-0.39m5.71 9.865c-1.84-0.655-3.55 0.446-5.06 0.649-0.9 0.121-2.55-0.183-2.34 1.167 0.17 1.101 1.87 0.701 2.86 0.39 2.05-0.649 3.34-1.206 4.54-2.206m1.56 79.95c1.03-0.16 0.73-2.52-0.52-1.95-0.94 0.44-0.45 2.11 0.52 1.95m0.26-85.141c1.02-0.804 0.57-2.442-0.52-2.728-0.43-0.111-0.99 0.315-1.69 0.263-0.73-0.056-1.47-0.728-2.07-0.78-1.04-0.089-2.09 0.422-2.47 0.907-0.04 0.777 0.57 0.902 0.52 1.689-1.27 0.901-0.6 3.916 0.65 4.024 1.32 0.115 2-3.333 3.76-3.634 0.64-0.112 0.97 0.363 1.82 0.259m6.75 2.205c-0.54-0.528-2.3-0.377-3.5-0.259-0.85 0.086-1.86 0.266-1.95 0.908 1.35 0.62 5.03 1.066 5.45-0.649m27.28-63.726c-0.17-0.1801-0.62-0.1801-0.78 0v0.5178c0.55 0.1182 0.65-0.2133 0.78-0.5178m14.93 12.717c0.64 0.079 1-0.124 0.91-0.777-0.58-0.406-1.42 0.128-0.91 0.777m37.14 174.18c0.26 4.71-3.36 6.22-5.45 9.34-0.44 0.66-0.68 1.69-1.3 2.6-1.25 1.83-2.63 2.21-2.47 5.58 0.05 0.93 0.52 1.83 0.52 2.86 0 1.25-0.11 2.89-0.39 4.02-0.21 0.86-0.92 1.56-1.04 2.34-0.11 0.79 0.23 1.4 0.13 2.07-0.11 0.75-0.86 1.81-1.43 2.86-1.2 2.21-1.46 4.82-3.89 5.71-1.43 0.52-3.37 0.23-4.94 0.78-0.63 0.22-1.43 0.8-2.21 1.16-2.26 1.06-5.48 2.48-6.1 4.81-0.55 2.07 0.78 3.73 0.39 6.1-0.4 0.7-0.95 1.41-1.56 2.21-0.56 0.73-0.84 1.6-1.43 2.33-0.78 0.98-1.99 1.41-2.46 2.73-0.16 0.44-0.06 0.98-0.26 1.68-0.08 0.27-0.56 0.67-0.78 1.17-0.21 0.46-0.2 1.05-0.39 1.43-0.6 1.2-2.36 3.92-3.64 4.28-2.7 0.76-5.54-1.14-7.4-0.78 0.27 1.3 1.21 1.17 1.82 2.08 0.35 0.54 0.55 1.25 1.04 1.82 0.58 0.67 1.09 0.92 1.17 1.69 0.14 1.59-1.1 3.2-1.95 3.76-0.78 0.51-2.39 0.81-3.77 1.04-0.96 0.16-3.44 0.17-3.9 0.78-0.67 0.9 0.36 3.13-0.12 4.02-0.97 1.9-3.59-0.05-4.94 0.52-0.11 0.98 0.25 2.01 1.04 2.46 0.82 0.48 2.06-0.14 2.6 0.78-0.27 1.3-1.66 1.46-1.95 2.73 0.04 1.24 0.42 1.56 0.26 2.34-0.34 1.66-2.93 1.59-2.86 3.37 0.11 2.66 5.1 1.57 5.2 4.15 0.05 1.57-1.43 1.59-1.95 3.12-0.28 0.82 0.16 1.01 0 1.69-0.22 0.92-1.3 1.18-1.3 2.2 0 1.24 1.82 2.61 2.72 3.64 0.89 1 2.04 2.44 3.25 3.11 1.83 1.01 4.54 0.78 5.33 2.6-0.25 1.09-1.3 1.38-2.34 1.68h-0.26c-0.35-0.21-1.6-0.21-1.95 0h-1.81c-1.74-0.8-3.85-1.31-5.98-2.07-0.77-0.27-1.63-0.93-2.47-1.3-0.62-0.28-1.33-0.39-1.82-0.65-1.11-0.58-2.37-2.49-3.5-3.24-0.69-0.46-1.76-0.7-2.21-1.17-0.43-0.45-0.66-1.41-1.04-1.95-0.42-0.6-1.19-1.03-1.69-1.68-1.08-1.44-2.45-3.36-2.46-4.42-0.01-1.04 0.99-1.74 0.65-2.72-0.32-0.92-2.32-0.72-2.6-1.82-0.18-0.66 0.57-1.78 0.52-2.73-0.03-0.54-1.06-1.29-0.65-2.07 0.46-0.91 1.34 0.07 2.08-0.39-0.55-1.88 0.04-4.89-1.82-5.45-0.96 0.8 0.97 2.61-0.65 3.11-1.57-0.7-1.21-2.76-1.56-4.28-0.23-1-0.73-1.91-0.78-2.99-0.02-0.56 0.22-1.23 0.13-1.81-0.28-1.75-2.22-3.19-2.34-4.94-0.05-0.84 0.52-1.56 0.65-2.46 0.09-0.61-0.08-1.3 0-1.95 0.12-0.82 0.57-1.58 0.65-2.33 0.15-1.43 0-3.88-0.26-5.07-0.32-1.5-1.51-2.77-1.69-4.41-0.06-0.59 0.2-1.58 0.13-2.34-0.06-0.7-0.45-1.4-0.51-2.2-0.07-0.74 0.18-1.45 0.25-2.34 0.14-1.63-0.31-3.44-0.25-5.06 0.01-0.48 0.26-0.83 0.25-1.3-0.01-1.34-0.46-2.69-0.52-4.02-0.1-2.47 0.27-4.21-0.13-6.49-0.3-1.73-0.67-4.37-1.29-5.45-0.7-1.21-3.43-3.26-4.81-4.03-0.91-0.5-2-0.68-2.99-1.16-2.11-1.04-6.21-3.23-7.14-5.33-0.27-0.6-0.23-1.4-0.52-2.07-0.56-1.33-1.75-2.49-2.6-3.77-1.6-2.45-2.9-5.52-4.54-8.05-0.84-1.28-1.56-2.74-2.47-3.76-0.53-0.6-2.25-1.17-2.47-2.08-0.29-1.2-1.18-2.84-1.03-3.76 0.18-1.24 2.6-2.24 2.59-3.37 0-0.97-1.29-1.53-1.56-2.34-0.65-1.98 0.39-3.15 1.17-4.8 0.26-0.55 0.51-1.42 0.78-1.82 0.48-0.71 1.45-0.91 2.08-1.69 0.35-0.43 0.58-1.33 1.04-1.94 0.99-1.32 2.58-1.81 2.99-2.99 0.33-0.96 0.52-5.78 0.12-7.4-0.22-0.93-1.09-1.71-1.42-2.59-0.59-1.57-0.73-3.28-2.34-3.25-1 0.02-1.7 1.12-2.34 1.82-0.15 0.92-0.07 1.92-1.04 2.2-1.47 0.44-2.04-1.55-3.76-2.07-0.69-0.21-1.78-0.2-2.21-0.39-1.26-0.56-1.66-2.4-2.99-3.12-1.11-0.59-2.05-0.38-2.73-1.3-0.28-0.62-0.06-1.75-0.13-2.59-1.42-0.83-2.625-3.94-4.281-4.67-1.099-0.49-2.781-0.45-4.155-0.91-0.647-0.22-1.145-0.5-1.821-0.65-0.832-0.19-1.689-0.2-2.334-0.52-2.572-1.28-3.959-5.41-7.143-5.32-1.358 0.04-2.666 1.3-3.896 1.3-1.224-0.01-3.273-0.98-4.808-1.69-1.594-0.74-3.358-1.14-4.673-1.82-1.063-0.54-1.801-1.53-2.729-1.95-0.712-0.31-1.751-0.37-2.335-0.64-0.83-0.39-1.695-1.23-2.729-1.95-0.98-0.68-2.039-1.72-2.079-2.59-0.042-1.02 0.935-1.89 1.04-2.86 0.335-3.09-1.945-5.32-3.378-7.14-1.063-1.36-2.309-2.51-3.375-3.76 0.06-0.84 0.06-0.99 0-1.82-0.806-0.78-1.485-1.94-2.338-3.12-0.771-1.06-2.273-2.18-2.466-3.37-0.239-1.46 0.554-2.74 0-4.155-0.925-2.35-4.188-1.289-3.768 1.815 0.118 0.86 1.325 2.01 1.689 2.86 0.374 0.86 0.302 1.94 0.649 2.98 0.335 1 1.341 1.87 1.689 2.99 0.551 1.78 0.534 3.69 1.039 4.8 0.447 0.99 2.09 1.92 1.168 3.12-1.23 0.25-1.702-0.98-2.466-1.69-0.427-0.4-1.971-1.15-2.207-2.08-0.197-0.76 0.485-1.79 0.259-2.72-0.446-1.84-4.145-1.88-4.159-3.77-0.006-1.18 1.548-1.32 1.562-2.46 0.009-1.26-1.709-2.32-2.08-3.38-0.338-0.97-0.393-2.521-0.518-3.891-0.121-1.285 0.036-2.773-0.262-3.766-0.266-0.892-1.607-2.117-2.466-2.596-1.138-0.633-2.04-0.371-2.598-1.298-0.485-0.81-0.803-2.501-0.908-3.373-0.187-1.56-0.043-3.267-0.131-4.932-0.085-1.669-0.256-3.268 0-5.061 0.643-1.255 1.813-1.875 2.469-3.117 0.456-0.865 0.521-1.934 1.037-2.855 0.95-1.695 3.023-3.261 4.417-4.933 1.502-1.799 2.886-3.523 3.765-5.581 0.315-0.731 1.161-2.35 1.039-3.245-0.17-1.249-2.525-2.278-2.338-3.763 0.118-0.921 1.43-0.908 1.82-1.816 0.2-0.468 0.381-1.776 0.391-2.337 0.019-1.252-0.643-2.556-0.391-3.893 0.213-1.141 1.912-1.603 1.04-2.855-0.866-1.239-2.42 0.668-3.378-0.131-0.879-0.738 0.177-1.629 0.259-2.986 0.033-0.541-0.315-1.157-0.259-1.557 0.079-0.58 1.21-1.557 0.908-1.947-0.702-0.888-1.489-3.143-2.987-3.894-1.906-0.957-3.969-0.311-6.622-0.78-1.626-0.285-2.397-1.806-3.895-1.684-0.926 0.072-1.457 1.13-2.729 1.684-1.259 0.551-2.906 0.364-4.156 0.649-1.239 0.285-1.836 1.141-3.118 1.039-1.069-0.082-1.076-1.046-2.335-1.167-0.492-0.049-1.423 0.305-2.207 0.391-2.008 0.209-5.631 0.311-7.6642-0.132-1.8597-0.403-3.0075-0.993-5.0637-1.947-1.5447-0.714-4.411-1.596-4.2866-2.727 0.07868-0.727 2.7158-1.497 3.7653-1.815 1.692-0.515 2.735-1.348 4.0272-1.429 0.4984-0.03 1.1543 0.308 1.8168 0.262 0.6652-0.049 1.4852-0.662 2.3382-0.78 1.814-0.253 4.372 0.091 4.155-1.688-1.377-1.088-6.9949 0.806-7.1426-1.557-0.0885-1.429 2.1316-1.862 3.7686-2.206 1.488-0.315 3.748-0.846 5.063-0.78 1.483 0.075 3.433 1.734 4.286-0.128 0.414-1.324-0.505-2.435-0.78-3.507 1.102-1.521 3.131-1.331 4.676-1.557 1.765-0.259 3.204-0.573 4.936-1.298 1.518-0.6355 3.132-1.0615 4.932-1.2976 1.765-0.2295 3.477-0.8948 5.067-1.0391 1.309-0.1178 2.509-0.0131 3.765-0.2589 1.112-0.2165 2.286-0.8324 3.509-0.7765 0.817 0.0358 1.515 0.6322 2.335 0.7765 0.771 0.1346 1.653-0.0391 2.47 0.1313 0.626 0.1308 1.19 0.5536 1.816 0.649 0.984 0.1471 2.04-0.1378 2.988 0 0.872 0.1243 1.614 0.6686 2.467 0.7766 2 0.2588 4.289-0.1048 6.233 0.2626 0.738 0.1373 1.404 0.5009 2.208 0.6485 0.761 0.1376 1.597-0.0196 2.338 0.1276 1.033 0.207 1.896 1.183 2.987 1.298 2.011 0.21 4.267-0.872 6.363-1.039 1.519-0.117 3.083 0.063 4.676-0.259 1.45-0.2915 2.854-0.852 4.156-0.9074 0.708-0.0298 1.301 0.216 1.948 0.1313 0.672-0.0922 1.478-0.8986 2.207-0.7803 0.967 0.1541 0.797 1.3767 1.82 1.6874 1.131-0.5864 2.259 0.04 3.505 0 1.213-0.042 2.303-0.5994 3.633-0.3894 2.37 0.3704 5.67 2.6844 7.53 1.4284 0.47-0.318 0.36-0.865 0.78-1.6873 0.58-1.1178 1.71-2.4321 1.43-4.0253-2.6 0.0428-5.08 1.3143-8.05 1.4293-2.99-1.8748 0.8-3.0383 2.99-3.894 1.8-0.7077 3.23-2.2776 5.45-2.5956 1.82-0.26207 3.82 0.3995 5.98 0.649 1.26 0.1439 2.52-0.0884 3.24 0.1276 1.28 0.3836 1.94 1.6453 2.99 1.947 0.46 0.1308 1.2 0.1178 1.82 0.2621 1.17 0.2687 2.21 0.8851 3.38 0 0.91 0.1639 1.02 1.1374 1.94 1.298 0.87-0.4655 1.53-1.6485 2.86-1.947 0.58-0.1313 1.18 0.0983 1.82 0 1.06-0.1704 2.47-1.6025 3.12-0.2621-0.27 0.9372-1.69 1.0783-2.47 1.819-0.7 0.6588-1.78 2.1695-1.69 2.8549 0.16 1.2388 2.01 0.7602 2.08 2.3371-0.28 0.9073-1.33 0.5013-2.21 0.9073-0.8 0.371-1.1 1.137-1.95 1.298-2.36 0.446-4.32-0.593-6.36-0.518-0.1 0.885 1.01 1.4 1.56 1.685 1.85 0.974 3.36 0.839 5.97 0.78 1.34-0.029 2.88 0.4 4.03-0.39 0.72-0.498 0.69-1.596 1.3-2.206 0.73-0.73 2.42-1.4748 3.5-1.2974 0.59 0.0982 1.42 0.7994 1.43 1.2974 0.02 1.18-1.67 0.803-1.69 2.078 1.1 0.659 4-0.721 4.16-1.819 0.11-0.799-0.95-1.262-0.91-2.0741 0.06-1.3604 1.91-1.3376 1.69-2.7273-0.89-0.7017-1.83 0.1508-2.73 0-1.28-0.2128-2.42-1.7403-2.99-2.7269 0.57-0.6983 1.75-0.2328 2.6-0.128 0.95-1.3208 2.73-1.8353 5.19-2.0778 0.88-0.0852 2.05-0.4326 2.47 0.3901 0.21 1.2286-1.82 1.9661-1.43 3.3758 1.75 0.4358 2.33-1.9209 3.77-2.8581 0.64-0.4129 1.55-0.6881 2.47-1.0359 0.8-0.3045 1.68-1.0582 2.34-1.0387 0.71 0.0196 0.84 0.6095 1.55 0.9079 0.64 0.2686 1.48-0.1839 1.69 0.649-1.5 2.6053-7.11 1.1076-8.57 3.7623 0.32 1.7798-0.88 3.4778 0.13 4.6737 0.72 0.853 2.35 0.272 2.73 1.167 0.5 1.197-1.58 1.197-1.04 2.596 1.37 0.823 3.01-0.783 4.28-1.426 1.37-0.691 3.09-1.507 3.25-3.1167-0.69-1.3176-3.24-0.2984-3.63-1.6849-0.22-0.7538 0.78-2.4415 1.03-2.7268 1.36-1.5173 6.09-3.6776 9.48-3.3759 0.65 0.0591 1.3 0.4525 1.95 0.521 2.23 0.2295 4.87-0.9637 6.63 0 1.41-0.8227 3.1 0.1113 5.06-0.1308 1.51 0.8911 1.09 2.7892 3.38 3.6347 0.62 0.2295 1.39 0.0656 2.2 0.2588 0.61 0.1443 1.26 0.8525 1.95 1.17 0.99 0.446 1.74 0.3445 1.95 1.0359 0.21 0.6788-0.71 1.1178-0.65 1.8187 0.56 0.463 0.09 1.158 0.39 1.816 0.56 1.203 1.98 1.115 3.38 1.688 0.98 0.403 3.08 1.639 2.98 2.596-0.06 0.643-1.97 1.77-2.59 2.078-0.45 0.216-2.64 1.275-3.38 1.167-1.22-0.18-1.7-2.662-3.38-2.596-0.72 0.029-1.41 0.469-1.43 1.429-0.02 1.704 1.91 1.77 1.95 3.245 0.05 1.763-0.96 1.885-2.46 2.982-1.08-0.435-1.98-1.049-3.38-1.166-0.83 0.986 1.36 1.34 0.65 2.595-2.09 0.443-3.68-0.59-5.58-1.166-0.6-0.181-1.46-0.108-1.95-0.39-0.74-0.427-0.96-1.688-1.56-2.337-0.71-0.754-2.11-1.823-3.25-1.816-1.6 0.003-3.93 1.996-5.2 0.128 0.88-2.973 5.05-0.767 7.8-1.816 1.02-0.39 1.37-1.472 2.21-1.947 1.68-0.957 4.41-1.091 4.15-2.986-0.13-0.954-1.46-0.94-2.2-1.429-1.02-0.662-1.8-2.9989-3.25-3.1134-0.75-0.0592-1.29 0.5736-2.08 0.649-1.68 0.1573-3.55-0.6756-5.06 0-0.71 0.4034-0.23 1.0484-0.78 1.8154-0.46 0.629-1.53 0.807-1.95 1.429-0.5 0.731-0.4 1.639-1.04 2.206-1.07 0.944-3.32 1.095-4.68 1.557-0.6 0.206-1.36 0.914-1.94 0.911-1.08-0.007-1.53-1.442-2.73-0.911-0.11 1.39 1.47 1.953 2.46 2.596 1.08 0.694 2.22 1.386 2.6 2.595-1.05 2.243-2.74-0.117-4.41-0.127-1.85-0.013-4.53 3.507-6.11 0.649 0.39-1.515 2.06-1.751 2.47-3.245-1.83 0.311-3.43 1.855-5.58 2.337-0.91 0.2-1.79 0.151-2.6 0.386-1.56 0.456-2.64 1.603-4.28 2.21-0.65 0.236-1.41 0.164-2.08 0.386-1.57 0.525-3.45 1.462-5.07 2.338-1.65 0.894-3.52 1.835-4.54 2.726-0.56 0.479-2 2.183-1.95 2.724 0.06 0.774 1.52 1.029 1.56 1.819-0.04 0.479-0.85 1.511-0.26 2.206 0.53 0.633 1.59 0.121 2.72 0.259 1.99 0.246 3.29 1.885 4.81 2.727 1.15 0.636 2.86 1.393 4.16 1.557 1.78 0.223 3.78-0.522 4.02 0.908 0.24 1.373-1.68 1.865-1.82 2.727 0.96 1.268-0.65 1.874-0.65 2.986 0.01 0.901 1.11 2.251 2.08 2.333 1.31 0.111 3.22-1.288 3.77-2.596 0.64-1.556 0.37-3.667 1.56-4.801 6.05 0.167 11.17-2.747 10.78-8.955-0.04-0.613-0.39-1.403-0.26-2.078 0.19-1.003 1.91-1.845 1.68-3.114 1.7-0.521 1.63-3.238 3.38-3.634 1.47-0.331 3.13 1.038 5.06 0.908 0.63-0.043 1.45-0.607 2.08-0.519 1.27 0.178 2.04 1.741 2.99 2.466 0.84 0.645 1.73 0.439 1.95 1.297-0.25 1.455-1.28 1.491-1.17 2.855 0.09 1.19 1.33 2.091 1.95 2.209 0.94 0.177 2.3-0.331 3.24-0.78 1.74-0.822 3.23-3.3 4.68-2.986 1.14 0.25 2.04 3.884 2.21 5.192 0.18 1.403-0.19 2.475-0.13 3.766 0.16 2.189 2.92 1.967 4.28 3.114 0.41 0.347 0.57 1.235 0.91 1.688 0.66 0.878 1.46 0.878 1.56 1.816 0.24 2.241-2.03 2.431-1.82 4.932-0.47 0.97-1.65 0.912-1.56 2.206 0.15 2.048 3.1 0.478 3.9 2.078 0.43 0.859-0.07 1.498-0.39 2.724 1 1.199 1 3.113-0.78 3.117-1.08 0-1.38-1.16-2.47-1.43-0.61-0.15-1.43-0.121-2.21-0.258-0.66-0.118-1.45-0.315-2.07-0.39-1.61-0.191-3.34 0.275-4.29-0.649 1.55-2.052 3.6-4.074 5.59-5.841 0.59-0.528 1.86-0.888 1.55-1.947-1.1-0.97-2.46 0.059-3.5 0.649-1.1 0.616-2.4 1.505-3.64 1.688-2.15 0.318-5-0.629-6.75 0.518-0.24 0.98 2 0.6 1.69 2.078-0.86 0.141-1.68 0.21-2.34-0.39-0.6-0.544-0.26-1.36-0.65-1.688-0.66-0.551-3.17-0.701-4.29-0.518-1.36 0.223-2.57 1.039-2.72 2.206 1.64 0.767 4.34-0.79 4.93 1.17-0.9 1.616-3.01 2.504-2.73 4.671 0.11 0.835 1.11 1.953 1.82 2.078 0.72 0.124 1.12-0.587 1.82-0.522 0.73 0.069 0.57 0.909 1.43 0.781 1.25-0.534 1.94-2.288 3.37-2.206 1.72 2.084-1.55 3.1-3.37 3.762-2.08 0.754-4.78 1.154-6.37 1.819-0.83 0.348-3.97 3.383-4.41 1.036-0.32-1.691 1.55-1.203 1.95-2.596-2.01-0.389-3.88 0.866-5.71 1.56-2.61 0.987-7.04 1.613-7.67 4.543-0.12 0.587 0.26 1.685-0.13 2.075-0.31 0.315-2.17 0.37-2.98 0.649-1.26 0.429-2.35 1.347-3.12 1.557-0.59 0.16-1.45 0.114-1.82 0.262-1.03 0.4-1.41 1.796-2.6 2.724-0.48 0.38-1.56 0.656-1.95 1.039-0.67 0.668-0.76 2.343-1.94 2.596-0.76 0.065-1.37-0.567-2.08-0.132-0.09 1.656 0.58 3.907-0.13 5.582-1.54 1.252-3.23 2.141-5.2 3.245-1.08 0.613-2.06 0.77-3.37 1.429-0.93 0.466-1.79 1.573-2.86 2.206-2.48 1.458-5.47 3.186-5.45 6.877 0 0.8 0.41 1.66 0.51 2.6 0.07 0.55-0.06 1.09 0 1.69 0.16 1.35 1.14 3.08 0 4.02-1.74-0.72-3.97-0.96-5.19-2.21-0.33-1.28 0.68-2.33 0.52-3.5-0.12-0.94-1.44-2.61-2.21-2.73-0.79-0.12-1.52 0.72-2.33 0.65-0.97-0.08-1.88-1.41-3.12-1.56-1.83-0.209-3.17 0.42-5.2 0.13-1.96 1.05-2.53 2.91-4.93 2.73-0.846-0.06-1.62-0.71-2.597-0.91-1.059-0.22-2.666-0.59-3.768-0.52-2.211 0.15-3.814 1.74-5.713 2.73-1.676 0.87-4.047 1.95-4.545 3.76-0.273 0.98-0.043 2.35-0.391 3.25-0.229 0.59-0.731 1.12-1.04 1.68-1.456 2.66-2.663 6.17-1.557 10 0.164 0.57 1.61 3.76 2.207 4.41 0.669 0.72 2.64 1.8 3.765 1.82 0.951 0.02 2.066-0.49 2.987-0.65 1.069-0.19 2.407-0.21 3.378-0.52 2.808-0.9 2.253-4.69 5.064-5.97 1.226-0.56 2.647-0.67 4.8-0.78 0.69 0.58 1.01 1.59 0.92 2.47-0.08 0.66-0.71 1.26-1.04 2.2-0.299 0.83-0.361 1.8-0.653 2.47-0.387 0.87-1.25 1.51-1.558 2.34-0.203 0.53-0.092 1.2-0.259 1.68-0.298 0.86-1.443 1.46-0.912 2.34 2.781 1.1 6.142-0.32 8.572 0.13 1.02 0.19 3.14 1.41 3.12 2.98-0.02 1.18-0.92 1.96-1.04 3.25-0.16 1.63-0.84 3.61-0.91 4.93-0.12 2.15 3.16 5.87 5.45 5.84 2.47-0.03 3.91-2.46 6.89-1.17 0.98 0.43 2.03 2.03 3.11 1.95 0.9-0.07 2.26-1.64 2.86-2.73 0.73-1.32 0.79-2.44 2.08-3.11 1.39-0.72 2.5-0.37 4.28-1.04 0.8-0.3 1.49-0.8 2.21-1.3 0.63-0.43 1.29-1.56 2.08-0.78 1.04 1.04-1.27 1.62-0.39 2.73 1.8 0.95 2.72-1.77 4.03-1.82 0.41-0.01 1.85 0.81 2.59 1.3 1.02 0.67 1.36 1.6 2.47 1.82 0.71 0.14 1.86-0.27 2.86-0.13 1.32 0.19 2.11 1.32 3.12 1.29 1.22-0.03 1.81-1.36 2.85-1.55 2.29-0.42 3.15 0.25 4.16 1.69 1.13 0.19 1.17-1.31 2.2-0.78-0.56 1.13 0.2 1.65 0.65 2.59 0.3 0.61 0.25 1.04 0.53 1.3 0.61 0.59 1.81 0.59 2.72 1.17 0.96 0.6 1.5 1.72 2.6 2.98 1.13 1.3 3.03 2.63 4.54 2.73 1.43 0.09 2.59-0.41 3.77-0.26 2.69 0.33 4.36 1.67 6.24 3.12 1.05 0.8 1.99 1.36 2.33 2.33 0.24 0.68 0.12 1.58 0.39 2.34 0.57 1.61 2.93 2.39 2.08 5.19 0.39 0.82 1.27 1.11 2.21 1.69 0.75 0.46 1.39 1.42 2.2 1.55 0.53 0.09 1.11-0.16 1.56-0.13 1.48 0.1 2.49 0.68 3.77 1.17 0.79 0.31 1.81 0.43 2.34 0.78 0.66 0.45 0.74 1.94 1.56 2.34 0.53 0.26 1.71-0.1 2.59 0 1.4 0.16 3.29 1.01 4.55 1.04 0.76 0.01 1.4-0.32 2.08-0.26 3.18 0.24 4.98 4.04 8.05 5.19 0.95 0.35 2.46 0.1 3.12 0.39 1.15 0.5 2.12 4.02 2.2 5.58"/>
						 </defs>
						 <g>
						  <a xlink:href="javascript:void(0);" class="cont-option australia" data-key="bmc_demographic_q5" data-continent="Australia">
						   <path primary-fill="#c4c4c4" fill="#c4c4c4" d="m672.19 269.48c0.77-0.06 1.81-0.75 2.46-0.13-0.47 1.12-1.32 2.21-2.46 2.73-0.55 0.24-1.25 0.15-1.82 0.39-1.08 0.44-1.65 1.56-2.6 2.33-0.89 0.73-2.07 1.35-2.99 1.95-0.88 0.58-2.16 1.75-3.24 0.91 0.08-1.52 1.7-1.5 2.08-2.73-0.01-0.91-0.81-1.01-0.78-1.95 1.8-1.57 4.63-2.71 5.06-5.96 0.19-1.45-0.98-4.54 0.78-4.68 2.07-0.16 0.9 2.08 1.04 3.25 0.05 0.47 0.54 0.79 0.78 1.43 0.43 1.13 0.39 2.17 1.69 2.46zm-12.6 7.79c-0.73 2.16-3.88 3.3-5.98 4.67-0.64 0.43-1.16 1.38-1.95 1.69-1.01 0.4-2.16 0.27-3.24 0.78-1.71 0.8-3 2.38-4.55 3.37-1.51 0.97-3.71 2.34-5.45 2.47-1.92 0.14-5.47-1.09-3.12-2.86 1.02-0.76 3.19-1.65 4.29-2.2 3.69-1.85 8.89-3.1 11.95-5.33 1.73-1.25 3.29-2.58 4.93-3.63 0.82-0.52 2.2 0.88 3.12 1.04zm-22.47-86.83c0.42-0.11 0.4 0.2 0.65 0.26-0.15 1.85-1.27 3.07-3.64 2.85-1.06-0.09-2.91-0.89-2.98-1.42-0.27-1.87 4.78-0.72 5.97-1.69zm-6.36 8.82c0.93 0.27 5.1 3.22 3.76 4.54-0.73 0.73-1.66-0.38-2.85-0.64-1.59-0.35-2.81 0.07-3.9-0.78-1.23-0.97-1.53-3.08-2.86-4.29-0.66-0.61-2.44-1.42-3.63-1.29-2.06 0.22-2.04 2.58-3.9 3.63-1.77-0.19-2.82 0.33-4.15-0.13-1.41-0.48-2.11-2.3-3.38-2.46-1.32-0.18-4.45 2.12-4.94 0.13-0.39-1.62 2.18-2.15 2.34-3.25 0.17-1.13-1.01-2.88-1.56-3.37-0.54-0.5-1.31-0.53-1.94-0.91-0.67-0.4-1.19-1.16-1.95-1.56-2.72-1.42-6.88-0.84-7.93-3.12-0.18-0.4 0.11-0.84-0.12-1.42-0.29-0.72-1.33-0.94-1.69-1.56-0.92-1.58-0.28-3.92 1.3-4.15 1.42-0.21 4.22 1.54 4.54 2.59 0.17 0.56-0.12 1.18 0 1.82 0.15 0.77 1.3 2.64 2.34 2.72 1.34 0.12 2.13-1.96 3.37-2.72 0.86-0.52 2.26-1.13 3.38-1.04 1.11 0.09 1.85 0.95 3.12 1.43 0.91 0.34 2.04 0.47 3.12 0.78 0.93 0.26 1.75 0.81 2.72 1.16 3.09 1.12 6.77 1.78 8.44 3.77 0.46 0.54 0.45 1.35 1.04 1.95 0.55 0.55 3.56 1.09 3.64 2.33 0.06 0.95-1.24 1-1.3 1.95-0.12 1.89 2.54 1.78 2.99 3.89zm2.34 40.11c0.26 1.29-0.68 2.18-0.92 3.24-0.27 1.29 0 2.96-0.51 4.29-0.61 1.56-2.09 3.09-3.25 5.06-0.95 1.61-2.25 3.43-3.64 4.54-0.82 0.66-1.79 1.04-2.59 1.69-1.25 1.02-2.27 2.33-3.38 3.5-1.17 1.24-2.59 2.19-3.51 3.25-1.33 1.54-2 4.03-4.28 4.28-1.34 0.15-2.54 0.03-3.77 0.52-1.92 0.77-3.2 2.17-4.15 2.21-1.01 0.03-1.94-1.18-2.86-1.3-1.04-0.13-1.86 0.79-3.38 0.78-0.61-0.01-0.93-0.37-1.82-0.65-1.85-0.59-3.89-0.56-4.15-2.6-0.15-1.1 0.7-1.6 0.65-2.59-0.06-0.99-1.03-1.24-1.43-2.08 0.26-0.9 0.3-2.02-0.65-2.6-0.03-0.81 0.17-1.38 0.52-1.81-0.76 0.32-1.75 0.52-2.6 1.04-0.94 0.57-1.63 1.88-2.72 1.68-1.03-0.36-0.24-1.38-0.39-2.2-0.12-0.63-1.55-3.32-2.21-3.77-0.75-0.51-3.5-1.54-4.42-1.69-4.01-0.62-6.57 1.52-9.74 1.82-0.81 0.08-1.7-0.13-2.47 0-2.6 0.46-5.51 2.53-7.14 3.9-2.68 0.26-5.41-0.55-8.18 0.26-2.75 0.8-4.33 3.09-8.57 2.46-0.84-0.72-2.33-1.08-2.34-2.33-0.01-0.99 1.47-1.63 1.95-2.34 0.51-0.76 1.39-2.54 1.43-3.63 0.03-0.87-0.58-1.9-0.52-2.99 0.05-0.85 0.52-1.76 0.52-2.6-0.01-1.14-0.73-2.16-0.91-3.37-0.07-0.44 0.06-1.01 0-1.56-0.09-0.8-0.49-1.47-0.39-1.95 0.17-0.85 1.18-0.95 1.43-1.68 0.41-1.21-0.5-1.41-0.52-2.86-0.02-1.02 0.78-1.53 1.3-2.85 0.24-0.62 0.25-1.77 0.52-2.21 0.33-0.55 1.77-1.02 2.33-1.3 1.99-0.97 3.59-2.79 5.59-3.11 0.51-0.09 1.2 0.06 1.56 0 1.17-0.21 2.66-1.19 4.28-1.56 1.58-0.36 2.97-0.22 4.16-0.91 1.3-0.75 3.15-2.72 3.63-3.89 0.6-1.43 0.43-2.63 1.56-3.12 0.56-0.24 1.11 0.02 1.69-0.13 0.6-0.15 1.89-0.77 2.34-1.16 0.9-0.81 1.05-2.14 2.08-2.99 0.7-0.59 2.04-1.49 2.98-1.95 0.56-0.27 1.59-0.56 2.08-0.51 1.83 0.15 2.69 2.7 4.68 2.2 0.71-0.18 1.43-1.69 2.08-2.59 0.93-1.33 1.62-3.11 3.24-3.51 1.31-0.32 2.79 0.51 3.51-0.65 0.16-0.82-0.62-1.31 0-1.82 1.51 0.1 4.07 2.14 6.36 2.21 1.23 0.04 3.52-1.35 3.77 0.52 0.11 0.83-0.93 1.49-1.17 2.34-0.18 0.59 0.26 0.91-0.13 1.55-1.06 0.42-2.18 0.64-2.21 1.82-0.04 1.48 2.1 2.18 3.38 2.99 0.87 0.55 1.61 1.4 2.08 1.68 0.39 0.24 1.03 0.35 1.3 0.52 0.83 0.55 1.43 1.79 2.59 1.82 1.32 0.03 2.64-1.65 3.38-3.25 0.86-1.87 0.91-4.13 1.3-6.1 0.13-0.65 0.59-1.29 0.78-1.94 0.5-1.78 1.18-4.18 2.72-4.81 1.55 1.65 2.08 4.84 1.82 7.53 1.04 0.79 2.86 0.53 3.12 2.34 0.09 0.63-0.31 1.43-0.26 2.07 0.09 1.1 0.9 2.06 1.04 2.99 0.26 1.73-0.29 3.16 0.52 4.41 1.01 1.59 3 1.54 4.28 3.25-0.02 1.07 0.4 1.5 0.65 2.33 0.12 0.4 0.01 1.04 0.13 1.3 0.42 0.87 1.54 0.96 1.95 1.69 0.2 0.36 0.14 1.04 0.39 1.69 0.35 0.95 1.21 1.66 1.82 2.59 0.58 0.9 1.54 1.89 1.69 2.6zm-29.75 37.64c-0.38 1.62-1.62 3.42-3.24 4.54-1.18 0.82-4.9 2.46-5.32 0.13-0.13-0.65 0.72-3.66 1.03-4.28 0.92-1.82 1.9-0.63 3.38-0.39 1.51 0.25 2.94-0.92 4.15 0z"/>
						   <text font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="bold" fill="#ffffff" style="word-spacing:0px;letter-spacing:0px;text-anchor:middle;text-align:center" xml:space="preserve" transform="scale(1.0052 .99484)" line-height="93.99999976%" font-size="18.466px" y="250.18236" x="585.28595"><tspan x="585.28595" y="250.18236"><tspan y="250.18236" x="585.28595">Australia</tspan></tspan></text>
						  </a>
						  <g transform="translate(239)">
						   <mask id="mask-1" fill="white">
						    <use xlink:href="#eastern-hemi"/>
						   </mask>
						   <use xlink:href="#eastern-hemi"/>
						   <a xlink:href="javascript:void(0);" class="cont-option asia" data-key="bmc_demographic_q5" data-continent="Asia">
						    <path primary-fill="#7a7a7a" fill="#7a7a7a" mask="url(#mask-1)" d="m113.16 91.121c-1.21-13.161 4-24.884 6.38-42.068 4.19-30.302 7.46-65.053 7.46-65.053h281l-18.18 224.69-247.52-59.4s-27.4-39.44-29.14-58.169z"/>
						   </a>
						   <a xlink:href="javascript:void(0);" class="cont-option europe" data-key="bmc_demographic_q5" data-continent="Europe">
						    <path primary-fill="#b6b6b6" fill="#b6b6b6" mask="url(#mask-1)" d="m5-4h138s-24.22-11.502-14.72 15.85c4.17 12.008-11.17 36.007-4.11 45.15 7.07 9.143 8.62 33.189 0 41.334-23.78 22.486-39.762-14.648-66.809-12.213-27.047 2.436-52.361 21.879-52.361 21.879v-112z"/>
						   </a>
						   <a xlink:href="javascript:void(0);" class="cont-option africa" data-key="bmc_demographic_q5" data-continent="Africa">
						    <path stroke="#979797" primary-fill="#9a9a9a" fill="#9a9a9a" d="m-14.551 102.85s119.7-43.485 136.57 7.63c16.87 51.12 43.62 38.73 43.62 38.73l14.36 138.79h-185l-9.551-185.15z" mask="url(#mask-1)"/>
						   </a>
						  </g>
						  <g>
						   <a xlink:href="javascript:void(0);" class="cont-option asia" data-key="bmc_demographic_q5" data-continent="Asia">
						    <path primary-fill="#7a7a7a" fill="#7a7a7a" d="m593.22 88.292c0.53 1.557 0.89 3.091 1.3 4.542-1.43 1.78-4.26 1.121-6.36 2.075-0.98 0.449-1.26 2.088-2.21 2.337-0.76 0.2-1.35-0.662-2.08-0.649-1.86 0.036-2.77 3.121-5.06 2.337-1.31 0.78 0.05 3.766-1.56 4.026-1.14 0.18-1.77-1.3-2.47-2.21-0.84-1.101-2.04-1.705-2.07-2.596-0.04-0.924 1.86-2.471 2.46-3.114 0.74-0.789 2.19-2.261 3.12-2.468 1.73-0.38 3.49 0.167 4.81-0.387 1.14-0.485 1.2-2.274 1.81-2.727 0.53-0.383 1.12-0.278 1.56-0.517 1.21-0.653 2.51-2.898 1.82-5.192-0.43-1.449-2.83-3.035-1.3-4.805 2.31 0.246 5.34 2.51 5.72 4.805 0.14 0.895-0.35 1.789-0.26 2.724 0.04 0.537 0.54 1.114 0.77 1.819zm0.53-14.15c-0.3 0.662-0.88 0.525-1.43 0.908-0.54 0.374-1.17 1.564-1.82 1.688-1.04 0.197-2.21-1.023-3.25-0.777-1.22 0.288-0.5 1.223-0.91 2.334-1.06-0.226-2.81-1.413-2.86-2.596-0.02-0.744 0.95-1.203 1.18-2.074 0.38-1.486-0.62-2.233-1.18-3.636-0.03-0.21 0.13-0.222 0.14-0.39 1.26-0.265 3.76 2.124 6.62 2.596 1.85 0.305 3.4 0.141 3.51 1.947zm-13.9-10.901c1.29 0.678 4.4 2.219 2.21 3.635-1.33-0.492-2.71-2.17-2.21-3.635zm-5.97 136.93c1.48-0.8 3.11-2.58 5.71-1.69-0.57 1.62-2.53 1.58-3.77 2.34-1.25 0.76-2.31 2.06-3.89 2.21-0.12-0.23-0.29-0.41-0.52-0.52-0.01-1.45 1.44-1.78 2.47-2.34zm-3.51-24.4c1.53 0 2.96-0.47 4.02 0.13-0.19 3.25-5.23 0.78-8.57 1.3-0.71 0.11-0.92 0.66-1.68 0.39 0.04-1.1 1.23-2.21 2.46-2.34 0.96-0.1 2.38 0.52 3.77 0.52zm1.3 4.02c0.15 1.8-2.31 2-2.99 3.38 1.08 1.65 1.5 3.95 2.73 5.45-0.05 0.99 0.2 2.28-0.39 2.73-2.61 0.49-4.02-4.2-5.07-5.84-2 0.37-0.17 6.76-2.85 5.97-1.32-0.39 0.02-2.22-0.26-3.64-0.25-1.24-1.47-1.5-1.56-2.47-0.08-0.8 0.88-1.64 1.17-2.46 0.41-1.18 0.15-3.44 1.55-3.5 0.7-0.04 1.63 1.45 2.08 1.55 1.55 0.34 3.4-1.58 5.59-1.17zm-4.81 19.34c-0.47 0.98-3.14 0.52-3.37-0.39 0.45-1.02 3.15-0.71 3.37 0.39zm-2.47 3.12c-0.15 0.19-0.32 0.36-0.51 0.52-0.99-0.32-2.04-0.56-2.34-1.56 0.73-1.07 2.82-0.18 2.85 1.04zm-4.8-28.94c0.37 0.76 1.47 1.58 1.43 2.07-0.09 0.97-2.04 0.93-2.47 1.95-0.4 0.94 0.03 1-0.13 2.46-0.55 1.06-2.01 1.32-2.47 2.6-0.54 1.55 0.08 3.54-1.16 4.67-0.87-0.04-1.81 0.75-2.86 0.65-1.14-0.1-2.22-1.66-4.03-1.69-0.69 0-1.5 0.44-2.21 0.39-0.55-0.04-1-0.55-1.82-0.77-0.98-0.28-1.9-0.13-2.33-0.39-0.89-0.55-0.75-2.1-1.04-2.99s-1.37-1.37-1.95-2.6c-0.84-1.77-1.21-5.73 1.04-6.09 0.91-0.16 1.84 0.54 2.47 0.39 1.25-0.31 1.03-1.93 2.08-2.6 0.58-0.38 1.64-0.22 2.46-0.52 0.86-0.31 1.5-1.12 2.08-1.82 0.55-0.65 0.97-1.74 1.69-2.2 0.81-0.53 1.56-0.55 2.21-1.04 1.7-1.3 1.75-3.11 3.11-4.68 1.15-1.32 2.98 1.28 3.12 2.34 0.65 0.83 1.91 1.03 2.47 1.95-0.77 2.28-2.92 2.48-2.47 5.71 0.07 0.52 0.44 1.5 0.78 2.21zm1.3 25.69c-0.66 0.93-2.95-0.07-3.77 0.91-1.35-0.03-2.71-0.05-2.98-1.17 0.38-0.95 1.62-0.29 2.59-0.39 1.57-0.14 3.74-1.24 4.16 0.65zm-8.83-0.52c-1.14 1.21-2.83 0.34-4.29 0.13-1.32-0.18-2.72-0.09-4.15-0.26-1.82-0.21-3.47-1.21-5.2-1.42-1.05-0.13-2.12 0.15-3.11 0-1.18-0.18-5.53-1.83-5.59-2.99-0.06-1.19 1.96-1.53 3.77-1.3 2.33 0.31 3.88 2.37 6.88 1.95 0.71-0.1 1.24-0.62 1.95-0.65 1.51-0.05 3.01 1.12 4.8 0.91 0.39 0.42 0.13 0.77 0.13 1.43 1.52 0.81 4.01 0.66 4.81 2.2zm-16.59-15.73c3.3 0 3.3 5.12 0 5.12s-3.3-5.12 0-5.12zm-4.84-0.62c0.41 0.05 1.84 2.05 1.82 2.6-0.05 0.91-1.42 0.86-1.82 2.07-0.61 1.87 0.27 3.98-0.78 4.94-0.59 0.35-1.66 0.25-2.6 0.25-2.35-1.65-4.22-3.62-6.23-5.84-0.73-0.8-1.62-1.5-2.08-2.33-0.68-1.24-0.91-2.61-1.69-3.77-0.68-1.02-1.93-1.74-2.6-2.85-0.54-0.91-0.59-2.11-1.16-2.99-0.54-0.81-1.45-1.16-2.08-1.81-0.42-0.43-0.65-1.1-1.04-1.56-1.63-1.96-4.77-2.97-4.93-5.84 0.66-0.77 1.35 0.28 2.59 0.52 0.81 0.15 1.76-0.07 2.34 0.13 1.18 0.39 1.99 2.23 3.25 3.24 0.7 0.56 1.61 0.95 2.33 1.56 0.77 0.64 1.34 1.57 1.95 1.95 0.85 0.51 2.02 0.85 3.12 1.55 1.5 0.96 4.18 1.95 4.55 3.9 0.08 0.48-0.23 1.3-0.14 1.68 0.18 0.69 1.05 0.98 1.56 1.56 0.64 0.72 0.77 1.81 1.69 1.95 0.92 0.26 0.96-1.04 1.95-0.91zm-61.3-27.26c1.12 0.37 4.85 4.9 3.77 7.4-0.31 0.72-1.6 1.63-2.86 1.43-2.57-0.41-2.08-6.13-1.3-8.44 0.07-0.18 0.2-0.32 0.39-0.39z"/>
								<text font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="bold" fill="#ffffff" style="word-spacing:0px;letter-spacing:0px;text-anchor:middle;text-align:center" xml:space="preserve" transform="scale(.95897 1.0428)" line-height="93.99999976%" font-size="19.597px" y="58.257034" x="476.94809"><tspan x="476.94809" y="58.257034"><tspan y="58.257034" x="476.94809">Asia</tspan></tspan></text>
						   </a>
						   <a xlink:href="javascript:void(0);" class="cont-option africa" data-key="bmc_demographic_q5" data-continent="Africa">
						    <path stroke="#979797" primary-fill="#9a9a9a" fill="#9a9a9a" d="m398.04 213.02c0.08 0.71 0.45 1.47 0.38 1.82-0.19 1.03-1.33 1.25-1.68 1.95-0.09 2.85-1.21 5.32-2.21 7.65-0.87 2.02-1.37 4.23-2.08 5.98-0.26 0.63-0.8 1.12-1.04 1.68-0.93 2.21-1.28 5.68-2.99 6.62-0.61 0.34-2.98 0.92-3.63 0.91-1.59-0.03-2.97-1.22-3.38-2.6-0.22-0.73 0-1.5-0.13-2.33-0.16-1.04-0.78-1.93-0.65-3.12 0.29-2.64 2.86-3.92 2.99-6.1 0.09-1.64-0.83-3.27-0.65-4.93 0.11-1.04 0.86-2.76 1.69-3.38 1.2-0.88 2.82-0.79 4.02-1.42 1-0.52 2.38-1.38 3.12-2.34 0.63-0.81 0.66-1.73 1.17-2.34 0.35-0.41 1.14-0.52 1.56-1.03 0.37-0.46 0.29-1.32 0.91-1.82 1.8-0.77 2.32 2.53 2.6 4.8"/>
							  <text font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="bold" fill="#ffffff" style="word-spacing:0px;letter-spacing:0px;text-anchor:middle;text-align:center" xml:space="preserve" font-size="22.5px" line-height="93.99999976%" y="146.27585" x="311.88251"><tspan x="311.88251" y="146.27585"><tspan y="146.27585" x="311.88251">Africa</tspan></tspan></text>
						   </a>
						   <a xlink:href="javascript:void(0);" class="cont-option europe" data-key="bmc_demographic_q5" data-continent="Europe">
						    <path primary-fill="#b6b6b6" fill="#b6b6b6" d="m369.85 16.384c-0.38-1.403 2.29-1.176 1.82 0.132-0.42 0.389-1.55 0.357-1.82-0.132zm-15.97 77.617c0.06-1.071 2.51-1.465 2.98-0.517-0.16 1.041-2.48 1.759-2.98 0.517zm-44.55-7.007c1.36-1.095 4.37-0.354 6.24-0.39-0.35 0.993-0.4 2.281-1.17 2.854-2.13-0.383-4.11-0.908-5.07-2.464zm-9.48-6.88c1.79-1.862 3.66-0.879 2.99 2.724-0.43 1.075-2.28 2.51-3.12 0.911 0.29-1.259 0.17-2.186 0.13-3.635zm2.6-4.153c0.15 1.098-0.31 1.59-0.91 1.947-1.71-0.301-0.41-3.373 0.91-1.947zm-15.84-23.494c0.15 1.239-1.54 1.728-1.3 3.114-1.79 1.4-4.76 0.675-7.67 1.039-1.31 0.167-2.76 1.475-4.15 0.39-0.32-0.872 1.15-0.99 1.3-1.816-0.1-0.767-1.07-0.659-1.3-1.298 0.38-1.009 1.55-1.215 1.43-2.727 0.72-0.789 2.12-0.491 2.34-1.556 0.15-0.741-0.43-1.662-1.17-2.078-0.43-0.24-1.08-0.128-1.56-0.39-1.27-0.695-1.73-2.144-2.47-2.465 0.1-1.422-0.39-2.452 0-3.376 0.24-0.561 1.94-2.144 2.86-2.465 1.13-0.4 2.32-0.043 2.99-0.908 0.3-0.042 0.5 0.02 0.65 0.128-0.01 0.819-0.7 0.954-0.78 1.688 0.16 1.18 2.24 0.442 2.46 1.557-0.19 1.212-1.29 1.452-1.3 2.337 0 0.77 1.58 2.232 2.34 3.245 0.57 0.75 1.57 1.308 2.08 2.078 0.45 0.671 0.55 1.471 0.91 1.816 0.68 0.645 2.22 0.753 2.34 1.687zm-14.16-4.932c0.13 0.973-0.92 1.114-1.3 2.205-0.34 0.994 0.07 2.173-0.39 2.859-0.39 0.593-1.47 0.557-2.21 0.776-1.63 0.489-4.78 2.406-6.1 0.26 0.19-1.151 1.31-1.38 1.69-2.334 0.02-0.751-0.78-1.148-0.65-1.947 0.16-0.98 0.9-0.643 1.95-1.04 0.76-0.291 1.09-1.216 2.08-1.819 1.73-1.058 4.76-0.249 4.93 1.04z"/>
							  <text font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="bold" fill="#ffffff" id="text4251" style="word-spacing:0px;letter-spacing:0px;text-anchor:middle;text-align:center" xml:space="preserve" transform="scale(1.0052 .99486)" line-height="93.99999976%" font-size="19.245px" y="67.678329" x="324.31335"><tspan x="324.31335" y="67.678329"><tspan y="67.678329" x="324.31335">Europe</tspan></tspan></text>
						   </a>
						  </g>
						  <g transform="translate(0 5)">
						   <mask id="mask-2" fill="white">
						    <use xlink:href="#western-hemi"/>
						   </mask>
						   <a xlink:href="javascript:void(0);" class="cont-option south-america" data-key="bmc_demographic_q5" data-continent="South America">
						    <use xlink:href="#western-hemi" primary-fill="#b6b6b6" fill="#b6b6b6"/>
						    <text font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="bold" fill="#ffffff" style="word-spacing:0px;letter-spacing:0px" xml:space="preserve" transform="scale(1.0111 0.989)" line-height="93.99999976%" font-size="17.343px" y="205.41039" x="112.59819"><tspan x="146.68146" y="201.11566"><tspan y="201.11566" x="146.68146">South</tspan><tspan y="201.11566" x="195.22108" dx="0" /></tspan><tspan x="136.58739" y="217.41794"><tspan y="217.41794" x="136.58739">America</tspan></tspan></text>
						   </a>
						   <a xlink:href="javascript:void(0);" class="cont-option north-america" data-key="bmc_demographic_q5" data-continent="North America">
						    <path primary-fill="#5e5e5e" fill="#5e5e5e" mask="url(#mask-2)" d="m-13-21h241l-33.56 138.35s-59.23 12.11-75.19 39.55-95.154 24.29-95.154 24.29l-37.096-202.19z"/>
							<text font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="bold" fill="#ffffff" style="word-spacing:0px;letter-spacing:0px" xml:space="preserve" transform="scale(1.0016 .99836)" line-height="93.99999976%" font-size="17.126px" y="80.513397" x="28.61446"><tspan x="64.26799" y="76.259514"><tspan y="76.259514" x="64.26799">North</tspan><tspan y="76.259514" x="110.25938" dx="0" /></tspan><tspan x="53.330418" y="92.357491"><tspan y="92.357491" x="53.330418">America</tspan></tspan></text>
						   </a>
						  </g>
						 </g>
						</svg>

						<!--[if lte IE 8]>
						<div id="map-continents" style="display:none">
							<ul class="continents">
								<li class="c1 land"><a class="option" data-key="bmc_demographic_q5" data-continent="Africa" href="javascript:void(0);">Africa</a></li>
								<li class="c2 land"><a class="option" data-key="bmc_demographic_q5" data-continent="Asia" href="javascript:void(0);">Asia</a></li>
								<li class="c3 land"><a class="option" data-key="bmc_demographic_q5" data-continent="Australia" href="javascript:void(0);">Australia and Southern Pacific</a></li>
								<li class="c4 land"><a class="option" data-key="bmc_demographic_q5" data-continent="Europe" href="javascript:void(0);">Europe</a></li>
								<li class="c5 land"><a class="option" data-key="bmc_demographic_q5" data-continent="North America" href="javascript:void(0);">North America</a></li>
								<li class="c6 land"><a class="option" data-key="bmc_demographic_q5" data-continent="South America" href="javascript:void(0);">South America</a></li>
							</ul>
						</div>
						<![endif]-->
				  </div>
				</div>
		  </div>
		  <div class="clearfix">
			</div>

			<div class="clearfix">
			</div>
		</div>
	</div>

	<!-- Results screen -->
	<div class="outer-wrapper wrap_result" style="display:none;">
		<div class="head-bar">
			<div class="head-orange">
				Thank you for taking the challenge!
			</div>
		</div>
		<div class="wrapper">


			<div class="congrats results-multitasker" style="display:none;">
				<div class="left">
                    <img src="images/transition2.png">
                </div>
                <div class="right">
                    <h1>Congrats! Your meeting style is <strong class="resultsLabel">Meeting Multitasker</strong>.</h1>
                    <p>You are able to get a lot of things done at the same time. Meeting time is important for coordinating activities with others, yet you also use this time to accomplish other tasks. You are great at active listening and can balance meeting participation with multitasking.</p>
                    <div class="share">
						<p>Share and see how your colleagues compare!</p>
                        <div class="icon-container">
							<?php
							$shareMessage = 'I\'m a Meeting Multitasker! Curious about your meeting style? Take the Challenge! '.$shortURL.' %23BuildABetterMeeting';
							/*	mmtr	Meeting Multitasker
							mmiz	Meeting Maximizer
							mmvk	Meeting Maverick
							*/
							?>
							<span class="icon hoverable"><a target="_blank" href="https://www.facebook.com/dialog/share?app_id=438900949648302&display=popup&href=<?php echo urlencode($baseURL.'/r/mmtr');?>"><i class="fa fa-facebook"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $shareMessage; ?>"><i class="fa fa-twitter"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $pageLocation.'?r=mmtr';?>&title=<?php echo $shareMessage; ?>&source=ShoreTel"><i class="fa fa-linkedin"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://plus.google.com/share?url=<?php echo $pageLocation.'?r=mmtr';?>"><i class="fa fa-google-plus"></i></a></span>

						</div>
                    </div>
                     <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
			</div>

			<div class="congrats results-maximizer" style="display:none;">
				<div class="left">
                    <img src="images/transition1.png">
                </div>
                <div class="right">
                    <h1>Congrats! Your meeting style is <strong class="resultsLabel">Meeting Maximizer</strong>.</h1>
                    <p>You can be highly productive with your meeting time. You make sure to set an agenda, send it out ahead of the meeting and you start all of your meetings on time. You truly maximize the time you allocate for meetings to keep them efficient and on-task.</p>
                    <div class="share">
						<p>Share and see how your colleagues compare!</p>
                        <div class="icon-container">
							<?php
							$shareMessage = 'I\'m a Meeting Maximizer! Curious about your meeting style? Take the Challenge! '.$shortURL.' %23BuildABetterMeeting';
							/*	mmtr	Meeting Multitasker
							mmiz	Meeting Maximizer
							mmvk	Meeting Maverick
							*/
							?>
							<span class="icon hoverable"><a target="_blank" href="https://www.facebook.com/dialog/share?app_id=438900949648302&display=popup&href=<?php echo urlencode($baseURL.'/r/mmiz');?>"><i class="fa fa-facebook"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $shareMessage; ?>"><i class="fa fa-twitter"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $pageLocation.'?r=mmiz';?>&title=<?php echo $shareMessage; ?>&source=ShoreTel"><i class="fa fa-linkedin"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://plus.google.com/share?url=<?php echo $pageLocation.'?r=mmiz';?>"><i class="fa fa-google-plus"></i></a></span>

						</div>
                    </div>
                     <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
			</div>

			<div class="congrats results-maverick" style="display:none;">
				<div class="left">
					<img src="images/transition3.png">
				</div>
				<div class="right">
					<h1>Congrats! Your meeting style is <strong class="resultsLabel">Meeting Maverick</strong>.</h1>
					<p>You are independent and need collaboration and productivity tools that adapt to you, including your phone system. You know there is no one way to run a meeting, and no location is off limits for a productive meeting. You are a true maverick when it comes to getting work done. </p>
					<div class="share">
						<p>Share and see how your colleagues compare!</p>
						<div class="icon-container">
							<?php
							$shareMessage = 'I\'m a Meeting Maverick! Curious about your meeting style? Take the Challenge! '.$shortURL.' %23BuildABetterMeeting';
							/*	mmtr	Meeting Multitasker
							mmiz	Meeting Maximizer
							mmvk	Meeting Maverick
							*/
							?>
							<span class="icon hoverable"><a target="_blank" href="https://www.facebook.com/dialog/share?app_id=438900949648302&display=popup&href=<?php echo urlencode($baseURL.'/r/mmvk');?>"><i class="fa fa-facebook"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $shareMessage; ?>"><i class="fa fa-twitter"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $pageLocation.'?r=mmvk';?>&title=<?php echo $shareMessage; ?>&source=ShoreTel"><i class="fa fa-linkedin"></i></a></span>
							<span class="icon hoverable"><a target="_blank" href="https://plus.google.com/share?url=<?php echo $pageLocation.'?r=mmvk';?>"><i class="fa fa-google-plus"></i></a></span>

						</div>
					</div>
					 <div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

			 <div class="download">

				<img src="images/ebook_orange.png" class="icon">
				<p>Download a free copy of our eBook <strong>"Build A Better Meeting: 7 Tips for Increased Productivity"</strong> to help your business get the most out of your meetings.</p>


				<input type="button" class="download_btn" name="ebook" value="Download Now">

				<div class="clearfix"></div>
			</div>
			<div class="footlinks">
				<a class="links" href="https://www.shoretel.com/" target="_blank"><img src="images/shoreTelLogo.png" alt="ShoreTel" width="142" /></a>
				<a class="links contact-sales" href="javascript:"><strong>Let’s talk!</strong> Click here to contact sales <span class="arrow"><i class="fa fa-long-arrow-right"></i>
	</span> </a>
				<a class="links links2" href="<?php echo $pageLocation; ?>" target="_blank"><strong>Think you can do better?</strong> Take the challenge again <span class="arrow"><i class="fa fa-long-arrow-right"></i>
	</span> </a>
    	<div class="clearfix"></div>
			</div>
		</div>
	</div>

    <div class="download_ebook" style="display:none;">
        <input type="button" class="download_btn" name="ebook" value="Download Ebook">
    </div>

    <div id="dialog-form" title="Build A Better Meeting: 7 Tips for Increased Productivity">
				  <p class="validateTips">All form fields are required.</p>
				<form>
					<fieldset>
						<label for="firstname">First Name</label>
						<input type="text" name="firstname" id="firstname" value="" class="text ui-widget-content ui-corner-all required">
						<label for="lastname">Last Name</label>
						<input type="text" name="lastname" id="lastname" value="" class="text ui-widget-content ui-corner-all required">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all required">
						<label for="phone">Phone Number</label>
						<input type="text" name="phone" id="phone" value="" class="text ui-widget-content ui-corner-all required">
						<label for="company">Company</label>
						<input type="text" name="company" id="company" value="" class="text ui-widget-content ui-corner-all required">
						<label for="country">Country</label>
						<select class="drop-box" name="country" id="country">
							<option value="" selected="">- Please Select Country*-</option>
<option value="United States" data-countryid="1">United States</option>
<option value="Canada" data-countryid="">Canada</option>
<option value="United Kingdom" data-countryid="">United Kingdom</option>
<option value="Australia" data-countryid="">Australia</option>
<option value="Afghanistan" data-countryid="">Afghanistan</option>
<option value="Albania" data-countryid="">Albania</option>
<option value="Algeria" data-countryid="">Algeria</option>
<option value="American Samoa" data-countryid="">American Samoa</option>
<option value="Andorra" data-countryid="">Andorra</option>
<option value="Angola" data-countryid="">Angola</option>
<option value="Anguilla" data-countryid="">Anguilla</option>
<option value="Antarctica" data-countryid="">Antarctica</option>
<option value="Antigua and Barbuda" data-countryid="">Antigua and Barbuda</option>
<option value="Argentina" data-countryid="">Argentina</option>
<option value="Armenia" data-countryid="">Armenia</option>
<option value="Aruba" data-countryid="">Aruba</option>
<option value="Austria" data-countryid="">Austria</option>
<option value="Azerbaidjan" data-countryid="">Azerbaidjan</option>
<option value="Bahamas" data-countryid="">Bahamas</option>
<option value="Bahrain" data-countryid="">Bahrain</option>
<option value="Bangladesh" data-countryid="">Bangladesh</option>
<option value="Barbados" data-countryid="">Barbados</option>
<option value="Belarus" data-countryid="">Belarus</option>
<option value="Belgium" data-countryid="">Belgium</option>
<option value="Belize" data-countryid="">Belize</option>
<option value="Benin" data-countryid="">Benin</option>
<option value="Bermuda" data-countryid="">Bermuda</option>
<option value="Bhutan" data-countryid="">Bhutan</option>
<option value="Bolivia" data-countryid="">Bolivia</option>
<option value="Bosnia-Herzegovina" data-countryid="">Bosnia-Herzegovina</option>
<option value="Botswana" data-countryid="">Botswana</option>
<option value="Bouvet Island" data-countryid="">Bouvet Island</option>
<option value="Brazil" data-countryid="">Brazil</option>
<option value="British Indian Ocean Territory" data-countryid="">British Indian Ocean Territory</option>
<option value="Brunei Darussalam" data-countryid="">Brunei Darussalam</option>
<option value="Bulgaria" data-countryid="">Bulgaria</option>
<option value="Burkina Faso" data-countryid="">Burkina Faso</option>
<option value="Burundi" data-countryid="">Burundi</option>
<option value="Cambodia" data-countryid="">Cambodia</option>
<option value="Cameroon" data-countryid="">Cameroon</option>
<option value="Cape Verde" data-countryid="">Cape Verde</option>
<option value="Cayman Islands" data-countryid="">Cayman Islands</option>
<option value="Central African Republic" data-countryid="">Central African Republic</option>
<option value="Chad" data-countryid="">Chad</option>
<option value="Chile" data-countryid="">Chile</option>
<option value="China" data-countryid="">China</option>
<option value="Christmas Island" data-countryid="">Christmas Island</option>
<option value="Cocos (Keeling) Islands" data-countryid="">Cocos (Keeling) Islands</option>
<option value="Colombia" data-countryid="">Colombia</option>
<option value="Comoros" data-countryid="">Comoros</option>
<option value="Congo" data-countryid="">Congo</option>
<option value="Cook Islands" data-countryid="">Cook Islands</option>
<option value="Costa Rica" data-countryid="">Costa Rica</option>
<option value="Croatia" data-countryid="">Croatia</option>
<option value="Cuba" data-countryid="">Cuba</option>
<option value="Cyprus" data-countryid="">Cyprus</option>
<option value="Czech Republic" data-countryid="">Czech Republic</option>
<option value="Denmark" data-countryid="">Denmark</option>
<option value="Djibouti" data-countryid="">Djibouti</option>
<option value="Dominica" data-countryid="">Dominica</option>
<option value="Dominican Republic" data-countryid="">Dominican Republic</option>
<option value="East Timor" data-countryid="">East Timor</option>
<option value="Ecuador" data-countryid="">Ecuador</option>
<option value="Egypt" data-countryid="">Egypt</option>
<option value="El Salvador" data-countryid="">El Salvador</option>
<option value="Equatorial Guinea" data-countryid="">Equatorial Guinea</option>
<option value="Eritrea" data-countryid="">Eritrea</option>
<option value="Estonia" data-countryid="">Estonia</option>
<option value="Ethiopia" data-countryid="">Ethiopia</option>
<option value="Falkland Islands" data-countryid="">Falkland Islands</option>
<option value="Faroe Islands" data-countryid="">Faroe Islands</option>
<option value="Fiji" data-countryid="">Fiji</option>
<option value="Finland" data-countryid="">Finland</option>
<option value="Former Czechoslovakia" data-countryid="">Former Czechoslovakia</option>
<option value="Former USSR" data-countryid="">Former USSR</option>
<option value="France" data-countryid="">France</option>
<option value="France (European Territory)" data-countryid="">France (European Territory)</option>
<option value="French Guyana" data-countryid="">French Guyana</option>
<option value="French Southern Territories" data-countryid="">French Southern Territories</option>
<option value="Gabon" data-countryid="">Gabon</option>
<option value="Gambia" data-countryid="">Gambia</option>
<option value="Georgia" data-countryid="">Georgia</option>
<option value="Germany" data-countryid="">Germany</option>
<option value="Ghana" data-countryid="">Ghana</option>
<option value="Gibraltar" data-countryid="">Gibraltar</option>
<option value="Great Britain" data-countryid="">Great Britain</option>
<option value="Greece" data-countryid="">Greece</option>
<option value="Greenland" data-countryid="">Greenland</option>
<option value="Grenada" data-countryid="">Grenada</option>
<option value="Guadeloupe (French)" data-countryid="">Guadeloupe (French)</option>
<option value="Guam (USA)" data-countryid="">Guam (USA)</option>
<option value="Guatemala" data-countryid="">Guatemala</option>
<option value="Guinea" data-countryid="">Guinea</option>
<option value="Guinea Bissau" data-countryid="">Guinea Bissau</option>
<option value="Guyana" data-countryid="">Guyana</option>
<option value="Haiti" data-countryid="">Haiti</option>
<option value="Heard and McDonald Islands" data-countryid="">Heard and McDonald Islands</option>
<option value="Honduras" data-countryid="">Honduras</option>
<option value="Hong Kong" data-countryid="">Hong Kong</option>
<option value="Hungary" data-countryid="">Hungary</option>
<option value="Iceland" data-countryid="">Iceland</option>
<option value="India" data-countryid="">India</option>
<option value="Indonesia" data-countryid="">Indonesia</option>
<option value="International" data-countryid="">International</option>
<option value="Iran" data-countryid="">Iran</option>
<option value="Iraq" data-countryid="">Iraq</option>
<option value="Ireland" data-countryid="">Ireland</option>
<option value="Israel" data-countryid="">Israel</option>
<option value="Italy" data-countryid="">Italy</option>
<option value="Ivory Coast (Cote D'Ivoire)" data-countryid="">Ivory Coast (Cote D'Ivoire)</option>
<option value="Jamaica" data-countryid="">Jamaica</option>
<option value="Japan" data-countryid="">Japan</option>
<option value="Jordan" data-countryid="">Jordan</option>
<option value="Kazakhstan" data-countryid="">Kazakhstan</option>
<option value="Kenya" data-countryid="">Kenya</option>
<option value="Kiribati" data-countryid="">Kiribati</option>
<option value="Korea, Republic of" data-countryid="">Korea</option>
<option value="Kuwait" data-countryid="">Kuwait</option>
<option value="Kyrgyzstan" data-countryid="">Kyrgyzstan</option>
<option value="Laos" data-countryid="">Laos</option>
<option value="Latvia" data-countryid="">Latvia</option>
<option value="Lebanon" data-countryid="">Lebanon</option>
<option value="Lesotho" data-countryid="">Lesotho</option>
<option value="Liberia" data-countryid="">Liberia</option>
<option value="Libya" data-countryid="">Libya</option>
<option value="Liechtenstein" data-countryid="">Liechtenstein</option>
<option value="Lithuania" data-countryid="">Lithuania</option>
<option value="Luxembourg" data-countryid="">Luxembourg</option>
<option value="Macau" data-countryid="">Macau</option>
<option value="Macedonia" data-countryid="">Macedonia</option>
<option value="Madagascar" data-countryid="">Madagascar</option>
<option value="Malawi" data-countryid="">Malawi</option>
<option value="Malaysia" data-countryid="">Malaysia</option>
<option value="Maldives" data-countryid="">Maldives</option>
<option value="Mali" data-countryid="">Mali</option>
<option value="Malta" data-countryid="">Malta</option>
<option value="Marshall Islands" data-countryid="">Marshall Islands</option>
<option value="Martinique (French)" data-countryid="">Martinique (French)</option>
<option value="Mauritania" data-countryid="">Mauritania</option>
<option value="Mauritius" data-countryid="">Mauritius</option>
<option value="Mayotte" data-countryid="">Mayotte</option>
<option value="Mexico" data-countryid="">Mexico</option>
<option value="Micronesia" data-countryid="">Micronesia</option>
<option value="Moldavia" data-countryid="">Moldavia</option>
<option value="Monaco" data-countryid="">Monaco</option>
<option value="Mongolia" data-countryid="">Mongolia</option>
<option value="Montserrat" data-countryid="">Montserrat</option>
<option value="Morocco" data-countryid="">Morocco</option>
<option value="Mozambique" data-countryid="">Mozambique</option>
<option value="Myanmar" data-countryid="">Myanmar</option>
<option value="Namibia" data-countryid="">Namibia</option>
<option value="Nauru" data-countryid="">Nauru</option>
<option value="Nepal" data-countryid="">Nepal</option>
<option value="Netherlands" data-countryid="">Netherlands</option>
<option value="Netherlands Antilles" data-countryid="">Netherlands Antilles</option>
<option value="Neutral Zone" data-countryid="">Neutral Zone</option>
<option value="New Caledonia (French)" data-countryid="">New Caledonia (French)</option>
<option value="New Zealand" data-countryid="">New Zealand</option>
<option value="Nicaragua" data-countryid="">Nicaragua</option>
<option value="Niger" data-countryid="">Niger</option>
<option value="Nigeria" data-countryid="">Nigeria</option>
<option value="Niue" data-countryid="">Niue</option>
<option value="Norfolk Island" data-countryid="">Norfolk Island</option>
<option value="North Korea" data-countryid="">North Korea</option>
<option value="Northern Mariana Islands" data-countryid="">Northern Mariana Islands</option>
<option value="Norway" data-countryid="">Norway</option>
<option value="Oman" data-countryid="">Oman</option>
<option value="Pakistan" data-countryid="">Pakistan</option>
<option value="Palau" data-countryid="">Palau</option>
<option value="Panama" data-countryid="">Panama</option>
<option value="Papua New Guinea" data-countryid="">Papua New Guinea</option>
<option value="Paraguay" data-countryid="">Paraguay</option>
<option value="Peru" data-countryid="">Peru</option>
<option value="Philippines" data-countryid="">Philippines</option>
<option value="Pitcairn Island" data-countryid="">Pitcairn Island</option>
<option value="Poland" data-countryid="">Poland</option>
<option value="Polynesia (French)" data-countryid="">Polynesia (French)</option>
<option value="Portugal" data-countryid="">Portugal</option>
<option value="Puerto Rico" data-countryid="">Puerto Rico</option>
<option value="Qatar" data-countryid="">Qatar</option>
<option value="Reunion (French)" data-countryid="">Reunion (French)</option>
<option value="Romania" data-countryid="">Romania</option>
<option value="Russian Federation" data-countryid="">Russian Federation</option>
<option value="Rwanda" data-countryid="">Rwanda</option>
<option value="S. Georgia &amp; S. Sandwich Isls." data-countryid="">S. Georgia &amp; S. Sandwich Isls.</option>
<option value="Saint Helena" data-countryid="">Saint Helena</option>
<option value="Saint Kitts &amp; Nevis Anguilla" data-countryid="">Saint Kitts &amp; Nevis Anguilla</option>
<option value="Saint Lucia" data-countryid="">Saint Lucia</option>
<option value="Saint Pierre and Miquelon" data-countryid="">Saint Pierre and Miquelon</option>
<option value="Saint Tome (Sao Tome) and Principe" data-countryid="">Saint Tome (Sao Tome) and Principe</option>
<option value="Saint Vincent &amp; Grenadines" data-countryid="">Saint Vincent &amp; Grenadines</option>
<option value="Samoa" data-countryid="">Samoa</option>
<option value="San Marino" data-countryid="">San Marino</option>
<option value="Saudi Arabia" data-countryid="">Saudi Arabia</option>
<option value="Senegal" data-countryid="">Senegal</option>
<option value="Seychelles" data-countryid="">Seychelles</option>
<option value="Sierra Leone" data-countryid="">Sierra Leone</option>
<option value="Singapore" data-countryid="">Singapore</option>
<option value="Slovak Republic" data-countryid="">Slovak Republic</option>
<option value="Slovenia" data-countryid="">Slovenia</option>
<option value="Solomon Islands" data-countryid="">Solomon Islands</option>
<option value="Somalia" data-countryid="">Somalia</option>
<option value="South Africa" data-countryid="">South Africa</option>
<option value="Spain" data-countryid="">Spain</option>
<option value="Sri Lanka" data-countryid="">Sri Lanka</option>
<option value="Sudan" data-countryid="">Sudan</option>
<option value="Suriname" data-countryid="">Suriname</option>
<option value="Svalbard and Jan Mayen Islands" data-countryid="">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland" data-countryid="">Swaziland</option>
<option value="Sweden" data-countryid="">Sweden</option>
<option value="Switzerland" data-countryid="">Switzerland</option>
<option value="Syria" data-countryid="">Syria</option>
<option value="Tadjikistan" data-countryid="">Tadjikistan</option>
<option value="Taiwan" data-countryid="">Taiwan</option>
<option value="Tanzania" data-countryid="">Tanzania</option>
<option value="Thailand" data-countryid="">Thailand</option>
<option value="Togo" data-countryid="">Togo</option>
<option value="Tokelau" data-countryid="">Tokelau</option>
<option value="Tonga" data-countryid="">Tonga</option>
<option value="Trinidad and Tobago" data-countryid="">Trinidad and Tobago</option>
<option value="Tunisia" data-countryid="">Tunisia</option>
<option value="Turkey" data-countryid="">Turkey</option>
<option value="Turkmenistan" data-countryid="">Turkmenistan</option>
<option value="Turks and Caicos Islands" data-countryid="">Turks and Caicos Islands</option>
<option value="Tuvalu" data-countryid="">Tuvalu</option>
<option value="Uganda" data-countryid="">Uganda</option>
<option value="Ukraine" data-countryid="">Ukraine</option>
<option value="United Arab Emirates" data-countryid="">United Arab Emirates</option>
<option value="Uruguay" data-countryid="">Uruguay</option>
<option value="USA Military" data-countryid="">USA Military</option>
<option value="USA Minor Outlying Islands" data-countryid="">USA Minor Outlying Islands</option>
<option value="Uzbekistan" data-countryid="">Uzbekistan</option>
<option value="Vanuatu" data-countryid="">Vanuatu</option>
<option value="Vatican City State" data-countryid="">Vatican City State</option>
<option value="Venezuela" data-countryid="">Venezuela</option>
<option value="Vietnam" data-countryid="">Vietnam</option>
<option value="Virgin Islands (British)" data-countryid="">Virgin Islands (British)</option>
<option value="Virgin Islands (USA)" data-countryid="">Virgin Islands (USA)</option>
<option value="Wallis and Futuna Islands" data-countryid="">Wallis and Futuna Islands</option>
<option value="Western Sahara" data-countryid="">Western Sahara</option>
<option value="Yemen" data-countryid="">Yemen</option>
<option value="Yugoslavia" data-countryid="">Yugoslavia</option>
<option value="Zaire" data-countryid="">Zaire</option>
<option value="Zambia" data-countryid="">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
						</select>
						<label for="state" style="display:none;">State / Region</label>
						<select class="drop-box" name="state" id="state" style="display:none;"  onfocus="this.size=10;" onBlur="this.size=1;" onChange="this.size=1; this.blur();">
							<option value="">Please select State/Region</option>
							<option value="Outside USA/Canada" data-countrycode="1">Outside USA/Canada</option>
							<option value="Alabama" data-countrycode="1">Alabama</option>
							<option value="Alaska" data-countrycode="1">Alaska</option>
							<option value="Arizona" data-countrycode="1">Arizona</option>
							<option value="Arkansas" data-countrycode="1">Arkansas</option>
							<option value="California" data-countrycode="1">California</option>
							<option value="Colorado" data-countrycode="1">Colorado</option>
							<option value="Connecticut" data-countrycode="1">Connecticut</option>
							<option value="Delaware" data-countrycode="1">Delaware</option>
							<option value="Florida" data-countrycode="1">Florida</option>
							<option value="Georgia" data-countrycode="1">Georgia</option>
							<option value="Hawaii" data-countrycode="1">Hawaii</option>
							<option value="Idaho" data-countrycode="1">Idaho</option>
							<option value="Illinois" data-countrycode="1">Illinois</option>
							<option value="Indiana" data-countrycode="1">Indiana</option>
							<option value="Iowa" data-countrycode="1">Iowa</option>
							<option value="Kansas" data-countrycode="1">Kansas</option>
							<option value="Kentucky" data-countrycode="1">Kentucky</option>
							<option value="Louisiana" data-countrycode="1">Louisiana</option>
							<option value="Maine" data-countrycode="1">Maine</option>
							<option value="Maryland" data-countrycode="1">Maryland</option>
							<option value="Massachusetts" data-countrycode="1">Massachusetts</option>
							<option value="Michigan" data-countrycode="1">Michigan</option>
							<option value="Minnesota" data-countrycode="1">Minnesota</option>
							<option value="Mississippi" data-countrycode="1">Mississippi</option>
							<option value="Missouri" data-countrycode="1">Missouri</option>
							<option value="Montana" data-countrycode="1">Montana</option>
							<option value="Nebraska" data-countrycode="1">Nebraska</option>
							<option value="Nevada" data-countrycode="1">Nevada</option>
							<option value="New Hampshire" data-countrycode="1">New Hampshire</option>
							<option value="New Jersey" data-countrycode="1">New Jersey</option>
							<option value="New Mexico" data-countrycode="1">New Mexico</option>
							<option value="New York" data-countrycode="1">New York</option>
							<option value="North Carolina" data-countrycode="1">North Carolina</option>
							<option value="North Dakota" data-countrycode="1">North Dakota</option>
							<option value="Ohio" data-countrycode="1">Ohio</option>
							<option value="Oklahoma" data-countrycode="1">Oklahoma</option>
							<option value="Oregon" data-countrycode="1">Oregon</option>
							<option value="Pennsylvania" data-countrycode="1">Pennsylvania</option>
							<option value="Rhode Island" data-countrycode="1">Rhode Island</option>
							<option value="South Carolina" data-countrycode="1">South Carolina</option>
							<option value="South Dakota" data-countrycode="1">South Dakota</option>
							<option value="Tennessee" data-countrycode="1">Tennessee</option>
							<option value="Texas" data-countrycode="1">Texas</option>
							<option value="Utah" data-countrycode="1">Utah</option>
							<option value="Vermont" data-countrycode="1">Vermont</option>
							<option value="Virginia" data-countrycode="1">Virginia</option>
							<option value="Washington" data-countrycode="1">Washington</option>
							<option value="West Virginia" data-countrycode="1">West Virginia</option>
							<option value="Wisconsin" data-countrycode="1">Wisconsin</option>
							<option value="Wyoming" data-countrycode="1">Wyoming</option>
							<option value="AB" data-countrycode="1">Alberta</option>
							<option value="BC" data-countrycode="1">British Columbia</option>
							<option value="MB" data-countrycode="1">Manitoba</option>
							<option value="NB" data-countrycode="1">New Brunswick</option>
							<option value="NF" data-countrycode="1">Newfoundland</option>
							<option value="NT" data-countrycode="1">Northwest Territories</option>
							<option value="NS" data-countrycode="1">Nova Scotia</option>
							<option value="NU" data-countrycode="1">Nunavut</option>
							<option value="ON" data-countrycode="1">Ontario</option>
							<option value="PE" data-countrycode="1">Prince Edward Island</option>
							<option value="QC" data-countrycode="1">Quebec</option>
							<option value="South Glamorgan" data-countrycode="1">South Glamorgan</option>
							<option value="Suffolk" data-countrycode="1">Suffolk</option>
							<option value="Merseyside" data-countrycode="1">Merseyside</option>
							<option value="Middlesex" data-countrycode="1">Middlesex</option>
							<option value="West Lothian" data-countrycode="1">West Lothian</option>
						</select>
						<!-- Allow form submission with keyboard without duplicating the dialog button -->
						<input type="submit" tabindex="-1" style="display:none;">
					</fieldset>
				</form>

				</div>

				<div id="dialog-contact-sales-form" title="Contact Sales">
	  <p class="validateTips">* Mandatory fields</p>
		<form>
			<fieldset>
				<!--[if lte IE 8]>
				<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
				<![endif]-->
				<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
				<script>
					hbspt.forms.create({
						portalId: '458506',
						formId: '69b900a0-970e-4e71-9d08-8366689475df'
					});
				</script>
			</fieldset>
		</form>
	</div>
</div>

<div id="transition" style="display:none;">
    <div class="transitionWrap trans1" style="display:none;">
        <div class="backwrap">
            <div class="content">
                Keep going to find out if you are a <strong>Meeting Maximizer</strong>
            </div>
            <div class="ieimage">
				<img width="100%" src="images/transition-chat1ie8.png">
            </div>
        </div>

        <a class="orange-link trnas1_cnt transitionContinue" data-ques="3" href="javascript:void(0);">Continue <img src="images/link-arrow.png"></a>
    </div>
    <div class="transitionWrap trans2" style="display:none;">
        <div class="backwrap">
            <div class="content">
                I can do many things in meetings! Are you a <strong>Meeting Multitasker</strong>?
            </div>
            <div class="ieimage">
				<img width="100%" src="images/transition-chat2ie8.png">
            </div>

        </div>

        <a class="orange-link trnas2_cnt transitionContinue" data-ques="6" href="javascript:void(0);">Continue <img src="images/link-arrow.png"></a>
    </div>
    <div class="transitionWrap trans3" style="display:none;">
        <div class="backwrap">
            <div class="content">
                You might be a<br /> <strong>Meeting Maverick</strong>. <br />My tip to being a Maverick... always send an agenda ahead of your meetings!
            </div>
            <div class="ieimage">
				<img width="100%" src="images/transition-chat3ie8.png">
            </div>

        </div>

        <a class="orange-link trnas3_cnt transitionContinue" data-ques="9" href="javascript:void(0);">Continue <img src="images/link-arrow.png"></a>
  </div>
</div>

<div class="clearfix">
</div>
<div id="foot-bar">
    <div class="right">
        #BuildABetterMeeting
    </div>
    <div class="left">
        &copy;&nbsp;ShoreTel, Inc. 2016. All rights reserved worldwide.
    </div>
</div>
<!-- EXPORTED TAGS -->
<!------- Tags for Shoretel Business Assessment OneTag------->

<!-- One Tag Conditional Container: Shoretel (4986) | Shoretel Business Assessment OneTag (5834) -->

<script type="text/javascript">
var ft_onetag_5834 = {
	ft_vars:{
		"ftXRef":"",
		"ftXValue":"",
		"ftXType":"",
		"ftXName":"",
		"ftXNumItems":"",
		"ftXCurrency":"",
		"U1":"",
		"U2":"",
		"U3":"",
		"U4":"",
		"U5":"",
		"U6":"",
		"U7":"",
		"U8":"",
		"U9":"",
		"U10":"",
		"U11":"",
		"U12":"",
		"U13":"",
		"U14":"",
		"U15":"",
		"U16":"",
		"U17":"",
		"U18":"",
		"U19":"",
		"U20":""
		},
	ot_dom:document.location.protocol+'//servedby.flashtalking.com',
	ot_path:'/container/4986;54721;5834;iframe/?',
	ot_href:'ft_referrer='+escape(document.location.href),
	ot_rand:Math.random()*1000000,
	ot_ref:document.referrer,
	ot_init:function(){
		var o=this,qs='',count=0,ns='';
		for(var key in o.ft_vars){
			qs+=(o.ft_vars[key]==''?'':key+'='+o.ft_vars[key]+'&');
		}
		count=o.ot_path.length+qs.length+o.ot_href+escape(o.ot_ref).length;
		ns=o.ot_ns(count-2000);
		document.write('<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="'+o.ot_dom+o.ot_path+qs+o.ot_href+'&ns='+ns+'&cb='+o.ot_rand+'"></iframe>');
	},
	ot_ns:function(diff){
		if(diff>0){
			var o=this,qo={},
				sp=/(?:^|&)([^&=]*)=?([^&]*)/g,
				fp=/^(http[s]?):\/\/?([^:\/\s]+)\/([\w\.]+[^#?\s]+)(.*)?/.exec(o.ot_ref),
				ro={h:fp[2],p:fp[3],qs:fp[4].replace(sp,function(p1,p2,p3){if(p2)qo[p2]=[p3]})};
			return escape(ro.h+ro.p.substring(0,10)+(qo.q?'?q='+unescape(qo.q):'?p='+unescape(qo.p)));
		}else{
			var o=this;
			return escape(unescape(o.ot_ref));
		}
			}
	}
ft_onetag_5834.ot_init();
</script>


<!-- EXPORTED TAGS -->
<!------- Tags for Shoretel Activity Buttons------->
<!--  Spotlight Tag: Shoretel (4986) | Shoretel Assessment LP (54770) | Shoretel Activity Buttons (3743) | Expected URL:  -->
<div style="position:absolute;">
<img style="width:1px; height:1px;" src="http://servedby.flashtalking.com/spot/4/4986;54770;3743/?spotName=Shoretel_Assessment_LP"/>
</div>
<img src='//pixel.mathtag.com/event/img?mt_id=916718&mt_adid=126869&v1=&v2=&v3=&s1=&s2=&s3=&mt_nsync=1' width='1' height='1' />

<!-- Start of Async HubSpot Analytics Code -->
  <script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/458506.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script>
<!-- End of Async HubSpot Analytics Code -->

<script type="text/javascript">
_bizo_data_partner_id = "6807";
</script>
<script type="text/javascript">
(function() {
var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";
b.async = true;
b.src = (window.location.protocol === "https:" ? "https://sjs" : "http://js") + ".bizographics.com/insight.min.js";
s.parentNode.insertBefore(b, s);
})();
</script>
<noscript>
<img height="1" width="1" alt="" style="display:none;" src="//www.bizographics.com/collect/?pid=6807&fmt=gif" />
</noscript>

</body>

<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.cssmap.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/jquery.history.js"></script>
<script type="text/javascript" src="js/quiz.js"></script>
<style type="text/css">
  body { font-size: 62.5%; }
  label, input { display:block;  font-weight: 500; color:#404040; }
  input.text { margin-bottom:12px; width:95%; padding: .4em; }
  fieldset { padding:0; border:0; margin-top:10px; }
  h1 { font-size: 1.2em; margin: .6em 0; }
  div#users-contain { width: 500px; margin: 20px 0; }
  div#users-contain table { margin: 1em 0; border-collapse: collapse; width: 100%; }
  div#users-contain table td, div#users-contain table th { border: 1px solid #eee; padding: .6em 10px; text-align: left; }
  .ui-dialog .ui-state-error { padding: .3em; }
  .validateTips { border: 1px solid transparent; padding: 0.3em;  padding-left:0; font-size:12px; color:#FB7901; }
	#QuizMap { width: 100%; background-color: #f1f1f1; }
	#QuizMap a path, #QuizMap a use { transition: fill .3s; -webkit-transition: fill .3s; transition-timing-function: ease-in-out; }
	#QuizMap a:hover path, #QuizMap a:hover use { fill: #fb7901 !important; }
	#quiz { padding-bottom: 120px; }
</style>
</html>
