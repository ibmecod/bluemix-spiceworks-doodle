<!DOCTYPE html><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  
	 <link href='css/styles.css' rel='stylesheet'>

    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <link href='images/favicon32.png' rel='icon' type='image/png'>
     <title>IBM Bluemix Spiceworks Integration Demo </title>
	
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	
	 
	 <script type="text/javascript">
	 
      //Standard jQuery initialization
	 $(document).ready(function() {    

         // Put app's  URL in the Spiceworks integration instructions
     
		  $('#appURL').text(window.location.href);	
		  $('#ticketURL').text(window.location.href + 'app.html');	
	
     } );
	 
	 
	</script>
	 
   <body>
    
	<div class='container'>
     
          <div class='header'>
        <div class='pull-left' style='margin:0; padding:0; display:inline-block;'>
          <table class='table table-condensed' style='margin:0; padding:0'>
            <tr>
              <td align='left'>
                 <img src='images/bmlogo.jpg' height='60' style='vertical-align:middle'/>
              </td>
		  	  <td align='left' style='vertical-align: middle'>
                 <img src='images/spiceworks.png' />
              </td>
			  
              <td align='left' style='vertical-align:middle'>           
				<h4>Integration Demo</h4>
              </td>
		
            </tr>
          </table>
        </div>
 
      </div>
      <div class="row" style='margin-bottom: 20px'>
        <div class='col-md-12'>
          <hr style='margin:0; padding:0; border-color: #d4d4d4' />
        </div>
      </div>
	 
	  <div class="row" style='margin-bottom: 20px'>
       <p>This PHP IBM Bluemix application illustrates how to extend Spiceworks Developer Edition with a Bluemix  application. This a Bluemix port of the <a href="">Spiceworks Doodle example</a> 
	   an application to allow Help Desk admins to doodle on the tickets they are working on. To integrate this sample into SpiceWorks Developer Edition complete the following steps:</p>	 
       <ol>
	   <li>From the Spiceworks UI select <b><em>Apps->Inventory</em></b> or <b><em>Apps->Help Desk</em></b></li>
	   <li>Select <b><em>Settings->All</em></b> and click on <b><em>Manage Apps</em></b></li>
	   <li>Select <b><em>New App->New Platform App</em></b></li>
	   <li>Name the app and enter <span class='codeListing'>doodle</span>as the <b><em>Namespace</em></b></li>
	   <li>Copy the following URL and paste it as the <b><em>App Host URL</em></b><br/><br/>
	   <span id='appURL' class='codeListing'></span><br/><br/>
	   </li>	   
	   <li>Copy the following URL and paste it beside <b><em>Show on ticket</em></b><br/><br/>
	   <span id='ticketURL' class='codeListing'></span><br/><br/>
	   </li>
	   <li>Under <b><em>App Permissions</em></b>, give the app read access to all the data</li>
	   <li>Save your changes</li>
	   </ol>
	   <p> Your Bluemix app will now appear when you invoke <b><em>App->Your App Name</em></b> where <b><em>Your App Name</em></b> is the name you gave to the app and when you browse Help Desk tickets</p>
	             
      </div>
	 
	</div>
	<div><p>&nbsp;</p></div>
	<div class="footer" >
      <div class="container">
	     <span class="pull-left">
        <p class="text-muted"><a href="http://www.ibm.com/developerworks/topics/bluemix/">IBM Bluemix learning resources </a> </p>
		</span>
	    <span class="pull-right">
        <p class="text-muted">&copy; 2015 IBM Corporation</p>
		</span>
      </div>
    </div>
	</body>
	</html>