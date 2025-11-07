<template>
    <div class="d-flex flex-column">

        <!-- <div class="vignette-top"></div> -->

        <!-- top nav -->
        <div class="minsu-green">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-dark text-center" style="height: auto !important; margin: 0 !important; padding: 0 !important;">
                    <!-- <a class="navbar-brand" href="#">MinSU</a> -->
    
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex justify-content-between"> -->
    
                    <div class="mx-auto">
                        <div class="collapse navbar-collapse justify-content-between text-white" id="navbarNav">
                            <ul class="navbar-nav w-100 d-flex justify-content-between">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="#">
                                        Good Governance
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="/good-governance/transparency">
                                        Transparency Seal
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="/services/jobvacants">
                                        Careers
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="#">
                                        Bids Notices and Invitation
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="/good-governance/data-privacy-notice">
                                        Data Privacy
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="#">
                                        Gender and Development
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center" target="_blank" href="#">
                                        Sustainability
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
    
                </nav>
            </div>
    
            <!-- MinSU Logo, Name, Tagline -->
            <div class="container mb-1">
                <div class="row d-flex align-items-center justify-content-center">
                    <!-- Logo Column -->
                    <div class="col-auto">
                        <img src="/template/images/responsive-logo.png" alt="MinSU Logo" style="height: 125px;" />
                    </div>
    
                    <!-- Text Content Column -->
                    <div class="col mt-3 text-dark text-white texy-shadow-black">
                        <p class="medium mb-0">Republic of the Philippines</p>
                        <p class="fw-bold text-uppercase mb-0 minsu-name">
                            Mindoro State University
                        </p>
                        <p class="medium tagline text-xs font-italic">#LIFTMINSU</p>
                    </div>
    
                    <!-- Right Search Bar -->
                    <div class="col-auto">
                        <form class="custom-search" role="search">
                            <span class="material-icons">search</span>
                            <input
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                                name="search"
                            />
                        </form>
                    </div>
                </div>
            </div>
    
            <!-- lesser top nav -->
            <div class="container-fluid" style="z-index: 1050;">
                <nav class="navbar-expand-lg navbar-dark">
                    <!-- <a class="navbar-brand" href="#">MinSU</a> -->
    
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <!-- <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav d-flex justify-content-between"> -->
    
                    <div class="container">
                        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                            <ul class="navbar-nav w-100 d-flex justify-content-between">
                                <li v-for="(navSection, key) in navData" :key="key" class="nav-item dropdown">
                                    <!-- If navSection has data (submenu) -->
                                    <template v-if="navSection.data && navSection.data.length">
                                        <a class="nav-link d-flex align-items-center text-white text-uppercase" href="#" data-bs-toggle="dropdown">
                                            {{ navSection.title || key }}
                                        </a>
                                        <ul class="dropdown-menu">
                                            <template v-for="(item, i) in navSection.data" :key="i">
                                               
                                                <!-- IF NAV HAS SUB MENU -->
                                                <li v-if="item.submenu" class="dropdown-submenu">
                                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                                        <span>{{ item.title }}</span>
                                                        <span class="material-icons">arrow_right</span>
                                                    </a>
                                                    <ul class="dropdown-submenu-items list-unstyled ms-3">
                                                        <li v-for="(subItem, subIndex) in item.submenu" :key="subIndex">
    
                                                   
                                                            <a class="dropdown-item" :href="typeof subItem === 'string' ? '#' : subItem.link" :target="subItem.link.startsWith('https', subItem.link) ? '_blank' : ''">
                                                                {{ typeof subItem === 'string' ? subItem : subItem.title }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <!-- IF NAV REDIRECTSB TO ANOTHER DOMAIN -->
                                                 <li v-else-if="typeof item.link === 'string' && item.link.startsWith('https', item.link)">
                                                    <a :href="item.link" class="dropdown-item" target="_blank">{{ item.title }}</a>
                                                </li>
    
                                                <li v-else>
                                                    <a class="dropdown-item" :href="item.link">{{ item.title }}</a>
                                                </li>
                                            </template>
                                        </ul>
                                    </template>
    
                                    <!-- If navSection has no data and only a link -->
                                    <template v-else>
                                        <a class="nav-link d-flex align-items-center text-white text-uppercase" :href="navSection.link">
                                            {{ navSection.title || key }}
                                        </a>
                                    </template>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="d-flex flex-column vid-bg">
            <!-- Video Background -->
            <video autoplay muted loop playsinline>
                <source src="/template/videos/top-bg.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- SDG and Projects (carousel of projects) -->
            <div class="position-fixed bottom-0 left-0 end-0 m-3 d-flex align-items-center transition-container" style="z-index: 1050;" @mouseover="isHovered = true" @mouseleave="isHovered = false" >
                <button @click="toggleCarousel" class="toggle-logo-btn border-0 bg-transparent">
                    <img src="/template/images/logo.png" alt="Toggle Projects" class="toggle-logo-img" />
                </button>
                <p class="hover-label text-minsu-green my-auto">See projects here!</p>
            </div>

            <!-- Carousel (with transition) -->
            <transition name="fade-slide">
                <div
                    v-show="isCarouselVisible"
                    class="position-absolute bottom-8 start-0 left-4"
                    style="height: 50vh; width: 30vw;"
                >
                    <swiper
                    :slides-per-view="3"
                    :centeredSlides="true"
                    :loop="true"
                    :navigation="true"
                    :modules="modules"
                    :speed="1000"
                    :autoplay="{
                        delay: 3000,
                        disableOnInteraction: false
                    }"
                    :looped-slides="projects.length"
                    class="custom-swiper py-5 px-2"
                    >
                        <swiper-slide v-for="project in projects" :key="project.id">
                            <div class="project-card bg-white text-center rounded d-flex flex-column align-items-center justify-content-center py-2 pb-3">
                                <img :src="project.image" :alt="project.title" class="mb-2 project-img" />
                                <div>
                                    <p class="fw-bold">{{ project.title }}</p>
                                    <p class="text-muted px-1 project-desc text-justify mx-2 text-2xs text-indent">{{ truncate(project.description, 150) }}</p>
                                    <a class="minsu-green text-white rounded-pill py-2 pl-2 text-2xs pr-1" style="line-height: 0;" :href="project.link" target="_blank">
                                        Read more
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1.4rem" width="1.4rem" viewBox="0 0 22 25">
                                            <path fill="#ffffff" d="M12 15.289L15.288 12L12 8.711l-.688.689l2.1 2.1H8.5v1h4.912l-2.1 2.1zM12.003 21q-1.867 0-3.51-.708q-1.643-.709-2.859-1.924t-1.925-2.856T3 12.003t.709-3.51Q4.417 6.85 5.63 5.634t2.857-1.925T11.997 3t3.51.709q1.643.708 2.859 1.922t1.925 2.857t.709 3.509t-.708 3.51t-1.924 2.859t-2.856 1.925t-3.509.709M12 20q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </swiper-slide>
                    </swiper>
                </div>
            </transition>

            <!-- Temporary Welcome Message -->
            <div v-if="showMessage && !isChatbotVisible" class="position-fixed mb-2 me-2 py-2 px-4 rounded shadow text-minsu-green bg-white animate__animated animate__bounce animate__delay-2s" style="font-size: 9pt; bottom: 80px; z-index: 1051; right: 1rem;">
                Click here to chat with MinSU Bot!
                <div class="message-tail"></div>
            </div>

            <!-- Chatbot -->
            <div class="position-fixed bottom-0 right-0 end-0 m-0 animate__animated animate__bounce animate__delay-2s" style="z-index: 1050;" title="Ask me anything!">

                <button class="rounded-circle position-fixed d-flex justify-content-center align-items-center" ref="chatbotBody" style="bottom: 20px; right: 20px; width: 60px; height: 60px; box-shadow: 0 4px 8px rgba(0,0,0,0.3); background-color: white; border: none; cursor: pointer;"  @click="toggleChatbot" >
                    <img src="/template/images/chatbot.jpg" alt="MinSU ChatBot" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                </button>

                <div  class="card position-fixed d-flex flex-column" v-if="isChatbotVisible" style="bottom: 55px; right: 20px; width: 320px; max-height: 500px; resize: both; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.3);" >
                    <div class="card-header minsu-green text-white text-center fw-bold" style="cursor: pointer;"  @click="toggleChatbot" >
                        <img src="/template/images/chatbot.jpg" alt="MinSU ChatBot" class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                        Welcome to MinSU ChatBot!
                    </div>

                    <div class="card-body d-flex flex-column bg-light p-2" style="overflow-y: auto; font-size: 14px;" ref="chatbotBody">
                        <div class="message bot-message mb-2">Hello! How can I assist you today?</div>
                        <div class="message bot-message mb-2">
                            📚 Frequently Asked Questions<br>
                            📝 Enrollment Assistance<br>
                            🏛️ Connect to a Department<br>
                            💻 Technical Support
                        </div>

                        <div class="message bot-message mb-2"><em>Or type your question below!</em></div>
                        <div v-for="(msg, index) in messages" :key="index" :class="['message', msg.sender === 'user' ? 'user-message' : 'bot-message', 'mb-2']" v-html="msg.text"></div>

                        <div v-if="isTyping" class="typing-indicator">
                            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                        </div>
                    </div>

                    <div class="input-group border-top">
                        <input v-model="userInput" type="text" class="form-control border-0" placeholder="Type a message..." @keypress.enter="sendMessage" >
                        <button class="btn minsu-green text-light" @click="sendMessage">Send</button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- News, Announcements and Highlights -->
    <div class="site-bg" style="">
        <div class="container pt-6 pb-3">
            <div class="row">
                <!-- Most Recent Event -->
                <div class="col-lg-8">
                    <div class="mb-4">
                        <div class="bg-light mb-3" style="height: 50vh;">
                            <img :src="news_featured?.image_url || '/img/no-image-found.png'" alt="News Main Pic" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <p class="headline-title text-minsu-green">{{ news_featured.title }}</p>

                        <!-- SDG Icons -->
                        <div class="d-flex m-0">
                            <div v-for="(img, index) in subImages" :key="index" class="mr-1 bg-light" style="width: 20px; height: 20px;">
                                <img :src="img" alt="Sub Pic" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                        
                        <p class="content-details">{{ truncate(stripTags(news_featured.content), 1000) }}</p>
                        <div class="text-end">
                            <button class="btn minsu-green text-white px-4">Read More</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-4">
                    <!-- Announcement and Advisories -->
                    <div class="minsu-green text-white p-3 mb-4 rounded">
                        <h4 class="fw-bolder text-center text-white">ANNOUNCEMENT & ADVISORIES</h4>
                        <div v-for="(announcement, index) in announcements" :key="index" class="d-flex align-items-start my-1 announcement-item">
                            <div class="bg-light mr-2" style="width: 50px; height: 50px;">
                                <img src="/img/no-image-found.png" alt="News Pic" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-white">
                                <p class="ann-title">{{ announcement.name }}</p>
                                <p class="ann-desc">{{ announcement.date_from }}</p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="text-decoration-none text-white">See all</a>
                        </div>
                    </div>
    
                    <!-- MinSU Highlights -->
                    <div class="bg-light p-3 rounded">
                        <h4 class="fw-bold text-center">MinSU HIGHLIGHTS</h4>
                        <div v-for="item in news" :key="item" class="d-flex align-items-start my-3">
                            <div class="bg-light mr-2" style="min-width: 75px; height: 50px;">
                                <img src="/img/no-image-found.png" alt="Highlights Pic" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div>
                                <p class="highlight-title">{{ item.title }}</p>
                                <p class="highlight-desc">{{ truncate(stripTags(item.description), 40) }} <a href="#" class="text-minsu-green text-decoration-none">Read more</a></p>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#" class="text-minsu-green text-decoration-none fw-bold">See all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Virtual Campus Tour -->
    <div class="container-fluid minsu-green text-center text-white d-flex align-items-center" style="height: 100vh; position: relative; overflow: hidden;">
        <!-- SVG at top and full width -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
            style="position: absolute; top: 0; left: 0; width: 100%; height: auto; z-index: 1; pointer-events: none;">
            <g fill="#F8F9FE">
                <path d="M0 1v99c134.3 0 153.7-99 296-99H0Z" opacity=".5"></path>
                <path d="M1000 4v86C833.3 90 833.3 3.6 666.7 3.6S500 90 333.3 90 166.7 4 0 4h1000Z" opacity=".5"></path>
                <path d="M617 1v86C372 119 384 1 196 1h421Z" opacity=".5"></path>
                <path d="M1000 0H0v52C62.5 28 125 4 250 4c250 0 250 96 500 96 125 0 187.5-24 250-48V0Z"></path>
            </g>
        </svg>

        <!-- Main content above SVG -->
        <div class="container align-content-center" style="position: relative; z-index: 2; bottom: 0;">
            <p class="section-name text-white pt-3 pb-3">VIRTUAL CAMPUS TOUR</p>
            <div class="campus-cards justify-content-between">
                <div class="campus-card" v-for="campus in campuses" :key="campus.name">
                    <div class="thumbnail">
                        <img :src="campus.img" :alt="campus.name" class="img-fluid"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <p style="font-weight: bold;">{{ campus.name }}</p>
                </div>
            </div>
        </div>

        <!-- Flipped SVG at bottom and full width -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
            style="position: absolute; bottom: 0; left: 0; width: 100%; height: auto; z-index: 1; pointer-events: none; transform: scaleY(-1);">
            <g fill="#F8F9FE">
                <path d="M0 1v99c134.3 0 153.7-99 296-99H0Z" opacity=".5"></path>
                <path d="M1000 4v86C833.3 90 833.3 3.6 666.7 3.6S500 90 333.3 90 166.7 4 0 4h1000Z" opacity=".5"></path>
                <path d="M617 1v86C372 119 384 1 196 1h421Z" opacity=".5"></path>
                <path d="M1000 0H0v52C62.5 28 125 4 250 4c250 0 250 96 500 96 125 0 187.5-24 250-48V0Z"></path>
            </g>
        </svg>
    </div>

    <!-- MinSU Hymn -->
    <div class="container-fluid text-center d-flex flex-column align-items-center justify-content-center" style="min-height: 90vh; position: relative; overflow: hidden;">
        <p class="section-name text-minsu-green mb-4">MINSU HYMN</p>

        <div class="video-wrapper" style="width: 100%; max-width: 1100px; height: 70vh;">
            <iframe
                src="https://www.youtube.com/embed/8VfjZhAJd3Y?rel=0&modestbranding=1"
                title="MinSU Hymn"
                allowfullscreen
                style="width: 100%; height: 100%; border: 0; object-fit: cover;"
            ></iframe>
        </div>
        <transition name="fade-slide">
            <div v-if="showLyrics" class="lyrics-wrapper mt-4">
                <p class="lyrics-text">
                    Raise your voice throughout the land<br>
                    We have MinSU forever<br>
                    Bring the truth and wisdom fore<br>
                    Our unyielding spirits soar<br><br>
    
                    A humble few, to till the land<br>
                    Wishing all the world could share<br>
                    It's our goal, to shape and teach<br>
                    Every willing arms to reach.<br><br>
    
                    (Refrain)<br>
                    We have planted all the seeds,<br>
                    And the yield are all our dreams<br>
                    Reaching with our might<br>
                    Even through the night<br>
                    We have MinSU in our hearts.<br><br>
    
                    Let us sing our blessed hymn<br>
                    Making MinSU our true home<br>
                    Throughout the world our feet will tread<br>
                    But our hearts would stay instead<br><br>
    
                    (Repeat Refrain)<br>
                    Reaching with our might<br>
                    Even through the night<br>
                    We have MINSU in our hearts.
                </p>
            </div>
        </transition>

        <!-- See Lyrics Button -->
        <button @click="toggleLyrics" class="btn minsu-green text-white mt-4">
            {{ showLyrics ? 'Hide Lyrics' : 'See Lyrics' }}
        </button>
    </div>

    <!-- President's corner + social -->
    <div class="container-fluid minsu-green d-flex flex-column align-items-center justify-content-center" style="height: 75vh; position: relative; overflow: hidden;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100"
            style="position: absolute; top: 0; left: 0; width: 100%; height: auto; z-index: 1; pointer-events: none;">
            <g fill="#F8F9FE">
                <path d="M0 1v99c134.3 0 153.7-99 296-99H0Z" opacity=".5"></path>
                <path d="M1000 4v86C833.3 90 833.3 3.6 666.7 3.6S500 90 333.3 90 166.7 4 0 4h1000Z" opacity=".5"></path>
                <path d="M617 1v86C372 119 384 1 196 1h421Z" opacity=".5"></path>
                <path d="M1000 0H0v52C62.5 28 125 4 250 4c250 0 250 96 500 96 125 0 187.5-24 250-48V0Z"></path>
            </g>
        </svg>

        <div class="container d-flex justify-content-between flex-nowrap pt-8">

        <!-- President's Corner -->
            <div class="px-3 pt-3 pres-bg rounded shadow-sm d-flex mr-2" style="width: 65%; position: relative;">

                <!-- Image -->
                <div class="image-container mr-1"></div>
                <img src="/template/images/president_apostol.png" alt="President Apostol" class="pres-image mx-auto">

                <!-- Articles -->
                <div class="ml-auto glassy mb-3 px-3" style="max-width: 45%; z-index: 100">
                    <h6 class="pres-title text-center pb-2">PRESIDENT’S CORNER</h6>

                    <div v-for="(article, index) in truncatedArticles" :key="index">
                        <p class="pres-title pt-1">{{ article.title }}</p>
                        <p class="pres-date pb-1"> {{ article.summary }}
                            <a :href="article.link" class="text-minsu-green" target="_blank">Read more</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Facebook Post View -->
            <div class="pres-bg p-1 rounded shadow-sm d-flex flex-column align-items-center justify-content-center overflow-scroll" style="width: 37%;">
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FTheMinSUOfficial%2Fposts%2Fpfbid0c71iUcyqZmUEns57NcHacyBdrMDUFBQyML2AroqKkhtJP5CMYctngDe97g3yqcUYl&show_text=true&width=500"
                        width="100%" height="100%" style="border:none;overflow:auto" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
            </div>
        </div>
    </div>

    <!-- Footer Space -->
    <footer class="container-fluid footer-bg pt-4">
        <div class="container">
            <div class="row">
                <!-- Left Column -->
                <div class="col-md-7">
                    <p class="fw-bold text-uppercase mb-3 minsu-name-footer">
                        Mindoro State University
                    </p>
                    <p class="no-line-height">Address: Alcate, Victoria, Oriental Mindoro 5205 Philippines</p>
                    <p class="no-line-height">Phone: +63-977-846-7228</p>
                    <p class="no-line-height">Email: universitypresident@minsu.edu.ph</p>

                    <div class="row mt-4">
                        <div class="col-4">
                            <h3 class="fw-bold text-minsu-green">Quick Links</h3>
                            <ul class="list-unstyled">
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="/about">
                                        About MinSU
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="/about">
                                        Admission
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="/about">
                                        Academic Programs
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="/about">
                                        FAQs
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-4">
                            <h3 class="fw-bold text-minsu-green">Online Services</h3>
                            <ul class="list-unstyled">
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        SIS for Student
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        SIS for Faculty
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="https://mmc-enrollment.minsu.edu.ph/">
                                        Enrollment System
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        Document Request System
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        Hashouts
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-4">
                            <h3 class="fw-bold text-minsu-green">Downloads</h3>
                            <ul class="list-unstyled">
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        For Students
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        For Faculties
                                    </a>
                                </li>
                                <li class="footer-link">
                                    <a class="d-flex align-items-center" target="_blank" href="#">
                                        Publications
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Circle placeholders -->
                    <div class="d-flex justify-content-between mt-1 minsu-green p-3 px-5 rounded mr-5">
                        <div class="rounded-circle bg-light" style="width: 120px; height: 120px;"></div>
                        <div class="rounded-circle bg-light" style="width: 120px; height: 120px;"></div>
                        <div class="rounded-circle bg-light" style="width: 120px; height: 120px;"></div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-md-3">
                    <div class="row">
                        <div class="row">
                            <h6 class="fw-bold">CONNECT WITH US!</h6>
                            <div class="d-flex align-items-center">
                                <a href="https://www.facebook.com/TheMinSUOfficial" class="text-minsu-green">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" style="height: 4rem;">
                                        <path fill="#01752D" height="auto" width="auto" d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131c.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                    </svg>
                                </a>
                                
                                <a href="https://www.instagram.com/TheMinSUOfficial" class="text-minsu-green px-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" style="height: 4rem;">
                                        <path fill="#01752D" height="auto" width="auto" d="M8 0C5.829 0 5.556.01 4.703.048C3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7C.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297c.04.852.174 1.433.372 1.942c.205.526.478.972.923 1.417c.444.445.89.719 1.416.923c.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417c.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046c.78.035 1.204.166 1.486.275c.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485c.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598c-.28.11-.704.24-1.485.276c-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598a2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485c-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486c.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276c.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92a.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217a4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334a2.667 2.667 0 0 1 0-5.334"/>
                                    </svg>
                                </a>
                                <a href="https://www.youtube.com/@TheMinSUOfficial" class="text-minsu-green">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" style="height: 5.5rem;">
                                        <path fill="#01752D" height="auto" width="auto" d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104l.022.26l.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105l-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006l-.087-.004l-.171-.007l-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103l.003-.052l.008-.104l.022-.26l.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007l.172-.006l.086-.003l.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <a href="https://www.lbp-eservices.com/egps/portal/Merchants.jsp" title="Pay Online with LinkBiz MinSU Merchant" target="_blank">
                                <img src="/template/images/linkbiz.png" alt="LinkBiz MinSU Merchant" class="" style="height: 150px; width: full;" />
                            </a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="/template/images/mis-qr.png" alt="MiS QR Code" class="rounded" style="height: 120px;" />
                            <p class="small pl-2" style="font-weight: bold;">Send us your feedback!</p>
                        </div>
                    </div>
                </div>

                <!-- Logos -->
                <div class="col-md-2">
                    <img src="/template/images/responsive-logo.png" alt="MinSU Logo" style="height: 155px;" />
                    <img src="/template/images/responsive-logo.png" alt="MinSU Logo" style="height: 155px;" />
                    <img src="/template/images/responsive-logo.png" alt="MinSU Logo" style="height: 155px;" />
                </div>
            </div>

            <div class="row text-center">
                <p class="text-center mt-3 col-6">Developed and Maintained by MinSU MIS Office</p>
                <p class="text-center mt-3 col-6">Copyright All Rights Reserved © 2025</p>
            </div>
        </div>
    </footer>
