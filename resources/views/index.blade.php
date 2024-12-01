@extends('layouts.base')

@section('title', 'Welcome Home.')

@section('content')



<div class="parallax-container animate-scale-in">
    <img src='/img/everything/bg.webp' class="parallax-layer layer-0" data-parallax-speed="0.05"
        data-max-scroll="1300"></img>
    <img src='/img/everything/bgfront.webp' class="parallax-layer layer-1" data-parallax-speed="0.3"
        data-max-scroll="1300"></img>
    <img src='/img/everything/lowmid.webp' class="parallax-layer layer-2" data-parallax-speed="0.7"
        data-max-scroll="1300"></img>
    <img src='/img/everything/mid.webp' class="parallax-layer layer-4" data-parallax-speed="1.5"
        data-max-scroll="1300"></img>
    <img src='/img/everything/top.webp' class="parallax-layer layer-5" data-parallax-speed="2"
        data-max-scroll="1300"></img>
</div>


<div class="bg-dark border-t-2 border-light text-light px-2 object-cover shadow-3xl">
    <h1
        class="font-bebas uppercase lg:text-[clamp(0px,10vw,100px)] text-[clamp(0px,15vw,200px)] text-nowrap text-center">
        I make
        everything.</h1>

</div>


<div class="w-full bg-dark  flex items-center justify-center">

    <div class="social-links text-light flex lg justify-between w-[500px] p-5">
        <a href="https://www.youtube.com/c/literalhat" target="_blank" title="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.3" stroke-linecap="butt" stroke-linejoin="miter">
                <path
                    d="M22.54 6.42A2.78 2.78 0 0 0 20.77 5C18.88 4.56 12 4.56 12 4.56s-6.88 0-8.77.44a2.78 2.78 0 0 0-1.77 1.42 29.88 29.88 0 0 0 0 11.16A2.78 2.78 0 0 0 3.23 19c1.89.44 8.77.44 8.77.44s6.88 0 8.77-.44a2.78 2.78 0 0 0 1.77-1.42 29.88 29.88 0 0 0 0-11.16Z">
                </path>
                <polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"></polygon>
            </svg>
        </a>

        <a href="https://www.instagram.com/literalhat" target="_blank" title="Instagram">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.3" stroke-linecap="butt" stroke-linejoin="miter">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37a4 4 0 1 1-4.63-4.24 4 4 0 0 1 4.63 4.24z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
        </a>

        <a href="https://www.twitter.com/literalhat" target="_blank" title="Twitter">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.3" stroke-linecap="butt" stroke-linejoin="miter">
                <path
                    d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                </path>
            </svg>
        </a>

        <a href="https://literalhat.bandcamp.com" target="_blank" title="Bandcamp">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.3" stroke-linecap="butt" stroke-linejoin="miter">
                <polygon points="3.29 17.34 9.17 6.66 20.71 6.66 14.83 17.34 3.29 17.34"></polygon>
            </svg>
        </a>

        <a href="https://patreon.com/literalhat" target="_blank" title="Patreon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="-10 -10 300 300"
                stroke="currentColor" stroke-width="15" stroke-linecap="butt" fill="none" stroke-linejoin="miter">
                <path
                    d="M45.136 0v246.35H0V0zm118.521 0C214.657 0 256 41.343 256 92.343s-41.343 92.343-92.343 92.343s-92.343-41.344-92.343-92.343S112.658 0 163.657 0" />
            </svg>
        </a>

    </div>



</div>



<style>
    .parallax-container {
        position: relative;
        overflow: hidden;
        z-index: -20;
        height: calc(100vh - 90px);
    }

    .parallax-layer {
        object-fit: cover;
        height: 100%;
        width: 100vw;
        position: absolute;
        object-position: 50% 50%;
    }

    .layer-0 {
        z-index: 1;
        height: 110%;
    }

    .layer-1 {
        z-index: 2;
        height: 120%;
    }

    .layer-2 {
        z-index: 3;
        height: 130%;
    }

    .layer-4 {
        z-index: 4;
        height: 160%;
    }

    .layer-5 {
        z-index: 5;
        height: 180%;
    }
</style>


<script>


    var ParallaxManager, ParallaxPart;

    ParallaxPart = (function () {
        function ParallaxPart(el) {
            this.el = el;
            this.speed = parseFloat(this.el.getAttribute('data-parallax-speed'));
            this.maxScroll = parseInt(this.el.getAttribute('data-max-scroll'));
        }

        ParallaxPart.prototype.update = function (scrollY) {
            if (scrollY > this.maxScroll) { return; }
            var offset = -(scrollY * this.speed);
            this.setYTransform(offset);
        };

        ParallaxPart.prototype.setYTransform = function (val) {
            this.el.style.webkitTransform = "translate3d(0, " + val + "px, 0)";
            this.el.style.MozTransform = "translate3d(0, " + val + "px, 0)";
            this.el.style.OTransform = "translate3d(0, " + val + "px, 0)";
            this.el.style.transform = "translate3d(0, " + val + "px, 0)";
            this.el.style.msTransform = "translateY(" + val + "px)";
        };

        return ParallaxPart;

    })();

    ParallaxManager = (function () {
        ParallaxManager.prototype.parts = [];

        function ParallaxManager(elements) {
            if (Array.isArray(elements) && elements.length) {
                this.elements = elements;
            }
            if (typeof elements === 'object' && elements.item) {
                this.elements = Array.prototype.slice.call(elements);
            } else if (typeof elements === 'string') {
                this.elements = document.querySelectorAll(elements);
                if (this.elements.length === 0) {
                    throw new Error("Parallax: No elements found");
                }
                this.elements = Array.prototype.slice.call(this.elements);
            } else {
                throw new Error("Parallax: Element variable is not a querySelector string, Array, or NodeList");
            }
            for (var i in this.elements) {
                this.parts.push(new ParallaxPart(this.elements[i]));
            }
            window.addEventListener("scroll", this.onScroll.bind(this));
        }

        ParallaxManager.prototype.onScroll = function () {
            window.requestAnimationFrame(this.scrollHandler.bind(this));
        };

        ParallaxManager.prototype.scrollHandler = function () {
            var scrollY = Math.max(window.pageYOffset, 0);
            for (var i in this.parts) { this.parts[i].update(scrollY); }
        };

        return ParallaxManager;

    })();

    new ParallaxManager('.parallax-layer');


</script>

@endsection