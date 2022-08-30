<?php
if($_GET){
    $path=$_GET['path'];
    if($path) {
        $file = $path;
        $filename = 'Document.pdf';
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($file));
        header('Accept-Ranges: bytes');
        echo file_get_contents($file);
    }
}
