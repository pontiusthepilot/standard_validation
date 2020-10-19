<?php

namespace standardValidation;

class StdPerson
{
    public static function validateForenemes($forenames, $required = true)
    {
        if ($required && empty($forenames)) {
            return 'Please enter a forename';
        }

        if (!empty($forenames)) {
            $pattern = "/^[a-z '-]+$/i";

            $match = preg_match($pattern, $forenames);
    
            if (!$match) {
                return 'Please enter a valid forename';
            }
        }

        return 'valid';
    }

    public static function validateSurname($surname, $required = true)
    {
        //What about 'Null' this ia a legitimate name.
        if ($required && empty($surname)) {
            return 'Please enter a surname';
        }

        if (!empty($surname)) {
            $pattern = "/^[a-z ,.'-]+$/i";

            $match = preg_match($pattern, $surname);
    
            if (!$match) {
                return 'Please enter a valid surname';
            }
        }

        return 'valid';
    }

    public static function validateTitle($title, $required = true)
    {
        if ($required && empty($title)) {
            return 'Please enter a title';
        }

        if (!empty($title)) {
            $pattern = "/^[a-z .]+$/i";

            $match = preg_match($pattern, $title);
    
            if (!$match) {
                return 'Please enter a valid title';
            }
        }

        return 'valid';
    }

    public static function validateDateOfBirth($date_of_birth, $required = true)
    {
        if ($required && empty($date_of_birth)) {
            return 'Please enter a date';
        }

        if (!empty($date_of_birth)) {
            if (!\DateTime::createFromFormat('Y-m-d', $date_of_birth)) {
                return 'Please enter a valid date';
            }
        }

        return 'valid';
    }

    public static function validateMobileNumber($mobile_number, $required = true)
    {
        if ($required && empty($mobile_number)) {
            return 'Please enter a mobile number';
        }

        if (!empty($mobile_number)) {
            $pattern = "/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/";

            $match = preg_match($pattern, $mobile_number);

            if (!$match) {
                return 'Please enter a valid mobile number';
            }
        }

        return 'valid';
    }

    public static function validatePhoneNumber($phone_number, $required = true)
    {
        if ($required && empty($phone_number)) {
            return 'Please enter a phone number';
        }

        if (!empty($phone_number)) {
            $pattern = "/^((\(?0\d{4}\)?\s?\d{3}\s?\d{3})|(\(?0\d{3}\)?\s?\d{3}\s?\d{4})|(\(?0\d{2}\)?\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";

            if (!preg_match($pattern, $phone_number)) {
                return 'Please enter a valid phone number';
            }
        }

        return 'valid';
    }

    public static function validateEmailAddress($email_address, $required = true)
    {
        if ($required && empty($email_address)) {
            return 'Please enter an email address';
        }

        if (!empty($email_address)) {
            if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
                return 'Please enter a valid email_address';
            }
        }

        return 'valid';
    }

    public static function validatePassword($password, $required = true)
    {
        if (strlen($password) == 0) {
            return 'Please enter a password';
        }

        return 'valid';
    }
}
