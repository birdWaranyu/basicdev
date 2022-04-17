<?php 

    require_once('includes/connection.php');

    // Insert Record Function
    function InsertRecord()
    {
        global $con;
        $UserName = $_POST['UName'];
        $UserEmail = $_POST['UEmail'];
        
        $query = " insert into crudone (UserName,UserEmail) values('$UserName','$UserEmail')";
        $result= mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Saved in the Database';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }

    // Display Data Function
    function display_record()
    {
        global $con;
        $value = "";
        $value = '<table class="table table-bordered">
                    <tr>
                        <td> User ID </td>
                        <td> User User </td>
                        <td> User Email</td>
                        <td> Edit </td>
                        <td> Delete </td>
                    </tr>';
        $query = "select * from crudone ";
        $result = mysqli_query($con,$query);

        while($row = mysqli_fetch_assoc($result))
        {
            $value.= ' <tr>
                            <td> '.$row['id'].' </td>
                            <td> '.$row['UserName'].' </td>
                            <td> '.$row['UserEmail'].'</td>
                            <td> <button class="btn btn-success" id="btn_edit" data-id='.$row['id'].'><span class="fa fa-edit"></span></button> </td>
                            <td> <button class="btn btn-danger" id="btn_delete" data-id1='.$row['id'].'><span class="fa fa-trash"></span></button> </td>
                        </tr>';
        }
        $value.='</table>';
        echo json_encode(['status'=>'success','html'=>$value]);
    }

    // Get Particular Record
    function get_record()
    {
        global $con;
        $UserID = $_POST['UserID'];
        $query = "select * from crudone where ID='$UserID'";
        $result = mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($result))
        {
            $User_data = "";
            $User_data[0]=$row['id'];
            $User_data[1]=$row['UserName'];
            $User_data[2]=$row['UserEmail'];
        }
        echo json_encode($User_data);
    }


    // Update Function
    function update_value()
    {
        global $con;
        $Update_ID = $_POST['U_ID'];
        $Update_User =$_POST['U_User'];
        $Update_Email = $_POST['U_Email'];

        $query = "update crudone set UserName='$Update_User', UserEmail='$Update_Email' where ID='$Update_ID '";
        $result = mysqli_query($con,$query);
        if($result)
        {
            echo ' Your Record Has Been Updated ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }

    function delete_record()
    {
        global $con;
        $Del_Id = $_POST['Del_ID'];
        $query = "delete from crudone where ID='$Del_Id' ";
        $result = mysqli_query($con,$query);

        if($result)
        {
            echo ' Your Record Has Been Delete ';
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }

?>





