<?php 
    include 'arrayFunction.php'

    function prosesBooking($inputData, $bookingKamar){
        if(isset($postData['pesan']) && !in_array($postData['id'], $bookingKamar)){
            $bookingKamar[] = $postData['id']; 
        }
        return $bookingKamar;
    }
    //stats
    function getRoomsStats($data, $bookingKamar){
        return [count($data), count($bookingKamar), count($data) - count($bookingKamar)];
    }
    $bookingKamar = prosesBooking($_POST, $_POST['bookingKamar'] ?? [
    ]);  
    list($total_kamar, $kamar_booking, $kamar_kosong) = getRoomsStats($data, $bookingKamar);

    
?>      