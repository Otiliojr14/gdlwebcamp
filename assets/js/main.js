(() => {

    "use strict";

    const regalo = document.querySelector('#regalo');

    const er = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    // Esperando a que la página este lista
    document.addEventListener('DOMContentLoaded', () => {
        
        // Campos datos usuario
        const nombreUser = document.querySelector('#name');
        const lastNameUser = document.querySelector('#last_name');
        const mailUser = document.querySelector('#mail');

        // Campos pases
        const pase_dia = document.querySelector('#pase_dia');
        const pase_completo = document.querySelector('#pase_completo');
        const pase_dosdias = document.querySelector('#pase_dosdias');

        // Botones y divs
        const calcular = document.querySelector('#calcular');
        const botonRegistro = document.querySelector('#btnRegistro');
        const listaProductos = document.querySelector('#lista-productos');
        const suma = document.querySelector('#suma-total');

        // Extras

        const camisas = document.querySelector('#camisa_evento');
        const etiquetas = document.querySelector('#etiquetas');

        calcular.addEventListener('click', calcularMontos);

        pase_dia.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);

        nombreUser.addEventListener('blur', validarFormulario);
        lastNameUser.addEventListener('blur', validarFormulario);
        mailUser.addEventListener('blur', validarFormulario);

        function validarFormulario(e) {
            const campo = e.target.parentElement;
            const errorDiv = campo.querySelector('.error');

            if (e.target.value === '') {                
                e.target.style.border = '1px solid red';
                errorDiv.innerHTML = 'Este campo es obligatorio';
                errorDiv.style.display = 'block';
            } else {
                errorDiv.style.display = 'none';
                e.target.style.border = '1px solid green';

                if (e.target.type === 'email') {
                    if (er.test( e.target.value )) {
                        errorDiv.style.display = 'none';
                        e.target.style.border = '1px solid green';
                    } else {
                        e.target.style.border = '1px solid red';
                        errorDiv.innerHTML = 'Este email es inválido';
                        errorDiv.style.display = 'block';
                    }
                }
            }

            
        }
        

        function calcularMontos(e) {
            e.preventDefault();

            if(regalo.value === '') {
                alert("Debes elegir un regalo");
                regalo.focus();
            } else {
                const boletoDia = parseInt(pase_dia.value, 10) || 0;
                const boleto2Dias = parseInt(pase_dosdias.value, 10) || 0;
                const boletoCompleto = parseInt(pase_completo.value, 10) || 0;

                const cantCamisas = parseInt(camisas.value, 10) || 0;
                const cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

                const totalPagar = (boletoDia * 30) + (boletoCompleto * 50) + (boleto2Dias * 45) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

                const listadoProductos = [];

                if (boletoDia >= 1) {
                    listadoProductos.push(`${boletoDia} Pases por día`);
                }

                if (boleto2Dias >= 1) {
                    listadoProductos.push(`${boleto2Dias} Pases por 2 días`);
                }

                if (boletoCompleto >= 1) {
                    listadoProductos.push(`${boletoCompleto} Pases Completos`);
                }

                if (cantCamisas >= 1) {
                    listadoProductos.push(`${cantCamisas} Camisas`);
                }

                if (cantEtiquetas >= 1) {
                    listadoProductos.push(`${cantEtiquetas} Etiquetas`);
                }

                listaProductos.innerHTML = '';

                listaProductos.style.display = 'block';

                listadoProductos.forEach(producto => {
                    const row = document.createElement('p');
                    row.innerHTML = `${producto} `;
                    listaProductos.appendChild(row);
                });

                suma.innerHTML = `$${totalPagar.toFixed(2)}`;

            }
        }

        function mostrarDias() {
            const boletoDia = parseInt(pase_dia.value, 10) || 0;
            const boleto2Dias = parseInt(pase_dosdias.value, 10) || 0;
            const boletoCompleto = parseInt(pase_completo.value, 10) || 0;

            const dias = ['viernes', 'sabado', 'domingo'];

            const diasElegidos = [];

            dias.forEach(dia => {
                document.querySelector(`#${dia}`).style.display = 'none';
            });

            if (boletoDia > 0) {
                diasElegidos.push('viernes');
            }
            if (boleto2Dias > 0) {
                diasElegidos.push('viernes', 'sabado');
            }
            if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            diasElegidos.forEach(dia => {
                document.querySelector(`#${dia}`).style.display = 'block';
            });
        }
    });
})();

$(function () {

    $('.header-title h1').lettering();

    $('.menu-movil').on('click', function () {
        $('.bar-navegacion').slideToggle();
    });

    $('#talleres').show();
    $('.programa__nav a').on('click', function () {
        $('.programa__nav a').removeClass('activo');
        $(this).addClass('activo');
        $('.ocultar').hide();
        const enlace = $(this).attr('href');
        $(enlace).fadeIn();

        return false;
    });

    $('.contador__content article:nth-child(1) h1').animateNumber({ number: 6 }, 1200);
    $('.contador__content article:nth-child(2) h1').animateNumber({ number: 15 }, 1200);
    $('.contador__content article:nth-child(3) h1').animateNumber({ number: 3 }, 1500);
    $('.contador__content article:nth-child(4) h1').animateNumber({ number: 9 }, 1500);

    $(".tiempo__content").countdown("2022/12/10 09:00:00", function(event) {
      $('#dias').html(event.strftime('%D')); 
      $('#horas').html(event.strftime('%H')); 
      $('#minutos').html(event.strftime('%M')); 
      $('#segundos').html(event.strftime('%S')); 
    });
    
});