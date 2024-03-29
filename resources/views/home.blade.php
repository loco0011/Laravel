<html>
    <head>
        <meta charset="UTF-8"/>

        <style>
            /* Variable definitions */
:root {
    --tiber: #09383E;
    --elephant: #0C383E;
    --white: #fff;
}

/* rem font sizing */
html { font-size: 62.5%; }
body { font-size: 1.4rem; } /* =14px */
h1 { font-size: 2.4rem; } /* =24px */

/* Container item */
.container__item {
    margin: 0 auto 40px;
}

/* Landing page container */
.landing-page-container {
    width: 100%;
    min-height: 100%;
    height: 90rem;
    background-image: url('https://s29.postimg.org/vho8xb2pj/landing_bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: bottom;
    overflow: hidden;
    font-family: 'Montserrat', sans-serif;
    color: var(--tiber);
}

/* Content wrapper */
.content__wrapper {
    max-width: 1200px;
    width: 90%;
    height: 100%;
    margin: 0 auto;
    position: relative;
}

/* Header */
.header {
    width: 100%;
    height: 2rem;
    padding: 4.5rem 0;
    display: block;
}

/* Menu icon */
.menu-icon {
    width: 2.5rem;
    height: 1.5rem;
    display: inline-block;
    cursor: pointer;
}

/* Header item */
.header__item {
    display: inline-block;
    float: left;
}

/* Menu icon line */
.menu-icon__line {
    width: 1.5rem;
    height: 0.2rem;
    background-color: var(--elephant);
    display: block;
}

.menu-icon__line:before,
.menu-icon__line:after {
    content: '';
    width: 1.5rem;
    height: 0.2rem;
    background-color: var(--elephant);
    display: inline-block;
    position: relative;
}

.menu-icon__line:before {
    left: 0.5rem;
    top: -0.6rem;
}

.menu-icon__line:after {
    top: -1.8rem;
}

/* Heading */
.heading {
    width: 90%;
    font-size: 2rem;
    font-weight: bold;
    margin: 0;
    line-height: 1.7rem;
    margin: 0 auto;
    text-align: center;
}

/* Social container */
.social-container {
    width: 7.25rem;
    list-style: none;
    overflow: hidden;
    padding: 0;
    margin: 0;
    float: right;
}

.social-container .social__icon {
    float: left;
    cursor: pointer;
}

.social-container .social__icon--dr {
    margin-left: 0.5rem;
}

.social-container .social__icon--in {
    margin-left: 0.75rem;
}

.social-container .social__icon--fb img {
    height: 2rem;
    margin: 0rem;
}

/* Coords */
.coords {
    font-size: 1rem;
    display: inline-block;
    transform: rotate(-90deg) translateY(50%);
    float: left;
    position: relative;
    top: 40%;
    letter-spacing: 0.2rem;
    left: -11.5rem;
    margin: 0;
}

/* Ellipses container */
.ellipses-container {
    width: 50rem;
    height: 50rem;
    border-radius: 50%;
    margin: 0 auto;
    position: relative;
    top: 10.5rem;
}

/* Greeting */
.ellipses-container .greeting {
    position: absolute;
    top: 11.6rem;
    left: 13rem;
    right: 0;
    margin: 0 auto;
    text-transform: uppercase;
    letter-spacing: 4rem;
    font-size: 2.2rem;
    font-weight: 400;
    opacity: 0.5;
}

.ellipses-container .greeting:after {
    content: '';
    width: 0.3rem;
    height: 0.3rem;
    border-radius: 50%;
    display: inline-block;
    background-color: var(--elephant);
    position: relative;
    top: -0.65rem;
    left: -5.05rem;
}
.greeting-name {
 position: absolute;
    top: 19.6rem;
    left: 10rem;
    right: 0;
    margin: 0 auto;
    text-transform: uppercase;
    letter-spacing: 2rem;
    font-size: 2.2rem;
    font-weight: 400;
    opacity: 0.5;
}

/* Ellipses */
.ellipses {
    border-radius: 50%;
    position: absolute;
    top: 0;
    border-style: solid;
}

.ellipses.ellipses__outer--thin {
    width: 100%;
    height: 100%;
    border-width: 1px;
    border-color: rgba(9, 56, 62, 0.1);
    animation: ellipsesOrbit 15s ease-in-out infinite;
}

.ellipses.ellipses__outer--thick {
    width: 99.5%;
    height: 99.5%;
    border-color: var(--tiber) transparent;
    border-width: 2px;
    transform: rotate(-45deg);
    animation: ellipsesRotate 15s ease-in-out infinite;
}

.ellipses.ellipses__orbit {
    width: 2.5rem;
    height: 2.5rem;
    border-width: 2px;
    border-color: var(--tiber);
    top: 5rem;
    right: 6.75rem;
}

.ellipses.ellipses__orbit:before {
    content: '';
    width: 0.7rem;
    height: 0.7rem;
    border-radius: 50%;
    display: inline-block;
    background-color: var(--tiber);
    margin: 0 auto;
    left: 0;
    right: 0;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

/* Scroller */
.scroller {
    width: 7.5rem;
    display: inline-block;
    float: right;
    position: relative;
    top: -15%;
    transform: translateY(50%);
    overflow: hidden;
}

.scroller .page-title {
    font-family: 'Playfair Display', serif;
    letter-spacing: 0.5rem;
    display: inline-block;
    float: left;
    margin-top: 1rem;
}

.scroller .timeline {
    width: 1.5rem;
    height: 9rem;
    display: inline-block;
    float: right;
}

.scroller .timeline .timeline__unit {
    width: 100%;
    height: 0.1rem;
    display: block;
    background-color: var(--elephant);
    margin: 0 0 2rem;
    opacity: 0.2;
}

.scroller .timeline .timeline__unit.timeline__unit--active {
    opacity: 1;
}

.scroller .timeline .timeline__unit.timeline__unit--active:after {
    opacity: 0.2;
}

.scroller .timeline .timeline__unit:after {
    content: '';
    width: 70%;
    height: 0.1rem;
    display: block;
    position: relative;
    float: right;
    background-color: var(--elephant);
    top: 1rem;
}

/* Keyframes */
@keyframes ellipsesRotate {
    0% {
        transform: rotate(-45deg);
    }
    100% {
        transform: rotate(-405deg);
    }
}

@keyframes ellipsesOrbit {
    0% {
        transform: rotate(0);
    }
    100% {
        transform: rotate(360deg);
    }
}

.menu-options {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center; /* Center align the menu options */
    position: absolute;
    top: 30px; /* Adjust top position as needed */
    right: 30px; /* Adjust right position as needed */
}

.menu-option {
    margin-left: 20px;
    cursor: pointer;
    font-size: 1.6rem;
    font-weight: bold;
    color: #333;
    transition: color 0.3s ease-in-out;
    position: relative; /* Add relative positioning */
}

.menu-option::after {
    content: '';
    position: absolute;
    bottom: -3px; /* Adjust highlight position as needed */
    left: 0;
    width: 100%;
    height: 2px;
    background-color: transparent;
    transition: background-color 0.3s ease-in-out;
}

.menu-option:hover {
    color: #007bff; /* Change color on hover */
}

.menu-option:hover::after {
    background-color: #007bff; /* Highlight effect on hover */
}

.menu-option:hover {
    transform: scale(1.1); /* Zoom effect on hover */
}

.menu-option:nth-child(1)::after,
.menu-option:nth-child(2)::after {
    background-color: #007bff; /* Initial highlight effect */
}
.menu-options a {
    text-decoration: none;
}

        </style>
    </head>

    <body>
        <div class="container">
            <div class="container__item landing-page-container">
                <div class="content__wrapper">

                 <header class="header">
    <div class="menu-icon header__item">
        <span class="menu-icon__line"></span>
    </div>

    {{-- <h1 class="heading header__item">D-UI</h1> --}}
<header>
    <ul class="menu-options header__item">
        <li class="menu-option">
            <a href="{{url('employee/employee')}}">Employee</a>
        </li>
         <li class="menu-option">
            <a href="{{url('employee/department')}}">Department</a>
        </li>
    </ul>
</header>


                    {{-- <p class="coords">Sambit Maity</p> --}}

                    <div class="ellipses-container">

                        <h2 class="greeting">Hello</h2>
                        <h2 class="greeting-name">I'm Sambit</h2>

                        <div class="ellipses ellipses__outer--thin">

                            <div class="ellipses ellipses__orbit"></div>

                        </div>

                        <div class="ellipses ellipses__outer--thick"></div>
                    </div>
{{-- 
                    <div class="scroller">
                        <p class="page-title">home</p>

                        <div class="timeline">
                            <span class="timeline__unit"></span>
                            <span class="timeline__unit timeline__unit--active"></span>
                            <span class="timeline__unit"></span>
                        </div>
                    </div> --}}
                </div>

            </div>

        </div>

    </body>
</html>
