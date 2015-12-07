 
<head>
 <script src="css/toastr.css"></script>
 
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>



 <script src="js/toastr.js"></script>
 </head>


 <body>
<script type="text/javascript">
	
	$(document).ready(function() {

    // show when page load
    toastr.info('Page Loaded!');

    $('#linkButton').click(function() {
       // show when the button is clicked
       toastr.success('Click Button');

    });

});
</script>

 </body>