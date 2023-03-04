//ambil element
var keyword=document.getElementById('keyword');
var cari=document.getElementById('cari');
var container1=document.getElementById('container1');


keyword.addEventListener('keyup',function () {  
    // buat object ajax
    var xhr =new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange=function () {
        if(xhr.readyState == 4 && xhr.status== 200){
            container1.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('get', 'cari.php?keyword=' + keyword.value, true);
    xhr.send();
});