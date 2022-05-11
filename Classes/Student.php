<?php

class Student extends Person {

    public $attendedClass,$schoolHour,$studyHour;

    public function __construct($Name, $Age, $Gender,$attendedClass,$schoolHour,$studyHour)
    {
        parent::__construct($Name, $Age, $Gender);
        $this->attendedClass = $attendedClass;
        $this->schoolHour = $schoolHour;
        $this->studyHour = $studyHour;
    }

}