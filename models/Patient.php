<?php
    class Patient{
        static public function getAllPatients(){
            $db = DB::connect()->prepare('SELECT person_id, firstname ,lastname, birthday, email, phone FROM person WHERE type = "P"');
            $db->execute();
            $patients = $db->fetchAll();
            $db = null;
            return $patients;
        }
        
         static public function addPatient($data){
             $db = DB::connect()->prepare('INSERT INTO person (firstname ,lastname, birthday, email, phone, type) 
             VALUES (:firstname , :lastname, :birthday, :email, :phone, "P")');
             $db->bindParam(':firstname',$data['firstname']);
             $db->bindParam(':lastname',$data['lastname']);
             $db->bindParam(':birthday',$data['birthday']);
             $db->bindParam(':phone',$data['phone']);
             $db->bindParam(':email',$data['email']);

             if($db->execute()){
                 return 'ok';
             }else
                 return 'error';

         }
    }

