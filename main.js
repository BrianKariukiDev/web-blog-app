const navItems=document.querySelector('.nav_items');
const openNavBtn=document.querySelector('#open_nav-btn');
const closeNavBtn=document.querySelector('#close_nav-btn');

const openNav=()=>{
    openNavBtn.style.display='none';
    closeNavBtn.style.display='block';
    navItems.style.display = 'flex';
}

openNavBtn.addEventListener('click',openNav);

const closeNav=()=>{
    navItems.style.display='none';
    openNavBtn.style.display='block';
    closeNavBtn.style.display='none';
}

closeNavBtn.addEventListener('click',closeNav);