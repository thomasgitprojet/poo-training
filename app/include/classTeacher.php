<?php

class Teacher {

    private string $lastname;
    private string $firstname;
    private array $subject;
    private string $school;
    
    
    /**
     * Constructor
     *
     * @param string $lastname
     * @param string $firstname
     * @param array $subject
     * @param string $school
     */
    public function __construct (string $lastname, string $firstname, array $subject = [], string $school = '') 
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->subject = $subject;
        $this->school = $school;
    }

    // -------------------
    // GETTERS AND SETTERS
    // -------------------

    /**
     * set first name
     *
     * @param string $firstname
     * @return void
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * get the first name
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * set last name
     *
     * @param string $lastname
     * @return void
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * get the last name
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * set subject
     *
     * @param array $lastname
     * @return void
     */
    public function setSubject(array $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * get subjet
     *
     * @return array
     */
    public function getSubject(): array
    {
        return $this->subject;
    }

    /**
     * Add subject 
     *
     * @return string
     */
    public function addSubject(string $value): void
    {
        array_push($this->subject, $value);
    }

    /**
     * Delete subject 
     *
     * @return string
     */
    public function suppSubject(string $value): void
    {
        unset($this->subject[array_search($value, $this->subject)]);
    }

    /**
     * set school name
     *
     * @param string $school
     * @return void
     */
    public function setSchool(string $school): void
    {
        $this->school = $school;
    }

    /**
     * get school name where the teacher work
     *
     * @return string
     */
    public function getSchool(): string
    {
        return $this->school;
    }

    public function __toString()
    {
        return implode(", ", $this->subject) ;
    }

    public function introduceMySelfOfTeacher() : string
    {
        return 'Bonjour, je m\'appelle ' . $this->firstname . ' ' . $this->lastname . ' et j\'enseigne à l\'école ' . $this->school . '  les matières suivantes : ' . $this . '.';
    }
}
?>