<script src="{{ asset('/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('cleander/kamadatepicker.min.js') }}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('cleander/kamadatepicker.min.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ asset('cleander/font-face.css') }}" />

<style>
        body {
            font-family: Vazir;
        }
        .rtl-col {
            float: right;
        }
        #bd-next-date2, #bd-prev-date2 {
            font-size: 20px;
        }
        .tooltip > .tooltip-inner {
            font-family: Vazir;
            font-size: 12px;
            padding: 4px;
            white-space: pre;
            max-width: none;
        }
        #options-table {
            border-collapse: collapse;
            width: 100%;
        }
        #options-table td, #options-table th {
            border: 1px solid #777;
            text-align: left;
            padding: 8px;
        }
        #options-table tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>


<!---- Sample Use cleander

    <div class="col-lg-4">
            <div class="form-group">
                    <label class="form-control-label blue-text" for="input">تاریخ تحویل</label>
                    <input type="text" name="TarikhTahvil" id="TarikhTahvil" class="form-control">
                </div>
            </div>

            <script>
                    kamaDatepicker('TarikhTahvil', {
                        nextButtonIcon: "{{ asset('cleander/timeir_next.png') }}"
                        , previousButtonIcon: "{{ asset('cleander/timeir_prev.png') }}"
                        , forceFarsiDigits: true
                        , markToday: true
                        , markHolidays: true
                        , highlightSelectedDay: true
                        , sync: true
                        , pastYearsCount: 0
                        , futureYearsCount: 3
                        , gotoToday: true
                    });
            </script>


  --->
