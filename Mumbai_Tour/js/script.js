$(document).ready(function() {
    //tab
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    });
	
	//form validation
	$.validator.setDefaults({
		submitHandler: function() {
			form = $("#form1").serialize();
			$.ajax({
				url:"index.php?action=bus_booking",
				type:"post",
				data:form,
				success:function(response) {
					//console.log(response);
					$('#On_pay').fadeIn();
					//$('.c-over').fadeIn();
					//scroll down
                    $('body, html').animate({scrollTop: $('#On_pay').offset().top});
					//Product id

					}
			});
		}
	});
	
	
	$('.overlay, #close').click(function(){
		$('.c-over').fadeOut();
	});
	
	$(".signupForm").validate({	
	
		ignore: "",
		
		rules: {
			from_journey: {
				required: true
			},
			to_journey: {
				required: true
			},
			journeydate: {
				required: true
			},
			full_name: {
				required: true
			},
			contact: {
				required: true,
				number: true,
				maxlength: 14,
				minlength: 10
			},
			address: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			'seat[]': {
				required: true,
				minlength: 1
			},

		},
		
		messages: {
			from_journey:{ 
				required: "Please enter a source area"
			},
			to_journey: {
				required: "Please enter a destination area"
			},
			journeydate: {
				required: "Please select your Journey date"
			},
			full_name: {
				required: "Full name is required and con't be empty",
			},
			contact: {
				required: "Contact number required for conformation",
			},
			address: {
				required: "Address is required",
			},
			email: {
				required: "Email address is required for conformation",
			},
			'seat[]': {
				required: "Please select at least 1 seat from available (Grey color) seats",
				minlength: "You have not selected any seat"
			},

		},	
	});
	
	//2nd form
	$.validator.setDefaults({
		submitHandler: function() {
			form = $("#form2").serialize();
			$.ajax({
				url:"index.php?action=bus_booking_private",
				type:"post",
				data:form,
				success:function(response) {
					//console.log(response);
					$('#On_pay').fadeIn();
                    //$('#myModal').modal('show');
					//scroll down
                    $('body, html').animate({scrollTop: $('#On_pay').offset().top});
				}
			});
		}
	});
	
	$(".signupForm2").validate({
		rules: {
			bus:{
				require_from_group: [1, ".vahVal"]
			},
			car:{
				require_from_group: [1, ".vahVal"]
			},
			from_journey2: {
				required: true
			},
			to_journey2: {
				required: true
			},
			journeydate2: {
				required: true
			},
			name_pri: {
				required: true
			},
			contact_pri: {
				required: true,
				number: true,
				maxlength: 14,
				minlength: 10
			},
			address_pri: {
				required: true
			},
			email_pri: {
				required: true,
				email: true
			},
			
		},
		messages: {
			bus:{
				require_from_group: "Select any Bus from following Dropdown",
			},
			car:{
				require_from_group: "Select any Car/Jeep/Marshal from following Dropdown",
			},
			from_journey2:{ 
				required: "Please enter a source area"
			},
			to_journey2: {
				required: "Please enter a destination area"
			},
			journeydate2: {
				required: "Please select your Journey date",
			},
			name_pri: {
				required: "Full name is required and con't be empty",
			},
			contact_pri: {
				required: "Contact number required for conformation",
			},
			address_pri: {
				required: "Address is required",
			},
			email_pri: {
				required: "Email address is required for conformation",
			},
			
		},	
	});
	
	//form 3
	$.validator.setDefaults({
		submitHandler: function() {
			form = $("#form3").serialize();
			$.ajax({
				url:"index.php?action=Onilne_Payments",
				type:"post",
				data:form,
				success:function(response) {
					//console.log(response);
					//$('.c-over').fadeIn();
                    $('#myModal').modal('show');
					//$('#On_pay').fadeIn();
				}
			});
		}
	});
	
	
	$(".signupForm3").validate({
		rules: {
			Payments:{
				required: true
			},
			card: {
				required: true
			},
			card_holder: {
				required: true
			},
			Surname: {
				required: true
			},
			Card_nunmber: {
				required: true,
				maxlength:16 
			},
			Expiry_month: {
				required: true
			},
			Expiry_year: {
				required: true,
				digits: true
			},
			CVV_number: {
				required: true,
				number: true,
				maxlength: 5,
				minlength: 3
			},
		},
		messages: {
			Payments:{
				required: "Please select mode of payments", 
			},
			card: {
				required: "Please select any 1 card type", 
			},
			card_holder: {
				required: "Please Enter Card Holder name as written on the card",
			},
			Surname: {
				required: "Please Enter Card Holder Last Name as written on the card",
			},
			Card_nunmber: {
				required: "Please enter card number carefully as written on card",
			},
			Expiry_month: {
				required: "Please select month of Expiry of your card",
			},
			Expiry_year: {
				required: "Please enter year of Expiry of your card",
			},
			CVV_number: {
				required: "Please enter CVV Card written back side of your card",
			},
			
		},	
	});
	
	//payment form hide and show
	$(".on-cod input[type='radio']").change(function () {
		if ($(this).val() === "Online") {
			$(".hide-pay").slideDown('slow');
		} else {
			$(".hide-pay").slideUp('slow');
		}
	});
	
	//seat arrangements
	$('.book').click(function(){
		$(this).toggleClass('bsbgp');
	});
	
	//per seat price
	//$('.seat-arrangement label').attr('data-value','Rs. 500');
	$('.seat-arrangement label').on('click', function(){
		var theValue = ($(this).attr('data-value'));
		if($(this).hasClass('bsbgp')){
			$('#Price_bus').val(parseInt($('#Price_bus').val()) + 500);
		}else{
			$('#Price_bus').val(parseInt($('#Price_bus').val()) - 500);
		}
	});
	
	//select option
	$('select#bus').change(function(){
		var selected = $(this).find('option:selected');
		$('#Bus_price').val(selected.data('pri'));
	}).change();
	
	//car
	$('select#car').change(function(){
		var selected = $(this).find('option:selected');
		$('#Car_price').val(selected.data('pri'));
	}).change();

	//payments hidden
	$('.payee_name-Main').change(function() {
		$('#payee_name').val($(this).val());
	});
	$('.payee_contact-Main').change(function() {
		$('#payee_contact').val($(this).val());
	});
	$('.payee_address-Main').change(function() {
		$('#payee_address').val($(this).val());
	});
	$('.payee_email-Main').change(function() {
		$('#payee_email').val($(this).val());
	});
	
		
});

 $(function() {
    var availableTags = [
		"Airoli", "Ambarnath","Ambivli", "Andheri", "Badlapur","Bhayandar","Bhiwandi","Borivali","Byculla","CBD Belapur","Charni Road","Chembur","Chhatrapati Shivaji Terminus","Chinchpokli","Churchgate","Currey Road","Dadar","Dahisar","Dockyard Road","Elphinstone Road","Ghatkopar","Goregaon","Grant Road","Jogeshwari","Kalyan","Kandivali","Khandeshwar",
		"Khar Road","Kharbao","Khardi","Kharghar","Khopoli","King's Circle","Kopar","Kopar Khairane","Kurla","Lower Parel","Lowjee","Mahalaxmi","Mahim","Malad","Mankhurd", "Mansarovar", "Marine Lines", "Masjid", "Matunga", "Matunga Road", "Mumbai Central", "Mira Road", "Mumbra", "Nahur", "Naigaon", "Nalasopara", "Nerul","Nilaje","Oshiwara","Palghar", "Panvel", "Parel", "Rabale", "Roha", "Sanpada", "Sandhurst Road", "Santa Cruz", "Seawoods Darave", "Saphale", "Sion", "Thane", "Turbhe", "Ulhasnagar", "Vadala Road", "Vasai Road", "Vashi","Vasind", "Vidyavihar", "Vikhroli", "Vile Parle", "Virar", "Vithalwadi", "10TH ROAD", "A.D. Modi Institute", "Chowk/lokhandwala complex", "Colaba", "Nadkarni Park","Hutatma Chowk", "Navy Nagar", "Bandra Colony", "Swami.Dayanand S Chowk", "Goregaon Depot", "Backbay Depot", "World Trade Center", "Pratiksha Nagar","Electric House", "Kannamwar Nagar", "M.P.Chowk (Mazgaon)", "Rani Laxmibai Chowk", "Somaiyya Hospital", "Mantralaya", "Shivaji Nagar", "Backbay Depot", "B.A.R.C", "Marol", "Majas", "N.C.P.A.", "Vihar Lake", "Bhandup Village(East)", "Worli Depot", "Vaishali Nagar(Mulund)", "J.V.P.D", "Wadala Depot", "Thane Flyover Bridge", "Seven Bunglows", "Ballard Pier", "Pt. Paluskar Chowk", "Pt.Thakeray Udyan", "Malwani","Seepz", "Ferry Wharf", "Maheshwari Udyan", "Worli Village", "balunath","Versova", "Chunabhatti", "Antop Hill", "Walkeshwar", "Kala Killa", "Tata Colony", "Santacruz Depot", "Vijay Vallab Chowk", "Kamla Nehru park", "Sangam Nagar, Wadala", "Com. P. K. Khurana Chowk", "R.C. Church", "Jijamata Udyan", "Byculla Station", "Nehru Planetorium", "Khamballa Hill", "Plaza (Dadar West)", "Kasturba Gandhi Chowk", "Dharavi", "Tata Oil Mills", "Dayaneshwar Nagar", "Aagarkar Chowk", "Juhu Beach", "Dahisar Bridge", "D.N. Nagar", "Sakinaka", "4 Bungalows", "Mahakali", "Amboli", "chnadivali","Chakala", "Kala Ghoda", "Charkop", "Cotton Green", "Pawai","Powai"
    ];
    $( ".dropdown" ).autocomplete({
      source: availableTags
    });
	
	//datepicker
	$('.datepicker').datepicker({
		inline: true,
		//nextText: '&rarr;',
		//prevText: '&larr;',
		showOtherMonths: true,
		dateFormat: 'D, dd-mm-yy',
		dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		minDate: 0,
		//maxDate: 60,
		required: true,
		//showOn: "button",
		buttonImage: "img/calendar-blue.png",
		buttonImageOnly: true,
        onSelect: function(){
            $(this).parents('.form-group').find('label.error').fadeOut(100);
        }
	});
	
});