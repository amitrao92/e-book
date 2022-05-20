<?php  

# Get All user function
function get_all_users($con){
   $sql  = "SELECT * FROM users ORDER bY id DESC";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $users = $stmt->fetchAll();
   }else {
      $users = 0;
   }

   return $users;
}


# Get All Data function
function get_all_contact($con){
   $sql  = "SELECT * FROM contact_detail ";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $contact_detail = $stmt->fetchAll();
   }else {
      $contact_detail = 0;
   }

   return $contact_detail;
}

