<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <style>
        input, button {
            outline: none !important;
            box-shadow: none !important;
        }
        .calc {
            width: 1200px;
        }
        .calc .calc-title {
            margin-bottom: 10px;
        }
        .calc .calc-title span {
            font-weight: 800;
            font-size: 25px;
            line-height: 34.05px;
        }

        .calc-content {
            display: flex;
            justify-content: space-between;
            align-items: start;
        }

        .calc .calc-form {
            width: 698px;
            background-color: #FAFAFA;
            padding: 20px;
        }
        /*.calc .calc-form .calc-item input {*/
        /*    width: 100%;*/
        /*}*/
        .calc .calc-form .calc-item .calc-item-title {
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
        }
        .calc .calc-form .calc-item .calc-item-title span {
            font-weight: 400;
            font-size: 14px;
            line-height: 19.07px;
            color: #1D1D1D66;
        }
                .calc-item-input-radio[type=radio]:checked + label {
                    color: #0D6C9A;
                }
                .calc-item-input-radio {
                    cursor: pointer;
                    display: inline-block;
                    position: relative;
                    margin: 0;
                }
                .calc-item-input-radio input[type='radio'] {
                    display: none;
                }
                .calc-item-input-radio label {
                    cursor: pointer;
                    color: #1D1D1DCC;
                    font-weight: 400;
                    font-size: 14px;
                    line-height: 19.07px;
                }
                .calc-item-input-radio label:before {
                    content: " ";
                    display: inline-block;
                    position: relative;
                    top: 5px;
                    margin: 0 8px 0 0;
                    width: 18.6px;
                    height: 18.6px;
                    border-radius: 10px;
                    border: 1.4px solid #0D6C9A;
                    background-color: transparent;
                }
                .calc-item-input-radio input[type=radio]:checked + label:after {
                    border-radius: 10px;
                    width: 9px;
                    height: 9px;
                    position: absolute;
                    top: 11px;
                    left: 6px;
                    content: " ";
                    display: block;
                    background: #0D6C9A;
                }
        .calc .calc-form .calc-item .calc-item-input input[type='date'] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20.43px;
            color: #1D1D1D66;
            background-color: #F2F2F2;
            padding: 10px 16px;
            border: 0;
            border-radius: 4px;
            width: calc(100% - 32px);
        }

        .calc .calc-form .calc-item .calc-item-input input[type='number'] {
            font-weight: 400;
            font-size: 15px;
            line-height: 20.43px;
            color: #1D1D1D66;
            padding: 10px 16px;
            border: 0;
            border-radius: 4px;
            background-color: #F2F2F2;
            text-align: right;
            width: calc(100% - 32px);
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .calc-actions {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-content: center;
        }

        .calc-actions .calc-action-submit button {
            width: 335px;
            text-align: center;
            cursor: pointer;
            padding: 16px 32px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 15px;
            line-height: 20.43px;
            color: #FFFFFF;
            background-color: #0D6C9A;
            border: 0;
        }

        .calc-actions .calc-action-link button {
            width: 335px;
            text-align: center;
            cursor: pointer;
            padding: 16px 32px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 15px;
            line-height: 20.43px;
            color: #0D6C9A;
            background-color: transparent;
            border: 1px solid #0D6C9A66;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        .mr-l-16 {
            margin-left: 16px;
        }
        .mr-t-16 {
            margin-top: 16px;
        }

        .calc-result .calc-result-item {
            width: 440px;
            height: 280px;
            background: #FAFAFA;
            text-align: center;
        }

        .calc-result .calc-result-item .calc-result-item-value span {
            color: #0D6C9ACC;
            font-weight: 600;
            font-size: 180px;
            line-height: 180px;

        }

        .calc-result .calc-result-item .calc-result-item-title span {
            color: #1D1D1DCC;
            font-weight: 600;
            font-size: 18px;
            line-height: 24.51px;
        }

        @media (max-width:1199px) {
            .calc {
                width: 100%;
            }
            .calc-content {
                flex-direction: column;
                align-items: center;
            }
        }

        @media (max-width:991px) {
            .calc .calc-form {
                width: 90%;
            }
            .calc-actions {
                flex-direction: column;
                align-items: center;
            }
            .calc-actions .calc-action-link {
                margin-top: 10px;
            }
            .calc-actions .calc-action-submit button, .calc-actions .calc-action-link button {
                width: 100%;
            }
            .calc-result .calc-result-item {
                width: 100%;
            }
        }
</style>
    <div class="calc">
        <div class="calc-title">
            <span>Калькулятор</span>
        </div>
        <div class="calc-content">
            <div class="calc-form">
                <form id="calc">
                    <div class="calc-item">
                        <div class="calc-item-title">
                            <span>Ваш пол</span>
                        </div>
                        <div class="calc-item-input">
                            <div class="calc-item-input-radios">
                                <div class="calc-item-input-radio">
                                    <input type="radio" name="gender" id="gender1" value="1" checked>
                                    <label for="gender1">Мужской</label>
                                </div>
                                <div class="mr-l-16 calc-item-input-radio">
                                    <input type="radio" name="gender" id="gender0" value="0">
                                    <label for="gender0">Женский</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calc-item mr-t-16">
                        <div class="calc-item-title">
                            <span>Дата анализа крови</span>
                        </div>
                        <div class="calc-item-input">
                            <input type="date" name="currentDate" required>
                        </div>
                    </div>
                    <div class="calc-item mr-t-16">
                        <div class="calc-item-title">
                            <span>Дата рождения</span>
                        </div>
                        <div class="calc-item-input">
                            <input type="date" name="birthdayDate" required>
                        </div>
                    </div>
                    <div class="calc-item mr-t-16">
                        <div class="calc-item-title">
                            <span>Окружность талии</span>
                            <span>см</span>
                        </div>
                        <div class="calc-item-input">
                            <input type="number" step=any name="waistCircumference" required>
                        </div>
                    </div>
                    <div class="calc-item mr-t-16">
                        <div class="calc-item-title">
                            <span>Масса тела</span>
                            <span>кг</span>
                        </div>
                        <div class="calc-item-input">
                            <input type="number" step=any name="bodyWeight" required>
                        </div>
                    </div>
                    <div class="calc-item mr-t-16">
                        <div class="calc-item-title">
                            <span>Окружность бедер</span>
                            <span>см</span>
                        </div>
                        <div class="calc-item-input">
                            <input type="number" step=any name="hipCircumference" required>
                        </div>
                    </div>
                    <div class="calc-item mr-t-16">
                        <div class="calc-item-title">
                            <span>Рост</span>
                            <span>м</span>
                        </div>
                        <div class="calc-item-input">
                            <input type="number" step=any name="height" required>
                        </div>
                    </div>
                    <div class="calc-actions">
                        <div class="calc-action-submit">
                            <button type="submit">
                                Рассчитать биологический возраст
                            </button>
                        </div>
                        <div class="calc-action-link">
                            <button>
                                Участвовать в исследовании
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="calc-result">
                <div class="calc-result-item">
                    <div class="calc-result-item-value">
                        <span id="age1">0</span>
                    </div>
                    <div class="calc-result-item-title mr-t-16">
                        <span>Ваш возраст</span>
                    </div>
                </div>
                <div class="calc-result-item">
                    <div class="calc-result-item-value">
                        <span id="age2">0</span>
                    </div>
                    <div class="calc-result-item-title mr-t-16">
                        <span>Ваш биологический возраст</span>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $( "#calc" ).on( "submit", function( event ) {

            event.preventDefault();

            let data = $("#calc").serialize();

            $.post("/api/result", data,
                function(data, status) {

                    let result = JSON.parse(data);
                    $('#age1').text(result.age);
                    $('#age2').text(result.result);

                    alert("Заключение: " + result.message);
                });
        });
    </script>
</body>
</html>
