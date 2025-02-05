
// ปุ่มเพื่อเปิด/ปิดเมนูภาษา
document.addEventListener("DOMContentLoaded", function () {
    const langButton = document.getElementById("open-submenu"); // ปุ่มเปิด/ปิดเมนู
    const langMenu = document.getElementById("submenu"); // เมนูภาษาที่จะเปิด/ปิด
    const arrowIcon = document.getElementById("arrow-up"); // ไอคอนลูกศร

    langButton.addEventListener("click", function (event) {
        event.stopPropagation();
        langMenu.classList.toggle("hidden"); // ซ่อน/แสดงเมนู
        langMenu.classList.toggle("scale-100"); // ขยายเมนู
        arrowIcon.classList.toggle("rotate-180"); // หมุนลูกศร
    });

    document.addEventListener("click", function (event) {
        if (!langButton.contains(event.target) && !langMenu.contains(event.target)) {
            langMenu.classList.add("hidden");
            langMenu.classList.remove("scale-100");
            arrowIcon.classList.remove("rotate-180");
        }
    });
});


const navbar = document.getElementById("navbar");

// ตรวจจับการเลื่อนหน้า
window.addEventListener("scroll", () => {
    if (window.scrollY > 30) {
        // เมื่อเลื่อนลง
        navbar.classList.add("bg-[#03203E]/90", "backdrop-blur-lg", "shadow-md", "top-0" );
        navbar.classList.remove("bg-[#03203E]/50" , "backdrop-blur-sm");

    } else {
        // เมื่อเลื่อนขึ้น
        navbar.classList.remove("bg-[#03203E]/90", "backdrop-blur-lg", "shadow-md", "top-0");
        navbar.classList.add("bg-[#03203E]/50" , "backdrop-blur-sm");
    }
});