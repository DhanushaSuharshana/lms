<?php

date_default_timezone_set('Asia/Colombo');

class Helper {

    public function randamId() {

        $today = time();
        $startDate = date('YmdHi', strtotime('1912-03-14 09:06:00'));
        $range = $today - $startDate;
        $rand = rand(0, $range);
        $randam = $rand . "_" . ($startDate + $rand) . '_' . $today . "_n";
        return $randam;
    }

    public function calImgResize($newHeight, $width, $height) {

        $percent = $newHeight / $height;
        $result1 = $percent * 100;

        $result2 = $width * $result1 / 100;

        return array($result2, $newHeight);
    }

    public function getSitePath() {

        $path = str_replace('class', '', dirname(__FILE__));
        return $path;
    }

    //return current date time
    public function getCurrentDateTime() {
        //date_default_timezone_set("Asia/Calcutta");
        return date("Y-m-d H:i:s");
    }

    public function getDateString($date) {
        $dateArray = date_parse_from_format('Y/m/d', $date);
        $monthName = DateTime::createFromFormat('!m', $dateArray['month'])->format('F');
        return $dateArray['day'] . " " . $monthName . " " . $dateArray['year'];
    }

    public function getDateTimeDifferenceString($datetime) {
        $currentDateTime = new DateTime($this->getCurrentDateTime());
        $passedDateTime = new DateTime($datetime);
        $interval = $currentDateTime->diff($passedDateTime);
        //$elapsed = $interval->format('%y years %m months %a days %h hours %i minutes %s seconds');
        $day = $interval->format('%a');
        $hour = $interval->format('%h');
        $min = $interval->format('%i');
        $seconds = $interval->format('%s');

        if ($day > 30)
            return getDateString($datetime);
        else if ($day >= 1 && $day <= 30) {
            if ($day == 1)
                return $day . " day ago";
            return $day . " days ago";
        } else if ($hour >= 1 && $hour <= 24) {
            if ($hour == 1)
                return $hour . " hour ago";
            return $hour . " hours ago";
        } else if ($min >= 1 && $min <= 60) {
            if ($min == 1)
                return $min . " minute ago";
            return $min . " minutes ago";
        } else if ($seconds >= 1 && $seconds <= 60) {
            if ($seconds == 1)
                return $seconds . " second ago";
            return $seconds . " seconds ago";
        }
    }

    function ago($datefrom, $dateto = -1) {
        // Defaults and assume if 0 is passed in that
        // its an error rather than the epoch

        if ($datefrom == 0) {
            return "A long time ago";
        }
        if ($dateto == -1) {
            $dateto = time();
        }

        // Make the entered date into Unix timestamp from MySQL datetime field

        $datefrom = strtotime($datefrom);

        // Calculate the difference in seconds betweeen
        // the two timestamps

        $difference = $dateto - $datefrom;

        // Based on the interval, determine the
        // number of units between the two dates
        // From this point on, you would be hard
        // pushed telling the difference between
        // this function and DateDiff. If the $datediff
        // returned is 1, be sure to return the singular
        // of the unit, e.g. 'day' rather 'days'

        switch (true) {
            // If difference is less than 60 seconds,
            // seconds is a good interval of choice
            case(strtotime('-1 min', $dateto) < $datefrom):
                $datediff = $difference;
                $res = ($datediff == 1) ? $datediff . ' second ago' : $datediff . ' seconds ago';
                break;
            // If difference is between 60 seconds and
            // 60 minutes, minutes is a good interval
            case(strtotime('-1 hour', $dateto) < $datefrom):
                $datediff = floor($difference / 60);
                $res = ($datediff == 1) ? $datediff . ' minute ago' : $datediff . ' minutes ago';
                break;
            // If difference is between 1 hour and 24 hours
            // hours is a good interval
            case(strtotime('-1 day', $dateto) < $datefrom):
                $datediff = floor($difference / 60 / 60);
                $res = ($datediff == 1) ? $datediff . ' hour ago' : $datediff . ' hours ago';
                break;
            // If difference is between 1 day and 7 days
            // days is a good interval                
            case(strtotime('-1 week', $dateto) < $datefrom):
                $day_difference = 1;
                while (strtotime('-' . $day_difference . ' day', $dateto) >= $datefrom) {
                    $day_difference++;
                }

                $datediff = $day_difference;
                $res = ($datediff == 1) ? 'yesterday' : $datediff . ' days ago';
                break;
            // If difference is between 1 week and 30 days
            // weeks is a good interval            
            case(strtotime('-1 month', $dateto) < $datefrom):
                $week_difference = 1;
                while (strtotime('-' . $week_difference . ' week', $dateto) >= $datefrom) {
                    $week_difference++;
                }

                $datediff = $week_difference;
                $res = ($datediff == 1) ? 'last week' : $datediff . ' weeks ago';
                break;
            // If difference is between 30 days and 365 days
            // months is a good interval, again, the same thing
            // applies, if the 29th February happens to exist
            // between your 2 dates, the function will return
            // the 'incorrect' value for a day
            case(strtotime('-1 year', $dateto) < $datefrom):
                $months_difference = 1;
                while (strtotime('-' . $months_difference . ' month', $dateto) >= $datefrom) {
                    $months_difference++;
                }

                $datediff = $months_difference;
                $res = ($datediff == 1) ? $datediff . ' month ago' : $datediff . ' months ago';

                break;
            // If difference is greater than or equal to 365
            // days, return year. This will be incorrect if
            // for example, you call the function on the 28th April
            // 2008 passing in 29th April 2007. It will return
            // 1 year ago when in actual fact (yawn!) not quite
            // a year has gone by
            case(strtotime('-1 year', $dateto) >= $datefrom):
                $year_difference = 1;
                while (strtotime('-' . $year_difference . ' year', $dateto) >= $datefrom) {
                    $year_difference++;
                }

                $datediff = $year_difference;
                $res = ($datediff == 1) ? $datediff . ' year ago' : $datediff . ' years ago';
                break;
        }
        return $res;
    }

}
