/**
 * trackingStates.js — Crustáceos SAS
 * Estados de rastreo y mensajes del domiciliario
 */

export const trackingSteps = [
  {
    id: 'recolectada',
    title: 'Recolectada del arrecife',
    icon: '🪸',
    description: 'Su crustáceo fue localizado y recolectado del arrecife con cuidado artesanal.',
    time: 'Hace 2 horas'
  },
  {
    id: 'auditoria',
    title: 'En auditoría de frescura',
    icon: '🔍',
    description: 'Betty la Langosta está verificando que cumple los estándares de calidad documental.',
    time: 'Hace 1 hora 30 min'
  },
  {
    id: 'capacitacion',
    title: 'En capacitación de servicio al cliente',
    icon: '📋',
    description: 'Su crustáceo está recibiendo una charla motivacional antes de salir.',
    time: 'Hace 1 hora'
  },
  {
    id: 'domiciliario',
    title: 'Subida al domiciliario',
    icon: '🚚',
    description: 'El crustáceo fue asignado a un domiciliario con experiencia en entregas marítimas.',
    time: 'Hace 45 min'
  },
  {
    id: 'discutiendo',
    title: 'Discutiendo con logística',
    icon: '🗣️',
    description: 'Hay un desacuerdo menor entre la langosta y el departamento de rutas.',
    time: 'Hace 20 min'
  },
  {
    id: 'en-camino',
    title: 'En camino a su mesa',
    icon: '🏃',
    description: 'Su pedido va en camino. Tiempo estimado: depende de la marea.',
    time: 'Hace 5 min'
  }
];

export const trackingMessages = [
  'Su langosta está discutiendo con logística. Tiempo estimado: depende de la marea.',
  'Su camarón fue recibido por fax, pero está en cola de impresión.',
  'El domiciliario reporta que la langosta tomó el control de la ruta.',
  'El pedido presenta comportamiento sospechoso, pero todavía es legalmente entregable.',
  'El crustáceo reporta que necesita un momento emocional antes de llegar.',
  'Nuestro sistema detecta que su langosta se detuvo a tomar café.',
  'El camarón está en auditoría de frescura. Betty lo está evaluando con lupa.',
  'La langosta solicitó un cambio de ruta por razones personales.',
  'El pedido fue visto por última vez discutiendo con un cangrejo de soporte.',
  'Su crustáceo está técnicamente en camino, pero emocionalmente lejos.'
];

export const sampleCodes = ['LNG-404-PINZA', 'CMR-FAX-1998', 'CRB-SOPORTE-007'];
