<?php
class HomeownerProcessor
{
    private $people=[];
    public function processName($filename)
    {

        $csvData = file_get_contents($filename);

        // delete the first line
        $csvData = substr($csvData, strpos($csvData, "\n") + 1);

        $rows = explode("\n", $csvData);

       // Process each row of the CSV file
       foreach ($rows as $row) {

            // Separate the fields by commas to obtain the data of each person
            $fields = explode(",", $row);
            $arrayString = explode(" ",$fields[0]);

            if(!empty($arrayString) && !empty($arrayString[0])){
                // We get the title and last name that are always required
                $title=reset($arrayString);
                $lastName=end($arrayString);

                // Create an associative array to store the person data
                
                // If the field contains Mr and Mrs
                if(strpos($fields[0],'Mr and Mrs')!==false){
                    $this->addMrAndMrs($title,$lastName);
                }

                // If the field contains a dot on the second param
                elseif(strpos(explode(" ",$fields[0])[1],'.')){
                    $this->addPerson($title,null,$arrayString[1][0],$lastName);
                }
                else{
                    $this->addPerson($title, null,null, $lastName);
                }
            }
        }

        $this->people;
        return 1;
    }

    private function addPerson($title, $firstName, $initial, $lastName)
    {
        $person = [
            'title' => $title,
            'first_name' => $firstName,
            'initial' => $initial,
            'last_name' => $lastName
        ];

        $this->people[] = $person;
    }

    private function addMrAndMrs($title, $lastName){

        $person1 = [
            'title' => 'Mr',
            'first_name' => null,
            'initial' => null,
            'last_name' => $lastName
        ];

        $person2 = [
            'title' => 'Mrs',
            'first_name' => null,
            'initial' => null,
            'last_name' => $lastName
        ];

        $this->people[] = [$person1, $person2];
    }

    public function printData($people = null) {

        if ($people === null) {
            $people = $this->people;
        }
    
        $data = '';
    
        foreach ($people as $person) {

            $data .= "<div class='info_person'>";
    
            if (!empty($person[0])) {

                //We create the recursive function because in case the string contains Mr and Mrs the array comes with subarray
                $data .= $this->printData($person);

            } else {
                $data .= "<p><span>Title</span>: " . $person['title'] . "</p>";
                $data .= "<p><span>First Name</span>: " . $person['first_name'] . "</p>";
                $data .= "<p><span>Initial</span>: " . $person['initial'] . "</p>";
                $data .= "<p><span>Last Name</span>: " . $person['last_name'] . "</p>";
            }
    
            $data .= "</div>";
        }
    
        return $data;
    }
}