<?php
    interface Formater{
        public function format(string $text):string;
    }
    class Json implements Formater{
        public function format(mixed $text):string{
            return json_encode($text);
        }
    }
    class Report{
        public function getTitle(){  
            return "Report";
        }
        public function getDate(){   
            return "2020-01-22";
        }
        public function getContents(){
            return [
                'title' => $this->getTitle(),
                'date' => $this->getDate()];
        }
    }
    $report = new Report();
    $json = new Json();
    echo $json->format($report->getContents()); 
    }
}
?>