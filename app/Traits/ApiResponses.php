<?php
namespace App\Traits;

Trait ApiResponses {
    protected function ok ($message) {
        return $this->sucess($message, 200);
    } 

 protected function sucess ($message, $statusCode = 200) {
     return response()->json([
         'message' => $message,
         'status'=> $statusCode
     ], $statusCode); 
 }
}