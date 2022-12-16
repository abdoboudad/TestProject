var btn_click = document.getElementById('click_window');
let warning = document.getElementsByClassName('text-danger')
var btn_close = document.getElementById('btn_close_join');

btn_click.click()
/*let link = 'http://localhost/test2/'
let file = "index.php"
location.assign(link+btoa(file))*/


btn_close.addEventListener('click',()=>{
    location.assign('http://localhost/test2/')
})
window.onscroll = function(){
    if(scrollY > 0.1){
        location.assign('http://localhost/test2/')
    }
}


