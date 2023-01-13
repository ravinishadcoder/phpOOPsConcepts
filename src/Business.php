<?php
class Business{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff=$staff;
    }
    public function hire(Person $person)
    {
        // add person to the staff collection
        $this->staff->add($person);
    }
    public function getStaffMembers(){
        return $this->$staff->members();
    }
    
}
?>