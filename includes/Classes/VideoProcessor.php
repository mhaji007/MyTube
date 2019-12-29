<?php
class VideoProcessor {

    private $con;
    private $sizeLimit = 500000000;
    private $allowedTypes = array("mp4","flv","webm","mkv","vob","ogv","ogg","avi","wmv","mov","mpeg","mpg");

    public function __construct($con) {
        $this->con = $con;
    }

    public function upload($videoUploadData) {

        $targetDir = "uploads/videos/";
        $videoData = $videoUploadData->videoDataArray;
        
        //Save the uploaded video at a temporary location using a unique ID
        $tempFilePath = $targetDir . uniqid() . basename($videoData["name"]);
        //uploads/videos/5aa3e9343c9ffdogs_playing.flv

        $tempFilePath = str_replace(" ", "_", $tempFilePath);

        $isValidData = $this->processData($videoData, $tempFilePath);

        echo $tempFilePath;
    }

    private function processData($videoData, $filePath) {
        $videoType = pathInfo($filePath, PATHINFO_EXTENSION);
        
        if(!$this->isValidSize($videoData)) {
            echo "File too large. Can't be more than " . $this->sizeLimit . " bytes";
            return false;
        }

        else if (!$this->isValidType($videoType)) {
            echo "Invalid file type";
            return false;
        }
    }

    private function isValidSize($data) {
        return $data["size"] <= $this->sizeLimit;
    }

    private function isValidType($type) {
        $lowercased = strtolower($type);
        return in_array($lowercased, $this->allowedTypes);

    }
}
?>