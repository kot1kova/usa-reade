new Swiper('.reviews-slider', {
	loop: true,
	slidesPerView: 1,
	breakpoints: {
		375: {
			spaceBetween: 10,
		},
		425: {
			spaceBetween: 30,
		},

		768: {
			slidesPerView: 1,
			spaceBetween: 40,
		},
		769: {
			slidesPerView: 2,
			spaceBetween: 40,
		},
		1024: {
			slidesPerView: 2,
			spaceBetween: 50,
		},
	},
	navigation: {
		nextEl: '.custom-next',
		prevEl: '.custom-prev',
	},
	pagination: {
		el: '.swiper-pagination',
	},
});


document.addEventListener('DOMContentLoaded', function() {
	const toggleButton = document.querySelector('.nav__toggle');
	const navMenu = document.querySelector('.nav__menu');
  
	toggleButton.addEventListener('click', function() {
	  toggleButton.classList.toggle('active'); 
	  navMenu.classList.toggle('active'); 
	});
  });


const tabsTitle = document.querySelectorAll('.tabs__title')
const tabsContent = document.querySelectorAll('.tabs__item')

tabsTitle.forEach(item =>
	item.addEventListener('click', event => {
		const tabsTitleTarget = event.target.getAttribute('data-tab')

		tabsTitle.forEach(Element => Element.classList.remove('active-tab'))

		tabsContent.forEach(Element => Element.classList.add('hidden-tabs-item'))

		item.classList.add('active-tab')

		document
			.getElementById(tabsTitleTarget)
			.classList.remove('hidden-tabs-item')
	})
)

if(document.querySelector(".services-page")){
    document.querySelector('[data-tab="tab-1"]').classList.add('active-tab')
    document.querySelector('#tab-1').classList.remove('hidden-tabs-item')
}


let acc = document.getElementsByClassName('accordion')

Array.from(acc).forEach(function (accordion) {
    accordion.addEventListener('click', function () {
        this.classList.toggle('active')
        let panel = this.nextElementSibling
        if (panel.style.display === 'block') {
            panel.style.display = 'none'
        } else {
            panel.style.display = 'block'
        }
    })
})


function dropdown() {
        const dropdown = document.getElementById("dropdown");
        const arrowDown = document.getElementById("arrowDown");
        const arrowUp = document.getElementById("arrowUp");

        dropdown.classList.toggle("show");

        if (dropdown.classList.contains("show")) {
            arrowDown.style.display = "none";
            arrowUp.style.display = "inline";
        } else {
            arrowDown.style.display = "inline";
            arrowUp.style.display = "none";
        }
    }

    // Функция для выбора и перехода на вкладку
    function selectTab(tabId, tabName) {
		const dropdownButton = document.getElementById('dropdownButton');
  dropdownButton.innerHTML = `${tabName} <img class="tabs__arrow drop-down" id="arrowDown" src="./assets/img/icons/arrow-downDrop.png" alt="Стрелка вниз" /><img class="tabs__arrow drop-up" id="arrowUp" src="./assets/img/icons/arrow-upDrop.png" alt="Стрелка вверх" style="display: none" />`;
  document.addEventListener("DOMContentLoaded", function() {
	const links = document.querySelectorAll('.tabs__drop-link');
	links.forEach(link => {
	  link.addEventListener('click', function() {
		const tabId = this.getAttribute('onclick').match(/'([^']+)'/)[1];
		const tabName = this.innerText; // Получаем текст выбранного пункта
		selectTab(tabId, tabName);
	  });
	});
  });
        // Скрыть все вкладки
        const allTabs = document.getElementsByClassName("tabs__item");
        for (let i = 0; i < allTabs.length; i++) {
            allTabs[i].classList.add("hidden-tabs-item");
        }

        // Показать выбранную вкладку
        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove("hidden-tabs-item");
        }

        // Закрыть дропдаун после выбора
        document.getElementById("dropdown").classList.remove("show");
        document.getElementById("arrowDown").style.display = "inline";
        document.getElementById("arrowUp").style.display = "none";
    }



    // Закрытие дропдауна при клике вне его области
    window.onclick = function (event) {
        if (!event.target.matches('.tabs__btn-drop') && !event.target.matches('.tabs__arrow')) {
            let dropdowns = document.getElementsByClassName("tabs__drop-content");
            for (let i = 0; i < dropdowns.length; i++) {
                let openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    document.getElementById("arrowDown").style.display = "inline";
                    document.getElementById("arrowUp").style.display = "none";
                }
            }
        }
    }

const callbackBtnFooter = document.querySelector('.copyright__phone')
  
callbackBtnFooter.addEventListener('click', function() {
    const callbackFooterForm = document.querySelector('.copyright__btn .call')

    document.body.classList.toggle('scroll-block')

    callbackFooterForm.classList.toggle('active')
});