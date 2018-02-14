<?php

    $course = [
        "PHP",
        "Angular",
        "Laravel",
        "jQuery",
        "Java",
        "Ruby"
    ];

    function removeItem(&$array, $type = "first", $total = 2)
    {
            $result = [];

            if (! empty($array)) {

                if ($total >= count($array)) {

                    $result = $array;
                    $array = null;

                    echo 'Mang rong';

                } else {
                    if ( $type == "first") {
                        for ($i = 1; $i <= $total; $i++) {
                            $result[] = array_shift($array);
                        }
                    } else if ($type == "last") {
                        for ($i = 1; $i <= $total; $i++) {
                            $result[] = array_pop($array);
                        }
                    }
                }


            }

            return $result;
    }

    echo 'arrTemp: ';
    echo '<pre>';
    print_r($course);
    echo '</pre>';

    $arrTemp = removeItem($course, "last", 10);

    echo '<pre>';
    print_r($arrTemp);
    echo '</pre>';

    echo 'course: ';

    echo '<pre>';
    print_r($course);
    echo '</pre>';
