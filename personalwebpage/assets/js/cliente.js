function saludar() {
    console.log('Diseño Web 1')
    //alert('Diseño Web 1')
    console.log(document);
    console.log(document.getElementById('parrafo1').innerHTML);
    console.log(document.getElementById('parrafo1').getAttribute('style'));
}

function cambiarParrafo2() {
    document.getElementById('parrafo2').innerHTML="UNAM! FES Aragón! ICO!";
    document.getElementById('parrafo3').innerHTML="";
}

function cambiarFondoBody() {
    const colores = ['#FFFFFF', '#000000', '#FF71CE', '#01CDFE', '#05FFA1', '#B967FF', '#FFFB96', '#FF00FF',
        '#F72585', '#7209B7', '#4361EE', '#4CC9F0', '#F3C4FB', '#D4A5A5', '#FFD6E8', '#A0E7E5', '#FFAEBC' ];
    const colorAlea = colores[Math.floor(Math.random() * colores.length)];
    console.log(colorAlea);
    document.getElementById('cuerpo').style.backgroundColor = colorAlea;
}