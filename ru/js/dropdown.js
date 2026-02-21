const svgIconLanguage = document.querySelector('.svg--gray-language');
const svgIcon = document.querySelector('.svg--gray-drop');

document.getElementById('language-btn').onclick = function () {
    document.getElementById('languageDropdown').classList.toggle('visible-box');
    svgIconLanguage.classList.toggle('visible');
}

function openDropdown() {
    document.getElementById("myDropdownPhone").classList.toggle("show");
    svgIcon.classList.toggle("visible");
}

window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            if (svgIcon.classList.contains('visible')) {
                svgIcon.classList.remove('visible');
            }
        }
    }
}


const smoothLinks = document.querySelectorAll('a[href^="#"]');

for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
}
	