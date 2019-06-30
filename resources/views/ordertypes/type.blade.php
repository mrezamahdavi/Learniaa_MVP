@include('layouts.Cleander')


            <div class="col-lg-4">
            <div class="form-group">
                    <label class="form-control-label blue-text" for="input" >زمینه پروژه</label>
                    <select name="Zamineh" class="form-control" style="padding:0 8px;">
                        <option value="ادبیات">ادبیات</option>
                         <option value="تاریخی">تاریخی</option>
                        </select>
                </div>
            </div>


            <div class="col-lg-4">
                    <div class="form-group">
                            <label class="form-control-label blue-text" for="input">زبان نگارش </label>
                            <select name="Zaban" class="form-control" style="padding:0 8px;">
                                    <option value="فارسی">فارسی</option>
                                     <option value="عربی">عربی</option>
                                    </select>
                                    </div>
                    </div>



                    <div class="col-lg-4">
                            <div class="form-group">
                                    <label class="form-control-label blue-text" for="input">نوع نگارش </label>
                                    <select name="Type" class="form-control" style="padding:0 8px;">
                                            <option value="متن">متن</option>
                                             <option value="متن و جدول">متن و جدول</option>
                                             <option value="متن و فرمول ">متن و فرمول</option>
                                            </select>
                                        </div>
                            </div>

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



                                    <div class="col-lg-4">
                                            <div class="form-group">
                                                    <label class="form-control-label blue-text" for="input">تعداد صفحات (هر صفحه شامل 250 کلمه )</label>
                                                    <input type="text" name="TedadPage" class="form-control">
                                                </div>
                                            </div>
