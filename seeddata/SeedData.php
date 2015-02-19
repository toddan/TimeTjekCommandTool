<?php
class SeedData {
    public static function Account()
    {
        return array(
            array(
                'EmailAddress' => 'TORD',
                'CountryCode' => 'se',
                'PhoneNumber' => '666 666 66',
                'ContactPersonName' => 'test test',
                'DateCreated' => date("Y-m-d H:i:s")
            )
        );
    }

    public static function CodelistDays()
    {
        return array(
            array(
                'DayId' => 0,
                'DayNameDk' => 'Mandag',
                'DayNameSe' => 'Måndag'
            ),
            array(
                'DayId' => 1,
                'DayNameDk' => 'Tisdag',
                'DayNameSe' => 'Tisdag'
            ),
            array(
                'DayId' => 2,
                'DayNameDk' => 'Onsdag',
                'DayNameSe' => 'Onsdag'
            ),
            array(
                'DayId' => 3,
                'DayNameDk' => 'Torsdag',
                'DayNameSe' => 'Torsdag'
            ),
            array(
                'DayId' => 4,
                'DayNameDk' => 'Fredag',
                'DayNameSe' => 'Fredag',
            ),
            array(
                'DayId' => 5,
                'DayNameDk' => 'Lørdag',
                'DayNameSe' => 'Lördag'
            ),
            array(
                'DayId' => 6,
                'DayNameDk' => 'Søndag',
                'DayNameSe' => 'Söndag'
            )
        );
    }

    public static function CodelistEmployeeType()
    {
        return array(
            array(
                'TypeId' => 1,
                'TypeName' => 'Fastansat'
            ),
            array(
                'TypeId' => 2,
                'TypeName' => 'Konsulten'
            )
        );
    }

    public static function CodelistMonths()
    {
        return array(
            array(
                'MonthId' => 1,
                'MonthName' => 'Januar',
            ),
            array(
                'MonthId' => 2,
                'MonthName' => 'Februar'
            ),
            array(
                'MonthId' => 3,
                'MonthName' => 'Marts'
            ),
            array(
                'MonthId' => 4,
                'MonthName' => 'April'
            ),
            array(
                'MonthId' => 5,
                'MonthName' => 'Maj'
            ),
            array(
                'MonthId' => 6,
                'MonthName' => 'Juni'
            ),
            array(
                'MonthId' => 7,
                'MonthName' => 'Juli'
            ),
            array(
                'MonthId' => 8,
                'MonthName' => 'August'
            ),
            array(
                'MonthId' => 9,
                'MonthName' => 'September'
            ),
            array(
                'MonthId' => 10,
                'MonthName' => 'Oktober'
            ),
            array(
                'MonthId' => 11,
                'MonthName' => 'November'
            ),
            array(
                'MonthId' => 12,
                'MonthName' => 'December'
            )
        );
    }

    public static function CodelistSalaryType()
    {
        return array(
            array(
                'TypeId' => 1,
                'TypeName' => 'Timeløn'
            ),
            array(
                'TypeId' => 2,
                'TypeName' => 'Fast månedsløn'
            )
        );
    }

    public static function CodelistTimeregStatus()
    {
        return array(
            array(
                'StatusId' => 0,
                'StatusText' => 'Åben'
            ),
            array(
                'StatusId' => 1,
                'StatusText' => ' Lukket'
            ),
            array(
                'StatusId' => 2,
                'Overskredet'
            )
        );
    }

    public static function Companies()
    {
        return array(
            array(
                'FkAccountId' => 0,
                'CompanyName' => 'BCT Trinity',
                'Address1' => 'Randersgade 27, 4 th',
                'Address2' => 'Kælderen',
                'Zipcode' => '2200',
                'City' => 'köpenhamn',
                'CompanyRegistrationId' => '12345678',
                'PhoneNumber' => '11112222',
                'DateCreated' => date("Y-m-d H:i:s"),
                'IsActive' => '1'
            )
        );
    }

    public static function Employees()
    {
        return array(
            array(
                'FkCompanyId' => 7,
                'EmployeeTypeId' => 1,
                'Active' => 1,
                'dtEmployementStarted' => date("Y-m-d H:i:s"),
                'PersonName' => 'Mads A-Skat',
                'CivilRegistrationId' => '123456789',
                'Address' => 'Randersgade 27, 4th',
                'Phone' => '3434343434',
                'Email' => 'mads@twilight.dk',
                'BirthDay' => '1970-01-25'
            )
        );
    }

    public static function EmployeeSalaryDk()
    {
        return array(
            array(
                'FkEmployeeId' => 1,
                'FkCompanyId' => 1,
                'FkSalaryTypeId' => 2,
                'MonthWage' => 25000,
                'HourWage' => 120,
                'TaxType' => 'A-skat',
                'TaxPercent' => 40.00,
                'TexDeduction' => 11223.00,
                'OvertimeAmount' => 30.00,
                'BankName' => 'Lån og Spar Bank',
                'BankAccount' => '12324353564',
                'SalaryAddition' => 400.00,
                'TaxableBenefits' => 0.00,
                'PensionEmployeeRate' => 2.50,
                'PensionEmployerRate' => 5.00,
                'AmBidragApplicable' => 1,
                'VacationDays' => 10,
                'VacationPay' => 100,
                'EmployerTax' => 0
            )
        );
    }

    public function EmployeeSalarySe()
    {
        return array(
            array(

            )
        );
    }
}