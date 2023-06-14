document.getElementById('txt_nama').onkeyup = function(){
    // misal 
    let nama = document.getElementById('txt_nama').value;
    let nama2 = nama.toUpperCase();
    document.getElementById('txt_nama').value = nama2;
}

document.getElementById('txt_pasw2').onchange = function(){
    let pass1 = document.getElementById('txt_pasw').value;
    let pass2 = document.getElementById('txt_pasw2').value;
    if(pass1 === pass2){
        alert('Password sama');
        document.getElementById('btn_simpanuser').disabled = false;
    }else{
        alert('Pass Tidak Sama');
        document.getElementById('btn_simpanuser').disabled = true;
    }
}