<?php



/**
 * The Student class contains all the information necessary for a student.
 * Firstname, lastname, email(s) and grades.
 *
 */

class Student
{
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds an email to the student object.
     *
     * @param $which        Type of address
     * @param $address      address of the student
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds grades to the student object
     *
     * @param $grade        grade given to the student
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Gets the average grade from all the student's grades and returns it
     *
     * @return float|int    average of all grades
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * Textual representation of all of the students information.
     *
     * @return string       Textual representation of the students information
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}