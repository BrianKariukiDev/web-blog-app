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



const sidebar= document.querySelector('aside');
const showSidebarBtn= document.querySelector('#show_sidebar-btn');
const hideSidebarBtn= document.querySelector('#hide_sidebar-btn');

const showSidebar=()=> {
    sidebar.style.left = '0';
    showSidebarBtn.style.display= 'none';
    hideSidebarBtn.style.display='block';
}

const hideSidebar=()=> {
    sidebar.style.left = '-100%';
    showSidebarBtn.style.display='block';
    hideSidebarBtn.style.display='none';
}

showSidebarBtn.addEventListener('click',showSidebar);
hideSidebarBtn.addEventListener('click',hideSidebar);