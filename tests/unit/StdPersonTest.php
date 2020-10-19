<?php

namespace stdValidationTests;

use \standardValidation\StdPerson;
use \PHPUnit\Framework\TestCase;

require_once "/var/www/html/standard_validation/src/StdPersonValidation.php";

class StdPersonTest extends TestCase
{
    /******************************************************************************************/
    /*                                         Forname                                        */
    /******************************************************************************************/

    public function testValidateForenemes_ReturnsPleaseEnterAForename_GivenEmptyValueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a forename',
            $person->validateForenemes("", true)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenEmptyValueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("", false)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_Given123456RequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("123456", true)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_Given123456RequiredFlase()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("123456", false)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenSpecialCharactersRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("!3£$%^", true)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenSpecialCharactersRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("!3£$%^", false)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenAplhanumericRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("Roger3", true)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenAplhanumericRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("Roger3", false)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenCSVRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("Roger,Philip", true)
        );
    }

    public function testValidateForenemes_ReturnsPleaseEnterAValidForename_GivenCSVRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid forename',
            $person->validateForenemes("Roger,Philip", false)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenRogerRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("Roger", true)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenRogerRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("Roger", false)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenWilliamHenryRequiredTrue()
    {
        //I.e 'William Henry Gates III'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("William Henry", true)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenWilliamHenryRequiredFalse()
    {
        //I.e 'William Henry Gates III'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("William Henry", false)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenMary_AnnRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("Mary-Ann", true)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenMary_AnnRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("Mary-Ann", false)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenDarcyRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("d'Arcy", true)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenDarcyRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("d'Arcy", false)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenRegnalNumberRequiredTrue()
    {
        //I.e HM King George VI Mountbatten
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("George VI", true)
        );
    }

    public function testValidateForenemes_ReturnsValid_GivenRegnalNumberRequiredFalse()
    {
        //I.e HM King George VI Mountbatten
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateForenemes("George VI", false)
        );
    }

    /******************************************************************************************/
    /*                                         Surname                                        */
    /******************************************************************************************/

    public function testValidateSurname_ReturnsPleaseEnterASurname_GivenEmptyValueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a surname',
            $person->validateSurname('', true)
        );
    }

    public function testValidateSurname_ReturnsValid_GivenEmptyValueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('', false)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_Given123456RequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid surname',
            $person->validateSurname('123456', true),
            'Please enter a valid surname'
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_Given123456RequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid surname',
            $person->validateSurname('123456', false),
            'Please enter a valid surname'
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenSpecialCharactersRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid surname',
            $person->validateSurname('!"£$%^', true),
            'Please enter a valid surname'
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenSpecialCharactersRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid surname',
            $person->validateSurname('!"£$%^', false),
            'Please enter a valid surname'
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenMcRogerRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('McRoger', true)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenMcRogerRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('McRoger', false)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenSpaceRequiredTrue()
    {
        // I.e 'Martin Luther King Jr'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('King Jr', true)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenSpaceRequiredFalse()
    {
        // I.e 'Martin Luther King Jr'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('King Jr', false)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenCommaRequiredTrue()
    {
        // I.e 'Martin Luther King, Jr'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('King, Jr', true)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenCommaRequiredFalse()
    {
        // I.e 'Martin Luther King, Jr'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('King, Jr', false)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenGenerationRequiredTrue()
    {
        // I.e 'William Henry Gates III'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('Gates III', true)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenGenerationRequiredFalse()
    {
        // I.e 'William Henry Gates III'
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname('Gates III', false)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenOFlaniganRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname("O'Flanigan", true)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenHyphenRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname("d'Ombrain-d'Ann", true)
        );
    }

    public function testValidateSurname_ReturnsPleaseEnterAValidSurname_GivenHyphenRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateSurname("d'Ombrain-d'Ann", false)
        );
    }

    /******************************************************************************************/
    /*                                          Title                                         */
    /******************************************************************************************/

    public function testValidateTitle_ReturnsPleaseEnterATitle_GivenEmptyValueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a title',
            $person->validateTitle("", true)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterATitle_GivenEmptyValueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("", false)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitleRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("1", true)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitleRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("1", false)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitle_GivenSpecialCharactersRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("*!", true)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitle_GivenSpecialCharactersRequireFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("*!", false)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitle_GivenMr5RequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("Mr5", true)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitle_GivenMr5RequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("Mr5", false)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitle_GivenSpecialCharacterRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("Mrs(", true)
        );
    }

    public function testValidateTitle_ReturnsPleaseEnterAValidTitle_GivenSpecialCharacterRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid title',
            $person->validateTitle("Mrs(", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMrRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Mr", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMrRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Mr", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMrsRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Mrs", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMrsRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Mrs", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMissRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Miss", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMissRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Miss", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMsRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Ms", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenMsRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Ms", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenFullStopRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Lt.Gen.", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenFullStopRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("Lt.Gen.", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenHMKingRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("HM King", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenHMKingRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("HM King", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenHMQueenRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("HM. Queen", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenHMQueenRequiredfalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("HM. Queen", false)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenHRHPrincessRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("HRH Princess", true)
        );
    }

    public function testValidateTitle_ReturnsValid_GivenHRHPrincessRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateTitle("HRH Princess", false)
        );
    }

    /******************************************************************************************/
    /*                                      Date of Birth                                     */
    /******************************************************************************************/

    public function testValidateDateOfBirth_ReturnsPleaseEnterADate_GivenEmptyValueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a date',
            $person->validateDateOfBirth("", true)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterADate_GivenEmptyValueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateDateOfBirth("", false)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenAlphaCharactersInDateRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7th October 1960", true)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenAlphaCharactersInDateRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7th October 1960", false)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenSpacesDMYYRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7 10 1960", true)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenSpacesDMYYRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7 10 1960", false)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenSlashesDMYYRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7/10/1960", true)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenDashesDMYYRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7-10-1960", false)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenDotsDMYYRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7.10.1960", true)
        );
    }

    public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenDotsDMYYRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid date',
            $person->validateDateOfBirth("7.10.1960", false)
        );
    }

    // public function testValidateDateOfBirth_ReturnsPleaseEnterAValidDate_GivenInvalidDay()
    // {
    //     $person = new StdPerson;

    //     $this->assertEquals(
    //         'Please enter a valid date',
    //         $person->validateDateOfBirth("1960-10-32") //Needs fixing. This date is nonsense
    //     );
    // }

    /******************************************************************************************/
    /*                                      Mobile Number                                     */
    /******************************************************************************************/

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenEmptyValueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a mobile number',
            $person->validateMobileNumber("", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenEmptyValueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateMobileNumber("", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAValidMobileNumber_GivenNoDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAValidMobileNumber_GivenNoDialingCodeRequiredFlase()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("693398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenDialingCodeOnlyRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("07711", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenDialingCodeOnlyRequiredFlase()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("07711", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenPlusInDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("+7711 6933981", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenPlusInDialingCodeRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("+7711 6933981", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenAlphaChrInDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("0a7711 693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenAlphaChrInDialingCodeRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("0a7711 693398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenDialingCodeToLongRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("077111 693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenDialingCodeToLongRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("077111 693398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenDialingCodeToShortRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("7711 693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenDialingCodeToShortRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("7711 693398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenNumberTooLongRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("07711 6933981", true)
        );
    }

    public function testValidateMobileNumber_ReturnsPleaseEnterAMobileNumber_GivenNumberTooLongRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("07711 6933981", false)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenInvalidChrInNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("07711 6933!98", true)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenInvalidChrInNumberRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("07711 6933!98", false)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenAplhaChrInNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
             $person->validateMobileNumber("07711 69A3398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenAplhaChrInNumberRequiredFlase()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
             $person->validateMobileNumber("07711 69A3398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenCountrycodeNoDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("+44 693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenCountrycodeNoDialingCodeRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("+44 693398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenLandlineNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("01332 360832", true)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenLandlineNumberRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid mobile number',
            $person->validateMobileNumber("01332 360832", false)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenValidMobileNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateMobileNumber("07711 693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenValidMobileNumberRequiredFlase()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateMobileNumber("07711 693398", false)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenCountryCodeRequiredTrueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateMobileNumber("+44 7711 693398", true)
        );
    }

    public function testValidateMobileNumber_ReturnsValid_GivenCountryCodeRequiredTrueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateMobileNumber("+44 7711 693398", false)
        );
    }

    // public function testValidateMobileNumber_ReturnsValid_GivenCountryCodeAndOptionalZeroInlDialingCode()
    // {
    //     //Formally speaking this is valid
    //     $person = new StdPerson;

    //     $this->assertEquals(
    //         'valid',
    //         $person->validateMobileNumber("+44 (0)7711 693398")
    //     );
    // }

    /******************************************************************************************/
    /*                                      Phone Number                                      */
    /******************************************************************************************/

    public function testValidatePhoneNumber_ReturnsPleaseEnterAPhoneNumber_GivenEmptyValueRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a phone number',
            $person->validatePhoneNumber("", true)
        );
    }

    public function testValidatePhoneNumber_ReturnsValid_GivenEmptyValueRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validatePhoneNumber("", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAValidPhoneNumber_GivenNoDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("360832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAValidPhoneNumber_GivenNoDialingCodeRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("360832", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenDialingCodeOnlyRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenDialingCodeOnlyRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenPlusInDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("+1332 3608321", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenPlusInDialingCodeRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("+1332 3608321", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenAlphaChrInDialingCodeRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("0a1332 360832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenAlphaChrInDialingCodeRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("0a1332 360832", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenDialingCodeToLongRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("013321 360832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenDialingCodeToLongRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("013321 360832", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenDialingCodeToShortRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("0133 360832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenDialingCodeToShortRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("0133 360832", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenNumberTooLongRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332 3608321", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsPleaseEnterAPhoneNumber_GivenNumberTooLongRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332 3608321", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenInvalidChrInNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332 3608!32", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenInvalidChrInNumberRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332 3608!32", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenAplhaChrInNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332 36A0832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenAplhaChrInNumberRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("01332 36A0832", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenCountrycodeNoDialingCodeRequiredTrue()
    {
        //Fails on +44 01332 360832. Regex needs fixing.
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("+44 360832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenCountrycodeNoDialingCodeRequiredFalse()
    {
        //Fails on +44 01332 360832. Regex needs fixing.
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid phone number',
            $person->validatePhoneNumber("+44 360832", false)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenValidPhoneNumberRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validatePhoneNumber("01332 360832", true)
        );
    }

    public function testValidatePhoneNumber__ReturnsValid_GivenValidPhoneNumberRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validatePhoneNumber("01332 360832", false)
        );
    }

    // public function testValidatePhoneNumber__ReturnsValid_GivenCountryCode()
    // {
    //     //Fails on +44 01332 360832. Regex needs fixing.
    //     $person = new StdPerson;

    //     $this->assertEquals(
    //         'valid',
    //         $person->validatePhoneNumber("+44 1332 360832")
    //     );
    // }

    // public function testValidatePhoneNumber__ReturnsValid_GivenCountryCodeAndOptionalZeroInlDialingCode()
    // {
    //     //Fails on +44 01332 360832. Regex needs fixing.
    //     $person = new StdPerson;

    //     $this->assertEquals(
    //         'valid',
    //         $person->validatePhoneNumber("+44 (0)1332 360832")
    //     );
    // }

    /******************************************************************************************/
    /*                                      Email Address                                     */
    /******************************************************************************************/

    public function testValidateEmailAddress_ReturnsPleaseEnterAnEmailAddress_GivenRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter an email address',
            $person->validateEmailAddress("", true)
        );
    }

    public function testValidateEmailAddress_ReturnsPleaseEnterAnEmailAddress_GivenRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateEmailAddress("", false)
        );
    }

    public function testValidateEmailAddress_ReturnsPleaseEnterAValidEmailAddress_GivenNoAtSymbolRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid email_address',
            $person->validateEmailAddress("chris.beckhellinggmeil.com", true)
        );
    }

    public function testValidateEmailAddress_ReturnsPleaseEnterAValidEmailAddress_GivenNoAtSymbolRequiredFlase()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid email_address',
            $person->validateEmailAddress("chris.beckhellinggmeil.com", false)
        );
    }

    public function testValidateEmailAddress_ReturnsPleaseEnterAValidEmailAddress_GivenInvalidCharacterRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid email_address',
            $person->validateEmailAddress("chris.beckhelling*gmeil.com", true)
        );
    }

    public function testValidateEmailAddress_ReturnsPleaseEnterAValidEmailAddress_GivenInvalidCharacterRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a valid email_address',
            $person->validateEmailAddress("chris.beckhelling*gmeil.com", false)
        );
    }

    public function testValidateEmailAddress_ReturnsAValid_GivenAValidAddressRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateEmailAddress("chris.beckhelling@gmeil.com", true)
        );
    }

    public function testValidateEmailAddress_ReturnsAValid_GivenAValidAddressRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validateEmailAddress("chris.beckhelling@gmeil.com", false)
        );
    }

    /******************************************************************************************/
    /*                                         Password                                       */
    /******************************************************************************************/

    public function testValidatePasswor_ReturnsPleaseEnterAPassword_GivenEmptyStringRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a password',
            $person->validatePassword("", true)
        );
    }

    public function testValidatePasswor_ReturnsPleaseEnterAPassword_GivenEmptyStringRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'Please enter a password',
            $person->validatePassword("", false)
        );
    }

    public function testValidateEmailAddress_ReturnsValid_GivenAPasswordRequiredTrue()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validatePassword("se£5^lduf=", true)
        );
    }

    public function testValidateEmailAddress_ReturnsValid_GivenAPasswordRequiredFalse()
    {
        $person = new StdPerson;

        $this->assertEquals(
            'valid',
            $person->validatePassword("se£5^lduf=", false)
        );
    }
}