</template>

<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'animate.css';

export default {
    name: "PageLayout",
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        colleges: Array,
        announcements: Array,
        events: Object,
        news_featured: {
            type: Object,
            default: () => null
        },
        news: Array
    },
    mounted() {   
        setTimeout(() => {
            this.showMessage = false;
        }, 10000); // 10 seconds
    },
    data() {
        return {
            isChatbotVisible: false,
            showMessage: true,
            messages: [],
            userInput: '',
            isTyping: false,
            chatbotBody: null,
            isCarouselVisible: false,
            isHovered: false,
            showLyrics: false,
            modules: [Navigation, Pagination, Autoplay],
            navData: {
                aboutMinsu: {
                    title: "About Minsu",
                    data: [
                        { title: 'University Profile', link: '/about' },
                        { title: 'VMGO', link: '/about/vmgo' },
                        { title: 'History', link: '/about/history' },
                        { title: 'Logo and Symbol', link: '#' },
                        { title: 'Hymn', link: '/about/hymn' },
                        { title: 'Awards and Recognition', link: '#' },
                        { title: 'Maps', link: '#' },
                        { title: 'Campuses', link: '#' },
                        { title: 'Facilities', link: '#' },
                        { title: 'Manuals', link: '#' },
                        { title: 'Organizational Structure', link: '#' },
                        {
                            title: 'Administrations',
                            submenu: [
                                { title: 'Office of the President', link: '/administration/office-of-the-president' },
                                { title: 'Office of the Vice Presidents', link: '#' },
                                { title: 'Directors', link: '#' },
                            ]
                        },
                        { title: 'Contact Us', link: '#' },
                    ]
                },
                academic: {
                    title: 'Academics',
                    data: [
                        { title: 'Academic Programs', link: '/academics/programs' },
                        { title: 'Graduate Studies', link: 'https://minsugradschool.minsu.edu.ph' },
                        { title: 'Laboratory High School', link: '#' },
                        { title: 'Quality Assurance', link: '#' },
                        { title: 'Flexible Learning', link: '#' },
                    ]
                },
                students: {
                    title: 'Students',
                    data: [
                        { title: 'Campus Life', link: '/academics/students' },
                        {
                            title: 'Student Services',
                            submenu: [
                                { title: 'Student Portal (Student/Faculty)', link: '/students/portal' },
                                { title: 'Scholarship', link: '/students/scholarship' },
                                { title: 'Document Processing', link: '/students/documents' },
                                { title: 'Student Organization', link: '/students/organizations' },
                                { title: 'Hashouts/Quora', link: '/students/hashouts' },
                            ]
                        },
                        { title: 'Academic Calendar', link: '/students/calendar' },
                        { title: 'Student Handbook', link: '/students/handbook' },
                        { title: 'Admission', link: '/academics/admission' },
                        { title: 'Registrar', link: '/academics/offices/office-of-the-registrar' },
                        { title: 'Library', link: 'https://library.minsu.edu.ph/' },
                        { title: 'Online Document Request System', link: '#' },
                        { title: 'Clinic', link: '#' },
                        { title: 'Guidance & Counceling', link: '#' },
                        { title: 'FAQs', link: '#' },
                    ]
                },
                rndExtension: {
                    title: 'R & D Extension',
                    data: [
                        { title: 'Researches', link: '#' },
                        { title: 'Extension', link: '#' },
                        { title: 'Indigenous People (IP)', link: '#' },
                        { title: 'Strategic Foresight and Innovation', link: '#' },
                        { title: 'Online Journal System', link: '#' },
                        { title: 'Thesis and Dissertation Manual', link: '#' },
                    ]
                },
                internationalization: {
                    title: 'Internationalization',
                    data: [
                        { title: 'International Affiliations', link: '#' },
                        { title: 'Programs', link: '#' },
                    ]
                },
                alumni: {
                    title: 'Alumni',
                    data: [
                        { title: 'Stories', link: '#' },
                        { title: 'Tracer`s Slip', link: 'https://forms.office.com/pages/responsepage.aspx?id=VtLh9StUoUu28ySa5gp0xRaBkVopzRhMqCtc41uhx2pURTlITUZLMFpPVzJRRTlRWFBZT0k4WjNISS4u' },
                    ]
                },
                downloads: {
                    title: 'Downloads',
                    link: '/services/downloadables',
                },
            },
            campuses: [
                { name: "Main Campus", img: "/template/images/mmc.png" },
                { name: "Calapan Campus", img: "/template/images/mcc.png" },
                { name: "Bongabong Campus", img: "/template/images/mbc.png" }
            ],
            subImages: [
                '/template/images/sdg-3.jpg',
                '/template/images/sdg-9.jpg',
                '/template/images/sdg-11.jpg',
            ],
            highlights: [
                { title: 'Alamo Tops', summary: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod...' },
                { title: 'MinSU Launches', summary: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod...' }
            ],
            articles: [
                {
                    title: "Travel in Japan",
                    summary: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod...",
                    link: "#"
                },
                {
                    title: "MinSU Launches",
                    summary: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod...",
                    link: "#"
                },
                {
                    title: "Beyond...",
                    summary: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod...",
                    link: "#"
                },
                {
                    title: "Beyond...",
                    summary: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod...",
                    link: "#"
                }
            ],
            projects: [
                {
                    title: "GADLY",
                    image: "/template/images/responsive-logo.png",
                    description: "Students from Mindoro State University (MinSU) have launched GADLY, an innovative tool designed to promote gender-inclusive communication.",
                    link: "https://minsu.edu.ph/news/details/134",
                },
                {
                    title: "SDG Center",
                    image: "/template/images/responsive-logo.png",
                    description: "Mindoro State University Sustainable Development Goal (SDG) Center, a dedicated hub for promoting sustainable practices and initiatives within our academic community.",
                    link: "https://sdg.minsu.edu.ph/",
                },
                {
                    title: "MinSU i-BIBES",
                    image: "/template/images/responsive-logo.png",
                    description: "MinSU IBIBES aims to assist students, researchers, alumni, and entrepreneurs in producing innovative biosystems solutions.",
                    link: "https://ibibes.minsu.edu.ph/",
                },
                {
                    title: "CALAMINSU",
                    image: "/template/images/responsive-logo.png",
                    description: "CalaMinSU Project, a pioneering community-based initiative aimed at revitalizing the calamansi industry and restoring it as a vital source of livelihood for local farmers.",
                    link: "https://minsu.edu.ph/news/details/135"
                },
                {
                    title: "MOSES",
                    image: "/template/images/responsive-logo.png",
                    description: "The Project MOSES uses a streamlined architecture to collect and deliver precise environmental data. ",
                    link: "https://projectmoses.io/"
                },
            ],
        }
    },
    methods: {
        toggleChatbot() {
            this.isChatbotVisible = !this.isChatbotVisible;
            if (this.isChatbotVisible) {
                this.showMessage = false;
            }
        },
        sendMessage() {
            const text = this.userInput.trim()
            if (!text) return

            this.messages.push({ sender: 'user', text: text })
            this.userInput = ''
            this.isTyping = true

            this.scrollToBottom()

            setTimeout(() => {
                this.isTyping = false
                this.messages.push({ sender: 'bot', text: this.getBotResponse(text) })

                this.$nextTick(() => {
                    this.scrollToBottom()
                })
            }, 1500)
        },
        getBotResponse(userText) {
            const text = userText.toLowerCase()
            if (text.includes('faq') || text.includes('frequently')) {
                return '📚 <b>Common Questions:</b><br>- Enrollment Requirements<br>- Tuition Fee Info<br>- Enrollment Period Dates'
            } else if (text.includes('enrollment') || text.includes('enroll')) {
                return '📝 <b>Enrollment Help:</b> Visit our <a href="#">Enrollment Portal</a> or email registrar@[school].edu.'
            } else if (text.includes('department') || text.includes('connect')) {
                return '🏛️ <b>Departments:</b> Registrar, Accounting, IT Helpdesk, Admissions.'
            } else if (text.includes('technical') || text.includes('it support')) {
                return '💻 <b>Tech Support:</b> Email helpdesk@[school].edu or call (043) 123-4567.'
            } else if (text.includes('tuition')) {
                return '💸 <b>Tuition Fees:</b> Vary by course. Average: ₱XX,XXX. Details <a href="#">here</a>.'
            } else if (text.includes('requirement')) {
                return '📋 <b>Requirements:</b> Form 138, Birth Certificate, 2x2 ID Photos.'
            } else if (text.includes('period')) {
                return '🗓 <b>Enrollment Period:</b> Starts June yearly.'
            } else {
                return '🤖 <b>Sorry!</b> I\'m still learning. Please use the menu or type a keyword like "enrollment" or "faq".'
            }
        },
        scrollToBottom() {
            this.$nextTick(() => {
                const el = this.$refs.chatbotBody;
                if (el) {
                    el.scrollTop = el.scrollHeight;
                }
            });
        },
        truncate(text, maxLength = 75) {
            if (!text) return '';
            if (text.length > maxLength) {
                return text.slice(0, maxLength).trim() + '...';
            }
            return text;
        },
        getTruncatedHighlights() {
            return this.highlights.map(item => {
                return {
                    ...item,
                    summary: this.truncate(item.summary)
                };
            });
        },
        stripTags(html) {
            const div = document.createElement("div");
            div.innerHTML = html;
            return div.textContent || div.innerText || "";
        },
        toggleCarousel() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
            this.isCarouselVisible = !this.isCarouselVisible;
        },
        toggleLyrics() {
            this.showLyrics = !this.showLyrics;
        },
    },
    computed: {
        truncatedArticles() {
            return this.articles.map(article => ({
                ...article,
                summary: this.truncate(article.summary)
            }));
        },
    }
};
</script>

