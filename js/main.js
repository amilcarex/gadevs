
(function () {
    "use strict";


    





    document.addEventListener('DOMContentLoaded', function () {

        var map = L.map('mapa').setView([10.148812, -64.677774], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([10.148812, -64.677774]).addTo(map)
            .bindPopup('GA Devs. 2021')
            .openPopup()
            
        
        if (document.querySelector('.fallo')){
            let fallo = document.querySelector('.fallo');
            setTimeout(function(){
                fallo.remove();
            }, 8000);
        }

        eventListeners();
        pagRegistro();

    });

    //Datos Usuario
function pagRegistro(){
if(document.getElementById('error')){
    const nombre = document.getElementById('nombre');
    const apellido = document.getElementById('apellido')
    const email = document.getElementById('email')


    //Campos Pases

    let pase_dia = document.getElementById('pase_dia');
    let pase_dosdias = document.getElementById('pase_dosdias');
    let pase_completo = document.getElementById('pase_completo');


    //Botones y Divs


    const errorDiv = document.getElementById('error');
    const botonRegistro = document.getElementById('btnRegistro');

    var regalo = document.getElementById('regalo');

    //Extras

    let etiquetas = document.getElementById('etiquetas');
    let camisas = document.getElementById('camisa-evento');
    nombre.addEventListener('input', verificarDatos);
    apellido.addEventListener('input', verificarDatos);
    email.addEventListener('input', verificarDatos);
    nombre.addEventListener('blur', verificarDatos);
    apellido.addEventListener('blur', verificarDatos);
    email.addEventListener('blur', verificarDatos);
    const calcular = document.getElementById('calcular');





    calcular.addEventListener('click', calcularMontos);

    pase_dia.addEventListener('input', mostrarDias);
    pase_dosdias.addEventListener('input', mostrarDias);
    pase_completo.addEventListener('input', mostrarDias);


    botonRegistro.disabled = true;
    function verificarDatos() {

        const errores = document.createElement('DIV')

        if (nombre.value == "" || apellido.value == "" || email.value == "") {
            const datoError = document.createElement('P');
            datoError.textContent = 'Todos los Campos son Obligatorios.';

            datoError.classList.add('error');

            errores.appendChild(datoError);
            
        }
        if (email.value.indexOf("@") == -1) {
            const datoError = document.createElement('P');
            datoError.textContent = 'Debe ser un Correo Válido';

            datoError.classList.add('error');

            errores.appendChild(datoError);
        }

        if (!nombre.value == "" || !apellido.value == "" || !email.value == ""){
            
        }


        while (errorDiv.firstChild) {
            errorDiv.removeChild(errorDiv.firstChild);

        }
        
        errorDiv.append(errores);
    }


    



    function calcularMontos(e) {
        e.preventDefault();
        

        
        const errores = document.createElement('DIV')
    
        if (nombre.value == "" || apellido.value == "" || email.value == "") {
            const datoError = document.createElement('P');
            datoError.textContent = 'Todos los Campos son Obligatorios.';

            datoError.classList.add('error');

            errores.appendChild(datoError);
            
            
        }
        if (email.value.indexOf("@") == -1) {
            const datoError = document.createElement('P');
            datoError.textContent = 'Debe ser un Correo Válido';

            datoError.classList.add('error');

            errores.appendChild(datoError);
        }

      


        while (errorDiv.firstChild) {
            errorDiv.removeChild(errorDiv.firstChild);

        }

        errorDiv.append(errores);

        if(document.querySelector('.error')){
            nombre.focus();
            return;
        }


        if (!regalo.value) {
            alert('Debes Elegir un Regalo');
            regalo.focus();
        } else {
            let boletoDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                boletoCompleto = parseInt(pase_completo.value, 10) || 0,
                cantCamisas = parseInt(camisas.value, 10) || 0,
                cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

            let totalPagar = (boletoDia * 30) + (boletos2Dias * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

            const montoTotal = document.createElement('P');
            montoTotal.classList.add('monto-total');
            montoTotal.textContent = `$ ${totalPagar}`;


            const productosDiv = document.createElement('DIV');
            productosDiv.classList.add('divProductos');
            const totalDiv = document.createElement('DIV');
            totalDiv.classList.add('totalDiv');
            totalDiv.appendChild(montoTotal);



            if (boletoDia >= 1) {

                const porDia = document.createElement('P');
                porDia.textContent = `Pases por 1 Día: ${boletoDia}`;
                porDia.classList.add('producto');
                productosDiv.appendChild(porDia);

            }
            if (boletos2Dias >= 1) {

                const por2Dias = document.createElement('P');
                por2Dias.textContent = `Pases por 2 Día: ${boletos2Dias}`;
                por2Dias.classList.add('producto');
                productosDiv.appendChild(por2Dias);


            }

            if (boletoCompleto >= 1) {


                const completo = document.createElement('P');
                completo.textContent = `Pases Completos ${boletoCompleto}`;
                completo.classList.add('producto');
                productosDiv.appendChild(completo);


            }
            if (cantCamisas >= 1) {


                const camisa = document.createElement('P');
                camisa.textContent = `Camisas: ${cantCamisas}`;
                camisa.classList.add('producto');
                productosDiv.appendChild(camisa);


            }
            if (cantEtiquetas >= 1) {

                const etiqueta = document.createElement('P');
                etiqueta.textContent = `Etiquetas: ${cantEtiquetas}`;
                etiqueta.classList.add('producto');
                productosDiv.appendChild(etiqueta);
            }


            const lista_productos = document.querySelector('.lista-productos');
            const suma = document.querySelector('.suma-total');

            while (lista_productos.firstChild) {
                lista_productos.removeChild(lista_productos.firstChild);
            }
            while (suma.firstChild) {
                suma.removeChild(suma.firstChild);
            }

            document.querySelector('.lista-productos').appendChild(productosDiv);
            document.querySelector('.suma-total').appendChild(totalDiv);
           
            botonRegistro.disabled = false;
            document.querySelector('#total_pedido').value = totalPagar;




        }
    }

    function mostrarDias() {


        let boletoDia = parseInt(pase_dia.value, 10) || 0,
            boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
            boletoCompleto = parseInt(pase_completo.value, 10) || 0;



        const viernes = document.querySelector('#viernes');
        const sabado = document.querySelector('#sabado');
        const domingo = document.querySelector('#domingo');


        if (boletoDia > 0) {

            viernes.classList.replace("none", "grid");
        }
        if (boletos2Dias > 0) {
            viernes.classList.replace("none", "grid");
            sabado.classList.replace("none", "grid");
        }
        if (boletoCompleto > 0) {
            viernes.classList.replace("none", "grid");
            sabado.classList.replace("none", "grid");
            domingo.classList.replace("none", "grid");
        }

        if (boletoDia == 0 && boletos2Dias == 0 && boletoCompleto == 0) {
            if (!viernes.classList.contains('none')) {
                viernes.classList.replace("grid", "none");
            }
            if (!sabado.classList.contains('none')) {
                sabado.classList.replace("grid", "none");
            }
            if (!domingo.classList.contains('none')) {
                domingo.classList.replace("grid", "none");
            }
        }
        if (boletoDia > 0 && boletos2Dias == 0 && boletoCompleto == 0) {
            
            if (!sabado.classList.contains('none')) {
                sabado.classList.replace("grid", "none");
            }
            if (!domingo.classList.contains('none')) {
                domingo.classList.replace("grid", "none");
            }
        }
        if (boletoDia == 0 && boletos2Dias > 0 && boletoCompleto == 0) {
        
            if (!domingo.classList.contains('none')) {
                domingo.classList.replace("grid", "none");
            }
        }

    }

    }
}



    function eventListeners() {
        const mobileMenu = document.querySelector('.menu-movil');
       

        mobileMenu.addEventListener('click', navegacionResponsive);
        
   
    }

   

    function navegacionResponsive() {
        const navegacion = document.querySelector('.navegacion-principal');

        navegacion.classList.toggle('visible');
    }
})();


$(function(){
    //Programa de Conferencias
    $('.programa-evento .info-curso:first').show();
    $('.menu-programa a:first').addClass('activo');

    $('.menu-programa a').on('click', function(){
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $('.none').hide();
        let enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    $('body.conferencia .navegacion-principal a:contains("Conferencia")').addClass('activo');
    $('body.invitados .navegacion-principal a:contains("Invitados")').addClass('activo');
    $('body.calendario .navegacion-principal a:contains("Calendario")').addClass('activo');
    //Lethering 
    $('.nombre-sitio').lettering();


    //Menú Fijo
    let windowHeight = $(window).height();
    let barraAltura = $('.barra').innerHeight();

    $(window).scroll(function(){
        let scroll = $(window).scrollTop();
        if(scroll > windowHeight){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':barraAltura+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top':'0px'});
        }


    });


    //Animaciones para los Números
    let resumenLista = jQuery('.resumen-evento');
    if(resumenLista.length > 0){
        $('.resumen-evento').waypoint(function(){
            $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 2000);
            $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 2000);
            $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500);
            $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500);

        }, {
            offset:'60%',
        });
    }
   
    //Conteo Regresivo de fecha

    $('.cuenta-regresiva').countdown('2021/12/10 09:00:00', function(e){
        $('#dias').html(e.strftime('%D'));
        $('#horas').html(e.strftime('%H'));
        $('#minutos').html(e.strftime('%M'));
        $('#segundos').html(e.strftime('%S'));
    });



    //Color Box



    if (document.querySelector('.invitado-info')){
    $('.invitado-info').colorbox({inline:true, width:"50%"});
    }
});