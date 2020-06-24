<?php
if( ! empty($resume))
    {
        //If you want to download an existing file from your server you'll need to read the file into a string
        $data = file_get_contents(base_url("/resumes/".$resume)); // Read the file's contents
        $name = $resume;
        force_download($name, $data);
    }
    ?>