<style scoped>
@import url('https://fonts.googleapis.com/icon?family=Material+Icons');
.minsu-name {
    font-family: 'Times New Roman', Times, serif;
    color: #FAD12D;
    text-shadow: 1px 1px 2px #000;
    font-size: 32pt;
    line-height: 1;
}

.minsu-name-footer {
    font-family: 'Times New Roman', Times, serif;
    color: #01752D;
    font-weight: bolder;
    font-size: 2rem;
    line-height: 1;
}

.minsu-green {
    background-color: #01752D !important;
}

.gradient-minsu-green {
    background: linear-gradient(to top, #01752D, #333333 );
}

.pres-bg {
    position: relative !important;
    overflow: visible !important;
    z-index: 1;
    background-color: #EBE3D0 !important;
}

.minsu-yellow {
    background-color: #FAD12D !important;
}

.text-minsu-green {
    color: #01752D;
}

.tagline {
    font-weight: bolder;
    letter-spacing: 3px;
}

.custom-search {
    position: relative;
    width: 200px;
}

.custom-search .material-icons {
    position: absolute;
    top: 50%;
    left: 12px;
    transform: translateY(-50%);
    color: #6c757d;
    pointer-events: none;
    font-size: 18px;
}

.custom-search input {
    width: 100%;
    padding-left: 2.2rem;
    border-radius: 50px; /* rounded pill shape */
    border: 1px solid green; /* green solid border */
    height: 32px; /* optional: adjust height */
    font-size: 0.875rem; /* optional: make text smaller */
}

.custom-dark-bg {
    background-color: #6c757d;
}

.vid-bg {
    position: relative;
    height: 75vh;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.vid-bg video {
    position: absolute;
    /* top: 50%;
    left: 50%; */
    min-width: 100%;
    min-height: 100%;
    /* transform: translate(-50%, -50%) scale(0.5); */
    object-fit: cover;
    z-index: 0;
    pointer-events: none;
}

.vid-bg > * {
    position: relative;
    z-index: 1;
}

/* Fade-slide animation */
.fade-slide-enter-active,
.fade-slide-leave-active {
    transition: opacity 0.4s ease, transform 0.4s ease;
}

.fade-slide-enter-from,
.fade-slide-leave-to {
    opacity: 0;
    transform: translateY(10px);
}

/* Logo button styling */
.toggle-logo-btn {
    padding: 0.4rem;
    border-radius: 50%;
    cursor: pointer;
}

.toggle-logo-img {
    width: 3.5rem !important;
    height: 3.5rem !important;
    object-fit: contain;
    padding: 2px;
    background-color: #e0e0e0;
    border-radius: 100%;
}

/* Container with smooth expand */
.transition-container {
    width: 4rem;
    height: 4rem;
    transition: width 0.3s ease;
    overflow: hidden;
    white-space: nowrap;
    align-content: center;
}

/* Expand on hover */
.transition-container:hover {
    width: 14rem;
    border-radius: 50px;
    background-color: #ffffffd5;
}

/* Label styling */
.hover-label {
    margin-left: 9px;
    font-weight: bold;
    font-size: 11pt;
    opacity: 1;
    z-index: 100;
    transition: opacity 0.2s ease 0.1s;
}

.project-img {
    width: 5rem;
    height: 5rem;
    object-fit: cover;
}

.project-desc {
    line-height: 1.1;
    color: #313638;
}

.bg-opacity-green {
    background-color: #01752ea1;
}

a {
    font-weight: medium;
    padding: 1rem 0;
    margin: 0 !important;
}

.nav-item:hover .dropdown-menu,
.nav-item .dropdown-menu:hover {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    transition: opacity 0.8s ease-in-out, visibility 0.8s ease-in-out;
}

.dropdown-menu {
    display: none;
    pointer-events: auto;
    background-color: rgba(255, 255, 255, 0.7);
    opacity: 0;
    margin: 0 !important;
    padding: 0 !important;
    visibility: hidden;
}

.no-line-height {
    line-height: 0.25 !important;
}

/* Submenu container */
.dropdown-submenu {
    position: relative;
    transition: all 0.3s ease;
}

/* Right-side submenu */
.dropdown-submenu > .dropdown-submenu-items {
    top: 0;
    left: 100%;
    display: none;
    background-color: rgba(255, 255, 255, 0.7);
    position: absolute;
}

/* Show on hover */
.dropdown-submenu:hover > .dropdown-submenu-items {
    display: block;
}

.navbar-nav,
.navbar-nav * {
    border-radius: 0 !important;
}

.dropdown-item {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

/* CHATBOT STYLES */
.message {
    margin: 8px 0;
    padding: 10px;
    border-radius: 12px;
    max-width: 75%;
    word-wrap: break-word;
}

.bot-message {
    align-self: flex-start;
    background: #e0e0e0;
    color: #333;
    position: relative;
}

.user-message {
    align-self: flex-end;
    background: #01752D;
    color: #ddd;
    position: relative;
}

.typing-indicator {
    position: relative;
    margin: 5px 0;
}

.dot {
    display: inline-block;
    width: 6px;
    height: 6px;
    margin-left: 2px;
    background-color: #333;
    border-radius: 50%;
    animation: typing 1.5s infinite;
}

.dot:nth-child(2) {
    animation-delay: 0.3s;
}

.dot:nth-child(3) {
    animation-delay: 0.6s;
}

@keyframes typing {
    0% { opacity: 0; }
    50% { opacity: 1; }
    100% { opacity: 0; }
}

.site-bg {
    background: url('/template/images/site-bg.jpg') no-repeat center center fixed;
    background-size: cover;
}

.lyrics-wrapper {
    overflow-y: auto;
    padding-right: 1rem;
    text-align: left;
}

.lyrics-text {
  column-count: 2;
  column-gap: 2rem;
  font-size: 1rem;
  line-height: 1.6;
  text-align: left;
  white-space: normal;
}

/* Announcements Styles */
.announcement-item {
    padding: 10px;
}

.announcement-item:hover {
    border-radius: 10px;
    background-color: #008332;
    cursor: pointer;
}

.ann-title {
    font-weight: bold;
    margin: 0;
    font-size: 12pt;
    color: #fefefe !important;
}

.ann-desc {
    margin: 0;
    font-size: 9pt;
    color: #fefefe !important;
}

.highlight-title {
    font-weight: bold;
    margin: 0;
    font-size: 12pt;
    color: #313638 !important;
}

.highlight-desc {
    margin: 0;
    font-size: 9pt;
    color: #313638 !important;
}

.pres-title {
    font-weight: bold;
    margin: 0;
    font-size: 12pt;
    color: #313638 !important;
}

.pres-date {
    margin: 0;
    font-size: 9pt;
    color: #313638 !important;
}

.glassy {
    padding: 10px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.headline-title {
    font-size: 24pt;
    font-weight: bolder;
    line-height: 1; /* or 1.1, 1.2 if you want a little breathing room */
    margin-top: 0;
    margin-bottom: 0;
}

.content-details {
    font-size: 11pt;
    line-height: 1.1; /* or 1.1, 1.2 if you want a little breathing room */
    margin-top: 1rem;
    margin-bottom: 1rem;
}

.section-name {
    font-size: 24pt;
    font-family: 'Times New Roman', Times, serif;
    line-height: 1;
}

.campus-cards {
    display: flex;
    justify-content: center;
    gap: 1rem;
    flex-wrap: nowrap;
}

.campus-card {
    width: 23vw;
    text-align: center;
    flex: 0 0 33.33%;
}

.thumbnail {
    width: 100%;
    height: 25vh;
    background-color: #ddd;
    border: 1px solid #aaa;
    margin-bottom: 0.5rem;
    overflow: hidden;
    width: 100%;
}

.thumbnail img {
    transition: transform 0.3s ease-in-out;
}

.thumbnail:hover img {
    transform: scale(1.1); /* zoom in */
    cursor: pointer;
}

.footer-bg {
    background: linear-gradient(to bottom, #E4EEF3, #EAE8D6);
}

.image-container {
    position: relative;
    height: fit-content;
    overflow: visible;
    display: flex;
    align-items: flex-end; /* anchor image to bottom */
}

.pres-image {
    height: 50vh; /* slightly taller to overflow */
    position: absolute;
    bottom: 0; /* stick to bottom of container */
    z-index: -100;
}

/* minsu Hymn styles */
@media (min-width: 768px) and (max-width: 991.98px) {
    .video-wrapper {
        height: 50vh !important;
    }
}

@media (max-width: 767.98px) {
    .video-wrapper {
        height: 35vh !important;
    }
}

.message-tail {
    position: absolute;
    bottom: -3px;
    right: 1.7rem;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 8px solid white;
}

/* All slides - same size */
.custom-swiper .swiper-slide {
    opacity: 1;
    transition: transform 0.5s cubic-bezier(0.25, 0.8, 0.25, 1), filter 0.5s ease, box-shadow 0.5s ease;
    filter: blur(2px) grayscale(20%);
    z-index: 10;
    transform: scale(0.85);
}

/* Active slide - clear and lifted, same size */
.custom-swiper .swiper-slide-active {
    filter: none;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
    z-index: 100;
    transform: scale(1.2); /* Ensure smooth scaling */
}

/* Side slides (previous/next) - blurred but visible */
.custom-swiper .swiper-slide-prev,
.custom-swiper .swiper-slide-next {
    filter: blur(2px) grayscale(30%);
    z-index: 5;
    transform: scale(1); /* Maintain size of side slides */
}

/* Optional: Improve slide consistency */
.project-card {
    height: 100%;
    min-height: 280px; /* Adjust based on your layout */
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Footer */
.footer-link {
    font-size: 11pt !important;
}

.footer-link a {
    /* line-height: 0.9 !important; */
    color: #313638 !important;
    text-decoration: none !important;
    font-weight: lighter !important;
    margin: 0 !important;
    padding: 0 !important;
}

.vignette-top {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 45vh; /* adjust as needed */
    background: linear-gradient(to bottom, rgba(255, 255, 255, 0.5), transparent);
    z-index: 1;
    pointer-events: none;
}

.text-shadow-black {
    color: white; /* text color */
    text-shadow: 3px 3px 5px #000000; /* black shadow with 5px blur */
}

</style>
