(function(){
    const horas = document.querySelector('#horas');

    if(horas) {
        let busqueda = {
            categoria_id: '',
            dia: ''
        }

        const categoria = document.querySelector('[name="categoria_id"]');
        const dias = document.querySelectorAll('[name="dia"]');
        const inputHiddenDia = document.querySelector('[name="dia_id"]');
        const inputHiddenHora = document.querySelector('[name="hora_id"]');

        categoria.addEventListener('change', terminoBusqueda);
        dias.forEach(dia => dia.addEventListener('change', terminoBusqueda));

        function terminoBusqueda(e) {
            busqueda[e.target.name] = e.target.value;

            if(Object.values(busqueda).includes('')) {
                return;
            }

            buscarEventos();
        }

       async function buscarEventos() {
            const { dia, categoria_id } = busqueda;
            const url = `/api/eventos-horarios?dia_id=${dia}&categoria_id=${categoria_id}`;

            const resultado = await fetch(url);
            const eventos = await resultado.json();

            obtenerHorasDisponibles();
        }

        function obtenerHorasDisponibles() {
            const horasDisponibles = document.querySelectorAll('#hora li');
            horasDisponibles.forEach(hora => hora.addEventListener('click', seleccionarHora));
        }

        function seleccionarHora(e) {
            inputHiddenHora.value = e.target.dataset.horaId;
        }
    }
})();