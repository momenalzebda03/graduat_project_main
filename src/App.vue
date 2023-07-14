<template>
  <!-- start my page english -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: header_mypage_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link to="/" class="text-decoration-none link_color text_black" :style="{ color: textColor }"
                  aria-current="page" :class="{ 'active1': $route.path === '/' }">Counseling</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_vocational_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/page_vocational_english' }">Signin</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{
                    path: '/my_page_voictional_arap/' + $route.params.id, query: { id: $route.query.id }
                  }" class="dropdown-item">arab</router-link></li>
                  <li><router-link
                      :to="{ path: '/my_page_voictional_english/' + $route.params.id, query: { id: $route.query.id } }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end my page english -->
  <!-- start header English home -->
  <section>
    <div class="div_hit" :style="{ display: if_header_english_home ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }" id="navbar-example2">
        <div class="container d-flex justify-content-center text-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none active link_color"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading2">features</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading3">notes</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading4">about
                  us</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading5">Highlight</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading6">Blog Posts</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading7">ContactUs</a>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color dropdown-toggle" href="#"
                  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link to="/home_arap" :class="{ 'active1': $route.path === '/home_arap' }"
                      class="dropdown-item">arab</router-link>
                  </li>
                  <li><router-link to="/home_english" :class="{ 'active1': $route.path === '/home_english' }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- start header English home -->
  <!-- start header Egnlish input_vocational -->
  <section class="mb-3" :style="{ display: header_input_vocational_english ? 'block' : 'none' }">
    <div class="div_hit">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link to="/page_vocational_arap"
                      :class="{ 'active1': $route.path === '/page_vocational_arap' }"
                      class="dropdown-item">arab</router-link></li>
                  <li><router-link to="/page_vocational_english"
                      :class="{ 'active1': $route.path === '/page_vocational_english' }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header Egnlish input_vocational -->
  <!-- start header English input_client -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: header_input_Client_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link to="/page_Client_arap" :class="{ 'active1': $route.path === '/page_Client_arap' }"
                      class="dropdown-item">arab</router-link></li>
                  <li><router-link to="/page_Client_english"
                      :class="{ 'active1': $route.path === '/page_Client_english' }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header English input_client -->
  <!-- start header English page voctional -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: header_page_voctional_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container d-flex justify-content-center text-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_counseling_voiactional_english/' + $route.query.id }"
                  class="text-decoration-none link_color text_black" :style="{ color: textColor }"
                  aria-current="page">Counseling</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_vocational_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/page_vocational_english' }">Signin</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <router-link :to="{ path: '/index_vocational_arap', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_vocational_arap' }"
                      class="dropdown-item">arab</router-link>
                  </li>
                  <li>
                    <router-link :to="{ path: '/index_vocational_english', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_vocational_english' }"
                      class="dropdown-item">english</router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header English page voctional -->
  <!-- start header English page client -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: page_client_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container d-flex justify-content-center text-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color" :style="{ color: textColor }"
                  aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_Counseling_client_english/' + $route.query.id }"
                  class="text-decoration-none link_color" :style="{ color: textColor }">Counseling</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_Client_english" class="text-decoration-none link_color"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/page_Client_english' }">Signin
                </router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color dropdown-toggle" href="#"
                  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <router-link :to="{ path: '/index_client_arap', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_client_arap' }"
                      class="dropdown-item">arab</router-link>
                  </li>
                  <li>
                    <router-link :to="{ path: '/index_client_english', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_client_english' }"
                      class="dropdown-item">english</router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header English page client -->
  <!-- start header read more english -->
  <section>
    <div class="div_hit div_hit1" :style="{ display: page_read_more_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{ path: '/read_more_arap/' + $route.params.id }"
                      class=" dropdown-item">arab</router-link>
                  </li>
                  <li><router-link :to="{ path: '/read_more_english/' + $route.params.id }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header read more english -->
  <!-- start header counseling voicational english -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: page_counseling_voicational_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link
                  :to="{ path: '/page_counseling_voiactional_english/' + $route.params.id }"
                  class="text-decoration-none link_color active text_black" :style="{ color: textColor }"
                  aria-current="page">Counseling</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_vocational_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/page_vocational_english' }">Signin</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{ path: '/page_counseling_voiactional_arap/' + $route.params.id }"
                      class="dropdown-item">arab</router-link></li>
                  <li><router-link :to="{ path: '/page_counseling_voiactional_english/' + $route.params.id }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header counseling counseling english -->
  <!-- start header counseling client arap -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: page_counseling_client_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container gap-3 d-flex justify-content-center text-center">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_counseling_voiactional_arap/' + $route.params.id }"
                  class="text-decoration-none link_color text_black active" :style="{ color: textColor }"
                  aria-current="page">الاستشارة</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_Client_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }">تسجيل الدخول</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{ path: '/page_Counseling_client_arap/' + $route.params.id }"
                      class="dropdown-item">عربي</router-link></li>
                  <li><router-link :to="{ path: '/page_Counseling_client_english/' + $route.params.id }"
                      class="dropdown-item">انجليزي</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header counseling client arap -->
  <!-- start header voicational counseling arap -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: page_counseling_voicational_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_counseling_voiactional_arap/' + $route.params.id }"
                  class="text-decoration-none link_color text_black active" :style="{ color: textColor }"
                  aria-current="page">الاستشارة</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_vocational_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/page_vocational_arap' }">تسجيل
                  الدخول</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{ path: '/page_counseling_voiactional_arap/' + $route.params.id }"
                      class="dropdown-item">العربية</router-link></li>
                  <li><router-link :to="{ path: '/page_counseling_voiactional_english/' + $route.params.id }"
                      class="dropdown-item">الانجليزية</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header counseling voicational arap -->
  <!-- start header counseling client english -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: page_counseling_client_english ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_english' }">home</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_Counseling_client_english/' + $route.params.id }"
                  class="text-decoration-none link_color text_black active"
                  :style="{ color: textColor }">Counseling</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_Client_english" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/page_Client_english' }">Signin</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  language
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{ path: '/page_Counseling_client_arap/' + $route.params.id }"
                      class="dropdown-item">arab</router-link></li>
                  <li><router-link :to="{ path: '/page_Counseling_client_english/' + $route.params.id }"
                      class="dropdown-item">english</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header counseling client english -->
  <!-- start my page arap -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: header_mypage_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link to="/" class="text-decoration-none link_color text_black" :style="{ color: textColor }"
                  aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/' }">الاستشارة</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_vocational_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page"
                  :class="{ 'active1': $route.path === '/page_vocational_arap' }">تسجيل
                  الدخول</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link
                      :to="{ path: '/my_page_voictional_arap/' + $route.params.id, query: { id: $route.query.id } }"
                      class="dropdown-item">عربي</router-link></li>
                  <li><router-link
                      :to="{ path: '/my_page_voictional_english/' + $route.params.id, query: { id: $route.query.id } }"
                      class="dropdown-item">انجليزي</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end my page arap -->
  <!-- start header read more arap -->
  <section>
    <div class="div_hit div_hit1" :style="{ display: page_read_more_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link :to="{ path: '/read_more_arap/' + $route.params.id }"
                      class="dropdown-item">عربي</router-link></li>
                  <li><router-link :to="{ path: '/read_more_english/' + $route.params.id }"
                      class="dropdown-item">انجليزي</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header read more arap -->
  <!-- start header arap input_client -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: header_input_Client_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link to="/page_vocational_arap"
                      :class="{ 'active1': $route.path === '/page_vocational_arap' }"
                      class="dropdown-item">عربي</router-link>
                  </li>
                  <li><router-link to="/page_Client_english"
                      :class="{ 'active1': $route.path === '/page_Client_english' }"
                      class="dropdown-item">انجليزي</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header arap input_client -->
  <!-- start header arap input_vocational -->
  <section class="mb-3" :style="{ display: header_input_vocational_arap ? 'block' : 'none' }">
    <div class="div_hit">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link to="/page_vocational_arap"
                      :class="{ 'active1': $route.path === '/page_vocational_arap' }"
                      class="dropdown-item">عربي</router-link>
                  </li>
                  <li><router-link to="/page_vocational_english"
                      :class="{ 'active1': $route.path === '/page_vocational_english' }"
                      class="dropdown-item">انجليزي</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header arap input_vocational -->
  <!-- start header arap home -->
  <section>
    <div class="div_hit" :style="{ display: else_header_arap_home ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }" id="navbar-example-arap">
        <div class="container text-center d-flex justify-content-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" :style="{ backgroundColor: buttonColor }"
            @click="changeButtonColor" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <a class="text-decoration-none active link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading1">الرئيسية</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading2">الميزات</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading3">الملاحظات</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading4">عنا</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading5">الاعمال المهمة</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading6">المدونات</a>
              </li>
              <li class="nav-item mt-1">
                <a class="text-decoration-none link_color" :style="{ color: textColor }" aria-current="page"
                  href="#scrollspyHeading7">للتواصل</a>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color dropdown-toggle" href="#"
                  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><router-link to="/home_arap" :class="{ 'active1': $route.path === '/home_arap' }"
                      class="dropdown-item">عربي</router-link>
                  </li>
                  <li><router-link to="/home_english" :class="{ 'active1': $route.path === '/home_english' }"
                      class="dropdown-item">انجليزي</router-link></li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header arap home -->
  <!-- start header arap page voctional -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: header_page_voctional_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container d-flex justify-content-center text-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" type="button" :style="{ backgroundColor: buttonColor }"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_counseling_voiactional_arap/' + $route.query.id }"
                  class="text-decoration-none link_color text_black" :style="{ color: textColor }"
                  aria-current="page">الاستشارة</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_vocational_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/page_vocational_arap' }">تسجيل
                  الدخول</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <router-link :to="{ path: '/index_vocational_arap', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_vocational_arap' }"
                      class="dropdown-item">عربي</router-link>
                  </li>
                  <li>
                    <router-link :to="{ path: '/index_vocational_english', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_vocational_english' }"
                      class="dropdown-item">انجليزي</router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header arap page voctional -->
  <!-- start header arap page client -->
  <section class="mb-3">
    <div class="div_hit" :style="{ display: page_client_arap ? 'block' : 'none' }">
      <nav class="navbar navbar-expand-lg navbar-light border-bottom position-fixed w-100 my_top"
        :style="{ backgroundColor: navBackground }">
        <div class="container d-flex justify-content-center text-center gap-3">
          <img src="../src/assets/imageheader/Capture.png" class="image_header" alt="">
          <button class="navbar-toggler rounded-3 button_color" type="button" :style="{ backgroundColor: buttonColor }"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white fs-2 p-1"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex gap-2 text-center gap-lg-4 mb-2 mb-lg-0 rounded-3 div_media">
              <li class="nav-item mt-1">
                <router-link to="/home_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/home_arap' }">الرئيسية</router-link>
              </li>
              <li class="nav-item mt-1">
                <router-link :to="{ path: '/page_Counseling_client_arap/' + $route.query.id }"
                  class="text-decoration-none link_color text_black" :style="{ color: textColor }">الاستشارة</router-link>
              </li>
              <li class=" nav-item mt-1">
                <router-link to="/page_Client_arap" class="text-decoration-none link_color text_black"
                  :style="{ color: textColor }" aria-current="page" href="#scrollspyHeading1"
                  :class="{ 'active1': $route.path === '/page_Client_arap' }">تسجيل
                  الدخول</router-link>
              </li>
              <li class="nav-item mt-1 dropdown">
                <a :style="{ color: textColor }" class="text-decoration-none link_color text_black dropdown-toggle"
                  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  اللغة
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <router-link :to="{ path: '/index_client_arap', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_client_arap' }"
                      class="dropdown-item">عربي</router-link>
                  </li>
                  <li>
                    <router-link :to="{ path: '/index_client_english', query: { id: $route.query.id } }"
                      :class="{ 'active1': $route.path === '/index_client_english' }"
                      class="dropdown-item">انجليزي</router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item mt-1">
                <div id="my_icon" @click="toggleIcon" @:click="changeClass">
                  <i :class="myClass" :style="{ color: textColor }" @click="changeBackgroundColor"></i>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </section>
  <!-- end header arap page client -->
  <router-view />
  <div>
    <!-- start footer1 -->
    <div :style="{ display: shouldShowFooter1 ? 'block' : 'none' }">
      <section class="bg-black px-0 p-4 pb-1">
        <div class="text-center">
          <img src="../src/assets/imageheader/Capture.png" class="image_footer" alt="">
        </div>
        <div class="bg-white div_hr mt-3"></div>
        <h4 class="mt-3 text-white text-center">All rights reserved&copy; 2023</h4>
      </section>
    </div>
    <!-- end footer1 -->
    <div :style="{ display: shouldShowFooter2 ? 'block' : 'none' }">
      <!-- start footer2 -->
      <section class="bg-black px-0 p-4 pb-1">
        <div class="text-center">
          <img src="../src/assets/imageheader/Capture.png" class="image_footer" alt="">
        </div>
        <div class="bg-white div_hr mt-3"></div>
        <h4 class="mt-3 text-white text-center">جميع الحقوق محفوظة&copy; 2023</h4>
      </section>
      <!-- end footer2 -->
    </div>
  </div>
