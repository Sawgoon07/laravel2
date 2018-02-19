<!DOCTYPE html>

<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>



	<script type="text/javascript">
	var button_my_button = "#myButton";
	$(button_my_button).click(function(){
	 window.location.href='{!!route('frontend.menu1')!!}';
	});

	//get a reference to the element
	  var myBtn = document.getElementById('myButton');

	  //add event listener
	  myBtn.addEventListener('click', function(event) {
	    window.location.href='{!!route('frontend.menu1')!!}';
	  });

	</script>

	 <style type="text/css">
        .text{
            font-size: 20px;
            color: black;
            display: inline;
        }
    </style>
</head>
<body>

<div class="content">
        <div class="container-fluid">
            <div class="row">
              <center><h2>Menu</h2></center>
            <br>
        </div>

<div class="row">
        <div class="col-lg-12">
	        <p class="text">Thank you for considering us for your upcomming celebration or program. We have a unique ways of category which is divided into 3 groups. Formal Party, Simple Play and Traditional Party. We plan all kinds of events from Formal, Simple and Traditional like Weddings, Birthday party, Business seminars, Janku etc.
	        The Traditional parities include Menu 1 in which this party menu is done in Newari style with Newari food item. The Formal party include Menu A incude 3 categories such as snacks dinner and dersert, which is the full buffet or full catering it contain various food items. So, the user can choose on the choise of the item. 
	        The Simple party contain Menu B include 2 cateroires such dinner and desert of the food item. The menu include various item, it is also known as hall catering or half bufflet party. 
	        Therefore, You can view the Menu by clicking above menu for more understanding of the menu. So, according to the menu you can choose the menu for the party.
		</p>

        </div> 
		<div class="col-lg-12 text-center">
			<input class="btn btn-info btn-lg" type="button" value="Menu 1" onclick="window.location.href='{!!route('frontend.menu1')!!}';"> 
			<input class="btn btn-sucess btn-lg" type="button" value="Menu A" onclick="window.location.href='{!!route('frontend.menuA')!!}';"> 
			<input class="btn btn-warning btn-lg" type="button" value="Menu B" onclick="window.location.href='{!!route('frontend.menuB')!!}';">
		</div>
</div>


  

          
        </div>
  </div>
</body>
</html>



