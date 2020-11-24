function provjera() {
    var password=document.getElementById('password').value;
    if(password.length<6)
    {
        alert("Sifra mora biti veca od 6 znakova!!!!");
    }

}
window.onload = function (ev) {
    divTabela=document.getElementById("tabela");
    ucitajTabelu(0);
};
function ucitajTabelu(godina) {
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function (ev) {
        if(this.status==200 && this.readyState==4)
        {
           divTabela.innerHTML = this.responseText;
        }

    };
    xml.open("GET","ocjene.php?year="+godina);
    xml.send();

}
function ucitajNovuTabelu(selectlista) {
    ucitajTabelu(selectlista.value);

}