</template>

<script>
import AOS from 'aos';
export default {
  data() {
    return {
      icon: true,
      myClass: 'fas fa-moon',
      navBackground: "",
      buttonColor: "",
      textColor: "",
    }
  },
  computed: {
    shouldShowFooter1() {
      const footer1URLs = ['/home_english', '/page_vocational_english', '/page_Client_english', '/index_vocational_english', `/read_more_english`, '/index_client_english', '/my_page_voictional_english', '/page_counseling_voiactional_english', '/page_Counseling_client_english'];
      const readMorePattern = /^\/read_more_english\/([123456789]|10|11|12)$/;
      return footer1URLs.includes(this.$route.path) || readMorePattern.test(this.$route.path) || footer1URLs.some(url => this.$route.path.startsWith(url));
    },
    shouldShowFooter2() {
      const footer2URLs = ['/home_arap', '/page_vocational_arap', '/page_Client_arap', '/read_more_arap', '/index_vocational_arap', '/index_client_arap', '/my_page_voictional_arap', '/page_counseling_voiactional_arap', '/page_Counseling_client_arap'];
      const readMorePattern = /^\/read_more_arap\/([123456789]|10|11|12)$/;
      return footer2URLs.includes(this.$route.path) || readMorePattern.test(this.$route.path) || footer2URLs.some(url => this.$route.path.startsWith(url));
    },
    if_header_english_home() {
      const footer1URLs = ['/home_english'];
      return footer1URLs.includes(this.$route.path);
    },
    header_input_vocational_english() {
      const footer2URLs = ['/page_vocational_english'];
      return footer2URLs.includes(this.$route.path);
    },
    header_input_Client_english() {
      const footer2URLs = ['/page_Client_english'];
      return footer2URLs.includes(this.$route.path);
    },
    else_header_arap_home() {
      const footer2URLs = ['/home_arap'];
      return footer2URLs.includes(this.$route.path);
    },
    header_input_vocational_arap() {
      const footer2URLs = ['/page_vocational_arap'];
      return footer2URLs.includes(this.$route.path);
    },
    header_input_Client_arap() {
      const footer2URLs = ['/page_Client_arap'];
      return footer2URLs.includes(this.$route.path);
    },
    header_page_voctional_english() {
      const footer2URLs = ['/index_vocational_english'];
      return footer2URLs.includes(this.$route.path);
    },
    header_page_voctional_arap() {
      const footer2URLs = ['/index_vocational_arap'];
      return footer2URLs.includes(this.$route.path);
    },
    page_client_english() {
      const footer2URLs = ['/index_client_english'];
      return footer2URLs.includes(this.$route.path);
    },
    page_client_arap() {
      const footer2URLs = ['/index_client_arap'];
      return footer2URLs.includes(this.$route.path);
    },
    page_read_more_english() {
      const footer2URLs = [`/read_more_english`];
      const readMorePattern = /^\/read_more_english\/([123456789]|10|11|12)$/;
      return footer2URLs.includes(this.$route.path) || readMorePattern.test(this.$route.path);
    },
    page_read_more_arap() {
      const footer2URLs = ['/read_more_arap'];
      const readMorePattern = /^\/read_more_arap\/([123456789]|10|11|12)$/;
      return footer2URLs.includes(this.$route.path) || readMorePattern.test(this.$route.path);
    },
    page_counseling_voicational_english() {
      const footer2URLs = [`/page_counseling_voiactional_english/${this.$route.params.id}`];
      return footer2URLs.includes(this.$route.path);
    },
    page_counseling_voicational_arap() {
      const footer2URLs = [`/page_counseling_voiactional_arap/${this.$route.params.id}`];
      return footer2URLs.includes(this.$route.path);
    },
    page_counseling_client_english() {
      const footer2URLs = [`/page_Counseling_client_english/${this.$route.params.id}`];
      return footer2URLs.includes(this.$route.path);
    },
    page_counseling_client_arap() {
      const footer2URLs = [`/page_Counseling_client_arap/${this.$route.params.id}`];
      return footer2URLs.includes(this.$route.path);
    },
    header_mypage_english() {
      const footer2URLs = ['/my_page_voictional_english'];
      const currentPath = this.$route.path;
      return footer2URLs.some(url => currentPath.startsWith(url));
    },
    header_mypage_arap() {
      const footer2URLs = ['/my_page_voictional_arap'];
      const currentPath = this.$route.path;
      return footer2URLs.some(url => currentPath.startsWith(url));
    },
  },
  mounted() {
    console.log(this.$route);
    const buttonColor = window.localStorage.getItem('buttonColor');
    if (buttonColor) {
      this.buttonColor = buttonColor;
    }
    const storedTextColor = window.localStorage.getItem('textColor');
    if (storedTextColor) {
      this.textColor = storedTextColor;
    }
    const storedClass = window.localStorage.getItem('myClass');
    if (storedClass) {
      this.myClass = storedClass;
    }
    const storedColor = window.localStorage.getItem('backgroundColor');
    if (storedColor) {
      const body = document.querySelector('body');
      body.style.backgroundColor = storedColor;
      this.navBackground = storedColor;
    }
    AOS.init();
    window.addEventListener('scroll', AOS.refresh);
  },
  methods: {
    changeBackgroundColor() {
      if (this.myClass === 'fas fa-moon') {
        this.myClass = 'fas fa-sun';
        this.navBackground = 'black';
        this.textColor = 'white';
        this.buttonColor = '#FF9900';
      } else {
        this.myClass = 'fas fa-moon';
        this.navBackground = 'white';
        this.textColor = 'black';
        this.buttonColor = '#4285F4';
      }
      window.localStorage.setItem('myClass', this.myClass);
      window.localStorage.setItem('background_header', this.navBackground);
      window.localStorage.setItem('textColor', this.textColor);
      window.localStorage.setItem('buttonColor', this.buttonColor);
      const body = document.querySelector('body');
      const currentColor = window.getComputedStyle(body).backgroundColor;
      if (currentColor === 'rgb(255, 255, 255)') {
        body.style.backgroundColor = 'black';
        window.localStorage.setItem('backgroundColor', 'black');
      } else {
        body.style.backgroundColor = 'white';
        window.localStorage.setItem('backgroundColor', 'white');
      }
    },
  },
};
</script>