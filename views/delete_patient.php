<?php
    if(isset($_POST['person_id'])){
        $data = new PatientsController();
        $data->deletePatients();
    }