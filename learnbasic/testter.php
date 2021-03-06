
<link rel="stylesheet" href="../code/css/bootstrap.min.css">
<script src="../code/js/jquery-3.3.1.min.js"></script>

<div class='container'>

 <!-- Search control -->
 <div>
  <input type='text' id='search' placeholder='Search Text'>
 </div>

 <!-- Content list -->
 <div class='content'>
  <div class='title'>
   <a href='https://makitweb.com/dynamically-add-and-remove-element-with-jquery/' >
     Dynamically add and remove element with jQuery
   </a> 
  </div>
  <p>In this post, I show how you can add and remove new element within your web page with jQuery...</p>
 </div>

 <div class='content'>
  <div class='title'>
    <a href='https://makitweb.com/how-to-delete-value-from-array-in-javascript/'>
     How to Delete a value from an Array in JavaScript
    </a>
  </div>
  <p>There are many cases when we have to remove some unused values from the Array which no longer needed within the program...</p>
 </div>

 <div class='content'>
  <div class='title'><a href='https://makitweb.com/read-and-get-parameters-from-url-with-javascript/'>Read and Get Parameters from URL with JavaScript</a></div>
  <p>If you are familiar with PHP where for reading parameters from URL you can use either $_GET or $_REQUEST which take the name of the argument and return value of it...</p>
 </div>

 <div class='content'>
  <div class='title'>
   <a href='https://makitweb.com/html-how-to-show-text-above-image-on-hover/'>
    HTML – How to Show Text Above Image on Hover
   </a>
  </div>
  <p>In this quick tutorial, I show How you can show text above Image when the user hovers the image using only HTML and CSS, no jQuery and JavaScript...</p>
 </div>
 
</div>

<script>
    $(document).ready(function(){
        $('#search').keyup(function(){
        
        // Search text
        var text = $(this).val();
        //alert(text);

        // Hide all content class element
        $('.content').hide();

        // Search and show
        $('.content:contains("'+text+'")').show();
        
        });
    });
</script>
