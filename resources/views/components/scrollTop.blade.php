<button id="scrollTopBtn"
    class="fixed bottom-5 flex items-center justify-center right-5 hover:scale-120 transition-all bg-primary-600 text-white px-4  h-14 w-14  rounded-full opacity-0 cursor-pointer duration-300">
    <i class="ph ph-arrow-up m-auto"></i>
</button>
<script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

    // Tampilkan tombol saat user scroll ke bawah
    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            scrollTopBtn.classList.remove("opacity-0");
            scrollTopBtn.classList.add("opacity-100");
        } else {
            scrollTopBtn.classList.remove("opacity-100");
            scrollTopBtn.classList.add("opacity-0");
        }
    });

    // Scroll ke atas saat tombol diklik
    scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
</script>
