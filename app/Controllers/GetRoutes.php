<?php

namespace App\Controllers;

class GetRoutes extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function getZipcode($zipcode){

        $city = array("4000" => "San Pablo", "4100" => "Cavite City", "4200" => "Batangas City");
        
        if ($zipcode === "4000" || $zipcode === "4100" || $zipcode === "4200"){

            echo $city[$zipcode];

        }
        else{

            echo "Input 4000, 4100 or 4200 only.";

        }
        

    }

    public function getGenderAge($gender, $age){

        $test_gender = preg_match('/[FM]/i', $gender);

        if ($test_gender === 1){

            if ($age > 17){

                echo "Legal age";

            }
            else{

                echo "Menor de edad ka pa po";
            
            }

        }
        else{

            echo "Input F or M only";
        }


    }

}
