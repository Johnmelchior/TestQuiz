$(document).ready(function(){
  // TODO done: ga pushState refactor
  var State, manualStateChg;
  History.Adapter.bind(window, 'statechange' ,function() { // Note: We are using statechange instead of popstate
    State = History.getState(); // Note: We are using History.getState() instead of event.state
    if (manualStateChg == true) { // just assume it was back???
      //History.back();
    }
    manualStateChg = true;
  });

  function pushQuizState(stateObj, question, urlPath) {
    var pvUrl = "/buildabettermeeting"+urlPath;
    History.pushState(stateObj, question, pvUrl);
    ga('send', 'pageview', location.pathname+location.search+location.hash);

    //i.e.
    //{state:1}
    //"How many hours a week do you spend in meetings?"
    //"/q1"
  }

  // modrnizr for mobile touch events
  if (Modernizr.touch) {
    // run the forEach on each hoverable element
    [].slice.call(document.querySelectorAll('.hoverable')).forEach(function(el,i){
      // check if the user moves a finger
      var fingerMove = false;
      el.addEventListener('touchmove',function(e){
        e.stopPropagation();
        fingerMove = true;
      });

      // always reset fingerMove to false on touch start
      el.addEventListener('touchstart',function(e){
        e.stopPropagation();
        fingerMove = false;
      });

      // add hover class if figure touchend and fingerMove is false
      el.addEventListener('touchend',function(e){
        e.stopPropagation();
        if (fingerMove == false) {
          $(el).toggleClass('hover');
        }
      });
    });
  }

  // swap svg vs. jQ approach for map based on IE8
  if ($('html').is('.ie8')) {
    $('#map-continents').show();
    $('#QuizMap').hide();
  }

  $('#QuizMap a').hover(
		function() {
			//console.log('Key: '+$(this).attr('data-continent'));
			var cont = $(this).attr('class').split(' ')[1];
			//console.log($('path', '.'+cont+'.option').length);
			if ($('use', '.'+cont+'.cont-option').length > 0) {
				$('use', '.'+cont+'.cont-option').each(function() {
					$(this).attr('fill', '#fb7901');
				});
			} else {
				$('path', '.'+cont+'.cont-option').each(function() {
					$(this).attr('fill', '#fb7901');
				});
			}
		},
		function() {
			var cont = $(this).attr('class').split(' ')[1];
			if ($('use', '.'+cont+'.cont-option').length > 0) {
				$('use', '.'+cont+'.cont-option').each(function() {
					$(this).attr('fill', $(this).attr('primary-fill'));
				});
			} else {
				$('path', '.'+cont+'.cont-option').each(function() {
					$(this).attr('fill', $(this).attr('primary-fill'));
				});
			}
		}
	);

	$('.challenge-link').on('click',function(){
		$('#welcome').hide();
		$('#quiz').show();
    //chg state
    manualStateChg = false;
    pushQuizState({state:1}, "How many hours a week do you spend in meetings?", "/q1");
	});

  var Quiz = {};
	var QuizNumVal = {};
	/*
	14-18	Meeting Multitasker
	19-23	Meeting Maximizer
	24-30	Meeting Maverick
	*/
	var QuizResultVal = 0;
	window.QuizResultVal = QuizResultVal;

  $('.options, .options-two, .submit, .options_demograph, .land, #QuizMap a').click(function(){
    var curr_ques = $(this);

		curr_ques.addClass('selected');

    //console.log(curr_ques.attr('class'));
		var key, continent;
		if (curr_ques.attr('class').indexOf('cont-option') !== -1) {
			key = curr_ques.data('key');
			continent = curr_ques.data('continent');
			//console.log('got cont key: '+key);
			//console.log('got continent: '+continent)
		} else {
			key = curr_ques.find('.option').data('key');
		}
		//console.log('key: '+key);

		k = curr_ques.closest('.outer-wrapper');

    var tagName;
		if (k.find('.option').length > 0) {
			tagName = k.find('.option').prop('tagName');
		} else {
			tagName = k.find('.cont-option').prop('tagName');
		}
		//console.log('tagName: '+tagName);

		if(tagName == 'TEXTAREA'){
			var key = k.find('.option').data('key');
			var text_val = k.find('.option').val();
			text_val = text_val.replace(/[@#$%\^&*=_+"'\/<>\\\|{}\[\]]/g,"");
        	text_val = text_val.replace(/[\t ]+/g,' ');
        	text_val = text_val.replace(/\n{1,}/g,'\n\n');
        	lineArr = text_val.split(/\n/);
        	for (var i=0;i<lineArr.length;i++) {
            	lineArr[i] = lineArr[i].replace(/(^ +| +$)/g,"");
        	}
        	text_val = lineArr.join("\n")
			Quiz[key] = text_val;

		} else if (tagName == 'A'){
      // downgraded map
      if (curr_ques.attr('class').indexOf('cont-option') == -1) {
			  var key = curr_ques.find('.option').data('key');
			  var continent = curr_ques.find('.option').data('continent');
      }
		} else {
			Quiz[key] = curr_ques.find('.option').data('value');
            if($.isNumeric( curr_ques.find('.option').val() )){
			 QuizResultVal = QuizResultVal + parseInt(curr_ques.find('.option').val());
            }
			//console.log('QuizResultVal: '+QuizResultVal);
		}

		if(key.substr(0, 15) == 'bmc_demographic'){
			Quiz[key] = curr_ques.find('.option').data('value');

			//add selected class
			if(key == 'bmc_demographic_q1'){
				k.find('.info_1').find('.option').removeClass('option_selected');
				curr_ques.find('.option').addClass('option_selected');
			}

			if(key == 'bmc_demographic_q2'){
				k.find('.info_2').find('.option').removeClass('option_selected');
				curr_ques.find('.option').addClass('option_selected');
			}

			if(key == 'bmc_demographic_q3'){
				k.find('.info_3').find('.option').removeClass('option_selected');
				curr_ques.find('.option').addClass('option_selected');
			}

			if(key == 'bmc_demographic_q4'){
				k.find('.info_4').find('.option').removeClass('option_selected');
				curr_ques.find('.option').addClass('option_selected');
			}


			if(key == 'bmc_demographic_q1' || key == 'bmc_demographic_q2'){
				if((typeof Quiz['bmc_demographic_q1'] != 'undefined' && typeof Quiz['bmc_demographic_q2'] != 'undefined') ){
					k.fadeOut('fast');
				}
			}
			if(key == 'bmc_demographic_q3' || key == 'bmc_demographic_q4'){
				if((typeof Quiz['bmc_demographic_q3'] != 'undefined' && typeof Quiz['bmc_demographic_q4'] != 'undefined') ){
					k.fadeOut('fast');
				}
			}
			if(key == 'bmc_demographic_q5'){
				Quiz[key] = continent;
				k.fadeOut('fast');
			}
		} else {
			k.fadeOut('fast');
		}

		if(k.data('last') == 'last'){
			//console.log(QuizResultVal);
			Quiz['bmc_result'] = QuizResultVal;
            Quiz.form_submission = 1;
			//console.log(Quiz['bmc_result']);

			$.ajax({
				type: 'POST',
				url:'/buildabettermeeting/quiz.php',
				dataType:"JSON",
				data: {quiz:JSON.stringify(Quiz)},
				beforeSend: function() {
			        // setting a timeout
			    },
				headers: {"Content-Type": "application/x-www-form-urlencoded",
				"Content-Length":Quiz.length},
				success:function(data){
					if(data){
						//$('.download_ebook').fadeIn('fast');
						if(data.status_code){
							//set the address bar hash
							//unfortunately not support in IE9 and below
							/*if (typeof window.history.pushState == 'function') {
								//console.log('#'+newQueryString);
								window.history.pushState(null, null, 'results');
							}*/


							//$('.download_ebook').fadeOut(300);
                            if(data.bmc_result == 'Meeting Maximizer'){
                                $('.wrap_result .results-maximizer').show();
                            }
                            if(data.bmc_result == 'Meeting Multitasker'){
                                $('.wrap_result .results-multitasker').show();
                            }
                            if(data.bmc_result == 'Meeting Maverick'){
                                $('.wrap_result .results-maverick').show();
                            }
							//$('.wrap_result .resultsLabel').html(data.bmc_result);
							$('.wrap_result').fadeIn(300);

              // result state
              manualStateChg = false;
              pushQuizState({state:12}, "Thank you for taking the challenge!", "/results");

							//DOM inject tracking code for results screen
							if(resultsTag){
								$('body').after(resultsTag);
							}
						}
					}
				}
			});
			//window.location = 'result.html';
		} else if (k.data('last') == 'trans'){
			$("#quiz").hide();
      manualStateChg = false;
			if(k.data('trans') == 1){
				$('#transition,.trans1').show();
        pushQuizState({state:'t1'}, "Keep going to find out if you are a Meeting Maximizer", "/t1");
			} else if(k.data('trans') == 2){
				$('#transition,.trans2').show();
        pushQuizState({state:'t2'}, "I can do many things in meetings! Are you a Meeting Multitasker?", "/t2");
			} else if(k.data('trans') == 3){
				$('#transition,.trans3').show();
        pushQuizState({state:'t3'}, "You might be a<br /> <strong>Meeting Maverick", "/t3");
			}


			//for UI QA, disabling auto transition
			setTimeout(function(){
				//put 3000ms delay to auto exit transition
				var nextQuestion = $('.transitionWrap:visible a').data('ques');
				$('#transition,.transitionWrap').hide();
				$('#quiz,.ques_'+nextQuestion).show();
        manualStateChg = false;
        if (nextQuestion == 3) {
          pushQuizState({state:3}, "How do you attend the majority of meetings?", "/q3");
        } else if (nextQuestion == 6) {
          pushQuizState({state:6}, "As a meeting organizer, do you plan an agenda prior to meetings?", "/q6");
        } else if (nextQuestion == 9) {
          pushQuizState({state:9}, "Tell us a little about you...", "/q9");
        }
			},8000);



		} else if (key.substr(0, 15) == 'bmc_demographic'){
			if(key == 'bmc_demographic_q1' || key == 'bmc_demographic_q2'){
				if((typeof Quiz['bmc_demographic_q1'] != 'undefined' && typeof Quiz['bmc_demographic_q2'] != 'undefined') || (typeof Quiz['bmc_demographic_q3'] != 'undefined' && typeof Quiz['bmc_demographic_q4'] != 'undefined')){
					k.next('.outer-wrapper').delay(300).fadeIn('fast');
          pushQuizState({state:10}, "Tell us a little more about you...", "/q10");
				}
			}
			if(key == 'bmc_demographic_q3' || key == 'bmc_demographic_q4'){
				if((typeof Quiz['bmc_demographic_q3'] != 'undefined' && typeof Quiz['bmc_demographic_q4'] != 'undefined') || (typeof Quiz['bmc_demographic_q3'] != 'undefined' && typeof Quiz['bmc_demographic_q4'] != 'undefined')){
					k.next('.outer-wrapper').delay(300).fadeIn('fast');
          pushQuizState({state:11}, "One last thing... Where do you live?", "/q11");
				}
			}
		} else {
			k.next('.outer-wrapper').delay(300).fadeIn('fast');
      //chg states
      manualStateChg = false;
      if (k.next('.outer-wrapper').hasClass('ques_2')) {
        pushQuizState({state:2}, "How long do you spend trying to get meeting technology to work?", "/q2");
      } else if (k.next('.outer-wrapper').hasClass('ques_3')) {
        pushQuizState({state:3}, "How do you attend the majority of meetings?", "/q3");
      } else if (k.next('.outer-wrapper').hasClass('ques_4')) {
        pushQuizState({state:4}, "How productive are your meetings?", "/q4");
      } else if (k.next('.outer-wrapper').hasClass('ques_5')) {
        pushQuizState({state:5}, "What do you really do in meetings?", "/q5");
      } else if (k.next('.outer-wrapper').hasClass('ques_6')) {
        pushQuizState({state:6}, "As a meeting organizer, do you plan an agenda prior to meetings?", "/q6");
      } else if (k.next('.outer-wrapper').hasClass('ques_7')) {
        pushQuizState({state:7}, "Are you taking this challenge while you are in a meeting?", "/q7");
      } else if (k.next('.outer-wrapper').hasClass('ques_8')) {
        pushQuizState({state:8}, "What are some of the best meeting tips you would like to share?", "/q8");
      } else if (k.next('.outer-wrapper').hasClass('ques_9')) {
        pushQuizState({state:9}, "Tell us a little about you...", "/q9");
      }
    }

	});

	//Dialog form
	var dialog, form,

	// From http://www.whatwg.org/specs/web-apps/current-work/multipage/states-of-the-type-attribute.html#e-mail-state-%28type=email%29
	emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
	firstname = $( "#firstname" ),
	lastname = $( "#lastname" ),
	email = $( "#email" ),
	phone = $( "#phone" ),
	company = $("#company"),
	country = $("#country"),
	state = $("#state"),
	allFields = $( [] ).add( firstname ).add( lastname ).add( email ).add( phone ).add( company ).add( country ).add( state ),
	tips = $( ".validateTips" );

	dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 600,
      width: 500,
      modal: true,
      buttons: {
        "Submit": addUser
      },
      close: function() {
        allFields.removeClass( "ui-state-error" );
      }
    });

	$("#quiz").on('click','.download_btn',function(){
		dialog.dialog( "open" );
	});

	dialog_contact_sales = $( "#dialog-contact-sales-form" ).dialog({
      autoOpen: false,
      height: 600,
      width: 500,
      modal: true,
      close: function() {
        allFields.removeClass( "ui-state-error" );
      }
    });

	$("#quiz").on('click','.contact-sales',function(){
		dialog_contact_sales.dialog( "open" );
		$('.ui-dialog-titlebar-close').css('top','46%');
	});

	//Return to ques from transition image
	$('a.transitionContinue').on('click',function(){
		var ques = $(this).data('ques');
		$('#transition,.transitionWrap').hide();
		$('#quiz,.ques_'+ques).show();
    manualStateChg = false;
    if (ques == 3) {
      pushQuizState({state:3}, "How do you attend the majority of meetings?", "/q3");
    } else if (ques == 6) {
      pushQuizState({state:6}, "As a meeting organizer, do you plan an agenda prior to meetings?", "/q6");
    } else if (ques == 9) {
      pushQuizState({state:9}, "Tell us a little about you...", "/q9");
    }
	});

	$('#map-continents').cssMap({'size' :650});

	//Select state based on country
	$("#country").change(function(){
		country_id = $('option:selected', this).data('countryid');

		if(country_id == 1){
			$("#state").show();
			$("#state").prev('label').show();
		}else{
			$("#state").hide();
			$("#state").prev('label').hide();
		}
		/*$('#state option').each(function () {
		    var self = $(this);
		    self.hide();
		    if (self.data('countrycode') == country_id) {
		        self.show();
		    }
		});*/
	});

	$('#transition .transitionWrap').css('height', $(window).height() - ($('#foot-bar').height()+50));

    function updateTips( t ) {
      tips
        .text( t )
        .addClass( "ui-state-highlight" );
      setTimeout(function() {
        tips.removeClass( "ui-state-highlight", 1500 );
      }, 500 );
    }

    function checkExist(o,n){
    	if(o.val() == ''){
    		o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
    	} else {
    		return true;
    	}
    }

    function checkLength( o, n, min, max ) {
      if ( o.val().length > max || o.val().length < min ) {
        o.addClass( "ui-state-error" );
        updateTips( "Length of " + n + " must be between " +
          min + " and " + max + "." );
        return false;
      } else {
        return true;
      }
    }

    function checkRegexp( o, regexp, n ) {
      if ( !( regexp.test( o.val() ) ) ) {
        o.addClass( "ui-state-error" );
        updateTips( n );
        return false;
      } else {
        return true;
      }
    }

    function addUser() {
      var valid = true;
      allFields.removeClass( "ui-state-error" );

      valid = valid && checkExist( firstname,"Please provide your first name.");
      valid = valid && checkExist( lastname,"Please provide your last name.");
      valid = valid && checkExist( email,"Please provide your email.") && checkRegexp( email, emailRegex, "eg. your@email.com" );
      valid = valid && checkExist( phone,"Please provide your phone number.") && checkRegexp( phone, /^[0-9-+() ]+$/, "Phone Number field only allow : 0-9" );
      valid = valid && checkExist( company,"Please provide company name.");
      valid = valid && checkExist( country,"Please select country.");
      if(country_id == 1){
      	valid = valid && checkExist( state,"Please select state.");
  	  }

      valid = valid && checkRegexp( email, emailRegex, "eg. your@email.com" );

      if ( valid ) {
      	Quiz.firstname = $('#firstname').val();
      	Quiz.lastname = $('#lastname').val();
      	Quiz.email = $('#email').val();
      	Quiz.phone = $('#phone').val();
        Quiz.company = $('#company').val();
        Quiz.state = $('#state').val();
        Quiz.form_submission = 2;

      	$.ajax({
			type: 'POST',
			url:'/buildabettermeeting/quiz.php',
			dataType:"JSON",
			data: {quiz:JSON.stringify(Quiz)},
			headers: {"Content-Type": "application/x-www-form-urlencoded",
			"Content-Length":Quiz.length},
			success:function(data){
				if(data && data.status_code){
					//$('.download_ebook').fadeOut(300);
					//$('.wrap_result .resultsLabel').html(data.bmc_result);
					//$('.wrap_result').fadeIn(300);


					//window.open('ebook.php');
                    window.location.href = 'http://go.shoretel.com/build-a-better-meeting-ebook-thank-you';


					/*url = 'ebook.php'
                    var open = window.open(url);
                    if (open == null || typeof(open)=='undefined'){
            			alert("Turn off your pop-up blocker!\n\nWe try to open the following url:\n"+url);
            		}*/
				}
			}
		});
        dialog.dialog( "close" );
      }
      return valid;
    }

    //Placeholder
	//$('textarea[placeholder]').placeholder();

    $('textarea[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur();


});
