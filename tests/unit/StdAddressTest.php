<?php

namespace stdValidationTests;

use \standardValidation\StdAddress;
use \PHPUnit\Framework\TestCase;

require_once "/var/www/html/standard_validation/src/StdAddressValidation.php";

class StdAddressTest extends TestCase
{
    /******************************************************************************************/
    /*                                   Establishment Name                                   */
    /*              Building ot business name. For personal names use StdPerson               */
    /******************************************************************************************/

    public function testValidateEstablishmentName_ReturnsPleaseEnterAName_GivenEmptyValueRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a name',
            $address->validateEstablishmentName("", true)
        );
    }

    public function testValidateEstablishmentName_ReturnsPleaseEnterAName_GivenEmptyValueRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateEstablishmentName("", false)
        );
    }

    public function testValidateEstablishmentName_ReturnsPleaseEnterAName_GivenAtSymbolRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid name',
            $address->validateEstablishmentName("Charnwood^Surgery", true)
        );
    }

    public function testValidateEstablishmentName_ReturnsPleaseEnterAName_GivenAtSymbolyRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid name',
            $address->validateEstablishmentName("Charnwood^Surgery", false)
        );
    }

    public function testValidateEstablishmentName_ReturnsPleaseEnterAName_GivenCharnwood_SurgeryRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateEstablishmentName("Charnwood Surgery", true)
        );
    }

    public function testValidateEstablishmentName_ReturnsPleaseEnterAName_GivenCharnwood_SurgeryRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateEstablishmentName("Charnwood Surgery", false)
        );
    }

    /******************************************************************************************/
    /*                                       Address Line                                     */
    /******************************************************************************************/

    public function testValidateAddressLine_ReturnsPleaseEnterAnAddressLine_GivenEmptyValueRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter an address line',
            $address->validateAddressLine("", true)
        );
    }

    public function testValidateAddressLine_ReturnsValid_GivenEmptyValueRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateAddressLine("", false)
        );
    }

    public function testValidateAddressLine_ReturnsPleaseEnterAValidAddressLine_GivenInvalidChrRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid address line',
            $address->validateAddressLine("! Burton Road", true)
        );
    }

    public function testValidateAddressLine_ReturnsPleaseEnterAValidAddressLine_GivenInvalidChrRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid address line',
            $address->validateAddressLine("! Burton Road", false)
        );
    }

    public function testValidateAddressLine_ReturnsPleaseEnterAValidAddressLine_Given1BurtonRoadRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateAddressLine("1 Burton Road", true)
        );
    }

    public function testValidateAddressLine_ReturnsPleaseEnterAValidAddressLine_Given1BurtonRoadRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateAddressLine("1 Burton Road", false)
        );
    }

    /******************************************************************************************/
    /*                                           City                                         */
    /******************************************************************************************/

    public function testValidateCity_ReturnsPleaseEnterACityName_GivenEmptyValueRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a place name',
            $address->validateCity("", true)
        );
    }

    public function testValidateCity_ReturnsPleaseEnterACityName_GivenEmptyValueRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateCity("", false)
        );
    }

    public function testValidateCity_ReturnsInvalid_GivenInvalidChrRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid place name',
            $address->validateCity("!Derby", false)
        );
    }

    public function testValidateCity_ReturnsInvalid_GivenInvalidChrRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid place name',
            $address->validateCity("1Derby", false)
        );
    }

    public function testValidateCity_ReturnsInvalid_GivenDerbyRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateCity("Derby", false)
        );
    }

    public function testValidateCity_ReturnsInvalid_GivenDerbyRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateCity("Derby", false)
        );
    }

    /******************************************************************************************/
    /*                                      Country                                           */
    /******************************************************************************************/

    public function testValidateCountry_ReturnsPleaseEnterACountryCode_GivenEmptyValueRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a country',
            $address->validateCountry("", true)
        );
    }

    public function testValidateCountry_ReturnsPleaseEnterACountryCode_GivenEmptyValueRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateCountry("", false)
        );
    }

    public function testValidateCountry_ReturnsInvalid_GivenTrinidadAndTobagoRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateCity("Trinidad and Tobago", false)
        );
    }

    public function testValidateCountry_ReturnsInvalid_GivenTrinidadAndTobagoFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateCity("Trinidad and Tobago", false)
        );
    }

    public function testValidateCountry_ReturnsInvalid_GivenAmpersandRequiredTrue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid country',
            $address->validateCountry("Trinidad & Tobago", false)
        );
    }

    public function testValidateCountry_ReturnsInvalid_GivenAmpersandRequiredFalse()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid country',
            $address->validateCountry("Trinidad & Tobago", false)
        );
    }

    /******************************************************************************************/
    /*                                      Postcode                                          */
    /******************************************************************************************/

    public function testValidatePostcode_ReturnsPleaseEnterAPostcode_GivenEmptyValue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a postcode',
            $address->validatePostcode("")
        );
    }

    public function testValidatePostcode_ReturnsPleaseEnterAPostcode_GivenInValidPostcode()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter a valid postcode',
            $address->validatePostcode("DE234566TF")
        );
    }

    public function testValidatePostcode_ReturnsPleaseEnterAPostcode_GivenValidPostcode()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validatePostcode("DE23 6TF")
        );
    }

    /******************************************************************************************/
    /*                                    Address Type                                        */
    /******************************************************************************************/

    public function testValidateAddressType_ReturnsPleaseEnterAPostcode_GivenEmptyValue()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateAddressType("")
        );
    }

    public function testValidateAddressType_ReturnsPleaseEnterAPostcode_GivenD()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateAddressType("D")
        );
    }

    public function testValidateAddressType_ReturnsPleaseEnterAPostcode_GivenI()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'valid',
            $address->validateAddressType("I")
        );
    }

    public function testValidateAddressType_ReturnsPleaseEnterAPostcode_GivenA()
    {
        $address = new StdAddress;

        $this->assertEquals(
            'Please enter D, I or leave blank',
            $address->validateAddressType("A")
        );
    }
}