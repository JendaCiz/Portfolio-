document.addEventListener("DOMContentLoaded", function() {
    const text = "Jsem začínající IT specialista a programátor s vášní pro technologii. I když jsem nováčkem v oboru, rychle se adaptuji a neustále se snažím zdokonalovat. Mým cílem je stát se uznávaným odborníkem v IT.";

    const typeEffectElement = document.getElementById("typeEffect");
    let i = 0;

    function typeLetter() {
        if (i < text.length) {
            typeEffectElement.textContent += text.charAt(i);
            i++;
            setTimeout(typeLetter, 50); 
        }
    }

    typeLetter();  
});
