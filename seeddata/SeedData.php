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
}