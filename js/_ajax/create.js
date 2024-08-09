
function sendRequest(locationHref){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', locationHref , true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('resultadoAjax').innerHTML = xhr.responseText;
            document.getElementById('btnCerrar').style.display = 'block';
        }   
    }
    xhr.send();
}
function closeContent (){
    document.getElementById('resultadoAjax').innerHTML = '';
    document.getElementById('btnCerrar').style.display = 'none';
}