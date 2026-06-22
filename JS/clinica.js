function openAuthModal(mode) {
    const modal = document.getElementById('authModal');
    const backdrop = document.querySelector('.backdropExample');
    const header = document.querySelector('header');
    
    modal.style.display = 'block';
    backdrop.style.filter = 'blur(10px)';
    if (header) {
        header.style.filter = 'blur(10px)'; 
    }
    
    if (mode === 'signup') {
        modal.classList.add('active');
    } else {
        modal.classList.remove('active');
    }
}

function closeEspec() {
    const modal = document.getElementById('authModal');
    const backdrop = document.querySelector('.backdropExample');
    const header = document.querySelector('header');
    
    modal.style.display = 'none';
    backdrop.style.filter = 'blur(0px)';
    if (header) {
        header.style.filter = 'blur(0px)';
    }
}


document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('authModal');
    const registerBtnOverlay = document.getElementById('registerBtnOverlay');
    const loginBtnOverlay = document.getElementById('loginBtnOverlay');
    
    // Seletores dos alternadores Mobile
    const switchToRegisterMobile = document.getElementById('switchToRegisterMobile');
    const switchToLoginMobile = document.getElementById('switchToLoginMobile');
    
    if (modal) {
        // Alternadores Versão Desktop
        if (registerBtnOverlay) {
            registerBtnOverlay.addEventListener('click', () => {
                modal.classList.add("active");
            });
        }
        if (loginBtnOverlay) {
            loginBtnOverlay.addEventListener('click', () => {
                modal.classList.remove("active");
            });
        }

        // Alternadores Versão Mobile
        if (switchToRegisterMobile) {
            switchToRegisterMobile.addEventListener('click', () => {
                modal.classList.add("active");
            });
        }
        if (switchToLoginMobile) {
            switchToLoginMobile.addEventListener('click', () => {
                modal.classList.remove("active");
            });
        }
    }
});
