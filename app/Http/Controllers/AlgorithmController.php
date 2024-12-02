<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DateTime;
use Illuminate\Http\JsonResponse;

class AlgorithmController extends Controller {

    public function calculate()
    {

        $birth_date_obj = new DateTime($_POST['birthdayDate']);
        $current_date_obj = new DateTime($_POST['currentDate']);
        $diff = $current_date_obj->diff($birth_date_obj);

        $result = 0; // биологический возраст
        $agingRateCoefficient = 0; // коэффициент скорости старения

        $ontogeneticNorm = $_POST['gender'] == 1 ? 21 : 18; // онтогенетическая норма
        $age = $diff->y; // календарный возраст
        $differenceInYears = $diff->y - $ontogeneticNorm; // разница лет
        $waistCircumference = $_POST['waistCircumference']; // окружность талии (см)
        $bodyWeight =  $_POST['bodyWeight']; // масса тела (кг)
        $hipCircumference = $_POST['hipCircumference']; // окружность бедер (см)
        $height = $_POST['height']; // рост (м)

        if ($_POST['gender'] == 1) {
            $agingRateCoefficient = $waistCircumference * $bodyWeight / ( $hipCircumference * $height * $height *
                    ( 17.2 + 0.31 * $differenceInYears + 0.0012 * $differenceInYears * $differenceInYears));
        } else {
            $agingRateCoefficient = $waistCircumference * $bodyWeight / ( $hipCircumference * $height * $height *
                    ( 14.7 + 0.26 * $differenceInYears + 0.001 * $differenceInYears * $differenceInYears));
        }

        $agingRateCoefficient = round($agingRateCoefficient, 2);
        if (0.95 <= $agingRateCoefficient && $agingRateCoefficient <= 1.05) $message = 'Скорость старения соотвествует норме, ';
        else if ($agingRateCoefficient <= 0.95) $message = 'Скорость старения замедлена, ';
        else if ($agingRateCoefficient >= 1.05) $message = 'Скорость старения ускорена, ';

        $result = round($agingRateCoefficient * ($age - $ontogeneticNorm) + $ontogeneticNorm, 1);
        if ($age == round($result, 0)) $message .= 'биологический возраст соответствует календарному.';
        else  $message .= 'биологический возраст не соответствует календарному.';

        return json_encode(['age' => $age, 'result' => $result, 'message' => $message]);
    }

}
