<?php
    function fileUpload($file,$lokasi)
    {
        $file_tmp = $file['tmp_name'];
        $file_name = explode('.', $file['name']);
        $nama_file = end($file_name);
        $file_ext = strtolower($nama_file);
        $nama_file = str_replace("","","-". $file_name[0])."-". substr(uniqid('',true),-5).".".$file_ext;
        $lokasi_file = $lokasi . $nama_file;
        move_uploaded_file($file_tmp, $lokasi_file);
        return $nama_file;
    }

    function kirimEmail($nama_pengirim, $from, $to, $subject, $message)
    {
        try {
            $headers = "From: $nama_pengirim <$from>" . "\r\n";
            $headers .='Reply-To: '. $to . "\r\n" ;
            $headers .='X-Mailer: PHP/' . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
            
            $hasil = ["terkirim" => true];

            mail($to,$subject,$message, $headers);   
        } catch (Exception $e) {
            $hasil = array("terkirim" => false);
            $hasil["error"] = $e->getMessage();
        } finally {
            echo json_encode($hasil);   
        }
    }

