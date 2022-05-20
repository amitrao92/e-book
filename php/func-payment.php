<?php  

# Get All user function
function get_all_payment($con){
   $sql  = "SELECT * FROM payment ";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $payments = $stmt->fetchAll();
   }else {
      $payments = 0;
   }

   return $payments;
}
# Get All  function
function get_all_package($con){
   $sql  = "SELECT * FROM package";
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $packages = $stmt->fetchAll();
   }else {
      $packages = 0;
   }

   return $packages;
}
function get_package_name($con,$id,$col ){
   $sql  = "SELECT ".$col." FROM package where ID = ".$id;
   $stmt = $con->prepare($sql);
   $stmt->execute();

   if ($stmt->rowCount() > 0) {
   	  $packages = $stmt->fetchColumn();
   }else {
      $packages = 0;
   }

   return $packages;
}
