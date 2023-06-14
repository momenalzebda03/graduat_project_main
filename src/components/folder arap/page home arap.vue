<template>
    <div>
        <div data-bs-spy="scroll" data-bs-target="#navbar-example-arap" data-bs-offset="0" class="scrollspy-example"
            tabindex="0">
            <!-- start main -->
            <section class="mt-2 p-0 pb-5 mt-lg-5 pt-lg-5 overflow-hidden" id="scrollspyHeading1">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-3 mt-lg-0 div_none" data-aos="fade-right">
                            <div class="pic-ctn position-relative">
                                <img src="../../assets/imagemain/Capture.png" class="w-100" alt="...">
                                <img src="../../assets/imagemain/undraw_investing_7u74.svg" class="w-100" alt="...">
                                <img src="../../assets/imagemain/Capture.png" class="w-100" alt="...">
                                <img src="../../assets/imagemain/undraw_investing_7u74.svg" class="w-100" alt="...">
                                <img src="../../assets/imagemain/Capture.png" class="w-100" alt="...">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-0 mt-lg-5" data-aos="fade-left">
                            <div class="text-center text-lg-end text_black" :style="{ color: textColor }">
                                <h1 class="fw-bold">اجعل عملك أسهل<br>مع حياتك المهنية<br>مشروع</h1>
                                <p class="mt-4 text-secondary">سهولة ومرونة استخدام<br>موقع الويب الخاص بنا و سهولة رؤية
                                    العملاء و<br>المتخصصين.</p>
                                <button @:click="showDivWhite" type="button" :style="{ backgroundColor: buttonColor }"
                                    @click="changeButtonColor"
                                    class="button_color button_color border-0 btn btn-primary rounded-5 px-4">تسجيل الدخول /
                                    انشاء الحساب</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end main -->
            <!-- start sign in  -->
            <section>
                <div class="d-flex justify-content-center">
                    <div class="div_white shadow-lg p-3 mb-5 bg-body position-fixed" :style="{ display: divWhiteDisplay }"
                        id="div_white">
                        <div class="text-end pe-3">
                            <div id="icon_close" @click="hideDivWhite">
                                <i class="fas fa-times fs-2"></i>
                            </div>
                            <div class="container mt-0 mt-lg-5">
                                <div class="row">
                                    <div class="col-12 col-lg-6 my_none">
                                        <div :style="{ backgroundColor: buttonColor }" @click="changeButtonColor"
                                            class="div_backgound_blue button_color rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="../../assets/imagesignupsignin/beautiful-young-business-woman-sitting-chair-isolated-white-36028403-removebg-preview.png"
                                                alt="" class="w-100 mb-5">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6 text-center text-lg-end pt-0 pt-lg-3">
                                        <h3>الرجاء تحديد هل لديك حساب أم تريد إنشاء حساب جديد؟</h3>
                                        <button type="button" id="button_signup" :style="{ backgroundColor: buttonColor }"
                                            @click="changeButtonColor"
                                            class="mt-3 button_color text-white border-0 btn btn-primary rounded-5 px-4 fs-5">انشاءحساب/
                                            تسجيل دخول</button>
                                        <br>
                                        <br>
                                        <details class="custom-select position-relative">
                                            <summary class="radios p-3 rounded-5">
                                                <input type="radio" class="me-2" name="item" id="default" title="الشخصية"
                                                    checked>
                                                <input type="radio" class="me-2" name="item" id="المهني" title="المهني">
                                                <input type="radio" class="me-2" name="item" id="العميل" title="العميل">
                                            </summary>
                                            <ul class="list w-100 position-absolute pe-4">
                                                <p class="my_li m-0 py-2">
                                                    <label @click="label('vocational')" for="المهني">المهني</label>
                                                </p>
                                                <p class="my_li m-0 py-2">
                                                    <label @click="label('Client')" for="العميل">العميل</label>
                                                </p>
                                            </ul>
                                        </details>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end sign in  -->
            <!-- start imagine -->
            <section id="scrollspyHeading2">
                <div class="text-center container text_black" :style="{ color: textColor }">
                    <h1 data-aos="flip-right">تخيل الميزات</h1>
                    <p data-aos="flip-right" class="mt-3 p_style_color">سنعرض لك الميزات من جانب العميل المهنين<br> في عدة
                        أمور.</p>
                    <div class="row mt-5">
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-down">
                            <i class="fas fa-wifi translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_arap/${number = 1}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_1 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>الاستشارة</h4>
                                        <p class="p_color">سيسمح هذا الموقع للعميل بالتشاور مع الأشخاص ذوي المهارات
                                            و<br>العملاء ومع العملاء ذوي المهارات</p>
                                        <p class="p_color_blue">قراءة المزيد</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-up">
                            <i
                                class="fas fa-envelope translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_arap/${number = 2}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_2 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>التواصل</h4>
                                        <p class="p_color">سيسمح لك الموقع بالتواصل بين المحترفين و العملاء مع النصائح
                                            والاسئلة للطرفين والعمل بينهم</p>
                                        <p class="p_color_blue mb-5">قراءة المزيد</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mt-4" data-aos="fade-down">
                            <i
                                class="fas fa-user-md translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_arap/${number = 3}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_3 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>الحجز الخاص</h4>
                                        <p class="p_color">يتيح لك الموقع إجراء حجز خاص بين عميل وصاحب المهنة والتواصل بينهم
                                            وعلم كل طرف بالاخر.</p>
                                        <p class="p_color_blue mb-5">قراءة المزيد</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-down">
                            <i
                                class="fas fa-hourglass-end translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_arap/${number = 4}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_4 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>الوقت والجهد</h4>
                                        <p class="p_color">سيوفر الموقع الوقت والجهد ، خاصة عندما يكون ملف احترافي بإعلام
                                            العميل وصاحب المهنة للطرفين والمعرفة بسهولة وسرعة</p>
                                        <p class="p_color_blue mb-5">قراءة المزيد</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-up">
                            <i
                                class="fas fa-globe-europe translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_arap/${number = 5}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_5 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>اللغة</h4>
                                        <p class="p_color">سوف يكون الموقع مع أشخاص يسمحون لك بالتحدث باللغة العربية او
                                            اللغة
                                            الإنجليزية وهذا سيوفر سهولة في المعرفة</p>
                                        <p class="p_color_blue mb-5">قراءة المزيد</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mt-4" data-aos="fade-down">
                            <i class="fas fa-star translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_arap/${number = 6}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_6 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>السهولة</h4>
                                        <p class="p_color">سيوفر لك الموقع سهولة في العمل ومعرفة سهلة الأشخاص المهرة كل ما
                                            عليك هو انشاء الحساب فعله هو تسجيل الدخول</p>
                                        <p class="p_color_blue mb-5">قراءة المزيد</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- start imagine -->
            <!-- start all -->
            <section class="pt-0 mt-lg-5 pt-5 overflow-hidden" id="scrollspyHeading3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6" data-aos="fade-right">
                            <img src="../../assets/imagenotes/imageone.png" alt="" class="w-100">
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 text-center text-lg-end mt-3 mt-lg-0 text_black"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">كل الملاحظات والبعض ,<br>المعلومات أول ملاحظة</h2>
                            <p class="p_style_color mt-3">مرحبًا بكم في الموقع في هذا القسم سوف نشرح لكم بعضًا ملاحظات
                                لراحتك</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 flex-column flex-lg-row">
                                    <div>
                                        <img src="../../assets/imagenotes/imagetow.png" class="rounded-circle with_image"
                                            alt="">
                                    </div>
                                    <div class="mt-1 text-center text-lg-start">
                                        <span class="fw-bold">رامي نافع</span>
                                        <br>
                                        <span class="">د.جامعة الازهر</span>
                                    </div>
                                </div>
                                <p class="text-lg-start ps-2 mt-2 p_style_color">من مساعدي المشروع ، تم الانتهاء من المشروع
                                    بعد الجهد
                                    والعمل ل المطور مما أعفي البعض منا من التعب والمتاعب.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-lg-5 pt-5">
                        <div data-aos="fade-right" class="col-12 col-lg-6 text-center text-lg-end mt-3 mt-lg-0 text_black"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">كل الملاحظات والبعض معلومات الملاحظة الثانية</h2>
                            <p class="p_style_color mt-3">يجب عليك إنشاء حساب لفتح المواقع برويرز لك</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex justify-content-lg-end gap-2 flex-column flex-lg-row">
                                    <div class="mt-1 text-center text-lg-end">
                                        <span class="fw-bold">مصطفى التركماني</span>
                                        <br>
                                        <span class="">محام في المكتب</span>
                                    </div>
                                    <div>
                                        <img src="../../assets/imagenotes/325777265_894173955061757_6790575185506387846_n.jpg"
                                            class="rounded-circle with_image" alt="">
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 p_style_color text-center text-lg-end">من اجمل المشاريع التي لدينا كان
                                    هنا هو إضافة الحياة مع العلم أنه يلبي رغبات المستخدم حسب المستخدم أو المهنة التي
                                    ستختارها</p>
                            </div>
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 mt-5 text-center text-lg-end">
                            <img src="../../assets/imagenotes/imagethree.png" alt="" class="image_with w-75">
                        </div>
                    </div>
                    <div class="row mt-0 mt-lg-5 pt-5" :style="{ color: textColor }">
                        <div data-aos="fade-right" class="col-12 col-lg-6">
                            <img src="../../assets/imagenotes/imagrfour.png" alt="" class="w-100">
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 text-center text-lg-end mt-3 mt-lg-0 text_black">
                            <h2 class="fw-bold">كل الملاحظات والبعض مذكرة المعلومات الثالثة</h2>
                            <p class="p_style_color mt-3">سيظهر لك العملاء إذا كنت مالكًا لـ مهنة وسيظهر لك المحترفون إذا
                                كنت العميل بعد إنشاء الحساب و سوف تقوم بتسجيل الدخول</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 justify-content-lg-end flex-column flex-lg-row">
                                    <div class="mt-1 text-center text-lg-end">
                                        <span class="fw-bold">مؤمن الزبدة</span>
                                        <br>
                                        <span class="">مطور مستقل</span>
                                    </div>
                                    <div>
                                        <img src="../../assets/imagenotes/imagefive.png" class="rounded-circle with_image"
                                            alt="">
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 p_style_color text-center text-lg-end">من الواضح أن المشروع قد اكتمل
                                    بعد ذلك التعب ومشاكل العمل والجهد من حيث التحليل والتصميم الجانبي بالفعل إنه أحد أكثر
                                    مشاريع العمل والجهد لحسن الحظ</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-lg-5 pt-5">
                        <div data-aos="fade-right" class="col-12 col-lg-6 text-center text-lg-end mt-3 mt-lg-0 text_black"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">كل الملاحظات والبعض الرابعة ملاحظة المعلومات</h2>
                            <p class="p_style_color mt-3">سوف نعرض لك عدة أقسام وهي الكوهين
                                قسم Suhing سنسمح لك بالاستشارة كذلك قسم العمل بحيث يكون العمل حرام حسب التاريخ الخاص لصاحب
                                المشروع مهنة..</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 flex-column flex-lg-row justify-content-lg-end">
                                    <div class="mt-1 text-center text-lg-end">
                                        <span class="fw-bold">سندس ريم</span>
                                        <br>
                                        <span class="">صحفية</span>
                                    </div>
                                    <div>
                                        <img src="../../assets/imagenotes/imagesex.png" class="rounded-circle with_image"
                                            alt="">
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 text-center text-lg-end p_style_color">تعد الصحافة واحدة من أهم العوامل
                                    في الحياة لقد فوجئت أن هذا الموقع يدعم بالفعل أكثر من مشاركة واحدة.</p>
                            </div>
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 mt-5 text-center text-lg-end">
                            <img src="../../assets/imagenotes/imageseven.png" alt="" class="image_with w-75 h-100">
                        </div>
                    </div>
                </div>
            </section>
            <!-- end all -->
            <!-- start about us -->
            <section class="section_color mt-1 py-5 overflow-hidden" id="scrollspyHeading4">
                <h1 data-aos="flip-left" class="fw-bold text-center">عنا</h1>
                <div class="container">
                    <div class="row">
                        <div data-aos="fade-right" class="col-12 col-lg-6">
                            <img src="../../assets/imageaboutus/undraw_bookmarks_r6up.svg" class="w-100" alt="">
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 text-center mt-5 pt-2 text-lg-start">
                            <h4 class="fw-bold">مهمتنا</h4>
                            <p class="p_style_color mt-4">مهمتنا هيا راحة المستخدم وان نلبي رغبات المستخدمين وفي هذا النظام
                                المهمة الخاصة وهي تلبيه رغبة العميل وصاحب المهنة والتواصل ببنهم</p>
                            <div class="d-flex mt-4 gap-2 flex-column flex-lg-row" data-aos="fade-up">
                                <i class="fas fa-check fs-4 icon_color"></i>
                                <p class="p_style_color">ربط صاحب المهنة والعميل مع بعضهم</p>
                            </div>
                            <div class="d-flex gap-2 flex-column flex-lg-row" data-aos="fade-up">
                                <i class="fas fa-check fs-4 icon_color"></i>
                                <p class="p_style_color">سهولة الالتحاق بين صاحب المهنة والعميل بسهولة</p>
                            </div>
                            <div class="d-flex gap-2 flex-column flex-lg-row" data-aos="fade-up">
                                <i class="fas fa-check fs-4 icon_color"></i>
                                <p class="p_style_color">الحصول على وظيفة لصاحب المهنة</p>
                            </div>
                            <router-link :to="`/read_more_arap/${number = 7}`" data-aos="fade-up">
                                <button type="button" :style="{ backgroundColor: buttonColor }" @click="changeButtonColor"
                                    class="button_color text-white border-0 btn rounded-5 px-4 mt-3">قراءة المزيد</button>
                            </router-link>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about us -->
            <!-- start work -->
            <section class="py-5 mt-5" id="scrollspyHeading5">
                <div class="text-center container">
                    <h1 data-aos="flip-left" class="fw-bold text-center text_black" :style="{ color: textColor }">تسليط
                        الضوء على الاعمال المهم
                    </h1>
                    <p data-aos="flip-left" class="mt-3 p_style_color">ستتم مشاهدة الأشياء التي تبحث عنها كل يوم هنا <br>كل
                        يوم من قبل العملاء والمهنيين</p>
                    <div class="row mt-2">
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="portfolio-item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightone.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">الطعام</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div
                                class="portfolio-item portfolio-effect__item div_image rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlighttow.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">التسوق</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="portfolio-item portfolio-effect__item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightthree.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">حجز الشاليهات</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="portfolio-item portfolio-effect__item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightfour.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">الاعمال الصنايعية</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3">
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="portfolio-item portfolio-effect__item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightfive.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">الطب</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end work -->
            <!-- start number -->
            <section class="py-5 mt-5 bg-light">
                <div class="text-center container pt-2">
                    <h1 class="fw-bold text-center" data-aos="flip-left">الارقام</h1>
                    <p class="mt-2 p_style_color" data-aos="flip-left">سنساعدك على معرفة بعض المعلومات عنا</p>
                    <div class="row mt-1 mt-lg-5">
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-down">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">30</h1>
                                    <h4 class="p_style_color">المشاريع</h4>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-up">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">4</h1>
                                    <h4 class="p_style_color">الخبرة</h4>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-down">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">2</h1>
                                    <h4 class="p_style_color">الشهادات-التوصيات</h4>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-up">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">25</h1>
                                    <h4 class="p_style_color">المواقع</h4>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end number -->
            <!-- start blog -->
            <section class="pt-5 mt-5" id="scrollspyHeading6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="card pb-2 h-100">
                                <img src="../../assets/imageblogposts/Blogone.png" class="card-img-top" alt="...">
                                <div class="card-body pb-0 text-center text-lg-end">
                                    <h5 class="card-title">اجعل عملك اكثر ربحية</h5>
                                    <p class="card-text text-secondary ms-4">سيوفر لك أكثرها ربحية موقع إلكتروني للمهنيين
                                    </p>
                                </div>
                                <hr>
                                <router-link :to="`/read_more_arap/${number = 8}`"
                                    class="text-center more_hover text-decoration-none">قراءة المزيد</router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="card pb-2 h-100">
                                <img src="../../assets/imageblogposts/Blogtow.png" class="card-img-top" alt="...">
                                <div class="card-body pb-0 text-center text-lg-end">
                                    <h5 class="card-title">سهولة العميل وصاحب المهنة</h5>
                                    <p class="card-text text-secondary ms-4">سيوفر لك الموقع الأكثر ربحية للمحترفين</p>
                                </div>
                                <hr>
                                <router-link :to="`/read_more_arap/${number = 9}`"
                                    class="text-center more_hover text-decoration-none">قراءة المزيد</router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="card pb-2 h-100">
                                <img src="../../assets/imageblogposts/Blogthree.png" class="card-img-top" alt="...">
                                <div class="card-body pb-0 text-center text-lg-end">
                                    <h5 class="card-title">سنوفر لك الوقت والجهد</h5>
                                    <p class="card-text text-secondary ms-4">سيوفر لك أكثر الأرباح ربحية موقع للمحترفين</p>
                                </div>
                                <hr>
                                <router-link :to="`/read_more_arap/${number = 10}`"
                                    class="text-center more_hover text-decoration-none">قراءة المزيد</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end blog -->
            <!-- start contact -->
            <section class="pt-5 mt-5 section_height" id="scrollspyHeading7">
                <div class="div_postive pb-5 position-absolute overflow-hidden">
                    <h1 class="text-white text-center pt-5" data-aos="flip-left">للتواصل معنا</h1>
                    <div class="container mt-5 text-center text-lg-end" data-aos="fade-up">
                        <div class="bg-white rounded-3 div_margin p-4">
                            <h4>نموذج الاتصال</h4>
                            <form method="post"
                                action="http://localhost/graduatproject-main/src/components/folder%20arap/insert%20arap.php">
                                <h6 class="my-3">الاسم</h6>
                                <input type="text" name="Name" class="w-100 py-2">
                                <h6 class="my-3">الايميل</h6>
                                <input type="text" name="Email" class="w-100 py-2">
                                <h6 class="my-3">عنوان الرسالة</h6>
                                <input type="text" name="Title" class="w-100 py-2">
                                <h6 class="my-3">الرسالة</h6>
                                <textarea class="w-100 ps-3 pt-3" rows="8" name="Message"
                                    placeholder="اترك الرسالة الخاصة بك هنا"></textarea>
                                <button type="submit" id="button_form" :style="{ backgroundColor: buttonColor }"
                                    class="button_color border-0 btn btn-primary rounded-5 px-4 py-2 mt-4">ارسالة
                                    الرسالة</button>
                            </form>
                        </div>
                    </div>
                </div>
                <img src="../../assets/imageblogposts/Blogtow.png" class="position-absolute image_z div_postive" alt="">
            </section>
        </div>
        <!-- end contact -->
    </div>
</template>

<script>
import "../../App.vue";
export default {
    name: "ComponentHome",
    computed: {
        textColor() {
            return this.$root.textColor;
        },
        buttonColor() {
            return this.$root.buttonColor;
        },
    },
    created() {
        this.changePageTitle('الرئيسية');
    },
    data() {
        return {
            divWhiteDisplay: 'none',
        };
    },
    methods: {
        label(element) {
            var peson = element;
            var button_signup = document.getElementById("button_signup");
            if (peson == "vocational") {
                button_signup.onclick = () => {
                    location = "/page_vocational_arap";
                };
            } else if (peson == "Client") {
                button_signup.onclick = () => {
                    location = "/page_Client_arap";
                };
            }
        },
        showDivWhite() {
            this.divWhiteDisplay = 'block';
        },
        hideDivWhite() {
            this.divWhiteDisplay = 'none';
        },
        changePageTitle(newTitle) {
            document.title = newTitle;
        },
    },
}
</script>