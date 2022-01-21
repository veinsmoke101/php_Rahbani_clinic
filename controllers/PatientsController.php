<?php

    class PatientsController{
        public function getAllPatients(){
            return Patient::getAllPatients();
        }

        public function addPatient(){
            if(isset($_POST['submit'])){
                $data = array(
                    'name',
                    'birthday'
                );
                $result = Patient::addPatient($data);
                if($result !== 'ok'){
                    echo $result;
                } else{
                    Redirect::to('patient_dashboard');
                }
            }
        }
    }