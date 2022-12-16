var btn_close = document.getElementById('btn_close_join');
var btn_close1 = document.getElementById('btn_close_sign');
let input_data = document.getElementsByTagName('input')
function close(){
    for(i=0;i<input_data.length;i++){
        let input = document.getElementsByTagName('input')[i]
        input.value = ''
    }
}
btn_close.addEventListener('click',function(){close()})
btn_close1.addEventListener('click',function(){close()})


