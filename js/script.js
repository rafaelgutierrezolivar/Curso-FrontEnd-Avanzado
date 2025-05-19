function showContent(section) {
    // Ocultar la sección inicial
    document.getElementById('inicio-default').style.display = 'none';

    // Ocultar todas las demás secciones
    document.querySelectorAll('.content').forEach(content => {
        content.classList.add('hidden');
    });

    // Mostrar la sección seleccionada
    document.getElementById(section).classList.remove('hidden');
}