/**
 * contacto.js — Crustáceos SAS
 * Lógica del formulario de contacto
 */

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contacto-form');
  const result = document.getElementById('contacto-result');

  if (!form || !result) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    const nombre = form.querySelector('#contacto-nombre').value.trim();
    
    const messages = [
      `Solicitud recibida, ${nombre}. Un crustáceo autorizado revisará su caso.`,
      `Gracias por contactarnos, ${nombre}. Su solicitud fue asignada al departamento correspondiente del arrecife.`,
      `Mensaje recibido. Nuestro algoritmo recomienda: más camarón. Mientras tanto, procesamos su solicitud.`,
      `Su caso fue registrado, ${nombre}. El comité ejecutivo del arrecife lo revisará entre mareas.`
    ];

    const msg = messages[Math.floor(Math.random() * messages.length)];

    result.innerHTML = `
      <div class="alert alert--success">
        <span class="alert__icon">✅</span>
        <div>
          <strong>¡Solicitud enviada!</strong>
          <p style="margin: var(--space-2) 0 0;">${msg}</p>
        </div>
      </div>
    `;

    result.scrollIntoView({ behavior: 'smooth', block: 'center' });
    form.reset();
  });
});
