<template>
    <div>
        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
            tabindex="0">
            <!-- start main -->
            <section class="p-0 my-3 pt-lg-5" id="scrollspyHeading1">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-5" data-aos="fade-right">
                            <div class="text-center text-lg-start" :style="{ color: textColor }">
                                <h1 class="fw-bold">make your job easier<br>with your career<br>project.</h1>
                                <p class="mt-4 text-secondary">The ease and flexibility of using our<br> website and the
                                    ease of seeing clients and<br>professionals.</p>
                                <button @:click="showDivWhite" type="button" :style="{ backgroundColor: buttonColor }"
                                    @click="changeButtonColor"
                                    class="button_color text-white border-0 btn rounded-5 px-4 my-2">Sign In / Sign
                                    Up</button>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 mt-3 mt-lg-0 div_none overflow-hidden" data-aos="fade-left">
                            <div class="pic-ctn position-relative">
                                <img src="../../assets/imagemain/Capture.png" class="w-100" alt="...">
                                <img src="../../assets/imagemain/undraw_investing_7u74.svg" class="w-100" alt="...">
                                <img src="../../assets/imagemain/Capture.png" class="w-100" alt="...">
                                <img src="../../assets/imagemain/undraw_investing_7u74.svg" class="w-100" alt="...">
                                <img src="../../assets/imagemain/Capture.png" class="w-100" alt="...">
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
                                    <div class="col-12 col-lg-6 text-center text-lg-start pt-0 pt-lg-3">
                                        <h3>Please Select Do You Have An Account Or Do You Want To Create A New Account?
                                        </h3>
                                        <button type="button" id="button_signup" :style="{ backgroundColor: buttonColor }"
                                            @click="changeButtonColor"
                                            class="mt-3 button_color text-white border-0 btn btn-primary rounded-5 px-4 fs-6">sign
                                            in / Sign Up</button>
                                        <br>
                                        <br>
                                        <details class="custom-select position-relative">
                                            <summary class="radios p-2 p-md-3 rounded-5">
                                                <input type="radio" name="item" id="default" title="personal" checked>
                                                <input type="radio" name="item" id="vocational" title="vocational">
                                                <input type="radio" name="item" id="Client" title="Client">
                                            </summary>
                                            <ul class="list w-100 position-absolute">
                                                <p class="my_li m-0 py-2 text-start">
                                                    <label @click="label('vocational')" for="vocational">vocational</label>
                                                </p>
                                                <p class="my_li m-0 py-2 text-start">
                                                    <label @click="label('Client')" for="Client">Client</label>
                                                </p>
                                            </ul>
                                        </details>
                                    </div>
                                    <div class="col-12 col-lg-6 my_none">
                                        <div :style="{ backgroundColor: buttonColor }" @click="changeButtonColor"
                                            class="div_backgound_blue button_color text-white rounded-circle d-flex justify-content-center align-items-center">
                                            <img src="../../assets/imagesignupsignin/beautiful-young-business-woman-sitting-chair-isolated-white-36028403-removebg-preview.png"
                                                alt="" class="w-100 mb-5">
                                        </div>
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
                <div class="text-center container" :style="{ color: textColor }">
                    <h1 data-aos="flip-right">Imagine Features</h1>
                    <p data-aos="flip-right" class="mt-3 p_style_color">l'll Show You The Features From The Client
                        Side<br>And The Profession For Several Things.
                    </p>
                    <div class="row mt-5">
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-down">
                            <i class="fas fa-wifi translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_english/${number = 1}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_1 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>Consulting</h4>
                                        <p class="p_color">This Site Will Allow You To Consult With People With Skills And
                                            Clients And With Client People With Skills.</p>
                                        <p class="p_color_blue mb-5">Learn More</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-up">
                            <i
                                class="fas fa-envelope translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_english/${number = 2}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_2 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>Communication</h4>
                                        <p class="p_color">The site will allow you to communicate between professionals and
                                            clients with the advice and questions.</p>
                                        <p class="p_color_blue mb-5">learn more</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-4" data-aos="fade-down">
                            <i
                                class="fas fa-user-md translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_english/${number = 3}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_3 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>Private Reservation</h4>
                                        <p class="p_color">The site allows you to make a private reservation between the
                                            client
                                            and the owner of the profession.</p>
                                        <p class="p_color_blue mb-5">learn more</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down">
                            <i
                                class="fas fa-hourglass-end translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_english/${number = 4}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_4 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>Time And Effort</h4>
                                        <p class="p_color">The site will save time and effort, especially when the
                                            professional
                                            informs the customer..</p>
                                        <p class="p_color_blue mb-5">learn more</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
                            <i
                                class="fas fa-globe-europe translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_english/${number = 5}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_5 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>The Language</h4>
                                        <p class="p_color">The Site Will You With People Allowing You To Speak Arabic And
                                            English And This Will Provide Ease In Knowing.</p>
                                        <p class="p_color_blue mb-5">learn more</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down">
                            <i class="fas fa-star translate_icon position-absolute p-3 fs-3 rounded-circle text-white"></i>
                            <div class="ag-courses_item div_color w-100 h-75 overflow-hidden rounded-3">
                                <router-link :to="`/read_more_english/${number = 6}`"
                                    class="ag-courses-item_link d-block p-5 pb-4 position-relative">
                                    <div class="ag-courses-item_bg item_bg_6 position-absolute rounded-circle"></div>
                                    <div class="ag-courses-item_title fw-bold pt-3 position-relative">
                                        <h4>The Ease</h4>
                                        <p class="p_color">The Site Will Provide You With Ease Of Work And Ease Knowledge Of
                                            Skilled People All You Have To Do Is Login.</p>
                                        <p class="p_color_blue mb-5">learn more</p>
                                    </div>
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end imagine -->
            <!-- start all -->
            <section class="pt-0 mt-lg-5 pt-5 overflow-hidden" id="scrollspyHeading3">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6" data-aos="fade-right">
                            <img src="../../assets/imagenotes/imageone.png" alt="" class="w-100">
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 text-center text-lg-start mt-3 mt-lg-0"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">all notes and some<br>information first note.</h2>
                            <p class="p_style_color mt-3">Welcome To The Site In This Section We Will Explain To<br>You Some
                                Notes For Your Convenience</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 flex-column flex-lg-row">
                                    <div>
                                        <img src="../../assets/imagenotes/imagetow.png" class="rounded-circle with_image"
                                            alt="">
                                    </div>
                                    <div class="mt-1">
                                        <span class="fw-bold">rami nafah7</span>
                                        <br>
                                        <span class="">Dc. Al-Azhar</span>
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 p_style_color">From the project assistants, the project was completed
                                    after the effort and work of the developer, which relieved some of us from fatigue and
                                    trouble.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-lg-5 pt-5">
                        <div data-aos="fade-right" class="col-12 col-lg-6 text-center text-lg-start mt-3 mt-lg-0"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">all notes and some<br>information second note.</h2>
                            <p class="p_style_color mt-3">You Must Create An Account In Order To Open The Site's<br> Proers
                                For You.</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 flex-column flex-lg-row">
                                    <div>
                                        <img src="../../assets/imagenotes/325777265_894173955061757_6790575185506387846_n.jpg"
                                            class="rounded-circle with_image" alt="">
                                    </div>
                                    <div class="mt-1">
                                        <span class="fw-bold">Mostafa Torkmani</span>
                                        <br>
                                        <span class="">A lawyer in an office</span>
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 p_style_color">One of the most beautiful projects that we have
                                    been<br>here is to add life, knowing that it meets the desires of<br>the user according
                                    to the user or the profession that<br>you will choose.</p>
                            </div>
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 mt-5 text-center text-lg-end">
                            <img src="../../assets/imagenotes/imagethree.png" alt="" class="image_with w-75">
                        </div>
                    </div>
                    <div class="row mt-0 mt-lg-5 pt-5">
                        <div data-aos="fade-right" class="col-12 col-lg-6">
                            <img src="../../assets/imagenotes/imagrfour.png" alt="" class="w-100">
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 text-center text-lg-start mt-3 mt-lg-0"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">all notes and some<br>The Third Information Note.</h2>
                            <p class="p_style_color mt-3">Customers Will Appear To You If You Are The Owner Of<br>The
                                Profession And Professionals Will Appear To You If<br>You Are The Customer After Creating
                                The Account And<br>You Will Login.</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 flex-column flex-lg-row">
                                    <div>
                                        <img src="../../assets/imagenotes/imagefive.png" class="rounded-circle with_image"
                                            alt="">
                                    </div>
                                    <div class="mt-1">
                                        <span class="fw-bold">Momen Alzebda</span>
                                        <br>
                                        <span class="">Freelance Developer</span>
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 p_style_color">It is clear that the project has been completed after
                                    the<br>
                                    fatigue and problems of work and effort in terms of<br>analysis and design to the side
                                    already
                                    it is one of the<br>most effort and work projects of Good luck.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-0 mt-lg-5 pt-5">
                        <div data-aos="fade-right" class="col-12 col-lg-6 text-center text-lg-start mt-3 mt-lg-0"
                            :style="{ color: textColor }">
                            <h2 class="fw-bold">all notes and some<br>Fourth Note Information.</h2>
                            <p class="p_style_color mt-3">We Will Show You Several Sections Which Is The Cohs<br>suhing
                                Section We Will Allow You To Consultas Well As<br>The Work Section, So That The Work Is Are
                                Ilable<br>According To The Special Date Of The Owner Of The<br>Profession..</p>
                            <div class="p-2 div_border mt-5">
                                <div class="d-flex gap-2 flex-column flex-lg-row">
                                    <div>
                                        <img src="../../assets/imagenotes/imagesex.png" class="rounded-circle with_image"
                                            alt="">
                                    </div>
                                    <div class="mt-1">
                                        <span class="fw-bold">Sondos Reem</span>
                                        <br>
                                        <span class="">Journalist</span>
                                    </div>
                                </div>
                                <p class="ps-2 mt-2 p_style_color">One of the most important ials in life is Jout Nalism
                                    I<br>was surprised this site actually supports more than one<br>post.</p>
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
            <section class="section_color mt-4 py-5 overflow-hidden" id="scrollspyHeading4">
                <h1 class="fw-bold text-center" data-aos="flip-left">about us</h1>
                <div class="container">
                    <div class="row">
                        <div data-aos="fade-right" class="col-12 col-lg-6">
                            <img src="../../assets/imageaboutus/undraw_bookmarks_r6up.svg" class="w-100" alt="">
                        </div>
                        <div data-aos="fade-left" class="col-12 col-lg-6 text-center mt-5 pt-2 text-lg-start">
                            <h4 class="fw-bold">Our Mission</h4>
                            <p class="p_style_color mt-4">Eos cumque optio dolores excepturi rerum temporibus<br>magni
                                recusandae eveniet, totam omnis consectetur<br>maxime quibusdam expedita dolorem dolor nobis
                                dolor<br>quaerat esse magnam unde, aperiam delectus! In Maiores,<br>Itac.</p>
                            <div class="d-flex mt-4 gap-2 flex-column flex-lg-row" data-aos="fade-up">
                                <i class="fas fa-check fs-4 icon_color"></i>
                                <p class="p_style_color">Connecting The Customer Of The Profession And Vice Verse.</p>
                            </div>
                            <div class="d-flex gap-2 flex-column flex-lg-row" data-aos="fade-up">
                                <i class="fas fa-check fs-4 icon_color"></i>
                                <p class="p_style_color">Ease Of consuit Between The Profiles.</p>
                            </div>
                            <div class="d-flex gap-2 flex-column flex-lg-row" data-aos="fade-up">
                                <i class="fas fa-check fs-4 icon_color"></i>
                                <p class="p_style_color">Obtaining a job for the owner of the profession.</p>
                            </div>
                            <router-link :to="`/read_more_english/${number = 7}`" data-aos="fade-up">
                                <button type="button" :style="{ backgroundColor: buttonColor }" @click="changeButtonColor"
                                    class="button_color text-white border-0 btn rounded-5 px-4 mt-3">Learn More</button>
                            </router-link>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end about us -->
            <!-- start work -->
            <section class="py-5 mt-5" id="scrollspyHeading5">
                <div class="text-center container">
                    <h1 data-aos="flip-left" class="fw-bold text-center" :style="{ color: textColor }">Hightlight Important
                        Work</h1>
                    <p data-aos="flip-left" class="mt-3 p_style_color">The things you look for every day will be seen
                        here<br>every day by clients and professionals.
                    </p>
                    <div class="row mt-2">
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="portfolio-item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightone.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">the food</h3>
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
                                    <h3 class="portfolio-item__header position-relative mt-3">Shops</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="portfolio-item portfolio-effect__item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightthree.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">Book Achalet</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="portfolio-item portfolio-effect__item rounded-4 portfolio-item--eff1 w-100">
                                <img class="portfolio-item__image" src="../../assets/imagehighlight/Hightlightfour.png"
                                    alt="Portfolio Item" width="826" height="551">
                                <div
                                    class="portfolio-item__info d-flex flex-column align-items-center justify-content-center">
                                    <h3 class="portfolio-item__header position-relative mt-3">I Want My Industry</h3>
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
                                    <h3 class="portfolio-item__header position-relative mt-3">they Doctors</h3>
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
                    <h1 class="fw-bold text-center" data-aos="flip-left">Numbers</h1>
                    <p class="mt-2 p_style_color" data-aos="flip-left">We will help you to know some information about us
                    </p>
                    <div class="row mt-1 mt-lg-5">
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-down">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">30</h1>
                                    <h4 class="p_style_color">projects</h4>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-up">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">4</h1>
                                    <h4 class="p_style_color">Experience</h4>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-down">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">2</h1>
                                    <h4 class="p_style_color">Testimonials</h4>
                                </div>
                            </section>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 mt-2" data-aos="fade-down">
                            <section class="three">
                                <div class="nums">
                                    <h1 class="num">25</h1>
                                    <h4 class="p_style_color">websites</h4>
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
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Make Your Business More<br>Profitable.</h5>
                                    <p class="card-text text-secondary me-4">It Will Provide You With TheMost Profitable
                                        Website
                                        For Professionals.</p>
                                </div>
                                <hr>
                                <router-link :to="`/read_more_english/${number = 8}`"
                                    class="text-center more_hover text-decoration-none">learn more</router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mt-3" data-aos="fade-down">
                            <div class="card pb-2 h-100">
                                <img src="../../assets/imageblogposts/Blogtow.png" class="card-img-top" alt="...">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Ease of the client and the<br>owner of the profession.</h5>
                                    <p class="card-text text-secondary me-4">It Will Provide You With TheMost Profitable
                                        Website For Professionals.</p>
                                </div>
                                <hr>
                                <router-link :to="`/read_more_english/${number = 9}`"
                                    class="text-center more_hover text-decoration-none">learn more</router-link>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-4 mt-3" data-aos="fade-up">
                            <div class="card pb-2 h-100">
                                <img src="../../assets/imageblogposts/Blogthree.png" class="card-img-top" alt="...">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">We Will Save You Time<br>And Effort.</h5>
                                    <p class="card-text text-secondary me-4">It Will Provide You With TheMost Profitable
                                        Website For Professionals.</p>
                                </div>
                                <hr>
                                <router-link :to="`/read_more_english/${number = 10}`"
                                    class="text-center more_hover text-decoration-none">learn more</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end blog -->
            <!-- start contact -->
            <section class="pt-5 mt-5 section_height" id="scrollspyHeading7">
                <div class="div_postive pb-5 position-absolute overflow-hidden">
                    <h1 class="text-white text-center pt-5" data-aos="flip-left">contact us</h1>
                    <div class="container mt-5" data-aos="fade-up">
                        <div class="bg-white rounded-3 div_margin p-4">
                            <h4>contact form</h4>
                            <form method="post"
                                action="http://localhost/graduatproject-main/src/components/folder%20english/insert%20english.php">
                                <h6 class="my-3">name</h6>
                                <input type="text" name="Name" required class="w-100 py-2">
                                <h6 class="my-3">Email</h6>
                                <input type="text" name="Email" required class="w-100 py-2">
                                <h6 class="my-3">Title Subject</h6>
                                <input type="text" name="Title" required class="w-100 py-2">
                                <h6 class="my-3">Massage</h6>
                                <textarea class="w-100 ps-3 pt-3" rows="8" required name="Message"
                                    placeholder="Leave Your Massage Here..."></textarea>
                                <button type="submit" id="button_form" :style="{ backgroundColor: buttonColor }"
                                    class="button_color border-0 btn btn-primary rounded-5 px-4 py-2 mt-4">Send
                                    Massage</button>
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
        this.changePageTitle('HOME');
    },
    data() {
        return {
            divWhiteDisplay: 'none'
        };
    },
    methods: {
        label(element) {
            var peson = element;
            var button_signup = document.getElementById("button_signup");
            if (peson == "vocational") {
                button_signup.onclick = () => {
                    location = "/page_vocational_english";
                };
            } else if (peson == "Client") {
                button_signup.onclick = () => {
                    location = "/page_Client_english";
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