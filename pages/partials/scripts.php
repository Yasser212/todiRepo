<script type="text/javascript">
let h = document.documentElement,
    b = document.body,
    st = "scrollTop",
    sh = "scrollHeight",
    progress = document.querySelector("#progress"),
    scroll;
let scrollpos = window.scrollY;
let header = document.getElementById("header");
let navcontent = document.getElementById("nav-content");
document.addEventListener("scroll", function() {
    scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
    progress.style.setProperty("--scroll", scroll + "%");
    scrollpos = window.scrollY;
    if (scrollpos > 10) {
        header.classList.add("bg-white");
        header.classList.add("shadow-xl");
        navcontent.classList.remove("bg-gray-50");
        navcontent.classList.add("bg-white")
    } else {
        header.classList.remove("bg-white");
        header.classList.remove("shadow-xl");
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-50")
    }
});
</script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>