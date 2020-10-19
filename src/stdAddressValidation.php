<?php

namespace standardValidation;

class StdAddress
{
    public static function validateEstablishmentName($establishment_name, $required = true)
    {
        if ($required && empty($establishment_name)) {
            return 'Please enter a name';
        }

        if (!empty($establishment_name)) {
            $pattern = "/^[a-z ]+$/i";

            $match = preg_match($pattern, $establishment_name);
    
            if (!$match) {
                return 'Please enter a valid name';
            }
        }

        return 'valid';
    }

    public static function validateAddressLine($address_line, $required = true)
    {
        if ($required && empty($address_line)) {
            return 'Please enter an address line';
        }

        if (!empty($address_line)) {
            $pattern = "/^[a-z0-1 ]+$/i";

            $match = preg_match($pattern, $address_line);
    
            if (!$match) {
                return 'Please enter a valid address line';
            }
        }

        return 'valid';
    }

    public static function validateCity($city, $required = true)
    {
        if ($required && empty($city)) {
            return 'Please enter a place name';
        }

        if (!empty($city)) {
            $pattern = "/^[a-z ]+$/i";

            $match = preg_match($pattern, $city);
    
            if (!$match) {
                return 'Please enter a valid place name';
            }
        }

        return 'valid';
    }

    public static function validateCountry($country, $required = true)
    {
        if ($required && empty($country)) {
            return 'Please enter a country';
        }

        if (!empty($country)) {
            $pattern = "/^[a-z ]+$/i";

            $match = preg_match($pattern, $country);
    
            if (!$match) {
                return 'Please enter a valid country';
            }
        }

        return 'valid';
    }

    /******************************************************************************************/
    /*                         Postcode (UK Only for the moment)                              */
    /******************************************************************************************/

    public static function validatePostcode($postcode)
    {
        if (empty($postcode)) {
            return 'Please enter a postcode';
        } else {
            $pattern = "/^(([A-Z][A-HJ-Y]?\d[A-Z\d]?|ASCN|STHL|TDCU|BBND|[BFS]IQQ|PCRN|TKCA) ?\d[A-Z]{2}|BFPO ?\d{1,4}|(KY\d|MSR|VG|AI)[ -]?\d{4}|[A-Z]{2} ?\d{2}|GE ?CX|GIR ?0A{2}|SAN ?TA1)+$/i";   //Ok for now.

            $match = preg_match($pattern, $postcode);
    
            if (!$match) {
                return 'Please enter a valid postcode';
            }
        }

        return 'valid';
    }

    /******************************************************************************************/
    /*                                    Address Type                                        */
    /******************************************************************************************/

    public static function validateAddressType($address_type)
    {
        if (!empty($address_type && $address_type != 'D' && $address_type != 'I')) {
            return 'Please enter D, I or leave blank';
        }

        return 'valid';
    }
}
