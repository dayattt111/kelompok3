<?php 
    include 'data.php';

    function prosesBooking($inputData, $bookingKamar) {
        if (isset($inputData['pesan']) && !in_array($inputData['id'], $bookingKamar)) {
            $bookingKamar[] = $inputData['id'];
        }
        return $bookingKamar;
    }
    //stats
    function getRoomsStats($kamar, $bookingKamar){
        return [count($kamar), count($bookingKamar), count($kamar) - count($bookingKamar)];
    }
    $bookingKamar = prosesBooking($_POST, $_POST['bookingKamar'] ?? [
    ]);  
    list($total_kamar, $kamar_booking, $kamar_kosong) = getRoomsStats($kamar, $bookingKamar);

    
?>      