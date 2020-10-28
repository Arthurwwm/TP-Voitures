const openNav = document.getElementById('openMenu');
const menuDeroulant = document.getElementById('liensNav');
openNav.addEventListener('click',function(){
    if(menuDeroulant.classList.contains('toggled')){
        menuDeroulant.setAttribute('style', 'display:none');
        menuDeroulant.classList.remove('toggled');
    }else {
        menuDeroulant.setAttribute('style', 'display:flex');
        menuDeroulant.classList.add('toggled');
    }
})