
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webslesson Tutorial | Jquery Post Form Data using Ajax serialize() method</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
</head>
<body>

<br /> 
           <div class="container" style="width:600px;">  
                <h3>Jquery Post Form Data using Ajax serialize() method</h3><br />  
                <form id="submit_form">  
                     <label>Name</label>  
                     <input type="text" name="name" id="name" class="form-control" />  
                     <br />  
                     <label>Message</label>  
                     <textarea name="message" id="message" class="form-control"></textarea>  
                     <br />  
                     <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                </form>
                <br> 
                <table class="table table-hover table-striped">
                    <tr>
                       <th>id</th>
                       <th>name</th>
                       <th>messager</th>
                       <th>Edit</th>
                       <th>Delete</th>
                    </tr>
                    <?php                     
                    $connect = mysqli_connect("localhost", "root", "Con2DB", "wesslesson");
                    mysqli_set_charset($connect, "utf8");
                    $sql = "SELECT * FROM tbl_form ORDER BY id DESC; ";
                    $result = mysqli_query($connect,$sql);
                    $numrows = mysqli_num_rows($result);
                    if ($numrows > 0) {
                        while ($rs = mysqli_fetch_array($result)) {
                            $Id = $rs['id']; 
                            $Name = $rs['name'];
                            $Messager = $rs['message'];  
                    
                    ?>
                    <tr>
                       <td><?php echo $Id; ?></td>
                       <td class="name" data-id1="<?php echo $Id; ?>"><?php echo $Name; ?></td>
                       <td class="message" data-id2="<?php echo $Id; ?>"><?php echo $Messager; ?></td>
                       <td><input type="button" name="edit" value="Edit" data-id3="<?php echo $Id; ?>" class="btn btn-info btn-xs edit_data" /></td>
                       <td><input type="button" name="delete" value="Delete" data-id4="<?php echo $Id; ?>" class="btn btn-info btn-xs delete_data" /></td>
                    </tr>
                    <?php                    
                        }
                    } else {
                       echo "Data No Error:"; 
                    }                   
                    ?>
                </table> 
                <div id="response"></div>  
           </div>   
     
</body>
</html>
 
<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var message = $('#message').val();  
           if(name == '' || message == '')  
           {  
                $('#response').html('<span class="text-danger">All Fields are required</span>');  
           }  
           else  
           {  
                $.ajax({  
                     url:"insert.php",  
                     method:"POST",  
                     data:$('#submit_form').serialize(),  
                     beforeSend:function(){  
                          $('#response').html('<span class="text-info">Loading response...</span>');  
                     },  
                     success:function(data){  
                         alert(data);
                          $('#submit_form').trigger("reset");  
                          $('#response').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#response').fadeOut("slow");  
                          }, 5000);  
                     }  
                });  
           }  
      });
    //   function edit_data(id, name, message)  
    //   {  
    //     $.ajax({  
    //         url:"edit.php",  
    //         method:"POST",  
    //         data:{id:id, name:name, message:message},  
    //         dataType:"text",  
    //         success:function(data){  
    //             alert(data);
	// 			$('#response').fadeIn().html(data);
    //         }  
    //     });  
    //  }  
    // $(document).on('click', '.name', function(){  
    //     var id = $(this).data("id1");
    //     //alert(id);  
    //     var name = $(this).text();
    //     //alert(first_name);  
    //     edit_data(id, name, "name");  
    // });  
    // $(document).on('click', '.message', function(){  
    //     var id = $(this).data("id2");  
    //     //alert(id);
    //     var message = $(this).text();  
    //     //alert(first_name);
    //     edit_data(id, message, "message");  
    // });
      $(document).on('click', '.edit_data', function(){  
           var editid = $(this).data("id3");
           var editname = $('#name').val();
           var editmessage = $('#message').val();  
           //alert(id); 
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:editid,name:editname,message:editmessage},  
                dataType:"text",  
                success:function(data){  
                    alert(data);
                    $('#response').fadeIn().html(data);
                }  
           });  
      });
      $(document).on('click', '.delete_data', function(){  
           var deleid = $(this).attr("id"); 
           //alert(id); 
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{id:deleid},  
                dataType:"text",  
                success:function(data){  
                    alert(data);
                    $('#response').fadeIn().html(data);
                }  
           });  
      });    
 });  
 </script> 
         